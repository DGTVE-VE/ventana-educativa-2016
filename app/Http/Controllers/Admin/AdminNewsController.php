<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\AdminNews;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $adminnews = AdminNews::paginate(15);

        return view('viewNews.index', compact('adminnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('viewNews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['titulo => required', 'url_imagen' => 'required', ]);

        $admin = new AdminNews();

        $admin->titulo = $request->titulo;

        $admin->save();
        $id = $admin->id;

        $destinationPath = 'news/'.$id;

        $imagen = $request->url_imagen->move($destinationPath);
        $admin->url_imagen = $imagen;

        $pdf = $request->url_pdf->move($destinationPath);
        $admin->url_pdf = $pdf;

        $admin->url = $request->url;
        $admin->save();

        Session::flash('flash_message', 'AdminNews added!');

        return redirect('admin/news');
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
        $adminnews = AdminNews::findOrFail($id);

        return view('viewNews.show', compact('adminnews'));
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
        $admin = AdminNews::findOrFail($id);

        if ($admin->is_active == 1) {

          $admin->is_active = 0;
          $admin->save();
          Session::flash('flash_message', 'AdminNews updated!');

        }
        else if (sizeof(AdminNews::whereis_active(1)->get()) <= 3) {

          $admin->is_active = 1;
          $admin->save();

          Session::flash('flash_message', 'AdminNews updated!');

        }
          Session::flash('flash_message', 'AdminNews not updated!');

        return redirect('admin/news');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    // public function update($id, Request $request)
    // {
    //     $admin = AdminNews::findOrFail($id);
    //
    //     if (sizeof(AdminNews::all()->whereis_active(1)) <= 3) {
    //
    //       $admin->is_active = 1;
    //       $admin->update($request->all());
    //
    //       Session::flash('flash_message', 'AdminNews updated!');
    //
    //     }
    //       Session::flash('flash_message', 'AdminNews not updated!');
    //
    //     return redirect('admin/news');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        $admin = AdminNews::findOrFail($id);
        $imagen = $admin->url_imagen;
        $pdf = $admin->url_pdf;

        if( isset($imagen) ){
          unlink(public_path($imagen));
        }

        if (isset($pdf)) {
          unlink(public_path($pdf));
        }


        if( isset($admin->id) ){
          rmdir(public_path('news/'.$admin->id));
        }

        AdminNews::destroy($id);


        Session::flash('flash_message', 'AdminNews deleted!');

        return redirect('admin/news');
    }
}
