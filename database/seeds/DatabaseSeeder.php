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

        factory(App\Hall::class, 5)->create();
        factory(App\Seat::class, 100)->create();
        // factory(App\Movie::class, 10)->create();

        
        factory(App\User::class)->create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => "password",

            ]);
            
        factory(App\User::class)->create([
            "name" => "zawye",
            "email" => "zawye@gmail.com",
            "password" => "password",

            ]);

    }
}
