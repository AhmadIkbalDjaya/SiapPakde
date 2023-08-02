<?php

namespace App\Http\Livewire\AdminDesa;

use App\Models\Desa;
use Livewire\Component;
use App\Models\PerangkatDesa;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PerangkatDesaSection extends Component
{
    use WithFileUploads;
    public $desa;

    public $perangkat_desa_id, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $pendidikan, $pekerjaan;
    public $perangkat_desa_edit_id;
    // public $preview_image;

    public function mount()
    {
        $desa = Desa::where('id', auth()->user()->desa_id)->first();
        $this->desa = $desa;
    }

    public function render()
    {
        $data = PerangkatDesa::where('desa_id', $this->desa->id)->get();
        return view('livewire.admin-desa.perangkat-desa-section', [
            "perangkat_desas" => $data,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "tempat_lahir" => "required|string",
            "tanggal_lahir" => "required|date",
            "jenis_kelamin" => "required|in:Laki-Laki,Perempuan",
            "pendidikan" => "required|string",
            "pekerjaan" => "required|string",
        ]);
    }

    public function storePerangkat()
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "tempat_lahir" => "required|string",
            "tanggal_lahir" => "required|date",
            "jenis_kelamin" => "required|in:Laki-Laki,Perempuan",
            "pendidikan" => "required|string",
            "pekerjaan" => "required|string",
        ]);
        $validated["desa_id"] = $this->desa->id;
        PerangkatDesa::create($validated);
        session()->flash('success', "Desa Berhasil Ditambahkan");
        $this->resetFields();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(PerangkatDesa $perangkatDesa) {
        $validated = $this->validate([
            "nama" => "required|string",
            "tempat_lahir" => "required|string",
            "tanggal_lahir" => "required|date",
            "jenis_kelamin" => "required|in:Laki-Laki,Perempuan",
            "pendidikan" => "required|string",
            "pekerjaan" => "required|string",
        ]);
        $perangkatDesa->update($validated);
        session()->flash('success', "Perangkat Desa Berhasil Diupdate");
        $this->perangkat_desa_edit_id = null;
        $this->resetFields();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(PerangkatDesa $perangkatDesa) {
        $perangkatDesa->delete();
        session()->flash('danger', "Perangkat Desa Berhasil Dihapus");
        $this->resetFields();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetFields()
    {
        $this->perangkat_desa_id = null;
        $this->nama = null;
        $this->tempat_lahir = null;
        $this->tanggal_lahir = null;
        $this->jenis_kelamin = null;
        $this->pendidikan = null;
        $this->pekerjaan = null;
        $this->perangkat_desa_edit_id = null;
    }

    public function setField(PerangkatDesa $perangkatDesa)
    {
        $this->perangkat_desa_id = $perangkatDesa->id;
        $this->perangkat_desa_edit_id = $perangkatDesa->id;
        $this->nama = $perangkatDesa->nama;
        $this->tempat_lahir = $perangkatDesa->tempat_lahir;
        $this->tanggal_lahir = $perangkatDesa->tanggal_lahir;
        $this->jenis_kelamin = $perangkatDesa->jenis_kelamin;
        $this->pendidikan = $perangkatDesa->pendidikan;
        $this->pekerjaan = $perangkatDesa->pekerjaan;
    }
}
