<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        schedule::factory(20)->create();
    }
}
