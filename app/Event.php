<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
      'title', 'user_id', 'end', 'start', 'color',
    ];
     protected $visible = ['id', 'title', 'start', 'end', 'color'];
}
