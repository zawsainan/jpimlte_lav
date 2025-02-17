<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function interiors(){
        return $this->hasMany(Interior::class);
    }

    public function attractions(){
        return $this->hasMany(Attraction::class);
    }
}
