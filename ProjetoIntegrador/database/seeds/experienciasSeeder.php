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

        $experiencia ->endereco = 'Av. Sabiá, 257 - Indianópolis, São Paulo - SP, 04515-001';

        $experiencia ->video = 'https://www.youtube.com/embed/IrM6BhIkkeE';

        $experiencia ->email_restaurante = 'reidoswhisky@email.com';

        $experiencia ->nomeRestaurante = 'Rei dos Whiskys';
        
        $experiencia ->save();

        $experiencia = new experienciaModel();
        $experiencia ->nomeExperiencia = 'Pesque e Coma';
        $experiencia ->precoExperiencia = '50';
        $experiencia ->quantidadePessoasExperiencia = '6';
        $experiencia ->descricaoExperiencia = 'Pesque peixes em um tanque de um área reservada e nós cozinhamos para você!';
        $experiencia ->sobreExperiencia = 'O conceito de Pesque e Pague já é algo conhecido e muito famoso na cultura brasileira, mas você já pensou em passar um tempo pescando, no coração de Moema, e então ter o seu peixe ser preparado pelos melhores chefs do Coco Bambu? Pois agora você tem essa opção, você e um grupo de amigos pode passar a tarde pescando e relaxando, e quando a fome bater, relaxe e aproveite uma cerveja gelada enquanto o peixe que você pescou é preparado com as melhores mãos da região';
        $experiencia ->funcionamento = 'Somente as Terças-Feiras, das 11h às 15h';
        $experiencia ->sobreRestaurante = 'Iniciamos no ano de 1989 em Fortaleza/CE com o Dom Pastel, primeiro restaurante fundado por Afranio e Daniela Barreira. Esta unidade foi inspiração para o crescimento da rede Coco Bambu, que desde então vem encantando e atraindo clientes nos mais diversos estados do Brasil.

 

        Considerado o maior e melhor restaurante do Brasil, com especialidade em frutos do mar, o Coco Bambu possui um amplo e variado cardápio, com comidas e bebidas deliciosamente diferenciadas, feitas com ingredientes frescos da mais alta qualidade. Os pratos são bem servidos e toda essa excelência é apresentada a preços acessíveis.
        
         
        
        Nossas unidades são amplas, possuem decoração rústica e elegante, oferecendo aos nossos clientes um ambiente sofisticado e aconchegante.
        
         
        
        Visite-nos e encante-se!';

        $experiencia ->fotoExperiencia1 = 'fotoExperiencia2-1.jpg';

        $experiencia ->fotoExperiencia2 = 'fotoExperiencia2-2.jpg';

        $experiencia ->fotoExperiencia3 = 'fotoExperiencia2-3.jpg';

        $experiencia ->logoRestaurante = 'fotoLogo2.jpg';
        
        $experiencia ->tag1 = 'Frutos do mar';
        $experiencia ->tag2 = 'Nacional';
        $experiencia ->tag3 = 'Gastronômia Renomada';
        $experiencia ->tag4 = 'Gastronômia Gourmet';

        $experiencia ->endereco = 'Av. Antônio Joaquim de Moura Andrade, 737 - Vila Nova Conceição, São Paulo - SP, 04507-000';

        $experiencia ->video = 'https://www.youtube.com/embed/uhYnLof1-vE';

        $experiencia ->email_restaurante = 'cocobambu@email.com';

        $experiencia ->nomeRestaurante = 'Coco Bambu';
        
        $experiencia ->save();

        $experiencia = new experienciaModel();
        $experiencia ->nomeExperiencia = 'Jantar temático Árabe com história';
        $experiencia ->precoExperiencia = '120';
        $experiencia ->quantidadePessoasExperiencia = '10';
        $experiencia ->descricaoExperiencia = 'Comida árabe não se resume a Esfihas e Kibes, descubra o verdadeiro sabor do Oriente Médio';
        $experiencia ->sobreExperiencia = 'O oriente médio é uma das areas mais antigas da humanindade, um lugar rico em histórias, cultura e costumes. Na parte gastronômica isso não poderia ser diferente, receitas milenares passadas de geração em geração, e com sabores exóticos e intrigantes. No Brasil, no entanto, ao pensar em culinária árabe, a primeira coisa que se vem a mente é Esfiha ou Kibe. Esse jantar, exclusivo da plataforma BuyHood veio para mudar essa visão, trazendo pratos tradicionais da cultura árabe junto com a história por traz da criação e cultivação desses pratos. Aprenda um pouco mais sobre esse povo cheio de histórias enquanto se delicia com um atendimento exclusivo e personalizado.';
        $experiencia ->funcionamento = 'De Segunda à Quinta das 18:00 às 23:00';
        $experiencia ->sobreRestaurante = 'A esquina da Rua Horácio Lafer, no Itaim, acomoda a primeira casa do árabe Manish. Pela fachada arquitetônica já é possível perceber que seu conceito de restaurante vai além da gastronomia, com uma experiência sensorial completa. Fazendo parte do lifestyle saudável, com ingredientes frescos, orgânicos e sem conservantes, o Manish é comandado pelo Grupo SAJ e apresenta as famosas receitas da linhagem gastronômica da família Abbud – porém com a sua releitura criativa e contemporânea.

        A casa mantém no menu os clássicos tão esperados, como: o Atum à Farabbud selados na grelha com molho de azeite e zaatar; o Kibe na brasa, receita tradicional árabe com um toque de coalhada fresca; o Camarão à Flamingo, que vem grelhado com abobrinha e pesto de salsa e cebolinha; Lombo de Cordeiro marinado com vinho branco e ervas; Filé de Pintado ao molho Tarator e nozes; Batata Libanesa, amassada à moda, com cebola dourada no azeite e zaatar; a Salada Manish com folhas, queijo de cabra, pistache e damasco ao molho de mel; esfihas abertas de carne com coalhada e esticadinha de Chancliche; além de Doces Semiramis e a Coalhada com calda de Frutas Vermelhas.
        
        O Delivery conta com enorme abrangência atendendo do Morumbi ao Itaim, para que todos possam receber o Manish no conforto de casa!
        
        Preparados com a essência homemade, todos os pratos do Manish ilustram a culinária árabe na íntegra e merecem destaque: desde as esfihas e kibes, até aos pratos mais elaborados.';

        $experiencia ->fotoExperiencia1 = 'fotoExperiencia3-1.jpg';

        $experiencia ->fotoExperiencia2 = 'fotoExperiencia3-2.jpg';

        $experiencia ->fotoExperiencia3 = 'fotoExperiencia3-3.jpg';

        $experiencia ->logoRestaurante = 'fotoLogo3.jpg';
        
        $experiencia ->tag1 = 'Culinária Árabe';
        $experiencia ->tag2 = 'Gastrônomia Exótica';
        $experiencia ->tag3 = 'Pratos Estrangeiros em Geral';
        $experiencia ->tag4 = 'Gastronômia Gourmet';

        $experiencia ->endereco = 'Av. Horácio Lafer, 491 - Itaim Bibi, São Paulo - SP, 04538-082';

        $experiencia ->video = 'https://www.youtube.com/embed/DYbP6f0hGdc';

        $experiencia ->email_restaurante = 'manish@email.com';

        $experiencia ->nomeRestaurante = 'Manish';
        
        $experiencia ->save();

        $experiencia = new experienciaModel();
        $experiencia ->nomeExperiencia = 'Almoço no Restaurante do Chef Fogaça, com música ao vivo por ele mesmo';
        $experiencia ->precoExperiencia = '300';
        $experiencia ->quantidadePessoasExperiencia = '4';
        $experiencia ->descricaoExperiencia = 'Música ao vivo cantada pelo próprio Chef Fogaça do MasterChef, que também é o Chef e dono do Restaurante';
        $experiencia ->sobreExperiencia = 'O Chef Fogaça ficou conhecido pelo país afora por suas aparições no programa de culinária MasterChef. No entanto, além de ser um astro das telinhas, Fogaça também tem sua rede de resturantes que atuam desde 2005, e muito mais do que isso, além de Chef ele também é vocalista da banda "Oitão". Nessa experiência você conta com a chance única de poder degustar um prato feito pelo renomado Chef e também conhecer seus belos acordes e vocais num jantar extraodinário.';
        $experiencia ->funcionamento = 'Somente aos Sábados, das 17:00 ás 20:00';
        $experiencia ->sobreRestaurante = 'O SAL Gastronomia conta hoje com três restaurantes e vem conquistando os paladares desde 2005. O cardápio inclui entradas deliciosas, pratos principais bem servidos e uma variedade irresistível de sobremesas. O bar também não fica para trás, com alguns drinks clássicos e outros sofisticados para acompanhar toda essa experiência gastronômica. Seja no almoço, jantar, happy hour ou eventos, estamos esperando por você! De segunda a sexta-feira possuímos um menu executivo especial, nele a experiência é completa e o preço acessível, não deixe de experimentar!';

        $experiencia ->fotoExperiencia1 = 'fotoExperiencia4-1.jpg';

        $experiencia ->fotoExperiencia2 = 'fotoExperiencia4-2.jpg';

        $experiencia ->fotoExperiencia3 = 'fotoExperiencia4-3.jpg';

        $experiencia ->logoRestaurante = 'fotoLogo4.jpg';
        
        $experiencia ->tag1 = 'Nacional';
        $experiencia ->tag2 = 'Gastronômia Gourmet';
        $experiencia ->tag3 = 'Gastronômia Renomada';
        $experiencia ->tag4 = 'Pratos Estrangeiros em Geral';

        $experiencia ->endereco = 'R. Minas Gerais, 352 - Higienópolis, São Paulo - SP, 01244-010';

        $experiencia ->video = 'https://www.youtube.com/embed/3Lm__DEs75w';

        $experiencia ->email_restaurante = 'osal@email.com';

        $experiencia ->nomeRestaurante = 'Osal';
        
        $experiencia ->save();

        $experiencia = new experienciaModel();
        $experiencia ->nomeExperiencia = 'Yakisoba de Escorpião e almoço exectuivo com insetos';
        $experiencia ->precoExperiencia = '120';
        $experiencia ->quantidadePessoasExperiencia = '8';
        $experiencia ->descricaoExperiencia = 'A parte mais exótica da culinária chinesa, você só encontra aqui no BuyHood';
        $experiencia ->sobreExperiencia = 'Todos nós já vimos ou ouvimos falar dos chineses e seus hábitos gastronômicos peculiares, espetinho de escorpião e até mesmo barata frita. Muitas pessoas tem nojo só de pensar que alguém possa estar comendo isso, mas na realidade, é um dos maiores atrativos para turistas na China, e agora, graças ao BuyHood, você pode experimentar essa maravilha culinária no centro de São Paulo!';
        $experiencia ->funcionamento = 'Seg - Dom 11:00-16:00 e 18:00 -22:00';
        $experiencia ->sobreRestaurante = 'Nas mesas grandes, a clientela compartilha pratos em porções generosas, que alimentam até três. Pode ser mifum (macarrão de arroz, o mesmo que bifum) com vieiras cozidas no vapor (R$ 78), frutos do mar na chapa com brócolis (R$ 65), ou ainda os tradicionais macarrão chop suey (R$ 40) e lombo agridoce (R$ 45).';

        $experiencia ->fotoExperiencia1 = 'fotoExperiencia5-1.jpeg';

        $experiencia ->fotoExperiencia2 = 'fotoExperiencia5-2.jpg';

        $experiencia ->fotoExperiencia3 = 'fotoExperiencia5-3.jpg';

        $experiencia ->logoRestaurante = 'fotoLogo5.jpg';
        
        $experiencia ->tag1 = 'Comida saudável e Fitness';
        $experiencia ->tag2 = 'Culinária Chinesa';
        $experiencia ->tag3 = 'Gastrônomia Exótica';
        $experiencia ->tag4 = 'Pratos Estrangeiros em Geral';

        $experiencia ->endereco = 'Praça Carlos Gomes, 200 - Liberdade, São Paulo - SP, 01501-040';

        $experiencia ->video = 'https://www.youtube.com/embed/thqL1IBDvo4';

        $experiencia ->email_restaurante = 'shifu@email.com';

        $experiencia ->nomeRestaurante = 'Shifu';
        
        $experiencia ->save();

        $experiencia = new experienciaModel();
        $experiencia ->nomeExperiencia = 'Construa uma miniatura da casa feita de doces do João e Maria';
        $experiencia ->precoExperiencia = '95';
        $experiencia ->quantidadePessoasExperiencia = '7';
        $experiencia ->descricaoExperiencia = 'Faça uma adorável casinha feita de biscoite e ganache igual a do João e Maria';
        $experiencia ->sobreExperiencia = 'Você não precisa saber cozinhar, assar, ou preparar nada, nesse pequeno curso, você vai aprender a como fazer um delicioso molde de biscoito de gengibre e ganache com pasta americana para decoração e enfeites da linda casinha. Você, além de aprender como preparar e estilizar uma sobremesa chique e saborosa, você irá poder levar seu projeto para casa, e comer com a sua família!';
        $experiencia ->funcionamento = 'Todos os dias das 8h às 14h';
        $experiencia ->sobreRestaurante = 'Há 11 anos, os moradores da rua Bela Cintra no Jardins surpreenderam-se com um lugar minúsculo: a Padaria Artesanal Orgânica.

        O sonho de fazer um pão artesanal, valorizar os pequenos produtores orgânicos e servir uma comida saudável tornou-se realidade. Rafael Rosa recebia seus clientes com a mão na massa, cheiro de pão quentinho e um sorriso no rosto. Com o passar dos anos, o sucesso deu espaço ao crescimento, e outros endereços surgiram. O conceito de simplicidade, verdade e autenticidade permanecem.';

        $experiencia ->fotoExperiencia1 = 'fotoExperiencia6-1.jpg';

        $experiencia ->fotoExperiencia2 = 'fotoExperiencia6-2.jpg';

        $experiencia ->fotoExperiencia3 = 'fotoExperiencia6-3.jpg';

        $experiencia ->logoRestaurante = 'fotoLogo6.jpg';
        
        $experiencia ->tag1 = 'Artesanal';
        $experiencia ->tag2 = 'Padaria e Assados';
        $experiencia ->tag3 = 'Confeitaria';
        $experiencia ->tag4 = 'Doces e Sobremesas';

        $experiencia ->endereco = 'R. Domingos Leme, 284 - Vila Nova Conceição, São Paulo - SP, 04510-040';

        $experiencia ->video = 'https://www.youtube.com/embed/GVIvYH4ZU6w';

        $experiencia ->email_restaurante = 'paopadarias@email.com';

        $experiencia ->nomeRestaurante = 'Pão Padarias';
        
        $experiencia ->save();

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

    }
}
