<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/Admin';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');        
    }
   
   public function index()
    {
        return view('seguridad.index');
    }

    protected function authenticated(Request $request, $user)
    {
        $roles = $user->roles()->where('estado', 1)->get();
        if ($roles->isNotEmpty()) {
            $user->setSession($roles->toArray());
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('seguridad/login')->withErrors(['error' => 'Este usuario no tiene ningun rol activo']);
        }
    }
    public function username()
    {
        return 'usuario';
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect(route('login'));
    }


   
}
