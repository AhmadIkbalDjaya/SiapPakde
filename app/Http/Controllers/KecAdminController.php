<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class KecAdminController extends Controller
{
    public function index()
    {

        return view('pages.kec-admin.dashboard', [
            "title" => "Dashboard kecamatan" . auth()->user()->kecamatan->nama,
        ]);
    }

    public function desa()
    {
        return view('pages.kec-admin.desa', [
            "title" => "Desa",
        ]);
    }

    public function desaShow(Desa $desa)
    {
        return view("pages.kec-admin.desa_show", [
            "title" => $desa->nama,
            "desa" => $desa,
        ]);
    }

    public function adminDesa()
    {
        return view("pages.kec-admin.desa_admin", [
            "title" => "Admin Desa",
        ]);
    }
}
