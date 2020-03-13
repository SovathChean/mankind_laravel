<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_has_roles extends Model
{
    //
    protected $fillable = [
      'role_id', 'model_type', 'model_id',
    ];
    public $timestamps = false;

    public function role()
    {
      return $this->belongsTo('App\Role');
    }
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
