<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function create_package(){
        return view('adminPanel/packages/create_package');
        // echo "Create Package";
    }
}
