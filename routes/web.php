<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return 'Hello Laravel 12';
});

Route::get('/about', function (){
    return 'About Us';
});
