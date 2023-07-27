<?php

namespace App\Http\Livewire\Admin\Desa\Kelembagaan;

use App\Models\Lpm;
use Livewire\Component;

class LpmTab extends Component
{
    public $desa;
    public $lpm_id, $nama, $jabatan;
    public $lpm_edit_id;

    public function render()
    {
        $lpms = Lpm::where('desa_id', $this->desa->id)->get();
        return view('livewire.admin.desa.kelembagaan.lpm-tab', [
            "lpms" => $lpms,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "jabatan" => "required|string",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "jabatan" => "required|string",
        ]);
        $validated["desa_id"] = $this->desa->id;
        Lpm::create($validated);
        session()->flash('success', "LPM Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(Lpm $lpm)
    {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
        ]);
        $lpm->update($validated);
        session()->flash('success', "LPM Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(Lpm $lpm)
    {
        $lpm->delete();
        session()->flash('danger', "LPM Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->lpm_id = null;
        $this->nama = null;
        $this->jabatan = null;
        $this->lpm_edit_id = null;
    }

    public function setField(Lpm $lpm)
    {
        $this->lpm_id = $lpm->id;
        $this->nama = $lpm->nama;
        $this->jabatan = $lpm->jabatan;
        $this->lpm_edit_id = $lpm->id;
    }
}
