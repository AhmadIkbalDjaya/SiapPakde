<?php

namespace App\Http\Livewire\Admin\Desa\Kelembagaan;

use App\Models\KarangTaruna;
use Livewire\Component;

class KarangTarunaTab extends Component
{
    public $desa;
    public $karang_taruna_id, $nama, $jabatan;
    public $karang_taruna_edit_id;

    public function render()
    {
        $karang_tarunas = KarangTaruna::where("desa_id", $this->desa->id)->get();
        return view('livewire.admin.desa.kelembagaan.karang-taruna-tab', [
            "karang_tarunas" => $karang_tarunas,
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
        KarangTaruna::create($validated);
        session()->flash('success', "Kader Pkk Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(KarangTaruna $karangTaruna)
    {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
        ]);
        $karangTaruna->update($validated);
        session()->flash('success', "KarangTaruna Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(KarangTaruna $karangTaruna)
    {
        $karangTaruna->delete();
        session()->flash('danger', "Kader Pkk Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField() {
        $this->karang_taruna_id = null;
        $this->nama = null;
        $this->jabatan = null;
        $this->karang_taruna_edit_id = null;
    }

    public function setField(KarangTaruna $KarangTaruna) {
        $this->karang_taruna_id = $KarangTaruna->id;
        $this->nama = $KarangTaruna->nama;
        $this->jabatan = $KarangTaruna->jabatan;
        $this->karang_taruna_edit_id = $KarangTaruna->id;
    }
}
