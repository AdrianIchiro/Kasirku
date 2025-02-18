<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Dataawal extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Admin';
        $user->email = 'admin@kasirku.com';
        $user->password = bcrypt('admin#1234');
        $user->role = 'admin';
        $user->save();
    }
}
