<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use App\Models\Funcionarios;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    // LISTAR
    public function listar(){
        $departamentos = Departamento::all();
        return view('listarDepartamento', compact('departamentos'));
    }

    // ABRIR FORMULÁRIO
    public function create(){
        $funcionarios = Funcionario::all();
        return view('cadastro', compact('funcionarios'));
    }

    // SALVAR
    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'datacriacao' => 'required|string|max:255',
            'orcamento' => 'required|numeric|max:255',
        ]);

        Departamentos ::create([
            'nome' => $request->nome,
            'datacriacao' => $request->dataCriacao,
            'orcamento' =>  $request->orcamento,
        ]);

        return redirect()->back()->with('success', 'departamento Cadastrado com Sucesso!');
    }

    // EDITAR
    public function atualizar($id){
        $departamento = Departamento::findOrFail($id);
        $funcionarios = Funcionario::all();

        return view('atualizar', compact('departamento', 'funcionarios'));
    }

    // UPDATE
    public function update(Request $request, $id){
        $request->validate([
           'nome' => 'required|string|max:255',
            'orcamento' => 'required|numeric|max:255',
            'dataCriacao' => 'required|string|max:255|unique:departamentos,dataCriação',
            'departamento_id' => 'required|exists:funcionarios,id'
        ]);

        $departamento = Departamento::findOrFail($id);

        $departamento->update([
            'nome' => $request->nome,
            'orcamento' =>  $request->orcamento,
            'dataCriacao' => $request->dataCriacao,
            'Departamento' => $request->departamento_id
        ]);

        return redirect()->route('Departamento.listar')->with('success', 'Departamento atualizado com sucesso!');
    }

    // DELETAR
    public function deletar($id){
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return redirect()->route('Departamento.listar')->with('success','Departamento excluído com sucesso!');
    }
}