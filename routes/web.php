<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\BookController;

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
    return view('index');
});
Route::get('/about', function () {
    return view('about',[
        "name" => "Ilyasa Akbar Astira",
        "email" => "yasslimit01@gmail.com",
        "image" => "omenn aing.PNG"
    ]);
});

Route::get('/contact', function (){
    return view('contact');
});
Route::get('/blog', function (){
    return view('post');
});

Route::get('/halaman',[BookController::class,'index'])->name('halaman');

Route::get('/view','MatchCon@perkalian');
Route::get('/create','MatchCon@perkalian');
Route::get('/update','MatchCon@perkalian');
Route::get('/delete','MatchCon@perkalian');