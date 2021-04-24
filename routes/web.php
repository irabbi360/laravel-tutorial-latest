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

Route::post('/image-upload-resize', [App\Http\Controllers\ImageUploadController::class, 'imageUploadResize'])
->name('imageUploadResize');









Route::get('helper', function () {
   $img = '1617895681.png';
   $fullPath = imgPath($img);

   dd($fullPath);
});

Route::get('helper2', function () {
    $newDate = changeDateFormat(date('Y-m-d'), 'm/d/Y');

    dd($newDate);
});






















Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/image-upload', [App\Http\Controllers\ImageUploadController::class, 'imageUpload'])->name('imageUpload');
