<?php

namespace App\Http\Controllers\Clases;

use App\Http\Controllers\Controller;
use App\Models\Clases\Producto;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        $Productos = Producto::orWhere('nombre', 'LIKE', "%$nombre%")
                            ->orWhere('detalle', 'LIKE', "%$nombre%")
                            ->orWhere('stock', 'LIKE', "%$nombre%")
                            ->orWhere('lote', 'LIKE', "%$nombre%")
                            ->get()->toArray();
        return view('Clases.inventario.index')->with('Productos', $Productos);
    }

   
}
