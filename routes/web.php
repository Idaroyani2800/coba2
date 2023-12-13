<?php

use Illuminate\Support\Facades\Route;
Use App\Controllers\Controller;
Use App\Http\Controllers\ProductController;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\AuthController;
Use App\Http\Controllers\ContactController;




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


Route::get('/Ida Royani', function () {
    return view('Saya Siswa RPL');
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/data_guru', function () {
    return view('data_guru');
});
Route::get('/data_siswa', function () {
    return view('data_siswa');
});
Route::get('/user/{id}', function ($id) {
    return "User {$id}";
});


//route resource
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::get('/tampil', [ProductController::class, 'tampil']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/tipsberkebun', function () {
    return view('tipsberkebun');
});

Route::get('/carapemupukan', function () {
    return view('carapemupukan');
});

Route::get('hama', function () {
    return view('hama');
});

Route::get('/tampil/search', [ProductController::class, 'search']);

//route contact
// Route::resource('/contact', \App\Http\Controllers\ContactController::class);
Route::get('/tampil', [ProductController::class, 'tampil']);

Route::group(['middleware' =>'guest'], function (){
    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::post('/register', [AuthController::class,'registerPost'])->name('register');
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login', [AuthController::class,'loginPost'])->name('login');
});
Route::group(['middleware' =>'auth'], function (){
    Route::get('/dashboard', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get ('/contact', [ContactController::class, 'contact']);

Route::post ('/proses-kirim', [ContactController::class, 'prosesKirim'])->name('contact.send');

// auth
