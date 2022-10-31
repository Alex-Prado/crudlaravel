<?php

namespace App\Http\Controllers;

use App\Exports\ContactExport;
use App\Imports\ContactImport;
use App\Models\Area;
use App\Models\Contact;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
// use Barryvdh\DomPDF\PDF;
// use PDF;

class ContactController extends Controller
{

    public function index()
    {
        $contactos = Contact::select('contacts.*', 'areas.nombrearea')
            ->join('areas', 'contacts.area_id', '=', 'areas.id')
            ->get();

        return view('contact.index', ['contactos' => $contactos, 'dato' => 0]);
    }
    public function filtro(Request $request)
    {
        if ($request->nombre !== null) {
            $contactos = Contact::select('contacts.*', 'areas.nombrearea')
                ->join('areas', 'contacts.area_id', '=', 'areas.id')
                ->where('contacts.nombre', 'like', '%' . $request->nombre . '%')
                ->orWhere('contacts.apellido', 'like', '%' . $request->nombre . '%')
                ->orWhere('contacts.telefono', 'like', '%' . $request->nombre . '%')
                ->orWhere('areas.nombrearea', 'like', '%' . $request->nombre . '%')
                ->get();
        } else {

            return redirect()->route('contact.index');
        }
        return view('contact.index', ['contactos' => $contactos, 'dato' => $request->nombre]);
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
        return redirect()->route('contact.index')->with('mensaje', 'contacto actualizado');
    }
    public function destroy(Contact $contact)
    {
        Contact::find($contact->id)->delete();
        return redirect()->route('contact.index')->with('mensaje', 'contacto eliminado');
    }
    public function export($dato)
    {
        return Excel::download(new ContactExport($dato), 'contacto.xlsx');
    }
    public function import()
    {
        Excel::import(new ContactImport, request()->file('file'));
        return back();
    }

    public function generarPdf()
    {
        $contactos = Contact::select('contacts.*', 'areas.nombrearea')
            ->join('areas', 'contacts.area_id', '=', 'areas.id')
            ->get();
        $pdf = Pdf::loadView('contact.index', ['contactos' => $contactos, 'dato' => 0]);
        return $pdf->download('genera.pdf');
    }
}
