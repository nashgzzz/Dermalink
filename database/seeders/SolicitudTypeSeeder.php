<?php

namespace Database\Seeders;

use App\Models\SolicitudType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolicitudTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         #1
         SolicitudType::create([
            'name' => 'Consulta',
            'description' => 'solicitud'
        ]);

        #2
        SolicitudType::create([
            'name' => 'Control',
            'description' => 'solicitud'
        ]);

        #3
        SolicitudType::create([
            'name' => 'Repetir receta',
            'description' => 'solicitud'
        ]);

    }
}
