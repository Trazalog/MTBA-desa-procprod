<input type="hidden" id="permission" value="<?php echo $permission;?>">


<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        <center>
          <h1 class="box-title">Ordenes de Trabajo</h1>
        </center>
         
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="sector" class="table table-hover">
            <thead>
              <tr>                
                <th style="display:none"> </th>
                <th width="10%"> </th>
                <th>Nro:</th>
                <th>Descripcion:</th>
                <th>Fecha:</th>
                <th>Estado:</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($list as $f)
                {
                  $id=$f['id_orden'];

                  echo '<tr id="'.$id.'" class="'.$id.'" >';
                  echo '<td>';
                  if (strpos($permission,'Del') !== false) 
                  {
                  echo '<button type="button" id="btncolor" class="btn btn-success" data-toggle="modal" data-target="#finalizar">
                          <span class="glyphicon glyphicon-ok"></span>  </button> ';
                  }
                  
                  echo '</td>';
                  echo '<td class="celda" style="text-align: left ; display:none">'.$f['id_orden'].'</td>';
                  echo '<td class="celda" style="text-align: left">'.$f['nro'].'</td>';
                  echo '<td class="celda" style="text-align: left">'.$f['descripcion'].'</td>';
                  echo '<td class="celda" style="text-align: left">'.$f['fecha_entrega'].'</td>';
                  echo '<td class="celda" style="text-align: left">'.($f['estado'] == 'TE' ? '<small class="label pull-left bg-orange">Parcial</small>' : ($f['estado'] == 'C' ? '<small class="label pull-left bg-green">Iniciada</small>' : ($f['estado'] == 'P' ? '<small class="label pull-left bg-blue">Pedido</small>' : ($f['estado'] == 'As' ? '<small class="label pull-left bg-yellow">Asignado</small>' : '<small class="label pull-left bg-red">Entregado</small>')))).'</td>';
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

     var idfin="";

    //Tomo valor de la celda
        $('.celda').click( function () {

        var id_orden= $(this).parents('tr').find('td').eq(1).html();
        idfin = id_orden;
        console.log(idfin);
        WaitingOpen();
        $('.content').empty(); 
        $(".content").load("<?php echo base_url(); ?>index.php/Taller/getlistTareasOT/<?php echo $permission; ?>/" + idfin);
        WaitingClose();
      });

    //Cambio color del boton
      $('#btncolor').click(function(){
      $(this).toggleClass("btn-success btn-success");
      });

    //SUBTAREA TERMINADA, pasa a la partalla de SUBTAREAS terminadas 
    function guardar(){
    console.log("Estoy finalizando total la SUBTAREA ");
    console.log(idfin);
    $.ajax({
          type: 'POST',
          data: { idfin: idfin},
          url: 'index.php/Taller/FinalizaSubtarea', //index.php/
          success:function(data){
                  console.log(data);
                  alert("Se ha Finalizando la SUBTAREA");
                  
                },
            
          error: function(result){
                console.log(result);
              }
              //dataType: 'json'
      });
     
    }


  //ORDEN TERMINADA PARCIAL, pasa a la partalla de ot PARCIAL 
  function guardarparcial(){

    console.log("Estoy finalizando parcial la ot ");
    console.log(idfin); 
    $.ajax({
          type: 'POST',
          data: { idfin: idfin},
          url: 'index.php/Taller/CambioParcial', //index.php/
          success: function(data){
                  console.log(data);
                  alert("Se Finalizando PARCIAL LA ORDEN TRABAJO");
                  regresa();
                },
            
          error: function(result){
                console.log(result);
              }
              //dataType: 'json'
      });
  } 

  //ORDEN TERMINADA TOTAL, pasa a la partalla de ot terminadas 
    function guardartotal(){

    console.log("Estoy finalizando total la ot ");
    console.log(idfin);
    $.ajax({
          type: 'POST',
          data: { idfin: idfin},
          url: 'index.php/Taller/FinalizaOt', //index.php/
          success: function(data){
                  console.log(data);
                  alert("Se Finalizando la ORDEN TRABAJO");
                  regresa();
                },
            
          error: function(result){
                console.log(result);
              }
              //dataType: 'json'
      });
     
    }

    function iniciar(){
      alert("Se ha Inicado la OT");
                  regresa();
    }


$(function () {
    
    $('#sector').DataTable({
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


function regresa(){ 
  $('.content').empty();
  WaitingClose();
  $(".content").load("<?php echo base_url(); ?>index.php/Taller/index/<?php echo $permission; ?>");
}  


</script>
      

<div class="modal fade" id="finalizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">         
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="glyphicon glyphicon-check btncolor " style="color: #6aa61b" > </span> Finalización </h4>
        </div> 
                    <center>
                    <div>Elija la opción:</div>
                    </center>
                    <div class="modal-footer">
                      <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="guardarparcial()"> PARCIAL</button>     
                      <button  type="button" class="btn btn-success" id="btnSave" data-dismiss="modal" onclick="guardartotal()" >TOTAL</button> 
                    </div> 
                  

        </div>  
    </div>
  </div>
</div>