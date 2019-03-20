<?php


Route::get('/', 'ControladorEjemplo@home')->name('home');

Route::get('/contactos', 'ControladorEjemplo@contacto')->name('contacto');

Route::get('/hola/{nombre?}/{edad?}','ControladorEjemplo@saludo' )->where(['edad' => '[0-9]+', 'nombre' => '[a-zA-Z]+'])->name('saludo');

Route::post('/procesa','ControladorEjemplo@procesa')->name('procesa_contacto');
