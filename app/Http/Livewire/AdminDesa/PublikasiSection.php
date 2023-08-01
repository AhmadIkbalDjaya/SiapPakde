<?php

namespace App\Http\Livewire\AdminDesa;

use App\Models\Desa;
use App\Models\Publikasi;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PublikasiSection extends Component
{
    use WithFileUploads;
    public $desa;
    public $publikasi_id, $dokumen, $dokumen_show, $description;
    public $publikasi_edit_id;

    public function mount() {
        $desa = Desa::where('id', auth()->user()->desa_id)->first();
        $this->desa = $desa;
    }

    public function render()
    {
        $data = Publikasi::where("desa_id", $this->desa->id)->get();
        // dd($data);
        return view('livewire.admin-desa.publikasi-section', [
            "publikasis" => $data,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "dokumen" => "required|image",
            "description" => "nullable|string",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "dokumen" => "required|image",
            "description" => "nullable|string",
        ]);
        $validated['dokumen'] = $this->dokumen->store('/publikasi');
        $validated['desa_id'] = $this->desa->id;
        Publikasi::create($validated);
        session()->flash('success', "Publikasi Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(Publikasi $publikasi)
    {
        $validated = $this->validate([
            "dokumen" => "nullable|image",
            "description" => "nullable|string",
        ]);
        if ($this->dokumen) {
            Storage::delete($publikasi->dokumen);
            $validated['dokumen'] = $this->dokumen->store('/publikasi');
        } else {
            unset($validated['dokumen']);
        }
        $publikasi->update($validated);
        session()->flash('success', "Publikasi Berhasil Diedit");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(Publikasi $publikasi)
    {
        Storage::delete($publikasi->dokumen);
        $publikasi->delete();
        session()->flash('danger', "Publikasi Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->publikasi_id = null;
        $this->dokumen = null;
        $this->dokumen_show = null;
        $this->description = null;
    }

    public function setField(Publikasi $publikasi)
    {
        $this->publikasi_id = $publikasi->id;
        $this->publikasi_edit_id = $publikasi->id;
        $this->dokumen = null;
        $this->dokumen_show = $publikasi->dokumen;
        $this->description = $publikasi->description;
    }
}
