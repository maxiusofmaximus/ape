<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            SaleSeeder::class,
            ServiceSeeder::class,
        ]);

        User::factory(11)->create();
        // User::factory(10)->create();
//        $user = new User();
//
//        $user->name = 'James Mosquera';
//        $user->email = 'jamesmosquera@gmail.com';
//        $user->password = Hash::make('123456');
//        $user->save();
//
////        $user = new User();
////        $user->name = 'Nikolas Mosquera';
////        $user->email = 'nikolasmosquera@gmail.com';
////        $user->password = Hash::make('123456');
////        $user->save();
///


    }
}
