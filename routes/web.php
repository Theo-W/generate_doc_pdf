<?php

use App\Http\Controllers\DocumentController;
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

Route::get('/', [DocumentController::class, 'index'])->name('home');

Route::prefix('/doc')->name('doc.')->group(function() {
    Route::get('/create', [DocumentController::class, 'create'])->name('create');
    Route::post('/create', [DocumentController::class, 'store'])->name('store');
    Route::get('/edit/{id}/{slug}', [DocumentController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [DocumentController::class, 'update'])->name('update');
    Route::get('/show/{id}/{slug}', [DocumentController::class, 'show'])->name('show');
});

Auth::routes();
