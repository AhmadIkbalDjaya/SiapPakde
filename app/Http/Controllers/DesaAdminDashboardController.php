<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaAdminDashboardController extends Controller
{
    public function index() {
        return view("pages.desa-admin.dashboard", [
            "title" => "Dashboard"
        ]);
    }
}
