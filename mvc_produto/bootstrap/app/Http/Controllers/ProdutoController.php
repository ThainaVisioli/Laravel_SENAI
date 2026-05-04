<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Setores;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // LISTAR PRODUTOS
    public function listar(){
        $produtos = Produto::with('setor')->get();
        return view('listar', compact('produtos'));
    }

    // ABRIR TELA DE CADASTRO (IMPORTANTE)
    public function create(){
        $setores = Setores::all();
        return view('cadastro', compact('setores'));
    }

    // SALVAR PRODUTO
    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
            'setor_id' => 'required|exists:setores,id'
        ]);

        Produto::create([
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'preco' => $request->preco,
            'setor_id' => $request->setor_id
        ]);

        return redirect()->back()->with('success', 'Produto cadastrado com sucesso!');
    }

    // TELA DE ATUALIZAR
    public function atualizar ($id){
        $produto = Produto::findOrFail($id);
        $setores = Setores::all(); // pra trocar setor

        return view('atualizar', compact('produto','setores'));
    }

    // UPDATE
    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer',
            'preco' => 'required|numeric',
            'setor_id' => 'required|exists:setores,id'
        ]);

        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'preco' => $request->preco,
            'setor_id' => $request->setor_id
        ]);

        return redirect()->back()->with('success', 'Produto atualizado com sucesso!');
    }

    //DELETAR
    public function deletar($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produto.listar')
            ->with('success','Produto excluído com sucesso!');
    }
}