<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto/listar', [ProdutoController::class, 'listar'])->name('produto.listar');


// =====================
// ROTAS ALUNO
// =====================

// LISTAR
Route::get('/produto/listar', [ProdutoController::class, 'listar'])
    ->name('produto.listar');

// FORM CADASTRO (AGORA CORRETO)
Route::get('/produto/cadastrar', [ProdutoController::class, 'create'])
    ->name('produto.cadastro');

// SALVAR
Route::post('/produto/salvar', [ProdutoController::class, 'add'])
    ->name('produto.salvar');

// EDITAR
Route::get('/produto/{id}/atualizar', [ProdutoController::class, 'atualizar'])
    ->name('produto.editar');

// UPDATE
Route::put('/produto/{id}/update', [ProdutoController::class, 'update'])
    ->name('produto.update');

// DELETE
Route::delete('/produto/{id}', [ProdutoController::class, 'deletar'])
    ->name('aluno.deletar');


// =====================
// ROTAS TURMA
// =====================

// FORM TURMA (pode continuar assim)
Route::get('/setor/cadastrar', function(){
    return view('cadastrosetor');
})->name('setor.cadastrosetor');

// SALVAR setor
Route::post('/setor/salvar', [SetorController::class, 'add'])
    ->name('setor.salvar');