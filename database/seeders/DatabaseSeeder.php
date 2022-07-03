<?php

namespace Database\Seeders;

use App\Models\Capitulo;
use App\Models\Colegiado;
use App\Models\Concepto;
use App\Models\ConceptoPago;
use App\Models\Forma_pago;
use App\Models\Pago;
use App\Models\Persona;
use App\Models\Requisito;
use App\Models\Sede;
use App\Models\Tipo_tramite;
use Illuminate\Database\Seeder;

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
        $this->call(UserSeeder::class);
        Concepto::factory(2)->create();
        Capitulo::factory(2)->create();
        Colegiado::factory(10)->create();
        Requisito::factory(10)->create();
        Tipo_tramite::factory(5)->create();
        Sede::factory(8)->create();
        Forma_pago::factory(4)->create();
        Persona::factory(10)->create();
        Pago::factory(10)->create();
        ConceptoPago::factory(20)->create();
    }
}
