<?php

use Illuminate\Support\Facades\Route;
use App\Models\Role;
use App\Http\Controllers\Permission;
use App\Http\Controllers\Pengaduan;
use App\Http\Controllers\Tanggapan;
use App\Http\Controllers\PDF;


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
Route::view('/admin', 'home');



// Route::group(['prefix'=> 'role'], function(){
//     Route::post('/create', 'RoleController@create')->name('role.store');

// });
Route::resource('/role', RoleController::class);
Route::resource('/permission', PermissionController::class);
Route::resource('/pengaduan', PengaduanController::class);

Route::resource('/tanggapan', TanggapanController::class);
Route::get('/laporan','PengaduanController@laporan')->middleware('auth');
Route::get('/laporan/cetak','PengaduanController@pdf')->middleware('auth');
Route::get('/user/pengaduan', 'PengaduanController@pengaduanUser')->middleware('auth');


