<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('form');
})->name('home');

Route::get('/courses', function () {
    return view('courses.index');
})->name('courses');

Route::get('/courses/{name}', function ($name) {
    return view('courses.course', compact('name'));
})->name('courses.course');

Route::get('/store', function () {
    return view('store');
})->name('store');


