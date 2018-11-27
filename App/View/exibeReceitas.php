<?php

include_once '../Controller/ControllerReceita.php';

$controllerReceita = new ControllerReceita();
?>

<div class="container">


<?php
$controllerReceita->getAllReceita();
 ?>

</div>

<script type="text/javascript" src="styles/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="styles/js/datatables.js"/></script>
<script type="text/javascript" src="styles/js/bootstrap.js"/></script>

<script>
$(document).ready( function () {
  $('#receitas').DataTable({
    "dom": 'flrtip',
    "language": {
      "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar",
      "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
      },
    }
} );
});
