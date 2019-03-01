<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        Category::create([
          'id' => 1,
          'name' => 'Celulares'
        ]);
        Category::create([
          'id' => 2,
          'name' => 'TV'
        ]);
        Category::create([
          'id' => 3,
          'name' => 'Audio'
        ]);
        Category::create([
          'id' => 4,
          'name' => 'Video'
        ]);
        Category::create([
          'id' => 5,
          'name' => 'Computacion'
        ]);
        Category::create([
          'id' => 6,
          'name' => 'Video Juegos'
        ]);
        Category::create([
          'id' => 7,
          'name' => 'Hogar'
        ]);
        Category::create([
          'id' => 8,
          'name' => 'Electrodomesticos'
        ]);
    }
}
