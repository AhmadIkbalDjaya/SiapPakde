<?php

namespace App\Http\Livewire\Admin\Desa\Kelembagaan;

use App\Models\Bpd;
use App\Models\BpdMember;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class BpdTab extends Component
{
    use WithFileUploads;
    
    public $desa;
    public $sk_periode, $show_sk_periode;
    public $bpd_member_id, $nama, $jabatan, $keterwakilan_dusun;
    public $bpd_member_edit_id;
    
    public function render()
    {
        $this->show_sk_periode = Bpd::where('desa_id', $this->desa->id)->pluck('sk_periode')->first();
        $bpd = Bpd::where('desa_id', $this->desa->id)->first();
        return view('livewire.admin.desa.kelembagaan.bpd-tab', [
            "bpd" => $bpd,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "nama" => "required",
            "jabatan" => "required",
            "keterwakilan_dusun" => "required",
            "sk_periode" => "required|mimes:pdf",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
            "keterwakilan_dusun" => "required",
        ]);
        $validated["bpd_id"] = $this->desa->bpd->id;
        BpdMember::create($validated);
        session()->flash('success', "Bpd Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(BpdMember $bpdMember)
    {
        $validated = $this->validate([
            "nama" => "required",
            "jabatan" => "required",
            "keterwakilan_dusun" => "required",
        ]);
        $bpdMember->update($validated);
        session()->flash('success', "Bpd Berhasil Diupdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(BpdMember $bpdMember)
    {
        $bpdMember->delete();
        session()->flash('danger', "Bumdes Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function updateSk() {
        $validated = $this->validate([
            "sk_periode" => "required|mimes:pdf",
        ]);
        $validated["sk_periode"] = $this->sk_periode->store('/sk_periode');
        $bpd = Bpd::where('desa_id', $this->desa->id)->first();
        $bpd->update($validated);
        $this->sk_periode = null;
    }

    public function destroySk() {
        Storage::delete($this->desa->bpd->sk_periode);
        $bpd = Bpd::where('desa_id', $this->desa->id)->first();
        $bpd->update(["sk_periode" => null]);
    }

    public function resetField()
    {
        $this->bpd_member_id = null;
        $this->nama = null;
        $this->jabatan = null;
        $this->keterwakilan_dusun = null;
        $this->bpd_member_edit_id = null;
    }

    public function setField(BpdMember $bpdMember)
    {
        $this->bpd_member_id = $bpdMember->id;
        $this->nama = $bpdMember->nama;
        $this->jabatan = $bpdMember->jabatan;
        $this->keterwakilan_dusun = $bpdMember->keterwakilan_dusun;
        $this->bpd_member_edit_id = $bpdMember->id;
    }
}
