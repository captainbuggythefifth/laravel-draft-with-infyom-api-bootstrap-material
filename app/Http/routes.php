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

Route::get('/', function () {

    return view('welcome');
});


Route::get('/home', array('as' => 'home', 'uses' => function(){
    return view('welcome');
}));

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


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
    Route::group(['prefix' => 'v1'], function ()
    {
        require config('infyom.laravel_generator.path.api_routes');
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});


Route::resource("users", "UsersController");

Route::get('users/delete/{id}', [
    'as' => 'users.delete',
    'uses' => 'UsersController@destroy',
]);

Route::group(['middleware' => ['web']], function () {

    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');

    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

    Route::get('auth/facebook/create', 'Auth\Social\FacebookSignUpController@create');

    Route::put('auth/facebook/create', 'Auth\Social\FacebookSignUpController@store');

});