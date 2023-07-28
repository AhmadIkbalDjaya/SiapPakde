<?php

namespace App\Http\Livewire\AdminDesa;

use App\Models\Desa;
use Livewire\Component;

class KelembagaanSection extends Component
{
    public $desa;

    public function mount() {
        $desa = Desa::where("id", auth()->user()->desa_id)->first();
        $this->desa = $desa;
    }
    public function render()
    {
        return view('livewire.admin-desa.kelembagaan-section');
    }
}
