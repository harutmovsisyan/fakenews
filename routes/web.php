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



//Route::group('', function (){
//    Route::get('/', 'indexController');
//});

Route::prefix('/')->group( function (){
    Route::get('/', 'indexController');
});

//Route::prefix('author')->group( function (){
//    Route::get('/', 'indexController');
//});


Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/author', function () {
    return view('author');
})->name('author');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::any('{catchall}', 'PageController@notfound')->where('catchall', '.*');


//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\indexController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
