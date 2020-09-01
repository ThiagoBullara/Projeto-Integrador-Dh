<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experienciaModel extends Model
{
    
    public $table = "experiencia";
    public $primaryKey = "id_experiencia";
    public $guarded = [];

    protected $fillable = [
        'nome',
        'preco',
        'quantidade_pessoas',
        'descricao',
        'foto',
    ];
}
