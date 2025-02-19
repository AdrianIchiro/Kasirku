<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User as modelUser;

class User extends Component
{
    public $pilihanMenu = 'lihat';
    public $nama, $email, $role, $password;

    public function simpan()
    {
        $this->validate([
            'nama' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'role' => 'required',
            'password' => 'required'
        ]);

        $simpan = new modelUser();
        $simpan->name = $this->nama;
        $simpan->email = $this->email;
        $simpan->role = $this->role;
        $simpan->password = bcrypt($this->password);
        $simpan->save();

        $this->reset(['nama', 'email', 'role', 'password']);

        $this->pilihanMenu = 'lihat';
    }

    public function pilihMenu($menu)
    {
        $this->pilihanMenu = $menu;
    }

    public function render()
    {
        return view('livewire.user')->with([
            'semuaPengguna' => modelUser::all()
        ]);
    }
}
