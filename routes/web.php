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

// Route có tham số
Route::get('/student/{id}/{reg}', function ($id, $reg){
    return "Mã sinh viên: $id, Số thứ tự đăng ký thi: $reg";
});
// Kết quả: Khi truy cập vào đường dẫn http://localhost:8000/student/123/456 sẽ hiển thị "Mã sinh viên: 123, Số thứ tự đăng ký thi: 456"

// Route fallback
Route::fallback(function (){
    return '404 Not Found';
});
// Kết quả: Khi truy cập vào bất kỳ đường dẫn nào không được định nghĩa trong các route trên sẽ hiển thị "404 Not Found"
