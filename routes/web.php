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

Route::get('/hello', function(){
    return 'Hello world';
});

Route::get('/world', function(){
    return 'World';
});

Route::get('/greeting', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'Nama saya Sadiya Maritza dan NIM saya 2341720147';
});

Route::get('/user/{Sadiya}', function ($Sadiya) {
    return 'Nama saya '.$Sadiya;
    });
    
Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/posts/articles/{id}', function
($articlesId) {
    return "Post Articles ke-: ".$articlesId;
});

Route::get('/user/{name?}', function ($name='Jhon') {
    return 'Nama saya '.$name;
});