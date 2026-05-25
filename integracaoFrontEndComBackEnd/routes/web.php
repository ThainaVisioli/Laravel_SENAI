<?php

use App\Http\Controllers\NivelAcessoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// rotas nivel de acesso 
Route::get('/nivel-acesso/cadastro',[NivelAcessoController::class, 'cadastro'])->name('nivel-acesso.cadastro');

Route::post('/nivel-acesso/salvar', [NivelAcessoController::class, 'add'])->name('nivel-acesso.salvar');

Route::get('/nivel-acesso/listar', [NivelAcessoController::class, 'listar'])->name('nivel-acesso.listar');

Route::delete('nivel-acesso/deletar/{id}', [NivelAcessoController::class, 'deletar'])->name('nivel-acesso.deletar');
