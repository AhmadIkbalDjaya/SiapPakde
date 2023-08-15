<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAccountController extends Controller
{
    public function desa()
    {
        return view('pages.admin.desa_admin', [
            "title" => "Admin Desa",
        ]);
    }

    public function kecamatan()
    {
        return view("pages.admin.kec_admin", [
            "title" => "Admin Kecamatan",
        ]);
    }
}
