<?php

namespace App\Http\Controllers\Clases;

use App\Models\Clases\Persona;
use App\Http\Controllers\Controller;
use App\Models\Clases\Cliente;
use App\Models\Clases\Empleado;
use App\Models\Clases\Producto;
use App\Models\Clases\Venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $observacion = $request->get('buscarpor');

         $Ventas = Venta::all()->toArray();
        //$Ventas = Venta::where('descripcion', 'LIKE', "%$observacion%")->get()->toArray();
       // $Ventas = Venta::with(['cliente'])->get();
        //$Cliente = Cliente::findOrFail($Ventas->);    
        //dd($Ventas);
        return view('Clases.venta.index')->with('Ventas', $Ventas);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        
        $Clientes = Cliente::with(['persona'])->get()->toArray();
        //dd($Clientes);
        return view('Clases.venta.crear', compact('Clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $Venta = Venta::create($request->all());
        return redirect('Clases/venta')->with('mensaje', 'La venta ha sido guardado correctamente');
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
        $VentaBuscada = Venta::findOrFail($id);
        //dd($UsuarioBuscado);
        $Clientes = Cliente::all();
        return view('Clases.venta.editar', compact('VentaBuscada','Clientes'));
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
        $Venta = Venta::findOrFail($id)->update($request->all());
        //dd($Empleado);
        return redirect('Clases/venta')->with('mensaje', 'La actualizacion se hizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Venta = Venta::findOrFail($id);
        $Venta->delete();
        return redirect('Clases/venta')->with('mensaje', 'Se elimo correctamente la venta');
    }
    public function eliminardetalle($idventa,$idProducto)
    {
        $Venta = Venta::findOrFail($idventa);
        $CuantosProductos = $Venta->productos()
            ->where('producto_id', '=', $idProducto)
            ->sum('cantidad');

        $Producto=Producto::findOrFail($idProducto);
        $Producto->update(['stock'=>$Producto->stock+$CuantosProductos]);
        $Venta->productos()->detach($idProducto);
        $Cliente = Cliente::findOrFail($Venta->cliente_id);
        $Persona = Persona::findOrFail($Cliente->persona_id);
        $Ventas = ($Venta->productos);

        
        $Productos = Producto::all();
        $Suma = $Ventas->sum('pivot.subtotal');  
        return view('Clases.venta.venta', compact('Venta', 'Persona', 'Productos', 'Ventas', 'Suma'));    
    }

    public function stock( $id ){
       return Producto::where('id',$id)->get();
    }

    public function generar($id){

        $Venta = Venta::findOrFail($id);
        //dd($Ve
        $Persona = Persona::findOrFail($Venta['id']);
        //dd($Personas);
        $Productos= Producto::all();
        
        return view('Clases.venta.venta',compact('Venta','Persona','Productos'));

    }
    public function guardardetalle(Request $request){
        $Venta=Venta::findOrFail($request->idventa);
        $Producto=Producto::findOrFail($request->producto);
        $idVenta= $request->idventa;
        $Costo=$Producto->costo;
        $Cantidad=$request->cantidad;
        $Subtotal=$Cantidad*$Costo;
        $Venta->productos()->attach($request->producto,['cantidad'=>$Cantidad,'preciounitario'=>$Costo,'subtotal'=>$Subtotal]);
        
        $Vector=['producto'=>$Producto->nombre,'cantidad'=>$Cantidad,'costo'=>$Costo,'subtotal'=>$Subtotal];

        $Persona = Persona::findOrFail($Venta['id']);
        $Productos = Producto::all();
        $ProductoVendido = Producto::findOrFail($request->producto);

        $ProductoVendido->update(['stock' => ($ProductoVendido->stock- $Cantidad)]);
        $Ventas=$Venta->productos;
        $Suma=$Ventas->sum('pivot.subtotal');          
        //$Suma = Producto::with(['venta'])->pivot->sum('subtotal');
        //$Suma = Producto::sum('stock');

        //dd($Suma);
        return view('Clases.venta.venta',compact('Venta','Persona','Productos','Ventas','Suma'));    
    }

    public function imprimirventa($idventa){
       
        $Venta = Venta::findOrFail($idventa);
       
        $Cliente = Cliente::findOrFail($Venta->cliente_id);
       
        $Persona=Persona::findOrFail($Cliente->persona_id);
        
        $Ventas = ($Venta->productos);
        
        $Suma = $Ventas->sum('pivot.subtotal');
       
        $pdf=PDF::loadView('Clases.venta.imprimirventa',compact('Ventas','Persona','Venta','Cliente','Suma'));
        
        return $pdf->stream('Venta');
    }


}
