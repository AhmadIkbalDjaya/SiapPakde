<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use App\Models\Bumdes;
use App\Models\Kecamatan;
use App\Models\PerangkatDesa;
use Illuminate\Http\Request;

class KecAdminController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::where('id', auth()->user()->kecamatan->id)->first();
        $users = User::where('role', 2)
            ->whereHas('desa', function ($query) {
                $query->where('kecamatan_id', auth()->user()->kecamatan->id);
            })
            ->count();
        $desas = Desa::where("kecamatan_id", auth()->user()->kecamatan_id)->get();
        return view('pages.kec-admin.dashboard', [
            "title" => "Dashboard kecamatan " . auth()->user()->kecamatan->nama,
            "kecamatan" => $kecamatan,
            "desa_admin_count" => $users,
            "perangkat_desa_count" => PerangkatDesa::whereIn("desa_id", Desa::where("kecamatan_id", auth()->user()->kecamatan_id)->pluck('id'))->count(),
            "desas" => $desas,
        ]);
    }

    public function profile() {
        return view("pages.admin.profile", [
            "title" => "User Profile",
        ]);
    }

    public function desa()
    {
        return view('pages.kec-admin.desa', [
            "title" => "Desa",
        ]);
    }

    public function desaShow(Desa $desa)
    {
        return view("pages.kec-admin.desa_show", [
            "title" => $desa->nama,
            "desa" => $desa,
        ]);
    }

    public function adminDesa()
    {
        return view("pages.kec-admin.desa_admin", [
            "title" => "Admin Desa",
        ]);
    }
}
