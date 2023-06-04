<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinationstio;

class DestinationsController extends Controller
{
    //
    public function destinations_list(){
        $countriesList = \DB::table('country')->select('id','name')->get();
        $all_destinations = Destinationstio::orderBy('created_at', 'desc')->paginate(10);
        return view('adminPanel/destinations/destinations_list',compact('all_destinations','countriesList'));
    }

    public function fetch_country_destinations($country){
        $destinations = Destinationstio::where('country',$country)->select('id','dest_name')->get();
        return response()->json([
            'destinations'=>$destinations
        ]);
    }

    public function destination_submit(Request $request){
        $validated = $request->validate([
            'dest_name' => 'required|max:255',
            'picture'=>'required|mimes:jpeg,png,jpg,gif,svg|max:600',
         ]);

         $destination_obj = new Destinationstio;
         $destination_obj->dest_name = $request->dest_name;
         $destination_obj->dest_order = $request->dest_order;
         $destination_obj->country = $request->country;
         if(isset($request->display_on_web)){
            $destination_obj->display_on_web = 1;
         }
        
         
         if($request->file('picture')){
             
             $img_file = $request->file('picture');
             $name_gen = hexdec(uniqid());
             $img_ext = strtolower($img_file->getClientOriginalExtension());
             $img_name = $name_gen.".".$img_ext;
             $upload = 'public/images/Destinations';
             $file_upload = $img_file->move($upload,$img_name);
             if($file_upload){
                 $destination_obj->dest_img = $img_name;
 
                 $result = $destination_obj->save();
                 if($result){
                     return redirect('/destinations_list')->with(['success'=>'Destination Added Successfully']);
                 }else{
                     return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
                 }
             }
         }
    }
}
