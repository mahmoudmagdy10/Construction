<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contractor\PagesController;
use App\Http\Controllers\Customer\CustomerPagesController;
use App\Http\Controllers\Customer\UploadController;
use App\Http\Controllers\Contractor\ContractorUploadController;
use App\Http\Controllers\Contractor\UploadContractorController;
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

    Route::get('/profile', [PagesController::class, 'profile'])->name('contractor.profile');
    Route::get('/profile/edit', [PagesController::class, 'edit'])->name('contractor.edit');
    Route::post('/profile/update', [PagesController::class, 'update'])->name('contractor.update');

    Route::get('/project/details/{id}', [PagesController::class, 'details'])->name('contractor.details');
    Route::post('/project/details/comment/{project_id}', [UploadContractorController::class, 'comment'])->name('contractor.comment');
    Route::post('/project/details/reply/{comment_id}', [UploadContractorController::class, 'reply'])->name('contractor.reply');

});

// ============================ Contractor routes =======================

//------------------------------------------------------------------------------

// ============================ Customer routes =======================

Route::namespace('Customer')->prefix('customer')->group(function(){
    
    Route::get('/homepage', [CustomerPagesController::class, 'homepage'])->name('customer.homepage');
    Route::get('/construction_style', [CustomerPagesController::class, 'construction_style'])->name('customer.construction_style');
    Route::get('/your_project', [CustomerPagesController::class, 'your_project'])->name('customer.your_project');

    Route::get('/profile', [CustomerPagesController::class, 'profile'])->name('customer.profile');
    Route::get('/profile/edit', [CustomerPagesController::class, 'edit'])->name('customer.edit');
    Route::post('/profile/update', [CustomerPagesController::class, 'update'])->name('customer.update');

    Route::post('/upload', [UploadController::class, 'upload'])->name('customer.upload');
    Route::get('/project/details/{id}', [CustomerPagesController::class, 'details'])->name('customer.details');
    Route::post('/project/details/comment/{project_id}', [UploadController::class, 'comment'])->name('customer.comment');
    Route::post('/project/details/reply/{comment_id}', [UploadController::class, 'reply'])->name('customer.reply');

});
// ============================ Customer routes =======================


