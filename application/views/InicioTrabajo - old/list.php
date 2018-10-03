<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                    <h2> Crear Nota de Pedido </h2>



                    <div class="row">
                        <div class="col-xs-3">
                            <select id="clientes" class="form-control">
                                <option selected="selected">Seleccionar Cliente...</option>
                                <?php 
									foreach ($list as $f) {
									echo '<option value="' . $f['cliId'] . '">' . $f['cliName'] . '</option>';
									}
								?>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-success" data-toggle="modal" data-target="#modaleditar" onclick="rellenarModal()">
                                <i class="fa fa-fw fa-pencil" style="color: #00000; cursor: pointer;" title="Editar"></i>
                                Editar</button>
                        </div>

                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div id="collapseDiv" class="box box-success collapsed-box box-solid">
                        <div class="box-header with-border">
                            <h3 id="tituloInfo" class="box-title">Información del Cliente</h3>

                            <div class="box-tools pull-right">
                                <button id="infoCliente" type="button" class="btn btn-box-tool" data-widget="collapse">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="row">

                                <div class="col-xs-12">
                                    <label style="margin-top: 7px;">Domicilio: </label>
                                    <input type="text" id="domicilio" class="form-control" readonly/>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <label style="margin-top: 7px;">Teléfono: </label>
                                        <input type="text" id="telefono" class="form-control" readonly/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <label style="margin-top: 7px;">Celular: </label>
                                        <input type="text" id="celular" class="form-control" readonly/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <label style="margin-top: 7px;">Contacto: </label>
                                        <input type="text" id="contacto" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 7px;">Código de Interno:
                            <strong style="color: #dd4b39">*</strong>: </label>
                        <select id="codigo_interno" class="form-control" style="width:30%;">
                            <option value="0" selected="selected">Seleccionar...</option>
                            <option value='AL'> AL - arbol de leva </option>
                            <option value='BI'> BI - Bomba Inyectora </option>
                            <option value='BIE'> BIE - Biela </option>
                            <option value='CA'> CA - cardan </option>
                            <option value='CI'> CI - Cigüeñal </option>
                            <option value='COM'> COM - compresor </option>
                            <option value='IT'> IT - intercambiadores </option>
                            <option value='PS'> PS - piezas sueltas </option>
                            <option value='RA'> RA - Radiadores de Aceite </option>
                            <option value='TC'> TC - Tapa Cilindro </option>
                            <option value='TV'> TV - turbo </option>
                        </select>
                    </div>
                    <form id="form">
                        <div class="row">

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>Parte / Vehículo
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <input type="text" id="parte" class="form-control obligatorio" />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>Patente: </label>
                                    <input type="text" id="patente" class="form-control" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>N° de Motor
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <input type="text" id="num_motor" class="form-control obligatorio" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>Indice
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <input type="text" id="indice" class="form-control obligatorio" placeholder="Buscar Indice..." />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>Motor
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <input type="text" id="motor" class="form-control obligatorio" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label style="margin-top: 7px;">N° de Chásis: </label>
                                    <input type="text" id="num_chasis" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <br>
                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-xs-3">
                                            <label style="margin-top: 7px;">Condición
                                                <strong style="color: #dd4b39">*</strong>: </label>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Normal" />                                                    Normal
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="Urgente" />                                                    Urgente
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="Garantía" />                                                    Garantía
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <br>

                        <div class="row">

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label style="margin-top: 7px;">Familia de Productos
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <select id="familia_productos" class="form-control">
                                        <option value="0" selected="selected">Seleccionar...</option>
                                        <option value="1">Componente Industrial</option>
                                        <option value="2">Componente Liviano</option>
                                        <option value="3">Servicio</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group" style="margin-left:50px;">
                                    <label style="margin-top: 7px;">SubFamilia
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <select id="subfamilia" class="form-control">
                                        <option selected="selected">Seleccionar...</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <!--FIN ROW   -->
                        <br>
                        <div class="row">

                            <div class="col-xs-12 col-sm-5">
                                <label style="margin-top: 7px;">Fecha Compromiso Entrega Informe: </label>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <input type="text" id="fecha_entrega" class="form-control" />

                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Observaciones:</label>
                            <textarea id="observacion" class="form-control"></textarea>
                        </div>




                        <button type="submit" style="float: right;" class="btn btn-success" onclick="guardarPedido()" disabled>Guardar</button>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

