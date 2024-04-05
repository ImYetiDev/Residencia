<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function register(Request $datos )
    {

        $usuario['nombre'] = ucwords( strtolower($datos->get('nombre')) );
        $usuario['email'] = (strtolower($datos->get('email')) );
        $usuario['password'] = bcrypt($datos->get('password'));

       Usuario::create( $usuario );

       return view('/login');
    }

    public function check(Request $datos)
    {
       if (Auth::attempt($datos->except('_token'))) {
        $datos->session()->regenerate();

        return redirect()->intended('residente');
        
    }
    return back()->withErrors([
        'email' => 'Los datos no coinciden con nuestros registros.',
    ])->onlyInput('email');
    }
    
}
