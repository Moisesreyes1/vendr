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
            'vendor_id' => 1,
            'user_id' => 2,
            'status' => 'on time'
        ]);
    }
}
