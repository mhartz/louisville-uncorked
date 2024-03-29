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
    'email' => '|required|email',
    'g-recaptcha-response'  => 'required'
  ];

  public static $unsubRules = [
    'email' => '|required|email|exists:mailing_list'
  ];

  public static $newsletterRules = [
    'title' => 'required',
    'message' => 'required'
  ];
}