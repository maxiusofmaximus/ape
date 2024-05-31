<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = new Service();
        $service->marca = 'lorem ipsum';
        $service->modelo = 'lorem ipsum';
        $service->descripcion = 'lorem ipsum';
        $service->precio = 5;
        $service->save();

        $service = new Service();
        $service->marca = 'lorem ipsum';
        $service->modelo = 'lorem ipsum';
        $service->descripcion = 'lorem ipsum';
        $service->precio = 7;
        $service->save();

        $service = new Service();
        $service->marca = 'lorem ipsum';
        $service->modelo = 'lorem ipsum';
        $service->descripcion = 'lorem ipsum';
        $service->precio = 17;
        $service->save();

    }
}
