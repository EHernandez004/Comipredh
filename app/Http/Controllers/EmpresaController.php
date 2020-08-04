<?php

namespace App\Http\Controllers;
use App\Empresa;

use Illuminate\Http\Request;

class EmpresaController extends Controller{

    public function index(){
        $empresas = Empresa::all();
        return view('admin.empresa.index')->with(compact('empresas')); //listado de las empresas.
    }

    public function distroy(){
        
        return view('admin.empresa.index');
    }

    public function edit(){
        
        return view('admin.empresa.index');
    }

}