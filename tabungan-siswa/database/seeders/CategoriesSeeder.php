<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::create([

            'category_id' => 'C001',
            'name' => 'Edukasi',

        ]);

        Category::create([
            
            'category_id' => 'C002',
            'name' => 'Finansial',

        ]);

        Category::create([
            
            'category_id' => 'C003',
            'name' => 'Sport',

        ]);

    }
}
