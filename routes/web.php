<?php

use App\Models\ToDo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toDocontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', function () {
    return view('todos.show');
});

Route::resource('todolists', toDocontroller::class);