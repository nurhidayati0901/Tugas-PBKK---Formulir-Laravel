<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;


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
})->name('home');

Route::get('/pegawai', function() {
    return view('welcome-pegawai');
});

Route::redirect("/employee", "/pegawai");

// Route::get("/pegawai/{id}", function ($id) {
//     return "Pegawai dengan id: " . $id . ".";
// });

// Route::get("/pegawai/{id}", function ($id) {
//     return "Pegawai dengan id: " . $id . ".";
// })->where('id', '[0-9]+');

// Route::get("/pegawai/{id}", function ($id) {
//     return "Pegawai dengan id: " . $id . ".";
// })->whereNumber('id');

// Route::get("/pegawai/{id}/city/{city}", function ($id, $city) {
//     return "Pegawai dengan id: " . $id . ", dengan kota: " . $city . ".";
// })->whereNumber('id')->whereAlpha('city');

// Route::prefix("/pegawai")->group(function() {
//     Route::get("/view", function () {
//         return "Pegawai Laravel.";
//     });
//     Route::get("/{id}", function ($id) {
//         return "Pegawai dengan id: " . $id . ".";
//     })->whereNumber('id');
//     Route::get("/name/{name}", function ($name) {
//         return "Pegawai dengan name: " . $name . ".";
//     })->whereAlpha('name');
// });

Route::middleware('date')->prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
});

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest');

Route::get('/input', [FormController::class, 'input'])->name('input-form');
Route::post('/proses', [FormController::class, 'proses'])->name(('proses-form'));

Route::get('/basic', function(){
    return 'Hallo ngab, coba basic';
});

Route::get('/header', function(){
    return response('Hallo', 200)->header('Content-Type','text/html');
});

Route::get('/header-cookie', function(){
    return response('Hallo', 200)
    ->header('Content-Type','text/html')
    ->withcookie('name','Fitrah Arie');
});

Route::get('/json', function(){
    return response()->json([
        'Nama1' => 'Fitrah',
        'Nama2' => 'Ryan'
    ]);
});

Route::get('/cookie', function () {
    $content = 'Hello World';
    $type = 'text/plain';
    $minutes = 1;
    return response($content)
                ->header('Content-Type', $type)
                ->cookie('name', 'value', $minutes);
});

Route::get('/dashboard',function(){
    return redirect('/');
});

// Tugas 1 Form Laravel
Route::get('/buku', [BookController::class, 'index'])->name('show-book');
Route::get('/input-buku', [BookController::class, 'showInputForm'])->name('input-book');
Route::post('/input-buku', [BookController::class, 'create'])->name('proses-book');

// Tugas 2 Blog
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);
Route::get('/categories', [CategoryController::class, 'find']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'findSlug']);
Route::get('/authors/{author:username}', [AuthorController::class, 'findUsername']);