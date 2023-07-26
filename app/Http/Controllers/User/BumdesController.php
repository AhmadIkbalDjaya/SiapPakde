<?php

namespace App\Http\Controllers\User;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BumdesController extends Controller
{
    public function index() {
        return view('pages.user.bumdes', [
            "title" => "Badan Usaha Milik Desa",
        ]);
    }

    public function show(Desa $desa) {
        // dd($desa->bumdes);
        return view('pages.user.bumdes_desa', [
            "title" => "Bumdes $desa->nama",
            "bumdeses" => $desa->bumdes,
        ]);
    }
}
