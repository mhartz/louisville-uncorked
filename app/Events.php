<?php

namespace App;
use App\Teams;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
  public function teams() {
    return $this->hasMany('Teams');
  }
}
