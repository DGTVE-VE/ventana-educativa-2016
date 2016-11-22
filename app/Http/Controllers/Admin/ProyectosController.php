<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Mediateca\Proyecto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(15);

        return view('viewAdmin.proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('viewAdmin.proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['titulo' => 'required', 'banner' => 'required', 'descripcion' => 'required', 'thumbnail' => 'required', 'activo' => 'required', 'liga' => 'required', ]);

        $proyecto = new Proyecto;
        $proyecto->titulo = $request->titulo;
        $proyecto->save();

        $destinationPath_0 = 'imagenes/red/proyectos';
        $destinationPath_1 = 'imagenes/red/proyectos/bannersproyectos';

        $banner_ext = Input::file('banner')->getClientOriginalExtension();
        $banner_url  = Input::file('banner')->move($destinationPath_0, $proyecto->id.'_banner.'.$banner_ext);
        $proyecto->banner  = $banner_url;

        $proyecto->descripcion = $request->descripcion;

        $thumbnail_ext = Input::file('thumbnail')->getClientOriginalExtension();
        $thumbnail_url  = Input::file('thumbnail')->move($destinationPath_1, $proyecto->id.'_thumbnail.'.$thumbnail_ext);
        $proyecto->thumbnail  = $thumbnail_url;

        $proyecto->activo  = $request->activo;
        $proyecto->liga  = $request->liga;

        $proyecto->save();

        Session::flash('flash_message', 'Proyecto added!');

        return redirect('admin/proyectos');
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
        $proyecto = Proyecto::findOrFail($id);

        return view('viewAdmin.proyectos.show', compact('proyecto'));
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
        $proyecto = Proyecto::findOrFail($id);

        return view('viewAdmin.proyectos.edit', compact('proyecto'));
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
        $this->validate($request, ['titulo' => 'required', 'descripcion' => 'required', 'activo' => 'required', 'liga' => 'required', ]);

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->titulo = $request->titulo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->activo = $request->activo;
        $proyecto->liga = $request->liga;


        if ($request->banner != null) {

          $destinationPath_0 = 'imagenes/red/proyectos';

          unlink(public_path($proyecto->banner));

          $banner_ext = Input::file('banner')->getClientOriginalExtension();
          $banner_url  = Input::file('banner')->move($destinationPath_0, $proyecto->id.'_banner.'.$banner_ext);
          $proyecto->banner  = $banner_url;

        }

        if ($request->thumbnail != null) {

          $destinationPath_1 = 'imagenes/red/proyectos/bannersproyectos';

          unlink(public_path($proyecto->thumbnail));

          $thumbnail_ext = Input::file('thumbnail')->getClientOriginalExtension();
          $thumbnail_url  = Input::file('thumbnail')->move($destinationPath_1, $proyecto->id.'_thumbnail.'.$thumbnail_ext);
          $proyecto->thumbnail  = $thumbnail_url;

        }

        $proyecto->save();

        Session::flash('flash_message', 'Proyecto updated!');

        return redirect('admin/proyectos');
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
        $proyecto = Proyecto::findOrFail($id);

      if( file_exists($proyecto->thumbnail) && isset($proyecto->thumbnail) ){
        unlink($proyecto->thumbnail);
      }
      if ( file_exists($proyecto->banner) && isset($proyecto->banner) ) {
          unlink($proyecto->banner);
      }


        Proyecto::destroy($id);

        Session::flash('flash_message', 'Proyecto deleted!');

        return redirect('admin/proyectos');
    }
}
