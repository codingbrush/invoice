<?php

use Illuminate\Database\Seeder;
use App\{Customer,User};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(Customer::class,50)->create();
        factory(User::class,2)->create();
    }
}
