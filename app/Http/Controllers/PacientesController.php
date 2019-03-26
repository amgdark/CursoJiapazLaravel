<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PacientesRequest;
use App\Paciente;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacientesRequest $request)
    {
        // $paciente = new Paciente();
        // $paciente->nombre = $request->input('nombre');
        // $paciente->apellido_pat = $request->input('app');
        // $paciente->apellido_mat = $request->input('apm');
        // $paciente->curp = $request->input('curp');
        // $paciente->fecha_nac = $request->input('fecha_nac');
        // $paciente.save();

        // Paciente::create([
        //     'nombre' => $request->input('nombre'),
        //     'nombre' => $request->input('nombre'),
        //     'nombre' => $request->input('nombre'),
        //     'nombre' => $request->input('nombre'),

        // ]);

        Paciente::create($request->all());
        return redirect()->route('pacientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacientesRequest $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
