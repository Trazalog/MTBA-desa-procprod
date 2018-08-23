<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          
          <h2> Tareas Estandar</h2>  
          <a href="#" id="username" data-type="text" data-pk="1" data-url="/post" data-title="Enter username"></a>
        
          <?php
          if (strpos($permission,'Add') !== false) {
            echo '<button class="btn btn-block btn-success" style="width: 100px; margin-top: 10px;" data-toggle="modal" data-target="#modalAgregar" id="btnAdd" title="Nueva">Agregar</button>';
          }
          ?>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="Tarea" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="12%">Acciones:</th>
                <th>Id:</th>
                <th>Descripcion:</th>
                <th>Duracion:</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($list as $f)
                {

                  echo '<tr>';
                  echo '<td>';
                  
                  if (strpos($permission,'Edit') !== false) {
                   echo '<i class="fa fa-fw fa-pencil" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Editar"  ></i>';
                  } 

                  if (strpos($permission,'Del') !== false) {
                   echo '<i class="fa fa-trash" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Eliminar Tarea" ></i>';
                  }
                  
                  echo '</td>';
                  echo '<td style="text-align: left">'.$f['id_tarea'].'</td>';
                  echo '<td style="text-align: left">'.$f['descripcion'].'</td>';
                  echo '<td style="text-align: left">'.$f['duracion_std'].'</td>';
                  
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

$(document).ready(function() {
    $('#username').editable();
});

function guardarTarea(){
      var descripcion=$('#descripcion').val();
      var duracion_std=$('#duracion_std').val();

    var hayError = false;
    if($('#descripcion').val() == '' || $('#duracion_std').val() == '' )
    {
      hayError = true;
    }
    if(hayError == true){
      $('#error').fadeIn('slow');
      return;
    }
    $('#error').fadeOut('slow');          $.ajax({
             type: 'POST',
             data: {    "descripcion":descripcion,  "duracion_std":duracion_std },
             url: 'index.php/Tareaest/Guardar_Tarea', 
             success: function(result){
                WaitingClose();
                $('#modalAgregar').modal('hide');
                 ActualizarPagina();
            },
            error: function(result){
                alert("OPERACIÓN FALLIDA");
            }
          });
    }
    var id_ ="";
    $(".fa-pencil").click(function (e) { 

        id_ = $(this).parents('tr').find('td').eq(1).html();
        var descripcion = $(this).parents('tr').find('td').eq(2).html();
        var duracion_std = $(this).parents('tr').find('td').eq(3).html();

        $('#cuerpoModalEditar').html(' <div class="row">'+
          '<div class="col-xs-12">'+
            '<div class="alert alert-danger alert-dismissable" id="errorE" style="display: none">'+
             '<h4><i class="icon fa fa-ban"></i> Error!</h4>'+
             'Revise que todos los campos esten completos'+
           '</div>'+
         '</div>'+
       '</div>'+
          '<div class="row">'+
            '<div class="col-xs-4">'+
               ' <label style="margin-top: 7px;">Descripcion: <strong style="color: #dd4b39">*</strong>: </label>'+
            '</div>'+
            '<div class="col-xs-5">'+
                '<input type="text" class="form-control"  id="descripcionE" value="'+descripcion+'" >'+
            '</div>'+
        '</div><br>'+
          '<div class="row">'+
            '<div class="col-xs-4">'+
               ' <label style="margin-top: 7px;">Duracion: <strong style="color: #dd4b39">*</strong>: </label>'+
            '</div>'+
            '<div class="col-xs-5">'+
                '<input type="text" class="form-control"  id="duracion_stdE" value="'+duracion_std+'" >'+
            '</div>'+
        '</div><br>'        );
        $('#modalEditar').modal('show');

    });    function editarTarea(){
     var id=id_;
      var descripcion=$('#descripcionE').val();
      var duracion_std=$('#duracion_stdE').val();
     
    var hayError = false;
    if($('#descripcionE').val() == '' || $('#duracion_stdE').val() == '' )
    {
      hayError = true;
    }
    if(hayError == true){
      $('#errorE').fadeIn('slow');
      return;
    }
    $('#errorE').fadeOut('slow');
     $.ajax({
       type: 'POST',
       dataType : "json",
       data: {"id_tarea" : id,  "descripcion":descripcion,  "duracion_std":duracion_std },
       url: 'index.php/Tareaest/Modificar_Tarea', 
       success: function(result){
        WaitingClose();
       $('#modalEditar').modal('hide');
        ActualizarPagina();
        },
        error: function(result){
            alert("OPERACIÓN FALLIDA");
            console.log(result);
        }

       });

    }
  $(".fa-trash").click(function (e) { 

    id_ = $(this).parents('tr').find('td').eq(1).html();
    $('#modalEliminar').modal('show');
    
  });

  function eliminarTarea(){

    $.ajax({
      type: 'POST',
      data: { "id_tarea": id_},
      url: 'index.php/Tareaest/Eliminar_Tarea', 
      success: function(data){
        WaitingClose();
        ActualizarPagina();                
      },

      error: function(result){
        alert("OPERACION FALLIDA");
      }
    });

  }function ActualizarPagina(){ //Funcion Resfresca
  $('#content').empty();
  $("#content").load("<?php echo base_url(); ?>index.php/Tareaest/index/<?php echo $permission; ?>");

}$(function () {
      
      $('#plantilla').DataTable({
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
    });</script>
<<div class="modal" id="modalAgregar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Agregar Tarea</h4>
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

        <div class="row"> 
        <div class="col-xs-4">
                        <label style="margin-top: 7px;">descripcion <strong style="color: #dd4b39">*</strong>: </label>
                        </div>
                        <div class="col-xs-5">
                        <input type="text" class="form-control"  id="descripcion" >
                        </div>
</div><br>
        <div class="row"> 
        <div class="col-xs-4">
                        <label style="margin-top: 7px;">duracion_std <strong style="color: #dd4b39">*</strong>: </label>
                        </div>
                        <div class="col-xs-5">
                        <input type="text" class="form-control"  id="duracion_std" >
                        </div>
</div><br>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" onclick="guardarTarea()" >Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><!-- Modal -->
<div class="modal" id="modalEditar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Editar Tarea</h4>
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

         
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" onclick="editarTarea()" >Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><!-- Modal -->
<div class="modal" id="modalEliminar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Eliminar Tarea</h4>
      </div>
      <div class="modal-body" id="cuerpoModalEditar">
       <h5>¿Desea eliminar el registro?</h5> 
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="eliminarTarea()" >Eliminar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->