<input type="hidden" id="permission" value="<?php echo $permission;?>">

<section class="content">
    <?php echo cargarCabecera($idPedTrabajo); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                        data-toggle="tab">Tareas</a></li>
                                <li role="presentation"><a href="#comentarios" aria-controls="comentarios" role="tab"
                                        data-toggle="tab">Comentarios</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                        data-toggle="tab">Vista Global</a></li>
                                <li role="presentation" class="hidden"><a href="#settings" aria-controls="settings" role="tab"
                                        data-toggle="tab">Pedido de Repuestos</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <!-- <h4 class="panel-heading">Tarea</h4> -->
                                    <div class="panel-body">
                                        <?php
                
            

                    echo "<button class='btn btn-block btn-success' id='btontomar' style='width: 100px; margin-top: 10px ;display: inline-block;".($TareaBPM["assigned_id"]!=null?'display:none;':null)."' onclick='tomarTarea()'>Tomar tarea</button>";
                    //}else{
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "&nbsp";
                    echo "<button class='btn btn-block btn-danger grupNoasignado' id='btonsoltr' style='width: 100px; margin-top: 10px; display: inline-block;".($TareaBPM["assigned_id"]==null?'display:none;':null)."' onclick='soltarTarea()'>Soltar tarea</button>";
                    //}
                    echo "</br>";
                    echo "</br>";

                    $userdata    = $this->session->userdata('user_data');
                    $usrId       = $userdata[0]['usrId'];     // guarda usuario logueado
                    $usrName     = $userdata[0]['usrName'];
                    $usrLastName = $userdata[0]["usrLastName"];

                    echo "<input type='text' class='hidden' id='usrName' value='$usrName' >";
                    echo "<input type='text' class='hidden' id='usrLastName' value='$usrLastName' >";
                    ?>

                                        <input type="text" class="form-control hidden" id="asignado"
                                            value="<?php echo $TareaBPM["assigned_id"] ?>">
                                        <input type="text" class="hidden" id="idPedTrabajo"
                                            value="<?php echo $idPedTrabajo ?>">
                                        <form>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4>INFORMACION:</h4>
                                                </div>

                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-6">
                                                                <label for="tarea">Tarea</label>
                                                                <input type="text" class="form-control" id="tarea"
                                                                    value="<?php echo $TareaBPM['displayName'] ?>"
                                                                    disabled><!-- id de listarea -->
                                                                <input type="text" class="hidden" id="tbl_listarea"
                                                                    value="<?php echo $datos[0]['id_listarea'] ?>">
                                                                <input type="text" class="hidden" id="idform"
                                                                    value="<?php echo $idForm ?>">
                                                                <!-- id de task en bonita -->
                                                                <input type="text" class="hidden" id="idTarBonita"
                                                                    value="<?php echo $idTarBonita ?>">
                                                            </div>

                                                            <div class="col-xs-12 col-sm-6">
                                                                <label for="fecha">Fecha de Creación</label>
                                                                <input type="text" class="form-control" id="fecha"
                                                                    placeholder=""
                                                                    value="<?php echo $TareaBPM['last_update_date'] ?>"
                                                                    disabled>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-6 ">
                                                                <label for="ot ">Orden de Trabajo:</label>
                                                                <input type="text " class="form-control " id="ot" placeholder=" " value="<?php echo $list["0"]["id_orden"] ?>" disabled>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-6">
                                                                <label for="duracion_std">Duracion Estandar
                                                                    (minutos):</label>
                                                                <input type="text" class="form-control"
                                                                    id="duracion_std" placeholder=""
                                                                    value="<?php echo $datos[0]['duracion_std']  ?>"
                                                                    disabled>
                                                            </div>

                                                            <div class="col-xs-12">
                                                                <label for="detalle">Detalle</label>
                                                                <textarea class="form-control" id="detalle" rows="3"
                                                                    disabled><?php echo $TareaBPM['displayDescription']?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <table id="tbl_diagnosticos"
                                                        class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Acciones</th>
                                                                <th>Id Tarea Trazalog</th>
                                                                <th>Id listarea</th>
                                                                <th>Tarea</th>
                                                                <th>Subsector</th>
                                                                <th>Usuario</th>
                                                                <th>Estado</th>
                                                                <th>Rehacer</th>
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
                                echo '<a href="#" title="Mostrar formulario de tarea" class="'.($f['form_asoc']==''?'no_form':'getFormularioTarea').'" data-formid="'.$f['form_asoc'].'" data-open="false" data-validado="false" data-bpmIdTarea="'.$f['bpm_task_id'].'" data-idListTarea="'.$f['id_listarea'].'" data-idOt="'.$f['id_orden'].'"><i class="fa fa-eye '.($f['form_asoc']==''?'hidden':'').'" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                      //echo '<a href="#" class="addRepuestos" title="Cargar Pedido de Repuestos" data-ordenDesc="'.$f['orden_descripcion'].'" data-ordenId="'.$f['id_orden'].'"><i class="fa fa-plus" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                      //echo '<a href="#" class="rehacerTarea" title="Rehacer Tarea" data-treaId="'.$f['id_listarea'].'"><i class="fa fa-mail-reply" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                echo '</td>';
                                echo '<td class="celda">'.$f['id_tarea'].'</td>';
                                echo '<td class="celda">'.$f['id_listarea'].'</td>';
                                echo '<td class="celda tareaDesc" title="ID Tarea: '.$f['id_tarea'].'">'.substr($f['tareadescrip'],0,500).'</td>';
                                echo '<td class="celda">'.$f['subsector_descripcion'].'</td>';
                                echo '<td class="celda">'.$f['id_usuario'].'</td>';
                                echo '<td class="celda">'.$f['estado'].'</td>';
                                echo '<td class="celda"><input type="checkbox" name="rehacerTarea[]" value="'.$f['id_listarea'].'"></td>';
                                echo '</tr>';
                              }
                              ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <!-- Modal formulario tarea -->
                                                        <?php
                         
                                            if($idForm != 0){echo '<button type="button" id="formulario" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bs-example-modal-lg" data-validado="false" onclick="getformulario()">Adjuntar Archivos</button>';}?>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- ./panel-body -->
                                </div><!-- ./tab-pane -->

                                <div role="tabpanel" class="tab-pane" id="comentarios">
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
                                        <textarea id="comentario" class="form-control"
                                            placeholder="Nuevo Comentario..."></textarea>
                                        <br />
                                        <button class="btn btn-primary" id="guardarComentario"
                                            onclick="guardarComentario()">Agregar</button>
                                    </div>
                                </div><!-- ./tab-pane -->

                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="panel-body">
                                        <div class="panel panel-primary">
                                            <?php echo $timeline ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- ./tab-pane -->

                        <div role="tabpanel" class="tab-pane hidden" id="settings">
                            <div class="panel-body">
                             
                            </div>
                        </div><!-- ./tab-pane -->
                    </div><!-- ./tab-content -->

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" id="cerrar" class="btn btn-primary" onclick="cargarVista()">Cerrar</button>
                <button type="button" class="btn btn-success" id="hecho"
                    onclick="terminarTareaRevision()">Hecho</button>
            </div> <!-- /.modal footer -->

        </div><!-- /.box-body -->

    </div><!-- /.box -->
    </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->


