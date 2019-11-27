<?php

namespace App\Http\Controllers\Clases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clases\Persona;
use App\Models\Clases\Empleado;

class EmpleadoController extends Controller
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
        $Personas = Persona::where('nombre','LIKE',"%$nombre%")->with(['empleado'])->get()->toArray();
        return view('Clases.empleado.index')->with('Personas', $Personas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $Personas=Persona::all();
        return view('Clases.empleado.crear',compact('Personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        //dd($request->all());
        $UnEmpleado = Empleado::create($request->all());
        
        return redirect('Clases/empleado')->with('mensaje', 'El empleado ha sido guardado correctamente');
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
        $EmpleadoBuscado = Empleado::findOrFail($id);
        //dd($UsuarioBuscado);
        $Personas = Persona::all();
        return view('Clases.empleado.editar', compact('EmpleadoBuscado','Personas'));
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
        //dd($request->all());
        $Empleado= Empleado::findOrFail($id)->update($request->all());
        //dd($Empleado);
        return redirect('Clases/empleado')->with('mensaje', 'La actualizacion se hizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Empleado = Empleado::findOrFail($id);
        $Empleado->delete();
        return redirect('Clases/empleado')->with('mensaje', 'Se elimo correctamente la persona con id ' . $id);
    }
}
