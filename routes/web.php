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
    return view('visitors.index');
})->name('index');
Route::get('/category', function () {
    return view('visitors.category');
})->name('category');
Route::get('/terms', function () {
    return view('visitors.terms');
})->name('terms');
Route::get('/registration', function () {
    return view('visitors.register');
})->name('registration');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
