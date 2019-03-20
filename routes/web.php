<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/contactos', function(){
    return view('contacto');
})->name('contacto');

Route::get('/hola/{nombre?}/{edad?}', function($nombre="Invitado",$edad=0){
    return view('saludo',compact('nombre','edad'));
})->where(['edad' => '[0-9]+', 'nombre' => '[a-zA-Z]+'])->name('saludo');
