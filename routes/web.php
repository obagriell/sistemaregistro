<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController; 

Route::get('/cadastro/create', [CadastroController::class, 'create'])->name('cadastros.create');
Route::post('/cadastro/store', [CadastroController::class, 'store'])->name('cadastros.store');
Route::get('/cadastros', [CadastroController::class, 'index'])->name('cadastros.index');

