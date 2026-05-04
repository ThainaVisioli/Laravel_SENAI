<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'numCorredor' => 'required|integer|unique:setores,numCorredor'
        ]);

        Setor::create([
            'nome' => $request->nome,
            'numCorredor' => $request->numCorredor
        ]);

        return redirect()->back()->with('success', 'Setor cadastrado com sucesso!');
    }
}