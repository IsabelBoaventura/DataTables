<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - DataTables  </title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css />


  

</head>
<body>
    <h1>Lista de Cargos e Salarios  </h1>
    <button>PDF</button>

    <div class="cdn" >
        <span>JS</span>
    </div>

    <table id="listar-cargos" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
             
                <th>Cargo</th>
                <th>Nome</th><th>Escritório</th>
                <th>Idade</th>
                <th>Salário</th>
                <th>Admissão</th>
               
            </tr>
        </thead>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"> </script>
    <script type="text/javascript" language="javascript" >
        $(document).ready(function() {
            $('#listar-cargos').DataTable({
                "processing": true,
                "serverSide": true,
              
                "ajax":  "pesquisa_cargos.php" ,
                "language":{
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json"
                }

               // "select": true ,
              
                // "buttons": [
                //     { 'extend': "create", 'editor': 'editor' },
                //     { 'extend': "edit",   'editor': 'editor' },
                //     { 'extend': "remove", 'editor': 'editor' }
                // ]

               


               
            });
            
        });
       
    </script>

    <!--

      "buttons": ['pdf', 'excel']


     "buttons": [
                    {
                        extend: 'pdf',
                        text: 'Save current page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }

                ],


                    "select": true,
                "buttons": [
                    { extend: "create", editor: editor },
                    { extend: "edit",   editor: editor },
                    { extend: "remove", editor: editor }
                ]

    -->  

    
    </body>
</html>