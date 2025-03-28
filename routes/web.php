<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//página principal de listagem
Route::get('/', [UserController::class, 'index'])->name('users.index');
//página do formulário para gravar 
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//ação do formulário para salvar os contatos
Route::post('/users', [UserController::class, 'store'])->name('users.store');
//ação do botão editar
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//ação do formulário de edição
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
//ação do botão excluir
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');