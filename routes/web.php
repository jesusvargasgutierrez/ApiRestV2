<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::namespace('Ws')->prefix('ws')->group(function(){
    Route::get('listrecord', 'ApiController@listrecord');
    Route::get('/getrecord', 'ApiController@getrecord');
    Route::get('/getrecordwhere', 'ApiController@getrecordwhere');
    Route::post('insertrecord', 'ApiController@insertrecord');
    Route::post('/updaterecord', 'ApiController@updaterecord');
    Route::post('/updaterecordwhere', 'ApiController@updaterecordwhere');
});

/*Route::resource('users', UsersController::class)->names('users');
Route::resource('customers', CustomersController::class)->names('customers');
Route::resource('reservations', ReservationsController::class)->names('reservations');
Route::get('courtindex', [ReservationsController::class, 'courtindex'])->name('courtindex');
Route::get('calceindex', [ReservationsController::class, 'calceindex'])->name('calceindex');
Route::get('checkoutindex', [CustomersController::class, 'viewcheckoutmember'])->name('checkoutindex');
Route::get('infocontact', [InfoController::class, 'infocontact'])->name('infocontact');
Route::get('rankinglist', [InfoController::class, 'rankinglist'])->name('rankinglist');
Route::get('createcourt', [ReservationsController::class, 'createcourt'])->name('createcourt');
Route::get('homeview', [InfoController::class, 'homeview'])->name('homeview');*/


