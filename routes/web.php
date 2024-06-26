<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return 'Halaman Tentang Kami';
});

Route::get('/kontak', function () {
    return 'Halaman Kontak Kami';
});
Route::get('/routing1', function () {
    return view('routing1');
});

Route::get('/routing2', function () {
    return view('routing2');
});

Route::middleware('middleware1')->group(function () {
    Route::get('/routing1', function () {
        return view('routing1');
    });

    Route::get('/routing2', function () {
        return view('routing2');
    });
});