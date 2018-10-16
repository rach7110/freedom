<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$clarifai = new App\Services\ImageRecognition\ClarifaiApiService;

Route::get('/image', ['as' => 'image', 'uses' => 'ClarifaiController@handle']);

Route::get('/', ['as' => 'welcome', function () {
    return view('welcome');
}]);

Route::get('resume', ['as' => 'resume', function () {
    return view('resume');
}]);

Route::get('projects', ['as' => 'projects', function () {
    return view('projects');
}]);

Route::get('contact', ['as' => 'about', function () {
    return view('contact');
}]);
// SEND ME AN EMAIL FROMT THE CONTACT FORM
Route::post('contact', ['as' => 'message', 'uses' => 'AboutController@store']);

// **************************************************
// INDIVIDUAL PROJECTS:
// **************************************************

// PROJECT 01
Route::get('project-01', ['as' => 'project-01', 'uses' => 'StudentController@index']);
Route::post('project-01', ['as' => 'new_student', 'uses' => 'StudentController@save']);

//PROJECT 02
Route::get('project-02', ['as' => 'project-02',  function() {
  return view('projects.project-02');
}]);

//PROJECT 03
//NO ROUTING REQUIRED. LINK IS ON PROJECTS VIEW.

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
