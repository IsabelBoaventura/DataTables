$(document).ready(function() {
    $('#listar-cargos').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "scripts/server_processing.php"
    });
} );