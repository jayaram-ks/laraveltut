<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $orders= array(['name'=>"Apple",'cust_id'=>'1'],['name'=>"Orange",'cust_id'=>'2'],['name'=>"Jackfruit",'cust_id'=>'1'],['name'=>"Pineapple",'cust_id'=>'2']);
       DB::table('orders')->insert($orders);
    }
}
