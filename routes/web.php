<?php

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



Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->middleware('roles:admin'); 

Route::get('/attente',[App\Http\Controllers\HomeController::class, 'attente'])->name('attente')->middleware('roles:user');
Auth::routes();


Route::post('/categorie/modifier/{id}', [App\Http\Controllers\ContainerController::class, 'update'])->middleware('roles:admin');


Route::get('/categorie/{id}/{name}', [App\Http\Controllers\AdministrationController::class, 'getCategory'])->middleware('roles:admin');
Route::get('/categorie/changer/{id}/{name}', [App\Http\Controllers\ContainerController::class, 'show'])->middleware('roles:admin');
Route::get('/demarches/{id}/{name}', [App\Http\Controllers\AdministrationController::class, 'getDemarches'])->middleware('roles:admin')->name('demarches');
Route::get('/demarche/modifier/{id}/{subcontainerId}', [App\Http\Controllers\ProcessController::class, 'updateForm'])->middleware('roles:admin');
Route::post('/demarche/modifier/{id}/{subcontainerId}', [App\Http\Controllers\ProcessController::class, 'update'])->middleware('roles:admin');
Route::get('/demarche/creer/{id}', [App\Http\Controllers\ProcessController::class, 'storeForm'])->middleware('roles:admin');
Route::post('/demarche/creer/{id}', [App\Http\Controllers\ProcessController::class, 'store'])->middleware('roles:admin');
Route::get('/demarche/supprimer/{id}/{name}', [App\Http\Controllers\ProcessController::class, 'destroy'])->middleware('roles:admin');
Route::get('/demarche/supprimer/{id}/{subcontainerId}', [App\Http\Controllers\ProcessController::class, 'destroy'])->middleware('roles:admin');


Route::post('/sous-categorie/modifier/{id}/{containerId}', [App\Http\Controllers\SubcontainerController::class, 'update'])->middleware('roles:admin');
Route::get('/sous-categorie/modifier/{id}/{name}', [App\Http\Controllers\SubcontainerController::class, 'updateForm'])->middleware('roles:admin');
Route::post('/sous-categorie/creer/{id}', [App\Http\Controllers\SubcontainerController::class, 'store'])->middleware('roles:admin');
Route::get('/sous-categorie/creer/{id}/{name}', [App\Http\Controllers\SubcontainerController::class, 'storeForm'])->middleware('roles:admin');
Route::post('/sous-categorie/supprimer/{id}', [App\Http\Controllers\SubcontainerController::class, 'suprimerForm'])->middleware('roles:admin');
Route::get('/sous-categorie/supprimer/{id}/{containerId}', [App\Http\Controllers\SubcontainerController::class, 'destroy'])->middleware('roles:admin');
Route::get('/administration', [App\Http\Controllers\AdministrationController::class, 'get'])->middleware('roles:admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('roles:admin');
Route::get('password/reset/', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset.token');

