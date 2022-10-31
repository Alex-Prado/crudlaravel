<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contactos = Contact::select('contacts.*', 'areas.nombrearea')
            ->join('areas', 'contacts.area_id', '=', 'areas.id')
            ->get();

        return view('contact.index', compact('contactos'));
    }

    public function create()
    {
        $areas = Area::all();
        return view('contact.create', ['areas' => $areas]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('contact.index')->with('mensaje', 'contacto creado');
    }

    public function show(Contact $contact)
    {
        $contacto = Contact::select('contacts.*', 'areas.nombrearea')
            ->join('areas', 'contacts.area_id', '=', 'areas.id')
            ->where('contacts.id', '=', $contact->id)
            ->get();
        $areas = Area::all();
        return view('contact.updates', ['contactos' => $contacto, 'areas' => $areas]);
    }


    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        // dd($contact);
        // $contact = Contact::find($contact->id);
        // $contact->nombre = $request->nombre;
        // $contact->apellido = $request->apellido;
        // $contact->telefono = $request->telefono;
        // $contact->area_id = $request->area_id;
        // $contact->save();
        return redirect()->route('contact.index')->with('mensaje', 'contacto actualizado');
    }


    public function destroy(Contact $contact)
    {
        Contact::find($contact->id)->delete();
        return redirect()->route('contact.index')->with('mensaje', 'contacto eliminado');
    }
}
