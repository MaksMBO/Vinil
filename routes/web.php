<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;

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
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/information', function () {
    return view('information_page');
})->name('information');

Route::post('/register/signup', 'usersController@submit')->name('signup');

Route::post('/login/signin', 'usersController@allData')->name('signin');

Route::get("/lending", 'TurntablesController@turntablesForLending')->name('lending');

Route::get('/turntables', 'TurntablesController@turntablesAll')->name('turntables');

Route::get('/turntables/search', 'TurntablesController@turntablesSearch')->name('turntablesSearch');

Route::get('/records', 'recordsController@recordsAll')->name('records');

Route::get('records/checkboxes', 'recordsController@checkboxes')->name('checkboxes');
Route::get('records/checkboxes{id}', 'recordsController@checkboxess')->name('checkboxess');

Route::get('records/{id}', 'recordsController@page')->name('recordPage');
Route::get('turntable/{id}', 'turntablesController@page')->name('turntablePage');

Route::post('records/search', 'recordsController@search')->name('recordsSearch');

Route::get('Contact.blade.php', function () {
    return view('contact');
})->name('footer');

Route::get('exit', 'usersController@exit')->name('exit');

Route::get('basket', 'basketController@basket')->name('basket');

Route::post('addToBasket/{id}','basketController@add')->name('addToBasket');
Route::post('addToBasketTurn/{id}','basketController@addTurn')->name('addToBasketTurn');

Route::post('dellBuy', 'basketController@dellBuy')->name('dellBuy');

Route::post('dellOne/{id}', 'basketController@dellOne')->name('dellOne');
Route::post('dellOneTurn/{id}', 'basketController@dellOneTurn')->name('dellOneTurn');

Route::post('numberBasket/{id}', 'basketController@numberBasket')->name('numberBasket');
Route::post('numberBasketTurn/{id}', 'basketController@numberBasketTurn')->name('numberBasketTurn');

Route::get('/great', function () {
    return view('great');
})->name('great');
