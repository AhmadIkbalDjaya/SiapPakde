<?php

namespace App\Http\Livewire\Admin\MasterData;

use App\Models\KategoriKawasan as ModelsKategoriKawasan;
use Livewire\Component;

class KategoriKawasan extends Component
{
    public $kategori_id, $nama;
    public $kategori_edit_id;

    public function render()
    {
        $data = ModelsKategoriKawasan::all();
        return view('livewire.admin.master-data.kategori-kawasan', [
            "kategories" => $data,
        ]);
    }

    public function  updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
        ]);
    }

    public function  store()
    {
        $validated = $this->validate([
            "nama" => "required|string",
        ]);
        ModelsKategoriKawasan::create($validated);
        session()->flash('success', "Kategori Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(ModelsKategoriKawasan $kategori_kawasan)
    {
        $validated = $this->validate([
            "nama" => "required|string",
        ]);
        $kategori_kawasan->update($validated);
        session()->flash('success', "Kategori Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(ModelsKategoriKawasan $kategori_kawasan)
    {
        $kategori_kawasan->delete();
        session()->flash('danger', "Kategori Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->kategori_id = null;
        $this->kategori_edit_id = null;
        $this->nama = null;
    }

    public function setField(ModelsKategoriKawasan $kategori_kawasan)
    {
        $this->kategori_id = $kategori_kawasan->id;
        $this->kategori_edit_id = $kategori_kawasan->id;
        $this->nama = $kategori_kawasan->nama;
    }
}
