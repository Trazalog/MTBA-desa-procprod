<input type="text" class="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Pedido de trabajo</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="otrabajo" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Accciones</th>
                                <th>N°</th>
                                <th>Codigo Interno</th>
                                <th>Cliente</th>
                                <th>Fecha Entrega</th>
                                <th>Condición</th>
                                <th>Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        
                            foreach ($list as $o) {
                                echo '<tr id="'.$o['petr_id'].'" data-case="'.$o['bpm_id'].'">';
                                echo '<td><i onclick="mostrar_detalles(this)" class="fa fa-fw fa-search" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" title="Consultar"></i><i onclick="verOT(\''.$o['cod_interno'].'\')" class="fa fa-fw fa-eye" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" title="Ver OT"></i><i onclick="ver_formularios(this)" class="glyphicon glyphicon-list-alt" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" title="Ver Formularios"></i></td>';
                                echo '<td>#'.$o['petr_id'].'</td>';
                                echo '<td>'.$o['cod_interno'].'</td>';
                                echo '<td>'.$o['nombre'].'</td>';
                                echo '<td>'.$o['fec_entrega'].'</td>';
                                echo '<td>'.$o['condicion'].'</td>';
                                echo '<td>'.$o['familia_producto'].'|'.$o['subfamilia'].'</td>';
                                echo '</tr>';

                            }
                        ?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->

<script>

    function verOT(cod) {
        WaitingOpen('Cargando Tareas...');
        $('#content').empty();
        $("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/listOrden/<?php echo $permission; ?>/" + cod + "/");
        WaitingClose();
    }

    function mostrar_detalles(o) {
        var id = $(o).parent().parent().attr('id');
        var case_id = $(o).parent().parent().attr('data-case');
        WaitingOpen('Cargando Detalles...');
        $('#content').empty();
        $("#content").load("<?php echo base_url(); ?>index.php/PedidoTrabajo/Detalles_Pedido/"+id+"/"+case_id);
        WaitingClose();
    }

    function ver_formularios(o){
        var id = $(o).parent().parent().attr('id');
        var case_id = $(o).parent().parent().attr('data-case');
    
        WaitingOpen('Cargando Detalles...');
        $('#content').empty();
        $("#content").load("<?php echo base_url(); ?>index.php/PedidoTrabajo/Ver_Formularios/"+id+"/"+case_id);
        WaitingClose();
    }
    $('table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "language": {
            "lengthMenu": "Ver _MENU_ filas por página",
            "zeroRecords": "No hay registros",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrando de un total de _MAX_ registros)",
            "sSearch": "Buscar:  ",
            "oPaginate": {
                "sNext": "Sig.",
                "sPrevious": "Ant."
            }
        }
    });

</script>