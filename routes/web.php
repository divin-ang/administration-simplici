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

// il ya 2 roles dans l'application admin et user

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->middleware('roles:admin');
Route::post('/compte',[App\Http\Controllers\ContactController::class, 'create'])->name('newUser')->middleware('roles:admin');
Route::get('/compte',[App\Http\Controllers\ContactController::class, 'index'])->name('newcompte')->middleware('roles:admin');   

Route::get('/attente',[App\Http\Controllers\HomeController::class, 'attente'])->name('attente')->middleware('roles:user');// seule page accéssible à un utilisateur avec le rôle user
Auth::routes();


Route::post('/categorie/modifier/{id}', [App\Http\Controllers\ContainerController::class, 'update'])->middleware('roles:admin');

//categorie
Route::get('/categorie/{id}/{name}', [App\Http\Controllers\AdministrationController::class, 'getCategory'])->middleware('roles:admin');
Route::get('/categorie/changer/{id}/{name}', [App\Http\Controllers\ContainerController::class, 'show'])->middleware('roles:admin');


// routes pour les démarches
Route::get('/demarches/{id}/{name}', [App\Http\Controllers\AdministrationController::class, 'getDemarches'])->middleware('roles:admin')->name('demarches');
Route::get('/demarche/modifier/{id}/{subcontainerId}', [App\Http\Controllers\ProcessController::class, 'updateForm'])->middleware('roles:admin');
Route::post('/demarche/modifier/{id}/{subcontainerId}', [App\Http\Controllers\ProcessController::class, 'update'])->middleware('roles:admin');
Route::get('/demarche/creer/{id}/{name}', [App\Http\Controllers\ProcessController::class, 'storeForm'])->middleware('roles:admin');
Route::post('/demarche/creer/{id}', [App\Http\Controllers\ProcessController::class, 'store'])->middleware('roles:admin');
Route::get('/demarche/ajouter/{id}/{name}', [App\Http\Controllers\ProcessController::class, 'addForm'])->middleware('roles:admin');
Route::post('/demarche/ajouter/{id}', [App\Http\Controllers\ProcessController::class, 'add'])->middleware('roles:admin');
Route::get('/demarche/supprimer/{id}/{name}', [App\Http\Controllers\ProcessController::class, 'destroy'])->middleware('roles:admin');
Route::get('/demarche/supprimer/page/{id}/{subcontainerId}', [App\Http\Controllers\ProcessController::class, 'destroyConfirm'])->middleware('roles:admin');
Route::get('/demarche/supprimer/{id}/{subcontainerId}', [App\Http\Controllers\ProcessController::class, 'destroy'])->middleware('roles:admin');
Route::get('/demarche/supprimer/', [App\Http\Controllers\ProcessController::class, 'index'])->middleware('roles:admin');
Route::get('/demarche/supprimer/{id}', [App\Http\Controllers\ProcessController::class, 'destroyEvryWhere'])->middleware('roles:admin');
Route::get('/demarche/page/{id}', [App\Http\Controllers\ProcessController::class, 'destroyEvryWhereForm'])->middleware('roles:admin');
Route::get('/demarche/documents/{id}', [App\Http\Controllers\DocumentController::class, 'ajoutDocument'])->middleware('roles:admin');
Route::get('/demarche/documents/creer/{id}', [App\Http\Controllers\DocumentController::class, 'creerDocumentForm'])->middleware('roles:admin');
Route::get('/demarche/documents/dupliquer/{id}', [App\Http\Controllers\DocumentController::class, 'dupliquerDocumentForm'])->middleware('roles:admin');
Route::post('/demarche/documents/creer/{id}', [App\Http\Controllers\DocumentController::class, 'creerDocument'])->middleware('roles:admin');
Route::post('/demarche/documents/dupliquer/{id}', [App\Http\Controllers\DocumentController::class, 'dupliquerDocument'])->middleware('roles:admin');
Route::get('/demarche/documents/modifier/{id}/{process_id}', [App\Http\Controllers\DocumentController::class, 'modifierDocumentForm'])->middleware('roles:admin');
Route::post('/demarche/documents/modifier/{id}/{process_id}', [App\Http\Controllers\DocumentController::class, 'modifierDocument'])->middleware('roles:admin');
//////////////////////////////////
Route::get('/demarche/documents/supprimer/{id}/{process_id}', [App\Http\Controllers\DocumentController::class, 'supprimerDocument'])->middleware('roles:admin');
Route::get('/demarche/documents/', [App\Http\Controllers\DocumentController::class, 'index'])->middleware('roles:admin');
Route::get('/demarche/documents/supprimer-partout/{id}', [App\Http\Controllers\DocumentController::class, 'supprimerDocumentPartout'])->middleware('roles:admin');
Route::get('/demarche/documents/supprimer-document/{id}', [App\Http\Controllers\DocumentController::class, 'supprimerDocumentPartoutForm'])->middleware('roles:admin');

