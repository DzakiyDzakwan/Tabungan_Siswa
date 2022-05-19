<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Faker untuk Dummy Data
        $posts = [];
        $faker = Faker::create();

        for($i = 0; $i <= 20; $i++) {

            $date = date('Y-m-d H:i:s');
            $posts[] = [
                'judul' => $faker->sentence(rand(10, 15)),
                'image' => $faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
                'isi' => $faker->paragraph($nb=30, $asText=false),
                'author' => 1,
                'category' => 'A',
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }
        \DB::table('beritas')->insert($posts);
    } 
}
