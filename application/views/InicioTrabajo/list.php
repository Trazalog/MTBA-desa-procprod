<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h2> Crear Nota de Pedido </h2>
                    <div class="row">
                        <div class="col-xs-3">
                            <select id="clientes" class="form-control" placeholder="Seleccionar Clientre">
                                <option selected="selected" value="0">Seleccionar Cliente...</option>
                                <?php 
									foreach ($list as $f) {
									echo '<option value="' . $f['cliId'] . '">' . $f['cliRazonSocial'] . '</option>';
									}
								?>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <button class="btn btn-success edit">
                                <i class="glyphicon glyphicon-pencil" style="color: #00000; cursor: pointer;" title="Editar"></i>
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
                                        <label style="margin-top: 7px;">C.U.I.L/C.U.I.T: </label>
                                        <input type="text" id="cuil_cuit" class="form-control" readonly/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <label style="margin-top: 7px;">Teléfono: </label>
                                        <input type="text" id="telefono" class="form-control" readonly/>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <label style="margin-top: 7px;">Email: </label>
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
                            <option value='MO'> MO - motor </option>
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
                                    <label>N° de Motor </label>
                                    <input type="text" id="num_motor" class="form-control" />
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
                                    <label >Familia de Productos
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <select id="familia_productos" class="form-control">
                                        <option value="0" selected="selected">Seleccionar...</option>
                                        <option value="1">CI - Componente Industrial</option>
                                        <option value="2">CL - Componente Liviano</option>
                                        <option value="3">S - Servicio</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label >SubFamilia
                                        <strong style="color: #dd4b39">*</strong>: </label>
                                    <select id="subfamilia" class="form-control">
                                        <option selected="selected">Seleccionar...</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Fecha Entrega -->
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                <label >Fecha Entrega Informe <strong style="color: #dd4b39">*</strong>: </label>
                                <input type="text" id="fecha_entrega" name="fechaEntrega" class="form-control fecha" />

                                </div>
                            </div>

                        </div>
                        <!--FIN ROW   -->
                        <br>

                        <div class="form-group">
                            <label>Observaciones:</label>
                            <textarea id="observacion" class="form-control"></textarea>
                        </div>
                    </form>
                    <button id="lanzarProceso" style="float: right;" class="btn btn-success" >Inicio Proceso</button>

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

// Nuestro método para sumar n dias (que no sean ni Sábado ni Domingo) 
Date.prototype.sumarLaborables = function(n) { 
    for(var i=0; i<n; i++) { 
        this.setTime( this.getTime()+24*60*60*1000 ); 
        if( (this.getDay()==6) || (this.getDay()==0) )    // sábado o domingo 
            i--;            // hacemos el bucle una unidad mas larga. 
    } 
    return this; 
} 

// COMPLETAMOS CON CEROS A LA IZQUIERDA AQUELLOS VALORES QUE LO NECESITEN PARA VERLOS BONITOS 
Date.prototype.getXXXzeroFilled = function(propiedad) { 
    var dev = this["get"+propiedad](); 
    if( (propiedad=="Milliseconds") && (dev<100) && (dev>9) ) dev = "0"+dev; 
    else if( dev<10 ) dev = (propiedad=="Milliseconds")?"00":"0"+dev; 
    return dev.toString(); 
} 
Date.prototype.getHoursZeroFilled = function() { return this.getXXXzeroFilled("Hours"); } 
Date.prototype.getMinutesZeroFilled = function() { return this.getXXXzeroFilled("Minutes"); } 
Date.prototype.getSecondsZeroFilled = function() { return this.getXXXzeroFilled("Seconds"); } 
Date.prototype.getMillisecondsZeroFilled = function() { return this.getXXXzeroFilled("Milliseconds"); } 

</script> 

