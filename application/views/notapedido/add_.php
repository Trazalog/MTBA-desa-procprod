<input type="hidden" id="permission" value="<?php echo $permission;?>">
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          Revise que todos los campos obligatorios esten seleccionados
      </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success" id="error2" style="display: none">
          <h4></h4>
          EL EQUIPO POSEE COMPONENTES ASOCIADOS
      </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-success" id="error3" style="display: none">
          <h4></h4>
          EL EQUIPO NO POSEE COMPONENTES ASOCIADOS
      </div>
  </div>
</div>
<!--
<div class="row" >
  <div class="col-xs-12 col-sm-4"><label>Orden de Trabajo Nº</label> <strong style="color: #dd4b39">*</strong> :
  </div>
  <div class="col-xs-12 col-sm-8"><label>Detalle</label> <strong style="color: #dd4b39">*</strong> :
    <input id="detaorden" name="" class="form-control" value="" disabled/>
  </div>
</div><hr>
-->
<input id="id_ordTrabajo" name="" class="hidden" value="<?php echo $id_orden ?>"/>
<form>
<div class="row" >
  <div class="col-xs-12 col-sm-6 col-md-4"><label>Código de Artículo</label> <strong style="color: #dd4b39">*</strong> :
    <input type="hidden" id="id_articulo" name="">
    <input type="text" class="artOrdInsum form-control" id="artOrdInsum" value="" placeholder="Buscar...">
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4"><label>Descripción de Artículo</label> <strong style="color: #dd4b39">*</strong> :
    <input type="text" class="decripInsumo form-control" id="decripInsumo" value="" placeholder="Descripción" disabled>
    <input type="hidden" name="" class="id-artOrdIns form-control" id="id-artOrdIns" value="" disabled>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4"><label>Proveedor</label> <strong style="color: #dd4b39">*</strong> :
    <select  id="proveedor" name="" class="form-control" />
    <input class="hidden" type="text" id="proveedor" name="proveedor" value="1">
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4"><div class="form-group"><label>Cantidad</label> <strong style="color: #dd4b39">*</strong> :
    <input  id="cantidad" name="" class="form-control numerico" placeholder="Ingrese cantidad..."/>
  </div></div>
  <div class="col-xs-12 col-sm-6 col-md-4"><div class="form-group"><label>Fecha de Entrega</label> <strong style="color: #dd4b39">*</strong> :
    <input  type="text" id="fechaEnt" name="fechaEnt" class="form-control datepicker fecha" placeholder="Selecciones fecha..."/>
  </div></div>
  <div class="col-xs-12 col-sm-6 col-md-4"><div class="form-group"><label>Medida</label> <strong style="color: #dd4b39">*</strong> :
    <input  type="text" id="medida" name="medida" class="form-control numerico" placeholder="ingrese medida..."/>
  </div><select id="magnitud" placeholder="Medida..." style="float:right;"><option>kilometro</option><option>decametro</option><option>metro</option></select></div><br>
  <div class="clearfix"></div>
  <div class="col-xs-12">
    <button type="button" class="btn btn-success" id="addcompo" onclick="javascript:armarTabla()" style="margin-top: 15px"><i class="fa fa-check">Agregar</i></button>
  </div>
  <!-- <div class="col-xs-8">
    <label>Observaciones:</label>
    <textarea class="form-control" id="descrip" name="descrip"></textarea>
  </div> -->
</div></form><hr>

<!-- tabla-->
<div class="row" >
  <div class="col-xs-12">
    <form id = "form_order">
      <table class="table table-bordered tabModInsum" id="tabModInsum" border="1px">
        <thead>
           <tr>
            <th width="2%">Acciones</th>
            <th width="3%">Ord. Trab.</th>
            <th width="3%">Artículos</th>
            <th width="3%">Cantidad</th>
            <!-- <th width="5%">Proveedor</th> -->
            <th width="3%">Fecha Entrega</th>
            <th width="2%">Medida</th>
          </tr>
        </thead>
        <tbody>
          <!-- -->
        </tbody>
      </table>
    </form>
  </div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
  <button type="button" class="botones btn btn-primary" onclick="javascript:enviarOrden()">Guardar</button>
</div>  <!-- /.modal footer -->


<style>
  input.celda{border: none; width: 90%;}
  .ui-autocomplete {
    z-index: 100000;
  }
</style>


<script>
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
    }).on('success.form.bv', function(e) {
            // Prevent form submission
          
            e.preventDefault();
           
    });
</script>
<script>
desc = decodeURI( '<?php echo $descripcion ?>' );
$("#detaorden").val( desc );

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
  change: function (event, ui) {
        if (ui.item == null || ui.item == undefined) {
            $("#artOrdInsum").val("");
            $("#decripInsumo").val("");
            alert("Articulo Inexistente");
           // $("#artOrdInsum").attr("disabled", false);
        } else {
          // $("#artOrdInsum").attr("disabled", true);
        }
    }
});



