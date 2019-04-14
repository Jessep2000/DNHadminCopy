<?php

use Illuminate\Database\Seeder;

class memberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\members::class, 50)->create();
    }
}
