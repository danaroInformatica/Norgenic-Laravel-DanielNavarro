<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/contacto', function() {
//     return view('contacto'); 
// });


Route::resource('/books', BookController::class);
Auth::routes();

Route::get('/contacto', 'App\Http\Controllers\FormController@showForm');
Route::post('/contacto', 'App\Http\Controllers\FormController@processForm');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
