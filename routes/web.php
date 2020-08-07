<?php

Route::get('/', 'WelcomeController@welcome');

Route::get('/registrarEmpresa', 'RegisterEmpresaController@registerEmpresa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Autentificacion entre administrador y usuario.
Route::middleware(['auth','rol'])->prefix('admin')->namespace('Admin')
->group(function (){
    
    
    
});

Route::get('/admin/empresa', 'EmpresaController@index'); //Lista Empresa
//Route::delete('/admin/{id}', 'EmpresaController@destroy'); //Elimina Empresa
Route::get('/admin/empresa/{id}/edit', 'EmpresaController@edit'); // Formulario de edición Empresa
Route::post('/admin/empresa/{id}/edit', 'EmpresaController@update'); // Actualizar el valor de la empresa.
Route::get('/admin/empresa/{id}/destroy', 'EmpresaController@destroy'); //Elimina Empresa


//Logeo
Route::post ('/registrar','LoginUsuarioController@RegistroCliente');
Route::post ('/verificar','LoginUsuarioController@LoginUsuario');