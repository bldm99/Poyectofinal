<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruevasController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FotosController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('principal');
});*/


/*---------------------------------------------Pruevas----------------------------------------------*/
Route::get('/', [PrincipalController::class , 'prin'])->name('prueva.prin');

/*---------------------------------------------Pruevas----------------------------------------------*/

Route::get('/listarprueva', [PruevasController::class , 'listarprueva'])->name('prueva.listarprueva');
Route::get('/create', [PruevasController::class , 'create'])->name('prueva.create');
Route::get('/lif', [PruevasController::class , 'lif'])->name('prueva.lif');
Route::post('/add', [PruevasController::class , 'store'])->name('prueva.store');




/*---------------------------------------------Fotos----------------------------------------------*/
Route::get('/vistafoto', [FotosController::class , 'vistafoto'])->name('fotos.vistafoto');
Route::get('/cargar_foto', [FotosController::class , 'cargar_foto'])->name('fotos.cargar_foto');
Route::post('/addfoto', [FotosController::class , 'store'])->name('fotos.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
