<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/leads', 'LeadController@create')->name('leads');
Route::post('/leads/tawkto', 'LeadController@tawkto')->name('tawkto');

Route::post('/offers', 'PageController@saveFlyerUser')->name('flyerUser');


Route::post('/login', 'Customer\LoginController@homeLogin')->name('homeLogin');
Route::post('/signup', 'Customer\LoginController@homeSignup')->name('homeSignup');