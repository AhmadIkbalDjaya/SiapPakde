<?php

namespace App\Http\Livewire\Admin\Desa\Kelembagaan;

use App\Models\Kpm;
use Livewire\Component;

class KpmTab extends Component
{
    public $desa;
    public $kpm_id, $nama, $jabatan;
    public $kpm_edit_id;

    public function render()
    {
        $kpms = Kpm::where('desa_id', $this->desa->id)->get();
        return view('livewire.admin.desa.kelembagaan.kpm-tab', [
            "kpms" => $kpms,
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
        Kpm::create($validated);
        session()->flash('success', "KPM Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(Kpm $kpm)
    {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
        ]);
        $kpm->update($validated);
        session()->flash('success', "KPM Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(Kpm $kpm)
    {
        $kpm->delete();
        session()->flash('danger', "KPM Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->kpm_id = null;
        $this->nama = null;
        $this->jabatan = null;
        $this->kpm_edit_id = null;
    }

    public function setField(Kpm $Kpm)
    {
        $this->kpm_id = $Kpm->id;
        $this->nama = $Kpm->nama;
        $this->jabatan = $Kpm->jabatan;
        $this->kpm_edit_id = $Kpm->id;
    }
}
