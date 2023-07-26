<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa;

class KawasanController extends Controller
{
    public function index() {
        return view('pages.user.kawasan', [
            "title" => "Kawasan Perdesaan",
        ]);
    }

    public function show(Desa $desa) {
        return view('pages.user.kawasan_desa', [
            "title" => "Kawasan Desa $desa->nama",
        ]);
    }
}
