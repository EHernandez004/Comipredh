<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterEmpresaController extends Controller
{

    public function registerEmpresa()
    {
    	return view('empresa.registerEmpresa');
    }

}
