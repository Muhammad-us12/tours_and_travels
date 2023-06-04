<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinationstio extends Model
{
    use HasFactory;
  
    protected $fillables = ['dest_name','dest_img','dest_order','display_on_web'];
}
