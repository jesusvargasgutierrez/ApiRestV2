<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\court;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        court::factory(20)->create();
    }
}