<!-- Validacion de Formularios -->
<script>
IniciarValidador("genericForm");

function IniciarValidador(idForm) {
    $('#' + idForm).bootstrapValidator({ //VALIDADOR
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fecha: {
                selector: '.fecha',
                validators: {
                    date: {
                        format: 'DD-MM-YYYY',
                        message: '(*) Formato de Fecha Inválido'
                    }
                }
            },
            number: {
                selector: '.numerico',
                validators: {
                    integer: {
                        message: '(*) Solo Valores Numéricos'
                    }
                }
            }

        }
    }).on('success.form.bv', function(e) {
        // Prevent form submission

        e.preventDefault();
        guardarFormulario(true);

    });
}

// $('#modalForm').on('hidden.bs.modal', function (e) {
// guardarFormulario(false);
// });

function CerrarModal() {
    $('#modalRevDiagCoord').modal('hide');
    $('#modalForm').modal('hide');
    WaitingOpen('Guardando Cambios');
    guardarFormulario(false);
}


function ValidarCampos() {
    WaitingOpen('Validando Formulario');
    $('#' + form_actual_id).data('bootstrapValidator').validate();
    if (!$('#' + form_actual_id).data('bootstrapValidator').isValid()) {
        alert('Error de Validación.\nCompruebe que los Datos esten cargados Correctamente.');
        WaitingClose();
    }
}

