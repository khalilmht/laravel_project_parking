<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ClientController;



Route::get('/', [VoitureController::class, 'Voitures'])->name('list.voitures');
Route::get('create', [VoitureController::class, 'create'])->name('create.voitures');
Route::post('store', [VoitureController::class, 'store'])->name('store.voitures');
Route::delete('delete_vr/{id}', [VoitureController::class, 'destroy'])->name('delete.voiture');
Route::get('facture/{id}', [VoitureController::class, 'facture'])->name('facture.client');

Route::get('edit_vr/{id}', [VoitureController::class, 'edit'])->name('edit.voiture');
Route::put('update_vr/{id}', [VoitureController::class, 'update'])->name('update.voiture');
// Route::delete('update_vr/{id}', [ArticleController::class, 'destroy'])->name('update.voiture');

Route::get('clients', [ClientController::class, 'Clients'])->name('list.client');
Route::get('create_cl', [ClientController::class, 'create'])->name('create.client');
Route::post('store_cl', [ClientController::class, 'store'])->name('store.client');

Route::get('edit_cl/{id}', [ClientController::class, 'edit'])->name('edit.client');
Route::put('update_cl/{id}', [ClientController::class, 'update'])->name('update.client');
Route::delete('delete_cl/{id}', [ClientController::class, 'destroy'])->name('delete.client');










