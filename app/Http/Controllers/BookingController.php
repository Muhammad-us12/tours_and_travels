<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages\Package;
use App\Models\BookingCustomers;
use App\Models\CustomerLedger;
use App\Models\PackagesBooking;
use Session;
use DB;
use Str;

class BookingController extends Controller
{
    //
    function add_to_cart(Request $request){
        if($request->booking_type == 'package'){
            $package_data = Package::find($request->package_id);
            if($package_data){
                $cart_data = [
                    'booking_type' => 'Package',
                    'package_id' => $package_data->id,
                    'package_title' => $package_data->package_title,
                    'adult_cost' => $package_data->adult_cost_price,
                    'adult_sale' => $package_data->adult_sale_price,
                    'child_cost' => $package_data->child_cost_price,
                    'child_sale' => $package_data->child_sale_price,
                    'start_date' => $package_data->start_date,
                    'end_date' => $package_data->end_date,
                    'booking_adults' => $request->adults,
                    'booking_childs' => $request->childs,
                    'adults_total_price' => $request->adults * $package_data->adult_sale_price,
                    'childs_total_price' => $request->childs * $package_data->child_sale_price,
                    'grand_total' => ($request->adults * $package_data->adult_sale_price) + ($request->childs * $package_data->child_sale_price),
                ];

                Session::put('cart_data',$cart_data);

                return redirect('checkout');
            }else{
                return redirect()->back()->with(['error'=> 'Something Went Wrong Try Again']);
            }
        }
    }
    
    public function checkout(){
        if(Session::has('cart_data')){
            $cart_data = Session::get('cart_data');
            $countriesList = \DB::table('country')->select('id','name')->get();
            if($cart_data['booking_type'] == 'Package'){
                $package_details = Package::find($cart_data['package_id']);
                return view('website/checkout',compact('package_details','countriesList'));
            }
            
        }else{
            return redirect('/');
        }
    }

    public function confirm_booking(Request $request){
        // print_r($request->all());
        // die;
        $customer_Data = BookingCustomers::where('email', $request->lead_email)->first();
        $new_customer = false;
        if(!$customer_Data){
            $customer_Data = new BookingCustomers;
            $customer_Data->customer_name = $request->lead_name;
            $customer_Data->balance = 0;
            $customer_Data->email = $request->lead_email;
            $customer_Data->phone = $request->lead_name;
            $customer_Data->address = $request->lead_name;
            $customer_Data->country = $request->lead_name;
            $customer_Data->zip = $request->lead_name;
            $customer_Data->gender = $request->lead_name;
            $new_customer = true;
        }

        try {

            $uniqueNumber = DB::transaction(function() use($request,$new_customer,$customer_Data){
                if($new_customer){
                    $result = $customer_Data->save();
                }

                $uniqueNumber = mt_rand(100000, 999999); // Generates a random number of 6 digits

                // Ensure the generated number is unique
                while (PackagesBooking::where('invoice_no', $uniqueNumber)->exists()) {
                    $uniqueNumber = mt_rand(100000, 999999);;
                }

                $cart_data = Session::get('cart_data');

                PackagesBooking::insert([
                    'customer_name' => $request->lead_name,
                    'customer_id' => $customer_Data->id,
                    'package_id' => $cart_data['package_id'],
                    'invoice_no' => $uniqueNumber,
                    'adults' => $cart_data['booking_adults'],
                    'childs' => $cart_data['booking_childs'],
                    'total_price' => $cart_data['grand_total'],
                    'cart_data' => json_encode($cart_data),
                ]);

                $customer_data = BookingCustomers::find($customer_Data->id);

                $customer_updated_balance = $customer_data->balance + $cart_data['grand_total'];

                BookingCustomers::find($customer_Data->id)->update([
                    'balance' => $customer_updated_balance
                ]);

                CustomerLedger::insert([
                    'customer_id' => $customer_Data->id,
                    'recevied' => $cart_data['grand_total'],
                    'balance' => $customer_updated_balance,
                    'invoice_id' => $uniqueNumber,
                ]);

                return $uniqueNumber;

            });

            return redirect('invoice/'.$uniqueNumber.'')->with(['success'=>'Client is Added Successfully']);

        } catch (\PDOException $e) {
            // Woopsy

            DB::rollBack();
            // echo $e;
            return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
        }



    }

    public function invoice($id){
        $invoice_data = PackagesBooking::where('invoice_no',$id)->first();
        if($invoice_data){
            // dd($invoice_data);
            return view('website/invoice',compact('invoice_data'));
        }else{
            return redirect('/')->with(['error'=>'Invoice No Not Found']);;
        }
        
    }
}
