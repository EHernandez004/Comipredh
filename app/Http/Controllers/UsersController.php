<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller{

    public function index(){
//        $users = User::select('select * from users where rol=1');
        $users = User::paginate(10);
        return view('admin.user.index')->with(compact('users')); //listado de las empresas.
    }

    public function edit($id){
        $users = User::find($id);
        
        return view('admin.user.edit')->with(compact('users'));
    }

    public function update(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->apellidos = $request->input('apellidos');
        $users->telefono = $request->input('telefono');
        $users->email = $request->input('email');
        $users->save();

        return redirect('/admin/user');
    }

    public function destroy($id){
        
        $users = User::find($id);
        $users->delete();

        return back();

    }

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
}