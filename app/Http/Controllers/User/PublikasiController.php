<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa;

class PublikasiController extends Controller
{
    public function index() {
        return view("pages.user.publikasi", [
            "title" => "Publikasi Desa",
        ]);
    }

    public function show(Desa $desa) {
        return view('pages.user.publikasi_desa', [
            "title" => "Publikasi Desa $desa->nama",
            "desa" => $desa,
        ]);
    }
}