function OcultarModal() {
    $('#' + form_actual_id).data('bootstrapValidator').resetForm();
    // $('#modalRevDiagCoord').modal('hide');
    // $('#modalForm').modal('hide');
    guardarFormulario(false);
    form_actual_id = '';
}

function guardarFormulario(validarOn) {
    console.log("Guardando Formulario..." + form_actual_id);
    var imgs = $('input.archivo');

    var formData = new FormData($("#" + form_actual_id)[0]);
    var i = 0;
    // for (var value of formData.values()) {
    //   console.log(i+':'+value); 
    //   i++;
    // }

    /** subidad y resubida de imagenes **/
    // Tomo los inputs auxiliares cargados
    var aux = $('input.auxiliar');

    var auxArray = [];
    aux.each(function() {
        auxArray.push($(this).val());
    });
    //console.table(aux);
    for (var i = 0; i < imgs.length; i++) {

        var inpValor = $(imgs[i]).val();
        var idValor = $(imgs[i]).attr('name');
        //console.log("idValor: "+idValor);
        // si tiene algun valor (antes de subir img)
        if (inpValor != "") {
            //al subir primera img
            formData.append(idValor, inpValor);
        } else {
            // sino sube img guarda la del auxiliar         
            //inpValor = auxArray[i]; //valor del input auxiliar
            //console.table(inpValor);
            //formData.append(idValor, inpValor);
        }
    }

    /* text tipo check */
    var check = $('input.check');
    //console.log("aux");
    //console.table(aux);
    var checkArray = [];
    // check.each(function() {
    //     checkArray.push($(this).val());
    // });
    //console.log('array de chech: ');
    //console.table(checkArray);

    for (var i = 0; i < check.length; i++) {
        //var chekValor = $(check[i]).val();
        var idCheckValor = $(check[i]).attr('name');
        //console.log('valor: ');
        //console.log(idCheckValor);
        if ($(check[i]).is(':checked')) {
            chekValor = 'tilde';
        } else {
            chekValor = 'notilde';
        }
        formData.append(idCheckValor, chekValor);
    }
    // console.log('array de chech: ');
    // console.table(check);

    /* Ajax de Grabado en BD */
    $.ajax({
        url: 'index.php/Tarea/guardarForm',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,

        success: function(respuesta) {
            console.log(form_actual_id + "...OK");
            WaitingClose();
            linkTo();
           
        } 
    });
}

function ValidarObligatorios(validarOn) {
    console.log("Validando Campos Obligatorios..." + form_actual_id);

    var petr_id = $('#idPedTrabajo').val();
    var form_id = form_actual_data.attr('data-formid');
    $.ajax({
        type: 'POST',
        data: {
            'form_id': form_id,
            'petr_id': petr_id
        },
        url: 'index.php/Tarea/ValidarObligatorios',
        success: function(result) {
            console.log(form_actual_id + "...OK");
            WaitingClose();
            var validado = (result == 1);
            form_actual_data.attr('data-validado', validado);
            if (!validarOn) return;
            if (validado) {
                $('#modalForm').modal('hide');
                $('#modalRevDiagCoord').modal('hide');
            } else {
                alert(
                    "Fallo Validación: Campos Obligatorios Incompletos. Por favor verifique que todos los campos obligatorios marcados con (*) esten completos.");
            }
            //WaitingClose();
        },
        error: function(result) {
            alert("Fallo la Validación del formularios en el Servidor. Por favor vuelva a intentar.");
        }
    });
}
</script>
<script>
evaluarEstado();

