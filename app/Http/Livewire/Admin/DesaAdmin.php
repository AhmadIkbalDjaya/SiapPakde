<?php

namespace App\Http\Livewire\Admin;

use App\Models\Desa;
use App\Models\User;
use Livewire\Component;

class DesaAdmin extends Component
{
    public $user_id, $username, $password, $desa_id;
    public $user_edit_id;

    public function render()
    {
        if (auth()->user()->role == 1) {
            $users = User::where('role', 2)
                ->whereHas('desa', function ($query) {
                    $query->where('kecamatan_id', auth()->user()->kecamatan->id);
                })
                ->get();
            $desas = Desa::where("kecamatan_id", auth()->user()->kecamatan_id)->get();
        } else {
            $users = User::where('role', 2)->get();
            $desas = Desa::all();
        }
        return view('livewire.admin.desa-admin', [
            "users" => $users,
            "desas" => $desas,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "username" => "required|string",
            "password" => "nullable|min:8",
            "desa_id" => "required|numeric|exists:desas,id",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "username" => "required|string|unique:users,username",
            "password" => "required|min:8",
            "desa_id" => "required|exists:desas,id",
        ]);
        User::create($validated);
        session()->flash('success', "Admin Berhasil Ditambahkan");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function update(User $user)
    {
        $validated = $this->validate([
            "username" => "required|string|unique:users,username,$user->id",
            "password" => "nullable|min:8",
            "desa_id" => "required|exists:desas,id",
        ]);
        if ($this->password == null) {
            unset($validated['password']);
        }
        $user->update($validated);
        session()->flash('success', "Admin Berhasil DiUpdate");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('danger', "Admin Berhasil Dihapus");
        $this->resetField();
        $this->dispatchBrowserEvent("close-modal");
    }

    public function resetField()
    {
        $this->user_id = null;
        $this->user_edit_id = null;
        $this->username = null;
        $this->password = null;
        $this->desa_id = null;
    }

    public function setField(User $user)
    {
        $this->user_id = $user->id;
        $this->user_edit_id = $user->id;
        $this->username = $user->username;
        $this->password = null;
        $this->desa_id = $user->desa_id;
    }
}
