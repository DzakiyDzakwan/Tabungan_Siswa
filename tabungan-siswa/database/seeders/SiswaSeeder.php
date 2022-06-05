<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::Create([
            'NIS'=>'211402001',
            'nama'=>'Rembo Kucek',
            'kelas'=>'5',
            'user' => 3
        ]);

        Siswa::Create([
            'NIS'=>'211402002',
            'nama'=>'Ismail Mail',
            'kelas'=>'5',
            'user' => 4
        ]);
    }
}
