<?php

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


Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('moble/create',   [App\Http\Controllers\MoblieController::class, 'create'])->name('moble.create');
Route::get('moble/index',   [App\Http\Controllers\MoblieController::class, 'index'])->name('moble.index');
Route::post('moble/store',   [App\Http\Controllers\MoblieController::class, 'store'])->name('moble.store');
Route::get('moble/show/{id}', [App\Http\Controllers\MoblieController::class, 'show'])->name('moble.show');
Route::get('moble/pdf/{id}', [App\Http\Controllers\MoblieController::class, 'print'])->name('moble.print');
Route::get('moble/edit/{id}', [App\Http\Controllers\MoblieController::class, 'edit'])->name('moble.edit');
Route::post('moble/update/{id}', [App\Http\Controllers\MoblieController::class, 'update'])->name('moble.update');