<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\checkController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\subir;
use App\Http\Controllers\fotoineController;
use App\Http\Controllers\fotoineselfieController;
use App\Http\Controllers\fotoselfieController;
use App\Http\Controllers\archivoineController;


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
Route::controller(ImageController::class)->group(function () {
    Route::get('/image-upload', 'index')->name('image.form');
    Route::post('/upload-image', 'storeImage')->name('image.store');
    });
Route::get('/', function () { return view('inicio'); });
Route::get('inicio', function () { return view('inicio'); });
Route::get('check', checkController::class);
Route::get('subir', function () { return view('subir'); });
Route::get('fotoine', function () { return view('fotoine'); });
Route::get('fotoineselfie', function () { return view('fotoineselfie'); });
Route::get('fotoselfie', function () { return view('fotoselfie'); });
Route::get('archivoine', function () { return view('archivoine'); });
