<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
      'title', 'pt_id', 'body', 'user_id',
    ];

    public function postType(){
      return $this->belongsTo('App\PostType', 'pt_id');
    }
    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }
}
