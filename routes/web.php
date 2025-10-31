<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/vermais/{id}}',[ProdutoController::class, 'show'])->name('produtos.show');


Route::get('/carrinho',[CarrinhoController::class, 'index'])->name('carrinho.index');
Route::post('/carrinho/{id}',[CarrinhoController::class, 'store'])->name('carrinho.store');
Route::delete('/carrinho/{id}',[CarrinhoController::class, 'destroy'])->name('carrinho.destroy');



