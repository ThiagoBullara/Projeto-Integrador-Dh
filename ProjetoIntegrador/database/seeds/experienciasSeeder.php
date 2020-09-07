<?php

use Illuminate\Database\Seeder;
use App\experienciaModel;

class experienciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiencia = new experienciaModel();
        $experiencia ->nomeExperiencia = 'Curso de Whisky artesanal';
        $experiencia ->precoExperiencia = '120';
        $experiencia ->quantidadePessoasExperiencia = '5';
        $experiencia ->descricaoExperiencia = 'Curso de Sommelier Aprendiz em Whisky com certificado e degustação!';
        $experiencia ->sobreExperiencia = 'Uma aula de 3 horas sobre a história do Whisky, como fazer um whisky artesanal de qualidade do começo ao fim, e no final uma degustação do Whisky produzido por toda a classe. Você não precisa trazer nada, temos todos os ingredientes aqui mesmo, todas as máquinas e equipamento necessário para fazer o melhor Whisky artesanal que você já provou. Ao final do curso você irá receber um certificado de Sommelier Aprendiz em Whisky com reconhecimento internacional, além de poder levar para casa uma garrafa de 500ml do Whisky que você mesmo produziu! Essa é uma experiência única e inesquecível que você só encontra aqui no BuyHood!';
        $experiencia ->funcionamento = 'De Segunda à Sexta, das 17:00 às 23:00';
        $experiencia ->sobreRestaurante = 'O Rei dos Whiskys & Vinhos é uma empresa focada em atendimento com qualidade e eficácia aos nossos clientes.

        Desde 1998 no mercado de bebidas importadas, sempre procurou oferecer produtos com total idoneidade de procedência e absoluta qualidade aos seus clientes, que hoje é marca registrada em nossas unidades de atendimento.
        
        Hoje com quatro endereços na cidade de São Paulo, além do relacionamento com todos seus usuários finais, também oferece um serviço exclusivo para eventos, festas e casamentos, como restaurantes, hoteis, etc.
        
        Nossa loja virtual irá manter a mesma filosofia de atendimento procurando orientar e oferecer produtos de qualidade e com garantia de procedência.
        
        Mas se desejar conhecer umas de nossas lojas, terá a sua disposição profissionais qualificados e treinados e lhe orientar no que for necessário na escolha certa para a sua festa.
        
        Use nossa experiência de muitos anos para adquirir as quantidades adequadas das bebidas em relação ao número e tipo de convidados.
        
        Temos condições de indicar as quantidades adequadas ao horário, tipo de evento, estação do ano, com garçom ou self-service, etc.
        
        Trabalhamos com Cestas para voce presentear com muito estilo e produtos de excelente qualidade.';

        $experiencia ->fotoExperiencia1 = 'fotoExperiencia1-1.jpg';

        $experiencia ->fotoExperiencia2 = 'fotoExperiencia1-2.jpg';

        $experiencia ->fotoExperiencia3 = 'fotoExperiencia1-3.jpg';

        $experiencia ->logoRestaurante = 'fotoLogo1.jpg';
        
        $experiencia ->tag1 = 'Artesanal';
        $experiencia ->tag2 = 'Bebidas Alcoólicas';
        $experiencia ->tag3 = 'Gastronômia Gourmet';
        $experiencia ->tag4 = 'Curso com certificação';
        
        $experiencia ->save();
    }
}

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '6';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia2-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia2-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia2-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo2.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '10';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia3-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia3-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia3-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo3.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '4';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia4-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia4-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia4-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo4.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '8';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia5-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia5-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia5-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo5.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '7';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia6-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia6-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia6-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo6.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '9';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia7-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia7-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia7-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo7.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '4';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia8-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia8-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia8-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo8.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '6';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia9-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia9-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia9-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo9.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '3';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia10-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia10-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia10-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo10.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '2';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia11-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia11-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia11-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo11.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '7';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia12-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia12-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia12-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo12.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '8';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia13-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia13-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia13-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo13.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '9';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia14-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia14-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia14-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo14.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '1';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia15-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia15-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia15-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo15.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '2';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia16-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia16-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia16-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo16.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '3';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia17-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia17-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia17-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo17.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '2';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia18-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia18-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia18-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo18.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '1';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia19-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia19-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia19-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo19.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();

//         $experiencia = new experienciaModel();
//         $experiencia ->nomeExperiencia = '';
//         $experiencia ->precoExperiencia = '';
//         $experiencia ->quantidadePessoasExperiencia = '4';
//         $experiencia ->descricaoExperiencia = '';
//         $experiencia ->sobreExperiencia = '';
//         $experiencia ->funcionamento = '';
//         $experiencia ->sobreRestaurante = '';

//         $experiencia ->fotoExperiencia1 = 'fotoExperiencia20-1.jpg';

//         $experiencia ->fotoExperiencia2 = 'fotoExperiencia20-2.jpg';

//         $experiencia ->fotoExperiencia3 = 'fotoExperiencia20-3.jpg';

//         $experiencia ->logoRestaurante = 'fotoLogo20.jpg';
        
//         $experiencia ->tag1 = '';
//         $experiencia ->tag2 = '';
//         $experiencia ->tag3 = '';
//         $experiencia ->tag4 = '';
        
//         $experiencia ->save();
        
//     }
// }
