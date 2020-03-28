<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedual extends Model
{
    //
    protected $fillable= [
      'user_id', 'start', 'end', 'wod', 'time_id',
    ];

}
