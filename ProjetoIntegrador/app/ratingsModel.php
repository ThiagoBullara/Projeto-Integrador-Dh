<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ratingsModel extends Model
{
    public $table = "rating";
    public $primaryKey = "id";
    public $guarded = [];

    protected $fillable = [
        'rating'
    ];

    public function experiencias() {
        return $this->belongsTo("App\experienciaModel", "id_experiencia");
    }
}
