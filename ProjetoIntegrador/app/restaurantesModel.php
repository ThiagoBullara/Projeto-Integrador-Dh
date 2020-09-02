<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurantesModel extends Model
{
    public $table = "restaurantes";
    public $primaryKey = "id_restaurante";
    public $guarded = [];

    protected $fillable = [
        'nomeProprietario',
        'nomeRestaurante',
        'fotoBanner',
        'descricao',
        'descricaoCardapio',
        'foto',
        'endereco',
        'email',
        'senha',
        'telefone',
        'cnpj',
        'funcionamento'
    ];
}
