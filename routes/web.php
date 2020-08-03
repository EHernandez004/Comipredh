<?php

Route::get('/', 'WelcomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Autentificacion entre administrador y usuario.
Route::middleware(['auth','rol'])->prefix('admin')->namespace('Admin')
->group(function (){
    
    
    
});

//Logeo
Route::post ('/registrar','LoginUsuarioController@RegistroCliente');
Route::post ('/verificar','LoginUsuarioController@LoginUsuario');
