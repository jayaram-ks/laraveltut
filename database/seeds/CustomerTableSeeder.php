<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers=array(['name'=>"Jayaram"],['name'=>"Rajaram"]);
        DB::table('customers')->insert($customers);
    }
}
