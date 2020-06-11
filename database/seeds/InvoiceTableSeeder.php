<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Invoice::truncate();

//        foreach(range(1,400) as $i)
//        {
//
//        }

    }
}
