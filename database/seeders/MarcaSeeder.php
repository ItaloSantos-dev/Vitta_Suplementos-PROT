<?php

namespace Database\Seeders;

use App\Models\Marca;
use App\Models\Marcas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas=[
            ['nome'=>'Growth'],
            ['nome'=>'MaxTitanium'],
            ['nome'=>'IntegralMedica'],
            ['nome'=>'Probiótica']
        ];
        foreach($marcas as $m){
            Marca::factory()->create($m);
        }
    }
}
