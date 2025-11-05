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
            ['nome'=>'Growth', 'imagem'=>'https://vectorseek.com/wp-content/uploads/2024/01/Growth-Supplements-Logo-Vector.svg-.png'],
            ['nome'=>'MaxTitanium', 'imagem'=> 'https://whatthelogo.com/storage/logos/max-titanium-230605.png'],
            ['nome'=>'IntegralMedica', 'imagem'=>'https://tse4.mm.bing.net/th/id/OIP.TX_n_uqEdDNkLjhcm62Y3wHaHa?rs=1&pid=ImgDetMain&o=7&rm=3'],
            ['nome'=>'Probiótica', 'imagem'=>'https://tse2.mm.bing.net/th/id/OIP.7eMPf6i4w-VHJmWKEUSc1gAAAA?rs=1&pid=ImgDetMain&o=7&rm=3']
        ];
        foreach($marcas as $m){
            Marca::factory()->create($m);
        }
    }
}
