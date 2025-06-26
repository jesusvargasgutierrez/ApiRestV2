<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rankings;

class RankingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rankings::factory(20)->create();
    }
}
