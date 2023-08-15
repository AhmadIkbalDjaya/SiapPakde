<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kecamatan;
use App\Models\User;
use Livewire\Component;

class KecAdmin extends Component
{
    public $user_id, $username, $password, $kecamatan_id;
    public $user_edit_id;

    public function render()
    {
        $users = User::where('role', 1)->get();
        $kecamatans = Kecamatan::orderBy('nama', 'asc')->get();;
        return view('livewire.admin.kec-admin', [
            "users" => $users,
            "kecamatans" => $kecamatans,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "username" => "required|string",
            "password" => "nullable|min:8",
            "kecamatan_id" => "required|numeric|exists:kecamatans,id",
        ]);
    }

    public function store()
    {
        $validated = $this->validate([
            "username" => "required|string|unique:users,username",
            "password" => "required|min:8",
            "kecamatan_id" => "required|exists:kecamatans,id",
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
            "kecamatan_id" => "required|exists:kecamatans,id",
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
        $this->kecamatan_id = null;
    }

    public function setField(User $user)
    {
        $this->user_id = $user->id;
        $this->user_edit_id = $user->id;
        $this->username = $user->username;
        $this->password = null;
        $this->kecamatan_id = $user->kecamatan_id;
    }
}
