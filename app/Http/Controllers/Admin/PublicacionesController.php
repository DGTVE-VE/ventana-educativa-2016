<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Mediateca\Publicacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PublicacionesController extends Controller
{
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

        Publicacion::create($request->all());

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
        $this->validate($request, ['imagen' => 'required', 'titulo' => 'required', 'autor' => 'required', 'categoria' => 'required', 'url_descarga' => 'required', 'pais' => 'required', ]);

        $Publicacion = Publicacion::findOrFail($id);
        $Publicacion->update($request->all());

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
        Publicacion::destroy($id);

        Session::flash('flash_message', 'Publicacion deleted!');

        return redirect('admin/publicaciones');
    }
}
