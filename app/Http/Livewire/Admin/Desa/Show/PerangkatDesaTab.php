<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use Livewire\Component;
use App\Models\PerangkatDesa;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PerangkatDesaTab extends Component
{
    use WithFileUploads;
    public $desa;

    public $perangkat_desa_id, $nama, $jabatan, $usia, $pendidikan, $agama, $foto;
    public $perangkat_desa_edit_id;
    public $preview_image;

    public function render()
    {
        $data = PerangkatDesa::where('desa_id', $this->desa->id)->get();
        return view('livewire.admin.desa.show.perangkat-desa-tab', [
            "perangkat_desas" => $data,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required",
            "jabatan" => "required",
            "usia" => "required|numeric",
            "pendidikan" => "required",
            "agama" => "required",
            "foto" => "nullable|image"
        ]);
    }

    public function storePerangkat()
    {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
            "usia" => "required|numeric",
            "pendidikan" => "required",
            "agama" => "required",
            "foto" => "nullable|image"
        ]);
        $validated["desa_id"] = $this->desa->id;
        if ($this->foto) {
            $validated['foto'] = $this->foto->store('/perangkat_desa');
        } else {
            unset($validated['foto']);
        }
        PerangkatDesa::create($validated);
        session()->flash('success', "Desa Berhasil Ditambahkan");
        $this->resetFields();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(PerangkatDesa $perangkatDesa) {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
            "usia" => "required|numeric",
            "pendidikan" => "required",
            "agama" => "required",
            "foto" => "nullable|image"
        ]);
        if ($this->foto) {
            if ($this->desa->foto != 'perangkat_desa/default.jpg') {
                Storage::delete($this->desa->foto);
            }
            $validated['foto'] = $this->foto->store('/perangkat_desa');
        } else {
            unset($validated['foto']);
        }
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
        $this->jabatan = null;
        $this->usia = null;
        $this->pendidikan = null;
        $this->agama = null;
        $this->foto = null;
        $this->perangkat_desa_edit_id = null;
        $this->preview_image = null;
    }

    public function setField(PerangkatDesa $perangkatDesa)
    {
        $this->perangkat_desa_id = $perangkatDesa->id;
        $this->perangkat_desa_edit_id = $perangkatDesa->id;
        $this->nama = $perangkatDesa->nama;
        $this->jabatan = $perangkatDesa->jabatan;
        $this->usia = $perangkatDesa->usia;
        $this->pendidikan = $perangkatDesa->pendidikan;
        $this->agama = $perangkatDesa->agama;
        // $this->foto = $perangkatDesa->foto;
        $this->preview_image = $perangkatDesa->foto;
    }
}
