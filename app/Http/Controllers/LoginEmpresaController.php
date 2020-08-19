<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use \Illuminate\Support\Facades\Validator ;
use Auth;


class LoginEmpresaController extends Controller
{
    /*
    public function RegistroEmpresa(Request $request)
    {
        $validacion = Validator ::make($request->all(),
            [
               'nombre' => 'required|max:50',
               'rfc' => 'required|max:50',
               'cp' => 'required|max:50',
               'calle' => 'required|max:50',
               'n_ext' => 'required|max:20',
               'n_int' => 'max:10',
               'colonia' => 'required|max:50',
               'municipio' => 'required|max:50',
               'estado' => 'required|max:50',
               'correo' => 'email|unique:usuario',
               'contrasena' => 'required|min:6'
            ]);
            
        if ($validacion->fails())
        {
            return redirect('/#register')
                ->withInput()
                ->withErrors($validacion);
        }

        $empresa = new Empresas();
        $empresa->nombre = $request->nombre;
        $empresa->rfc = $request->rfc;
        $empresa->cp = $request->cp;
        $empresa->calle = $request->calle;
        $empresa->n_ext = $request->n_ext;
        $empresa->n_int = $request->n_int;
        $empresa->colonia = $request->colonia;
        $empresa->municipio = $request->municipio;
        $empresa->estado = $request->estado;
        $empresa->correo = $request->correo;
        $empresa->contrasena = bcrypt($request->contrasena);
        $empresa->acceso = 0;
        $empresa->id_user = 1;
        $empresa->save();

        return "Registro con Exito";

    }

    public function LoginEmpresa()
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
    }*/

    public function create(){

        return view('empresa.registerEmpresa');
    }

    public function registro(Request $request){
        $empresas = new Empresa();

        $empresas->nombre = $request->nombre;
        $empresas->rfc = $request->rfc;
        $empresas->cp = $request->cp;
        $empresas->calle = $request->calle;
        $empresas->n_ext = $request->n_ext;
        $empresas->n_int = $request->n_int;
        $empresas->colonia = $request->colonia;
        $empresas->municipio = $request->municipio;
        $empresas->estado = $request->estado;
        $empresas->correo = $request->correo;
        $empresas->contrasena = bcrypt($request->contrasena);
        $empresas->acceso = 0;
        $empresas->id_user = 1;
        $empresas->save();

        return '<script type="text/javascript">alert("Registro con Exito");</script>';
    }
}   