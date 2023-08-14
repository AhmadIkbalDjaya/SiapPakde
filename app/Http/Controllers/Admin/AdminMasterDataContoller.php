<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMasterDataContoller extends Controller
{
    public function  index()
    {
        return view('pages.admin.master-data.kategori_kawasan', [
            "title" => "Kategori Kawasan",
        ]);
    }
}
