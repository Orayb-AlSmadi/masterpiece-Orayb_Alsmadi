<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['brand', 'price', 'year', 'mileage', 'seats', 'luggage', 'description'];

    public function image()
    {
        return $this->hasOne('App\Image');
    }
}
