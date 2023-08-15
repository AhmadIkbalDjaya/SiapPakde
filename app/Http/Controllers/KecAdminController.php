<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KecAdminController extends Controller
{
    public function index()
    {

        return view('pages.kec-admin.dashboard', [
            "title" => "Dashboard kecamatan" . auth()->user()->kecamatan->nama,
        ]);
    }
}
