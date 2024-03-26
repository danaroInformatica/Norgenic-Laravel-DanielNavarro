<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FormController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('/books', BookController::class);
Auth::routes();

Route::get('/contacto', 'App\Http\Controllers\FormController@showForm');
Route::post('/contacto', 'App\Http\Controllers\FormController@processForm');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cambiar-idioma/{idioma}', function ($idioma) {
    LaravelLocalization::setLocale($idioma);
    return redirect()->back();
})->name('cambiar.idioma');