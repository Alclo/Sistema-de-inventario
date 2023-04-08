<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', function () {
    return view('auth.login');
});
/*Route::get('/admin', function () {
   return view('admin.index');
});*/
Route::get('/empleado', function () {
    return view('empleado.index');
});

//Route::get('/admin/create',[UsuariosController::class,'create']);
Route::resource('admin',UsuariosController::class)->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=> 'auth'],function(){
    
    Route::get('/',[UsuariosController::class, 'index'])->name('home');
});