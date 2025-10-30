<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios=[
            ['nome'=>'italo', 'sobrenome'=>'santos', 'email'=>'italokaton17@gmail.com', 'tipo'=>'cliente', 'created_at'=>now(), 'updated_at'=>now() ]
        ];
        foreach($usuarios as $u){
            Usuario::factory()->create($u);
        }
    }
}
