<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AreaController extends Controller
{


    public function index()
    {
        $areas = Area::all();
        return view('area.index', ['areas' => $areas]);
    }

    public function create()
    {
        return view('area.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'nombrearea' => 'required'
        ]);
        Area::create($request->all());
        Mail::to('alexprueba@gmail.com')->send(new ContactMail($request->all()));
        return redirect()->route('area.index')->with('mensaje', 'area creado');
    }

    public function show(Area $area)
    {
        return view('area.update', ['area' => $area]);
    }


    public function update(Request $request, Area $area)
    {
        $area->update($request->all());
        return redirect()->route('area.index')->with('mensaje', 'area actualizada');
    }


    public function destroy(Area $area)
    {
        Area::find($area->id)->delete();
        return redirect()->route('area.index')->with('mensaje', 'area eliminada');
    }
}
