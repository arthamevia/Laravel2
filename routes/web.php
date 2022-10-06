<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MtMController;
use App\Http\Controllers\ExtracurricularController;
use App\Models\Anggota;
use App\Models\Hadiah;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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

    return $wali[2]->nama;
});

// relsasi one to many
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);

// Route::get('/', function () {
//     return view('users');
// });

// Many to Many
Route::get('/anggota', [\App\Http\Controllers\MtMController::class, 'index']);
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
// role
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
