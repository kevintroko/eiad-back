<?php

namespace Eiad\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'role';

  public function users() {
    return $this->belongsToMany('\Eiad\Models\User');
  }

} 