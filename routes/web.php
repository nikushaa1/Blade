<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $quizzes = [
        [
            'name' => 'Quiz 1',
            'photo' => 'quiz1.jpg',
            'status' => 'active'
        ],
        [
            'name' => 'Quiz 2',
            'photo' => 'quiz2.jpg',
            'status' => 'inactive'
        ],
        [
            'name' => 'Quiz 3',
            'photo' => 'quiz3.jpg',
            'status' => 'pending'
        ],
    ];

    return view('home', compact('quizzes'));
})->name('home');

Route::post('/subscribe', function () {
    // Handle subscription logic here
})->name('subscribe');
