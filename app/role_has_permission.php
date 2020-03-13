<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_has_permission extends Model
{
    //
    protected $fillable = [
      'permission_id', 'role_id',
    ];
}
