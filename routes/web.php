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

Route::get('/', function () {

    $data = [
        'link' => 'Home',
        'linkTwo' => 'About',
        'message' => 'Hello world with Data',
    ];
    
    return view('home', $data);
})->name('home');

Route::get('/about', function () {

    $data = [
        'link' => 'Back Home',
        'linkTwo' => 'About',
        'message' => 'Hello world About',
    ];

    return view('about', $data);
})->name('about');

/* Route::get('/', function () {

    $messageTwo = 'Hello world with compact';

    return view('home', compact('messageTwo'));
}); */