function evaluarEstado() {
    var asig = $('#asignado').val();
    // si esta tomada la tarea
    if (asig != "") {
        habilitar();
    } else {
        deshabilitar();
    }
}

function habilitar() {
    // habilito btn y textarea
    $("#btonsoltr").show();
    $("#hecho").show();
    $("#guardarComentario").show();
    $("#comentario").show();
    //desahilito btn tomar
    $("#btontomar").hide();
    $("#formulario").show();
}

function deshabilitar() {
    // habilito btn tomar
    $("#btontomar").show();
    // habilito btn y textarea
    $("#btonsoltr").hide();
    $("#hecho").hide();
    $("#guardarComentario").hide();
    $("#comentario").hide();
    $("#formulario").hide();
}

// Volver al atras
$('#cerrar').click(function cargarVista() {
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
    WaitingClose();
});

/* Funciones BPM */
//Ckeck Tarea realizada
$('.btncolor').click(function(e) {
    //var id = <?php //echo $idorden?>; //tomo valor de id_orden
    console.log(id);
    var id_tarea = $(this).parents('tr').find('td').eq(1).html();
    console.log("Estoy finalizando una tarea");
    $.ajax({
        type: 'POST',
        data: {
            id_tarea: id_tarea,
        }, //Id tarea
        url: 'index.php/Taller/TareaRealizada', //index.php/
        success: function(data) {
            console.log(data);
            //alert("Se Finalizando la SUBTAREA");
            refresca(id);
        },
        error: function(result) {
            console.log(result);
            alert("NO se Finalizo la SUBTAREA");
            refresca(id);
        }
    });
});

