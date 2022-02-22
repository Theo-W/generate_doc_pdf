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
Route::get('/create/doc', [DocumentController::class, 'create'])->name('create_doc');
Route::post('/create/doc', [DocumentController::class, 'store'])->name('create_doc_store');
Route::get('/edit/doc/{id}', [DocumentController::class, 'edit'])->name('edit_doc');
Route::post('/edit/doc/{id}', [DocumentController::class, 'update'])->name('edit_doc_update');
Route::get('/generate/pdf/{id}', [DocumentController::class, 'createPdf'])->name('generate_pdf');


Auth::routes();
