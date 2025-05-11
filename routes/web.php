<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\TechnologyController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/project/{project}', [HomeController::class, 'project'])->name('project');

Route::get('/connexion', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login');

Route::post('/connexion', [AuthController::class, 'doLogin']);

Route::delete('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::post('/contact', [ContactController::class, 'contact'])->name('contact.mail');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeAdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/projects', ProjectController::class);
    Route::resource('/technologies', TechnologyController::class);
});
