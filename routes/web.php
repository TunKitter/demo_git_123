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

Route::get('/home', function () {
    return 'Home';
});

Route::get('/home2', function () {
    return 'Home2';
});
Route::get('contact', function () {
    return view('welcome');
});
Route::get('contact2', function () {
    return view('welcome');
});
Route::get('contact3', function () {
    return view('welcome');
});
Route::get('contact4', function () {
    return view('welcome');
});
Route::get('contact5', function () {
    return view('welcome');
});
Route::get('truong', function () {
    return view('welcome');
});
Route::get('contact6', function () {
    return view('welcome');
});
Route::get('contact7', function () {
    return view('welcome');
});

Route::get('contact8', function () {
    return view('welcome');
});
Route::get('contact9', function () {
    return view('welcome');
});
Route::get('contact10', function () {
    return view('welcome');
});

