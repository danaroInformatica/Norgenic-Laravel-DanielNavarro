<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/libros', function() {
    return view('libros'); 
});
Route::get('/contacto', function() {
    return view('contacto'); 
});