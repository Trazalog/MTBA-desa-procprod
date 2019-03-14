<input type="hidden" id="permission" value="<?php echo $permission; ?>">


<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        <center>
          <h1 class="box-title">Listado de Subsectores</h1>
        </center>
        <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregar">Agregar</button>
         
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="subsector" class="table table-bordered table-hover">
            <thead>
              <tr>                
                <th width="20%">Acciones</th>
                <th>ID</th>
                <th>Descripción</th>   
                <th>Coordinador</th>   
              </tr>
            </thead>
            <tbody>
             <?php
                foreach ($list as $f) {
                    echo '<tr id="'.$f['id_subsector'].'">';
                    echo '<td>';
                    
                    if (strpos($permission,'Edit') !== false) {
                     echo '<i class="glyphicon glyphicon-pencil edit-sub" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Editar" data-toggle="modal" data-target="#modalModificar"  ></i>';
                     
                    } 
  
                    if (strpos($permission,'Del') !== false) {
                     echo '<i class="fa fa-trash" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Eliminar plantilla"  data-toggle="modal" data-target="#modalEliminar"></i>';
                    }
                    if (strpos($permission,'View') !== false) {
                      echo '<i class="fa fa-search" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Consultar" data-toggle="modal" data-target="#modalVer"></i>';
                    }
                    echo '</td>';
                    echo '<td style="text-align: left">'.$f['id_subsector'].'</td>';
                    echo '<td style="text-align: left">'.$f['descripcion'].'</td>';
                    echo '<td tyle="text-align: left">'.$f['usuario_coordinador'].'</td>';
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

function guardarSubsector(){
    var descripcion = $('#nuevoSubsector').val();
    var coordinador = $('#nuevoCoordinador option:selected').val();
    if(coordinador==-1){alert('Debe seleccionar un coordinador');return;}
    $.ajax({
        type: 'POST',
        data: { 'descripcion': descripcion, 'coordinador': coordinador },
        url: 'index.php/Subsector/agregarSubsector',
        success: function(result){
            ActualizarPagina();
        },
        error: function(result){
              
          alert("No se pudo realizar la operación");
        }   
    }); 
}

function modificarSubsector() {
  var descripcion = $('#modificarSubsector').val();
  var coordinador = $('#modificarCoordinador').val();
  $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { 'id_subsector': id_seleccionada, 'descripcion': descripcion, 'usuario_coordinador': coordinador},
        url: 'index.php/Subsector/modificarSubsector',
        success: function(result){

            ActualizarPagina();

        },
        error: function(result){

           alert("No se pudo realizar la operación");
        }    
    }); 
}

function eliminarSubsector() {
  $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { 'id': id_seleccionada},
        url: 'index.php/Subsector/eliminarSubsector',
        success: function(result){
 
            ActualizarPagina();

        },
        error: function(result){

          alert("No se pudo realizar la operación");
        }    
    }); 
}
 var id_seleccionada='';
 $(".fa-trash").click(function (e) { 
      
       id_seleccionada = $(this).parent('td').parent('tr').attr('id'); 
      console.log("Eliminar Subsector..."+id_seleccionada);
        
  });

  $(".edit-sub").click(function (e) { 
      
      id_seleccionada = $(this).parent('td').parent('tr').attr('id'); 
      var descripcion = $(this).parents('tr').find('td').eq(2).html();
      var id_coordinador = $(this).parents('tr').find('td').eq(3).html();
      $('#modificarSubsector').val(descripcion);
      $('#modificarCoordinador').val(id_coordinador);
     console.log("Modificar Subsector..."+id_seleccionada+" -> "+descripcion);
       
 });

  $(".fa-search").click(function (e) { 
      
      var descripcion = $(this).parents('tr').find('td').eq(2).html();
      $('#verSubsector').val(descripcion); 
       
 });

$(function () {  
      $('#subsector').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "language": {
                "lengthMenu": "Ver _MENU_ filas por página",
                "zeroRecords": "No hay registros",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrando de un total de _MAX_ registros)",
                "sSearch": "Buscar:  ",
                "oPaginate": {
                    "sNext": "Sig.",
                    "sPrevious": "Ant."
                  }
          }
      });
    });

function ActualizarPagina(){ 
   $('.content').empty();
   $(".content").load("<?php echo base_url(); ?>index.php/Subsector/index/<?php echo $permission; ?>");
 } 

</script>


<div class="modal" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-plus-square btncolor " style="color: #6aa61b" > </span> Nuevo Subsector </h4>
        </div> 
        <center>
        <form style="margin: 50px;">
        <h4>Descripción: <input class="form-control" id='nuevoSubsector'/></h4>
        <select class="form-control" id="nuevoCoordinador">
        <option value="-1">Seleccionar Coordinador...</option>
        <?php 
          foreach($coordinadores as $c){
            echo '<option value="'.$c['userName'].'">'.$c['firstname'].' '.$c['lastname'].'</option>';
          }
        ?>
        </select>
        </form>
        </center>
        
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
          <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="guardarSubsector($())" >Guardar</button> 
        </div>   
    </div>  
  </div>
</div>

<div class="modal" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-pencil-square btncolor " style="color: #6aa61b" > </span> Modfiicar Subsector </h4>
        </div> 
          <form style="margin: 50px;">
          <h4>Descripción: <input class="form-control" id='modificarSubsector'/></h4>
          <select class="form-control" id="modificarCoordinador">
          <option value="-1">Seleccionar Coordinador...</option>
          <?php 
            foreach($coordinadores as $c){
              echo '<option value="'.$c['userName'].'">'.$c['firstname'].' '.$c['lastname'].'</option>';
            }
          ?>
          </select>
          </form>
        
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
          <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="modificarSubsector()" >Modificar</button> 
        </div>   
    </div>  
  </div>
</div>

<div class="modal" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-plus-square btncolor " style="color: #6aa61b" > </span> Nuevo Subsector </h4>
        </div> 
        <center>
        <h4>¿Confirma Eliminar el Subsector?</h4>
        </center>
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
          <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="eliminarSubsector()" >Eliminar</button> 
        </div>   
    </div>  
  </div>
</div>

<div class="modal" id="modalVer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-search btncolor " style="color: #6aa61b" > </span> Ver Subsector </h4>
        </div> 
        <center>
        <h4>Descripción: <input id='verSubsector'></input></h4>
        </center>
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
        </div>   
    </div>  
  </div>
</div>