<script>
    $("form").submit(function(event) {
        event.preventDefault();
    });

    
        $('#fecha_entrega').datepicker({
            autoclose: true
        });

        var sourceArray = <?php echo json_encode($listaIndices); ?>

        $('#indice').autocomplete({
            source: sourceArray,
            select: function(event, ui) {
                $('#motor').val(ui.item.data);
            }
        });

        $('#form').bootstrapValidator({ //VALIDADOR
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                obligatorio: {
                    message: 'NOSE DONDE MUESTRA ESTE MENSAJE',
                    selector: '.obligatorio',
                    validators: {
                        notEmpty: {
                            message: 'Los campos obligatorios(*) deben estar completos'
                        }
                    }
                },
                optionsRadios: {
                    validators: {
                        notEmpty: {
                            message: 'Alguna de las opciones debe estar seleccionada'
                        }
                    }
                }
            }
        });

    






    var id_cliente_seleccionado = '';
    var listaClientes;
    $('#clientes').change(function() {
        console.log("Cliente Seleccionado..." + this.selectedIndex);
        var id = this.selectedIndex - 1;
        listaClientes = <?php echo json_encode($list); ?>;
        id_cliente_seleccionado = listaClientes[id]['cliId'];

        document.getElementById("tituloInfo").innerHTML = listaClientes[id]['cliName'] +
            " - Información del Cliente";
        $('#domicilio').val(listaClientes[id]['cliAddress']);
        $('#celular').val(listaClientes[id]['cliMovil']);
        $('#telefono').val(listaClientes[id]['cliPhone']);
        $('#contacto').val(listaClientes[id]['cliEmail']);
        // box.hasClass("")
        if ($('#collapseDiv').hasClass('collapsed-box')) {
            $('#infoCliente').click();
        }

        // $('#fecha_entrega').datepicker({
        // 	autoclose: true
        // })
        traer_zona();
    });

    function guardarPedido() {
        var codigoI = $('#codigo_interno option:selected').val();
        var parte_vehiculo = $('#parte').val();
        var patente = $('#patente').val();
        var indice = $('#indice').val();
        var motor = $('#motor').val();
        var num_motor = $('#num_motor').val();
        var num_chasis = $('#num_chasis').val();
        var condicion = $('input[name="optionsRadios"]:checked').val();
        var fec_entrega = $('#fecha_entrega').val().split("-");
        fec_entrega = fec_entrega[2] + "-" + fec_entrega[1] + "-" + fec_entrega[0];
        var familia = $('#familia_productos option:selected').text();
        var subfamilia = $('#subfamilia option:selected').text();
        var observacion = $('#observacion').val();
        var clie_id = id_cliente_seleccionado;

        console.log(codigoI);
        console.log(parte_vehiculo);
        console.log(patente);
        console.log(indice);
        console.log(motor);
        console.log(num_motor);
        console.log(num_chasis);
        console.log(condicion);
        console.log(fec_entrega);
        console.log(familia);
        console.log(subfamilia);
        console.log(observacion);

        if (!ValidarCampos()) {
            return
        }

        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                "parte_vehiculo": parte_vehiculo,
                "patente": patente,
                "indice": indice,
                "motor": motor,
                "num_motor": num_motor,
                "num_chasis": num_chasis,
                "condicion": condicion,
                "fec_entrega": fec_entrega,
                "observacion": observacion,
                "familia_producto": familia,
                "subfamilia": subfamilia,
                "cod_interno": codigoI,
                "clie_id": clie_id
            },
            url: 'index.php/InicioTrabajo/Guardar_Pedido',
            success: function(result) {
                console.log(result);

                alert("Formulario Guardado.");
                ActualizarPagina();

            },
            error: function(result) {
                console.log(result);

                alert("El Formulario contiene error, por favor cargar datos correctamente.");
            }
        });
    }

    $('#familia_productos').change(function() {

        var opc = this.value;
        var subfamilia = $('#subfamilia');
        subfamilia.html('');
        subfamilia.append("<option selected='selected'>Seleccionar...</option>");
        switch (opc) {
            case "1":
                subfamilia.append("<option>Motor Grande</option>");
                subfamilia.append("<option>Motor Mediano</option>");
                subfamilia.append("<option>Motor Semiarmado</option>");
                subfamilia.append("<option>Partes Sueltas</option>");

                break;
            case "2":
                subfamilia.append("<option>Motor Entero</option>");
                subfamilia.append("<option>Motor Semiarmado</option>");
                subfamilia.append("<option>Partes Sueltas</option>");

                break;
            case "3":
                subfamilia.append("<option>Servicio Predio Propio</option>");
                subfamilia.append("<option>Servicio in Situ</option>");
                subfamilia.append("<option>Venta de Repuestos</option>");

                break;
        }

    });

    function ValidarCampos() {

        var codigoI = $('#codigo_interno').prop('selectedIndex');
        var cliente = $('#clientes').prop('selectedIndex');
        var familia = $('#familia_productos').prop('selectedIndex');
        var subfamilia = $('#subfamilia').prop('selectedIndex');
        if (codigoI == 0) {
            alert("Se debe seleccionar el Codigo de Interno");
            return false;
        }
        if (cliente == 0) {
            alert("Se debe seleccionar un cliente");
            return false;
        }
        if (familia == 0) {
            alert("Se debe seleccionar Familia de Productos");
            return false;
        }
        if (subfamilia == 0) {
            alert("Se debe seleccionar Subfamilia de Productos");
            return false;
        }

        return true;
    }

    function guardareditar() {
        console.log("Estoy editando");
        console.log("El id de Cliente es:");
        //  console.log(ed);

        var nomb = $('#nombre1').val();
        var apell = $('#Apellido1').val();
        var dni = $('#dni1').val();
        var fecha = $('#fecha1').val();
        var dom = $('#dom1').val();
        var tel = $('#tel1').val();
        var cel = $('#cel').val();
        var email = $('#mail').val();
        var zon = $('#zona').val();
        var dia = $('#dia1').val();
        //var tipcli = $('#color1').val();   
        var parametros = {
            'cliName': nomb,
            'cliLastName': apell,
            'cliDni': dni,
            'cliDateOfBirth': fecha,
            'cliAddress': dom,
            'cliPhone': tel,
            'cliMovil': cel,
            'cliEmail': email,
            'zonaId': zon,
            'cliDay': dia
            //'cliColor': tipcli

        };
        console.log(parametros);
        var hayError = false;

        if (parametros != 0) {
            $.ajax({
                type: "POST",
                url: "index.php/Cliente/edit_banco", //controlador /metodo
                data: {
                    parametros: parametros,
                    ed: id_cliente_seleccionado
                },
                success: function(data) {
                    console.log("exito en editar");
                    ActualizarPagina();
                },

                error: function(result) {
                    console.log("entro por el error");
                    console.log(result);
                }

            });

        } else {
            alert("Por favor complete todos los campos solicitados");
        }

    }



    function rellenarModal() {
        var id = $('#clientes').prop('selectedIndex') - 1;

        $('#nombre1').val(listaClientes[id]['cliName']);
        $('#Apellido1').val(listaClientes[id]['cliLastName']);
        $('#dni1').val(listaClientes[id]['cliDni']);
        $('#fecha1').val(listaClientes[id]['cliDateOfBirth']);
        $('#dom1').val(listaClientes[id]['cliAddress']);
        $('#tel1').val(listaClientes[id]['cliPhone']);
        $('#cel').val(listaClientes[id]['cliMovil']);
        $('#mail').val(listaClientes[id]['cliEmail']);
        $('#zona').val(listaClientes[id]['zonaId']);
        $('#dia1').val(listaClientes[id]['cliDay']);
    }

    function ActualizarPagina() { //Funcion Resfresca
        $('#content').empty();
        $("#content").load(
            "<?php echo base_url(); ?>index.php/InicioTrabajo/index/<?php echo $permission; ?>"
        );

    }

    function traer_zona() {

        $('#zona').html("");
        $.ajax({
            type: 'POST',
            data: {},
            url: 'index.php/Cliente/getzona', //index.php/
            success: function(data) {

                //var opcion  = "<option value='-1'>Seleccione...</option>" ; 
                $('#zona').append(opcion);
                for (var i = 0; i < data.length; i++) {
                    var nombre = data[i]['zonaName'];
                    var opcion = "<option value='" + data[i]['zonaId'] + "'>" + nombre + "</option>";

                    $('#zona').append(opcion);

                }

            },
            error: function(result) {

                console.log(result);
            },
            dataType: 'json'
        });
    }
