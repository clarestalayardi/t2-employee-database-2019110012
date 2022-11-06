<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', [App\Http\Controllers\EmployeesController::class, 'index']);
Route::get('/insert', [App\Http\Controllers\EmployeesController::class, 'insert']);
// Route::get('/update', [App\Http\Controllers\EmployeesController::class, 'update']);
