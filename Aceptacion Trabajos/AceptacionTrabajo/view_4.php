<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
    <?php cargarCabecera(13); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-xs-7 col-sm-6">
                            <h3> ¿El Cliente Acepta realizar el trabajo? </h3>
                            <div class="form-group">
                                <label style="margin-top: 7px;"> Archivo Adjunto de Cotización: <a target="_blank" href="<?php echo $cotizacion; ?>">Ver y Descargar</a></label>
                                <input type='file' />
                            </div>
                        </div>
                        <div class="col-xs-7 col-sm-1">
                            <button class="btn btn-success" style="margin-top:20px;width:80%;" onclick="mostrarPanelSi()">Si</button>
                        </div>
                        <div class="col-xs-7 col-sm-1">
                            <button class="btn btn-danger" style="margin-top:20px;width:80%;" onclick="mostrarPanelNo()">No</button>
                        </div>
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div id="collapseDivNo" class="box box-danger collapsed-box box-solid">
                        <div class="box-header with-border">
                            <h3 id="tituloInfo" class="box-title">No Acepto</h3>
                            <div class="box-tools pull-right">
                                <button style="display:none" id="panelNo" type="button" data-widget="collapse">
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label style="margin-top: 7px;">¿Como desea el Cliente recibir el Componente?</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="a_d" value="Armado" /> Armado
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="a_d" value="Desarmado" /> Desarmado
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary " style="float: right;" onclick="guardarNo()">Guardar</button>
                        </div>
                    </div>



                    <div id="collapseDivSi" class="box box-success collapsed-box box-solid">
                        <div class="box-header with-border">
                            <h3 id="tituloInfo" class="box-title">Condiciones Comerciales</h3>

                            <div class="box-tools pull-right">
                                <button style="display:none" id="panelSi" type="button" data-widget="collapse">
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form id="formSi" role="form" action="<?php base_url();?>AceptacionTrabajo/GuardarAceptacionTrabajoBPM"
                                method="POST">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <label style="margin-top: 7px;">Entrega del Servicio
                                                <strong style="color: #dd4b39">*</strong>: </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="C/Banco" />
                                                    C/Banco
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="Armado" />
                                                    Armado
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="Semi-Armado" />
                                                    Semi-Armado
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="Desarmado" />
                                                    Desarmado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Fecha de Entrega: </label>
                                            <input type="text" name="fecha_entrega" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="form-group">
                                            <label>Dirección de Entrega: </label>
                                            <input type="text" name="direccion_entrega" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Tipo de Clientes
                                                    <strong style="color: #dd4b39">*</strong>: </label>
                                                <select name="tipo_cliente" class="form-control">
                                                    <option value="0"> Seleccionar... </option>
                                                    <option> Minera </option>
                                                    <option> Industrial </option>
                                                    <option> Emp.Transporte </option>
                                                    <option> Agencia </option>
                                                    <option> Particular </option>
                                                    <option> Otros </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Provisión de Repuestos
                                                    <strong style="color: #dd4b39">*</strong>: </label>
                                                <select name="proveedor_repuesto" class="form-control">
                                                    <option value="0"> Seleccionar... </option>
                                                    <option> Cliente </option>
                                                    <option> Motores Balderramo </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Orden de Compra: </label>
                                                <input type='file' id="orden" name="orden" />
                                                <a id="adjunto" target="_blank">Ver Archivo Adjunto</a>                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button id="guardarSi"  type="submit" value="Registrar">Guardar</button>
                            </form>

                        </div>
                    </div>
                </div>

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

<script>
    $(function() {
        $('#orden').on('change', function() {
            $('#adjunto').attr("href",URL.createObjectURL(this.files[0]));   
        });
    });

     $("#formSi").submit(function(event) {

        event.preventDefault();

        var formData = new FormData($("#formSi")[0]);

        $.ajax({
            url: $("#formSi").attr("action"),
            type: $("#formSi").attr("method"),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
             alert("Formulario Guardado Correctament");
             console.log(result);     
            },
            error:function(result){
             alert("Error");
             console.log(result);
            }
        });
    });


    function guardarNo() {
        var opcion = $('input[name="a_d"]:checked').val();
        console.log(opcion);
        $.ajax({
            type:'post',
            dataType:'json',
            data:{'estado':opcion},
            url:'index.php/AceptacionTrabajo/NoAceptaTrabajo',
            success:function(result){
                console.log(result);
                
            },
            error:function(result){
                console.log(result);
                
            }
        });
    }

    function mostrarPanelSi() {
        $('#panelSi').click();
        if (!$('#collapseDivNo').hasClass('collapsed-box')) {
            $('#panelNo').click();
        }
    }

    function mostrarPanelNo() {
        $('#panelNo').click();
        if (!$('#collapseDivSi').hasClass('collapsed-box')) {
            $('#panelSi').click();
        }
    }
</script>