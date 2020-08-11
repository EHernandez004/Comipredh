<?php

Route::get('/', 'WelcomeController@welcome');

Auth::routes();

Route::get('/registrarEmpresa', 'RegisterEmpresaController@registerEmpresa');

Route::get('/home', 'HomeController@index')->name('home');


//Autentificacion entre administrador y usuario.
Route::middleware(['auth','admin'])->prefix('admin')->group(function (){

        //Empresas
    Route::get('/empresa', 'EmpresaController@index'); //Lista Empresa
    Route::get('/empresa/{id}/edit', 'EmpresaController@edit'); // Formulario de edición Empresa
    Route::post('/empresa/{id}/edit', 'EmpresaController@update'); // Actualizar el valor de la empresa.
    Route::delete('/empresa/{id}', 'EmpresaController@destroy'); //Elimina Empresa
    
        //Users
    Route::get('/user', 'UsersController@index'); //Lista de Administradores
    Route::get('/user/{id}/edit', 'UsersController@edit'); //Formulario de Edicion
    Route::post('/user/{id}/edit', 'UsersController@update'); //Actualiza el usuario 
    Route::get('/user/create', 'UsersController@create'); //Formulario de administrador
    Route::post('/user', 'UsersController@registro'); // Registro de administrador
    Route::delete('/user/{id}', 'UsersController@destroy'); //Elimina User        
    
});

//Logeo
Route::post ('/registrar','LoginUsuarioController@RegistroCliente');
Route::post ('/verificar','LoginUsuarioController@LoginUsuario');