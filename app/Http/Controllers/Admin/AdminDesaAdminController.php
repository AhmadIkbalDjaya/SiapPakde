<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDesaAdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.desa_admin', [
            "title" => "Admin Desa",
        ]);
    }
}
