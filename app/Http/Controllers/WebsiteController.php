<?php

namespace App\Http\Controllers;

use App\Models\Destinationstio;
use App\Models\Packages\Package;
use App\Models\Activities\Activities;
use App\Models\Reviews;
use App\Models\website\Blogs;


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

        dd($request->all());
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

    public function package_details(Package $package_details){
        $last_reviews = Reviews::orderBy('id','desc')
                            ->limit(100)
                            ->get();
        return view('website/package_details',compact('package_details','last_reviews')); 
    }

    public function contact_us(){
        return view('website/contact_us');
    }

    public function about_us(){
        return view('website/about_us');
    }
}