function terminarTarea() {
    // if(!validado){alert("Para concluir esta actividad primero debe Validar el Formulario");return;}

    var idTarBonita = $('#idTarBonita').val();
    // alert(idTarBonita);
    $.ajax({
        type: 'POST',
        data: {
            'idTarBonita': idTarBonita,
        },
        url: 'index.php/Tarea/terminarTarea',
        success: function(data) {
            // toma a tarea exitosamente
            WaitingClose();
            if (data['reponse_code'] == 204) {
                $("#content").load(
                    "<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
            }
        },
        error: function(data) {
            //alert("Noo");
            console.table(data);
        },
        dataType: 'json'
    });
}
// Boton Hecho generico
function estado() {
    var idTarBonita = $('#idTarBonita').val();
    $.ajax({
        type: 'POST',
        data: {
            'idTarBonita': idTarBonita,
        },
        url: 'index.php/Tarea/estadoCuenta',
        success: function(result) {
            console.log(result);
            // alert("SII");
        },
        error: function(result) {
            //alert("Noo");
            console.log(result);
        },
        dataType: 'json'
    });
}
//Funcion COMENTARIOS
function guardarComentario() {
    console.log("Guardar Comentarios...");
    var id = <?php echo json_encode($TareaBPM['caseId']);?>;
    var nombUsr = $('#usrName').val();
    var apellUsr = $('#usrLastName').val();;
    var comentario = $('#comentario').val();
    $.ajax({
        type: 'POST',
        data: {
            'processInstanceId': id,
            'content': comentario
        },
        url: 'index.php/Tarea/GuardarComentario',
        success: function(result) {
            console.log("Submit");
            var lista = $('#listaComentarios');
            lista.prepend(' <hr/><li><h4>' + nombUsr + ' ' + apellUsr +
                '<small style="float: right">Hace un momento</small></h4><p>' + comentario + '</p></li>'
                );
            $('#comentario').val('');
        },
        error: function(result) {
            console.log("Error");
        }
    });
}
// Toma tarea en BPM
function tomarTarea() {
    var idTarBonita = $('#idTarBonita').val();
    //alert(idTarBonita);
    $.ajax({
        type: 'POST',
        data: {
            idTarBonita: idTarBonita
        },
        url: 'index.php/Tarea/tomarTarea',
        success: function(data) {
            //console.log(data['reponse_code']);
            // toma a tarea exitosamente
            if (data['reponse_code'] == 200) {
                habilitar();
            }
        },
        error: function(result) {
            console.log(result);
        },
        dataType: 'json'
    });
}
// Soltar tarea en BPM
function soltarTarea() {
    var idTarBonita = $('#idTarBonita').val();
    //alert(idTarBonita);
    $.ajax({
        type: 'POST',
        data: {
            idTarBonita: idTarBonita
        },
        url: 'index.php/Tarea/soltarTarea',
        success: function(data) {
            console.log(data['reponse_code']);
            // toma a tarea exitosamente
            if (data['reponse_code'] == 200) {
                deshabilitar();
            }
        },
        error: function(result) {
            console.log(result);
        },
        dataType: 'json'
    });
}

/** Formulario **/

var click = 0;
$('#formulario').click(function() {
    click = 1;
});




// trae valores validos para llenar form asoc.
function getformulario(event) {
    console.log("Obteniendo Formulario...");

    form_actual_data = $('#formulario');
    form_actual_id = 'genericForm';
    // llena form una sola vez al primer click
    if (click == 0) {
        var estadoTarea = $('#estadoTarea').val();
        // toma id de form asociado a listarea en TJS
        var idForm = $('#idform').val();
        console.log('id de form: ' + idForm);

        // guarda el id form asoc a tarea std en modal para guardar
        $('#idformulario').val(idForm);

        // trae valores validos para llenar componentes de form asoc.
        $.ajax({
            type: 'POST',
            data: {
                idForm: idForm
            },
            url: 'index.php/Tarea/getValValido',
            success: function(data) {
                console.log('valores de componentes: ');
                console.table(data);
                llenaComp(data);
            },
            error: function(result) {
                console.log(result);
            },
            dataType: 'json'
        });
    }
}

function getformularioDiag() {
    console.log("Obteniendo Formulario Diagnostico...");

    // llena form una sola vez al primer click
    if (click == 0) {
        var estadoTarea = $('#estadoTarea').val();
        // toma id de form asociado a listarea en TJS
        var idForm = $(form_actual_data).attr("data-formid")

        // guarda el id form asoc a tarea std en modal para guardar
        $('#idformulario').val(idForm);

        // trae valores validos para llenar componentes de form asoc.
        $.ajax({
            type: 'POST',
            data: {
                idForm: idForm
            },
            url: 'index.php/Tarea/getValValido',
            success: function(data) {
                console.log('valores de componentes: ');
                console.table(data);
                llenaComp(data);
            },
            error: function(result) {
                console.log(result);
            },
            dataType: 'json'
        });
    }
}

// llena los componentes de form asoc con valores validos
function llenaComp(data) {

    var id_listarea = $('#tbl_listarea').val();
    $('#id_listarea').val(id_listarea);


    $.each(data, function(index) {
        //$( "#" + i ).append(  );
        var idSelect = data[index]['idValor'];
        // console.log('idvalor: '+ data[index]['idValor'] + '-- valor: ' + data[index]['VALOR']);
        var i = 0;
        var valor = "";
        var valorSig = "";

        if (data[index]['VALOR'] != $('#' + idSelect).val()) {
            $('#' + idSelect).append($('<option>', {
                value: data[index]['VALOR'],
                text: data[index]['VALOR']
            }));
        }
        valor = data[index]['idValor'];
        valorSig = data[index]['idValor'];
    });
}

//Trae valor de las imagenes
function getImgValor() {
    var valores;
    // guarda el id form asoc a tarea std en modal para guardar
    idForm = $('#idform').val();
    // trae valores validos para llenar componentes input files.
    $.ajax({
        type: 'POST',
        data: {
            idForm: idForm
        },
        url: 'index.php/Tarea/getImgValor',
        success: function(data) {

            valores = data;
            llenarInputFile(valores);
        },
        error: function(result) {

            console.log(result);
        },
        dataType: 'json'
    });
}

// carga inputs auxiliares con url de imagen desde BD
function llenarInputFile(data) {
    var id_listarea = $('inptut.archivo').val();

    $.each(data, function(index) {

        var id = data[index]['valoid'];
        var valor = data[index]['valor'];
        //carga el valor que viene de DB
        $("." + data[index]['valoid']).val(valor);
        //$("#"+data[index]['valoid']).val(valor);
    });
}

// Validacion de campos obligatorios y vacios
function validarFormGuardado() {

    var id_listarea = $('#id_listarea').val();
    console.log(id_listarea);
    var oblig = $('.requerido');
    //console.log("oblig");
    //console.table(oblig);
    var obligArrayIds = [];
    oblig.each(function() {
        obligArrayIds.push($(this).attr('name'));
    });
    //console.log('obligatorios: ');
    //console.log(obligArray),
    $.ajax({
        type: 'POST',
        data: {
            obligArrayIds: obligArrayIds,
            id_listarea: id_listarea
        },
        url: 'index.php/Tarea/validarFormGuardado',
        success: function(data) {
            console.log('por sucess: ');
            console.log(data);
            if (data == false) {
                $('#error').fadeIn('slow');
            } else {
                $('#error').fadeOut('slow');
            }

        },
        error: function(result) {
            console.log('por error: ');
            console.log(data);
            console.log(result);
        },
        dataType: 'json'
    });
}

$('.fecha').datepicker({
    autoclose: true
}).on('change', function(e) {
    // $('#genericForm').bootstrapValidator('revalidateField',$(this).attr('name'));
    console.log('Validando Campo...' + $(this).attr('name'));
    $('#genericForm').data('bootstrapValidator').resetField($(this), false);
    $('#genericForm').data('bootstrapValidator').validateField($(this));
});

var form_actual_id = '';
var form_actual_data = '';
//Lama al formulario de cada tarea
$('.getFormularioTarea').click(function() {
    console.log("Get Formularios Tarea...");
    form_actual_data = $(this);
    WaitingOpen();
    form_actual_data.attr("data-open", "true");
    var bpmIdTarea = form_actual_data.attr("data-bpmIdTarea");
    var idListTarea = form_actual_data.attr("data-idListTarea");
    $('#idformulario').val(form_actual_data.attr("data-formid"));
    //alert($('#idformulario').val());

    console.info("idTarea: " + bpmIdTarea);
    console.info("idListTarea: " + idListTarea);
    $.ajax({
        data: {
            idTareaRevisionB: bpmIdTarea,
            id_listarea: idListTarea
        },
        dataType: 'json',
        type: 'POST',
        url: 'index.php/Tarea/detaTareaRevisionDiagnosticoCoordinador',
        success: function(result) {
            form_actual_id = 'genericForm' + idListTarea;

            $("#modalBodyRevDiagCoord").html(result.html);
            IniciarValidador(form_actual_id);
            getformularioDiag();
            $('#modalRevDiagCoord').modal('show');
            WaitingClose();
        },
        error: function(result) {
            WaitingClose();
            alert("Error: No se pudo obtener el Formulario");
        },
    });
});


function terminarTareaRevision() {
    // 
    var ban = true;
    // $('.getFormularioTarea').each(function( index ) {
    //   if($( this ).attr('data-open')=="true"){
    //     console.log( index + ": " + $( this ).attr('data-validado'));
    //     ban = ban && ($( this ).attr('data-validado') == "true");
    //   }
    // });
    // ban = ban && ($('#formulario').attr('data-validado') == "true");
    if (ban == false) {
        alert("Para concluir esta actividad primero debe Validar el Formulario");
        return;
    }
    WaitingOpen('Cerrando Tarea');
    var idsTareaTrazajob = [];
    $("input[name='rehacerTarea[]']:checked").each(function() {
        idsTareaTrazajob.push(parseInt($(this).val()));
    });
    //esto en teoria hace lo mismo
    //var idsTareaTrazajob = $.map($('input:checkbox:checked'), (e) => +e.value);
    idTarBonita = $('#idTarBonita').val();
    //console.table(idsTareaTrazajob);
    //console.log(idTarBonita);
    $.ajax({
        data: {
            idsTareaTrazajob: idsTareaTrazajob,
            idTarBonita: idTarBonita
        },
        dataType: 'json',
        type: 'POST',
        url: 'index.php/Tarea/rehacerTareaIds',
        success: function(data) {
            if (data["reponse_code"] == 204) {
                console.info("Llama a terminar tarea - con rehacer");
                console.table(data);
                terminarTarea();
                //redirecciona a listado de tareas
                $('#content').empty();
                $("#content").load(
                    "<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
                WaitingClose();
            }
        },
        error: function(data) {
            //WaitingClose();
            console.info("ERROR EN Llama a terminar tarea - con rehacer");
            console.info(data);
        },
    });
}
$('.no_form').click(function() {
    alert('La Tarea no tiene Formulario Asociado');
});



/*** NOTA DE PEDIDOS ***/

/*function getProveedores() {
  $.ajax({
    dataType: 'json',
    type: 'POST',
    url: 'index.php/Notapedido/getProveedor',
    success: function(data){
      //console.log(data[0]);
      return data;
    },
    error: function(result){
      console.error(result);
      return false;
    },
  });
}*/
var articulos;

function getArticulos() {
    $.ajax({
        async: false,
        dataType: 'json',
        type: 'POST',
        url: 'index.php/Notapedido/getArticulo',
        success: function(data) {
            //console.log(data[0]);
            articulos = data;
        },
        error: function(result) {
            console.error(result);
        },
    });
}

traerPedidosRep();

function traerPedidosRep() {
    var idOT = $('#tbl_diagnosticos').find("td:first a").attr("data-idOt");
    console.info("id OT: " + idOT);
    $.ajax({
        data: {
            idOT: idOT
        },
        dataType: 'json',
        type: 'POST',
        url: 'index.php/Notapedido/verPedidoRepuestos',
        success: function(data) {
            // console.table(data['lista']);
            // console.table(data['proveedores']);
            // console.table(data['articulos']);

            $('#pedidoRepuestos tr.celdas').remove();
            for (var i = 0; i < data['lista'].length; i++) {
                //proveedores
                proveedorId = data['lista'][i]['provid']; //
                //console.log(proveedorId);
                indexP = data['proveedores'].map((o) => o.provid).indexOf(proveedorId);
                //console.log(indexP);

                //articulos
                articuloId = data['lista'][i]['artId']; //1
                //console.log(articuloId);
                indexA = data['articulos'].map((o) => o.value).indexOf(articuloId);
                //console.log(indexA);

                var tr = "<tr class='celdas' id=" + data['lista'][i]['id_detaNota'] + ">" +
                    "<td>" +
                    //permisos editar
                    "<a href='#' title='Editar Pedido de Repuestos' class='editRepuestos'><i class='fa fa-edit' style='cursor: pointer; margin-left: 15px;'></i></a>" +
                    //permisos eliminar
                    "<a href='#' title='Eliminar Pedido de Repuestos' class='delRepuestos'><i class='fa fa-times-circle' style='cursor: pointer; margin-left: 15px;'></i></a>" +
                    //permisos de ver (igual que toda la info!!! jaja)
                    //"<a href='#' title='Ver Pedido de Repuestos' class='viewRepuestos'><i class='fa fa-search' style='cursor: pointer; margin-left: 15px;'></i></a>"+

                    "</td>" +
                    "<td>" + data['lista'][i]['id_notaPedido'] + "</td>" +
                    "<td>" + data['articulos'][indexA]['label'] + "</td>" +
                    "<td data-artId='" + data['lista'][i]['artId'] + "'>" + data['articulos'][indexA][
                        'descripcion'
                    ] + "</td>" +
                    "<td>" + data['lista'][i]['cantidad'] + " | " + data['lista'][i]['medida'] + "</td>" +
                    "<td>" + data['lista'][i]['fechaEntrega'] + "</td>" +
                    "</tr>";
                $('#pedidoRepuestos tbody').append(tr);
            }
        },
        error: function() {
            console.error("error al traer pedido de repuestos");
        },
    });
}


// Agrega repuestos (nota de pedido) X ORDEN DE TRABAJO!!! (temporal)
$('.addRepuestos').click(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    WaitingOpen();
    var ordenId = $(this).attr("data-ordenId");
    var ordenDesc = $(this).attr("data-ordenDesc");
    $.ajax({
        data: {
            id: ordenId,
            desc: ordenDesc
        },
        dataType: 'json',
        type: 'POST',
        url: 'index.php/Notapedido/addEditNotaPedido/<?php echo $permission; ?>',
        success: function(result) {

            WaitingClose();
            $("#modaltitle").html("Agregar");
            $("#modalBodyRepuestos").html(result.html);
            $('#modalRepuestos').modal('show');
        },
        error: function() {
            WaitingClose();
            alert("error");
        },
    });
});

//Eiminar Pedido de Repuestos ¿y orden de repuestos?
$(document).on('click', '.delRepuestos', function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    $('#modalEliminarRepuesto').modal('toggle');
});

