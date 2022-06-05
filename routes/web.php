<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruevasController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FotosController;
use App\Http\Controllers\ProductosController;

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


/*---------------------------------------------Principal----------------------------------------------*/
Route::get('/', [PrincipalController::class , 'prin'])->name('prueva.prin');




/*---------------------------------------------Pruevas----------------------------------------------*/

Route::get('/listarprueva', [PruevasController::class , 'listarprueva'])->name('prueva.listarprueva');
Route::get('/create', [PruevasController::class , 'create'])->name('prueva.create');
Route::get('/lif', [PruevasController::class , 'lif'])->name('prueva.lif');
Route::post('/add', [PruevasController::class , 'store'])->name('prueva.store');

Route::get('/editar/{id}', [PruevasController::class , 'editar'])->name('prueva.editar');
Route::delete('/destroy/{id}', [PruevasController::class , 'destroy'])->name('prueva.destroy');
Route::put('/update/{id}', [PruevasController::class , 'update'])->name('prueva.update');


/*---------------------------------------------Fotos----------------------------------------------*/
Route::get('/vistafoto', [FotosController::class , 'vistafoto'])->name('fotos.vistafoto');
Route::get('/cargar_foto', [FotosController::class , 'cargar_foto'])->name('fotos.cargar_foto');
Route::post('/addfoto', [FotosController::class , 'store'])->name('fotos.store');


/*---------------------------------------------Productos----------------------------------------------*/
Route::get('/registro', [ProductosController::class , 'registro'])->name('productos.registro'); #vista
Route::post('/addpro', [ProductosController::class , 'store'])->name('productos.store'); #registrar
Route::get('/vistarproducto', [ProductosController::class , 'vistarproducto'])->name('productos.vistarproducto');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
#Route::get('/principal', [App\Http\Controllers\HomeController::class, 'p'])->name('principal');
#Route::get('/', [PrincipalController::class, 'prin'])->name('principal');
