<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TravelerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Traveler::factory(50)->create();

    }
}
