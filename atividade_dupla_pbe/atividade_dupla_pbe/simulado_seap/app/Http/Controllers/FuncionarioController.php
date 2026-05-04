<?php

namespace App\Http\Controllers;
use App\Models\Funcionario;
use App\Models\Departamentos;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function cadastrar(){
        $departamentos = Departamentos::all();
        return view('cadastro', compact('departamentos'));
    }

    public function listar(){
        $funcionarios = Funcionario::all();
        return view('listar', compact('funcionarios'));
    }

    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255|',
            'sobrenome' => 'required|string|max:255|',
            'cargo' => 'required|string|max:255|',
            'email' => 'required|string|max:255|',
            'dataAdmissao' => 'required|string|max:255|',
            'salario' => 'required|numeric|max:255|',
            

        ]);

        Funcionario::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'dataAdmissao' => $request->dataAdmissao,
            'salario' => $request->salario,
        ]);

        return redirect()->back()->with('success', 'Funcionário Cadastrado com Sucesso!');
    }
}


