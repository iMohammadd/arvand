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

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(['before'=>'auth'], function()
    {
        Route::get('admin',['as'=>'admin','uses'=>'adminController@main']);

        Route::group(['prefix'=>'car'], function(){
            Route::get('{id}/delete', ['as'=>'deleteCar', 'uses'=>'adminController@deleteCar']);
            Route::get('add',['as'=>'addCar','uses'=>'adminController@getAddCar']);
            Route::post('add',['uses'=>'adminController@postAddCar']);
            Route::get('{id}/edit',['as'=>'editCar','uses'=>'adminController@getEditCar']);
            Route::post('{id}/edit',['uses'=>'adminController@postEditCar']);
        });

        Route::group(['prefix'=>'factory'], function(){
            Route::get('/',['as'=>'factory', 'uses'=>'adminController@factory']);
            Route::get('add',['as'=>'addFactory','uses'=>'adminController@getAddFactory']);

        });
    }
);
Route::get('login', ['as'=>'login','uses'=>'adminController@login']);
Route::post('login', 'adminController@postLogin');
Route::get('logout',['as'=>'logout', function(){
    Auth::logout();
    return Redirect::route('login');
}]);
