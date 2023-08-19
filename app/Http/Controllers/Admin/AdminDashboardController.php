<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\User;
use App\Models\Bumdes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            "title" => "Admin Dashboard",
            "desa_count" => Desa::count(),
            "kec_admin_count" => User::where('role', 1)->count(),
            "desa_admin_count" => User::where('role', 2)->count(),
            "desas" => Desa::latest()->limit(8)->get(),
        ]);
    }

    public function profile()
    {
        return view("pages.admin.profile", [
            "title" => "User Profile",
        ]);
    }
}
