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
    // console.log(resposta);
    if( resposta['status']){
        //console.log( 'resposta true ');
        const visModal = new bootstrap.Modal(document.getElementById("visCargoModal"));
        visModal.show();

        document.getElementById("idCargoVis").innerHTML     =  resposta['dados'].id;
        document.getElementById("cargoVis").innerHTML       =  resposta['dados'].cargo;
        document.getElementById("nomeVis").innerHTML        =  resposta['dados'].nome;
        document.getElementById("escritorioVis").innerHTML  =  resposta['dados'].escritorio;
        document.getElementById("idadeVis").innerHTML       =  resposta['dados'].idade;
        document.getElementById("salarioVis").innerHTML     =  resposta['dados'].salario;
        document.getElementById("admissaoVis").innerHTML    =  resposta['dados'].admissao;

        document.getElementById("msgAlerta").innerHTML      =  "";
    }else{
       // console.log('resposta false ');
       document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    }

}


// funcao  Editar cadastro  
//
const editModal = new bootstrap.Modal(document.getElementById("editCargoModal"));
async function editarCargo( id ){
   // console.log(' dentro do editar ' + id );
   //
   const dados = await fetch('visualizar.php?id=' + id); 

   const resposta = await dados.json();

   if(resposta['status']){
        document.getElementById("msgAlertErroEdit").innerHTML = "";

        document.getElementById("msgAlerta").innerHTML = "";

        //  
        const editModal = new bootstrap.Modal(document.getElementById("editCargoModal"));
        editModal.show();

        document.getElementById("idEdit").value = resposta['dados'].id;
        document.getElementById("cargoEdit").value = resposta['dados'].cargo;
        document.getElementById("nomeEdit").value = resposta['dados'].nome;
        document.getElementById("escritorioEdit").value = resposta['dados'].escritorio;
        document.getElementById("idadeEdit").value = resposta['dados'].idade;
        document.getElementById("salarioEdit").value = resposta['dados'].salario;
        document.getElementById("admissaoEdit").value = resposta['dados'].admissao;

   }else{
       document.getElementById("msgAlerta").innerHTML = resposta['msg'];

   }
}




// esta parte eu nao sei onde se encaixa ainda 
const formEditCargo = document.getElementById("form-edit-cargo");
if( formEditCargo ){
    formEditCargo.addEventListener("submit", async(e) =>{
        e.preventDefault();
        const dadosForm = new FormData( formEditCargo);

        const dados = await fetch("editar.php", {
            method: "POST",
            body: dadosForm
        });

        const resposta = await dados.json();

        if( resposta['status']){

            // fechar a chanela modal 
            document.getElementById("msgAlerta").innerHTML = resposta['msg'];
            document.getElementById("msgAlertErroEdit").innerHTML = "";

            // limpar o formulario 
            formEditCargo.reset();
            editModal.hide();


            // Atualizar a lista de registros 
            listarDataTables = $('#listar-cargos').DataTable();
            listarDataTables.draw();

        }else{
            document.getElementById("msgAlertErroEdit").innerHTML = resposta['msg'];
        }
    });
}



//para a funcao de deletar 

function apagarCargo( id ){
    console.log('Estou na funcao apagar cargo ' + id );
}



//para a funcao de imprimir 

function imprimirCargo( id ){
    console.log('Estou na funcao de imprimri ' + id );
}
