<?php

namespace App\Models\Pedidos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Ped_detalle extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "ped_detalles";
    protected $fillable = [
        'consecutivo',
        'id_prod' ,
        'codigo_prod' ,
        'nombre' ,
        'precio' ,
        'principio' ,
        'cantidad' ,
        'bonificadas' ,
        'tipo'
    ];

    protected $dates = [ 'deleted_at' ];
   
}
