<?php

namespace App\Http\Livewire\Admin\Desa\Kawasan;

use Livewire\Component;
use App\Models\DesaKawasan;
use Illuminate\Support\Str;

class DesaKawasanSection extends Component
{
    public $desa_id, $nama, $alamat;
    public $desa_edit_id;

    public function render()
    {
        $data = DesaKawasan::all();
        return view('livewire.admin.desa.kawasan.desa-kawasan-section', [
            "desas" => $data,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required",
            "alamat" => "required",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required",
            "alamat" => "required",
        ]);

        $slug = Str::slug($validated['nama']);
        $counter = 1;

        while (DesaKawasan::where('slug', $slug)->exists()) {
            $slug = Str::slug($validated['nama']) . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;
        DesaKawasan::create($validated);
        session()->flash('success', "Desa Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(DesaKawasan $desa_kawasan) {
        $validated = $this->validate([
            "nama" => "required",
            "alamat" => "required",
        ]);

        $desa_kawasan->update($validated);
        session()->flash('success', "Desa Berhasil Diedit");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(DesaKawasan $desa_kawasan) {
        $desa_kawasan->delete();
        session()->flash('danger', "Desa Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->desa_id = null;
        $this->desa_edit_id = null;
        $this->nama = null;
        $this->alamat = null;
    }

    public function setField(DesaKawasan $desa_kawasan) {
        $this->desa_id = $desa_kawasan->id;
        $this->desa_edit_id = $desa_kawasan->id;
        $this->nama = $desa_kawasan->nama;
        $this->alamat = $desa_kawasan->alamat;
    }
}
