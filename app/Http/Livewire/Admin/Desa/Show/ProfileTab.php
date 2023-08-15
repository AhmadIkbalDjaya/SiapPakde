<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use App\Models\Desa;
use App\Models\Kecamatan;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProfileTab extends Component
{
    use WithFileUploads;
    public $desa;
    public $kecamatans;
    public $nama, $alamat, $potensi, $jumlah_penduduk, $contact, $longitude, $latitude, $kecamatan_id;

    public function mount()
    {
        $this->kecamatans = Kecamatan::orderBy('nama', 'asc')->get();
        $this->nama = $this->desa->nama;
        $this->alamat = $this->desa->alamat;
        $this->potensi = $this->desa->potensi;
        $this->jumlah_penduduk = $this->desa->jumlah_penduduk;;
        $this->contact = $this->desa->contact;
        $this->longitude = $this->desa->longitude;
        $this->latitude = $this->desa->latitude;
        $this->kecamatan_id = $this->desa->kecamatan_id;
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
            "potensi" => "required",
            "jumlah_penduduk" => "required|numeric|min:100",
            "contact" => "required|regex:/^0\d{9,11}$/",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
            "kecamatan_id" => "required|exists:kecamatans,id",
        ]);
    }

    public function updateVillage()
    {
        $validated = $this->validate([
            "nama" => "required",
            "alamat" => "required",
            "potensi" => "required",
            "jumlah_penduduk" => "required|numeric|min:100",
            "contact" => "required|regex:/^0\d{9,11}$/",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
            "kecamatan_id" => "required|exists:kecamatans,id",
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
    }
}
