<?php

namespace App;
use App\Events;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
  protected $fillable = [
    'event_id',
    'team_name',
    'registrant_first_name',
    'registrant_last_name',
    'registrant_email'
  ];
  
  public static $rules = [
    'team_name' => 'required|unique:teams',
    'registrant_first_name' => 'required',
    'registrant_last_name' => 'required',
    'registrant_email' => 'required|email|unique:teams'
  ];
  
  public static $firstTeammateRules = [
    'first_participant_first_name' => 'required',
    'first_participant_last_name' => 'required'
  ];
  
  public static $secondTeammateRules = [
    'second_participant_first_name' => 'required',
    'second_participant_last_name' => 'required'
  ];
  
  public function events() {
    return $this->belongsTo('Events');
  }
  
  public function participants() {
    return $this->hasMany('App\Participants');
  }
}
