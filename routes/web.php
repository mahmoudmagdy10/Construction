<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contractor\PagesController;
use App\Http\Controllers\Customer\CustomerPagesController;
use App\Http\Controllers\Customer\UploadController;
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
// ============================ Contractor routes =======================
Route::namespace('Contractor')->prefix('contractor')->group(function(){
    
    Route::get('/homepage', [PagesController::class, 'homepage'])->name('contractor.homepage');
    Route::get('/explor', [PagesController::class, 'explor'])->name('contractor.explor');
    Route::get('/your_project', [PagesController::class, 'your_project'])->name('contractor.your_project');
    Route::get('/profile', [PagesController::class, 'profile'])->name('user.profile');
    Route::get('/profile/edit', [PagesController::class, 'edit'])->name('user.edit');

});

// ============================ Contractor routes =======================

//------------------------------------------------------------------------------

// ============================ Customer routes =======================

Route::namespace('Customer')->prefix('customer')->group(function(){
    
    Route::get('/homepage', [CustomerPagesController::class, 'homepage'])->name('customer.homepage');
    Route::get('/construction_style', [CustomerPagesController::class, 'construction_style'])->name('customer.construction_style');
    Route::get('/your_project', [CustomerPagesController::class, 'your_project'])->name('customer.your_project');
    Route::get('/profile', [CustomerPagesController::class, 'profile'])->name('user.profile');
    Route::get('/profile/edit', [CustomerPagesController::class, 'edit'])->name('user.edit');
    Route::post('/upload', [UploadController::class, 'upload'])->name('customer.upload');

});
// ============================ Customer routes =======================


