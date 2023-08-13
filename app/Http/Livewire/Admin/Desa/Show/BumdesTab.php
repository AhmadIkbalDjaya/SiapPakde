<?php

namespace App\Http\Livewire\Admin\Desa\Show;

use App\Models\Bumdes;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class BumdesTab extends Component
{
    use WithFileUploads;

    public $desa;
    public $bumdes_id, $nama, $direktur, $sertifikasi, $jumlah_pegawai, $unit_usaha, $file_sertifikat, $phone;
    public $bumdes_edit_id;

    public function render()
    {
        $data = Bumdes::where('desa_id', $this->desa->id)->latest()->get();
        return view('livewire.admin.desa.show.bumdes-tab', [
            "bumdeses" => $data,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required|string",
            "direktur" => "required|string",
            "sertifikasi" => "required|boolean",
            "jumlah_pegawai" => "required|numeric",
            "unit_usaha" => "required|string",
            "file_sertifikat" => ($this->sertifikasi ? "required|mimes:pdf" : ""),
            "phone" => "required|regex:/^0\d{9,11}$/",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "direktur" => "required|string",
            "sertifikasi" => "required|boolean",
            "jumlah_pegawai" => "required|numeric",
            "unit_usaha" => "required|string",
            "file_sertifikat" => ($this->sertifikasi ? "required|mimes:pdf" : ""),
            "phone" => "required|regex:/^0\d{9,11}$/",
        ]);
        if ($this->sertifikasi) {
            $validated["file_sertifikat"] = $this->file_sertifikat->store("/bumdes/sertifikat");
        } elseif (!$this->sertifikasi) {
            unset($validated['sertifikasi']);
        }
        $validated['desa_id'] = $this->desa->id;
        Bumdes::create($validated);
        session()->flash('success', "Bumdes Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(Bumdes $bumdes)
    {
        $validated = $this->validate([
            "nama" => "required|string",
            "direktur" => "required|string",
            "sertifikasi" => "required|boolean",
            "jumlah_pegawai" => "required|numeric",
            "unit_usaha" => "required|string",
            "file_sertifikat" => ($this->sertifikasi && $bumdes->file_sertifikat == null ? "required|mimes:pdf" : ""),
            "phone" => "required|regex:/^0\d{9,11}$/",
        ]);
        if ($this->sertifikasi) {
            if ($this->file_sertifikat) {
                if ($bumdes->file_sertifikat) {
                    Storage::delete($bumdes->file_sertifikat);
                }
                $validated["file_sertifikat"] = $this->file_sertifikat->store("/bumdes/sertifikat");
            } else {
                unset($validated['file_sertifikat']);
            }
        } elseif (!$this->sertifikasi) {
            if ($bumdes->file_sertifikat) {
                Storage::delete($bumdes->file_sertifikat);
            }
            unset($validated['file_sertifikat']);
        }
        $bumdes->update($validated);
        session()->flash('success', "Bumdes Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(Bumdes $bumdes)
    {
        $bumdes->delete();
        session()->flash('danger', "Bumdes Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->bumdes_id = null;
        $this->nama = null;
        $this->direktur = null;
        $this->sertifikasi = null;
        $this->jumlah_pegawai = null;
        $this->unit_usaha = null;
        $this->bumdes_edit_id = null;
        $this->file_sertifikat = null;
        $this->phone = null;
    }

    public function setField(Bumdes $bumdes)
    {
        $this->bumdes_id = $bumdes->id;
        $this->nama = $bumdes->nama;
        $this->direktur = $bumdes->direktur;
        $this->sertifikasi = $bumdes->sertifikasi;
        $this->jumlah_pegawai = $bumdes->jumlah_pegawai;
        $this->unit_usaha = $bumdes->unit_usaha;
        $this->bumdes_edit_id = $bumdes->id;
        $this->phone = $bumdes->phone;
    }
}
