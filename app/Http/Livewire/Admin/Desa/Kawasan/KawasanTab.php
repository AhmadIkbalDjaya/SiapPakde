<?php

namespace App\Http\Livewire\Admin\Desa\Kawasan;

use App\Models\DesaKawasan;
use App\Models\KategoriKawasan;
use App\Models\Kawasan;
use Livewire\Component;
use Livewire\WithFileUploads;

class KawasanTab extends Component
{
    use WithFileUploads;

    public $kawasan_id, $nama, $foto, $deskripsi, $kategori_kawasan_id, $desa_kawasan_id;
    public $kawasan_edit_id, $show_foto;

    public function render()
    {
        $data = Kawasan::all();
        $kategories = KategoriKawasan::all();
        $desas = DesaKawasan::all();
        return view('livewire.admin.desa.kawasan.kawasan-tab', [
            "kawasans" => $data,
            "kategories" => $kategories,
            "desas" => $desas,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "foto" => "required|image",
            "deskripsi" => "nullable|string",
            "kategori_kawasan_id" => "required|exists:kategori_kawasans,id",
            "desa_kawasan_id" => "required|exists:desa_kawasans,id",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "foto" => "required|image",
            "deskripsi" => "nullable|string",
            "kategori_kawasan_id" => "required|exists:kategori_kawasans,id",
            "desa_kawasan_id" => "required|exists:desa_kawasans,id",
        ]);
        
    }

    public function resetField()
    {
        $this->kawasan_id = null;
        $this->kawasan_edit_id = null;
        $this->nama = null;
        $this->foto = null;
        $this->show_foto = null;
        $this->deskripsi = null;
        $this->kategori_kawasan_id = null;
        $this->desa_kawasan_id = null;
    }

    public function setFiled(Kawasan $kawasan)
    {
    }
}