// Trae Proveedores y llena select
$.ajax({
  type: 'POST',
  url: 'index.php/Notapedido/getProveedor',
  success: function(data){

    var opcion   = "<option value='-1'>Seleccione...</option>" ;
    $('#proveedor').append(opcion);
    for(var i    =0; i < data.length ; i++){
      //var nombre = data[i]['codigo'];
      var opcion   = "<option value='"+data[i]['provid']+"'>" +data[i]['provnombre']+ "</option>" ;
      $('#proveedor').append(opcion);
    }
  },
  error: function(result){
    console.log(result);
  },
  dataType: 'json'
});


// Carga datepicker para fecha
$( "#fechaEnt" ).datepicker().on('change', function(e) {
       // $('#genericForm').bootstrapValidator('revalidateField',$(this).attr('name'));
	   console.log('Validando Campo...'+$(this).attr('name'));
	   $('form').data('bootstrapValidator').resetField($(this),false);
	   $('form').data('bootstrapValidator').validateField($(this));
    });;


// Arma tabla dinamica
var regInsum = 0;         // variable incrementable en func, para diferenciar los inputs
function armarTabla(){   // inserta valores de inputs en la tabla
  var errorVal = validarCampos();
  if (errorVal == true) {

    alert('campo vacio');
    return;
  }else{
    var $id_Orden     = $("#id_ordTrabajo").val();
    var $desCripInsum = $("#decripInsumo").val();
    var $id_Insumo    = $("#id_articulo").val();
    var $cantOrdInsum = $("#cantidad").val();
    var $proveedor    = $("select#proveedor option:selected").html();
    var $id_proveedor = $("select#proveedor option:selected").val();
    //var $id_proveedor = $("input#proveedor").val();
    var $fecha        = $("#fechaEnt").val();
    var $medida       = $("#medida").val()+" "+$('select#magnitud option:selected').html();

    //tabla = $('.tabModInsum').DataTable();
    //$( $.fn.dataTable.tables( true ) ).DataTable().columns.adjust();

  $(".tabModInsum tbody").append(
    '<tr>'+
      '<td><i class="fa fa-ban elimrow text-light-blue" style="cursor: pointer; margin-left: 5px;"></i></td>'+

       '<td class=""><input type="text" name="orden_Id'+ '['+ regInsum+']' +'" class="celda ord_Id" id="ord_Id" value="'+$id_Orden+'" placeholder=""></td>'+

       '<td class=""><input type="text" class="celda insum_Desc" id="insum_Desc" value="'+$desCripInsum+'" placeholder=""></td>'+

       '<td class="hidden id_Insumo" id="id_Insumo"><input type="text" name="insum_Id'+ '['+ regInsum+']' +'" class="celda insum_Id" id="insum_Id" value="'+$id_Insumo+'" placeholder=""></td>'+

       '<td class="cant_insumos" id="cant_insumos"><input type="text" name="cant_insumos'+ '['+ regInsum+']' +'" class="celda cant_insumos" id="cant_insumos" value="'+$cantOrdInsum+'" placeholder=""></td>'+

       '<td class="hidden nom_prov" id="nom_prov"><input type="text" class="celda nom_proveed" id="nom_proveed" value="'+$proveedor+'" placeholder=""></td>'+

       '<td class="hidden id_prov" id="id_prov"><input type="text" name="proveedid'+ '['+ regInsum+']' +'" class="celda proveedid" id="proveedid" value="'+$id_proveedor+'" placeholder=""></td>'+

       '<td class=" fecha" id="fecha"><input type="text" name="fechaentrega'+ '['+ regInsum+']' +'" class="celda fechaentrega" id="fechaentrega" value="'+$fecha+'" placeholder=""></td>'+

       '<td class="medida" id=medida"><input type="text" name=medida'+ '['+ regInsum+']' +'" class="celda medida" id="medida" value="'+$medida+'" placeholder=""></td>'+

    '<tr>');

    regInsum++;
  }
}

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


// Evento que selecciona la fila y la elimina
$(document).on("click",".elimrow",function(){
    var parent = $(this).closest('tr');
    $(parent).remove();
});

// Guarda Nota de Pedido
function enviarOrden() {
  var datos = $("#form_order").serializeArray();
  console.table(datos);
  WaitingOpen('Guardando cambios');
  $.ajax({
    data: datos,
    type: 'POST',
    dataType: 'json',
    url: 'index.php/Notapedido/setNotaPedido',
    success: function(result){
      WaitingClose("Guardado con Exito...");
      $('#modalRepuestos').modal('hide');
      traerPedidosRep();
    },
    error: function(result){
      WaitingClose();
      alert("Error en guardado...");
    },
  });
}

//cargo datatable
//$('.tabModInsum').DataTable();




  // Carga tabla con valores ya existentes
  /*llenarTabla();
  function llenarTabla(){
    var idOT = $('#id_ordTrabajo').val();
    console.log("id ot: "+idOT);
    $.ajax({
      data: { idOT:idOT },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/Notapedido/getRepuestos',
      success: function(data){
        console.table(data);
      },
      error: function(result){
        console.log(result);
      },
    });
  }*/

  //llena la tabla con todos los valores de pedido de repuestos
  /*function crearTableBody(data){
    console.table(data);
    var regInsum = 0;

  }*/
</script>
<!-- / Validacion de campos y Envio form -->