<?php

namespace App\Http\Livewire\Admin\Desa\Kelembagaan;

use App\Models\KaderPosyandu;
use App\Models\Posyandu;
use Livewire\Component;

class PosyanduTab extends Component
{
    public $desa;

    public $posyandu_id, $nama_posyandu;
    public $posyandu_edit_id;

    public $kader_posyandu_id, $nama, $jabatan, $select_posyandu_id;
    public $kader_posyandu_edit_id;

    public function render()
    {
        $posyandus = Posyandu::where('desa_id', $this->desa->id)->get();
        $kader_posyandus = KaderPosyandu::whereIn('posyandu_id', $posyandus->pluck('id'))->get();
        return view('livewire.admin.desa.kelembagaan.posyandu-tab', [
            "posyandus" => $posyandus,
            "kader_posyandus" => $kader_posyandus,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama_posyandu" => "required|string",
            "nama" => "required|string",
            "jabatan" => "required|string",
            "select_posyandu_id" => "required|exists:posyandus,id",
        ]);
    }

    public function storePosyandu()
    {
        $validated = $this->validate([
            "nama_posyandu" => "required|string",
        ]);
        $validated['nama'] = $validated["nama_posyandu"];
        $validated['desa_id'] = $this->desa->id;
        Posyandu::create($validated);
        session()->flash('success', "Posyandu Berhasil Ditambahkan");
        $this->resetPosyanduField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function storeKaderPosyandu() {
        $validated = $this->validate([
            "nama" => "required|string",
            "jabatan" => "required|string",
            "select_posyandu_id" => "required|exists:posyandus,id",
        ]);
        $validated['posyandu_id'] = $validated['select_posyandu_id'];
        KaderPosyandu::create($validated);
        session()->flash('success', "Kader Posyandu Berhasil Ditambahkan");
        $this->resetKaderPosyanduField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function updatePosyandu(Posyandu $posyandu)
    {
        $validated = $this->validate([
            "nama_posyandu" => "required|string",
        ]);
        $validated['nama'] = $validated["nama_posyandu"];
        $posyandu->update($validated);
        session()->flash('success', "Posyandu Berhasil Diupdate");
        $this->resetPosyanduField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function updateKaderPosyandu(KaderPosyandu $kaderPosyandu) {
        $validated = $this->validate([
            "nama" => "required|string",
            "jabatan" => "required|string",
            "select_posyandu_id" => "required|exists:posyandus,id",
        ]);
        $validated['posyandu_id'] = $validated['select_posyandu_id'];
        $kaderPosyandu->update($validated);
        session()->flash('success', "Kader Posyandu Berhasil Diupdate");
        $this->resetKaderPosyanduField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroyPosyandu(Posyandu $posyandu)
    {
        KaderPosyandu::where('posyandu_id', $posyandu->id)->delete();
        $posyandu->delete();
        session()->flash('danger', "Posyandu Berhasil Dihapus");
        $this->resetPosyanduField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroyKaderPosyandu(KaderPosyandu $kaderPosyandu)
    {
        $kaderPosyandu->delete();
        session()->flash('danger', "Kader Posyandu Berhasil Dihapus");
        $this->resetKaderPosyanduField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetPosyanduField()
    {
        $this->nama_posyandu = null;
        $this->posyandu_id = null;
        $this->posyandu_edit_id = null;
    }

    public function resetKaderPosyanduField(){
        $this->kader_posyandu_id = null;
        $this->nama = null;
        $this->jabatan = null;
        $this->select_posyandu_id = null;
        $this->kader_posyandu_edit_id = null;
    }

    public function setPosyanduField(Posyandu $posyandu) {
        $this->nama_posyandu = $posyandu->nama;
        $this->posyandu_id = $posyandu->id;
        $this->posyandu_edit_id = $posyandu->id;
    }

    public function setKaderPosyanduField(KaderPosyandu $kaderPosyandu) {
        $this->kader_posyandu_id = $kaderPosyandu->id;
        $this->nama = $kaderPosyandu->nama;
        $this->jabatan = $kaderPosyandu->jabatan;
        $this->select_posyandu_id = $kaderPosyandu->posyandu_id;
        $this->kader_posyandu_edit_id = $kaderPosyandu->id;
    }
}
