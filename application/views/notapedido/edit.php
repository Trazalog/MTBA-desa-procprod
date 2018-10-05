<input type="hidden" id="permission" value="<?php //echo $permission;?>">
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          Revise que todos los campos obligatorios esten seleccionados
      </div>
  </div>
</div>

<!--
<div class="row" >
  <div class="col-xs-12 col-sm-4"><label>Orden de Trabajo Nº</label> <strong style="color: #dd4b39">*</strong> :
    <input id="id_ordTrabajo" name="" class="form-control" value="<?php echo $id_orden ?>" disabled/>
  </div>
  <div class="col-xs-12 col-sm-8"><label>Detalle</label> <strong style="color: #dd4b39">*</strong> :
    <input id="detaorden" name="" class="form-control" value="" disabled/>
  </div>
</div><hr>
-->
<form id="form_order">
    <input type="hidden" id="id_notaPedido" name="id_notaPedido" value="<?php echo $list[0]['id_notaPedido'] ?>">
    <input type="hidden" id="id_detaNota" name="id_detaNota" value="<?php echo $list[0]['id_detaNota'] ?>">
<div class="row" >
  <div class="col-xs-12 col-sm-6 col-md-4"><label>Código de Artículo</label> <strong style="color: #dd4b39">*</strong> :
    <input type="hidden" id="id_articulo" name="id_articulo" value="<?php echo $list[0]['artId'] ?>">
    <input type="text" class="artOrdInsum form-control" id="artOrdInsum" value="<?php echo $list[0]['artBarCode'] ?>">
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4"><label>Descripción de Artículo</label> <strong style="color: #dd4b39">*</strong> :
    <input type="text" class="decripInsumo form-control" id="decripInsumo" value="<?php echo $list[0]['artDescription'] ?>" placeholder="Descripción">
    <input type="hidden" name="" class="id-artOrdIns form-control" id="id-artOrdIns" value="<?php echo $list[0]['medida'] ?>" disabled>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4"><label>Proveedor</label> <strong style="color: #dd4b39">*</strong> :
    <select  id="proveedor" name="proveedor" class="form-control" />
    <!--<input class="hidden" type="text" id="proveedor" name="proveedor" value="1">-->
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4"><label>Cantidad</label> <strong style="color: #dd4b39">*</strong> :
    <input id="cantidad" name="cantidad" class="form-control" value="<?php echo $list[0]['cantidad'] ?>"/>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4"><label>Fecha de Entrega</label> <strong style="color: #dd4b39">*</strong> :
    <input type="text" id="fechaEnt" name="fechaEnt" class="form-control datepicker" value="<?php echo $list[0]['fechaEntrega'] ?>"/>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4"><label>Medida</label> <strong style="color: #dd4b39">*</strong> :
    <input type="text" id="medida" name="medida" class="form-control" value="<?php echo $list[0]['medida'] ?>"/>
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

llenar_proveedor(<?php echo $list[0]['provid'] ?>);
function llenar_proveedor(id){
    // Trae Proveedores y llena select
    console.log(id);
    $.ajax({
      type: 'POST',
      url: 'index.php/Notapedido/getProveedor',
      success: function(data){
        $('#proveedor').text("");
        for(var i=0; i < data.length ; i++){
            var selectAttr = '';
            if(data[i]['provid'] == id) { var selectAttr = 'selected'; }
            var opcion   = "<option value='"+data[i]['provid']+"' "+selectAttr+">" +data[i]['provnombre']+ "</option>" ;
            $('#proveedor').append(opcion);
        }
      },
      error: function(result){
        console.log(result);
      },
      dataType: 'json'
    });
}

// Carga datepicker para fecha
$( "#fechaEnt" ).datepicker({
  dateFormat: 'yy-mm-dd',
});

function validarCampos(){

  var error = false;

  if ($("#cantidad").val() == "") {
    error = true;
    console.log('cantidad');

  }
  if ($("#proveedor").val() == "-1") {
    error = true;
    console.log('rpoveedor');
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