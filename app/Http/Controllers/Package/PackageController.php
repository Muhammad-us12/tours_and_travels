<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Destinationstio;
use App\Models\Packages\Package;
use Auth;

class PackageController extends Controller
{
    //
    public function create_package(){
        $countriesList = \DB::table('country')->select('id','name')->get();

        return view('adminPanel/packages/create_package',compact('countriesList'));
        // echo "Create Package";
    }

    public function packages_list(){
        $all_packages = Package::orderBy('created_at','desc')
                        ->select('id','package_title','feacture_img','start_date','end_date','group_size','destination',
                                'adult_cost_price','adult_sale_price','child_cost_price','child_sale_price')
                        ->paginate(10);
        // dd($all_packages);
        return view('adminPanel/packages/packages_list',compact('all_packages'));

        
    }

    public function package_submit(Request $request){
        // dd($request->all());

        $validated = $request->validate([
            'facilities' => 'max:4294967295',
            'included' => 'max:4294967295',
            'excluded' => 'max:4294967295',
            'feacture_img'=>'required|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'baaner_img'=>'required|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        
        // dd($request->file('itinerary_img')[0]);
        $package_obj = new Package;
        $package_obj->package_title = $request->package_title;
        $package_obj->language = $request->language;
        $package_obj->group_size = $request->group_size;
        $package_obj->stars_rating = $request->stars_rating;
        $package_obj->start_date = $request->start_date;
        $package_obj->end_date = $request->end_date;
        $package_obj->duration = $request->duration;
        $package_obj->country = $request->country;
        $package_obj->destination = $request->destination;
        $package_obj->facilities = $request->facilities;
        $package_obj->description = $request->description;
        $package_obj->included = $request->included;
        $package_obj->excluded = $request->excluded;
        $package_obj->adult_cost_price = $request->adult_cost_price;
        $package_obj->adult_sale_price = $request->adult_sale_price;
        $package_obj->child_cost_price = $request->child_cost_price;
        $package_obj->child_sale_price = $request->child_sale_price;
        $package_obj->Payment_instructions = $request->Payment_instructions;
        $package_obj->cancelation_policy = $request->cancelation_policy;

        if($request->file('feacture_img')){
                 
            $img_file = $request->file('feacture_img');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($img_file->getClientOriginalExtension());
            $img_name = $name_gen.".".$img_ext;
            $upload = 'public/images/Packages';
            $file_upload = $img_file->move($upload,$img_name);
            if($file_upload){
                $package_obj->feacture_img = $img_name;
            }
        }

        if($request->file('baaner_img')){
                 
            $img_file = $request->file('baaner_img');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($img_file->getClientOriginalExtension());
            $img_name = $name_gen.".".$img_ext;
            $upload = 'public/images/Packages';
            $file_upload = $img_file->move($upload,$img_name);
            if($file_upload){
                $package_obj->baaner_img = $img_name;
            }
        }

        if($request->file('map_image')){
                 
            $img_file = $request->file('map_image');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($img_file->getClientOriginalExtension());
            $img_name = $name_gen.".".$img_ext;
            $upload = 'public/images/Packages';
            $file_upload = $img_file->move($upload,$img_name);
            if($file_upload){
                $package_obj->map_image = $img_name;
            }
        }

        $iternary = [];

        if(isset($request->itinerary_title)){
            foreach($request->itinerary_title as $index => $internery_title_res){
                $iternary_title = $internery_title_res;
                $interary_desc = $request->interary_desc[$index];
                $iternary_img = '';

                if($request->file('itinerary_img')){
                 
                    $img_file = $request->file('itinerary_img')[$index];
                    $name_gen = hexdec(uniqid());
                    $img_ext = strtolower($img_file->getClientOriginalExtension());
                    $img_name = $name_gen.".".$img_ext;
                    $upload = 'public/images/Packages/Itinerary';
                    $file_upload = $img_file->move($upload,$img_name);
                    if($file_upload){
                        $iternary_img = $img_name;
                    }
                }

                $iternary_arr = (Object)[
                    'title' => $iternary_title,
                    'description' => $interary_desc,
                    'img' => $iternary_img,
                ];

                $iternary[] = $iternary_arr;
            }
        }

        $package_obj->itinerary_data = json_encode($iternary);

        $package_obj->user_id = Auth::user()->id;
     
        $result = $package_obj->save();
        if($result){
            return redirect('/packages_list')->with(['success'=>'Package Added Successfully']);
        }else{
            return redirect()->back()->with(['error'=>'Something Went Wrong Try Again']);
        }
        
    }
}
