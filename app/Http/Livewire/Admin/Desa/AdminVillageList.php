<?php

namespace App\Http\Livewire\Admin\Desa;

use App\Models\Desa;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminVillageList extends Component
{
    use WithFileUploads;

    public $search = '';

    public $nama, $alamat, $penjelasan, $longitude, $latitude, $foto;

    public function render()
    {
        return view('livewire.admin.desa.admin-village-list', [
            "desas" => Desa::where('nama', 'like', "%$this->search%")->latest()->get(),
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required",
            "alamat" => "required",
            "penjelasan" => "required",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
            "foto" => "nullable|image",
        ]);
    }

    public function storeVillage()
    {
        $validated = $this->validate([
            "nama" => "required",
            "alamat" => "required",
            "penjelasan" => "required",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
            "foto" => "nullable|image",
        ]);
        if ($this->foto) {
            $validated['foto'] = $this->foto->store('/desa');
        } else {
            unset($validated['foto']);
        }
        
        $slug = Str::slug($validated['nama']);
        $counter = 1;

        while (Desa::where('slug', $slug)->exists()) {
            $slug = Str::slug($validated['nama']) . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;
        Desa::create($validated);
        session()->flash('success', "Desa Berhasil Ditambahkan");
        $this->resetFields();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetFields()
    {
        $this->nama = null;
        $this->alamat = null;
        $this->penjelasan = null;
        $this->longitude = null;
        $this->latitude = null;
        $this->foto = null;
    }
}
