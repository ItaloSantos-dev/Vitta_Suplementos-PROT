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
                'descricao'=>'Whey protein Growth fornece proteínas para quem deseja hipertrofia e definição muscular, e ele é totalmente sem blends ou adição de outras proteínas. Ideal porque é um suplemento de alto valor biológico com grande concentração de proteínas e aminoácidos essenciais é também rico em Glutamina, BCAA (incluindo Leucina).',
                'especificacoes'=>'1KG',
                'estoque'=>5 
            ],
            //WHEY Max
            ['categoria_id'=>2,
                'marca_id'=>2,
                'nome'=>'Whey Protein Isolado IsoWhey',
                'preco'=>285,
                'imagem'=>'https://lojamaxtitanium.vtexassets.com/arquivos/ids/157494-1366-0/iso-whey-max-titanium-900g-baunilha-1.jpg?v=638348680509400000',
                'descricao'=> 'O ISO WHEY da Max Titanium contém 100% de WHEY PROTEIN ISOLADO, isso significa que o produto possui elevada concentração proteica.Desenvolvido com matéria-prima de tecnologia específica, que proporciona excelente digestibilidade e máxima absorção, o ISO WHEY tem baixíssima quantidade de carboidratos por porção.',
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
                'descricao'=> 'Creamass Hipercaloric Integralmedica é um suplemento projetado para promover ganho de massa muscular por meio de treinos constantes e um aporte calórico balanceado. Ele combina carboidratos de energia rápida (maltodextrina) e de liberação gradual (waxy maize) para fornecer energia de forma eficiente.',
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
                'descricao'=> 'Os suplementos hipercalóricos são amplamente utilizados pelas pessoas que estão em busca da hipertrofia: o ganho de massa muscular. O consumo destes produtos está associado ao aumento da oferta de energia que pode resultar em melhora da capacidade física, garantindo que os treinos e os exercícios desempenhados tenham um reflexo ainda mais importante no corpo.',
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
                'descricao'=>'Quimicamente, a creatina monohidratada é chamada de amina, um composto derivado de aminoácidos que pode ser obtido por meio da dieta (alimentos), da síntese feita por nosso próprio organismo ou da suplementação. A creatina suplemento garante uma quantidade excelente desse nutriente no seu dia a dia. Isso faz com que o seu corpo tenha todas as necessidades supridas, com toda a energia para crescer e não perder a massa muscular conquistada nos treinos.',
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
                'descricao'=>'A Creatina 300g da Probiótica é a escolha perfeita para quem busca experimentar os benefícios da creatina em um formato compacto e prático. Composta por creatina monohidratada de alta pureza, este suplemento fornece uma dose eficaz de 3.000mg por porção, ajudando a melhorar o desempenho atlético, aumentar a força muscular e acelerar a recuperação pós-treino. Seu tamanho menor é ideal para quem deseja experimentar o produto ou busca uma opção fácil de transportar e armazenar.',
                'especificacoes' => '300G',
                'estoque' => 12
            ],
            [
                'categoria_id' => 3,
                'marca_id' => 2,
                'nome' => 'Creatina Max',
                'preco' => 72.85,
                'imagem' => 'https://lojamaxtitanium.vtexassets.com/arquivos/ids/157717-600-0/creatine-max-titanium-300g-1.jpg?v=638715246475830000',
                'descricao'=>'A creatina auxilia no aumento do desempenho físico durante exercícios repetidos de curta duração e alta intensidade. Formada a partir da associação de três aminoácidos de alto valor biológico (arginina, glicina e metionina), a creatina está presente naturalmente em nosso organismo, sendo que cerca de 95% do seu conteúdo é armazenado no músculo esquelético.',
                'especificacoes' => '300G',
                'estoque' => '10'
            ],
            [
                'categoria_id' => 4,
                'marca_id' => 1,
                'nome' => 'Coqueteleira Preta 600ml - Growth Supplements',
                'preco' => 9.90,
                'imagem' => 'https://www.gsuplementos.com.br/upload/produto/imagem/m_coqueteleira-preta-600ml-growth-supplements.webp',
                'descricao'=>'Coqueteleira de 600 ML feita com plástico livre de BPA (BPA FREE).',
                'especificacoes' => '600ML',
                'estoque' => '1'
            ],
            [
                'categoria_id' => 5,
                'marca_id' => 2,
                'nome' => 'Pré treino TDZ Force Gabriel Zancanelli 300g',
                'preco' => 142.41,
                'imagem' => 'https://lojamaxtitanium.vtexassets.com/arquivos/ids/158609-600-0/MAX-IMAGENS-LANCAMENTOS-TDZ.jpg.jpg?v=638804071627000000',
                'descricao'=>'TDZ FORCE Max Titanium – 300g | Sabor Purple Lemonade
                Potencialize seus treinos com TDZ FORCE, o suplemento pré-treino da Max Titanium, desenvolvido especialmente para atletas e praticantes de atividades físicas que buscam energia explosiva, foco máximo, força, resistência e performance de alto nível. Com uma fórmula avançada e sabor refrescante de Purple Lemonade, este pré-treino é ideal para quem deseja extrair o máximo do corpo e da mente nos treinos mais intensos.',
                'especificacoes' => '300G',
                'estoque' => '5'
            ],
            [
                'categoria_id' => 6,
                'marca_id' => 3,
                'nome' => 'Oxydrol (120 caps) Integralmedica',
                'preco' => 64.80,
                'imagem' => 'https://www.madrugaosuplementos.com.br/wp-content/uploads/2025/07/15314128803-166874-1600-auto.png',
                'descricao'=>'O termogênico Oxydrol é um suplemento feito para estimular a queima de gordura corporal de forma eficiente e definitiva, além de atuar como um intenso estimulante energético, capaz de favorecer o desempenho durante os treinos mais pesados.',
                'especificacoes' => '120 cápsulas',
                'estoque' => '5'
            ],
            [
                'categoria_id' => 7,
                'marca_id' => 1,
                'nome' => 'Multivitamínico (120 cáps)',
                'preco' => 47.90,
                'imagem' => 'https://www.gsuplementos.com.br/upload/produto/layout/107/produto-principal-v3.webp',
                'descricao'=>'Fonte de nutrientes indispensáveis para o organismo, o multivitamínico Growth Supplements não pode sair da sua mochila de treino. Com uma cápsula por dia, você garante uma dose de vitaminas e minerais, nutrientes importantes para o bom funcionamento do organismo. São 120 cápsulas para auxiliar na sua ingestão de nutrientes diariamente.',
                'especificacoes' => '120 cápsulas',
                'estoque' => '2'
            ]



        ];
        foreach($produtos as $p){
            Produto::factory()->create($p);
        }
    }
}
