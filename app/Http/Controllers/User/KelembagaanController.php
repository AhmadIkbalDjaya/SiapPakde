<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa;

class KelembagaanController extends Controller
{
    public function index() {
        return view('pages.user.kelembagaan', [
            "title" => "Kelembagaan",
        ]);
    }

    public function show(Desa $desa) {
        return view('pages.user.kelembagaan_desa', [
            "title" => "Kelembagaan $desa->nama",
            "desa" => $desa,
        ]);
    }
}
