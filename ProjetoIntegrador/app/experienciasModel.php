<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experienciasModel extends Model
{
    //
    
    public $table = "experiencias";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
