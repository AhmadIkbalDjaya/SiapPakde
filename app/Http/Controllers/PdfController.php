<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    // public function desa()
    // {
    // }

    // public function desa_show(Desa $desa)
    // {
    // }

    public function perangkat_desa(Desa $desa)
    {
        $pdf = pdf::loadView("pdf.perangkat_desa", [
            "title" => "Perangkat $desa->nama",
            "desa" => $desa,
        ]);
        return $pdf->stream();
        // return $pdf->download("Perangkat Desa $desa->nama.pdf");
    }

    public function bumdes_desa(Desa $desa)
    {
        $pdf = pdf::loadView("pdf.bumdes_desa", [
            "title" => "Bumdes $desa->nama",
            "desa" => $desa,
        ]);
        return $pdf->stream();
        // return $pdf->download("Perangkat Desa $desa->nama.pdf");
    }

    public function kelembagaan_desa(Desa $desa)
    {
        $pdf = pdf::loadView("pdf.kelembagaan_desa", [
            "title" => "kelembagaan $desa->nama",
            "desa" => $desa,
        ]);
        return $pdf->stream();
        // return $pdf->download("Perangkat Desa $desa->nama.pdf");
    }
}
