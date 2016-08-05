<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

        biblioteca::create($request->all());

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
        $this->validate($request, ['nombre' => 'required', 'url_tomo' => 'required', 'url_descripcion' => 'required', 'pais' => 'required', 'link_consulta' => 'required', 'clasifica_id' => 'required', ]);

        $biblioteca = biblioteca::findOrFail($id);
        $biblioteca->update($request->all());

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
        biblioteca::destroy($id);

        Session::flash('flash_message', 'biblioteca deleted!');

        return redirect('Admin/biblioteca');
    }
}
