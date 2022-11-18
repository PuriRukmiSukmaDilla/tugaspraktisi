<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

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

Route::get('/halo',[ujicobaController::class,'index']);
Route::get('/produk','ProdukController@index');
Route::get('/produk',[App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/show',[ProdukController::class,'show']);
Route::get('/show',[ProdukController::class,'show_eloquent']);
Route::get('/insert',[ProdukController::class,'insert_eloquent']);
Route::get('/insert',[App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/update',[ProdukController::class,'update_eloquent']);
Route::get('/update',[App\Http\Controllers\ProdukController::class, 'index']);

Route::get('/halaman',function(){
	$title = 'DORAEMON';
	$konten = 'nobita: part 2';
	return view('konten.halaman',compact('title','konten'));
});
Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
	Route::group(['middleware' => ['logincheck:admin']], function () {
		Route::resource('admin', AdminController::class);
	});
	Route::group(['middleware' => ['logincheck:editor']], function () {
		Route::resource('editor', EditorController::class);
	});
});
