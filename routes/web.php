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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ContactForm', [ContactFormController::class, 'index'])
    ->name('contact.index');
// Route::post('/ContactForm', [ContactFormController::class, 'index'])
//     ->name('contact.index');

// name()名前付きルート
//ルート情報見るコマンド　sail artisan route:list
Route::post('/ContactForm/confirm', [ContactFormController::class, 'confirm'])
    ->name('contact.confirm');
// Route::post('/ContactForm', [ContactFormController::class, 'confirm'])
//     ->name('contact.confirm');