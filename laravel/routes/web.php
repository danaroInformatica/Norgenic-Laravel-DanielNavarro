<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/libros', function() {
    return view('libros');

});
Route::get('/contacto', function() {
    return view('contacto'); 
});


Route::resource('/books', BookController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
