<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use App\Models\KategoriKawasan;
use App\Models\Kawasan;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class KawasanTab extends Component
{
    use WithFileUploads;
    public $desa;

    public $kawasan_id, $nama, $foto, $deskripsi, $kategori_kawasan_id;
    public $kawasan_edit_id, $show_foto;

    public function render()
    {
        $kategories = KategoriKawasan::all();
        $kawasans = Kawasan::where('desa_id', $this->desa->id)->get();
        return view('livewire.admin.desa.show.kawasan-tab', [
            "kategories" => $kategories,
            "kawasans" => $kawasans,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "foto" => "nullable|image",
            "deskripsi" => "nullable|string",
            "kategori_kawasan_id" => "required|exists:kategori_kawasans,id",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "foto" => "nullable|image",
            "deskripsi" => "nullable|string",
            "kategori_kawasan_id" => "required|exists:kategori_kawasans,id",
        ]);
        $validated["desa_id"] = $this->desa->id;
        if ($this->foto) {
            $validated["foto"] = $this->foto->store("/kawasan");
        } elseif ($this->foto == null) {
            unset($validated["foto"]);
        }
        Kawasan::create($validated);
        session()->flash('success', "Kawasan Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function  update(Kawasan $kawasan)
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "foto" => "nullable|image",
            "deskripsi" => "nullable|string",
            "kategori_kawasan_id" => "required|exists:kategori_kawasans,id",
        ]);
        $validated["desa_id"] = $this->desa->id;
        if ($this->foto) {
            if ($kawasan->foto != "kawasan/default.jpg") {
                Storage::delete($kawasan->foto);
            }
            $validated["foto"] = $this->foto->store("/kawasan");
        } elseif ($this->foto == null) {
            unset($validated["foto"]);
        }
        $kawasan->update($validated);
        session()->flash('success', "Kawasan Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(Kawasan $kawasan)
    {
        if ($kawasan->foto != "kawasan/default.jpg") {
            Storage::delete($kawasan->foto);
        }
        $kawasan->delete();
        session()->flash('danger', "Kawasan Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
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
    }

    public function setField(Kawasan $kawasan)
    {
        $this->kawasan_id = $kawasan->id;
        $this->kawasan_edit_id = $kawasan->id;
        $this->nama = $kawasan->nama;
        $this->show_foto = $kawasan->foto;
        $this->deskripsi = $kawasan->deskripsi;
        $this->kategori_kawasan_id = $kawasan->kategori_kawasan_id;
    }
}
