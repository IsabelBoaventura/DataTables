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

//para fechar a janela modal 
//const fecharModalCad = new bootstrap.Modal(document.getElementById("cadCargoModal"));
//const fecharModalCad = new Modal(document.getElementById("cadCargoModal"));
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
        //console.log( resposta) ;


        ////apresentação da mensagem na tela
        if( resposta['status']){
            document.getElementById("msgAlertErroCad").innerHTML = "";
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
            formNewCargo.reset();
            // fecharModalCad.hide();
            $('#cadCargoModal').modal('hide');
            listarDataTables = $('#listar-cargos').DataTable();
           // listarDataTables.draw();
           listarDataTables.draw(1);



        }else{
            document.getElementById("msgAlertErroCad").innerHTML = resposta['msg'];
        }



    });

}


// função para visualizar os detalhes do cargo 

async function  visCargo( id ){
    //console.log( ' Estou na funcao viscargp ' + id );

    const dados = await fetch('visualizar.php?id=' + id );

    const resposta = await dados.json();
    //console.log(resposta);

    if( resposta['status'] ){

        const visModal = new bootstrap.Modal(document.getElementById("visualCargoModal"));
        visModal.show();

        //const fecharModalCad = new bootstrap.Modal(document.getElementById("cadCargoModal"));

    }else{
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    }
}
