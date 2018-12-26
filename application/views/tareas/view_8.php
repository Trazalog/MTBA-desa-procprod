<input type="hidden" id="permission" value="<?php echo $permission;?>">
<input type="hidden" id="idPedTrabajo" value="<?php echo $idPedTrabajo;?>">
<input type="hidden" id="form_id" value="">
<input type="hidden" id="case_id" value="<?php echo json_encode($TareaBPM['caseId'])?>">
<section class="content">
    <?php echo cargarCabecera($idPedTrabajo); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div role="tabpanel" class="tab-pane">
                                <div class="form-group">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                role="tab" data-toggle="tab">Tareas</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                data-toggle="tab">Comentarios</a></li>
                                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                data-toggle="tab">Vista
                                                Global
                                            </a></li>
    
                                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Pedido de Repuestos</a></li>    
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        

                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <!-- <h4 class="panel-heading">Tarea</h4> -->
                                            <div class="panel-body">

                                                <?php
                                    //echo"id de form: ";
                                    //dump_exit($TareaBPM["assigned_id"]);
                                    //$TareaBPM["assigned_id"] = 'asignado';
                                                        //echo "<input type='text' class='hidden' id='estadoTarea' value='$estadoTarea' >";
                                                    //if ($estadoTarea == "noasignado") {´

                                                        echo "<button class='btn btn-block btn-success' id='btontomar' style='width: 100px; margin-top: 10px ;display: inline-block;' onclick='tomarTarea()'>Tomar tarea</button>";
                                                    //}else{
                                                        echo "&nbsp"; 
                                                        echo "&nbsp"; 
                                                        echo "&nbsp";
                                                        echo "<button class='btn btn-block btn-danger grupNoasignado' id='btonsoltr' style='width: 100px; margin-top: 10px; display: inline-block;' onclick='soltarTarea()'>Soltar tarea</button>";
                                                    //}    
                                                        echo "</br>"; 
                                                        echo "</br>"; 

                                                        $userdata = $this->session->userdata('user_data');
                                                        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado 
                                                        $usrName =  $userdata[0]['usrName'];
                                                        $usrLastName = $userdata[0]["usrLastName"];
                                                        
                                                        echo "<input type='text' class='hidden' id='usrName' value='$usrName' >";
                                                        echo "<input type='text' class='hidden' id='usrLastName' value='$usrLastName' >";
                                                        echo "<input type='text' class='hidden' id='id_listarea' value='$id_listarea' >";
                                                    ?>
                                                <input type="text" class="form-control hidden" id="asignado" value="<?php echo $TareaBPM["
                                                    assigned_id"] ?>" >
                                                <form>
                                                    <div class="panel panel-default">
                                                        <h4 class="panel-heading">INFORMACION:</h4>


                                                        <div class="form-group">
                                                            <div class="col-sm-6 col-md-6">
                                                                <label for="tarea">Tarea</label>
                                                                <input type="text" class="form-control" id="tarea"
                                                                    value="<?php echo $TareaBPM['displayName'] ?>"
                                                                    disabled><!-- id de listarea -->
                                                                <input type="text" class="hidden" id="tbl_listarea"
                                                                    value="<?php echo $datos[0]['id_listarea'] ?>">
                                                                <input type="text" class="hidden" id="idform" value="<?php echo $idForm ?>">
                                                                <!-- id de task en bonita -->
                                                                <input type="text" class="hidden" id="idTarBonita"
                                                                    value="<?php echo $idTarBonita ?>">
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <div class="col-sm-6 col-md-6">
                                                                <label for="fecha">Fecha de Creación</label>
                                                                <input type="text" class="form-control" id="fecha"
                                                                    placeholder="" value="<?php echo $TareaBPM['last_update_date'] ?>"
                                                                    disabled>
                                                            </div>
                                                        </div><br>


                                                        <div class="form-group ">
                                                            <div class="col-sm-6 col-md-6 ">
                                                                <label for="ot ">Orden de Trabajo:</label>
                                                                <input type="text " class="form-control " id="ot
                                                                    "
                                                                    placeholder=" " value="<?php echo $datos[0][ 'id_orden'] ?>"
                                                                    disabled>
                                                            </div>
                                                        </div><br>

                                                        <div class="form-group">
                                                            <div class="col-sm-6 col-md-6">
                                                                <label for="duracion_std">Duracion Estandar (minutos):</label>
                                                                <input type="text" class="form-control" id="duracion_std"
                                                                    placeholder="" value="<?php echo $datos[0]['duracion_std']  ?>"
                                                                    disabled>
                                                            </div></br>
                                                        </div>

                                                        <br>

                                                        <div class="form-group">
                                                            <div class="col-sm-12 col-md-12">
                                                                <label for="detalle">Detalle</label>
                                                                <textarea class="form-control" id="detalle" rows="3"
                                                                    disabled><?php echo $TareaBPM['displayDescription']?></textarea>
                                                            </div>
                                                        </div></br> </br> </br> </br> </br>
                                                    </div>

                                                    <div class="form-group" id="acciones_view">
                                                        <div class="col-sm-12 col-md-12">
                                                            <table id="tbl_diagnosticos" class="table table-striped table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Acciones</th>
                                                                        <th>Id Tarea Trazalog</th>
                                                                        <th>Id listarea</th>
                                                                        <th>Tarea</th>
                                                                        <th>Subsector</th>
                                                                        <th>Usuario</th>
                                                                        <th>Estado</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php //dump_exit($list);
                                                                foreach($list as $f)
                                                                {
                                                                    $f = object_to_array($f);
                                                                
                                                                    $id  = $f["id_tarea"];
                                                                    echo '<tr class="'.$id.'" >';
                                                                
                                                                    echo '<td>';
                                                                    echo '<a href="#" title="Mostrar formulario de tarea" class="'.($f['form_asoc']==''?'no_form':'getFormularioTarea').'" data-formid="'.$f['form_asoc'].'" data-open="false" data-validado="false" data-bpmIdTarea="'.$f['bpm_task_id'].'" data-idListTarea="'.$f['id_listarea'].'" data-idOt="'.$f['id_orden'].'"><i class="fa fa-eye" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                                                        //echo '<a href="#" class="addRepuestos" title="Cargar Pedido de Repuestos" data-ordenDesc="'.$f['orden_descripcion'].'" data-ordenId="'.$f['id_orden'].'"><i class="fa fa-plus" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                                                        //echo '<a href="#" class="rehacerTarea" title="Rehacer Tarea" data-treaId="'.$f['id_listarea'].'"><i class="fa fa-mail-reply" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                                                    echo '</td>';
                                                                    echo '<td class="celda">'.$f['id_tarea'].'</td>';
                                                                    echo '<td class="celda">'.$f['id_listarea'].'</td>';
                                                                    echo '<td class="celda tareaDesc" title="ID Tarea: '.$f['id_tarea'].'">'.substr($f['tareadescrip'],0,500).'</td>';
                                                                    echo '<td class="celda">'.$f['subsector_descripcion'].'</td>';
                                                                    echo '<td class="celda">'.$f['id_usuario'].'</td>';
                                                                    echo '<td class="celda">'.$f['estado'].'</td>';
                                                
                                                                    echo '</tr>';
                                                                }
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <button type="button" class="btn btn-primary getFormularioTarea"
                                                                data-formid="2500" data-open="false" data-validado="false"
                                                                data-bpmIdTarea="<?php echo $lita_id ?>"
                                                                data-idListTarea="">Ver Formulario Tareas RE-TAL-010</button>
                                                            <!-- Modal formulario tarea -->
                                                            <?php if($idForm != 0){echo '<button type="button" class="btn btn-primary  getFormularioTarea" data-formid="7000" data-open="false" data-validado="false" data-bpmIdTarea="'.$lita_id_infoTec.'">Adjuntar Informe Técnico
                                                                </button>';}?>
                                                            <button class="btn btn-primary" onclick="crearPDF()">Generar PDF - Formularios Diagnóstico</button>
                                                            <!-- <button type="button" id="crearPDF" class="btn btn-primary" name="crearPDF">Revisar Formularios de Diagnostico</button> -->
                                                         

                                                        </div>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="settings">
                                        <div class="panel-body">
                                            <?php
                                            if (strpos($permission,'Add') !== false) {
                                            echo '<button type="button" class="addRepuestos btn btn-primary" title="Cargar Pedido de Repuestos" data-ordenDesc="'.$list["0"]["orden_descripcion"].'" data-ordenId="'.$list["0"]["id_orden"].'">Agregar</button>';
                                            }
                                            ?>
                                            <table id="pedidoRepuestos" class="table table-bordered table-hover" style="text-align: center">
                                            <thead>
                                                <tr>
                                                <th>Acciones</th>
                                                <th>Id Pedido</th>
                                                <th>Código Artículo</th>
                                                <th>Artículo</th>
                                                <th>Proveedor</th>
                                                <th>Cantidad</th>
                                                <th>Fecha Entrega</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php /*
                                                foreach($pedidoRepuestos as $pedidoRep)
                                                {
                                                $id=$pedidoRep['id_notaPedido'];

                                                echo '<tr id="'.$id.'" class="'.$id.'" >';
                                                    echo '<td>';
                                                    if (strpos($permission,'Edit') !== false) {
                                                    echo '<i class="fa fa-fw fa-pencil" style="color: #f39c12; cursor: pointer; margin-left: 15px;" title="Editar" data-toggle="modal" data-target="#modaleditar"></i>';
                                                    }
                                                    if (strpos($permission,'Del') !== false) {
                                                    echo '<i class="fa fa-fw fa-times-circle" style="color: #dd4b39; cursor: pointer; margin-left: 15px;"></i>';
                                                    }
                                                    if (strpos($permission,'View') !== false) {
                                                    echo '<i class="fa fa-fw fa-search" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" title="Ver Nota Pedido" data-toggle="modal" data-target="#modaltarea"></i>';
                                                    }
                                                    echo '</td>';
                                                    echo '<td style="text-align: center">'.$pedidoRep['id_ordTrabajo'].'</td>';
                                                    echo '<td style="text-align: center">'.$pedidoRep['descripcion'].'</td>';
                                                    echo '<td style="text-align: center">'.$pedidoRep['fecha'].'</td>';
                                                    // echo '<td style="text-align: center">'.$pedidoRep['marcadescrip'].'</td>';
                                                    // echo '<td style="text-align: center">'.$pedidoRep['depositodescrip'].'</td>';
                                                    // echo '<td style="text-align: center">'.($pedidoRep['equip_estad']  == 'AC' ? '<small class="label pull-left bg-green" >Activa</small>' :'<small class="label pull-left bg-blue">Transito</small>').'</td>';
                                                echo '</tr>';
                                                }*/
                                                ?>
                                            </tbody>
                                            </table>
                                        </div>
                                        </div><!-- ./tab-pane -->

                                        <div role="tabpanel" class="tab-pane" id="profile">
                                            <div class="panel-body">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">Comentarios</div>
                                                    <div class="panel-body" style="max-height: 500px;overflow-y: scroll;">
                                                        <ul id="listaComentarios">
                                                            <?php 
                                                        foreach($comentarios as $f){
        
                                                            if(strcmp($f['userId']['userName'],'System')!=0){
                                                            echo '<hr/>';
                                                            echo '<li><h4>'.$f['userId']['firstname'].' '.$f['userId']["lastname"].'<small style="float: right">'.date_format(date_create($f['postDate']),'H:i  d/m/Y').'</small></h4>';
                                                            echo '<p>'.$f['content'].'</p></li>';
                                                            }
                                                        }
                                                    ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <textarea id="comentario" class="form-control" placeholder="Nuevo Comentario..."></textarea>
                                                <br />
                                                <button class="btn btn-primary" id="guardarComentario" onclick="guardarComentario()">Agregar</button>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="messages">
                                            <div class="panel-body">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">Línea de Tiempo</div>
                                                    <div class="panel-body" style="max-height: 500px;overflow-y: scroll;">
                                                        <style type="text/css">
                                                            .timeline {
                                                                list-style: ;
                                                                padding: 0 0 20px;
                                                                position: relative;
                                                                margin-top: -15px;
                                                                margin-left: 70px;
                                                            }

                                                            .timeline:before {
                                                                top: 30px;
                                                                bottom: 25px;
                                                                position: absolute;
                                                                content: " ";
                                                                width: 3px;
                                                                background-color: #ccc;
                                                                left: 25px;
                                                                margin-right: -1.5px
                                                            }

                                                            .timeline>li,
                                                            .timeline>li>.timeline-panel {
                                                                margin-bottom: 5px;
                                                                position: relative
                                                            }

                                                            .timeline>li:after,
                                                            .timeline>li:before {
                                                                content: " ";
                                                                display: table
                                                            }

                                                            .timeline>li:after {
                                                                clear: both
                                                            }

                                                            .timeline>li>.timeline-panel {
                                                                margin-left: 55px;
                                                                float: left;
                                                                top: 19px;
                                                                padding: 4px 10px 8px 15px;
                                                                border: 1px solid #ccc;
                                                                border-radius: 5px;
                                                                width: 45%
                                                            }

                                                            .timeline>li>.timeline-badge {
                                                                color: #fff;
                                                                width: 36px;
                                                                height: 36px;
                                                                line-height: 36px;
                                                                font-size: 1.2em;
                                                                text-align: center;
                                                                position: absolute;
                                                                top: 26px;
                                                                left: 9px;
                                                                margin-right: -25px;
                                                                background-color: #fff;
                                                                z-index: 100;
                                                                border-radius: 50%;
                                                                border: 1px solid #d4d4d4
                                                            }

                                                            .timeline>li.timeline-inverted>.timeline-panel {
                                                                float: left
                                                            }

                                                            .timeline>li.timeline-inverted>.timeline-panel:before {
                                                                border-right-width: 0;
                                                                border-left-width: 15px;
                                                                right: -15px;
                                                                left: auto
                                                            }

                                                            .timeline>li.timeline-inverted>.timeline-panel:after {
                                                                border-right-width: 0;
                                                                border-left-width: 14px;
                                                                right: -14px;
                                                                left: auto
                                                            }

                                                            .timeline-badge.primary {
                                                                background-color: #2e6da4 !important
                                                            }

                                                            .timeline-badge.success {
                                                                background-color: #3f903f !important
                                                            }

                                                            .timeline-badge.warning {
                                                                background-color: #f0ad4e !important
                                                            }

                                                            .timeline-badge.danger {
                                                                background-color: #d9534f !important
                                                            }

                                                            .timeline-badge.info {
                                                                background-color: #5bc0de !important
                                                            }

                                                            .timeline-title {
                                                                margin-top: 0;
                                                                color: inherit
                                                            }

                                                            .timeline-body>p,
                                                            .timeline-body>ul {
                                                                margin-bottom: 0;
                                                                margin-top: 0
                                                            }

                                                            .timeline-body>p+p {
                                                                margin-top: 5px
                                                            }

                                                            .timeline-badge>.glyphicon {
                                                                margin-right: 0px;
                                                                color: #fff
                                                            }

                                                            .timeline-body>h4 {
                                                                margin-bottom: 0 !important
                                                            }
                                                        </style>

                                                        <div class="container">
                                                            <ul class="timeline">
                                                                <?php
                                                                echo '<h2 style="margin-left:50px;">Actividades Pendientes</h2>';
                                                                foreach ($timeline['listAct'] as $f) {       
                                                                echo '<li>
                                                                    <div class="timeline-badge info"><i class="glyphicon glyphicon-time"></i></div>
                                                                    <div class="timeline-panel">
                                                                        <div class="timeline-heading">
                                                                        <h4 class="timeline-title">'.$f['displayName'].'</h4>
                                                                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> '.date_format(date_create($f['last_update_date']),'H:i  d/m/Y').'</small></p>
                                                                        </div>
                                                                        <div class="timeline-body">';
                                                                        if(array_key_exists ( 'assigned_id' , $f ) && $f['assigned_id']!=''){
                                                                            echo '<p>Usuario: '.$f['assigned_id']['firstname'].' '.$f['assigned_id']['lastname'].'</p>';
                                                                        }else{
                                                                            echo '<p>Usuario: Sin Asignar</p>';
                                                                        }
                                                                echo   '<p>Descripción: '.$f['displayDescription'].'</p>
                                                                        <p>Case: '.$f['caseId'].'</p>
                                                                        </div>
                                                                    </div>
                                                                    </li>';
                                                                }
                                                                echo '<h2 style="margin-left:50px;">Actividades Terminadas</h2>';
                                                                foreach ($timeline['listArch'] as $f) {

                                                                echo '<li>
                                                                    <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                                                                    <div class="timeline-panel">
                                                                        <div class="timeline-heading">
                                                                        <h4 class="timeline-title">'.$f['displayName'].'</h4>
                                                                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> '.date_format(date_create($f['last_update_date']),'H:i  d/m/Y').'</small></p>
                                                                        </div>
                                                                        <div class="timeline-body">';
                                                                        if(array_key_exists ( 'assigned_id' , $f )){
                                                                            echo '<p>Usuario: '.$f['assigned_id']['firstname'].' '.$f['assigned_id']['lastname'].'</p>';
                                                                        }else{
                                                                            echo '<p>Usuario: Sin Asignar</p>';
                                                                        }
                                                                echo    '<p>Descripción: '.$f['displayDescription'].'</p>           
                                                                        <p>Case: '.$f['caseId'].'</p>
                                                                        </div>
                                                                    </div>
                                                                    </li>';
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div><!-- /.row -->

                    <div class="modal-footer">
                        <button type="button" id="cerrar" class="btn btn-primary" onclick="cargarVista()">Cerrar</button>
                        <button type="button" class="btn btn-success" id="hecho" onclick="terminarTarea()">Hecho</button>
                    </div> <!-- /.modal footer -->

                </div><!-- /.box body -->
            </div> <!-- /.box  -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->




<div class="modal fade bs-example-modal-lg" id="modalForm" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <?php
                                    if($form != ''){
                                        cargarFormulario($form);
                                    }                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal forms tareas a revisar -->
<div class="modal fade" id="modalRevDiagCoord" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" id="modalBodyRevDiagCoord">

            </div><!-- /.modal-body -->
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog modal-lg -->
</div> <!-- /.modal fade -->
<!-- / Modal -->

<script>
    function GuardarValorInfoTecnico() {
        var idForm = $('#form_id').val();
        var idPed = $('#idPedTrabajo').val();
        $.ajax({
            url: 'index.php/Tarea/GuardarValorInfoTecnico',
            type: 'POST',
            data: { 'PETR_ID': idPed, 'FORM_ID': idForm },
            success: function (respuesta) {
                WaitingClose();
            },
            error: function (respuesta) {
                WaitingClose();
                alert("Error");

            }
        });
    }
</script>

<script>
     var articulos;
  function getArticulos() {
    $.ajax({
      async:false,
      dataType: 'json',
      type: 'POST',
      url: 'index.php/Notapedido/getArticulo',
      success: function(data){
        //console.log(data[0]);
        articulos = data;
      },
      error: function(result){
        console.error(result);
      },
    });
  }

  traerPedidosRep();
  function traerPedidosRep(){
    var idOT = $('#tbl_diagnosticos').find("td:first a").attr("data-idOt");
    console.info("id OT: "+idOT);
    $.ajax({
      data: { idOT:idOT },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/Notapedido/verPedidoRepuestos',
      success: function(data){
        // console.table(data['lista']);
        // console.table(data['proveedores']);
        // console.table(data['articulos']);

        $('#pedidoRepuestos tr.celdas').remove();
        for (var i = 0; i < data['lista'].length; i++) {
          //proveedores
          proveedorId = data['lista'][i]['provid'];//
          //console.log(proveedorId);
          indexP = data['proveedores'].map((o) => o.provid).indexOf(proveedorId);
          //console.log(indexP);

          //articulos
          articuloId = data['lista'][i]['artId'];//1
          //console.log(articuloId);
          indexA = data['articulos'].map((o) => o.value).indexOf(articuloId);
          //console.log(indexA);

          var tr = "<tr class='celdas' id="+data['lista'][i]['id_detaNota']+">"+
            "<td>"+
            //permisos editar
            "<a href='#' title='Editar Pedido de Repuestos' class='editRepuestos'><i class='fa fa-edit' style='cursor: pointer; margin-left: 15px;'></i></a>"+
            //permisos eliminar
            "<a href='#' title='Eliminar Pedido de Repuestos' class='delRepuestos'><i class='fa fa-times-circle' style='cursor: pointer; margin-left: 15px;'></i></a>"+
            //permisos de ver (igual que toda la info!!! jaja)
            //"<a href='#' title='Ver Pedido de Repuestos' class='viewRepuestos'><i class='fa fa-search' style='cursor: pointer; margin-left: 15px;'></i></a>"+

            "</td>"+
            "<td>"+data['lista'][i]['id_notaPedido']+"</td>"+
            "<td>"+data['articulos'][indexA]['label']+"</td>"+
            "<td data-artId='"+data['lista'][i]['artId']+"'>"+data['articulos'][indexA]['descripcion']+"</td>"+
            "<td data-provid='"+data['lista'][i]['provid']+"'>"+data['proveedores'][indexP]['provnombre']+"</td>"+
            "<td>"+data['lista'][i]['cantidad']+" | "+data['lista'][i]['medida']+"</td>"+
            "<td>"+data['lista'][i]['fechaEntrega']+"</td>"+
            "</tr>";
          $('#pedidoRepuestos tbody').append(tr);
        }
      },
      error: function(){
        console.error("error al traer pedido de repuestos");
      },
    });
  }


  // Agrega repuestos (nota de pedido) X ORDEN DE TRABAJO!!! (temporal)
  $('.addRepuestos').click( function(e){
    e.preventDefault();
    e.stopImmediatePropagation();

    WaitingOpen();
    var ordenId   = $(this).attr("data-ordenId");
    var ordenDesc = $(this).attr("data-ordenDesc");
    $.ajax({
      data: { id : ordenId, desc: ordenDesc },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/Notapedido/addEditNotaPedido/<?php echo $permission; ?>',
      success: function(result){

        WaitingClose();
        $("#modaltitle").html("Agregar");
        $("#modalBodyRepuestos").html(result.html);
        $('#modalRepuestos').modal('show');
      },
      error: function(){
        WaitingClose();
        alert("error");
      },
    });
  });

  //Eiminar Pedido de Repuestos ¿y orden de repuestos?
  $(document).on('click', '.delRepuestos', function(e){
    e.preventDefault();
    e.stopImmediatePropagation();
    $('#modalEliminarRepuesto').modal('toggle');   
  });

  function Eliminar_Repuestos(){
    var id_detaNota   = $('.delRepuestos').parent('td').parent('tr').attr('id');
    var id_notaPedido = $('.delRepuestos').parents("tr").find("td").eq(1).html();
    console.log(id_detaNota+' - '+id_notaPedido);
    $.ajax({
      data: { id_detaNota: id_detaNota, id_notaPedido:id_notaPedido },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/Notapedido/delDetaNotaPedido', //index.php/
      success: function(data){
        console.info("Repuesto eliminado Eliminado");
        $('#modalEliminarRepuesto').modal('hide');  
        traerPedidosRep();
      },
      error: function(result){
        console.error(result);
        $('#modalEliminarRepuesto').modal('hide');  
      },
    });
  }

  //editar Pedido de Repuestos
  $(document).on('click', '.editRepuestos', function(e){
    e.preventDefault();
    e.stopImmediatePropagation();

    console.log("Estoy editando");
    var id_detaNota   = $(this).parent('td').parent('tr').attr('id');
    var id_notaPedido = $(this).parents("tr").find("td").eq(1).html();
    console.info("id_detaNota: "+id_detaNota);
    console.info("id_notaPedido: "+id_notaPedido);
    $.ajax({
      data: { id_detaNota:id_detaNota, id_notaPedido:id_notaPedido },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/Notapedido/editDetaNotaPedido',
      success: function(result){
        WaitingClose();
        $("#modaltitle").html("Editar");
        $("#modalBodyRepuestos").html(result.html);
        $('#modalRepuestos').modal('show');
      },
      error: function(){
        WaitingClose();
        console.error("error");
      },
    });
  });

  var formularios = <?php echo json_encode($formularios) ?>;
</script>

<!-- Modal Agregar Pedido de Repuesto -->
<div class="modal fade" id="modalRepuestos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"  id="myModalLabel"><span id="modaltitle">Agregar</span> Pedido de Repuestos</h4>
            </div> <!-- /.modal-header  -->

            <div class="modal-body" id="modalBodyRepuestos">

            </div><!-- /.modal-body -->

        </div> <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->

<div class="modal" id="modalEliminarRepuesto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-times-circle" style="color: #3C8DBB" > </span> Eliminar Pedido Repuesto </h4>
        </div> 
        <center>
        <h4>¿Confirma Eliminar el Pedido del Repuesto?</h4>
        </center>
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
          <button  type="button" class="btn btn-primary" data-dismiss="modal" onclick="javascript:Eliminar_Repuestos()" >Eliminar</button> 
        </div>   
    </div>  
  </div>
</div>