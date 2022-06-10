<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coordinator;
use Illuminate\Sapport\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $coordinator=Coordinator::create([
            'name'=>'coordinator',
            'phone'=>'0742302557',
            'email'=>'coordinator@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);

    }
}
