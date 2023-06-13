<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;


class ReviewsController extends Controller
{
    //
    public function reviews_list(){
        $all_reviews = Reviews::orderBy('created_at', 'desc')->paginate(10);
        return view('adminPanel/reviews/reviews_list',compact('all_reviews'));
    }

    public function reviews_submit(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'ratings' => 'required',
            'review' => 'required',
            'picture'=>'required|mimes:jpeg,png,jpg,gif,svg|max:600',
         ]);

         $review_obj = new Reviews;
         $review_obj->name = $request->name;
         $review_obj->ratings = $request->ratings;
         $review_obj->review = $request->review;
        
         if($request->file('picture')){
             
             $img_file = $request->file('picture');
             $name_gen = hexdec(uniqid());
             $img_ext = strtolower($img_file->getClientOriginalExtension());
             $img_name = $name_gen.".".$img_ext;
             $upload = 'public/images/Reviews';
             $file_upload = $img_file->move($upload,$img_name);
             if($file_upload){
                 $review_obj->picture = $img_name;
 
                 $result = $review_obj->save();
                 if($result){
                     return redirect('/reviews_list')->with(['success'=>'Review Added Successfully']);
                 }else{
                     return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
                 }
             }
         }
    }
}
