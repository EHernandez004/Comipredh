<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use \Illuminate\Support\Facades\Validator ;
use Auth;


class LoginUsuarioController extends Controller
{
    //
    public function RegistroCliente(Request $request)
    {
        $validacion = Validator ::make($request->all(),
            [
               'nombre' => 'required|max:50',
               'apellidos' => 'required|max:50',
               'telefono' => 'required|max:50',
               'correo' => 'email|unique:usuario',
               'contrasena' => 'required|min:6'
            ]);
        if ($validacion->fails())
        {
            return redirect('/register')
                ->withInput()
                ->withErrors($validacion);
        }

        $user = new usuario();
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->telefono = $request->telefono;
        $user->correo = $request->correo;
        $user->contrasena = bcrypt($request->contrasena);
        $user->save();

        return Redirect::to('home');

    }

    public function LoginUsuario()
    {
        $credenciales = $this->Validate(request(),
        [
            'correo' =>'required|email',
            'contrasena' => 'required|min:6'
        ]);

        if (Auth::attempt($credenciales))
        {
            return 'Login ok';
        }
        else
        {
            return back()
            ->withErrors(['correo'=>trans('auth.failed')])
            ->withInput(request(['correo']));
        }
    }
}   