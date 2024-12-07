<?php

namespace Database\Seeders;

use App\Models\Tudo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TudoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tudo::create([
            'name' => 'salom',
            'text' => 'salomsalomsalomsalomsalomsalomsalom',
            'created_at' => null,
            'updated_at' => null,
        ]);
        Tudo::create([
            'name' => 'Azizbek',
            'text' => 'salomsalomsalomsalomsalomsalomsalom',
            'created_at' => null,
            'updated_at' => null,
        ]);
    }
}
