<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Monitoring::factory(50)->create();
    }
}
