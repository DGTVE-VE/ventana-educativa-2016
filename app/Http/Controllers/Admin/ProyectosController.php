<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $this->validate($request, ['titulo' => 'required', 'banner' => 'required', 'descripción' => 'required', 'thumbnail' => 'required', 'activo' => 'required', 'liga' => 'required', ]);

        Proyecto::create($request->all());

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
        $this->validate($request, ['titulo' => 'required', 'banner' => 'required', 'descripción' => 'required', 'thumbnail' => 'required', 'activo' => 'required', 'liga' => 'required', ]);

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());

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
        Proyecto::destroy($id);

        Session::flash('flash_message', 'Proyecto deleted!');

        return redirect('admin/proyectos');
    }
}
