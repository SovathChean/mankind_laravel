<?php

namespace App;

use App\User;
use App\Health_topic;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    protected $fillable = ['body', 'title', 'ht_id', 'user_id'];

    public function health_topic()
    {
      return $this->belongsTo('App\Health_topic', 'ht_id');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
}
