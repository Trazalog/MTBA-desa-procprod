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
                    <div class="panel-body">
                                  <div class="modal-header">
                    <div class="btn-toolbar" role="toolbar">

                         <div class="btn-group pull-right">
                           <button type="button" class="btn btn-info" data-dismiss="modal" onclick="iniciar()" title="Iniciar Tarea"</button> 
                          <span class="glyphicon glyphicon-triangle-right"></span>
                        </div>

                        <div class="btn-group pull-right">
                           <button type="button" class="btn btn-success" data-dismiss="modal" onclick="guardartotal()" title="Finalizar tarea"</button> 
                           <span class="glyphicon glyphicon-ok"></span> 
                        </div>

                        <div class="btn-group pull-right">
                           <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="guardarparcial()" title="Finaliza parcial"</button> 
                           <span class="glyphicon glyphicon-minus"></span> 
                        </div>

                        <div class="btn-group pull-right">
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalmostrar" title="Almacen" </button>
                           <span class="glyphicon glyphicon-wrench"></span> 
                        </div>

                  
          <div class="panel panel-default">
          <h4 class="panel-heading">ORDEN DE TRABAJO:</h4>

            <div class="panel panel">
           <center>
             <h4 class="panel-body">Numero:</h4>
           </center>
             <table class="table table-hover" id="sector" > 
                  
              <tbody>
              <?php
              
              foreach($orden as $f)
              {    
                echo '<td  style="text-align: center">'.$f['nro'].'</td>';
              }
              ?>  
                  </tbody>
              </table>
            </div> 

            <hr />
            <div class="panel panel">
              <center>
             <h4 class="panel-body">Fecha:</h4>
             </center>
             <table class="table table-hover" id="sector" > 
                  
              <tbody>
              <?php
              
              foreach($orden as $f)
              {    
                echo '<td  style="text-align: center">'.$f['fecha_entrega'].'</td>';
              
                }
              ?>  
                  </tbody>
              </table>
            </div> 
                
 <hr />
            <div class="panel panel">
              <center>
             <h4 class="panel-body">Descripcion:</h4>
             </center>
             <table class="table table-hover" id="sector" > 
                  
              <tbody>
              <?php
              
              foreach($orden as $f)
              {    
                  echo '<td  style="text-align: center">'.$f['descripcion'].'</td>';
              
                }
              ?>  
                  </tbody>
              </table>
            </div>    

 <hr />
            <div class="panel panel">
              <center>
             <h4 class="panel-body">Estado:</h4>
             </center>
             <table class="table table-hover" id="sector" > 
                  
              <tbody>
              <?php
              
              foreach($orden as $f)
              {    
                  echo '<td  style="text-align: center">'.($f['estado'] == 'TE' ? '<small class="label pull-center bg-orange">Parcial</small>' : ($f['estado'] == 'C' ? '<small class="label pull-center bg-green">Iniciada</small>' : ($f['estado'] == 'P' ? '<small class="label pull-center bg-blue">Pedido</small>' : ($f['estado'] == 'As' ? '<small class="label pull-center bg-yellow">Asignado</small>' : '<small class="label pull-center bg-red">Entregado</small>')))).'</td>';
                  echo '</tr>';
              
                }
              ?>  
                  </tbody>
              </table>
            </div>    

              <table class="table" id="sector" > 
              <tbody>
              
              </tbody>
              </table>
              </div> 





          <div class="panel panel-default">
          <h4 class="panel-heading">SUBTAREAS:</h4>
              
              <table class="table table-bordered table-hover" id="sector" > 
                  <thead>
                  <tr>
                    <th class="text-center"></th>
                    <th class="text-center">Descripcion: </th>
                    <th class="text-center">Estado: </th>
                     </tr>
                </thead>
                  <tbody>
              <?php

              foreach($subtareas as $f)
              {                
                     echo '<td>';
                  if (strpos($permission,'Del') !== false) 
                  {
                   echo '<button type="button" id="btncolor" class="btn btn-default">
                          <span class="glyphicon glyphicon-ok" onclick="guardar()"></span></button> ';
                  }
                  
                  echo '</td>';
                      echo '<td class="celda" style="text-align:center">'.$f['tareadescrip'].'</td>';
                      echo '<td  style="text-align: center">'.($f['estado'] == 'As' ? '<small class="label pull-center bg-green">Asignada</small>' : ($f['estado'] == 'T' ? '<small class="label pull-center bg-red">Terminada</small>'  : '<small class="label pull-center bg-blue">Otras</small>')).'</td>';
                      echo '</tr>';
                }
              ?> 
                  </tbody>
              </table>
                </div>
                   </div>
                     <!-- </div> CIERRE div del body-->
                      
                      </div>
                      </div>
                      </div>
                    </div>
        </div><!-- /.box-body -->
        
        <div class="modal-footer">
          <button type="button" id=""class="btn btn-default btn-sm delete" onclick="regresa()" >Cancelar</button>
       
         <!--  <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="guardar()" >Terminar</button> -->
        </div>  <!-- /.modal footer -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->




<script>


//Vuelve a pagina principal
function regresa(){

  WaitingOpen();
  $('#content').empty();
  $("#content").load("<?php echo base_url(); ?>index.php/Taller/index/<?php echo $permission; ?>");
  WaitingClose();
}


</script>
