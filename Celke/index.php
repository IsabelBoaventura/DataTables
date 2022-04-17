<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables </title>

    <!-- Adcionar o css -->
    <link rel="stylesheet" type="text/css" href="css/dataTables_1-11-5.min.css"  />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />

    <!-- Adicionar o Js -->
    <!--  <script type="text/javascript" src="js/datatable.js"></script>   -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script type="">
        $(document).ready(function() {
            $('#listar-cargos').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":  {
                    "url": "pesquisa_cargos.php",
                    "type": "POST"
                },
                "columns": [
                    { "data": "first_name" },
                    { "data": "last_name" },
                    { "data": "position" },
                    { "data": "office" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]
            });
        });
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
                <th>Admissão</th>
                <th>Salário</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
          
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Cargo </th>
                <th>Escritório</th>
                <th>Idade </th>
                <th>Admissão </th>
                <th>Salário </th>
            </tr>
        </tfoot>
    </table>
    
</body>
</html>