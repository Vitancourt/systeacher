<?php
require_once("header.php");
require_once("menu_topo.php");
$active = "categoria";
require_once("menu_esquerdo.php");
if (
    !empty($arr_dados)
) {
    $arr_categorias = $arr_dados["arr_categorias"];
}
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<div class="content-wrapper">
    <?php
    require_once("categoria_nav.php");
    ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Listar categorias</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                <table id="arquivo-categoria-datatable" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>              
                    <?php
                    if (!empty($arr_categorias)) {
                        foreach ($arr_categorias as $categorias) {
                        ?>
                        <tr>
                            <td>
                            <?=$categorias["descricao"];?>
                            </td>
                            <td style="padding-top: 2px;">
                            <a class="btn btn-info" 
                            href="categoria_editar/<?=htmlentities($categorias["categoria_id"], ENT_QUOTES, "UTF-8");?>"
                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Editar">
                                <i class="fa fa-edit"></i>
                            </a>  
                            <a class="btn btn-danger" 
                            href="categoria_excluir/<?=htmlentities($categorias["categoria_id"], ENT_QUOTES, "UTF-8");?>"
                            data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Excluir">
                                <i class="fa fa-trash-o"></i>
                            </a> 
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    ?>                
                </tbody>
                </table>
                </div>          
            </div>
            <!-- /.box -->
            </div>
        </div>
    </section>
</div>
<?php
require_once ("footer.php");
?>
<script>
    $(function () {
        $('#arquivo-categoria-datatable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
            "scrollX": true,
            "language":{
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
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
            }
        });
    });
</script>
</body>
</html>