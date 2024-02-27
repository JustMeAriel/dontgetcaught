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
    return view('index1');


});
Route::get('/welcome', function () {
    return view('test');


});

Route::get('/controller', [GaleriController::class, 'controller'])->name('galeri.controller');
Route::get('/model', [GaleriController::class, 'model'])->name('galeri.model');
Route::get('/migration', [GaleriController::class, 'migration'])->name('galeri.migration');
Route::get('/command', [GaleriController::class, 'command'])->name('galeri.command');
Route::get('/route', [GaleriController::class, 'route'])->name('galeri.route');
Route::get('/view', [GaleriController::class, 'view'])->name('galeri.view');
Route::get('/layouts', [GaleriController::class, 'layouts'])->name('galeri.layouts');

