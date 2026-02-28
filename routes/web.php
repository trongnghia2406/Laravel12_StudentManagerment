<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Basic cơ bản
Route::get('/', function (){
    return 'Hello Laravel 12';
});
// Kết quả: Khi truy cập vào đường dẫn http://localhost:8000/ sẽ hiển thị "Hello Laravel 12"

Route::get('/about', function (){
    return 'About Us';
});
// Kết quả: Khi truy cập vào đường dẫn http://localhost:8000/about sẽ hiển thị "About Us"

// Route nhóm với prefix và đặt tên cho route
Route::prefix('details')->group(function(){
    Route::get('/students', function (){
        return 'Students Details';
    }) -> name('students-Details');
    // Kết quả: Khi truy cập vào đường dẫn http://localhost:8000/details/students sẽ hiển thị "Students Details"
    Route::get('/teachers', function (){
        return 'Teachers Details';
    }) -> name('teachers-Details');
    // Kết quả: Khi truy cập vào đường dẫn http://localhost:8000/details/teachers sẽ hiển thị "Teachers Details"
});