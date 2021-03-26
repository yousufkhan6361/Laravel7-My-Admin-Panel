<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        //$staticProfileImages = User::staticProfileImages();

        $faker = Faker::create();
        foreach (range(1,20) as $index) {

        DB::table('categories')->insert([

            'category_name'  => 'Category 1',
            'category_status'      => 1,
        ]);
        
      }
        
    }
}
