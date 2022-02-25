<?php

namespace App\Http\Controllers\Api\Pedidos;

use App\Http\Controllers\Controller;
use App\Models\Pedidos\Ped_cabeza;
use App\Models\Pedidos\Ped_detalle;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function pedidosUser($id)
    {
        try {
            
            $cabeza = Ped_cabeza::where('usuario', $id)->get();
            return response()->json($cabeza, 200);
            
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }

    }
}