Route::post('/demarche/documents/dupliquer/{id}/{process_id}', [App\Http\Controllers\DocumentController::class, 'dupliquerDocumentForm'])->middleware('roles:admin');
// routes pour les sous categories
Route::post('/sous-categorie/modifier/{id}/{containerId}', [App\Http\Controllers\SubcontainerController::class, 'update'])->middleware('roles:admin');
Route::get('/sous-categorie/modifier/{id}/{containerName}/{name}', [App\Http\Controllers\SubcontainerController::class, 'updateForm'])->middleware('roles:admin');
Route::post('/sous-categorie/creer/{id}', [App\Http\Controllers\SubcontainerController::class, 'store'])->middleware('roles:admin');
Route::get('/sous-categorie/creer/{id}/{name}', [App\Http\Controllers\SubcontainerController::class, 'storeForm'])->middleware('roles:admin');
Route::post('/sous-categorie/supprimer/{id}', [App\Http\Controllers\SubcontainerController::class, 'suprimerForm'])->middleware('roles:admin');
Route::get('/sous-categorie/supprimer/{id}/{containerId}', [App\Http\Controllers\SubcontainerController::class, 'destroy'])->middleware('roles:admin');
Route::get('/sous-categorie/supprimer/page/{id}/{containerId}', [App\Http\Controllers\SubcontainerController::class, 'destroyForm'])->middleware('roles:admin');
Route::get('/administration', [App\Http\Controllers\AdministrationController::class, 'get'])->middleware('roles:admin');
Route::get('/tutoriel', [App\Http\Controllers\AdministrationController::class, 'tutoriel'])->middleware('roles:admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('roles:admin');
Route::get('/utilisateurs', [App\Http\Controllers\UserController::class, 'index'])->name('utilisateurs')->middleware('roles:admin');
Route::get('/utilisateur/modifier/{id}', [App\Http\Controllers\UserController::class, 'updateForm'])->name('utilisateurModifier')->middleware('roles:admin');
Route::get('/utilisateur/supprimer/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('utilisateurSupprimer')->middleware('roles:admin');
Route::get('/utilisateur/compte', [App\Http\Controllers\UserController::class, 'compte'])->name('compte')->middleware('auth');

Route::post('/utilisateur/modifier/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('utilisateurAipdate')->middleware('roles:admin');

Route::get('/services/liste', [App\Http\Controllers\ProviderController::class, 'index'])->name('provider_list')->middleware('roles:admin');
Route::get('/services/creer', [App\Http\Controllers\ProviderController::class, 'storeForm'])->name('provider_create')->middleware('roles:admin');
Route::post('/services/creer', [App\Http\Controllers\ProviderController::class, 'store'])->name('provider_store')->middleware('roles:admin');
Route::get('/services/modifier/{id}/{name}', [App\Http\Controllers\ProviderController::class, 'updateForm'])->name('provider_update_form')->middleware('roles:admin');
Route::post('/services/modifier/{id}/{name}', [App\Http\Controllers\ProviderController::class, 'update'])->name('provider_update')->middleware('roles:admin');
Route::get('/services/afficher/{id}/{name}', [App\Http\Controllers\ProviderController::class, 'show'])->name('provider_show')->middleware('roles:admin');

//Route::get('/utilisateurs', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
//Route::post('/password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset.token');

