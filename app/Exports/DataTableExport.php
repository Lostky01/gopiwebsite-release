<?php

namespace App\Exports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataTableExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Data::all(); // Ganti dengan model dan data yang sesuai
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Email',
            'Phone',
            'Message',
            // Tambahin kolom lain sesuai data yang lu mau tampilin
        ];
    }
}
