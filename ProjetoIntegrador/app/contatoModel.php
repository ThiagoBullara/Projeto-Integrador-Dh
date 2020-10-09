<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contatoModel extends Model
{
    public $table = "contato";
    public $primaryKey = "id_contato";
    public $guarded = [];

    protected $fillable = [
        'id_usuario',
        'name',
        'email',
        'subject',
        'message'
    ];
}
