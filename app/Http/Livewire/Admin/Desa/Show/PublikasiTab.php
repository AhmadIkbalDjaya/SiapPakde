<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use App\Models\Publikasi;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PublikasiTab extends Component
{
    use WithFileUploads;
    public $desa;
    public $publikasi_id, $dokumentasi, $dokumentasi_show, $description;
    public $publikasi_edit_id;

    public function render()
    {
        $data = Publikasi::where("desa_id", $this->desa->id)->get();
        return view('livewire.admin.desa.show.publikasi-tab', [
            "publikasis" => $data,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "dokumentasi" => "required|image",
            "description" => "nullable|string",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "dokumentasi" => "required|image",
            "description" => "nullable|string",
        ]);
        $validated['dokumentasi'] = $this->dokumentasi->store('/publikasi');
        $validated['desa_id'] = $this->desa->id;
        Publikasi::create($validated);
        session()->flash('success', "Publikasi Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(Publikasi $publikasi)
    {
        $validated = $this->validate([
            "dokumentasi" => "nullable|image",
            "description" => "nullable|string",
        ]);
        if ($this->dokumentasi) {
            Storage::delete($publikasi->dokumentasi);
            $validated['dokumentasi'] = $this->dokumentasi->store('/publikasi');
        } else {
            unset($validated['dokumentasi']);
        }
        $publikasi->update($validated);
        session()->flash('success', "Publikasi Berhasil Diedit");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(Publikasi $publikasi)
    {
        Storage::delete($publikasi->dokumentasi);
        $publikasi->delete();
        session()->flash('danger', "Publikasi Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->publikasi_id = null;
        $this->dokumentasi = null;
        $this->dokumentasi_show = null;
        $this->description = null;
    }

    public function setField(Publikasi $publikasi)
    {
        $this->publikasi_id = $publikasi->id;
        $this->publikasi_edit_id = $publikasi->id;
        $this->dokumentasi = null;
        $this->dokumentasi_show = $publikasi->dokumentasi;
        $this->description = $publikasi->description;
    }
}
