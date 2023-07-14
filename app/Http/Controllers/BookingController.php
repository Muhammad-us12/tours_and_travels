<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\Packages\Package;
use App\Models\Activities\Activities;
use App\Models\BookingCustomers;
use App\Models\CustomerLedger;
use App\Models\PackagesBooking;
use App\Models\payment_request;
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

        if($request->booking_type == 'activity'){
            $activity_data = Activities::find($request->activtiy_id);
            if($activity_data){
                $cart_data = [
                    'booking_type' => 'Activity',
                    'package_id' => $activity_data->id,
                    'package_title' => $activity_data->activity_title,
                    'adult_cost' => $activity_data->adult_cost_price,
                    'adult_sale' => $activity_data->adult_sale_price,
                    'child_cost' => $activity_data->child_cost_price,
                    'child_sale' => $activity_data->child_sale_price,
                    'start_date' => $activity_data->start_date,
                    'end_date' => $activity_data->end_date,
                    'customer_select_date' => $request->activity_select_date,
                    'booking_adults' => $request->adults,
                    'booking_childs' => $request->childs,
                    'adults_total_price' => $request->adults * $activity_data->adult_sale_price,
                    'childs_total_price' => $request->childs * $activity_data->child_sale_price,
                    'grand_total' => ($request->adults * $activity_data->adult_sale_price) + ($request->childs * $activity_data->child_sale_price),
                ];

                Session::put('cart_data',$cart_data);

                return redirect('checkout');
            }else{
                return redirect()->back()->with(['error'=> 'Something Went Wrong Try Again']);
            }
        }

    }
    
    public function checkout(){
        // echo "This is checkout ";
        if(Session::has('cart_data')){
            $cart_data = Session::get('cart_data');
            $countriesList = \DB::table('country')->select('id','name')->get();
            if($cart_data['booking_type'] == 'Package'){
                $package_details = Package::find($cart_data['package_id']);
                return view('website/checkout',compact('package_details','countriesList'));
            }

            if($cart_data['booking_type'] == 'Activity'){
                $activity_data = Activities::find($cart_data['package_id']);
                return view('website/checkout',compact('activity_data','countriesList'));
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
            $customer_Data->phone = $request->lead_phone;
            $customer_Data->address = $request->lead_address;
            $customer_Data->country = $request->lead_country;
            $customer_Data->zip = $request->lead_zip;
            $customer_Data->gender = $request->lead_gender;
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

                $lead_passenger_data = (Object)[
                    'passenger_name' => $request->lead_name,
                    'lead_email' => $request->lead_email,
                    'lead_phone' => $request->lead_phone,
                    'lead_address' => $request->lead_address,
                    'lead_country' => $request->lead_country,
                    'lead_zip' => $request->lead_zip,
                    'lead_gender' => $request->lead_gender,
                ];

                $other_adults = [];
                foreach($request->title as $index => $title_res){
                    $gender = 'male';
                    if($title_res == 'Mrs'){
                        $gender = 'female';
                    }
                    $other_adults[] = (Object)[
                        'name' => $request->other_adults_name[$index],
                        'gender' =>$gender
                    ];
                }

                $childs_data = [];
                foreach($request->title_childs as $index => $title_res){
                    $gender = 'male';
                    if($title_res == 'Mrs'){
                        $gender = 'female';
                    }
                    $childs_data[] = (Object)[
                        'name' => $request->other_childs_name[$index],
                        'gender' =>$gender
                    ];
                }

                PackagesBooking::insert([
                    'customer_name' => $request->lead_name,
                    'customer_id' => $customer_Data->id,
                    'package_id' => $cart_data['package_id'],
                    'invoice_no' => $uniqueNumber,
                    'adults' => $cart_data['booking_adults'],
                    'childs' => $cart_data['booking_childs'],
                    'lead_passenger_data' => json_encode($lead_passenger_data),
                    'other_adults_data' => json_encode($other_adults),
                    'childs_data' => json_encode($childs_data),
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
            $url = 'https://bbtourism.com/'; // Replace with your website URL or desired link

            $qrCode = QrCode::size(250)->generate($url);
            

            return view('website/invoice',compact('invoice_data','qrCode'));
        }else{
            return redirect('/')->with(['error'=>'Invoice No Not Found']);;
        }
        
    }

    public function payment_request_submit(Request $request){
        if(Session::has('customer_data')){
            $customer_Data = Session::get('customer_data');

            $payment_object =  new payment_request;
            $payment_object->payment_amount = $request->payment_amount;
            $payment_object->transcation_id = $request->transcation_id;
            $payment_object->payment_method = $request->payment_method;
            $payment_object->invoice_no = $request->invoice_no;
            $payment_object->payment_date = $request->payment_date;
            $payment_object->status = 'Pending';
            $payment_object->customer_id = $customer_Data->id;

            if($request->file('payment_pic')){
                    
                $img_file = $request->file('payment_pic');
                $name_gen = hexdec(uniqid());
                $img_ext = strtolower($img_file->getClientOriginalExtension());
                $img_name = $name_gen.".".$img_ext;
                $upload = 'public/images/payment_requests';
                $file_upload = $img_file->move($upload,$img_name);
                if($file_upload){
                    $payment_object->payment_pic = $img_name;
                    $result = $payment_object->save();
                    if($result){
                        return redirect()->back()->with(['success'=>'Upload Successfully']);
                    }else{
                        return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
                    }
                }else{
                    return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
                }
            }else{
                return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
            }

        }
        // 
    }
}