function Eliminar_Repuestos() {
    var id_detaNota = $('.delRepuestos').parent('td').parent('tr').attr('id');
    var id_notaPedido = $('.delRepuestos').parents("tr").find("td").eq(1).html();
    console.log(id_detaNota + ' - ' + id_notaPedido);
    $.ajax({
        data: {
            id_detaNota: id_detaNota,
            id_notaPedido: id_notaPedido
        },
        dataType: 'json',
        type: 'POST',
        url: 'index.php/Notapedido/delDetaNotaPedido', //index.php/
        success: function(data) {
            console.info("Repuesto eliminado Eliminado");
            $('#modalEliminarRepuesto').modal('hide');
            traerPedidosRep();
        },
        error: function(result) {
            console.error(result);
            $('#modalEliminarRepuesto').modal('hide');
        },
    });
}

//editar Pedido de Repuestos
$(document).on('click', '.editRepuestos', function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    console.log("Estoy editando");
    var id_detaNota = $(this).parent('td').parent('tr').attr('id');
    var id_notaPedido = $(this).parents("tr").find("td").eq(1).html();
    console.info("id_detaNota: " + id_detaNota);
    console.info("id_notaPedido: " + id_notaPedido);
    $.ajax({
        data: {
            id_detaNota: id_detaNota,
            id_notaPedido: id_notaPedido
        },
        dataType: 'json',
        type: 'POST',
        url: 'index.php/Notapedido/editDetaNotaPedido',
        success: function(result) {
            WaitingClose();
            $("#modaltitle").html("Editar");
            $("#modalBodyRepuestos").html(result.html);
            $('#modalRepuestos').modal('show');
        },
        error: function() {
            WaitingClose();
            console.error("error");
        },
    });
});
//$('#tbl_diagnosticos').dataTable();
</script>



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
<div class="modal fade" id="modalRevDiagCoord" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" id="modalBodyRevDiagCoord">

            </div><!-- /.modal-body -->
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog modal-lg -->
</div> <!-- /.modal fade -->
<!-- / Modal -->


<!-- Modal Agregar Pedido de Repuesto -->
<div class="modal fade" id="modalRepuestos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><span id="modaltitle">Agregar</span> Pedido de Repuestos</h4>
            </div> <!-- /.modal-header  -->

            <div class="modal-body" id="modalBodyRepuestos">

            </div><!-- /.modal-body -->

        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog modal-lg -->
</div> <!-- /.modal fade -->
<!-- / Modal -->

<!-- Modal forms tareas a revisar -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" id="">
                <h3 style="text-align: center;">¿Desea Eliminar el Repuesto?</h3>
            </div><!-- /.modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="botones btn btn-primary" onclick="">Eliminar</button>
            </div> <!-- /.modal footer -->
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog modal-lg -->

</div> <!-- /.modal fade -->
<!-- / Modal -->

<div class="modal" id="modalEliminarRepuesto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><span id="modalAction" class="fa fa-times-circle"
                        style="color: #3C8DBB"> </span> Eliminar Pedido Repuesto </h4>
            </div>
            <center>
                <h4>¿Confirma Eliminar el Pedido del Repuesto?</h4>
            </center>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="javascript:Eliminar_Repuestos()">Eliminar</button>
            </div>
        </div>
    </div>
</div>