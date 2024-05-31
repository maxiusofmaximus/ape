<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sale::factory(300)
                ->create();

        $sale = new Sale();

        $sale->marca = 'Yupi';
        $sale->nombre = 'Sabores';
        $sale->modelo = 'xt34';
        $sale->precio = 8;
        $sale->stock = 2;
        $sale->cantidad = 8;
        $sale->save();

        $sale = new Sale();

        $sale->marca = 'Yunpi';
        $sale->nombre = 'pringle';
        $sale->modelo = 'xt34';
        $sale->precio = 8;
        $sale->stock = 2;
        $sale->cantidad = 8;
        $sale->save();

    }
}
