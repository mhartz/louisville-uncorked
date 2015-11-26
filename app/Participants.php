<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
  protected $fillable = [
    'team_id',
    'first_name',
    'last_name',
    'email',
    'is_admin'
  ];
  
  public static $rules = [
    'first_name' => 'required',
    'last_name' => 'required'
  ];
  
  public function teams() {
    return $this->belongsTo('App\Teams', 'team_id');
  }
}