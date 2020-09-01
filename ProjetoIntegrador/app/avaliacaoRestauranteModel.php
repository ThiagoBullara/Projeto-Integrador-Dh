<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avaliacaoRestaurante extends Model
{
    public $table = "avaliacao_restaurantes";
    public $primaryKey = "id";
    public $guarded = [];

}
