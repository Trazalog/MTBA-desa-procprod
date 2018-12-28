<input type="hidden" id="permission" value="<?php //echo $permission;?>">
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          Revise que todos los campos obligatorios esten seleccionados
      </div>
  </div>
</div>


<form id="form_order">
    <input type="hidden" id="id_notaPedido" name="id_notaPedido" value="<?php echo $list[0]['id_notaPedido'] ?>">
    <input type="hidden" id="id_detaNota" name="id_detaNota" value="<?php echo $list[0]['id_detaNota'] ?>">
<div class="row" >
  <div class="col-xs-12 col-sm-6 col-md-4"><label>Código de Artículo</label> <strong style="color: #dd4b39">*</strong> :
    <input type="hidden" id="id_articulo" name="id_articulo" value="<?php echo $list[0]['artId'] ?>">
    <input type="text" class="artOrdInsum form-control" id="artOrdInsum" value="<?php echo $list[0]['artBarCode'] ?>" disabled>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4"><label>Descripción de Artículo</label> <strong style="color: #dd4b39">*</strong> :
    <input type="text" class="decripInsumo form-control" id="decripInsumo" value="<?php echo $list[0]['artDescription'] ?>" placeholder="Descripción" disabled>
    <input type="hidden" name="" class="id-artOrdIns form-control" id="id-artOrdIns" value="<?php echo $list[0]['medida'] ?>" disabled>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4"><div class="form-group"><label>Cantidad</label> <strong style="color: #dd4b39">*</strong> :
    <input id="cantidad" name="cantidad" class="form-control numerico" value="<?php echo $list[0]['cantidad'] ?>"/>
  </div></div>

  <div class="col-xs-12 col-sm-6 col-md-4"><div class="form-group"><label>Fecha de Entrega</label> <strong style="color: #dd4b39">*</strong> :
    <input type="text" id="fechaEnt" name="fechaEnt" class="form-control datepicker fecha" value="<?php echo date('d-m-Y',strtotime($list[0]['fechaEntrega'])) ?>"/>
  </div></div>

  <div class="col-xs-12 col-sm-6 col-md-4"><div class="form-group">
  <label>Medida</label> <strong style="color: #dd4b39">*</strong> :
    <!-- <input type="text" id="medida" name="medida" class="form-control numerico" value=""/> -->
  <select class="select form-control"  id="medida" name="medida" placeholder="Medida..."><?php echo '<option selected value="'.$list[0]['medida'].'">'.$list[0]['medida'].'</option>'?><option value="km">km</option><option value="m">m</option><option value="cm">cm</option></select>
  </div></div>
  <div class="col-xs-12 col-sm-12 col-md-12">
    <textarea class="form-control" name="comentarios" placeholder="Comentarios..." width="100%" ><?php echo $list[0]['comentarios']?></textarea>
  </div><br>

  <div class="clearfix"></div>
  <div class="col-xs-12">
    <button type="button" class="btn btn-success" id="addcompo" onclick="javascript:enviarOrden()" style="margin-top: 15px"><i class="fa fa-check">Editar</i></button>
  </div>
</div>
</form>


<style>
  input.celda{border: none; width: 90%;}
</style>


<script>
$(".select option").val(function(idx, val) {
  $(this).siblings('[value="'+ val +'"]').remove();
});

$('form').bootstrapValidator({ //VALIDADOR
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
    });
//Trae Articulos y autocompleta campo
$("#artOrdInsum").autocomplete({
  source:function(request, response) {
    $.ajax( {
      url: "index.php/Notapedido/getArticulo",
      dataType: "json",
      success: function(data) {
        response(data);
      }
    });
  },
  //delay: 100,
  minLength: 1,
  focus: function(event, ui) {
    // prevent autocomplete from updating the textbox
    event.preventDefault();
    // manually update the textbox
    $(this).val(ui.item.label);
  },
  select: function(event, ui) {
    // prevent autocomplete from updating the textbox
    event.preventDefault();
    // manually update the textbox and hidden field
    $(this).val(ui.item.label);
    $("#id_articulo").val(ui.item.value);
    $("#decripInsumo").val(ui.item.descripcion);
  },
});

// Carga datepicker para fecha
$("#fechaEnt").datepicker().on('change', function(e) {
  $('form').data('bootstrapValidator').resetField($(this),false);
  $('form').data('bootstrapValidator').validateField($(this));
});

function validarCampos(){

  var error = false;

  if ($("#cantidad").val() == "") {
    error = true;
    console.log('cantidad');

  }

  if ($("#fechaEnt").val() == "") {
    error = true;
    console.log('fecha');
  }
  if ($("#artOrdInsum").val() == "") {
    error = true;
    console.log('artOrdInsum');

  }
  if ($("#decripInsumo").val() == "") {
    error = true;
    console.log('descricion');
  }
  if ($("#medida").val() == "") {
    error = true;
    console.log('medida');
  }
   return error;
}

// Guarda Nota de Pedido
function enviarOrden() {
  var datos = $("#form_order").serializeArray();
  console.table(datos);
  datos[5]['value'] = $('select#medida option:selected').html();
  
  //WaitingOpen('Guardando cambios');
  $.ajax({
    data: datos,
    type: 'POST',
    dataType: 'json',
    url: 'index.php/Notapedido/editPedidoRepuesto',
    success: function(result){
      //WaitingClose("Guardado con Exito...");
      traerPedidosRep();
      $('#modalRepuestos').modal('hide');
    },
    error: function(result){
      //WaitingClose();
      alert("Error en guardado...");
    },
  });
}
</script>