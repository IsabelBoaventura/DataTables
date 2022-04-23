<?php 

include_once("conexao/conectarpdo.php");

 $dados = filter_input_array( INPUT_POST, FILTER_DEFAULT);

 if( empty($dados['nome'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo Nome não foi preenchido!
      </div>"
    ];
 }else  if( empty($dados['cargo'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo CARGO não foi preenchido!
      </div>"
    ];

 } else  if( empty($dados['escritorio'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo ESCRITÓRIO não foi preenchido!
      </div>"
    ];
 } else  if( empty($dados['idade'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo IDADE não foi preenchido!
      </div>"
    ];
}else  if( empty($dados['salario'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo SALARIO não foi preenchido!
      </div>"
    ];
}else  if( empty($dados['admissao'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo DATA DE ADMISSÃO  não foi preenchido!
      </div>"
    ];
}else{
    $sqlInsert = "INSERT INTO  cargo (cargo, nome, escritorio, idade, salario, admissao) 
        VALUES( :cargo, :nome, :escritorio, :idade, :salario, :admissao )";

    

}

echo json_encode( $retorna);


?>