<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Yesenia Mosquera';
        $user->email = 'yeseniamosquera@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = 'Angel Mosquera';
        $user->email = 'angelmosquera@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

                $user = new User();

        $user->name = 'James Mosquera';
        $user->email = 'jamesmosquera@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = 'Nikolas Mosquera';
        $user->email = 'nikolasmosquera@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

    }
}
