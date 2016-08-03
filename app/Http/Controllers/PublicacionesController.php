<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\App\Model\Red\Publicaciones;

class PublicacionesController extends Controller
{
    public function index(){
		$publicaciones = Publicaciones::get();
		return view('viewRed.adminRed.formularioPublicacion')->with('publicaciones', $publicaciones);
	}
	
	public function create(){
		return view('viewRed.adminRed.createPublicacion');
	}
	
	public function store(Request $request){
		$publicacion = new Publicaciones();
        $publicacion->titulo = $request->input('titulo');
        $publicacion->autor = $request->input('autor');
        $publicacion->pais = $request->input('pais');
		$publicacion->categoria = $request->input('categoria');
		$publicacion->url_descarga = $request->input('archivoPdf');
		$publicacion->imagen = $request->input('archivoImagen');
        $publicacion->save();
		
		return redirect()->route('publicaciones.index');
	}
	
	public function edit($id){
		$publicacion = Publicaciones::find($id);
		return view('viewRed.adminRed.editaPublicacion')->with('publicacion', $publicacion);
	}
	
	public function update(Request $request, $id){
		$publicacion = Publicaciones::find($id);
        $publicacion->titulo = $request->input('titulo');
        $publicacion->autor = $request->input('autor');
        $publicacion->pais = $request->input('pais');
		$publicacion->categoria = $request->input('categoria');
		$publicacion->url_descarga = $request->input('archivoPdf');
		$publicacion->imagen = $request->input('archivoImagen');
        $publicacion->save();
		
		return redirect()->route('publicaciones.index');
	}
	
	public function destroy($id){
		$publicacion->destroy($id);
		
		return redirect()->route('publicaciones.index');
	}
}
