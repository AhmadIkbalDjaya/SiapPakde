<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use App\Models\Desa;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProfileTab extends Component
{
    use WithFileUploads;
    public $desa;

    public $nama, $alamat, $penjelasan, $longitude, $latitude, $foto;

    public function mount() {
        $this->nama = $this->desa->nama;
        $this->alamat = $this->desa->alamat;
        $this->penjelasan = $this->desa->penjelasan;
        $this->longitude = $this->desa->longitude;
        $this->latitude = $this->desa->latitude;
    }

    public function render()
    {
        return view('livewire.admin.desa.show.profile-tab');
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

    public function updateVillage()
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
            if ($this->desa->foto != 'desa/default.jpg') {
                Storage::delete($this->desa->foto);
            }
            $validated['foto'] = $this->foto->store('/desa');
        } else {
            unset($validated['foto']);
        }

        // $slug = Str::slug($validated['nama']);
        // $counter = 1;


        // while (Desa::where('slug', $slug)->where('id', '!=', $this->desa->id)->exists()) {

        //     $slug = Str::slug($validated['nama']) . '-' . $counter;
        //     $counter++;
        // }


        // $validated['slug'] = $slug;


        $desa = Desa::findOrFail($this->desa->id);
        $desa->update($validated);

        session()->flash('success', "Data Desa Berhasil Diupdate");
        // $this->dispatchBrowserEvent("close-modal");
    }
}
