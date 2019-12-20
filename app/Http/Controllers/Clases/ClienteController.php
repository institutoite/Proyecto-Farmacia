<?php

namespace App\Http\Controllers\Clases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clases\Persona;
use App\Models\Clases\Cliente;

class ClienteController extends Controller
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
        $Personas = Persona::orwhere('nombre', 'LIKE', "%$nombre%")
                           ->orwhere('apellidop', 'LIKE', "%$nombre%")
                           ->orwhere('apellidom', 'LIKE', "%$nombre%")
                           
                           ->with(['cliente'])->get()->toArray();
        return view('Clases.cliente.index')->with('Personas', $Personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $Personas = Persona::all();
        return view('Clases.cliente.crear', compact('Personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {

        $UnEmpleado = Cliente::create($request->all());
        ///dd($UnEmpleado);
        return redirect('Clases/cliente')->with('mensaje', 'El Cliente ha sido guardado correctamente');
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
        $ClienteBuscado = Cliente::findOrFail($id);

        //dd($ClienteBuscado->persona_id);
        $Persona = Persona::findOrFail($ClienteBuscado->persona_id);
        $Personas =Persona::all();
        ///dd($Persona);
        return view('Clases.cliente.editar', compact('ClienteBuscado', 'Persona','Personas'));
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
        $Empleado = Cliente::findOrFail($id)->update($request->all());
        //dd($Empleado);
        return redirect('Clases/cliente')->with('mensaje', 'La actualizacion se hizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Cliente = Cliente::findOrFail($id);
        $Cliente->delete();
        return redirect('Clases/cliente')->with('mensaje', 'Se elimo correctamente el cliente con id ' . $id);
    }
}
