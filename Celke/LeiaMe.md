# DataTables

Seguindo o video de Celke:  
    Como criar e usar o DataTables para listar registros do banco de dados  
    https://www.youtube.com/watch?v=b8YLHrH0UMU

## Estrutra
    - Laragon Full 5.0.0
    - PHP 7.4.19
    - Apache 2.4.47 usando a porta 80
    - MySQL 5.7.33 usando a porta 3306
    - Senha do banco de Dados: `123456`
    - Database criada anteriormente `celke`

## Material
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
            
            
   
## Erros

Na primeira apresentação do resultado teve este aviso:

    DataTables warning: table id=listar-cargos - Invalid JSON response. For more information about this error, please see http://datatables.net/tn/1

Procurando na internet este aviso informa que teve algum erro na informação que o json esperava. 
Para descobrir o que que estava de errado no Json, na internet informa para ir:

    - botão direito do mouse
    - inspecionar elemento 
    - Network
    - Fetch/XHR
Nesta opção irá abrir o nome do arquvo de onde vem a informação  

![image](https://user-images.githubusercontent.com/1613816/163724422-c8249ba7-af05-4a27-8a46-fedf7788e4d8.png)

Clicando no nome do fonte  consigo ver a resposta do Json 

![image](https://user-images.githubusercontent.com/1613816/163724476-3157ee99-cdf7-4096-a146-2b0363697643.png)







