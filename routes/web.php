<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UsersController;
use Inertia\Response;

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

Route::name("users.")->prefix('/users')->group(function () {
    Route::get('/', [UsersController::class, 'index'])->name('index');
    Route::get('/create', [UsersController::class, 'create'])->name('create');
    Route::get('/{id}', [UsersController::class, 'show'])->where('id', '[0-9]+')->name('show');
    Route::get('/{id}/edit', [UsersController::class, 'edit'])->where('id', '[0-9]+')->name('edit');
});

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');

Route::get("404", function() : Response {
    return Inertia::render('NotFound');
})->name('404');

Route::name("users.")->prefix('/users')->group(function () {
    Route::post('/', [UsersController::class, 'store'])->name('store');
    Route::put('/{id}', [UsersController::class, 'update'])->where('id', '[0-9]+')->name('update');
    Route::delete('/{id}', [UsersController::class, 'destroy'])->where('id', '[0-9]+')->name('destroy');
});