<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourtReservation;

class CourtReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourtReservation::factory(5)->create();
    }
}
