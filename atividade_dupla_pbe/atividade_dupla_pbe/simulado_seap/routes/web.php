<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DepartamentoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionario/cadastrar', [FuncionarioController::class, 'cadastrar'])
    ->name('funcionario.cadastrar');

Route::get('/funcionario/listar', [FuncionarioController::class, 'listar'])
    ->name('funcionario.listar');

// FORM CADASTRO (AGORA CORRETO)
// Route::get('/funcionario/cadastrar', [FuncionarioController::class, 'create'])
//     ->name('funcionario.cadastro');

// SALVAR
Route::post('/funcionario/salvar', [FuncionarioController::class, 'add'])
    ->name('funcionario.salvar');

// EDITAR
Route::get('/funcionario/{id}/atualizar', [FuncionarioController::class, 'atualizar'])
    ->name('funcionario.editar');

// UPDATE
Route::put('/funcionario/{id}/update', [FuncionarioController::class, 'update'])
    ->name('funcionario.update');

// DELETE
Route::delete('/funcionario/{id}', [FuncionarioController::class, 'deletar'])
    ->name('funcionario.deletar');


// =====================
// ROTAS DEPARTAMENTO
// =====================

// FORM DEPARTAMENTO (pode continuar assim)
Route::get('/departamento/cadastrar', function(){
    return view('cadastrodepartamento');
})->name('departamento.cadastro');

// SALVAR DEPARTAMENTO
Route::post('/departamento/salvar', [DepartamentoController::class, 'add'])
    ->name('departamento.salvar');