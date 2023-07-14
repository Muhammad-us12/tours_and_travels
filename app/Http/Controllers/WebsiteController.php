<?php

namespace App\Http\Controllers;

use App\Models\Destinationstio;
use App\Models\Packages\Package;
use App\Models\Activities\Activities;
use App\Models\Reviews;
use App\Models\website\Blogs;
use App\Models\BookingCustomers;
use App\Models\PackagesBooking;
use App\Models\payment_request;
use Str;
use Hash;
use Session;



use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index(){
        $top_destinations = Destinationstio::where('display_on_web','1')
                                ->orderBy('dest_order','asc')
                                ->limit(6)
                                ->get();

        $all_destinations  = Destinationstio::all();

        $top_packages = Package::orderBy('id','desc')
                            ->limit(8)
                            ->get();

        $top_activities = Activities::orderBy('id','desc')
                            ->limit(4)
                            ->get();

        $last_reviews = Reviews::orderBy('id','desc')
                            ->limit(4)
                            ->get();

        $last_blogs = Blogs::orderBy('id','desc')
                            ->where('status','publish')
                            ->limit(4)
                            ->get();

        return view('index',compact('top_destinations',
            'all_destinations','top_packages','top_activities','last_reviews','last_blogs'));
    }

    public function packages_list(Request $request){

        // dd($request->all());
        if ($request->method() === 'GET') {
            $all_packages = Package::orderBy('created_at','desc')
            ->select('id','package_title','feacture_img','baaner_img','start_date','end_date','group_size','destination',
                    'adult_sale_price','stars_rating','country','duration')
            ->paginate(10);

        } elseif ($request->method() === 'POST') {
            $all_packages = Package::where('destination',$request->destination)
                            ->whereDate('start_date', '>', $request->start_date)
                            ->orderBy('created_at','desc')
                            ->select('id','package_title','feacture_img','baaner_img','start_date','end_date','group_size','destination',
                                    'adult_sale_price','stars_rating','country','duration')
                            ->paginate(10);
        }
       

        return view('website/packages_list',compact('all_packages')); 
    }

    public function customer_login(){
        return view('website/login'); 
    }

    public function email_submit(Request $request){
        $customer_data = BookingCustomers::where('email',$request->email)->first();
        if($customer_data){
            $otp = Str::random(6);
            $hashedOTP = Hash::make($otp);
            BookingCustomers::where('id',$customer_data->id)->update([
                'password' => $hashedOTP
            ]);

            Session::put('customer_email',$request->email);

            return redirect('otp_verify')->with(["success"=>"OPT has Send to your email $otp"]);
            // dd($customer_data);
        }else{
            return redirect()->back()->with(['error'=>'Your Email not Found']);
        }
    }

    public function otp_submit(Request $request){
        $customer_email = Session::get('customer_email');
        $customer_data = BookingCustomers::where('email',$customer_email)->first();
        if($customer_data){
            if (Hash::check($request->otp, $customer_data->password)) {
                Session::put('customer_data',$customer_data);
                return redirect('customer_dashboard')->with(["success"=>"Login Successfully"]);

            }else{
                return redirect()->back()->with(['error'=>'Wrong OTP']);
            }
        }else{
            return redirect()->back()->with(['error'=>'Your Email not Found']);
        }
    }

    public function customer_dashboard(){
        if(Session::has('customer_data')){
            $customer_Data = Session::get('customer_data');

            $customer_Data = BookingCustomers::where('email',$customer_Data->email)->first();
            // dd($customer_Data);
            $tentative_booking = PackagesBooking::where('customer_id',$customer_Data->id)
                                                    ->where('status','Tentative')
                                                    ->count();

            $confirmed_booking = PackagesBooking::where('customer_id',$customer_Data->id)
                                                    ->where('status','Confirmed')
                                                    ->count();

            $last_bookings = PackagesBooking::where('customer_id',$customer_Data->id)
                                                    ->orderBy('id','desc')
                                                    ->limit(10)
                                                    ->get();

            return view('website/customer_dashboard/customer_dashboard',compact('tentative_booking','confirmed_booking','last_bookings','customer_Data')); 
        }else{
            return redirect('/');
        }
    }

    public function customer_booking(){
        if(Session::has('customer_data')){
            $customer_Data = Session::get('customer_data');
            $last_bookings = PackagesBooking::where('customer_id',$customer_Data->id)
                                                    ->orderBy('id','desc')
                                                    ->get();
            return view('website/customer_dashboard/customer_booking',compact('last_bookings'));                                                 
        }else{
            return redirect('/');
        }
    }

    public function customer_payment_request(Request $request){
        if(Session::has('customer_data')){
            $customer_Data = Session::get('customer_data');
            $payments_request_data = payment_request::where('customer_id',$customer_Data->id)->orderBy('id','desc')->get();
             return view('website/customer_dashboard/customer_payment_request',compact('payments_request_data'));     
        }else{
            return redirect('/');
        }                                            
        
    }

    

    

    public function otp_verify(){
        return view('website/otp_verify'); 
    }

    public function activities_list(Request $request){

        // dd($request->all());
        if ($request->method() === 'GET') {
            $all_activities = Activities::orderBy('created_at','desc')
            ->select('id','activity_title','feacture_img','baaner_img','start_date','end_date','group_size','activity_palce_address',
                    'adult_sale_price','stars_rating','country','activity_duration')
            ->paginate(10);

        } elseif ($request->method() === 'POST') {
            $all_activities = Activities::where('destination',$request->destination)
                            ->whereDate('end_date', '>', $request->start_date)
                            ->orderBy('created_at','desc')
                            ->select('id','activity_title','feacture_img','baaner_img','start_date','end_date','group_size','activity_palce_address',
                                    'adult_sale_price','stars_rating','country','activity_duration')
                            ->paginate(10);
        }
       

        return view('website/activities_list',compact('all_activities')); 
    }

    

    public function package_details(Package $package_details){
        $last_reviews = Reviews::orderBy('id','desc')
                            ->limit(100)
                            ->get();
        return view('website/package_details',compact('package_details','last_reviews')); 
    }

    public function activity_details(Activities $activity_details){
        $last_reviews = Reviews::orderBy('id','desc')
                            ->limit(100)
                            ->get();
        return view('website/activity_details',compact('activity_details','last_reviews')); 
    }

    

    public function contact_us(){
        return view('website/contact_us');
    }

    public function about_us(){
        return view('website/about_us');
    }
}
