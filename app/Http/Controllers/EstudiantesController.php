<?php

namespace Newton\Http\Controllers;

use Newton\Estudiante;
use Illuminate\Http\Request;
use PDF;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function listar()
    {
        $estudiantes = Estudiante:: orderBy ('apellido')->get();
        return view('ListaEstudiantes')->with('estudiantes',$estudiantes);
    }
    
    public function create()
    {
        //
    }

    public function guardar(Request $request)
    {
       if(request()->hasFile('fotografia')) {
            $imageName = $request->file('fotografia')->getClientOriginalName();
            $path = storage_path('app/public/estudiantes');
            $request->file('fotografia')->move($path , $imageName);
        }
        $estudiante = new Estudiante();
        $existe = $this->validaEstudiante( $request->input('cedula'));
        if($existe==0){
            $estudiante->apellido = $request->input('apellido');
            $estudiante->nombre = $request->input('nombre');
            $estudiante->cedula = $request->input('cedula');
            $estudiante->grupo = $request->input('grupo');
            $estudiante->fotografia = $imageName;
            $estudiante->save();
            $mensaje='Registrado exitosamente ...';
        } else {
            $mensaje = "Estudiante ya existe ...";
        }
        return $this->show($mensaje);
    }

    


   // public function validaEstudiante($apellido, $nombre, $cedula){
   // funcion para validar estudiante ver si existe la cedula de identidad
    public function validaEstudiante( $cedula){
        $existe=0;
        $validaEst = Estudiante:://where('nombre', '=', $nombre)
                        //->where('apellido','=',$apellido)
                        //->
                        where('cedula','=',$cedula)
                        ->get();
        if(count($validaEst) > 0) {
            $existe=1;
        }
        return $existe;
    }

    
    public function show($mensaje)
    {
        return view('welcome')->with('mensaje',$mensaje);
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

    public function imprimirPdf($id)
    {
        set_time_limit(0);
        $estudiante = Estudiante::find($id);
        //return view('ImprimirEstudiantes')->with('estudiantes',$estudiantes);
        $pdf = \PDF::loadview('ImprimirEstudiantes', ['estudiante' => $estudiante]);
        return $pdf->stream();
        //return $pdf->download('ImprimirEstudiante.pdf');
      
    }
}
