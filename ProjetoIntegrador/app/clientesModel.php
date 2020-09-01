<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clienteModel extends Model
{
    public $table = "cliente";
    public $primaryKey = "id_usuario";
    public $guarded = [];

    protected $fillable = [
        'foto',
        'endereco',
        'telefone',
        'idade'
    ];
}
