<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;

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

Route::get('/2024', function () {
    return view('index');


});

Route::get('/', function () {
    return view('test');


});
Route::get('/command', [GaleriController::class, 'command'])->name('galeri.command');


