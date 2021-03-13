<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

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

Route::get('/productos', [ProductsController::class, 'index']);

Route::post('/subir-productos', [ProductsController::class, 'fileImportProducts']);
Route::get('/descargar-productos', [ProductsController::class, 'fileExportProducts']);
