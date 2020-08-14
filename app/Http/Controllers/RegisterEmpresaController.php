<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterEmpresaController extends Controller
{
    public function create(){

        return view('admin.user.create');
    }

    public function registro(Request $request){
        $users = new User();

        $users->name = $request->input('name');
        $users->apellidos = $request->input('apellidos');
        $users->telefono = $request->input('telefono');
        $users->rol = 1;
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->save();

        return redirect('/admin/user');
    }
    
    public function registerEmpresa()
    {
    	return view('empresa.registerEmpresa');
    }

}
