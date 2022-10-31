<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContactImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        // dd('llego');
        return new Contact([
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'telefono' => $row['telefono'],
            'area_id' => $row['area_id'],
        ]);
    }
}
