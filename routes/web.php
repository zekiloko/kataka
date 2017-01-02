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

Route::get('events/{event}/rsvp', function(App\Event $event) {
	return view('events.' . $event->id .'.rsvp', [
		'event' => $event		
	]);
});

Route::post('events/{event}/invitees', function(App\Event $event) {
	$event->invitees()->create(request()->all());
	return view('events.' . $event->id . '.answer', [
		'attending' => request()->input('attending'),
		'name' => request()->input('name'),
	]);
});

Route::get('events/{event}/invitees', function(App\Event $event) {
	return view('events.' . $event->id .'.invitees', [
		'attending' => $event->invitees()->where('attending', 1)->get(),
		'notattending' => $event->invitees()->where('attending', 0)->get()
	]);
});

Auth::routes();