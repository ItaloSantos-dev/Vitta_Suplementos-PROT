<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias=[
            ['nome'=>'Wheys'],
            ['nome'=>'Hipercalóricos'],
            ['nome'=>'Creatinas'],
        ];
        foreach($categorias as $c){
            Categoria::factory()->create($c);
        }
    }
}
