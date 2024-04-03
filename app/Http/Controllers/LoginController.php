<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function register(Request $request)
    {

        $usuario['nombre'] = ucwords( strtolower($request->get('nombre')) );
        $usuario['email'] = strtolower($request->get('email'));
        $usuario['password'] = bcrypt($request->get('password'));

       Usuario::create( $usuario );

       return redirect('/login');
    }

    public function check(Request $request)
    {
       if (Auth::attempt($request->except('_token'))) {
        $request->session()->regenerate();

        return redirect()->intended('Bloque');
        
    }
    return back()->withErrors([
        'email' => 'Los datos no coinciden con nuestros registros.',
    ])->onlyInput('email');
    }
    
}
