<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'nombre' => 'required|min:5',
            'app' => 'required|min:5',
            'apm' => 'required|min:5',
            'dir' => 'required|min:5',
            'tel' => 'required|min:5',
            'esp' => 'required|min:5',
            'edad' => 'digits_between:1,3'
        ]);
        DB::table('medicos')->insert([
            'nombre' => $request->input('nombre'),
            'apellido_pat' => $request->input('app'),
            'apellido_mat' => $request->input('apm'),
            'direccion' => $request->input('dir'),
            'telefono' => $request->input('tel'),
            'celular' => $request->input('cel'),
            'edad' => $request->input('edad'),
            'especialidad' => $request->input('esp'),
        ]);

        redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
