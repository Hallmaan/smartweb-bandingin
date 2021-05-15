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
Route::get('/', 'HomeController@home')->name('dashboard');
Route::group(['middleware' => ['auth']], function() {

    Route::post('/search', 'HomeController@search')->name('search');
    Route::post('/save/history', 'HomeController@save_history')->name('save');

    Route::get('/profile', function () {
        return view('users.profile.index');
    });
    // Route::get('/history', function () {
    //     return view('users.history.index');
    // });

    Route::get('/history/{user_id}', 'HomeController@history')->name('history');


});
Route::get('/pricing', function () {
    return view('users.pricing.index');
})->name('pricing');

// Route::name('user.')->prefix('user')->middleware('auth')->group(function() {
//     return view('users.profile.index');
// });

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
