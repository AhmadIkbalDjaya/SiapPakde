<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $password, $password_confirmation;

    public function render()
    {
        return view('livewire.admin.change-password');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required|min:8",
        ]);
    }

    public function udpatePassword()
    {
        $validated = $this->validate([
            "password" => "required|min:8|confirmed",
            "password_confirmation" => "required|min:8",
        ]);
        $user = User::find(auth()->user()->id);
        $validated["password"] = Hash::make($validated["password"]);
        $user->update($validated);
        $this->password = null;
        $this->password_confirmation = null;
        session()->flash('success', "Password Berhasil Diubah");
    }
}
