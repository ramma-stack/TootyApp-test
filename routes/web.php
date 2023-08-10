<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Control;

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
Route::get('/one', function () {
    return view('one');
});

Route::get('/classes', Control\Classes::class)->name('classes');

Route::get('/levels', Control\Levels::class)->name('levels');

Route::get('/print-page', Control\PrintPage::class)->name('print-page');