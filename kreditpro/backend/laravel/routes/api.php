<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::match(['options'], 'https://localhost:8000', function () {
    return response('', 200)
        ->header('Access-Control-Allow-Origin', 'https://localhost:8080')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
});


Route::post('login', 'AuthController@login');
Route::post('register', 'Authcontroller@register');
Route::post('verify-captcha', 'CaptchaController@verifyCaptcha');

Route::get('hello', 'HelloController@hello');
Route::get('user', 'AuthController@user')->middleware('auth:api');

