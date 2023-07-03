<?php

namespace App\Models\Activities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    public function activityDestination()
    {
        return $this->belongsTo(\App\Models\Destinationstio::class,'destination');
    }
    
}
