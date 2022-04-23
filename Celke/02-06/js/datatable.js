$(document).ready(function() {
    $('#listar-cargos').DataTable({
        "processing": true,
        "serverSide": true,
      
        "ajax":  "pesquisa_cargos.php" ,
        "language":{
            "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json"
        }
       
    });
    
});



const formNewCargo = document.getElementById("form-cad-cargo");
if( formNewCargo ){
    formNewCargo.addEventListener("submit", async(e) => {
        e.preventDefault();
        //faz com que o sistema nao  continue

        const dadosForm = new FormData( formNewCargo);

        // console.log( dadosForm );
        //apresenta no console o formData
        // console.log(' oi ');

        // aguarda a instrução anterior, enquanto ela nao for finalizada nao pode ir para proxima

        const dados = await fetch("cadastrar.php" , {
            method: "POST",
            body: dadosForm
        });
        // esta parte irá mandar os dados para o cadastrar.php

        //console.log( dados );
        //apresenta na tela a resposta 

        const resposta = await dados.json();
        console.log( resposta) ;



    });

}