<?php

use Illuminate\Database\Seeder;

class customerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customers\Models\Customer::create([
            'name' => 'mido'
        ]);
    }
}
