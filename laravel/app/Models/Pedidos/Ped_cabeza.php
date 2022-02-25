<?php

namespace App\Models\Pedidos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ped_cabeza extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "ped_cabeza";
    protected $primaryKey = 'id';
    protected $fillable = [
    'id_cliente',
    'cuentaCliente' ,
    'razonSocial' ,
    'nit' ,
    'region',
    'direccionEntrega' ,
    'vendedor',
    'fechaRegistro' ,
    'usuario',
    'estado'
    ];
    protected $dates = [ 'deleted_at' ];

    public function productos()
    {
        return $this->hasMany(Pedidos\Ped_detalle::class, 'id', 'consecutivo');
    }
}
