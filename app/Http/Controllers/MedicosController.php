<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MedicosRequest;

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
        $medicos = DB::table('medicos')->get();
        return view('medicos.index',compact('medicos'));
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
    public function store(MedicosRequest $request)
    {
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

        return redirect()->route('medicos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = DB::table('medicos')->where('id', $id)->first();

        return view('medicos.show',compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = DB::table('medicos')->where('id', $id)->first();
        return view('medicos.edit',compact('medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicosRequest $request, $id)
    {
        $medico = DB::table('medicos')->where('id', $id)->update(
            [
                'nombre' => $request->input('nombre'),
                'apellido_pat' => $request->input('app'),
                'apellido_mat' => $request->input('apm'),
                'direccion' => $request->input('dir'),
                'telefono' => $request->input('tel'),
                'celular' => $request->input('cel'),
                'edad' => $request->input('edad'),
                'especialidad' => $request->input('esp'),
            ]
        );
        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = DB::table('medicos')->where('id', $id)->delete();
        return redirect()->route('medicos.index');
    }
}
