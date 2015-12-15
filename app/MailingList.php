<?php

namespace App;
use App\Events;
use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
  protected $fillable = [
    'email'
  ];
  
  public static $rules = [
    'email' => 'required|email'
  ];
}