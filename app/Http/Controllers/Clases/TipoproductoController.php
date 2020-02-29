<?php

namespace App\Http\Controllers\Clases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clases\Tipoproducto;

class TipoproductoController extends Controller
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
        $Dato = Tipoproducto::orwhere('nombre', 'LIKE', "%$nombre%")
                           ->get();

        return view('Clases.tipoproducto.index')->with('Dato',$Dato);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('Clases.tipoproducto.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $Tipoproducto = Tipoproducto::create($request->all());
        // dd($Unapersona);
        return redirect('Clases/tipoproducto')->with('mensaje', 'El Tipoproducto ha sido guardado correctamente');

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
        $Dato = TipoProducto::findOrFail($id);
        //dd($UsuarioBuscado);
        return view('Clases.tipoproducto.editar', compact('Dato'));
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
        Tipoproducto::findOrFail($id)->update($request->all());
        return redirect('Clases/tipoproducto')->with('mensaje', 'La actualizacion se hizo correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $Tipoproducto = Tipoproducto::findOrFail($id);
        $Tipoproducto->delete();
        return redirect('Clases/tipoproducto')->with('mensaje', 'Se elimo correctamente el tipo producto con id ' . $id);

    }
}
