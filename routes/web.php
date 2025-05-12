<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Student\HomeController as StudentHomeController;
use App\Http\Controllers\Student\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:admin'])->prefix('admin') ->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('admin.dashboard');

});

Route::middleware(['auth', 'role:student'])->prefix('student')->name('student.')->group(function () {
    // Route::get('', function () {
    //     return view('student.index');
    // });
    // Route::get('/', [StudentHomeController::class, 'index'])->name('index');
    Route::resource('users', UserController::class);


});

Route::middleware(['auth', 'role:instructor'])->prefix('instructor')->name('intructor.')->group(function () {

        Route::get('/dashboard', function () {
        return view('instructors.index');
    })->name('instructor.dashboard');



});




