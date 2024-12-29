<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat user baru dengan password terenkripsi menggunakan bcrypt
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'password' => Hash::make('adminadmin'), // Enkripsi password dengan bcrypt
        ]);
    }
}
