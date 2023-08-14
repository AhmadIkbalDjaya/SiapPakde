<?php

namespace App\Http\Controllers;

use App\Models\Bpd;
use App\Models\BpdMember;
use App\Models\Desa;
use App\Models\Bumdes;
use App\Models\KaderPkk;
use App\Models\KaderPosyandu;
use App\Models\KarangTaruna;
use App\Models\Kpm;
use App\Models\Lpm;
use Illuminate\Http\Request;
use App\Models\PerangkatDesa;
use App\Models\Posyandu;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpHandler;

class DesaAdminController extends Controller
{
    public function index()
    {
        $desa = Desa::where('id', auth()->user()->desa_id)->first();
        return view("pages.desa-admin.dashboard", [
            "title" => "Dashboard Desa Nama Desa",
            "desa" => $desa,
            "perangkat_desa_count" => PerangkatDesa::where('desa_id', $desa->id)->count(),
            "bumdes_count" => Bumdes::where('desa_id', $desa->id)->count(),
            "bpd_count" => BpdMember::whereIn('bpd_id', Bpd::where('desa_id', $desa->id)->pluck('id'))->count(),
            "kader_pkk_count" => KaderPkk::where('desa_id', $desa->id)->count(),
            "posyandu_count" => Posyandu::where('desa_id', $desa->id)->count(),
            "kader_posyandu_count" => KaderPosyandu::where('posyandu_id', Posyandu::where('desa_id', $desa->id)->pluck('id'))->count(),
            "kpm_count" => Kpm::where('desa_id', $desa->id)->count(),
            "karang_taruna_count" => KarangTaruna::where('desa_id', $desa->id)->count(),
            "lpm_count" => Lpm::where('desa_id', $desa->id)->count(),
        ]);
    }

    public function profile()
    {
        return view("pages.desa-admin.profile", [
            "title" => "Profile"
        ]);
    }

    public function perangkatDesa()
    {
        return view('pages.desa-admin.perangkat_desa', [
            "title" => "Perangkat Desa",
        ]);
    }

    public function bumdes()
    {
        return view("pages.desa-admin.bumdes", [
            "title" => "Bumdes"
        ]);
    }

    public function kelembagaan()
    {
        return view("pages.desa-admin.kelembagaan", [
            "title" => "Kelembagaan"
        ]);
    }

    public function publikasi()
    {
        return view("pages.desa-admin.publikasi", [
            "title" => "Publikasi"
        ]);
    }

    public function  kawasan()
    {
        return view("pages.desa-admin.kawasan", [
            "title" => "Kawasan",
            "desa" => auth()->user()->desa,
        ]);
    }
}
