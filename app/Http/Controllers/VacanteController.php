<?php

namespace App\Http\Controllers;
use App\Vacante;

use Illuminate\Http\Request;

class VacanteController extends Controller{

    public function index(){

    $vacantes = vacante::paginate(10);
    return view('vacante.index')->with(compact('vacantes')); //listado de las Vacantes.
    }
}