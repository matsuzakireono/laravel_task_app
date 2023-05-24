<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ルート情報見るコマンド　sail artisan route:list
Route::get('/', function () {
    return view('welcome');
});
Route::get('/ContactForm', [ContactFormController::class, 'index'])->name('contact.index');
Route::get('/ContactForm/{id}}', [ContactFormController::class, 'show'])->name('contact.show');
Route::get('/ContactForm/{id}}/edit', [ContactFormController::class, 'edit'])->name('contact.edit');


Route::post('/ContactForm/{id}}', [ContactFormController::class, 'update'])->name('contact.update');
Route::post('/ContactForm/{id}}/delete', [ContactFormController::class, 'delete'])->name('contact.delete');
Route::post('/ContactForm/confirm', [ContactFormController::class, 'confirm'])->name('contact.confirm');
Route::post('/ContactForm/complete', [ContactFormController::class, 'store'])->name('contact.store');