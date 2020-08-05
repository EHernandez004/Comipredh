<?php

namespace App\Http\Controllers;
use App\Empresa;

use Illuminate\Http\Request;

class EmpresaController extends Controller{

    public function index(){

        $empresas = Empresa::paginate(10);
        return view('admin.empresa.index')->with(compact('empresas')); //listado de las empresas.
    }

    public function distroy(){

        return view('admin.empresa.index');
    }

    public function edit($id){
        $empresas = Empresa::find($id);
        
        return view('admin.empresa.edit')->with(compact('empresas'));
    }

}