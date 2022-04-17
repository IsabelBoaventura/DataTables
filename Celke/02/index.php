<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - DataTables  </title>

    <!-- Adcionar o css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/dataTables_1-11-5.min.css"  />  -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
   

    <!-- Adicionar o Js -->
    <!--  <script type="text/javascript" src="js/datatable.js"></script>   -->
    <!--  -->
        

    <!-- Para ficar na mesma versao em que o CELKE esta trabalhando  --> 
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" /> 
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
    
     -->
   

</head>
<body>
    <h1>Lista de Cargos e Salarios  </h1>

    <table id="listar-cargos" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script type="text/javascript" language="javascript" >
        $(document).ready(function() {
            $('#listar-cargos').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [], 
                "ajax":  "pesquisa_cargos.php"           
            });
            
        });
       
    </script>

    
</body>
</html>