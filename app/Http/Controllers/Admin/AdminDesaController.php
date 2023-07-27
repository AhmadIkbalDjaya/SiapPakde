<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDesaController extends Controller
{
    public function index() {
        return view('pages.admin.desa', [
            "title" => "Desa",
            "desas" => Desa::latest()->get(),
        ]);
    }

    public function show(Desa $desa) {
        return view('pages.admin.desa_show', [
            "title" => "Desa $desa->nama",
            "desa" => $desa,
        ]);
    }
}
