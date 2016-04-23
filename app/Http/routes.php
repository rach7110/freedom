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

Route::get('/', ['as' => 'welcome', function () {
    return view('welcome');
}]);

Route::get('resume', ['as' => 'resume', function () {
    return view('resume');
}]);

Route::get('projects', ['as' => 'projects', function () {
    return view('projects');
}]);

// Route::get('contact', ['as' => 'about', function () {
//     return view('contact');
// }]);

Route::get('contact', ['as' => 'about', 'uses' => 'AboutController@create']);

Route::post('contact', ['as' => 'message', 'uses' => 'AboutController@store']);

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
