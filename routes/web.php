<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    return view('students.index');
});

Route::get('/students/create', function () {
    return view('students.create');
});

Route::get('/students/{id}', function ($id) {
    return view('students.show');
});

Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit');
});

Route::post('/students', function () {
    return redirect('/students')->with('success', 'Student added successfully!');
});

Route::put('/students/{id}', function ($id) {
    return redirect('/students')->with('success', 'Student updated successfully!');
});
