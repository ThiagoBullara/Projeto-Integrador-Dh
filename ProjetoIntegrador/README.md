## Detalhes Técnicos do projeto BuyHood

Nosso projeto utilizou diversas ferramentas de desenvolvimento web, tais como:

- **Front End**
  - **HTML5** para estruturar a visualização das páginas
  - **CSS3** para estilizar a visualização das páginas
  - **Javascript** para adicionar elementos interativos as páginas
  - **Bootstrap** como framework de estilização e padronização de grids do projeto
 
 - **Back End**
   - **PHP 7.4.8** como linguagem de programação do projeto
   - **Laravel 5.4.22** como framework PHP para melhor aproveitamento e organização
   - **MySQL** como banco de dados para ser manipulado através de comandos e funcionalidades do site
   
- **Dentre os programas que utilizamos no desenvolvimento do projeto, temos:**  
  - **Visual Studio Code** para escrever todos as partes do projeto
  - **MySQL Workbench 8.0.21** para desenvolver e verificar a interação do projeto com o banco de dados
  - **XAMPP** usado algumas vezes como hosteador de servidor Apache e MySQL
  - **NPM** como gerenciador de dependências do JavaScript e JQUERY
  - **Composer v1.10.10** usado para gerenciar as dependências do Laravel
  - [**darryldecode/laravelshoppingcart**](https://github.com/darryldecode/laravelshoppingcart) como scaffolding para criação do sistema de carrinho
  
  ### Como visualizar nosso projeto da melhor maneira
  - Baixar zip do projeto pelo GitHub
  - Usar os seguinte comandos em sequência:
    - composer install
    - php artisan key:generate
    - npm install (assumindo que você tem Node.js instalado)
    - npm run dev (assumindo que você tem Node.js instalado)
    - composer require "darryldecode/cart"
    - baixar a pasta contendo todas as imagens, para ser inserido em public/storage/[aqui](https://mega.nz/folder/EF11lA5I#UNPmDA7gwtIKMRdAnk3CQQ)
    - php artisan migrate:fresh --seed (assumindo que você tem o arquivo .env configurado corretamente)
    - php artisan serve
    
 ## Motivação para criar o projeto
 
Esse projeto é parte do processo de conclusão do curso de Desenvolvimento Web FullStack da Digital House Coding School Brazil. Com o intuito de testar as práticas ensinadas durante o curso, o professor exige a criação de um projeto extenso, em grupo, onde os estudantes precisam criar um projeto a partir de uma ideia que eles mesmos precisam inventar e desenvolver toda a plataforma do site do zero respeitando alguns parâmetros(O site precisa ter pelo menos um CRUD, com uma área restrita a usuários logados, uma área restrita a apenas alguns usuários, algumas ferramentas só podem ser vistas por administradores e o site deve estar 100% funcional em relação a ideia apresentada). Para que o aluno seja efetivamente certificado pela conclusão do curso, é necessário de que ele tenha participação ativa em todas as partes do projeto, que será apresentado e avaliado pelos coordenadores, designers UX, professores e programadores seniors.
 
 ## Entrega do projeto e time de contribuidores
 A entrega deste projeto será feita no dia 28 de Setembro de 2020 de maneira remota e síncrona pela sala oficial da Digital House na plataforma Zoom.
 
 O time de contribuidores que criou esse projeto foi composto por:
 
 - [Henrique Bastos Evers](https://github.com/EversHenrique)
 - [Luis Felipe de Oliveira](https://github.com/LuisFelipeOl)
 - [Thiago Bullara Leite](https://github.com/ThiagoBullara)
 - [Raphael Scandura da Cunha](https://github.com/raphaelscandura)
