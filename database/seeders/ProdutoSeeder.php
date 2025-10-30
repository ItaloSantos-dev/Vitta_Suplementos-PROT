<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos=[
            //WHEY growth
            ['categoria_id'=>1,
                'marca_id'=>1,
                'nome'=>'WHEY PROTEIN GROWTH. PROTEÍNA DO SORO DO LEITE PURA',
                'preco'=>124.9,
                'imagem'=>'https://www.gsuplementos.com.br/upload/produto/imagem/top-whey-protein-concentrado-1kg-growth-supplements-3.jpg',
                'especificacoes'=>'1KG',
                'estoque'=>5 
            ],
            //WHEY Max
            ['categoria_id'=>2,
                'marca_id'=>2,
                'nome'=>'Whey Protein Isolado IsoWhey',
                'preco'=>285,
                'imagem'=>'https://lojamaxtitanium.vtexassets.com/arquivos/ids/157494-1366-0/iso-whey-max-titanium-900g-baunilha-1.jpg?v=638348680509400000',
                'especificacoes'=>'900G',
                'estoque'=>7 
            ],
            //Hiper da integral
            [
                'categoria_id' => 2,
                'marca_id' => 3,
                'nome' => 'Creamass Hipercalorico com Creatina',
                'preco' => '110.58',
                'imagem' => 'https://integralmedica.vtexassets.com/arquivos/ids/166409-1600-auto?v=638458468541030000&width=1600&height=auto&aspect=true',
                'especificacoes' => '3KG',
                'estoque' => 10
            ],
            //hiper da growth
            [
                'categoria_id' => 2,
                'marca_id' => 1,
                'nome' => 'HIPER MASS SABOR CHOCOLATE',
                'preco' => '39.9',
                'imagem' => 'https://www.gsuplementos.com.br/upload/produto/imagem/m_hiper-mass-1kg-sabor-chocolate-growth-supplements.webp',
                'especificacoes' => '1KG',
                'estoque' => 14
            ],
            //Creatina growth
            [
                'categoria_id' => 3,
                'marca_id' => 1,
                'nome' => 'Creatina Monohidratada',
                'preco' => 64.9,
                'imagem' => 'https://www.gsuplementos.com.br/upload/produto/imagem/m_creatina-monohidratada-250g-growth-supplements.webp',
                'especificacoes' => '250G',
                'estoque' => 1
            ],
            //creatina probiotica
            [
                'categoria_id' => 3,
                'marca_id' => 4,
                'nome' => 'Creatina monohidratada probiótica',
                'preco' => '75.10',
                'imagem' => 'https://supleylab.vtexassets.com/arquivos/ids/158617-1920-0/PROB-CREATINA-300g.jpg.jpg?v=638803477314730000',
                'especificacoes' => '300G',
                'estoque' => 12
            ],
            [
                'categoria_id' => 3,
                'marca_id' => 2,
                'nome' => 'Creatina Max',
                'preco' => 72.85,
                'imagem' => 'https://lojamaxtitanium.vtexassets.com/arquivos/ids/157717-600-0/creatine-max-titanium-300g-1.jpg?v=638715246475830000',
                'especificacoes' => '300G',
                'estoque' => '10'
            ]


        ];
        foreach($produtos as $p){
            Produto::factory()->create($p);
        }
    }
}
