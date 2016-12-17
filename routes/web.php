<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('event/{event}/rsvp', function(App\Event $event) {
	return view('events.' . $event->id .'.rsvp', [
		'event' => $event		
	]);
});

Route::post('event/{event}/invitees', function(App\Event $event) {
	$event->invitees()->create(request()->all());
	return back();
});

Route::get('event/{event}/invitees', function(App\Event $event) {
	return $event->invitees;
});

Auth::routes();