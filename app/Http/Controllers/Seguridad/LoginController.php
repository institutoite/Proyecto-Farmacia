<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/principal';
    

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
        $roles = $user->roles()->get();
        if ($roles->isNotEmpty()) {
            //dd($roles->toArray());
           // dd($user->getSession()->toArray());
            $user->setSession($roles->toArray());
            //dd($user);
        } else {
            $this->guard()->logout();
            $request->session()->invalidate();
            //dd($request);
            return redirect('seguridad/login')->withErrors(['error' => 'Este usuario no tiene un rol activo']);
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
