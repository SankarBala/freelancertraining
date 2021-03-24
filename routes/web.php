<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\QueryMessageController;

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
    return view('index');
})->name('home');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');

Route::resource('/enrollment', EnrollmentController::class)->middleware('auth');

Route::post('/message', [QueryMessageController::class, 'store'])->name('querySubmit');




// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');
// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');
