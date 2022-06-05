<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::Create([
            'pekerjaan'=>'Administrator',
            'nama'=>'Zukarnain',
            'status'=>'active',
            'user' => 1
        ]);

        Admin::Create([
            'pekerjaan'=>'Wali Kelas',
            'nama'=>'Aisyah',
            'status'=>'active',
            'user' => 2
        ]);
    }
}
