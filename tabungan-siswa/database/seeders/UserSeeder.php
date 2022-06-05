<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'email'=>'admin@gmail.com',
            'user_name'=>'admin',
            'role'=> 'admin',
            'password' =>  Hash::make('admin')
        ]);

        User::create([
            'email'=>'admin2@gmail.com',
            'user_name'=>'admin2',
            'role'=> 'admin',
            'password' =>  Hash::make('admin2')
        ]);

        User::create([
            'email'=>'siswa1@gmail.com',
            'user_name'=>'siswa1',
            'role'=> 'siswa',
            'password' =>  Hash::make('siswa1')
        ]);

        User::create([
            'email'=>'siswa2@gmail.com',
            'user_name'=>'siswa2',
            'role'=> 'siswa',
            'password' =>  Hash::make('siswa2')
        ]);

    }
}
