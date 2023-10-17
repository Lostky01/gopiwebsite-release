<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Ini buat akses database
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataTableExport; // Ganti dengan nama export yang sesuai
use PDF; 
use Illuminate\Support\Facades\View; 

class AdminController extends Controller
{
    public function index()
    {
        $data = Data::orderBy('dataemail.created_at', 'desc')->get();
        return view('admin', compact('data'));
    }

    public function downloadPdf()
    {
        $tableName = 'dataemail';
    
        // Nama file untuk menyimpan PDF
        $fileName = 'data_' . $tableName . '_' . now()->format('YmdHis') . '.pdf';
    
        // Query untuk mengambil data yang ingin di-export ke PDF
        $data = DB::table($tableName)->get();
    
        // Membuat PDF menggunakan library PDF yang kamu gunakan
        $pdf = PDF::loadView('pdf', compact('data')); 
    
        // Simpan PDF ke file
        $pdf->save(storage_path('app/' . $fileName));
    
        // Menghasilkan response untuk download
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
    
        return response()->download(storage_path('app/' . $fileName), $fileName, $headers);
    }

    public function exportToExcel()
    {
        $tableName = 'dataemail';

        // Buat nama file dengan format "data_nama_tabel_tanggal.xlsx"
        $fileName = 'data_' . $tableName . '_' . now()->format('Y-m-d-H-i-s') . '.xlsx';

        return Excel::download(new DataTableExport(), $fileName);
    }

}
