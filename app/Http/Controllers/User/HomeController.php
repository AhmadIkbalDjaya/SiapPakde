<?php

namespace App\Http\Controllers\User;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = Desa::latest()->limit(8)->get();
        return view('pages.user.home', [
            "title" => "Siap Pakde",
            "desas" => $data,
        ]);
    }
}
