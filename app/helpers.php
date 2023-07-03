<?php
namespace App\Helpers;
use App\Models\User;
use DB;

class Helper {
    static public function getCountryName($id){
        $coutnry_name =  DB::table('country')->where('id',$id)->select('name')->first();
        return $coutnry_name->name;
    }
}