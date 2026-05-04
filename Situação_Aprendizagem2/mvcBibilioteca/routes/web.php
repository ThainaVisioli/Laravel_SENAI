<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SetorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livro/listar',[LivroController::class, 'listar'])->name('livro.listar');

Route::get('/livro/cadastrar',[LivroController::class, 'create'])->name('livro.cadastro');

Route::post('/livro/salvar',[LIvroController::class, 'add'])->name('livro.salvar');

Route::get('/livro/{id}/atualizar', [LivroController::class, 'atualizar'])->name('livro.atualizar');

Route::delete('/livro/{id}', [LivroController::class, 'deletar'])->name('livro.deletar');


Route::get('/editora/cadastrar', function(){
    return view('cadastroEditora');
})->name('editora.cadastro');

Route::post('/editora/salvar',[editoraController::class, 'add'])->name('editora.salvar');

Route::get('/editora/listar',[SetorController::class, 'listarSetor'])->name('editora.listar');