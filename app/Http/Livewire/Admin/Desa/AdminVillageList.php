<?php

namespace App\Http\Livewire\Admin\Desa;

use App\Models\Desa;
use App\Models\Kecamatan;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminVillageList extends Component
{
    use WithFileUploads;

    public $search = '';
    public $desa_id;
    public $nama, $alamat, $potensi, $jumlah_penduduk, $contact, $longitude, $latitude, $kecamatan_id;

    public function render()
    {
        if (auth()->user()->role == 0) {
            $desas = Desa::where('nama', 'like', "%$this->search%")->latest()->get();
        } elseif (auth()->user()->role == 1) {
            $desas = Desa::where('nama', 'like', "%$this->search%")
                ->latest()
                ->where("kecamatan_id", auth()->user()->kecamatan_id)
                ->get();
        }

        $kecamatans = Kecamatan::orderBy('nama', 'asc')->get();
        return view('livewire.admin.desa.admin-village-list', [
            "desas" => $desas,
            "kecamatans" => $kecamatans,
        ]);
    }

    public function updated($fields)
    {
        $rules = [
            "nama" => "required",
            "alamat" => "required",
            "potensi" => "required",
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

    public function storeVillage()
    {
        $rules = [
            "nama" => "required",
            "alamat" => "required",
            "potensi" => "required",
            "jumlah_penduduk" => "required|numeric|min:100",
            "contact" => "required|regex:/^0\d{9,11}$/",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
        ];
        if (auth()->user()->role == 0) {
            $rules["kecamatan_id"] = "required|exists:kecamatans,id";
        }
        $validated = $this->validate($rules);
        
        if (auth()->user()->role == 1) {
            $validated["kecamatan_id"] = auth()->user()->kecamatan_id;
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
        $this->desa_id = null;
        $this->nama = null;
        $this->alamat = null;
        $this->potensi = null;
        $this->jumlah_penduduk = null;
        $this->contact = null;
        $this->longitude = null;
        $this->latitude = null;
        $this->kecamatan_id = null;
    }

    public function setDesaId(Desa $desa)
    {
        $this->desa_id = $desa->id;
        $this->nama = $desa->nama;
    }

    public function destroyDesa(Desa $desa)
    {
        $desa->delete();
        session()->flash('danger', "Desa Berhasil Dihapus");
        $this->resetFields();
        $this->dispatchBrowserEvent("close-modal");
    }
}
