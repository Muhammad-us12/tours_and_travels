<?php

namespace App\Http\Controllers;

use App\Models\Destinationstio;
use App\Models\Packages\Package;
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
        // dd($top_destinations);
        return view('index',compact('top_destinations','all_destinations','top_packages'));
    }
}
