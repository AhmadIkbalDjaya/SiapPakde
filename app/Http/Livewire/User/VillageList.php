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
        if ($this->directTo == "kawasan") {
            $desa = Desa::where('nama','like', "%$this->search%")
                    ->has('kawasan')
                    ->get();
        } else {
            $desa = Desa::where('nama','like', "%$this->search%")->get();
        }
        
        return view('livewire.user.village-list', [
            "desas" => $desa,
        ]);
    }

}
