<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [function () {
//    return view('welcome');
//}]);

Route::get('/', [TodoController::class, 'index'])->name('index');

Route::post('/', [TodoController::class, 'store'])->name('store');

Route::get('/{id}', [TodoController::class, 'status'])->name('status');

Route::get('/{id}/back', [TodoController::class, 'statusback'])->name('statusback');

Route::get('/{id}/del', [TodoController::class, 'delete'])->name('delete');


