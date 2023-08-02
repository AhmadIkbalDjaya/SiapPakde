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

    public $desa_id;
    public $nama, $alamat, $potensi, $longitude, $latitude;

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
            "potensi" => "required",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
        ]);
    }

    public function storeVillage()
    {
        $validated = $this->validate([
            "nama" => "required",
            "alamat" => "required",
            "potensi" => "required",
            "longitude" => "nullable|numeric|between:-180,180",
            "latitude" => "nullable|numeric|between:-90,90",
        ]);
        
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
        $this->longitude = null;
        $this->latitude = null;
    }

    public function setDesaId(Desa $desa) {
        $this->desa_id = $desa->id;
        $this->nama = $desa->nama;
    }

    public function destroyDesa(Desa $desa) {
        $desa->delete();
        session()->flash('danger', "Desa Berhasil Dihapus");
        $this->resetFields();
        $this->dispatchBrowserEvent("close-modal");
    }
}
