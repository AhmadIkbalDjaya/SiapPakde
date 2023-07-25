<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa;

class ProfileController extends Controller
{
    public function index() {
        return view('pages.user.profile', [
            "title" => "Profile",
            "desas" => Desa::all(),
        ]);
    }

    public function show(Desa $desa) {

        return view('pages.user.profile_desa', [
            "title" => "Profile $desa->nama",
            "desa" => $desa,
        ]);
    }
}
