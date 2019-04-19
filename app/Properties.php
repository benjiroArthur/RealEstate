<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Properties extends Model
{
    //Table Name
    protected $table = 'properties';

    //Primary Key
    public $primaryKey = "id";

    //Creating relationship between the images and their property
//    public function image()
//    {
//        return $this->hasMany('App\Images');
//    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
