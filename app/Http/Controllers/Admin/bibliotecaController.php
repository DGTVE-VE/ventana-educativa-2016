<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\biblioteca;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class bibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $biblioteca = biblioteca::paginate(15);

        return view('viewAdmin.biblioteca.index', compact('biblioteca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('viewAdmin.biblioteca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', 'url_tomo' => 'required', 'url_descripcion' => 'required', 'pais' => 'required', 'link_consulta' => 'required', 'clasifica_id' => 'required', ]);

        $biblioteca = new biblioteca;

        $biblioteca->nombre = $request->nombre;
        $biblioteca->save();

        $destinationPath_0 = 'imagenes/biblioteca/tomos';
        $destinationPath_1 = 'imagenes/biblioteca/tomos/hoverTomos';

        $tomo_ext = Input::file('url_tomo')->getClientOriginalExtension();
        $tomo_url  = Input::file('url_tomo')->move($destinationPath_0, $biblioteca->id.'_tomo.'.$tomo_ext);
        $biblioteca->url_tomo  = $tomo_url;

        $descripcion_ext = Input::file('url_descripcion')->getClientOriginalExtension();
        $descripcion_url  = Input::file('url_descripcion')->move($destinationPath_1, $biblioteca->id.'_descripcion.'.$descripcion_ext);
        $biblioteca->url_descripcion  = $descripcion_url;

        $biblioteca->pais = $request->pais;
        $biblioteca->link_consulta = $request->link_consulta;
        $biblioteca->clasifica_id = $request->clasifica_id;

        $biblioteca->save();

        Session::flash('flash_message', 'biblioteca added!');

        return redirect('Admin/biblioteca');
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
        $biblioteca = biblioteca::findOrFail($id);

        return view('viewAdmin.biblioteca.show', compact('biblioteca'));
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
        $biblioteca = biblioteca::findOrFail($id);

        return view('viewAdmin.biblioteca.edit', compact('biblioteca'));
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
        $this->validate($request, ['nombre' => 'required', 'pais' => 'required', 'link_consulta' => 'required', 'clasifica_id' => 'required', ]);

        $biblioteca = biblioteca::findOrFail($id);
        $biblioteca->nombre = $request->nombre;
        $biblioteca->pais = $request->pais;
        $biblioteca->link_consulta = $request->link_consulta;
        $biblioteca->clasifica_id = $request->clasifica_id;

        if ($request->url_tomo != null) {
          $destinationPath_0 = 'imagenes/biblioteca/tomos';

          if( file_exists($biblioteca->url_tomo) && isset($biblioteca->url_tomo) ){
            unlink($biblioteca->url_tomo);
          }

          $tomo_ext = Input::file('url_tomo')->getClientOriginalExtension();
          $tomo_url  = Input::file('url_tomo')->move($destinationPath_0, $biblioteca->id.'_tomate.'.$tomo_ext);

          $biblioteca->url_tomo  = $tomo_url;

        }

        if($request->url_descripcion != null){

          $destinationPath_1 = 'imagenes/biblioteca/tomos/hoverTomos';

          if( file_exists($biblioteca->url_descripcion) && isset($biblioteca->url_descripcion) ){
            unlink($biblioteca->url_descripcion);
          }

          $descripcion_ext = Input::file('url_descripcion')->getClientOriginalExtension();
          $descripcion_url  = Input::file('url_descripcion')->move($destinationPath_1, $biblioteca->id.'_descripcion.'.$descripcion_ext);
          $biblioteca->url_descripcion  = $descripcion_url;

        }

        $biblioteca->save();

        Session::flash('flash_message', 'biblioteca updated!');

        return redirect('Admin/biblioteca');
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

      $bilbioteca = biblioteca::findOrFail($id);

      if( file_exists($biblioteca->url_tomo) && isset($biblioteca->url_tomo) ){
        unlink($biblioteca->url_tomo);
      }

      if( file_exists($biblioteca->url_descripcion) && isset($biblioteca->url_descripcion) ){
        unlink($biblioteca->url_descripcion);
      }


        biblioteca::destroy($id);

        Session::flash('flash_message', 'biblioteca deleted!');

        return redirect('Admin/biblioteca');
    }
}
