<?php

namespace App\Http\Livewire\Admin\Desa\Kelembagaan;

use App\Models\KaderPkk;
use Livewire\Component;

class PkkTab extends Component
{
    public $desa;
    public $kader_pkk_id, $nama, $jabatan;
    public $kader_pkk_edit_id;

    public function render()
    {
        $kader_pkks = KaderPkk::where('desa_id', $this->desa->id)->get();
        return view('livewire.admin.desa.kelembagaan.pkk-tab', [
            "kader_pkks" => $kader_pkks,
        ]);
    }

    public function updated($fields) {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "jabatan" => "required|string",
        ]);
    }

    public function store() {
        $validated = $this->validate([
            "nama" => "required|string",
            "jabatan" => "required|string",
        ]);
        $validated["desa_id"] = $this->desa->id;
        KaderPkk::create($validated);
        session()->flash('success', "Kader Pkk Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(KaderPkk $kaderPkk)
    {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
        ]);
        $kaderPkk->update($validated);
        session()->flash('success', "KaderPkk Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(KaderPkk $KaderPkk)
    {
        $KaderPkk->delete();
        session()->flash('danger', "Kader Pkk Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField() {
        $this->kader_pkk_id = null;
        $this->nama = null;
        $this->jabatan = null;
        $this->kader_pkk_edit_id = null;
    }

    public function setField(KaderPkk $kaderPkk) {
        $this->kader_pkk_id = $kaderPkk->id;
        $this->nama = $kaderPkk->nama;
        $this->jabatan = $kaderPkk->jabatan;
        $this->kader_pkk_edit_id = $kaderPkk->id;
    }
}
