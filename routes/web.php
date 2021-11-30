<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('Home');
});

Route::get('/Category/fiction', function() {
    return view('Category/fiction');
});

Route::get('/Category/fiction/page/2', function() {
    return view('Category/fiction2');
});

Route::get('//Category/fiction/page/3', function() {
    return view('Category/fiction3');
});

Route::get('/Category/science', function() {
    return view('Category/science');
});

Route::get('/Category/science/page/2', function() {
    return view('Category/science2');
});

Route::get('/Category/science/page/3', function() {
    return view('Category/science3');
});

Route::get('/Category/computer', function() {
    return view('Category/computer');
});

Route::get('/Category/computer/page/2', function() {
    return view('Category/computer2');
});

Route::get('/Category/computer/page/3', function() {
    return view('Category/computer3');
});

Route::get('/Category/detail', function() {
    return view('Category/detail');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/aboutUs', function() {
    return view('aboutUs');
});

Route::get('/page/2',function() {
    return view('homep2');
});

Route::get('/page/3', function() {
    return view('homep3');
});

Route::get('/fiction', function() {
    return view('fiction');
});

Route::get('/science', function() {
    return view('science');
});

Route::get('/computer', function() {
    return view('computer');
});

Route::get('/detail', function() {
    return view('detail');
});

Route::get('/detail','App\Http\Controllers\detail@home');
});