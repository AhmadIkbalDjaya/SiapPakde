<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\StatusDesa;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProfileTab extends Component
{
    use WithFileUploads;
    public $desa;
    public $kecamatans;
    public $status_desas;
    public $nama, $alamat, $potensi, $jumlah_penduduk, $contact, $longitude, $latitude, $kecamatan_id, $status_desa_id;

    public function mount()
    {
        $this->kecamatans = Kecamatan::orderBy('nama', 'asc')->get();
        $this->status_desas = StatusDesa::all();
        $this->nama = $this->desa->nama;
        $this->alamat = $this->desa->alamat;
        $this->potensi = $this->desa->potensi;
        $this->status_desa_id = $this->desa->status_desa_id;
        $this->jumlah_penduduk = $this->desa->jumlah_penduduk;
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
        $rules = [
            "nama" => "required",
            "alamat" => "required",
            "potensi" => "required",
            "status_desa_id" => "required|exists:status_desas,id",
            "jumlah_penduduk" => "required|numeric|min:100",
            "contact" => "required|regex:/^0\d{9,11}$/",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
        ];
        if (auth()->user()->role == 0) {
            $rules["kecamatan_id"] = "required|exists:kecamatans,id";
        }
        $this->validateOnly($fields, $rules);
    }

    public function updateVillage()
    {
        $rules = [
            "nama" => "required",
            "alamat" => "required",
            "potensi" => "required",
            "status_desa_id" => "required|exists:status_desas,id",
            "jumlah_penduduk" => "required|numeric|min:100",
            "contact" => "required|regex:/^0\d{9,11}$/",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
            "kecamatan_id" => "required|exists:kecamatans,id",
        ];
        if (auth()->user()->role == 0) {
            $rules["kecamatan_id"] = "required|exists:kecamatans,id";
        }
        $validated = $this->validate($rules);

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
