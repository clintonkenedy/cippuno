<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forma_pago;

class Forma_pagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forma_pago::create(['nombre' => 'EFECTIVO']);
        Forma_pago::create(['nombre' => 'TARJETA']);
        Forma_pago::create(['nombre' => 'TRANSFERENCIA']);
    }
}
