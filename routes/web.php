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

Route::get('/min', function () {
    return view('Sommen.Min.index');
});
Route::get('/plus', function () {
    return view('Sommen.Plus.index');
});
Route::get('/delen', function () {
    return view('Sommen.Divide.index');
});
Route::get('/keer', function () {
    return view('Sommen.Times.index');
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
