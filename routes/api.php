<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('api', function () {
    return [
        'app' => config('app.name'),
        'version' => '1.0.0',
    ];
});

//  Authentication
Route::post('api/register', 'AuthController@register')->name('api.register');
Route::post('api/login', 'AuthController@login')->name('api.login');
Route::get('api/islogin', 'AuthController@isLogin')->name('api.islogin');


});
