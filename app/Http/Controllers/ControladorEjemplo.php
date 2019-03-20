<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjemplo extends Controller
{
    public function home(){
        return view('home');
    }

    public function contacto(){
        return view('contacto');
    }

    public function saludo($nombre="Invitado", $edad=0){
        return view('saludo',compact('nombre','edad'));
    }

    public function procesa(Request $request){
        // if ($request->input('nombre') != null) {
        //     return "Si tiene nombre";
        // }
        // else {
        //     return "No tiene  nombre";
        // }

        $this->validate($request,
            [
                'nombre' => 'required',
                'email' => 'email',
                'mensaje' => 'min:5'
            ]
        );
        // return $request->input('nombre');
        return $request->all();
    }
}
