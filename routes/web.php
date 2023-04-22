<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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

Route::get('/mywelcome', [ ProjectController::class, "mywelcome"]);

Route::get('/subjects', [ ProjectController::class, "subjects"]);

Route::get('/newsubject', [ ProjectController::class, "newsubject"]);
Route::post('/newsubject', [ ProjectController::class, "store"]);

Route::get('/about', [ ProjectController::class, "about"]);
