# Arquivo original destruido ( Informações incompletas )


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


**Eliminei sem querer todos os arquivos `LeiaMe.md` anteriores**

$_REQUEST

    array(5) { 
	["draw"]=> string(1) "1" 
	["columns"]=>
		array(6) { 
			[0]=> array(5) { 
				["data"]=> string(1) "0" 
				["name"]=> string(0) "" 
				["searchable"]=> string(4) "true" 
				["orderable"]=> string(4) "true" 
				["search"]=> array(2) { 
					["value"]=> string(0) "" 
					["regex"]=> string(5) "false" 
				} 
			} 
			[1]=> array(5) { 
				["data"]=> string(1) "1" 
				["name"]=> string(0) "" 
				["searchable"]=> string(4) "true" 
				["orderable"]=> string(4) "true" 
				["search"]=> array(2) { 
					["value"]=> string(0) "" 
					["regex"]=> string(5) "false" 
				} 
			} 
			[2]=> array(5) { 
				["data"]=> string(1) "2" 
				["name"]=> string(0) "" 
				["searchable"]=> string(4) "true" 
				["orderable"]=> string(4) "true" 
				["search"]=> array(2) { 
					["value"]=> string(0) "" 
					["regex"]=> string(5) "false" 
				} 
			} 
			[3]=> array(5) { 
				["data"]=> string(1) "3" 
				["name"]=> string(0) "" 
				["searchable"]=> string(4) "true" 
				["orderable"]=> string(4) "true" 
				["search"]=> array(2) { 
					["value"]=> string(0) "" 
					["regex"]=> string(5) "false" 
				} 
			} 
			[4]=> array(5) { 
				["data"]=> string(1) "4" 
				["name"]=> string(0) "" 
				["searchable"]=> string(4) "true" 
				["orderable"]=> string(4) "true" 
				["search"]=> array(2) { 
					["value"]=> string(0) "" 
					["regex"]=> string(5) "false" 
				} 
			} 
			[5]=> array(5) { 
				["data"]=> string(1) "5" 
				["name"]=> string(0) "" 
				["searchable"]=> string(4) "true" 
				["orderable"]=> string(4) "true" 
				["search"]=> array(2) { 
					["value"]=> string(0) "" 
					["regex"]=> string(5) "false" 
				} 
			} 
		} 
		["start"]=> string(1) "0" 
		["length"]=> string(2) "10" 
		["search"]=> array(2) { ["value"]=> string(0) "" ["regex"]=> string(5) "false" } 
	}
  
Finalizado .. entretanto não faz a Ordenação por tabelas.
