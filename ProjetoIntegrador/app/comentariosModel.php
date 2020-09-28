<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentariosModel extends Model
{
    
    public $table = "comentarios";
    public $primaryKey = "id_comentario";
    public $guarded = [];

    protected $fillable = [
        'comentario'
    ];

    public function experiencia() {
        return $this->belongsTo("App\experienciaModel", "id_experiencia");
    }

    public function usuario() {
        return $this->belongsTo("App\User", "id");
    }

}
