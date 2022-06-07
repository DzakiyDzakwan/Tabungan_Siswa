<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\Str;


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

        for($i = 0; $i < 25; $i++) {
            Siswa::create([
                'NIS'=>'21140200'.$i+5,
                'nama'=> Str::random(10),
                'kelas'=>rand(1,6),
                'user' => $i + 5
            ]);
        }
    }
}
