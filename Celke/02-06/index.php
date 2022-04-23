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

        <div class="d-flex justify-content-between align-items-center pt-3 pb-2 ">
            <h1 class="display-5 mb-4">Lista de Cargos e Salarios  </h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#cadCargoModal">
               Cadastrar
            </button>
        </div>

        
    
       

    
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


    <!-- Iniciando a parte da Modal de cadastro -->


    <!-- Modal -->
<div class="modal fade" id="cadCargoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cadCargoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadCargoModalLabel">Cadastrar Cargos </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           


            <!---------  A partir daqui form cadastro cargo  ---------->

                
    <form method="POST" id="form-cad-cargo" >
    <div class="row mb-3">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
        </div>
    </div>

    <div class="row mb-3">
        <label for="cargo" class="col-sm-2 col-form-label">Cargo</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo que exerce">
        </div>
    </div>

    <div class="row mb-3">
        <label for="escritorio" class="col-sm-2 col-form-label">Escritório</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="escritorio" name="escritorio" placeholder="Cidade onde trabalha">
        </div>
    </div>

    <div class="row mb-3">
        <label for="idade" class="col-sm-2 col-form-label">Idade </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="idade" name="idade" placeholder="Sua idade ">
        </div>
    </div>

    <div class="row mb-3">
        <label for="salario" class="col-sm-2 col-form-label">Salário</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="salario" name="salario" placeholder="Seu salário ">
        </div>
    </div>
    <div class="row mb-3">
        <label for="admissao" class="col-sm-2 col-form-label">Data de Admissão</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="admissao" name="admissao" placeholder="Data de Admissão">
        </div>
    </div>

    <button type="submit" class="btn btn-outline-success btn-sm" value="cadastrar">Salvar </button>
    </form>


            <!---------- Ate aqui form cadastro cargo ---------->

    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"> </script>
    <script src="js/datatable.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>







    
    </body>
</html>