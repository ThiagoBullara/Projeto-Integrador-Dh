<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compraModel extends Model
{
    public $table = "cart";
    public $primaryKey = "id_compra";
    public $guarded = [];
}
