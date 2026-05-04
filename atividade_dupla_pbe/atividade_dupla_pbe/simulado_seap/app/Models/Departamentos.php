<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model{

    protected $fillable = [
        'nome',
        'datacriacao',
        'orcamento',
        'sigla'
    ];

    public function funcionario(){
        return $this->belongsTo(Funcionario::class);
    }
}