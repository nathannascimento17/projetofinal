<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    const CATEGORIA_PRODUTO = [
        1 => 'Utensílios Domésticos',
        2 => 'Artigos de Camping',
        3 => 'Brinquedos',
        4 => 'Linha para bebes',
        5 => 'Tabacaria',
        6 => 'Confecções',
        7 => 'Enfeites e Festas',
        8 => 'Maquiagens',
        9 => 'Manicure e Pedicure',
        10 => 'Petshop',
    ];
    
    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'valor',
        'ativo',
        'categoria'
    ];
}
