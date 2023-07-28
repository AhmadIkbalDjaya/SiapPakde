<?php

namespace App\Http\Livewire\AdminDesa;

use App\Models\Desa;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ProfileSection extends Component
{
    public $desa;
    public $desa_id, $nama, $alamat, $penjelasan, $longitude, $latitude, $foto;
    public $show_foto;

    public function mount() {
        $desa = Desa::where('id', auth()->user()->desa_id)->first();
        $this->desa = $desa;
        $this->desa_id = $desa->id;
        $this->nama = $desa->nama;
        $this->alamat = $desa->alamat;
        $this->penjelasan = $desa->penjelasan;
        $this->longitude = $desa->longitude;
        $this->latitude = $desa->latitude;
        $this->show_foto = $desa->foto;
    }

    public function render()
    {
        return view('livewire.admin-desa.profile-section');
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

    public function update()
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
        $this->dispatchBrowserEvent("close-modal");
    }
}
