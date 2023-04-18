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
    return view('welcome');
});

Route::get('/mywelcome', function () {
    return view('mywelcome', ['name' => 'Nurs']);
});

Route::get('/subjects', function () {
    return view('subjects');
});

Route::get('/subjects/newsubject', function () {
    return view('newsubject');
});
