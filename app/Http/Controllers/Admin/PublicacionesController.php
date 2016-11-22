<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Mediateca\Publicacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PublicacionesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $publicaciones = Publicacion::paginate(15);

        return view('viewAdmin.publicaciones.index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('viewAdmin.publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['imagen' => 'required', 'titulo' => 'required', 'autor' => 'required', 'categoria' => 'required', 'url_descarga' => 'required', 'pais' => 'required', ]);

        $publicacion = new Publicacion;

        $publicacion->titulo = $request->titulo;
        $publicacion->autor = $request->autor;
        $publicacion->categoria = $request->categoria;
        $publicacion->pais = $request->pais;

        $publicacion->save();

        $destinationPath_0 = 'publicacionesRed/mexico/imagenesthumbnails';
        $destinationPath_1 = 'publicacionesRed/mexico';

        $imagen_ext = Input::file('imagen')->getClientOriginalExtension();
        $imagen_url  = Input::file('imagen')->move($destinationPath_0, $publicacion->id.'_imagen.'.$imagen_ext);
        $publicacion->imagen  = $imagen_url;

        $descarga_ext = Input::file('url_descarga')->getClientOriginalExtension();
        $descarga_url  = Input::file('url_descarga')->move($destinationPath_1, $publicacion->id.'_descarga.'.$descarga_ext);
        $publicacion->url_descarga  = $descarga_url;

        $publicacion->save();

        Session::flash('flash_message', 'Publicacion added!');

        return redirect('admin/publicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $Publicacion = Publicacion::findOrFail($id);

        return view('viewAdmin.publicaciones.show', compact('Publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $Publicacion = Publicacion::findOrFail($id);

        return view('viewAdmin.publicaciones.edit', compact('Publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['titulo' => 'required', 'autor' => 'required', 'categoria' => 'required', 'pais' => 'required', ]);

        $publicacion = Publicacion::findOrFail($id);
        $publicacion->titulo = $request->titulo;
        $publicacion->autor = $request->autor;
        $publicacion->categoria = $request->categoria;
        $publicacion->pais = $request->pais;

        if ($request->imagen != null) {

          $destinationPath_0 = 'publicacionesRed/mexico/imagenesthumbnails';

          if( file_exists($publicacion->imagen) && isset($publicacion->imagen) ){
            unlink($publicacion->imagen);
          }

          $imagen_ext = Input::file('imagen')->getClientOriginalExtension();
          $imagen_url  = Input::file('imagen')->move($destinationPath_0, $publicacion->id.'_imagen.'.$imagen_ext);
          $publicacion->imagen  = $imagen_url;


        }

        if ($request->url_descarga != null) {

          $destinationPath_1 = 'publicacionesRed/mexico';

          if( file_exists($publicacion->url_descarga) && isset($publicacion->url_descarga) ){
            unlink($publicacion->url_descarga);
          }

          $descarga_ext = Input::file('url_descarga')->getClientOriginalExtension();
          $descarga_url  = Input::file('url_descarga')->move($destinationPath_1, $publicacion->id.'_descarga.'.$descarga_ext);
          $publicacion->url_descarga  = $descarga_url;
        }

        $publicacion->titulo = $request->titulo;

        Session::flash('flash_message', 'Publicacion updated!');

        return redirect('admin/publicaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        $publicacion = Publicacion::findOrFail($id);

        if( file_exists($publicacion->imagen) && isset($publicacion->imagen) ){
          unlink($publicacion->imagen);
        }

        if( file_exists($publicacion->url_descarga) && isset($publicacion->url_descarga) ){
          unlink($publicacion->url_descarga);
        }

        Publicacion::destroy($id);

        Session::flash('flash_message', 'Publicacion deleted!');

        return redirect('admin/publicaciones');
    }
}
