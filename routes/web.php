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
    return view('Sommen.Min.basic');
});
Route::get('/min/advanced', function () {
    return view('Sommen.Min.advanced');
});
Route::get('/min/expert', function () {
    return view('Sommen.Min.expert');
});

Route::get('/plus/basic', function () {
    return view('Sommen.Plus.basic');
});
Route::get('/plus/advanced', function () {
    return view('Sommen.Plus.advanced');
});
Route::get('/plus/expert', function () {
    return view('Sommen.Plus.expert');
});

Route::get('/delen/basic', function () {
    return view('Sommen.Divide.basic');
});
Route::get('/delen/advanced', function () {
    return view('Sommen.Divide.advanced');
});
Route::get('/delen/expert', function () {
    return view('Sommen.Divide.expert');
});

Route::get('/keer/basic', function () {
    return view('Sommen.Times.basic');
});
Route::get('/keer/advanced', function () {
    return view('Sommen.Times.advanced');
});
Route::get('/keer/expert', function () {
    return view('Sommen.Times.expert');
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
