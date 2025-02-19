<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

Route::get('/', [PageController::class,"welcome"]);

Route::get("/hello", [PageController::class,"hello"]);

Route::get('/world', [PageController::class, 'world']);

Route::get('/user/{name?}', [PageController::class, 'showUser']);

Route::get('/posts/articles/{id}', [PageController::class, 'showArticle']);

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/posts/articles/{id}', ArticleController::class);
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show', 'create', 'store']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);
   
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Sadiya']);
// });
Route::get('/greeting', [WelcomeController::class,'greeting']);
