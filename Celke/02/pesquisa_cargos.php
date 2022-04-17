<?php 

require_once('conexao/conectarpdo.php');


//receber a requisao da pesquisa
$requestData = $_REQUEST;

// var_dump($_REQUEST);

// indice das colunas das tabelas vindas do banco de Dados 
$colunas  = array(
    array( '0' => 'id'), 
    array( '1' => 'nome'  ),
    array( '2' => 'cargo' ),
    array( '3' => 'escritorio' ),
    array( '4' => 'idade'),
    array( '5' => 'salario'),
    array( '6' => 'admissao' )
);

//obter todas as informações do banco de dados 
// $consulta = 'SELECT * FROM cargo ';
// $respConsulta  = $conn->query( $consulta) ; 
// $totalGeral = $respConsulta->rowCount(); //quantas linhas tem no banco de dados 
//Desta forma esta correto , mas vbamos seguir para exercitar o PDO 

$query_qnt_cargos = "SELECT COUNT(id) AS qnt_usuarios FROM cargo ";
$result_qnt_cargos = $conn->prepare($query_qnt_cargos);
$result_qnt_cargos->execute();
$row_qnt_cargos = $result_qnt_cargos->fetch(PDO::FETCH_ASSOC);
//FETCH_ASSOC apresenta com o nome dos campos 

//var_dump( $row_qnt_cargos);




//busca das informacoes no bando de dados 
$busca = "SELECT * 
            FROM cargo
            WHERE 1=1
            ORDER BY id ASC 
            LIMIT :inicio , :quantidade";
// Agora adicionando no proprio codigo para ter a paginacao 

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

//$resp  = $conn->query( $busca ) ; 
//No lugar de faer a query direto, por segurança recomenda -se fazer a preparação d query

$result_cargos = $conn->prepare( $busca );
//agora como temos os links (:inicio) e (:quantidade) temos de fazer a substituicao
$result_cargos->bindParam(':inicio', $requestData['start'], PDO::PARAM_INT);
//Forçando que o que esteja na variavel requestaData, coluna start seja um inteiro 
$result_cargos->bindParam(':quantidade', $requestData['length'], PDO::PARAM_INT);
$result_cargos->execute();
//após esta execução se terá os registros 
// *..1



//$totalFiltered = $resp->rowCount(); //quantas linhas tem no banco de dados 

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





//$resp = $conn->query( $busca );




//echo '<br> total de linhas: '. $total . '<br>'; 


//lendo os dados do bando 
$dados = array();


//*..1

while ( $row = $result_cargos->fetch( PDO::FETCH_ASSOC) ){
    // var_dump($row );

    extract( $row);
    //para imprimir atraves do nome da coluna {{direto}}
    $dado = array();

    $dado[] = $id;
    $dado[] = $nome ; 
    $dado[] = $cargo ;
    $dado[] = $escritorio ;
    $dado[] = $idade ;
    $dado[] = $salario ;
    $dado[] = $admissao ;

    $dados[] = $dado ;
    

}
 
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
    "recordsTotal" => intval( $row_qnt_cargos['qnt_usuarios'] ),
    //  quanitdade de registros que ha no banco de dados 
    "recordsFiltered" => intval( $row_qnt_cargos['qnt_usuarios'] ),
    // total de registros quando houver pesquisas 

    //array de dados completos do resultado do sql da tabela 
    "data" => $dados 
);

//var_dump( $json_data);

 

 //enviar os dados em formato json 
echo json_encode(
   $json_data
);





?>