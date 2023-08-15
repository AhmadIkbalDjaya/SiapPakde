<?php

namespace App\Http\Livewire\Admin\MasterData;

use App\Models\Kecamatan as ModelsKecamatan;
use Livewire\Component;

class Kecamatan extends Component
{
    public $kecamatan_id, $nama;
    public $kecamatan_edit_id;

    public function render()
    {
        $kecamatans = ModelsKecamatan::all();
        return view('livewire.admin.master-data.kecamatan', [
            "kecamatans" => $kecamatans,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required|string",
        ]);
        ModelsKecamatan::create($validated);
        session()->flash('success', "Kecamatan Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(ModelsKecamatan $kecamatan)
    {
        $validated = $this->validate([
            "nama" => "required|string",
        ]);
        $kecamatan->update($validated);
        session()->flash('success', "Kecamatan Berhasil Dupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(ModelsKecamatan $kecamatan)
    {
        $kecamatan->delete();
        session()->flash('danger', "Kecamatan Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->kecamatan_id = null;
        $this->kecamatan_edit_id = null;
        $this->nama = null;
    }

    public function  setField(ModelsKecamatan $kecamatan)
    {
        $this->kecamatan_id = $kecamatan->id;
        $this->kecamatan_edit_id = $kecamatan->id;
        $this->nama = $kecamatan->nama;
    }
}
