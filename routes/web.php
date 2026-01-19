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
    $students = [
        1 => [
            'id' => 1,
            'name' => 'Dave Ramos',
            'email' => 'dave.ramos@example.com',
            'course' => 'Information Technology',
            'year_level' => '2nd Year'
        ],
        2 => [
            'id' => 2,
            'name' => 'Renz Tristan',
            'email' => 'renz.tristan@example.com',
            'course' => 'Business Administration',
            'year_level' => '1st Year'
        ]
    ];

    $student = $students[$id] ?? abort(404);

    return view('students.show', compact('student'));
});

Route::get('/students/{id}/edit', function ($id) {
    $students = [
        1 => [
            'id' => 1,
            'name' => 'Dave Ramos',
            'email' => 'dave.ramos@example.com',
            'course' => 'Information Technology',
            'year_level' => '2nd Year'
        ],
        2 => [
            'id' => 2,
            'name' => 'Renz Tristan',
            'email' => 'renz.tristan@example.com',
            'course' => 'Business Administration',
            'year_level' => '1st Year'
        ]
    ];

    $student = $students[$id] ?? abort(404);

    return view('students.edit', compact('student'));
});

Route::post('/students', function () {
    return redirect('/students')->with('success', 'Student added successfully!');
});

Route::put('/students/{id}', function ($id) {
    return redirect('/students')->with('success', 'Student updated successfully!');
});
