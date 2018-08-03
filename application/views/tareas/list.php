<input type="hidden" id="permission" value="<?php echo $permission;?>">


<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

        <center>
          <h1 class="box-title">Listado de Tareas</h1>
        </center>
         
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="sector" class="table table-hover">
            <thead>
              <tr>                
                <th width="10%"> </th>
                <th>Nro:</th>
                <th>Descripcion:</th>
                <th>Fecha:</th>
                <th>id tarea bonit</th>
                <!-- <th>Estado:</th> -->     
              </tr>
            </thead>
            <tbody>
              <?php

                $lista = json_decode($list,true);
                // echo "<pre>";
                // var_dump($lista);
                foreach($lista as $f)
                {
                  $id=$f["id"];

                  echo '<tr id="'.$id.'" class="'.$id.'" >';
                  echo '<td>';
                    if (strpos($permission,'Del') !== false){
                    echo '<button type="button" id="btncolor" class="btn btn-success" data-toggle="modal" data-target="#finalizar">
                            <span class="glyphicon glyphicon-ok"></span>  </button> ';
                    }
                  echo '</td>';
                  echo '<td class="celda" style="text-align: left">'.$f['processId'].'</td>';
                  echo '<td class="celda" style="text-align: left">'.$f['displayName'].'</td>';
                  echo '<td class="celda" style="text-align: left">'.$f['reached_state_date'].'</td>';
                  
                  // id de tarea en bonita
                  //echo '<td class="celda" style="text-align: left">'.$f['id'].'</td>';

                  echo '<td class="celda" style="text-align: left">'.$f['id'].'</td>';
                  // echo '<td class="celda" style="text-align: left">'.($f['estado'] == 'TE' ? '<small class="label pull-left bg-orange">Parcial</small>' : ($f['estado'] == 'C' ? '<small class="label pull-left bg-green">Iniciada</small>' : ($f['estado'] == 'P' ? '<small class="label pull-left bg-blue">Pedido</small>' : ($f['estado'] == 'As' ? '<small class="label pull-left bg-yellow">Asignado</small>' : '<small class="label pull-left bg-red">Entregado</small>')))).'</td>';
                  
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
var id_tarea = "";
//Tomo valor de la celda y carga detalle de la tarea
  $('.celda').click( function () {
    //console.log("num orden");
    // tomar de aca id de orden e id de tarea para bonita
    // var id_orden = $(this).parents('tr').find('td').eq(1).html();
    
    //var idTarBonita = $(this).parents('tr').find('td').eq(1).html();
    var idTarBonita = $(this).parents('tr').find('td').eq(4).html();
    console.log('id tarea INTERNO de bonita: ');
    console.log(idTarBonita);
    
    var id_orden = 17;
    getIdTareaTraJobs(idTarBonita,id_orden);

    idfin = id_orden;
    //console.log(idfin);
    
  });

  function verTarea(id_orden,idTJobs,idTarBonita){
    WaitingOpen();    
    $(".content").load("<?php echo base_url(); ?>index.php/Tarea/detaTarea/<?php echo $permission; ?>/" + id_orden + "/" + idTJobs + "/" + idTarBonita+ "/");
    WaitingClose();
  }

  function getIdTareaTraJobs(idTarBonita,id_orden){
    var idTJobs = "";
    $.ajax({
            type: 'POST',
            data: { idTarBonita: idTarBonita},
            url: 'index.php/Tarea/getIdTareaTraJobs', 
            success:function(data){
                    
                    console.log('value en lista: ');
                    console.table(data);
                    idTJobs = data['value'];    
                    verTarea(id_orden,idTJobs,idTarBonita);                    
                  },
              
            error: function(result){
                  console.log(result);
                },
            dataType: 'json'
        });
  }


  // boton terminar tarea  
  $('.btn').click( function () {
    console.log("num orden");
    var id_orden= $(this).parents('tr').find('td').eq(1).html();
    idfin = id_orden;
    console.log(idfin);
  });

      // Datatable
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





/*

    //ORDEN TERMINADA PARCIAL, pasa a la partalla de ot PARCIAL 
    function guardarparcial(){

      console.log("Estoy finalizando parcial la ot ");
      console.log(idfin); 
      $.ajax({
            type: 'POST',
            data: { idfin: idfin},
            url: 'index.php/Taller/CambioParcial', //index.php/
            success:function(data){
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
      console.log("Estoy INICIANDO la OT ");
      console.log(idfin); 
      $.ajax({
            type: 'POST',
            data: { idfin: idfin},
            url: 'index.php/Taller/Iniciar', //index.php/
            success:function(data){
                    console.log(data);
                    alert("Se Inicio correctamente la OT");
                    regresa();
                  },
              
            error: function(result){
                  console.log(result);
                }
                //dataType: 'json'
        });
      }

*/



  
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
          <button  type="button" class="btn btn-success" data-dismiss="modal" onclick="guardartotal()" >TOTAL</button> 
        </div>   
    </div>  
  </div>
</div>















