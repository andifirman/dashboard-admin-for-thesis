<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(App\Visitor::class, 20)->create();
      \App\Models\Product::factory(25)->create();
    }
}
