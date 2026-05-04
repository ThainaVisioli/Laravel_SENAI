<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dadosPessoais extends Model{

    protected $fillable = [
        'cpf',
        'rg',
        'dataNascimento',
        'cep'
    ];

    public function dadospessoais(){
        return $this->hasMany(dadosPessoais::class);
    }
}