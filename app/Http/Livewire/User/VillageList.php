<?php

namespace App\Http\Livewire\User;

use App\Models\Desa;
use Livewire\Component;

class VillageList extends Component
{
    public $directTo;
    public $search = '';

    public function render()
    {
        return view('livewire.user.village-list', [
            "desas" => Desa::where('nama','like', "%$this->search%")->get(),
        ]);
    }

}
