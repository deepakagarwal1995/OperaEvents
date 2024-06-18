<?php

use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry');

Route::get('/thank-you', [EnquiryController::class, 'thanku'])->name('thanku');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('migrate', function () {
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('migrate');
});
