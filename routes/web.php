<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\FurnitureController;


Route::get('/sample', [SampleController::class, 'index'])->name('sample.index');
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

Route::resource('books', BookController::class);
Route::resource('youtubes', YoutubeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //ここから家具サイト
    Route::resource('furnitures', FurnitureController::class);
});
// Route::resource('funitures', FurnitureController::class);

require __DIR__ . '/auth.php';