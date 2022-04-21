<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - DataTables  </title>

    
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />


  

</head>
<body>
    <div class="container">

        
        <h1 class="display-5 mb-4">Lista de Cargos e Salarios  </h1>
       

    
        <table id="listar-cargos" class="table table-striped table-hover display" style="width:100%">
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
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>

    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"> </script>





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