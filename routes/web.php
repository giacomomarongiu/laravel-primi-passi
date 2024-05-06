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
        'message' => 'Hello world with Data',
    ];
    
    return view('home', $data);
});

/* Route::get('/', function () {

    $messageTwo = 'Hello world with compact';

    return view('home', compact('messageTwo'));
}); */