<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables </title>

    <!-- Adcionar o css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/dataTables_1-11-5.min.css"  />  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
   

    <!-- Adicionar o Js -->
    <!--  <script type="text/javascript" src="js/datatable.js"></script>   -->
    <!--  -->
        
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>

    <!-- Para ficar na mesma versao em que o CELKE esta trabalhando  --> 
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" /> 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
    
     -->
    <script type="text/javascript" language="javascript" >
        $(document).ready(function() {

            // console.log( ajax.response );
            console.log ( ' teste na linha 21 ');


            $('#listar-cargos').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [], 
                "ajax":  {
                    "url": "pesquisa_cargos.php",
                    "type": "POST"
                }
                // , "columns": [
                //     {"data" : "Nome"},
                //     {"data" : "Cargo"}, 
                //     {"data" : "escritorio"},
                //     {"data" : "idade "},
                //     {"data" : "Salário"},
                //     {"data" : "Admissao"}
   
                // ]
                // "columns": [
                //     { "data": "first_name" },
                //     { "data": "last_name" },
                //     { "data": "position" },
                //     { "data": "office" },
                //     { "data": "start_date" },
                //     { "data": "salary" }
                // ]
                // console.log( ajax.response );
                //console.log( responseText);
                //"mensagem" :'Rstou na linha 41 '
            });
            // . then(response => response.json())
            // .then(data => console.log(data))
            // .catch(err => console.log(err));

            // console.log ( ajax.responseText );
            //console.log (responseText);
            console.log (' teste linha 48 ');
        });
        // .then(response => response.ajax())
        // .then(data => console.log(data))
        // .catch(err => console.log(err))
       //  ;
       // console.log(ajax.responseText);
       console.log( ' teste ');
    </script>

</head>
<body>
    <h1>Lista de Cargos e Salarios  </h1>

    <table id="listar-cargos" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Escritório</th>
                <th>Idade</th>
                <th>Salário</th>
                <th>Admissão</th>
               
            </tr>
        </thead>
      
        <!-- <tfoot>
            <tr>
                <th>Nome</th>
                <th>Cargo </th>
                <th>Escritório</th>
                <th>Idade </th>
                <th>Admissão </th>
                <th>Salário </th>
            </tr>
        </tfoot> -->
    </table>
    
</body>
</html>