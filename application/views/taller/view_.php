<input type="hidden" id="permission" value="<?php echo $permission;?>">

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">


        <div class="box-body">
          <div class="row" >
            <div class="col-sm-12 col-md-12">
             <div role="tabpanel" class="tab-pane">
              <div class="form-group">
                      <?php
                      if (strpos($permission,'Add') !== false) {
                        echo '<button class="btn btn-block btn-success" style="width: 100px; margin-top: 10px;" onclick="regresa()">Volver</button>';
                      }
                      ?>  
                      </br>
                      </br>     
                          <div class="panel-body">    
                          <div class="btn-toolbar" role="toolbar">
                            
                                      <div class="btn-group pull-right">
                                         <button type="button" class="btn btn-success" data-dismiss="modal" onclick="guardartotal()" title="Finalizar tarea"</button> 
                                         <span class="glyphicon glyphicon-ok"></span> 
                                      </div>

                                      <div class="btn-group pull-right">
                                         <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="guardarparcial()" title="Finaliza parcial"</button> 
                                         <span class="glyphicon glyphicon-minus"></span> 
                                        </div>

                                      <div class="btn-group pull-right">
                                          <button type="button" class="btn btn-info" data-dismiss="modal" onclick="iniciar()" title="Iniciar Tarea"</button> 
                                          <span class="glyphicon glyphicon-triangle-right"></span>
                                      </div>
  

                                  <!--  Panel con OT -->     
                                  <div class="panel panel-default">

                                      <!--  Panel Orden de Trabajo -->
                                      <h4 class="panel-heading">ORDEN DE TRABAJO:</h4>


                                             <?php foreach($orden as $f){ 
                                              } ?> 


                                              <?php
                                              $idorden=$f['id_orden'];
                                              ?>


                                               <div class="panel panel">
                                               <center> 
                                               <h4>NUMERO DE ORDEN:  &nbsp &nbsp
                                               <?php echo '<td>'.$f['nro'].'</td>';?>  
                                               </h4> 
                                               </center>
                                               </div> 

                                              <div class="panel panel">
                                              <center> 
                                              <h4>FECHA: &nbsp &nbsp
                                              <?php echo '<td>'.$f['fecha_entrega'].'</td>';?>  
                                              </h4> 
                                              </center>
                                              </div> 
                                                  
                                              <div class="panel panel">
                                              <center>
                                              <h4>DESCRIPCION:
                                              &nbsp &nbsp <?php echo '<td>'.$f['descripcion'].'</td>';?>  
                                              </h4>
                                              </center>
                                              </div>    

                                              <div class="panel panel">
                                              <center>
                                              <h4>ESTADO:
                                              &nbsp &nbsp <?php
                                              echo '<td>'.($f['estado'] == 'TE' ? '<small class="label bg-orange">Parcial</small>' : ($f['estado'] == 'C' ? '<small class="label bg-green">Iniciada</small>' : ($f['estado'] == 'P' ? '<small class="label bg-blue">Pedido</small>' : ($f['estado'] == 'As' ? '<small class="label bg-yellow">Asignado</small>' : '<small class="label bg-red">Entregado</small>')))).'</td>';   
                                              ?> 
                                              </h4>
                                              </center>
                                              </div>     
                                  </div>    
                           

                                  <!--  Panel con Subtareas -->
                                  <div class="panel panel-default">
                                    <h4 class="panel-heading">SUBTAREAS:</h4>
                                    <table class="table table-bordered table-hover" id="sector" > 
                                            <thead>
                                            <tr>
                                                <th class="text-center">Terminar</th>
                                                <th style="display:none"> </th>
                                                <th class="text-center">Descripcion: </th>
                                                <th class="text-center">Estado: </th>
                                            </tr>
                                            </thead>
                                                <tbody>
                                                <?php
                                                foreach($subtareas as $f)
                                                {                
                                                    if (strpos($permission,'Del') !== false) 
                                                    {
                                                     echo '<td  style="text-align: center">'.($f['estado'] == 'As' ? '<button type="button" class="btn btn-success btncolor">
                                                       <span class="glyphicon glyphicon-ok"></span></button> ' : ($f['estado'] == 'TE' ? '<button type="button" disabled class="btn btn-default btncolor">
                                                       <span class="glyphicon glyphicon-ok"></span></button> ' : '<button type="button" class="btn btn-success btncolor">
                                                       <span class="glyphicon glyphicon-ok"></span></button> ')).'</td>';

                                                          
                                                    }
                                                    
                                                    echo '</td>';
                                                        echo '<td class="fila" style="text-align: left ; display:none">'.$f['id_listarea'].'</td>';
                                                        echo '<td  style="text-align:center">'.$f['tareadescrip'].'</td>';
                                                        echo '<td  style="text-align: center">'.($f['estado'] == 'As' ? '<small class="label pull-center bg-green">Asignada</small>' : ($f['estado'] == 'TE' ? '<small class="label pull-center bg-red">Terminada</small>'  : '<small class="label pull-center bg-green">Asignada</small>' )).'</td>';
                                                        echo '</tr>';
                                                  }
                                                ?> 
                                                </tbody>
                                    </table>
                                  </div>

                          </div>
                          </div> <!-- /. CIERRE div del body-->

                    </div>
                  </div>
                </div>
              </div>
           </div>

            <div class="modal-footer">
                <button type="button" id=""class="btn btn-default btn-sm delete" onclick="regresa()" >Cancelar</button>
                <!--  <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="guardar()" >Terminar</button> -->
            </div>  <!-- /.modal footer -->

  


      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->




<script>


      //Ckeck Tarea realizada
     $('.btncolor').click(function (e) {

          var id = <?php echo $idorden?>; //tomo valor de id_orden
          console.log(id);

           var id_tarea = $(this).parents('tr').find('td').eq(1).html();
           console.log("Estoy finalizando una tarea");
           $.ajax({
             type: 'POST',
             data: { id_tarea: id_tarea,},//Id tarea
             url: 'index.php/Taller/TareaRealizada', //index.php/
             success: function(data){
                      console.log(data);
                      //alert("Se Finalizando la SUBTAREA");
                      refresca(id);
                   },
               
             error:     function(result){
                        console.log(result);
                        alert("NO se Finalizo la SUBTAREA");
                        refresca(id);
                   }
             });
           
   });



    //Vuelve a pagina secundaria SUBTAREA
    function refresca(id)
    {
    $('.content').empty(); 
    $(".content").load("<?php echo base_url(); ?>index.php/Taller/getlistTareasOT/<?php echo $permission; ?>/" + id);
    console.log(id);
    }

  
    //Vuelve a pagina principal OT
     function regresa(){
        WaitingOpen();
        $('.content').empty();
        $(".content").load("<?php echo base_url(); ?>index.php/Taller/index/<?php echo $permission; ?>");
        WaitingClose();
      }


</script>
