<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contractor\PagesController;
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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'checkUserType']);

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/log_in', function () {
    return view('auth_user.login');
})->name('log_in');

Route::get('/register_', function () {
    return view('auth_user.register');
})->name('sign_up');

Route::get('/profile', [PagesController::class, 'profile'])->name('user.profile');
Route::get('/edit', [PagesController::class, 'edit'])->name('user.edit');

// ============================ Contractor routes =======================
Route::namespace('Contractor')->prefix('contractor')->group(function(){
    Route::get('/homepage', function(){
        return view('contractor.homepage');
    })->name('contractor.homepage');
    
    Route::get('/explor', [PagesController::class, 'explor'])->name('contractor.explor');
    Route::get('/your_project', [PagesController::class, 'your_project'])->name('contractor.your_project');
});

// ============================ Contractor routes =======================

//------------------------------------------------------------------------------

// ============================ Customer routes =======================

Route::get('/customer/homepage', function(){
    return view('customer.homepage');
})->name('customer.homepage');

// ============================ Customer routes =======================


