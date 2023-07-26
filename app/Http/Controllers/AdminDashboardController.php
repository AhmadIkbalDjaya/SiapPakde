<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use App\Models\Desa;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index() {
        return view('pages.admin.dashboard', [
            "title" => "Admin Dashboard",
            "desa_count" => Desa::count(),
            "desa_admin_count" => User::where('role', 1)->count(),
            "bumdes_count" => Bumdes::count(),
            "desas" => Desa::latest()->limit(8)->get(),
        ]);
    }
}
