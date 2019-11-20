<?php

namespace App\Http\Controllers\Clases;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionProducto;
use App\Models\Clases\Tipoproducto;
use Illuminate\Http\Request;
use App\Models\Clases\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos = Producto::orderBy('id')->get(); 
        return view('Clases.producto.index', compact('Datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $Dato=Tipoproducto::orderBy('id')->pluck('nombre','id')->toArray();
        //dd($Dato);
        return view('Clases.producto.crear',compact('Dato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionProducto $request)
    {
        //dd($request->all());
        $Producto = Producto::create($request->all());
        //$Producto->tipoproductos()->attach($request->tipoproducto_id);
        return redirect('Clases/producto')->with('mensaje', 'El Producto ha sido guardado correctamente');

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
        $Dato = Producto::findOrFail($id);
        //dd($UsuarioBuscado);
        return view('Clases.producto.editar', compact('Dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionProducto $request, $id)
    {
        Producto::findOrFail($id)->update($request->all());
        return redirect('Clases/producto')->with('mensaje', 'La actualizacion se hizo correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Producto = Producto::findOrFail($id);
        $Producto->delete();
        return redirect('Clases/producto')->with('mensaje', 'Se elimo correctamente el tipo producto con id ' . $id);

    }
}
