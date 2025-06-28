<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassReservation;

class ClassReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassReservation::factory(5)->create();
    }
}
