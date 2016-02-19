<?php

namespace App;
use App\Events;
use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
  protected $table = 'mailing_list';
    
  protected $fillable = [
    'name',
    'email'
  ];
  
  public static $rules = [
    'email' => '|required|email|unique:mailing_list',
    'g-recaptcha-response'  => 'required'
  ];
}