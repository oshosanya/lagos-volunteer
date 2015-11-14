<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
 return View::make('home');
});

Route::get('/about', function(){
 return View::make('about');
});

Route::get('/contact', function(){
 return View::make('contact');
});

Route::get('/portal', function(){
 return View::make('portal');
});

Route::get('user/{id}', function($id){
 return "User #$id";
});

//Resource Controllers
Route::resource('applications', 'ApplicationController');
/*Form submission*/

Route::post('contact', function()
{
$data = Input::all();
$rules = array(
'subject' => 'required',
'message' => 'required'
);
$validator = Validator::make($data, $rules);

if($validator->fails()) {
return Redirect::to('contact')->withErrors($validator)->withInput();
}

return 'Your message has been sent';

$emailcontent = array (
'subject' => $data['subject'],
'emailmessage' => $data['message']
);

Mail::send('emails.contactemail', $emailcontent, function($message)
{
$message->to('michaeloshosanya@gmail.com','Lagos Volunteer')
->subject('Contact via Our Contact Form');
});

return 'Your message has been sent';

});

Route::post('/search', array('uses' => 'SearchController@executeSearch'));
/*Database Routing*/

?>