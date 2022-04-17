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

//var_dump($_REQUEST);

// indice das colunas das tabelas vindas do banco de Dados 
$colunas  = array(
    array( '0' => 'nome',  ),
    array( '1' => 'cargo' ),
    array( '2' => 'escritorio' ),
    array( '3' => 'idade'),
    array( '4' => 'salario'),
    array( '5' => 'admissao' )
);

//obter todas as informações do banco de dados 
$consulta = 'SELECT * FROM cargo ';
$respConsulta  = $conn->query( $consulta) ; 
$totalGeral = $respConsulta->rowCount(); //quantas linhas tem no banco de dados 



//busca das informacoes no bando de dados 
$busca = 'SELECT * FROM cargo WHERE 1=1';

//agora trabalhando com a PESQUISA
if( !empty( $requestData['search']['value'])){
    // se houver um parametro de pesquisa 
    // $requestData['search']['value']
    //contem o parametro da pesquisa 
    $busca.= " AND ( nome LIKE '%".$requestData['search']['value']."%' ";
    $busca.= " OR cargo LIKE '%".$requestData['search']['value']."%' ";
    $busca.= " OR escritorio LIKE '%".$requestData['search']['value']."%' ";
    $busca.= " OR idade LIKE '%".$requestData['search']['value']."%' ) ";
}

$resp  = $conn->query( $busca ) ; 
$totalFiltered = $resp->rowCount(); //quantas linhas tem no banco de dados 

if( isset($_REQUEST)){
    // var_dump( $_REQUEST);
    //  echo ' linha 65: '. $colunas[$requestData['columns'][0]['name']] . ' '.
        //  $requestData['order'][0]['dir'].
        //  ' LIMIT '.$requestData['start'].
        //  ' , '. $requestData['length'].' ';
    //nao aceitou order // orderable//data

    //ordenar conforme o resultado 
   $busca .= ' '.
            //  ORDER BY '.$colunas[$requestData['columns'][0]['name']]. ' '. 
            //   $requestData['order'][0]['dir'].
                 ' LIMIT '.$requestData['start'].' , '. $requestData['length'].' ';


    //
   //
  
}

 // echo ' <br> linha 96 <br> ' . $busca ;





$resp = $conn->query( $busca );




//echo '<br> total de linhas: '. $total . '<br>'; 


//lendo os dados do bando 
$dados = array();

while ( $row = $resp->fetch() ){
    $dado = array();

    $dado[] = $row['nome']; 
    $dado[] = $row['cargo'];
    $dado[] = $row['escritorio'];
    $dado[] = $row['idade'];
    $dado[] = $row['salario'];
    $dado[] = $row['admissao'];


    // 
    $dados[] = $dado ;
    

}
// $dados = $dado ;
// 
// var_dump($dados );
// echo '<br><br>';
// print_r( $dados );
 
// // SQL server connection information
// $sql_details = array(
//     'user' => '',
//     'pass' => '',
//     'db'   => '',
//     'host' => ''
// );
 

//array com informações que serao retornadas para o javascript 
$json_data = array(
    "draw" => intval( $requestData['draw']),
    //para cada requuisicao é enviado um numero como paramentro
    "recordsTotal" => intval( $totalGeral ),
    //  quanitdade de registros que ha no banco de dados 
    "recordsFiltered" => intval( $totalFiltered ),
    // total de registros quando houver pesquisas 

    //array de dados completos do resultado do sql da tabela 
    "data" => $dados 
);


 

 //enviar os dados em formato json 
echo json_encode(
   $json_data
);





?>