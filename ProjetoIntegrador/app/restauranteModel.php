<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restauranteModel extends Model
{
    public $table = "restaurante";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
