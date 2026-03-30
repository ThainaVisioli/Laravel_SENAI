<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto/listar', [ProdutoController::class, 'listar'])->name('produto.listar');