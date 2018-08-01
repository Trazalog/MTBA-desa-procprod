<input type="hidden" id="permission" value="<?php echo $permission; ?>">

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        <center>
          <h1 class="box-title">ABM Equipos</h1>
        </center>
         
        </div><!-- /.box-header -->
        <div class="box-body">
        <div class="col-sm-5">
            <form id="form-create-empleado" style="padding:0px 15px;" class="form-horizontal" >
                <div class="form-group">
                  <label style="margin-top: 7px;">Descripción: <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" id="descripcion" class="form-control" placeholder="Descripción"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Capacidad: <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" id="capacidad" class="form-control" placeholder="Capacidad"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Subsector: <strong style="color: #dd4b39">*</strong>: </label>
                  <select  id="subsector" class="form-control">
                     <option value="0" selected="selected">Seleccionar...</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <button class="btn btn-primary btn-block" onclick="guardarEquipo()">Guardar</button>
              </div>
            </form>
          </div>  
          <div class="col-sm-7">
           <div class="form-group">
              <button style="margin-top: 30px;" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalAgregar">Nuevo Subsector</button>
            </div>
          </div>

        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->




  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        <center>
          <h1 class="box-title">Listado de Equipos</h1>
        </center>
         
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="equipos" class="table table-bordered table-hover">
            <thead>
              <tr>                
                <th width="20%">Acciones</th>
                <th>ID</th>
                <th>Descripción</th>
                <th>Capacidad</th>
                <th>Subsector</th>   
              </tr>
            </thead>
            <tbody>
             <?php
                foreach ($list as $f) {
                    echo '<tr id="'.$f['id_equipo'].'" name="'.$f['id_subsector'].'">';
                    echo '<td>';
                    
                    if (strpos($permission,'Edit') !== false) {
                     echo '<i class="fa fa-fw fa-pencil" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Editar" data-toggle="modal" data-target="#modalModificar"  ></i>';
                     
                    } 
  
                    if (strpos($permission,'Del') !== false) {
                     echo '<i class="fa fa-trash" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Eliminar Equipo"  data-toggle="modal" data-target="#modalEliminar"></i>';
                    }
                    if (strpos($permission,'View') !== false) {
                      echo '<i class="fa fa-search" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Consultar" data-toggle="modal" data-target="#modalVer"></i>';
                    }
                    echo '</td>';
                    echo '<td style="text-align: left">'.$f['id_equipo'].'</td>';
                    echo '<td style="text-align: left">'.$f['descripcion'].'</td>';
                    echo '<td style="text-align: left">'.$f['capacidad'].'</td>';
                    echo '<td style="text-align: left">'.$f['subsector'].'</td>';
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

(function() {
   // your page initialization code here
   // the DOM will be available here
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: '',
        url: 'index.php/Subsector/ObtenerTodos',
        success: function(result){
          var selectorA = $('#subsector');
          var selectorE = $('#subsectorE');
          for(var x=0;x<result.length;x++){
            var opt="<option value="+result[x]['id_subsector']+">"+result[x]['descripcion']+"</option>";
            selectorA.append(opt);
            selectorE.append(opt);
                
          }  
          console.log("Cargando Subsectores...OK");
        },
        error: function(result){
              
          alert("No se pudo realizar la operación");
        }   
    }); 

})();

function guardarEquipo(){

    var id = $('#subsector').val();
    
    if(id==0){
      alert("Seleccionar un Subsector (Obligatorio*)");
      return;
    }
    var descripcion = $('#descripcion').val();
    var capacidad = $('#capacidad').val();
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { 'descripcion': descripcion, 'capacidad': capacidad, 'id_subsector':id },
        url: 'index.php/Equipo/agregarEquipo',
        success: function(result){

            ActualizarPagina();
     
        },
        error: function(result){
              
          alert("No se pudo realizar la operación");
        }   
    }); 
}

function modificarEquipo() {
  var descripcion = $('#descripcionE').val();
  var capacidad  = $('#capacidadE').val();
  var id_subsector = $('#subsectorE').val();
  $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { 'id_equipo':id_seleccionada, 'descripcion': descripcion, 'capacidad': capacidad, 'id_subsector':id_subsector},
        url: 'index.php/Equipo/modificarEquipo',
        success: function(result){

            ActualizarPagina();

        },
        error: function(result){

           alert("No se pudo realizar la operación");
        }    
    }); 
}

