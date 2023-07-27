<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\User;
use App\Models\Bumdes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
