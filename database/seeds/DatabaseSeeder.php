<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            booking::class,
            movie::class,
            seat::class,
            hall::class,
            show::class,
            
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
