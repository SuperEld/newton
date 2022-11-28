<?php

use Newton\Estudiante;
namespace Newton\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante:: orderBy ('apellido')->get();
        return view('ListaEstudiantes')->with('estudiantes',$estudiantes);
    }
}
