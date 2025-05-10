<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::middleware(['auth'])->prefix('admin') ->name('admin.')->group(function () {
    
//     Route::get('/dashboard', function () {
//             return view('admin.index');
//         })->name('dashboard');





   

// });



Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {

    Route::get('/student/dashboard', function () {
             return view('user.index');
            })->name('student.dashboard');
    
        Route::get('/instructor/dashboard', function () {
        return view('user.index');
    })->name('instructor.dashboard');        



});  


// Route::middleware(['auth']) // or 'instructor' if needed
//     ->prefix('user')
//     ->name('user.')
//     ->group(function () {
//         Route::get('student/dashboard', [HomeController::class, 'index'])->name('dashboard');
//     });


