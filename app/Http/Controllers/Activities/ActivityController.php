<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activities\Activities;
use Auth;

class ActivityController extends Controller
{
    //
    public function create_activities(){
        $countriesList = \DB::table('country')->select('id','name')->get();

        return view('adminPanel/activities/create_activities',compact('countriesList'));
    }

    public function activities_list(){
        $all_activities = Activities::orderBy('created_at','desc')
                        ->select('id','activity_title','feacture_img','start_date','end_date','group_size','destination',
                                'adult_cost_price','adult_sale_price','child_cost_price','child_sale_price')
                        ->paginate(10);
        // dd($all_activities);
        return view('adminPanel/activities/activities_list',compact('all_activities'));

        
    }
    

    public function activities_submit(Request $request){
      
        $validated = $request->validate([
            'facilities' => 'max:4294967295',
            'included' => 'max:4294967295',
            'excluded' => 'max:4294967295',
            'feacture_img'=>'required|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'baaner_img'=>'required|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);


        $activity_obj = new Activities;
        $activity_obj->activity_title = $request->activity_title;
        $activity_obj->language = $request->language;
        $activity_obj->group_size = $request->group_size;
        $activity_obj->stars_rating = $request->stars_rating;
        $activity_obj->start_date = $request->start_date;
        $activity_obj->end_date = $request->end_date;
        $activity_obj->activity_duration = $request->activity_duration;
        $activity_obj->country = $request->country;
        $activity_obj->destination = $request->destination;
        $activity_obj->activity_palce_address = $request->activity_palce_address;
        $activity_obj->facilities = $request->facilities;
        $activity_obj->description = $request->description;
        $activity_obj->included = $request->included;
        $activity_obj->excluded = $request->excluded;
        $activity_obj->adult_cost_price = $request->adult_cost_price;
        $activity_obj->adult_sale_price = $request->adult_sale_price;
        $activity_obj->child_cost_price = $request->child_cost_price;
        $activity_obj->child_sale_price = $request->child_sale_price;
        $activity_obj->Payment_instructions = $request->Payment_instructions;
        $activity_obj->cancelation_policy = $request->cancelation_policy;

        if($request->file('feacture_img')){
                 
            $img_file = $request->file('feacture_img');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($img_file->getClientOriginalExtension());
            $img_name = $name_gen.".".$img_ext;
            $upload = 'public/images/Activities';
            $file_upload = $img_file->move($upload,$img_name);
            if($file_upload){
                $activity_obj->feacture_img = $img_name;
            }
        }

        if($request->file('baaner_img')){
                 
            $img_file = $request->file('baaner_img');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($img_file->getClientOriginalExtension());
            $img_name = $name_gen.".".$img_ext;
            $upload = 'public/images/Activities';
            $file_upload = $img_file->move($upload,$img_name);
            if($file_upload){
                $activity_obj->baaner_img = $img_name;
            }
        }

    
        $activity_obj->availibilty_days = json_encode($request->availibilty_days);

        $activity_obj->user_id = Auth::user()->id;
     
        $result = $activity_obj->save();
        if($result){
            return redirect('/activities_list')->with(['success'=>'Activity Added Successfully']);
        }else{
            return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
        }
        
    }
}
