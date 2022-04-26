<?php

//incluir a conexao com o banco de dados 
include_once 'conexao/conectarpdo.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if(!empty($id)){

    $sql_select = "SELECT * FROM cargo WHERE id= :id LIMIT 1";
    $resultado = $conn->prepare($sql_select);
    $resultado->bindParam(':id', $id);

    $retorna = [
        'status' => true,
        'msg' =>"<div class='alert alert-success' role='alert'>tudo certo</div>"
    ];

}else{
    $retorna = [
        'status' => false,
        'msg' =>"<div class='alert alert-danger' role='alert'>Erro: Nenhum Cargo Encontrado!</div>"
    ];
}

echo json_encode( $retorna );





?>