<script>
    $('#lanzarProceso').click(function(){
        $('#form').data('bootstrapValidator').validate();
		if(!$('#form').data('bootstrapValidator').isValid()){
			alert('Error de Validación.\nCompruebe que los Datos esten cargados Correctamente.');
		}	
    });
 
    $('.edit').click(function() {
        id_ = $('#clientes').val();
        if(id_=="0"){ alert("Debe Seleccionar Cliente");return;}
        $.ajax({
        type: 'POST',
        url: 'index.php/Cliente/Obtener_Cliente',
        data: {id:id_},
        dataType: 'json',
        success: function(responce){
            console.table(responce);
            $.each(responce, function(key, value){
              $('#form_cliente_editar [name=' + key + ']').val(value);
            });
            $('#modalEditar').modal('show');
        },
        error: function(err){
            alert('Error al Editar');
        }
        });
    }); 

    function ValidarCampo(e,reset){
       $('#form').data('bootstrapValidator').resetField(e,reset);
	   $('#form').data('bootstrapValidator').validateField(e);
    }

    $('#fecha_entrega').datepicker({
		autoclose: true
	}).on('change', function(e) {
	   console.log('Validando Campo...'+$(this).attr('name'));
        ValidarCampo($(this),false);
    });

    var sourceArray = <?php echo json_encode($listaIndices); ?>

    $('#indice').autocomplete({
        source: sourceArray,
        select: function(event, ui) {
            $('#motor').val(ui.item.data);
            ValidarCampo($('#motor'),false);
        }
    });

     $('#form_cliente_editar').bootstrapValidator({ //VALIDADOR
        message: 'This value is not valid',
        feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        obligatorio: {
            message: 'NOSE DONDE MUESTRA ESTE MENSAJE',
            selector: '#form_cliente_editar .form-control',
            validators: {
            notEmpty: {
                message: 'Los campos obligatorios(*) deben estar completos'
            }
            }
        }
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
            fecha:{
				selector: '.fecha',
				validators:{
					date: {
                        format: 'DD-MM-YYYY',
                        message: '(*) Formato de Fecha Inválido'
                    },
                    notEmpty: {
                        message: 'Los campos obligatorios(*) deben estar completos'
                    }
				}
			},
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
    }) .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();
            guardarPedido();
            
    });


    var id_cliente_seleccionado = '';
    var listaClientes;
    $('#clientes').change(function() {
        console.log("Cliente Seleccionado..." + this.selectedIndex);
        var id = this.selectedIndex - 1;
        if(id==-1){
            $("#tituloInfo").html('Información del Cliente');
            if (!$('#collapseDiv').hasClass('collapsed-box')) {
                $('#infoCliente').click();
            }
            return;
        }else{
        listaClientes = <?php echo json_encode($list); ?>;
        id_cliente_seleccionado = listaClientes[id]['cliId'];

        $("#tituloInfo").html(listaClientes[id]['cliRazonSocial'] +" - Información del Cliente");
        $('#domicilio').val(listaClientes[id]['cliAddress']);
        $('#cuil_cuit').val(listaClientes[id]['cuil_cuit']);
        $('#telefono').val(listaClientes[id]['cliPhone']);
        $('#contacto').val(listaClientes[id]['cliEmail']);
        // box.hasClass("")
        if ($('#collapseDiv').hasClass('collapsed-box')) {
            $('#infoCliente').click();
        }
        }
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
                alert("Proceso Iniciado!\nCódigo de Interno: "+result);     
                ActualizarPagina();
            },
            error: function(result) {
                console.log(result);
                alert("No se pudo Inciar el Proceso, por favor cargar datos correctamente.");
            }
        });
    }

    $('#familia_productos').change(function() {
        
        var opc = this.value;
        var subfamilia = $('#subfamilia');
        subfamilia.html('');
       // $('#fecha_entrega').val('');
        $('#fecha_entrega').prop('disabled', false);
        subfamilia.append("<option selected='selected'>Seleccionar...</option>");
        switch (opc) {
            case "1":
                subfamilia.append("<option>MG - Motor Grande</option>");
                subfamilia.append("<option>MM - Motor Mediano</option>");
                subfamilia.append("<option>MSA - Motor Semiarmado</option>");
                subfamilia.append("<option>PS - Partes Sueltas</option>");

                break;
            case "2":
                subfamilia.append("<option>ME - Motor Entero</option>");
                subfamilia.append("<option>MSA - Motor Semiarmado</option>");
                subfamilia.append("<option>PS - Partes Sueltas</option>");

                break;
            case "3":
                subfamilia.append("<option>Servicio Predio Propio</option>");
                subfamilia.append("<option>Servicio in Situ</option>");
                subfamilia.append("<option>Venta de Repuestos</option>");

                break;
        }
        ValidarCampo($('#fecha_entrega'),true);

    });

    $('#subfamilia').change(function() {
     var tiempoStandars = <?php echo json_encode($tiempoStandars); ?>;
     var subfamilia = this.value.split(" - ")[0];
     var familia = $('#familia_productos option:selected').text().split(" - ")[0];
     $('#fecha_entrega').val('');
     $('#fecha_entrega').prop('disabled', false);
     for(i = 0; i < tiempoStandars.length; i++){
         if(familia+"-"+subfamilia==tiempoStandars[i]['tipo_motor_id']){
             console.log(tiempoStandars[i]['dias_habiles']);
             console.log(new Date().sumarLaborables(Math.round((tiempoStandars[i]['dias_habiles']))));
             var d = new Date().sumarLaborables(Math.round(tiempoStandars[i]['dias_habiles']));
             $('#fecha_entrega').val(("0" + d.getDate()).slice(-2) + "-" + ("0"+(d.getMonth()+1)).slice(-2) + "-" +
                d.getFullYear());
           // ValidarCampo($('#fecha_entrega'),false);
             
         }
         ValidarCampo($('#fecha_entrega'),false);
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

    function ValidarCamposCliente(){
        $('#form_cliente_editar').data('bootstrapValidator').validate();
        if(!$('#form_cliente_editar').data('bootstrapValidator').isValid()){
          alert('Error de Validación.\nCompruebe que los Datos esten cargados Correctamente.');
          return false;
        }	
        return true;
	  }


     function editarCliente() {
        if(!ValidarCamposCliente())return;
        var formData = new FormData($('#form_cliente_editar')[0]);
        $.ajax({
        type: 'POST',
        data: formData, cache: false, contentType: false, processData: false,
        url: 'index.php/Cliente/Modificar_Cliente',
        success: function (result) {
            WaitingClose();
            $('#modalEditar').modal('hide');
            ActualizarPagina();
            

        },
        error: function (result) {
            alert("OPERACIÓN FALLIDA");
        }

        });
    }

    function ActualizarPagina() { //Funcion Resfresca
        $('#content').empty();
        $("#content").load(
            "<?php echo base_url(); ?>index.php/InicioTrabajo/index/<?php echo $permission; ?>"
        );

    }

    function ResetForm(){
        $('#form_cliente_editar')[0].reset();
        $('#form_cliente_editar').data('bootstrapValidator').resetForm();
    }

</script>

<!-- Modal -->
<div class="modal" id="modalEditar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Editar Cliente</h4>
      </div>
      <div class="modal-body" id="cuerpoModalEditar">
        <div class="row">
          <div class="col-xs-12">
            <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
              <h4><i class="icon fa fa-ban"></i> Error!</h4>
              Revise que todos los campos esten completos
            </div>
          </div>
        </div>

        <form id="form_cliente_editar">
        <input class="hidden" name="cliId">
              <div class="form-group">

                <label style="margin-top: 7px;">Razon Social <strong style="color: #dd4b39">*</strong>: </label>

                <input type="text" class="form-control" name="cliRazonSocial">

              </div>
              <div class="form-group">

                <label style="margin-top: 7px;">C.U.I.L/C.U.I.T <strong style="color: #dd4b39">*</strong>: </label>

                <input type="text" class="form-control" name="cuil_cuit">

              </div>
              <div class="form-group">

                <label style="margin-top: 7px;">Dirección Legal<strong style="color: #dd4b39">*</strong>: </label>

                <input type="text" class="form-control" name="cliAddress">

              </div>
              <div class="form-group">

                <label style="margin-top: 7px;">Tipo Inscripción<strong style="color: #dd4b39">*</strong>: </label>

                <select class="form-control" name="tipo_inscripcion">
                  <option value="0"> Seleccionar...</option>
                  <option value="1"> IVA Responsable Inscripto </option>
                  <option value="2"> IVA Responsable no Inscripto </option>
                  <option value="3"> IVA no Responsable </option>
                  <option value="4"> IVA Sujeto Exento </option>
                  <option value="5"> Consumidor Final </option>
                  <option value="6"> Responsable Monotributo </option>
                  <option value="7"> Sujeto no Categorizado </option>
                  <option value="8"> Proveedor del Exterior </option>
                  <option value="9"> Cliente del Exterior </option>
                  <option value="10"> IVA Liberado – Ley Nº 19.640 </option>
                  <option value="11"> IVA Responsable Inscripto – Agente de Percepción </option>
                  <option value="12"> Pequeño Contribuyente Eventual </option>
                  <option value="13"> Monotributista Social </option>
                  <option value="14"> Pequeño Contribuyente Eventual Social </option>
                </select>

              </div>
              <div class="form-group">

                <label style="margin-top: 7px;">Telefono <strong style="color: #dd4b39">*</strong>: </label>

                <input type="text" class="form-control" name="cliPhone">

              </div>
              <div class="form-group">

                <label style="margin-top: 7px;">Email <strong style="color: #dd4b39">*</strong>: </label>
                <input type="text" class="form-control" name="cliEmail">


              </div>
            </form>


      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" onclick="editarCliente()">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->