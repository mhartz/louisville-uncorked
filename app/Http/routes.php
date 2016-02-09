<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Static Pages
 */
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('faq', 'PagesController@faq');

/**
 * Team Registration
 * -- Form with 3 Fields for Team Registration Table
 * -- Extra form with 2 fields for adding team members
 */
Route::get('registration', ['as' => 'registration', 'uses' => 'TeamsController@create']);
Route::post('registration', 'TeamsController@store');
Route::get('registration-successful', 'TeamsController@success');
Route::get('teams-list', 'TeamsController@teamsList');
Route::get('participants-list', 'ParticipantsController@show');
Route::get('team/edit/{id}', 'TeamsController@show');

/**
 * Contact Us
 * -- Form with 4 Fields for users to send an email
 */
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', ['as' => 'contact-store', 'uses' => 'ContactController@store']);

/**
 * Mailing List
 * -- Single email signup (Might need to go on every page, as of now is only on the homepage)
 */
Route::get('mailing-list', ['as' => 'mailing-list', 'uses' => 'MailingListController@create']);
Route::post('mailing-list', ['as' => 'mailing-list-store', 'uses' => 'MailingListController@store']);

/**
 * Photos
 * -- Different pages for the photos
 */
Route::get('photos/2015-fall-event', 'PagesController@photosCurrent');
Route::get('photos/2015-fall-meeting', 'PagesController@photosPast');
Route::get('photos/2015-winter-meeting', 'PagesController@photosPastOld');











/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All the routes related to the admin are containted here
|
*/
Route::get('admin/photos', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::post('admin/upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('admin/upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);
