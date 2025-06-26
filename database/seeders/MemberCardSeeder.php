<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\membercard;

class MemberCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        membercard::factory(500)->create();
    }
}
