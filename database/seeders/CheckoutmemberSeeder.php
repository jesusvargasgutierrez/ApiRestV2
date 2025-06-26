<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\checkoutmember;

class CheckoutmemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        checkoutmember::factory(500)->create();
    }
}
