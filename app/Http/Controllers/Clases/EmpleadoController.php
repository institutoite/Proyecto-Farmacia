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
    public function index()
    {
        //$persona=Persona::all();
        //$empleado=Empleado::all();
        //$empleados=\DB::table('empleado')->select('id','persona_id','sueldo','fechaingreso')->get();
        //$personas=\DB::table('persona')->select('id','nombre','apellidop','apellidom','fechanacimiento')->get();
       // $empleado = Empleado::join('Categorias', 'idCategoria', '=', 'Categorias.id')->select('Productos.id', 'Productos.nombre', 'Categorias.nombre as NombreCategoria')->get();
        //$Personas = Personas::with(['empleado'])->get();     
        $Personas = Persona::with(['empleado'])->get()->toArray();
        
        //dd($Personas);
         return view('Clases.empleado.index')->with('Personas',$Personas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
