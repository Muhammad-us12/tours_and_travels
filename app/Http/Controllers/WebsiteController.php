<?php

namespace App\Http\Controllers;

use App\Models\Destinationstio;
use App\Models\Packages\Package;
use App\Models\Activities\Activities;
use App\Models\Reviews;
use App\Models\website\Blogs;
use App\Models\website\BlogCategory;
use App\Models\BookingCustomers;
use App\Models\PackagesBooking;
use App\Models\payment_request;
use App\Models\VisaRequest;
use App\Models\Packages\CustomPackage;

use Str;
use Hash;
use Session;



use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function blogs_list(){
        $blogs_data = Blogs::where('status','publish')->orderBy("id","desc")->paginate(10);
        $allCategories = BlogCategory::all();
        return view('website.blogs.blogs_list',compact('blogs_data','allCategories'));

    }

    public function custom_package_create(){
        $countriesList = \DB::table('country')->select('id','name')->get();
        $all_destinations  = Destinationstio::all();
        return view('website.custom_package_create',compact('countriesList','all_destinations'));
    }

    public function letter_of_invitation(){
        $countriesList = \DB::table('country')->select('id','name')->get();
        $all_destinations  = Destinationstio::all();
        return view('website.letter_of_invitation',compact('countriesList','all_destinations'));
    }

    public function visa_support_submit(Request $request){
        // dd($request->all());

        $passport_img = '';
        $iternary_img = '';
        if($request->file('passport')){
                 
            $img_file = $request->file('passport');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($img_file->getClientOriginalExtension());
            $img_name = $name_gen.".".$img_ext;
            $upload = 'public/images/visa';
            $file_upload = $img_file->move($upload,$img_name);
            if($file_upload){
                $passport_img = $img_name;
            }
        }

        if($request->file('itinernary')){
                 
            $img_file = $request->file('itinernary');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($img_file->getClientOriginalExtension());
            $img_name = $name_gen.".".$img_ext;
            $upload = 'public/images/visa';
            $file_upload = $img_file->move($upload,$img_name);
            if($file_upload){
                $iternary_img = $img_name;
            }
        }

        $result = VisaRequest::insert([
            'group_size' => $request->group_size,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'destinations' => json_encode($request->destinations),
            'lead_name' => $request->lead_name,
            'lead_email' => $request->lead_email,
            'lead_phone' => $request->lead_phone,
            'lead_country' => $request->lead_country,
            'passport_img' => $passport_img,
            'iteneray_img' => $iternary_img,
            'message' => $request->message,
        ]);

        if($result){
            return redirect()->back()->with(['success'=>'Your Request has Submited Successfully']);
        }else{
            return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
        }
    }

    public function custom_package_submit(Request $request){
        $result = CustomPackage::insert([
            'group_size' => $request->group_size,
            'start_date' => $request->start_date,
            'duration' => $request->duration,
            'destinations' => json_encode($request->destinations),
            'lead_name' => $request->lead_name,
            'lead_email' => $request->lead_email,
            'lead_phone' => $request->lead_phone,
            'lead_country' => $request->lead_country,
            'message' => $request->message,
        ]);

        if($result){
            return redirect()->back()->with(['success'=>'Your Request has Submited Successfully']);
        }else{
            return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
        }
    }

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
                            
            $total_paid_amount = payment_request::where('customer_id',$customer_Data->id)
                                                    ->where('status','Approve')
                                                    ->sum('payment_amount');

            return view('website/customer_dashboard/customer_dashboard',compact('tentative_booking','confirmed_booking','last_bookings','customer_Data','total_paid_amount')); 
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
