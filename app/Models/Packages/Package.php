<?php

namespace App\Models\Packages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function packageDestination()
    {
        return $this->belongsTo(\App\Models\Destinationstio::class,'destination');
    }
}
