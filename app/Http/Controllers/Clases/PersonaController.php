<?php

namespace App\Http\Controllers\Clases;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionPersona;
use Illuminate\Http\Request;
use App\Models\Clases\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Persona::orderBy('id')->get();
        
        return view('Clases.persona.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('Clases.persona.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionPersona $request)
    {
        $Unapersona=Persona::create($request->all());
       // dd($Unapersona);
        return redirect('Clases/persona')->with('mensaje','La persona ha sido guardado correctamente');

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
        $PersonaBuscada = Persona::findOrFail($id);
        //dd($UsuarioBuscado);
        return view('Clases.persona.editar', compact('PersonaBuscada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionPersona $request, $id)
    {
        Persona::findOrFail($id)->update($request->all());
        return redirect('Clases/persona')->with('mensaje','La actualizacion se hizo correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Persona = Persona::findOrFail($id);
        $Persona->delete();
        return redirect('Clases/persona')->with('mensaje','Se elimo correctamente la persona con id '.$id);
    }
}
