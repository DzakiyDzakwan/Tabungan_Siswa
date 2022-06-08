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
        $idkategori = "1";
        for($i = 0; $i <= 30; $i++) {
        switch ($i%3) {
            case 0 :
                $idkategori = "1";
                break;
            case 1 :
                $idkategori = "2";
                break;
            default :
                $idkategori = "3";
        }
            $date = date('Y-m-d H:i:s');
            $posts[] = [
                'judul' => $faker->sentence(rand(10, 15)),
                'image' => $faker->imageUrl(480, 360, 'animals', true, 'cats', true, 'jpg'),
                'isi' => $faker->paragraph($nb=50, $asText=false),
                'author' => 1,
                'category' => 'C00'.$idkategori,
                'created_at' => $date,
                'updated_at' => $date,
            ];
        }
        \DB::table('beritas')->insert($posts);
    } 
}
