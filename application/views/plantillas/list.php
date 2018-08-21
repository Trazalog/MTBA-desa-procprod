<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <center>
          <h2> Plantillas </h2>  
          </center>
          <?php
          if (strpos($permission,'Add') !== false) {
            echo '<button class="btn btn-block btn-success" style="width: 100px; margin-top: 10px;" data-toggle="modal" onclick="Loadplantilla(0,\'Add\')" id="btnAdd" title="Nueva">Agregar</button>';
          }
          ?>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="plantilla" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="20%">Acciones</th>
                <th>Numero</th>
                <th>Descripcion</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($list as $f)
                {

                  echo '<tr>';
                  echo '<td>';
                  
                  if (strpos($permission,'Edit') !== false) {
                   echo '<i class="fa fa-plus" style="color:#8eb29a; cursor: pointer; margin-left: 15px;"  title="Ver y Agregar tareas" id="btnAddtarea" ></i>';

                   echo '<i class="fa fa-fw fa-pencil" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Editar" onclick="Loadplantilla('.$f['id_plantilla'].',\'Edit\')"  ></i>';
                   
                  } 

                  if (strpos($permission,'Del') !== false) {
                   echo '<i class="fa fa-trash" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Eliminar plantilla" onclick="Loadplantilla('.$f['id_plantilla'].',\'Del\')"></i>';
                  }
                  if (strpos($permission,'View') !== false) {
                    echo '<i class="fa fa-eye" style="color: #8eb29a; cursor: pointer; margin-left: 15px;" title="Consultar" onclick="Loadplantilla('.$f['id_plantilla'].',\'View\')"></i>';
                  }
                  echo '</td>';
                  echo '<td style="text-align: left">'.$f['id_plantilla'].'</td>';
                  echo '<td style="text-align: left">'.$f['descripcion'].'</td>';
                  
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
 
   

  function Loadplantilla(id_, action){
    idCobrador = id_;
    acCobrador = action;
    
    LoadIconAction('modalAction',action);
    //WaitingOpen('Cargando Plantilla');
      $.ajax({
            type: 'POST',
            data: { id : id_, act: action },
        url: 'index.php/plantilla/getplantillas', 
        success: function(result){
                      WaitingClose();
                      $("#modalBodyplantilla").html(result.html);
                      setTimeout("$('#modalplantilla').modal('show')",000);
              },
        error: function(result){
              WaitingClose();
              alert("error");
            },
            dataType: 'json'
        });
  }

  
  $('#btnSave').click(function(){
    
    if(acCobrador== 'View')
    {
      $('#modalplantilla').modal('hide');
      return;
    }

    var hayError = false;
    if($('#descrip').val() == '')
    {
      hayError = true;
    }
   

    if(hayError == true){
      $('#error').fadeIn('slow');
      return;
    }

    $('#error').fadeOut('slow');
    //WaitingOpen('Guardando cambios');
      $.ajax({
            type: 'POST',
            data: { 
                    id : idCobrador, 
                    act: acCobrador, 
                    name: $('#descrip').val(),
                    
                  },
        url: 'index.php/plantilla/setplantillas', 
        success: function(result){
                      WaitingClose();
                      $('#modalplantilla').modal('hide');
                      setTimeout("cargarView('plantilla', 'index', '"+$('#permission').val()+"');",1000);
              },
        error: function(result){
              WaitingClose();
              alert("error");
            },
            dataType: 'json'
        });
  });

$(".fa-plus").click(function (e) { 
  
    var id = $(this).parents('tr').find('td').eq(1).html();
    console.log("El id de Plantilla es:");
    console.log(id);
    iort= id;
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Plantilla/cargartarea/<?php echo $permission; ?>/"+iort+"");
    
    WaitingClose(); 
});

   

$(function () {
      
      $('#plantilla').DataTable({
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

</script>


<!-- Modal -->
<div class="modal fade" id="modalplantilla" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span>Plantilla</h4> 
      </div>
      <div class="modal-body" id="modalBodyplantilla">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="btnSave">Guardar</button>
      </div>
    </div>
  </div>
</div>
</script>