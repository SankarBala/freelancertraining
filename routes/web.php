<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\QueryMessageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestController;
use App\Models\Course;

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
    $cources = Course::all();
    return view('courses')->withCourses($cources);
})->name('courses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');

Route::resource('/enrollment', EnrollmentController::class)->middleware(['auth', 'membership']);
Route::resource('/member', MemberController::class)->middleware('auth');

// Route::resource('/test', TestController::class);

Route::post('/message', [QueryMessageController::class, 'store'])->name('querySubmit');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/courses', [CourseController::class, 'index'])->name('dashboard.course');
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('dashboard.profile');
    Route::get('/dashboard/profileEdit', [ProfileController::class, 'edit'])->name('dashboard.profileEdit');
    Route::get('/dashboard/setting', [SettingController::class, 'index'])->name('dashboard.setting');
});


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/courses', [AdminController::class, 'courses'])->name('admin.courses');
    Route::get('/course/add', [AdminController::class, 'courseAdd'])->name('admin.courseAdd');
    Route::get('/course/edit/{id}', [AdminController::class, 'courseEdit'])->name('admin.courseEdit');
    Route::post('/course/update/{id}', [AdminController::class, 'courseUpdate'])->name('admin.courseUpdate');
    Route::post('/course/save', [AdminController::class, 'courseSave'])->name('admin.courseSave');
    Route::post('/course/delete/{id}', [AdminController::class, 'courseDelete'])->name('admin.courseDelete');
    // Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/setting', [AdminController::class, 'setti'])->name('admin.setting');  
});
  