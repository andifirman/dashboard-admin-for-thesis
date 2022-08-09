<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(App\Visitor::class, 25)->create();
      \App\Models\Student::factory(25)->create();
    }
}
