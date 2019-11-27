<?php

namespace App\Http\Controllers\Clases;

use App\Models\Clases\Persona;
use App\Http\Controllers\Controller;
use App\Models\Clases\Compra;
use App\Models\Clases\Producto;
use App\Models\Clases\Proveedor;
use Illuminate\Http\Request;


class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $observacion = $request->get('buscarpor');
        
        $Compras = Compra::where('observacion', 'LIKE', "%$observacion%")->with(['proveedor'])->get()->toArray();
        //dd($Compras);
        return view('Clases.compra.index')->with('Compras', $Compras);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $Proveedor = Proveedor::all();
        $Productos = Producto::all();

        return view('Clases.compra.crear', compact('Proveedor','Productos'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $UnEmpleado = Compra::create($request->all());

        return redirect('Clases/compra')->with('mensaje', 'La compra ha sido guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $ProveedorBuscado = Compra::findOrFail($id);
        //dd($UsuarioBuscado);
        $Proveedores = Proveedor::all();
        return view('Clases.compra.editar', compact('ProveedorBuscado', 'Proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        $Empleado = Compra::findOrFail($id)->update($request->all());
        //dd($Empleado);
        return redirect('Clases/compra')->with('mensaje', 'La actualizacion se hizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Compra = Compra::findOrFail($id);
        $Compra->delete();
        return redirect('Clases/compra')->with('mensaje', 'Se elimo correctamente la compra');
    }

    public function getProductillos(){
       
       
        $Productos=Producto::all();
        dd($Productos);
        return response()->json(
            $Productos->toArray()
        );

        /*if($request->ajax()){
            $productos=Producto::produtillos();
            return response()->json($productos);
        }*/
    }

  
    public function generar($id)
    {

        $Compra = Compra::findOrFail($id);
        //dd($Venta['id']);
        $Proveedor = Proveedor::findOrFail($Compra['proveedor_id']);
        $Persona=Persona::findOrFail($Proveedor['persona_id']);
        //dd($Personas);
        $Productos = Producto::all();

        return view('Clases.compra.compra', compact('Compra', 'Persona', 'Productos'));
    }
    public function guardardetalle(Request $request)
    {

        $Compra = Compra::findOrFail($request->idcompra);
        $Producto = Producto::findOrFail($request->producto);
        
        $idCompra = $request->idcompra;
        $FechaVencimiento = $Producto->fechavencimiento;
        $Cantidad = $request->cantidad;
        $Subtotal = $Producto->costo * $Cantidad;
        //dd();
        $Compra->productos()->attach($request->producto, ['cantidad' => $Cantidad, 'preciounitario' => $Producto->costo, 'subtotal' => $Subtotal]);

        // datos de venta actual
        //$Vector = ['producto' => $Producto->nombre, 'cantidad' => $Cantidad, 'costo' => $Costo, 'subtotal' => $Subtotal];

        $Proveedor = Proveedor::findOrFail($Compra['proveedor_id']);
        $Persona = Persona::findOrFail($Proveedor['persona_id']);
        $Productos = Producto::all();
        //  ->orWhere('venta.id','=','producto_venta.venta_id')->get();
        $Compras = $Compra->productos;
        //dd($Venta);
        return view('Clases.compra.compra', compact('Compra', 'Persona', 'Productos', 'Compras'));
    }

}
