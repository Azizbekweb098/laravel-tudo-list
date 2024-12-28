<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Azizbek',
            'email' => 'webcoderazizbek@gmail.com',
            'password' => Hash::make('Azizbek987'),
            'role' => 'admin',
        ]);
    }
}
