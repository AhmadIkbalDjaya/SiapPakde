<?php

namespace App\Http\Livewire\Admin\Desa\Kawasan;

use App\Models\KategoriKawasan;
use App\Models\Kawasan;
use Livewire\Component;

class KategoriSection extends Component
{
    public $kategori_id, $nama;
    public $kategori_edit_id;

    public function render()
    {
        $data = KategoriKawasan::all();
        return view('livewire.admin.desa.kawasan.kategori-section', [
            "kategories" => $data,
        ]);
    }

    public function  updated($fields) {
        $this->validateOnly($fields, [
            "nama" => "required|string",
        ]);
    }

    public function  store() {
        $validated = $this->validate([
            "nama" => "required|string",
        ]);
        KategoriKawasan::create($validated);
        session()->flash('success', "Kategori Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(KategoriKawasan $kategori_kawasan) {
        $validated = $this->validate([
            "nama" => "required|string",
        ]);
        $kategori_kawasan->update($validated);
        session()->flash('success', "Kategori Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(KategoriKawasan $kategori_kawasan) {
        $kategori_kawasan->delete();
        session()->flash('danger', "Kategori Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField() {
        $this->kategori_id = null;
        $this->kategori_edit_id = null;
        $this->nama = null;
    }

    public function setField(KategoriKawasan $kategori_kawasan) {
        $this->kategori_id = $kategori_kawasan->id;
        $this->kategori_edit_id = $kategori_kawasan->id;
        $this->nama = $kategori_kawasan->nama;
    }
}
