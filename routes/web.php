<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteVentaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermisoController;

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
    return view('pricing');
});

Route::get('pagar', function () {
    return view('payment-details');
});

Route::view('login', 'login')->name('login');

Route::post('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('Empresa', EmpresaController::class);

Route::group(['middleware' => 'auth'], function () {

    Route::resource('ReporteVenta', ReporteVentaController::class);

    Route::resource('Usuario', UsuarioController::class);

    Route::resource('Rol', RolController::class);

    Route::resource('Permiso', PermisoController::class);

});
