<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailEjemplo;

class ControladorEjemplo extends Controller
{
    public function home(){
        $html = "<h1>Esto es un html</h1>";
        $script ="<script>alert('hola este es un mesaje peligroso');</script>";

        return view('home',compact('html','script'));
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

        $mensaje = $this->validate($request,
            [
                'nombre' => 'required',
                'email' => 'email',
                'mensaje' => 'min:5|max:100'
            ]
        );
        // return $request->input('nombre');

        Mail::to('amg.dark@gmail.com')->queue(new MailEjemplo($mensaje));
        return $request->all();

    }
}
