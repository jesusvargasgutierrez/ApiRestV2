<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\eventphoto;

class EventPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        eventphoto::factory(20)->create();
    }
}
