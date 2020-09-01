<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compraModel extends Model
{
    public $table = "compra";
    public $primaryKey = "id";
    public $guarded = [];

    protected $fillable = [
    'validacao_compra',
    'validade',
    'validacao_uso'
    ];
}
