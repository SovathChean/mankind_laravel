<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [
      'url', 'user_id',
    ];
    protected $uploads = '/public/image/';



    public function getFileAttribute($photo)
    {
      return $this->uploads.$photo;
    }
    public function user(){
      return $this->hasMany('App\User', 'user_id');
    }
}
