<?php

Route::get('/', 'WelcomeController@welcome');

Route::get('/registrarEmpresa', 'RegisterEmpresaController@registerEmpresa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Autentificacion entre administrador y usuario.
Route::middleware(['auth','rol'])->prefix('admin')->namespace('Admin')
->group(function (){
    
    
    
});

    //Empresas
Route::get('/admin/empresa', 'EmpresaController@index'); //Lista Empresa
Route::get('/admin/empresa/{id}/edit', 'EmpresaController@edit'); // Formulario de edición Empresa
Route::post('/admin/empresa/{id}/edit', 'EmpresaController@update'); // Actualizar el valor de la empresa.
Route::delete('/admin/empresa/{id}', 'EmpresaController@destroy'); //Elimina Empresa
//Route::get('/admin/empresa/{id}/destroy', 'EmpresaController@destroy'); //Elimina Empresa

    //Users
Route::get('/admin/user', 'UsersController@index'); //Lista de Administradores
Route::get('/admin/user/{id}/edit', 'UsersController@edit'); //Formulario de Edicion
Route::post('/admin/user/{id}/edit', 'UsersController@update'); //Actualiza el usuario 
Route::get('/admin/user/create', 'UsersController@create'); //Formulario de administrador
Route::post('/admin/user', 'UsersController@registro'); // Registro de administrador
Route::delete('/admin/user/{id}', 'UsersController@destroy'); //Elimina User


//Logeo
Route::post ('/registrar','LoginUsuarioController@RegistroCliente');
Route::post ('/verificar','LoginUsuarioController@LoginUsuario');