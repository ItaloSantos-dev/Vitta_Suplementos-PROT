<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/vermais/{id}}',[ProdutoController::class, 'show'])->name('produtos.show');
Route::get('/buscar', [ProdutoController::class, 'buscar'])->name('produtos.buscar');

Route::get('/carrinho',[CarrinhoController::class, 'index'])->name('carrinho.index');
Route::post('/carrinho/{id}',[CarrinhoController::class, 'store'])->name('carrinho.store');
Route::delete('/carrinho/{id}',[CarrinhoController::class, 'destroy'])->name('carrinho.destroy');


Route::get('/marcas', [MarcaController::class, 'index'])->name('marcas.index');
Route::get('/filtrarpreco', [ProdutoController::class, 'filtroPreco'])->name('produtos.filtropreco');
Route::get('/{slug}', [ProdutoController::class, 'filtro'])->name('produtos.filtro');

Route::get('/marcas/{id}/produtos', [ProdutoController::class, 'produtosPorMarca'])->name('produtos.pormarcas');






