<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/vermais/{id}}',[ProdutoController::class, 'show'])->name('produtos.show');
