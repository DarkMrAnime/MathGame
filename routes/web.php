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

Route::get('/min/basic', function () {
    return view('Sommen.Min.Basic');
});
Route::get('/plus/basic', function () {
    return view('Sommen.Plus.Basic');
});
Route::get('/delen/basic', function () {
    return view('Sommen.Divide.Basic');
});
Route::get('/keer/basic', function () {
    return view('Sommen.Times.Basic');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
