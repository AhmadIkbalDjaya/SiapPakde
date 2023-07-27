<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use App\Models\Bumdes;
use Livewire\Component;

class BumdesTab extends Component
{
    public $desa;
    public $bumdes_id, $nama, $direktur, $sertifikasi, $jumlah_pegawai, $unit_usaha;
    public $bumdes_edit_id;

    public function render()
    {
        $data = Bumdes::where('desa_id', $this->desa->id)->latest()->get();
        return view('livewire.admin.desa.show.bumdes-tab', [
            "bumdeses" => $data,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "direktur" => "required|string",
            "sertifikasi" => "required|boolean",
            "jumlah_pegawai" => "required|numeric",
            "unit_usaha" => "required|string"
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "direktur" => "required|string",
            "sertifikasi" => "required|boolean",
            "jumlah_pegawai" => "required|numeric",
            "unit_usaha" => "required|string"
        ]);
        $validated['desa_id'] = $this->desa->id;
        Bumdes::create($validated);
        session()->flash('success', "Bumdes Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(Bumdes $bumdes)
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "direktur" => "required|string",
            "sertifikasi" => "required|boolean",
            "jumlah_pegawai" => "required|numeric",
            "unit_usaha" => "required|string"
        ]);
        $bumdes->update($validated);
        session()->flash('success', "Bumdes Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(Bumdes $bumdes)
    {
        $bumdes->delete();
        session()->flash('danger', "Bumdes Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->bumdes_id = null;
        $this->nama = null;
        $this->direktur = null;
        $this->sertifikasi = null;
        $this->jumlah_pegawai = null;
        $this->unit_usaha = null;
        $this->bumdes_edit_id = null;
    }

    public function setField(Bumdes $bumdes)
    {
        $this->bumdes_id = $bumdes->id;
        $this->nama = $bumdes->nama;
        $this->direktur = $bumdes->direktur;
        $this->sertifikasi = $bumdes->sertifikasi;
        $this->jumlah_pegawai = $bumdes->jumlah_pegawai;
        $this->unit_usaha = $bumdes->unit_usaha;
        $this->bumdes_edit_id = $bumdes->id;
    }
}
