<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookkeepingController;
use App\Http\Controllers\ComputerSystemServicingController;
use App\Http\Controllers\OfficerController;
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

// Auth route
Route::middleware(['guest:web','preventBackHistory'])->name('auth.')->group(function () {
    // login
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('login/post', [AuthController::class, 'loginPost'])->name('login.post');
    //register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('register/post', [AuthController::class, 'registerPost'])->name('register.post');
});

//logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth','applicant','preventBackHistory'])->prefix('applicant/my')->name('applicant.')->group(function () {
    Route::get('dashboard', [ApplicantController::class, 'dashboard'])->name('dashboard');
    Route::get('sag/css', [ApplicantController::class, 'sagCss'])->name('sag.css');
    Route::get('sag/css/store', [ComputerSystemServicingController::class, 'store'])->name('sag.css.store');

    // bookkeeping
    Route::get('sag/bookkeeping', [ApplicantController::class, 'sagBookkeeping'])->name('sag.bookkeeping');
    Route::post('sag/bookkeeping/store', [BookkeepingController::class, 'store'])->name('sag.bookkeeping.store');
    
    //download or donwload file SAG
    Route::get('download', [ApplicantController::class, 'download'])->name('download');

});

Route::middleware(['auth','officer','preventBackHistory'])->prefix('officer/my')->name('officer.')->group(function () {
    Route::get('dashboard', [OfficerController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth','administrator','preventBackHistory'])->prefix('administrator/my')->name('administrator.')->group(function () {
    Route::get('dashboard', [AdministratorController::class, 'dashboard'])->name('dashboard');
    // officer
    Route::get('officer', [AdministratorController::class, 'officer'])->name('officer');
    Route::post('officer/store', [AdministratorController::class, 'OfficerStore']);
    Route::get('officer/edit/{user}', [AdministratorController::class, 'OfficerEdit']);
    Route::delete('officer/delete/{user}', [AdministratorController::class, 'OfficerDestroy']);
    Route::get('officer/list', [AdministratorController::class, 'OfficerList']);
});