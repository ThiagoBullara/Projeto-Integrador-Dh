<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avaliacaoRestaurante extends Model
{
    public $table = "avaliacao";
    public $primaryKey = "id";
    public $guarded = [];

    protected $fillable = [
        'valor_avaliacao',
        'titulo_comentario',
        'descricao_comentario'
    ];
}
