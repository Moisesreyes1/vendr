<?php

use Illuminate\Database\Seeder;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            'vendor_id' => 9,
            'user_id' => 11,
            'status' => 'cancelled'
        ]);
    }
}
