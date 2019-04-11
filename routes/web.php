<?php
App::setLocale('es');

Route::get('/', 'ControladorEjemplo@home')->name('home');

Route::get('/contactos', 'ControladorEjemplo@contacto')->name('contacto');

Route::get('/hola/{nombre?}/{edad?}','ControladorEjemplo@saludo' )->where(['edad' => '[0-9]+', 'nombre' => '[a-zA-Z]+'])->name('saludo');

Route::post('/procesa','ControladorEjemplo@procesa')->name('procesa_contacto');

Route::get('/medicos','MedicosController@index')->name('medicos.index');
Route::get('/medicos/create','MedicosController@create')->name('medicos.create');
Route::post('/medicos/store','MedicosController@store')->name('medicos.store');
Route::get('/medicos/{id}','MedicosController@show')->name('medicos.show');
Route::get('/medicos/{id}/edit','MedicosController@edit')->name('medicos.edit');
Route::put('/medicos/{id}','MedicosController@update')->name('medicos.update');
Route::delete('/medicos/{id}','MedicosController@destroy')->name('medicos.destroy');

Route::resource('pacientes', 'PacientesController');

Auth::routes();

