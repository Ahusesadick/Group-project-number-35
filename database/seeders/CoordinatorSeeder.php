<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coordinator;
use Illuminate\Sapport\Facades\Hash;

class CoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Coordinators::create([
            'name'=>'coordinator',
            'phone'=>'0742302557',
            'email'=>'coordinator@gmail.com',
            'password'=>Hash::make('123456'),
        ]);
    }
}
