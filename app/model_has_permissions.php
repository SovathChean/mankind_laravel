<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_has_permissions extends Model
{
    //
    protected $fillable = [
      'permission_id', 'model_type', 'model_id',
    ];

    public $timestamps = false;
}
