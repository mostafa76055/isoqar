<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientController;

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

Route::get('/', function () { return view('dashboard'); });

// Route::get('/client', [ClientController::class, 'index'])->name('client.index');


Route::get('client/index', [ClientController::class, 'index'])->name('client.index');
Route::get('client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::post('client/update/{id}', [ClientController::class, 'update'])->name('client.update');
Route::get('client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');


// Route::resource('clients', ClientController::class);
