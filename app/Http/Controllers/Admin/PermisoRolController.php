<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Rol;
use App\Models\Admin\Permiso;

class PermisoRolController extends Controller
{
   
    public function index()
    {
        $rols = Rol::orderBy('id')->pluck('nombre', 'id')->toArray();
        $permisos = Permiso::get();
        $permisosRols = Permiso::with('roles')->get()->pluck('roles', 'id')->toArray();
        return view('admin.permiso-rol.index', compact('rols', 'permisos', 'permisosRols'));
    }
   
    public function guardar(Request $request)
    {
        if ($request->ajax()) {
            $permisos = new Permiso();
            if ($request->input('estado') == 1) {
                $permisos->find($request->input('permiso_id'))->roles()->attach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El rol se asigno correctamente']);
            } else {
                $permisos->find($request->input('permiso_id'))->roles()->detach($request->input('rol_id'));
                return response()->json(['respuesta' => 'El rol se elimino correctamente']);
            }
        } else {
            abort(404);
        }
    }
}