function eliminarEquipo() {
  $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { 'id': id_seleccionada},
        url: 'index.php/Equipo/eliminarEquipo',
        success: function(result){
 
            ActualizarPagina();

        },
        error: function(result){

          alert("No se pudo realizar la operación");
        }    
    }); 
}

function guardarSubsector(){
    var descripcion = $('#nuevoSubsector').val();
    $('#nuevoSubsector').val('');
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: { 'descripcion': descripcion },
        url: 'index.php/Subsector/agregarSubsector',
        success: function(result){
          
          var opt="<option value="+result+">"+descripcion+"</option>";
          $('#subsector').append(opt);  
          $('#subsectorE').append(opt); 
     
        },
        error: function(result){
              
          alert("No se pudo realizar la operación");
        }   
    }); 
}

 var id_seleccionada='';


 $(".fa-trash").click(function (e) { 
      
       id_seleccionada = $(this).parent('td').parent('tr').attr('id'); 
      console.log("Eliminar Equipo..."+id_seleccionada);
        
  });

  $(".fa-pencil").click(function (e) { 
      
      id_seleccionada = $(this).parent('td').parent('tr').attr('id'); 
      var id_subsector = $(this).parent('td').parent('tr').attr('name'); 
      var descripcion = $(this).parents('tr').find('td').eq(2).html();
      var capacidad = $(this).parents('tr').find('td').eq(3).html();
    //  var subsector = $(this).parents('tr').find('td').eq(4).html();
      $('#descripcionE').val(descripcion); 
      $('#capacidadE').val(capacidad); 
      $('#subsectorE').val(id_subsector); 
       
 });

  $(".fa-search").click(function (e) { 
      
      var descripcion = $(this).parents('tr').find('td').eq(2).html();
      var capacidad = $(this).parents('tr').find('td').eq(3).html();
      var subsector = $(this).parents('tr').find('td').eq(4).html();
      $('#descripcionV').val(descripcion); 
      $('#capacidadV').val(capacidad); 
      $('#subsectorV').val(subsector); 
       
 });
 

$(function () {  
      $('#equipos').DataTable({
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
   $(".content").load("<?php echo base_url(); ?>index.php/Equipo/index/<?php echo $permission; ?>");
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
        <h4>Descripción: <input id='nuevoSubsector'></input></h4>
        </center>
        
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
          <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="guardarSubsector()" >Guardar</button> 
        </div>   
    </div>  
  </div>
</div>

<div class="modal" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-pencil-square btncolor " style="color: #6aa61b" > </span> Modfiicar Equipo </h4>
        </div>
        <form id="form-create-empleado" style="margin:25px;padding:0px 15px;" class="form-horizontal" >
                <div class="form-group">
                  <label style="margin-top: 7px;">Descripción: <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" id="descripcionE" class="form-control" placeholder="Descripción"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Capacidad: <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" id="capacidadE" class="form-control" placeholder="Capacidad"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Subsector: <strong style="color: #dd4b39">*</strong>: </label>
                  <select  id="subsectorE" class="form-control">
                     <option value="0" selected="selectedE">Seleccionar...</option>
                  </select>
                </div>
            </form>

        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
          <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="modificarEquipo()" >Modificar</button> 
        </div>   
    </div>  
  </div>
</div>

<div class="modal" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-plus-square btncolor " style="color: #6aa61b" > </span> Eliminar Equipo </h4>
        </div> 
        <center>
        <h4>¿Confirma Eliminar el Equipo?</h4>
        </center>
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
          <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="eliminarEquipo()" >Eliminar</button> 
        </div>   
    </div>  
  </div>
</div>

<div class="modal" id="modalVer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-search btncolor " style="color: #6aa61b" > </span> Ver Equipo </h4>
        </div> 
        <form id="form-create-empleado" style="margin:25px;padding:0px 15px;" class="form-horizontal" >
                <div class="form-group">
                  <label style="margin-top: 7px;">Descripción: <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" id="descripcionV" disabled="true" class="form-control" />
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Capacidad: <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" id="capacidadV" disabled="true" class="form-control" />
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Subsector: <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" id="subsectorV" disabled="true" class="form-control" />
                </div>
            </form>
        
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
        </div>   
    </div>  
  </div>
</div>