<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactExport implements FromCollection, WithHeadings
{
    protected $dato;
    public function __construct($dato)
    {
        $this->dato = $dato;
    }

    public function collection()
    {
        if ($this->dato == 0) {
            return Contact::select('contacts.nombre', 'contacts.apellido', 'contacts.telefono', 'areas.nombrearea')
                ->join('areas', 'contacts.area_id', '=', 'areas.id')
                ->get();
        } else {

            return Contact::select('contacts.nombre', 'contacts.apellido', 'contacts.telefono', 'areas.nombrearea')
                ->join('areas', 'contacts.area_id', '=', 'areas.id')
                ->where('contacts.nombre', 'like', '%' . $this->dato . '%')
                ->orWhere('contacts.apellido', 'like', '%' . $this->dato . '%')
                ->orWhere('contacts.telefono', 'like', '%' . $this->dato . '%')
                ->orWhere('areas.nombrearea', 'like', '%' . $this->dato . '%')
                ->get();
        }
    }
    public function headings(): array
    {
        return ['NOMBRE', 'APELLIDO', 'TELEFONO', 'AREA'];
    }
}
