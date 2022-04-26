# DataTables

Seguindo a playList de Celke:  

    Como usar DataTables com PHP
    https://www.youtube.com/watch?v=WWQ5d5ttjoI&list=PLmY5AEiqDWwDnscmb2C9fdQ5EqkkoiWMS

Parece igual ao arquivo anterior,  com a diferença de estar separando  e apresentando  as informações e agora estar usando PDO.

Sendo assim, irei reutilizar o exercicio anterior, apenas renomeando pastas e arquivos que forem necessários.

   

## Estrutra
    - Laragon Full 5.0.0
    - PHP 7.4.19
    - Apache 2.4.47 usando a porta 80
    - MySQL 5.7.33 usando a porta 3306
    - Senha do banco de Dados: `123456`
    - Database criada anteriormente `celke`

## Material
    Video 01: Como usar o DataTables com PHP para listar registros do banco de dados
    - DataTables CND: `https://cdn.datatables.net`
        exemplos -> Zero Configuration

Deste caminho iremos pegar o material para termos a parte inicial;

Agora para acessar pelo banco de dados iremos ir em: 
    
    Document -> Examples -> Server-side  -> Server-side Processing 
    Document -> Examples -> Server-side -> POST data 

## Banco de Dados 

            CREATE TABLE `cargo` (
                `id` INT(10) NOT NULL AUTO_INCREMENT,
                `cargo` VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
                `nome` VARCHAR(100) NOT NULL COLLATE 'utf8_unicode_ci',
                `escritorio` VARCHAR(40) NOT NULL COLLATE 'utf8_unicode_ci',
                `idade` INT(10) NOT NULL,
                `salario` DOUBLE(11,4) NOT NULL,
                `admissao` DATE NOT NULL,
                PRIMARY KEY (`id`) USING BTREE
            )COLLATE='utf8_unicode_ci'
            ENGINE=InnoDB;
            
            
   
## Mão a Obra

###   Video 01: Como usar o DataTables com PHP para listar registros do banco de dados

Video 01 com objeto:
- Mostrar o conteudo do banco de dados ( Concluido);
- Fazer a páginação do conteudo ( Concluido);

Finalizado e Funcionando!

### Video 02:  Como ordenar o resultado no listar utilizando DataTables e PHP

- Mostrar o conteudo ordenado pelas tabelas;

No exemplo apresentado deu certo, apenas apresentando o 'order' conforme a busca. Para o meu exemplo dar certo, tive de ter um 'isset'. Se na requisicao não existir o campo 'order' mandei ordenar pelo 'ID' tendo o campo 'ORDER' apresenta conforme o usuario solicitar.

Finalizado e Funcionando!

### Video 03: Como Pesquisar com DataTables e PHP

- Mostrar e realizar a pesquisa;
- Fazer a paginação conforme o resultado da pesquisa 

Finalizado e Funcionando!


### Video 04: Como traduzir DataTables para português

- Traduzir para Português;

Na Documentação de DataTables há o plugin para traduzir 

        Documentações -> Plug-ins -> Internationalisation

    "language":{
        "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json"
    }

Com isto a página apresentada esta em Portugues.

Finalizado e Funcionando!


### Video 05: Como usar Bootstrap no DataTables

Adicionar o Bootstrap 5 ao codigo;

    https://datatables.net/examples/styling/bootstrap5.html

As bibliotecas javascript

    https://code.jquery.com/jquery-3.5.1.js
    https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js
    https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js

As bibliotecas do css 

    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css
    https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css

Documentação do framework bootstrap 

    https://getbootstrap.com/docs/5.1/content/tables/


Achei a paginação lenta, mas esta funcionando.

Finalizado e funcionando!


### Video 06: Como criar o formulário 'Cadastrar' com janela modal do DataTables

Agora passar a parte do JS para um arquivo em separado. 

Criada a pasta `js` na raiz do projeto e dentro dela o arquivo `datatable.js` (celke/02-06/js/datatable.js);

Documentação do Bootstrap - como começar:

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

Documentação da janela Modal 

    https://getbootstrap.com/docs/5.1/components/modal/


Botão para abrir a janela Modal

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>


Renomeando o Nome do Botao de Cadastro

    data-bs-target="#cadCargoModal"

Adicionada a parte HTML  para o modal;
Eliminado os botões pre existente no Modal ;

Adicionado `form` ao modal 
    https://getbootstrap.com/docs/5.1/forms/layout/

    Horizontal Form

Adicionando o `Alert`
    https://getbootstrap.com/docs/5.1/components/alerts/

.
.
.



### Video  07: Como Criar a janela modal para visualizar detalhes do registro no DataTables

https://www.youtube.com/watch?v=DIXctN0rWvQ&list=PLmY5AEiqDWwDnscmb2C9fdQ5EqkkoiWMS&index=8


Bootstrap ->  typography -> Description list alignment

    https://getbootstrap.com/docs/5.1/content/typography/



