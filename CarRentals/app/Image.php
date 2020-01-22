<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['car_id', 'link'];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
