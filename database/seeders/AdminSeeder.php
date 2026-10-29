<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $akun = [
            ['Admin', 'admin@toko-online.com', 'admin12345', 'admin'],
            ['Staff', 'staff@toko-online.com', 'staff12345', 'staff'],
        ];

        foreach ($akun as [$nama, $email, $password, $role]) {
            $user = User::firstOrNew(['email' => $email]);
            $user->name = $nama;
            $user->password = Hash::make($password);
            $user->role = $role;
            $user->save();
        }
    }
}