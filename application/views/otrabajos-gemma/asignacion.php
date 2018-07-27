<input type="hidden" id="permission" value="<?php echo $permission;?>">
 <div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          Revise que todos los campos obligatorios esten seleccionados
      </div>
  </div>
</div>
<section class="content">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"> Asignación de tareas</h3>
            <?php
            if (strpos($permission,'Add') !== false) {
              echo '<button class="btn btn-block btn-success" style="width: 100px; margin-top: 10px;" id="listado">Ver Listado</button>';           
            }
            ?>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="row" >
            <div class="col-sm-12 col-md-12">
              <div class="col-xs-8">Tarea
                <input type="text" class="form-control" id="tarea"  name="tarea" placeholder="Ingrese descripcion de tarea...">
              </div>
              <div class="col-xs-4">
                <input type="hidden"  id="numord" name="numord" value="<?php echo $id_orden;?>"> </input>
              </div>  
              <br>
              <div class="col-xs-4">
                <button type="button" class="btn btn-success" id="agregar"><i class="  fa fa-plus"></i></button>
              </div>
              <br>
              <br>
              <table id="orden" class="table table-bordered table-responsive">
                <thead>
                  <tr>
                    <th width="2%"></th>
                    <th width="2%"></th>
                    <th width="2%"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>   
                </tbody>
              </table>
            </div>
          </div>          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="guardar()">Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>        
</section>

<script>
  var codglo= "";
  var tareaglob= "";
  var idglob= "";
  $('#listado').click( function cargarVista(){
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/index/<?php echo $permission; ?>");
    WaitingClose();
  });

  $('#agregar').click(function (e) {
    console.log("Estoy agregando ");
    var numord= $('#numord').val();
    console.log(numord);
    var tarea1= $('#tarea').val();
    tareaglob= tarea1;
    var tr = "<tr id='"+numord+"'>"+
              "<td ><i class='fa fa-times-circle' style='color: #FF3349 '; cursor: 'pointer' title='Eliminar'></i></td>"+
              "<td><i class=' fa fa-user' style='color: #3333FF '; cursor: 'pointer' title='Asignacion de usuario'></i></td>"+
              "<td><i class=' fa fa-calendar' style='color: #36B441    '; cursor: 'pointer' title='Fecha'></i></td>"+
              "<td>"+tarea1+"</td>"+
              "<td></td>"+
                             
            "</tr>";          
    console.log(tr); 
    $('#orden tbody').append(tr); 

  //var celda= $(this).parents("tr").find("td").eq(4).html();  
    $(document).on("click",".fa-times-circle",function(){
      var parent = $(this).closest('tr');
      $(parent).remove();
    });  
    $('#tarea').val(''); 
}); 

$( function() {
      var dataF = function () {
          var tmp = null;
          $.ajax({
              'async': false,
              'type': "POST",
              'global': false,
              'dataType': 'json',
              'url': "Otrabajo/getArticulo",
              'success': function (data) {
                  tmp = data;
              }
          });
          return tmp;
      }();

      $(function() {
          $(".codigo").autocomplete({
              source: dataF,
              delay: 100,
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
                  //$(this).val(ui.item.label);
                  $(this).val(ui.item.value);
                 // $("#codigo").val(ui.item.value); 
                  $("#codigo").val(ui.item.label);
                 
                  //console.log("id articulo de orden insumo: ") 
                  //console.log(ui.item.value);  
                  
                              
              },
              
          });
      });
} );

function traer_usuarios(){

      $.ajax({
        type: 'POST',
        data: { },
        url: 'index.php/Otrabajo/getusuario', //index.php/
        success: function(data){
               
                var opcion  = "<option value='-1'>Seleccione...</option>" ; 
                $('#codigo').append(opcion); 
                for(var i=0; i < data.length ; i++) {

                      var nombre = data[i]['usrName'];
                      var opcion  = "<option value='"+data[i]['usrId']+"'>" +nombre+ "</option>" ; 

                    $('#codigo').append(opcion); 
                                   
                }
              },
        error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
      });
}

function guardarmodif(){

  console.log("Estoy gurdando lo modificado");
  var codigo1= $('#codigo').val();
  var cod = $("select#codigo option:selected").html(); 
  codglo= cod;
  console.log ("El nombre de usuario es:");
  console.log (cod);
  var numord= $('#numord').val();
  idglob=numord;
  console.log ("El id de OT es:");
  console.log(idglob);

  $("tr#idglob").find("td").eq(4).val(cod); 
                                                              
}


</script>

<!-- Modal modalSale -->
<div class="modal fade" id="modalSale" tabindex="2000" aria-labelledby="myModalLabel" style="display: none;">
  <div class="modal-dialog" role="document" style="width: 40%">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerro()"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="modalActionSale" class="fa fa-user" style="color: #f39c12" > </span> Asignación de usuario</h4> 
      </div>

      <div class="modal-body" id="modalBodySale">
        <div class="row" >
          <div class="col-sm-12 col-md-12">
            <fieldset> </fieldset>
            <br>
            <div class="col-xs-6">Usuario
              <select id="codigo" name="codigo" value="" class="form-control "></select>
            </div>
                                                        
          </div>
        </div>
      </div>       
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cerro()">Cancelar</button>
        <button type="button" class="btn btn-primary" id="reset" data-dismiss="modal" onclick="guardarmodif()">Guardar</button>
      </div>

    </div>
  </div>
</div>