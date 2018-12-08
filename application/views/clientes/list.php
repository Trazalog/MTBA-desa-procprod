<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Cliente</h3>
          <?php
          if (strpos($permission,'Add') !== false) {
            echo '<button class="btn btn-block btn-primary" style="width: 100px; margin-top: 10px;" data-toggle="modal" data-target="#modalAgregar" id="btnAdd" title="Nueva">Agregar</button>';
          }
          ?>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="Cliente" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="1%">Acciones</th>
                <th>RazonSocial</th>
                <th>C.U.I.L/C.U.I.T</th>
                <th>Dirección Legal</th>
                <th>Teléfono</th>
                <th>Email</th>

              </tr>
            </thead>
            <tbody>
              <?php
                foreach($list as $f)
                {

                  echo '<tr id="'.$f['cliId'].'">';
                  echo '<td>';
                  
                  if (strpos($permission,'Edit') !== false) {
                    echo '<i class="glyphicon glyphicon-pencil text-light-blue edit" style="cursor: pointer;" title="Editar"></i>';
                  }
                  if (strpos($permission,'Del') !== false) {
                   echo '<i class="fa fa-fw fa-times-circle text-light-blue" title="Eliminar" style="cursor: pointer; margin: 5px;" ></i>';
                  }
                  echo '</td>';
                  echo '<td style="text-align: left">'.$f['cliRazonSocial'].'</td>';
                  echo '<td style="text-align: left">'.$f['cuil_cuit'].'</td>';
                  echo '<td style="text-align: left">'.$f['cliAddress'].'</td>';
                  echo '<td style="text-align: left">'.$f['cliPhone'].'</td>';
                  echo '<td style="text-align: left">'.$f['cliEmail'].'</td>';               
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

  $('#form_cliente').bootstrapValidator({ //VALIDADOR
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      obligatorio: {
        message: 'NOSE DONDE MUESTRA ESTE MENSAJE',
        selector: '.form-control',
        validators: {
          notEmpty: {
            message: 'Los campos obligatorios(*) deben estar completos'
          }
        }
      }
    }
  }).on('success.form.bv', function (e) {
    // Prevent form submission
    e.preventDefault();

  });


  function guardarCliente() {
    if(!ValidarCampos())return;
    var formData = new FormData($('#form_cliente')[0]);
    // for (var pair of formData.entries()) {
    // console.log(pair[0]+ ', ' + pair[1]); 
    // }
    // return;
    $.ajax({
      type: 'POST',
      data: formData, cache: false, contentType: false, processData: false,
      url: 'index.php/Cliente/Guardar_Cliente',
      success: function (result) {
        WaitingClose();
        $('#modalAgregar').modal('hide');
        ActualizarPagina();
      },
      error: function (result) {
        alert("OPERACIÓN FALLIDA");
      }
    });
  }


  function editarCliente() {
    if(!ValidarCampos())return;
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

  $(".fa-times-circle").click(function (e) {
    id_ = $(this).parents('tr').attr('id');
    $('#modalEliminar').modal('show');
  });

  $('.edit').click(function() {
    id_ = $(this).parents('tr').attr('id');
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

  	function ValidarCampos(){
        $('#form_cliente').data('bootstrapValidator').validate();
        if(!$('#form_cliente').data('bootstrapValidator').isValid()){
          alert('Error de Validación.\nCompruebe que los Datos esten cargados Correctamente.');
          return false;
        }	
        return true;
	  }

  function eliminarCliente() {
    alert(id_);
    $.ajax({
      type: 'POST',
      data: { id: id_ },
      url: 'index.php/Cliente/Eliminar_Cliente',
      success: function (data) {
        WaitingClose();
        ActualizarPagina();
      },

      error: function (result) {
        alert("OPERACION FALLIDA");
      }
    });
    

  }
  
  function ResetForm(){
    $('#form_cliente')[0].reset();
    $('#form_cliente').data('bootstrapValidator').resetForm();
    $('#form_cliente_editar')[0].reset();
    $('#form_cliente_editar').data('bootstrapValidator').resetForm();
  }

   function ActualizarPagina() { //Funcion Resfresca
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Cliente/index/<?php echo $permission; ?>");

  } $(function () {

    $('#Cliente').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "language": {
        "lengthMenu": "Ver MENU filas por página",
        "zeroRecords": "No hay registros",
        "info": "Mostrando pagina PAGE de PAGES",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtrando de un total de MAX registros)",
        "sSearch": "Buscar:  ",
        "oPaginate": {
          "sNext": "Sig.",
          "sPrevious": "Ant."
        }
      }
    });
  });

</script>

<div class="modal" id="modalAgregar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Agregar Cliente</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
              <h4><i class="icon fa fa-ban"></i> Error!</h4>
              Revise que todos los campos esten completos
            </div>
          </div>
        </div>
          <div width="10%">

            <form id="form_cliente">
              
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
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" onclick="guardarCliente()">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="ResetForm()">Cerrar</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
<!-- Modal -->
<div class="modal" id="modalEliminar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Eliminar Cliente</h4>
      </div>
      <div class="modal-body" id="cuerpoModalEditar">
        <h5>¿Desea eliminar el registro?</h5>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="eliminarCliente()">Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="ResetForm()">Cerrar</button>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->