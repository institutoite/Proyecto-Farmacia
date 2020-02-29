<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use Illuminate\Http\Request;
use App\Models\Seguridad\Usuario;
use App\Models\Admin\Rol;


class UsuarioController extends Controller
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
        $datas = Usuario::orwhere('nombre', 'LIKE', "%$nombre%")
                           ->orwhere('usuario', 'LIKE', "%$nombre%")
                           ->orwhere('id', '=', "$nombre")
                           ->get();


        //$datas=Usuario::orderBy('id')->get();
        return view('Admin.usuario.index')->with('datas',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
         $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        return view('admin.usuario.crear', compact('rols'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionUsuario $request)
    {
        $usuario = Usuario::create($request->all());
        $usuario->roles()->attach($request->rol_id,['estado'=>1]);
        //dd($request->all());
        return redirect('Admin/usuario')->with('mensaje', 'Usuario creado con exito');
        //return redirect('Admin/usuario')->with('mensaje','El usuario ha sido creado correctamente');
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
        $UsuarioBuscado=Usuario::findOrFail($id);
        //dd($UsuarioBuscado);
         $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        return view('Admin.usuario.editar',compact('UsuarioBuscado','rols'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionUsuario $request, $id)
    {
        
       Usuario::findOrFail($id)->update($request->all());
         return redirect('Admin/usuario')->with('mensaje','El usuario ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->roles()->detach();
        ///dd($usuario->roles());
        $usuario->delete();
        return redirect('Admin/usuario')->with('mensaje','El usuario ha sido eliminado corrctamente');
    }
}
