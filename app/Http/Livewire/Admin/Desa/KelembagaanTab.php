<?php

namespace App\Http\Livewire\Admin\Desa;

use Livewire\Component;

class KelembagaanTab extends Component
{
    public $desa;
    
    public function render()
    {
        return view('livewire.admin.desa.kelembagaan-tab');
    }
}
