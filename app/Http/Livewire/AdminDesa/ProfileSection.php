<?php

namespace App\Http\Livewire\AdminDesa;

use App\Models\Desa;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ProfileSection extends Component
{
    public $desa;
    public $desa_id, $nama, $alamat, $potensi, $longitude, $latitude;

    public function mount() {
        $desa = Desa::where('id', auth()->user()->desa_id)->first();
        $this->desa = $desa;
        $this->desa_id = $desa->id;
        $this->nama = $desa->nama;
        $this->alamat = $desa->alamat;
        $this->potensi = $desa->potensi;
        $this->longitude = $desa->longitude;
        $this->latitude = $desa->latitude;
    }

    public function render()
    {
        return view('livewire.admin-desa.profile-section');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "alamat" => "required|string",
            "potensi" => "required|string",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
        ]);
    }

    public function update()
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "alamat" => "required|string",
            "potensi" => "required|string",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
        ]);

        // if ($this->foto) {
        //     if ($this->desa->foto != 'desa/default.jpg') {
        //         Storage::delete($this->desa->foto);
        //     }
        //     $validated['foto'] = $this->foto->store('/desa');
        // } else {
        //     unset($validated['foto']);
        // }

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
        $this->dispatchBrowserEvent("close-modal");
    }
}
