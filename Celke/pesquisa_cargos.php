<?php 

require_once('conexao/conectarpdo.php');


/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
//$table = 'datatables_demo';
 
// Table's primary key
//$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names


//receber a requisao da pesquisa
$requestData = $_REQUEST;

var_dump($_REQUEST);

// indice das colunas das tabelas vindas do banco de Dados 
$columns = array(
    array( '0' => 'nome',  ),
    array( '1' => 'cargo' ),
    array( '2' =>  'escritorio' ),
    array( '3' => 'idade'),
    array( '4' => 'admissao'),
    array( '5' => 'salario' )
);



//busca das informacoes no bando de dados 
$busca = 'SELECT * FROM cargo WHERE 1=1';

// if(empty($_REQUEST)){
//     echo '!  nao esta vazia ';
// }else{
//     echo ' esta vazia ';
// }


if(!isset($_REQUEST)){
    echo '!  nao esta vazia ';
    //ordenar conforme o resultado 
    $busca .= ' ORDER BY '.$columns[$requestData['order'][0]['column']]. ' '. 
    $requestData['order'][0]['dir'].'  LIMIT '. $requestData['length'].' ';
}else{
    echo ' esta vazia ';
}


$resp  = $conn->query( $busca ) ; 
$total = $resp->rowCount(); //quantas linhas tem no banco de dados 

echo '<br> total de linhas: '. $total ; 


//lendo os dados do bando 
$dados = array();

while ( $row = $resp->fetchAll() ){
    

}
 
// SQL server connection information
$sql_details = array(
    'user' => '',
    'pass' => '',
    'db'   => '',
    'host' => ''
);
 
 

 
echo json_encode(
   'teste'
);





?>