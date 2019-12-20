<?php

namespace App\Http\Controllers\Clases;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionProveedor;
use Illuminate\Http\Request;
use App\Models\Clases\Persona;
use App\Models\Clases\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('buscarpor');
        //dd($nombre); 
        $Personas = Persona::where('nombre', 'LIKE', "%$nombre%")->with(['proveedor'])->get()->toArray();

        return view('Clases.proveedor.index')->with('Personas', $Personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $Personas = Persona::all();
        return view('Clases.proveedor.crear', compact('Personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionProveedor $request)
    {
        //dd($request->all());
        $UnProveedor = Proveedor::create($request->all());

        return redirect('Clases/proveedor')->with('mensaje', 'El proveedor ha sido guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $ProveedorBuscado = Proveedor::findOrFail($id);
        
        $Persona = Persona::findOrFail($ProveedorBuscado->persona_id);
        $Personas =Persona::all();
        return view('Clases.proveedor.editar', compact('ProveedorBuscado', 'Personas','Persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionProveedor $request, $id)
    {
        //dd($request->all());
        $Proveedor = Proveedor::findOrFail($id)->update($request->all());
        //dd($Empleado);
        return redirect('Clases/proveedor')->with('mensaje', 'La actualizacion se hizo correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Proveedor = Proveedor::findOrFail($id);
        $Proveedor->delete();
        return redirect('Clases/proveedor')->with('mensaje', 'Se elimo correctamente el proveedor con id ' . $id);
    }
}
