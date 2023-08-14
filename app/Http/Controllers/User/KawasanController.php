<?php

namespace App\Http\Controllers\User;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KategoriKawasan;

class KawasanController extends Controller
{
    public function index()
    {
        return view("pages.user.kawasan", [
            "title" => "Kawasan",
        ]);
    }

    public function show(Desa $desa)
    {
        return view("pages.user.kawasan_desa", [
            "title" => "Kawasan desa $desa->nama",
            "desa" => $desa,
            "kategories" => KategoriKawasan::all()
        ]);
    }
}
