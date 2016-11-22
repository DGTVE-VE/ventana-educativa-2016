<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\App\Model\Red\Proyectos;

class ProyectosController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

    public function index(){
		$proyectos = Proyectos::get();
		return view('viewRed.adminRed.formularioProyecto')->with('proyectos', $proyectos);
	}

	public function create(){
		return view('viewRed.adminRed.createProyecto');
	}

	public function store(Request $request){
		$proyecto = new Proyectos();
        $proyecto->titulo = $request->input('titulo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->banner = $request->input('banner');
		$proyecto->thumbnail = $request->input('thumbnail');
		$proyecto->activo = $request->input('activo');
		$proyecto->liga = $request->input('liga');
        $proyecto->save();

		return redirect()->route('proyectos.index');
	}

	public function edit($id){
		$proyecto = Proyectos::find($id);
		return view('viewRed.adminRed.editaProyecto')->with('proyecto', $proyecto);
	}

	public function update(Request $request, $id){
		$proyecto = Proyectos::find($id);
        $proyecto->titulo = $request->input('titulo');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->banner = $request->input('banner');
		$proyecto->thumbnail = $request->input('thumbnail');
		$proyecto->activo = $request->input('activo');
		$proyecto->liga = $request->input('liga');
        $proyecto->save();

		return redirect()->route('proyectos.index');
	}

	public function destroy(){
		$proyecto->destroy($id);

		return redirect()->route('proyectos.index');
	}
}
