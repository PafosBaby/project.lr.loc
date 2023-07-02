<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('test', [TestController::class, 'testPage']);
Route::get('catalog/product', [TestController::class, 'productpage']);
Route::get('template', [TestController::class, 'templatePage']);

// Домашние задание №1


Route::get('Homework', [TestController::class, 'firstPage']);