</script>

<!-- Modal editar-->
<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <span id="modalAction" class="fa fa-fw fa-pencil" style="color: #f39c12"> </span> Editar Cliente</h4>
            </div>
            <div class="modal-body input-group ui-widget" id="modalBodyArticle">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Nombre
                                    <strong style="color: #dd4b39">*</strong>: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Nombre" id="nombre1" name="nombreE">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Apellido
                                    <strong style="color: #dd4b39">*</strong>: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Apellido" id="Apellido1" name="Apellido1">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Dni
                                    <strong style="color: #dd4b39">*</strong>: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="12345678" id="dni1" name="dni1" maxlength="8">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Fec. Nacimiento
                                    <strong style="color: #dd4b39">*</strong>: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="date" class="form-control" id="fecha1" name="fecha1" placeholder="dd-mm-aaaa">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Domicilio: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="input" class="form-control" placeholder="ej: Barrio Los Olivos M/E Casa/23" id="dom1" name="dom1">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Teléfono: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="0264 - 4961020" id="tel1" name="tel1">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Celular: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="0264 - 155095888" id="cel" name="cel">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Mail: </label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="claudia.perez@hotmail.com" id="mail" name="mail">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Zona: </label>
                            </div>
                            <div class="col-xs-8">
                                <select class="form-control" id="zona" name="zona" value="">

                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-4">
                                <label style="margin-top: 7px;">Días proxímo cobro: </label>
                            </div>
                            <div class="col-xs-8">
                                <select class="form-control" id="dia1" name="dia1">
                                    <?php 
                  for ($i = 1; $i < 31; $i++) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                  }
                  ?>
                                </select>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSave" data-dismiss="modal" onclick="guardareditar()">Guardar</button>
                </div>
                <!-- /.modal footer -->

            </div>
            <!-- /.modal-body -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog modal-lg -->
</div>
<!-- /.modal fade -->
<!-- / Modal -->