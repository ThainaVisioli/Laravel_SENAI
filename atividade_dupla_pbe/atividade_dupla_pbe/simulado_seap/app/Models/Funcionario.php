<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model{

    protected $fillable = [
        'nome',
        'sobrenome',
        'cargo',
        'email',
        'dataAdmissao',
        'salario'
    ];

    public function funcionario(){
        return $this->hasMany(Funcionario::class);
    }
}