<?php

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'ContestantCatController@index');
Route::get('/home', 'ContestantCatController@index')->name('home');

Route::get('vote', function() {
    return view('vote');
});
Route::resource('contestant', 'ContestantCatController');
Route::Post('votecontestant', 'ContestantCatController@vote')->name('vote4contestant');
Route::view('feedback','admin.login'); 
Route::resource('book-a-sit','ReserveController');
Route::Post('book-a-sit', 'ReserveController@store')->name('ticket');

Auth::routes();
Route::middleware(['auth'])->group (function() {
    Route::view('addcategory','admin.addcategory');
    Route::Post('addcategories','adminController@store')->name('addcat');
    Route::get('addnominees','adminController@list');
    Route::Post('addnominees','adminController@saveContestant')->name('addnorm');
    Route::resource('result','adminController');
    Route::Post('delete', 'adminController@destroy')->name('deletecat');
});
