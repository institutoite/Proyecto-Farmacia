<?php

namespace App\Http\Controllers\Clases;

use App\Models\Clases\Persona;
use App\Http\Controllers\Controller;
use App\Models\Clases\Compra;
use App\Models\Clases\Producto;
use App\Models\Clases\Proveedor;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

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
        $Proveedores = Proveedor::all();
        $Productos = Producto::all();

        return view('Clases.compra.crear', compact('Proveedores','Productos'));
        
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
        $CompraBuscada = Compra::findOrFail($id);
        
        $Proveedores = Proveedor::all();

        return view('Clases.compra.editar', compact('CompraBuscada', 'Proveedores'));

    
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


    public function eliminardetalle($idcompra, $idProducto)
    {
        $Compra = Compra::findOrFail($idcompra);
        $CuantosProductos = $Compra->productos()
            ->where('producto_id', '=', $idProducto)
            ->sum('cantidad');

        $Producto = Producto::findOrFail($idProducto);
        $Producto->update(['stock' => $Producto->stock - $CuantosProductos]);
        $Compra->productos()->detach($idProducto);
        $Proveedor = Proveedor::findOrFail($Compra->proveedor_id);
        $Persona = Persona::findOrFail($Proveedor->persona_id);
        $Compras = ($Compra->productos);


        $Productos = Producto::all();
        $Suma = $Compras->sum('pivot.subtotal');
        return view('Clases.compra.compra', compact('Compra', 'Persona', 'Productos', 'Compras', 'Suma'));
    }



    public function getProductillos(){
       
       
        $Productos=Producto::all();
        dd($Productos);
        return response()->json(
            $Productos->toArray()
        );

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
        $Lote=$request->lote;
        $Subtotal = $Producto->costo * $Cantidad;
        //dd();
        $Compra->productos()->attach($request->producto, ['cantidad' => $Cantidad, 'preciounitario' => $Producto->costo, 'subtotal' => $Subtotal]);

        $Proveedor = Proveedor::findOrFail($Compra['proveedor_id']);
        $Persona = Persona::findOrFail($Proveedor['persona_id']);
        $Productos = Producto::all();
        $Compras = $Compra->productos;
        $ProductoComprado= Producto::findOrFail($request->producto);
        $ProductoComprado->update(['stock'=>($Cantidad+$ProductoComprado->stock),'lote'=>$Lote,'fechavencimiento'=>$request->fechavencimiento]);
        //dd($Venta);
        return view('Clases.compra.compra', compact('Compra', 'Persona', 'Productos', 'Compras'));
    }
    
    public function imprimircompra($idcompra){
        $Compra = Compra::findOrFail($idcompra);
        $Proveedor = Proveedor::findOrFail($Compra->proveedor_id);
        $Persona = Persona::findOrFail($Proveedor->persona_id);
        $Compras = ($Compra->productos);
        $Suma = $Compras->sum('pivot.subtotal');
        $pdf = PDF::loadView('Clases.compra.imprimircompra', compact('Compras', 'Persona', 'Compra', 'Proveedor', 'Suma'));
        return $pdf->stream('Compra.pdf');
    }
}
