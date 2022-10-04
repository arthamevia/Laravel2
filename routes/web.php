<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// siswa
Route::resource('siswa', SiswaController::class);

// relasi one to one https://medium.com/@candraherdiansyah14/penalaran-relasi-database-laravel-8-7730cd561bae
Route::get('relasi-1', function () {
   
    $wali = App\Models\Wali::all();

    return $wali[0]->nama;
});

