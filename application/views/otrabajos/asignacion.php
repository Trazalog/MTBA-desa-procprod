<input type="hidden" id="permission" style="width: 100%" value="<?php echo $permission;?>">
<div class="row">
  <div class="col-xs-12">
    <div class="alert alert-danger alert-dismissable" id="error" style="display: none">
      <h4><i class="icon fa fa-ban"></i> Error!</h4>
      Revise que todos los campos obligatorios esten completos
    </div>
  </div>
</div>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title ">Programación de Tareas (planificacion)</h2>         
        </div><!-- /.box-header -->
        <div class="box-body">    
          <?php
        // if (strpos($permission,'Add') !== false) {
          echo '<button class="btn btn-block btn-success" style="width: 100px;" id="listado">Ver Listado</button>';
        // }

          //// USUARIO LOGUEADO Y GRUPO DE USUARIO
          $userdata = $this->session->userdata('user_data');
          $usrId = $userdata[0]['usrId'];     
          $grpId = $userdata[0]['grpId']; 
          //var_dump($userdata);

          echo' <input type="hidden"  id="usrId" name="usrId" value="'.$usrId.'">';
          echo' <input type="hidden"  id="grpId" name="grpId" value="'.$grpId.'">' ; 
          ?>
          <br><br>
          <div class="row" >
            <div class="col-sm-12 col-md-12">
             <div role="tabpanel" class="tab-pane"> 
              <div class="form-group"> 
                <div class="panel panel-default"> 
                  <div class="panel-body">
                    <div class="">       
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><a  id="tabCalend" href="#Calendario" aria-controls="Calendario" role="tab" data-toggle="tab">Calendario</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Tareas</a></li>    
                      </ul>
                      <!-- Tab panes -->                            
                      <div class="tab-content">

                        <!-- tabpanel  Calendario -->  
                        <div role="tabpanel" class="tab-pane active" id="Calendario">
                          <br>
                          <div class="col-xs-6">Sectores 
                            <select id="sectSelect" name="sectSelect" class="form-control " placeholder="" value="" ></select>
                          </div>
                          <div class="col-xs-6">Equipos 
                            <select id="equiPSelect" name="equiPSelect" class="form-control " placeholder="" value="" ></select>
                          </div>

                          <div class="col-xs-6" >
                            <!-- Calendario -->
                            <div id="calendar"></div>
                          </div>  
                          <div class="col-xs-6">
<!----------listado en calendario----------->
                            <table id="calendarList" class="table table-bordered table-hover tbCalendario">
                              <thead>
                                <tr>
                                  <th width="2%"></th> <!-- icono -->
                                  <th width="25%"></th><!-- tarea -->
                                  <th width="10%"></th><!--  -->
                                  <th width="10%"></th><!--  -->
                                  <th width="5%"></th><!--  -->
                                 <!--  <th width="2%"></th> -->
                                  <th width="2%"></th>   <!--  -->
                                                          
                                </tr>
                              </thead>
                              <tbody>  
                               <?php

                               //var_dump($list);
                       
                                if(count($list) > 0) {
                                  $userdata = $this->session->userdata('user_data');
                                  $usrId= $userdata[0]['usrId']; 

                                  foreach($list as $a){

                                    // Muestra listado de tareas que no estan inactivas
                                    if($a['estado']!=='IN'){ // || $a['estado']== 'RE' $a['id_usuario']==$usrId  && $a['grpId']==1

                                    $id=$a['id_listarea'];
                                    echo '<tr id="'.$id.'" class="'.$id.'">';
                                    
                                    // limitada al grupo 7 Coordinador
                                    if ($grpId != 7) {
                                    echo '<td>'; 
                                    echo '<i class="fa fa-calendar cous" style="color: #006400 ; cursor: pointer;" title="Programar tarea" data-toggle="modal" data-target="#modalProgramacion" data-idTarea="'.$a['id_tarea'].'" ></i>';
                                    echo '</td>';
                                    }

                                    echo '<td  class="hidden idTareaTrazajobs" style="text-align: left">'.$a['id_listarea'].'</td>';

                                    echo '<td style="text-align: left">'.$a['tareadescrip'].'</td>';

                                    if($a['usrLastName']!= null){
                                      echo '<td class="usrasign" style="text-align: left">'.$a['usrLastName'].' '.$a['usrName'].'</td>';
                                    }else{
                                      echo '<td style="text-align: left"></td>';
                                    }

                                    if($a['fecha']!= null){
                                      echo '<td class="fecha" style="text-align: left">'.date_format(date_create($a['fecha']), 'd-m-Y').'</td>';
                                    }
                                    else echo '<td style="text-align: left"></td>';

                                    // echo '<td style="text-align: center">'.
                                    // ($a['estado'] == 'C' ? '<small class="label label-default">Curso</small>' : 
                                    //   ($a['estado'] == 'RE' ? '<small class="label label-default">Finalizada</small>' : 
                                    //     ($a['estado'] == 'AS' ? '<small class="label label-default">Asignada</small>' : '<small class="label label-default">Eliminada</small>'))).'</td>';

                                    echo '<td>';
                                    if (strpos($permission,'Del') !== false && ($a['id_usuario']==$usrId || $usrId==1) && ($a['estado']!='RE') ){
                                      echo '<i class="fa fa-times-circle" style="color: #A9A9A9 ; cursor: pointer;" title="Eliminar"></i>';
                                    }     
                                    echo '</td>';

                                    echo '<td>';

                                    //if (strpos($permission,'Edit') !== false && ($a['id_usuario']==$usrId || $usrId==1) && ($a['estado']!='RE') ){

                                      echo '<i class="fa fa-user" style="color: #A9A9A9 ; cursor: pointer;"" title="Asignación de usuario" data-toggle="modal" data-target="#modalSale"></i>';
                                    //}
                                    echo '</td>';                                   

                                      // duracion standar de tarea
                                    echo '<td class=" duracionStd" style="text-align: left">'.$a['duracion_std'].'</td>';
                                      // id de usuario asignado
                                    echo '<td class="hidden id_usuario" style="text-align: left">'.$a['id_usuario'].'</td>';
                                    echo '<td class="hidden id_listarea" style="text-align: left">'.$a['id_listarea'].'</td>';

                                    echo '</tr>';
                                    } 
                                  }               
                                }
                      ?> 
                    </tbody>
                  </table>

<!------------------------ / listado en calendario------------------------------>
                </div>
              </div>
              <!-- / tabpanel  Calendario -->  

              <!--  tabpanel  TAREAS -->
              <div role="tabpanel" class="tab-pane" id="profile">
<!----------------------- TAREAS-------------------------------------------->
              <style>
               #id {margin-top: 20px;}
             </style>
             <div class="col-sm-12 col-md-12">
              <br>
              <div class="col-xs-8">Tarea
                <select id="tarea" name="tarea" class="form-control " placeholder="" value="" ></select>
              </div>                 
              <div class="col-xs-2">
                <button type="button" class="btn btn-success" id="agregar" style="margin-top: 20px;"><i class="  fa fa-plus"></i>Agregar</button>
              </div>             
              <div class="col-xs-8">Plantilla 
                <select id="plantilla" name="plantilla" class="form-control " placeholder="" value="" ></select>
              </div>
              <div class="col-xs-4">
                <input type="hidden"  id="numord" name="numord" value="<?php echo $id_orden;?>"> 
              </div>  
              <br><div class="clearfix"></div>

              <br>
              <br>
              <table id="orden" class="table table-bordered table-hover" width="80%" >
                <!--<br>
                  <div class="col-xs-4" align="center"><label>Listado de tareas</label></div>-->
                  <thead>
                    <tr>
                      <!-- <th width="2%">Terminar</th> -->
                      <th width="25%">Tareas</th>
                      <th width="10%">Asignado</th>
                      <th width="5%">Fecha</th>
                      <!-- <th width="5%">Estado</th> -->                   
                      <th width="3%">Accion</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>  
                   <?php
                   //  echo "<pre>";  
                   //dump_exit($idTarBonita);
                  
                   echo "<input type='text' class='' id='idTarBonita' value='". $idTarBonita ."'>";
                  
                   if(count($list) > 0) {
                    $userdata = $this->session->userdata('user_data');
                    $usrId= $userdata[0]['usrId'];                       

                    foreach($list as $a){

                        // Muestra listado de tareas que no estan inactivas
                        if($a['estado']!=='IN'){ // || $a['estado']== 'RE' $a['id_usuario']==$usrId  && $a['grpId']==1

                        $id=$a['id_listarea'];
                        echo '<tr id="'.$id.'" class="'.$id.'">';
                        
                        // echo '<td>';
                          //   // Tarea asignada (solo estado AS) - H 
                          // if (($a['id_usuario'] != NULL) && ($a['estado'] == 'AS')) {
                          //     // Si usr asignado es el logueado o Admin
                          //   if ( ($a['id_usuario'] == $usrId) || ($grpId == '1')) {

                          //     echo '<i class="fa fa-check-circle-o" style="color: #006400 ; cursor: pointer; margin-left: 15px;" data-idTarea="'.$a['id_tarea'].'" title="Confirmar tarea"></i>';
                          //   }else{

                          //     echo '<i   class="fa fa-check-circle" style="color: #A9A9A9 ; cursor: pointer; margin-left: 15px;" title="Tarea finalizada"></i>';
                          //   }        

                          // } else{

                          // }    
                          // echo '</td>';

                        echo '<td style="text-align: left">'.$a['tareadescrip'].'</td>';


                        if($a['usrName']!= null ){
                        //echo '<td style="text-align: left">'.$a['usrName'].'</td>';
                          echo '<td style="text-align: left">'.$a['usrLastName'].' '.$a['usrName'].'</td>';
                        }else {
                          echo '<td style="text-align: left"></td>';
                        }

                        if($a['fecha']!= null){
                          echo '<td style="text-align: left">'.date_format(date_create($a['fecha']), 'd-m-Y').'</td>';
                        }
                        else echo '<td style="text-align: left"></td>';


                        // echo '<td style="text-align: center">'.
                        // ($a['estado'] == 'C' ? '<small class="label label-default">Curso</small>' : 
                        //   ($a['estado'] == 'RE' ? '<small class="label label-default">Finalizada</small>' : 
                        //     ($a['estado'] == 'AS' ? '<small class="label label-default">Asignada</small>' : '<small class="label label-default">Eliminada</small>'))).'</td>';

                        echo '<td>';

                        // si DEL y (usr asignado o admin) est No RE (realizada)
                        if (strpos($permission,'Del') !== false && ($a['id_usuario']==$usrId || $grpId==1) && ($a['estado']!='RE') ){ 
                         echo '<i class="fa fa-times-circle" style="color: #A9A9A9 ; cursor: pointer;" title="Eliminar"></i>';
                       }     

                       echo '<i class=" fa fa-user" style="color: #A9A9A9; margin-left:7px "; cursor: "pointer" title="Asignacion de usuario" data-toggle="modal" data-target="#modalSale"></i>';
                       
                       // echo '<i class="fa fa-cogs" style="color: #A9A9A9 ; cursor: pointer; margin-left:7px"" title="Asignación de Equipo" data-id_tarea="'.$a['id_tarea'].'" data-toggle="modal" data-target="#modalAsignaEquipo"></i>';

                       echo '</td>';

                       echo '</tr>';
                     } 

                   }               
                 }
                 ?> 
               </tbody>
             </table>
           </div>

<!------------------------ / TAREAS------------------------------------------->  
         </div>
         <!--  / tabpanel  TAREAS --> 



       </div><!-- / tab-content -->
       <!-- / Tab panes --> 

     </div><!-- / ."" --> 
   </div><!-- / panel-body -->  

 </div><!-- / panel panel-default --> 
</div><!-- / form-group --> 
</div><!-- / tab-pane --> 
</div><!-- /.col-sm-12 col-md-12 --> 




</div><!-- /.row -->

<div class="modal-footer">              
  <button type="button" id="guardar" class="botones btn btn-primary" onclick="validarInicio()">Terminar Planificacion</button>
  <!-- <button type="button" id="guardar" class="botones btn btn-primary" onclick="guardarInfo()">Terminar Planificacion</button> -->
</div>  <!-- /.modal footer -->            

</div><!-- /.box-body -->
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->






<script>

// A hacer click en tab calend recarga la lista
$('#tabCalend').click(function(e){

  regresa1();
});
//FIXME: arreglar la vallidacion de campos de asignacio de usr y de fecha
// Valida que no hayan tareas sin asignar ni sin programar 
function validarInicio(){
  
  //TODO: sacar esta funcion esta abajo
  cerrarPlanificacion();
  
  // var contCeldas = 0;
  // var programadas = 0;
  // var asignadas = 0;
  // var celFecha = "";
  // var tbl_Calendario = $('.tbCalendario tbody tr');
  
  // $(tbl_Calendario).each(function(){    
      
  //     // cuenta programadas
  //     celFecha = $(this).find('td.fecha').html();
  //     console.log('Validacion - fecha asignacion: ');
  //     console.log(celFecha);
  //     if(celFecha !== undefined){
  //       programadas ++;
  //     }

  //     // cuent asignadas
  //     celAsign = $(this).find('td.usrasign').html();
  //     console.log('Validacion - asignado: ');
  //     console.log(celAsign);
  //     if(celAsign !== undefined){
  //       asignadas ++;
  //     }

  //     // suma cantidad filas
  //     contCeldas++;
  //     //console.log(celFecha);
  // });

  // if (contCeldas > programadas) {
  //   alert('Existen tareas sin programar...');
  // }else{

  //   //alert(contCeldas +' '+ programadas);
  // }

  // if (contCeldas > asignadas) {
  //   alert('Existen tareas sin asignar, por favor asígnelas antes de terminar la Planificación');
  // }else{
  //   //alert(contCeldas +' '+ asignadas);
  //   console.log('Validación de tareas completada.');
  //   //guardarInfo();
  //   cerrarPlanificacion();
  // }
}

function cerrarPlanificacion(){
  
  var idTarBonita = $('#idTarBonita').val();
  //var idOT = $('#idOT').val();
  $.ajax({
          type: 'POST',
          data: { idTarBonita: idTarBonita},
                  //idOT: idOT},
          url: 'index.php/Tarea/terminarPlanificacion', 
          success: function(data){ 
            console.log('respuesta cerrar planif: ');
            console.log(data);
                                  
                },              
          error: function(result){
                  console.log(result);
                },
          dataType: 'json'      
    });
}




// function  guardarInfo(){
//   //alert('guardar info');
//   var tabla = $('#calendarList tbody tr');
//   //console.table(tabla);
//   var usuarioAsignado = "";
//   var idTareaTrazajobs = "";
//   var duracion = 0;
//   var duracionStd = 0;
//   var tareadescrip = "";
//   var coordinador = "Duilio.Alcaraz";
//   var datos = [];

//   $(tabla).each(function(){
//     usuarioAsignado = $(this).find('td.usrasign').html();
//     idTareaTrazajobs = $(this).find('td.id_listarea').html();
//     tareadescrip = $(this).find('td.tareadescrip').html();
    
//     duracion = $(this).find('td.duracionStd').html();
//     duracionStd = duracion * 60000;
    
//     datos['nombre'] = tareadescrip;
//     datos['usuarioCoordinador'] = coordinador;
//     datos['usuarioAsignado'] = usuarioAsignado;
//     datos['idTareaTrazajobs'] = idTareaTrazajobs;
//     datos['duracionStd'] = duracionStd;

//     //console

//   });



// }







// Arma objeto con tareas para guardar
// function guardarInfo(){
//   alert('guardar info');
//   //var tabla = $('.tbCalendario tbody tr');
//   var tabla = $('#calendarList tbody tr');
//   var usuarioAsignado = "";
//   var idTareaTrazajobs = "";
//    var duracionStd = "";
//    var input = {};
//   console.table(tabla);
//   // $(tabla).each(function(){          
      
//   //     usuarioAsignado = $(this).find('td.id_usuario').html();
//   //     idTareaTrazajobs = $(this).find('td.idTareaTrazajobs').html();
//   //     duracionStd = $(this).find('td.duracionStd').html();

//   //     console.log('usuario: ');
//   //     console.log(usuarioAsignado);
//   //     console.log('idTareaTrazajobs: ');
//   //     console.log(idTareaTrazajobs);
//   // });
// }








/////////////////////   CALENDARIO //////////////////////////

  var mes = "";
  // variables globales para filtrar por id de grupos y usuarios
  var usrId = $('#usrId').val();
  var grpId = $('#grpId').val();
  var permiso = "";

calendario();
function calendario(){

  
      //  CALENDARIO

     /* initialize the external events
     -----------------------------------------------------------------*/
     function ini_events(ele) {
        ele.each(function () {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
              title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
              zIndex: 1070,
              revert: true, // will cause the event to go back to its
              revertDuration: 0  //  original position after the drag
            });

        });
      }
      ini_events($('#external-events div.external-event'));

      /* initialize the calendar
      -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();     
      
      // Permisos para cambiar la fecha y hora de programacion      
        if (grpId == 1) {
          permiso = true;
        }else{
          permiso = false;
        }

      $('#calendar').fullCalendar({
          header: {
            left  : 'prev,next today',
            center: 'title',
            right : 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'Hoy',
            month: 'Mes',
            week : 'Semana',
            day  : 'Día'
          },
          // desde aca busca los preventivos
          events: function(start, end, timezone, callback) {
            //WaitingOpen('Cargando trabajo');
            var date_ = new Date($("#calendar").fullCalendar('getDate'));
            var month_ = date_.getMonth();
            var idOrden = $('#numord').val();

            var evento = $.ajax({
                              //url: 'index.php/Otrabajo/getcalendTareasSector',
                              url: 'index.php/Otrabajo/getcalendTareas',
                              data: { month: month_,
                                      idOrden: idOrden },
                              dataType: 'json',
                              type: 'POST',
                              success: function(doc) {
                                  var events = [];
                                  //getTablas(month_);

                                
                                  $(doc).each(function() {

                                      var tarea = $(this).attr('tareaDescripcion');
                                      
                                      var desde = $(this).attr('fecha');
                                      var from = new Date(desde);                            
                                      
                                      // sumo los minutos
                                      var minutos = parseInt(from.getMinutes());
                                      var duracion = parseInt($(this).attr('duracion_prog'));
                                      var totalminutos = minutos + duracion;

                                      var aaaa = $(this).attr('duracion_prog');
                                      console.log('duracion: ');
                                      console.log(aaaa);

                                      var hasta = new Date(from);
                                      hasta = hasta.setMinutes(totalminutos);
                                      
                                      var to = new Date(hasta);

                                      // asigna colores en funcion del tipo de orden
                                      var  Color = '';
                                      // switch ($(this).attr('tipo')) {
                                        //   case '1':
                                        //           Color = '#3c8dbc';    //Orden Trabajo (celeste)
                                        //           break;
                                        //           case '2':
                                        //           Color = '#f56954';    //Correctivo (rojo)
                                        //           break;
                                        //           case '3':
                                        //           Color = '#39CCCC';   //Preventivo (turquesa)
                                        //           break;
                                        //           case '4':
                                        //           Color = '#ff851b';   //Backlog (naranja)
                                        //           break;
                                        //           case '5':
                                        //           Color = '#00a65a';    //Predictivo (verde)
                                        //           break;
                                        //           case '6':
                                        //           Color = '#D81B60';   //Correctivo Programado (fucsia)
                                        //           break;
                                        // };

                                      events.push({
                                              // title: $(this).attr('descripcion') + ',' + $(this).attr('id_tarea'),
                                              //start:to,
                                              start:from,
                                              end:to,
                                              title:  $(this).attr('tareaDescripcion'),
                                              // codigo: $(this).attr('nro'),
                                              equipo: $(this).attr('equipoDescripcion'),
                                              // id_orden: $(this).attr('id_orden'),
                                              idtarea: $(this).attr('id_listarea'), 
                                              allDay: false,
                                              backgroundColor: Color,
                                            });
                                  });
                                
                                  callback(events);
                                  WaitingClose();
                              },

                              error: function(doc) {
                                WaitingClose();
                                //alert('Sin datos para este mes');
                                      //alert("Error en ajax calendario:" + doc);
                              }
                          });
          },

          eventClick: function(event) {
            //// console.log('eventossss');
            // console.log(evento);
            var idOT = $('#numord').val();
            console.log('Titulo:');
            console.log(event.title);
            //setTimeout("$('#modalPrevent').modal('show')",0);
            $('#title').remove();
            $('#codigo_equipo').remove();
            $('#numero').remove();
            $('#modal_desc').remove();
            $('#modal_prev tbody').append(

              '<tr id="modal_desc">'+
              '<td class="tit"><input type="text" class="numero prevent" id="numero" value=" '+ idOT +' " placeholder=""></td>'+              
              '<td class="cod" id="cod"><input type="text" class="codigo_equipo prevent" id="codigo_equipo" value=" '+ event.equipo +' " placeholder=""></td>'+                  
              '<td class="tit"><input type="text" class="title prevent" id="title" value=" '+ event.title +' " placeholder=""></td>'+          
              '</tr>'
              );

              $('#modalTarea').modal('show');
          },

          editable: permiso,
          droppable: permiso, // this allows things to be dropped onto the calendar !!!

          drop: function (date, allDay) { // this function is called when something is dropped
                  // retrieve the dropped element's stored Event Object
                  var originalEventObject = $(this).data('eventObject');
                  // we need to copy it, so that multiple events don't have a reference to the same object
                  var copiedEventObject = $.extend({}, originalEventObject);
                  // assign it the date that was reported
                  copiedEventObject.start = date;
                  copiedEventObject.allDay = allDay;
                  copiedEventObject.backgroundColor = $(this).css("background-color");
                  copiedEventObject.borderColor = $(this).css("border-color");
                  // render the event on the calendar
                  // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                  $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                  // is the "remove after drop" checkbox checked?
                  if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                  }
          },
          // Triggered when dragging stops and the event has moved to a different day/time.
          eventDrop: function(event, delta, revertFunc) {
                      //alert("La Tarea: " + event.title + " cambio su programacion al dia " + event.start.format());
                      var resultado = "";
                      var nuevoDia = event.start.format();
                      var id_listarea = event.idtarea;
                      if (!confirm("Realmente desea hacer este cambio?")) {                          
                          revertFunc();
                      }else{
                          resultado = updateDia(id_listarea,nuevoDia);
                          if (resultado == 'false') {
                            revertFunc();
                            alert("No pudo realizarse el cambio");
                          }else{
                            //alert("Cambio exitoso");
                          }
                      }
          },
          // Triggered when resizing stops and the event has changed in duration.          
          eventResize: function(event, delta, revertFunc) {
                        var result = "";
                        var duracion = delta; 
                        var id_LT = event.idtarea;
                            duracion = duracion/60000;
                        //alert("Se agrego o resto: " + duracion + " cambio su duración y finalizará  " + event.end.format("h:mm:ss a"));
                        if (!confirm("Realmente desea hacer este cambio?")) {                          
                            revertFunc();
                        }else{                            
                            result = updateHora(id_LT,duracion);                        
                            if (result == 'false') {
                              revertFunc();
                              alert("No pudo realizarse el cambio");
                            }else{
                              //alert("Cambio exitoso");
                            }
                        }
          }  
      });

      /* ADDING EVENTS */
        var currColor = "#3c8dbc"; //Red by default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function (e) {
          e.preventDefault();
          //Save color
          currColor = $(this).css("color");
          //Add color effect to button
          $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
        });
        $("#add-new-event").click(function (e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var val = $("#new-event").val();
            if (val.length == 0) {
              return;
            }

            //Create events
            var event = $("<div />");
            event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
            event.html(val);
            $('#external-events').prepend(event);

            //Add draggable funtionality
            ini_events(event);

            //Remove event from text input
            $("#new-event").val("");
        });   

}
    
$(".fa-print").click(function (e) {
    $("#calendar").printArea();
});

    
  

 //////////  ACTUALIZA DIA Y HORA

  function updateDia(id_listarea,nuevoDia){

    var resultado = $.ajax({
                        type: 'POST', //parametros:parametros
                        data: {id:id_listarea,
                               prog:nuevoDia},
                        url: 'index.php/Otrabajo/updateDiaProgTarea',  
                        success: function(data){
                              
                                 console.log(data);
                              },
                        error: function(data){

                              console.log(data);
                            },
                        dataType: 'json'    
                    });
    return resultado;                 
  }

  function updateHora(id_LT,duracion) {
    
    var resultad = $.ajax({
                        type: 'POST', 
                        data: {id:id_LT,
                               duracion:duracion}, // duracion adicional
                        url: 'index.php/Otrabajo/updateDurTarea',  
                        success: function(data){
                                //alert('sucess');
                                 console.log(data);
                              },
                        error: function(data){

                              console.log(data);
                            },
                        dataType: 'json'    
                    }); 
    
    return resultad;
  }
    

/////////////////////   CALENDARIO //////////////////////////



//////////////////////listado tareas y pantillas hugo/////////////////////////////

  // trae tareas estandar y llena select
  getTareasEstandar();
  function getTareasEstandar(){
    var tarea = $('#tarea');
     $.ajax({
          type: 'POST',
          data: { idtarea: idtarea},
          url: 'index.php/Otrabajo/getTareaSdt', 
          success: function(data){ 
                  
                  tarea.append($('<option />', 
                      { value: "-1", 
                        text: "Seleccione..." }));

                  for (var i = 0; i< data.length; i++) {                     
                    //console.log(data[i].length);
                    tarea.append($('<option />', 
                      { value: data[i]['id_tarea'], 
                        text: data[i]['descripcion'] }
                    ));
                  };                   
                },            
          error: function(result){
                  console.log(result);
                },
          dataType: 'json'      
    }); 
  }

  /// Plantillas llena select y tablas al seleccionar
  getPlantillas();
  function getPlantillas(){
    var plantilla = $('#plantilla');
    $.ajax({
          type: 'POST',
          //data: { idtarea: idtarea},
          url: 'index.php/Otrabajo/getPlantilla', 
          success: function(data){ 

                  plantilla.append($('<option />', 
                      { value: "-1", 
                        text: "Seleccione..." }));

                  for (var i = 0; i< data.length; i++) {                      
                    plantilla.append($('<option />', 
                      { value: data[i]['id_plantilla'], 
                        text: data[i]['descripcion'] }
                    ));
                  };                   
                },              
          error: function(result){
                  console.log(result);
                },
          dataType: 'json'      
    });
  }
  $('#plantilla').change(
        function(){
          var idPlantilla = $("#plantilla option:selected").val();
          $.ajax({
                type: 'POST',
                data: { idPlantilla: idPlantilla},
                url: 'index.php/Otrabajo/getTareasPlantilla', 
                success: function(data){ 
                        //console.log(data);
                        llenarTabla(data);                                           
                      },                  
                error: function(result){
                        console.log(result);
                      },
                dataType: 'json'      
          }); 
        }
  );

  /// Trae subsectores - Listo
  getSubsectores();
  function getSubsectores(){
    var sectSelect = $('#sectSelect');
    $.ajax({
          type: 'POST',
          //data: { idtarea: idtarea},
          url: 'index.php/Otrabajo/getSubsectores', 
          success: function(data){ 
                  
                  sectSelect.append($('<option />', 
                      { value: "-1", 
                        text: "Todos los Subsectores..." }));

                  for (var i = 0; i< data.length; i++) {   
                    sectSelect.append($('<option />', 
                      { value: data[i]['id_subsector'], 
                        text: data[i]['descripcion'] }
                    ));
                  };                   
                },            
          error: function(result){
                  console.log(result);
                },
          dataType: 'json'      
    });  
  }

//////////////////////////////////////////////////////////////////////


//////////////// Filtrado de calendario ////////////////////////
  var resources = '';
  var date_ = new Date($("#calendar").fullCalendar('getDate'));
  var month_ = date_.getMonth();

  //EVENTO CAMBIO SELECTOR SUBSECTORES
  $('#sectSelect').change(function(){

    var idsubsector = $('#sectSelect option:selected').val();
    var idequipo = $('#equiPSelect option:selected').val();
    $('#equiPSelect option').remove();

    //borrar y llamas 
    
    //carga equipos en select equipos por subsector
    getEquipPorIdSubsector(idsubsector); 
    
    if (idsubsector != '-1') {
      //LLAMA FUNCION QUE TRAE EVENTOS A REDIBUJAR EN EL CALENDARIO
      getMesResources(month_,idsubsector);
      //alert(idsubsector);
    }else{
      //alert(idsubsector);
      regresa1();
    }
    //carga equipos een select equipos por subsector
    //getEquipPorIdSubsector(idsubsector);

  });

  // trae eventos caendarizados por subsector
  function getMesResources(mont_,idSubsector) {
    console.log('Recargando Eventos...');
    console.log('Mes: '+mont_+' idSubsector:'+idSubsector);
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'index.php/Otrabajo/getcalendTareasSector',
        data: {
            'month': month_,
            'idSubsector': idSubsector
        },
        success:function(data) {
          console.log(data);
          //ELIMINA EVENTOS ACTUALES DEL CALENDARIO
          $("#calendar").fullCalendar('removeEvents');
          //AGREGA NUEVO EVENTOS QUE TRAE EL AJAX AL CALENDARIO
          $("#calendar").fullCalendar("addEventSource",data);
          console.log('Recargando Eventos...OK');

        },
        error:function(){
          console.log('error');
        }
    });
  }

  //EVENTO CAMBIO SELECTOR EQUIPPOS
  $('#equiPSelect').change(function(){


    var idequipo = $('#equiPSelect option:selected').val(); 
    
    if (idequipo != '-1') {
      //LLAMA FUNCION QUE TRAE EVENTOS A REDIBUJAR EN EL CALENDARIO
      getEquipResources(month_,idequipo);
      //alert(idequipo);
    }else{
     // alert(idequipo);
      regresa1();
    }
    

  });

  function getEquipResources(month_,idequipo){
    console.log('Recargando Eventos...');
    console.log('Mes: '+month_+' idequipo:'+idequipo);
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: 'index.php/Otrabajo/getcalendTareasEquipo',
        data: {
            'month': month_,
            'idequipo': idequipo
        },
        success:function(data) {
          console.log(data);
          //ELIMINA EVENTOS ACTUALES DEL CALENDARIO
          $("#calendar").fullCalendar('removeEvents');
          //AGREGA NUEVO EVENTOS QUE TRAE EL AJAX AL CALENDARIO
          $("#calendar").fullCalendar("addEventSource",data);
          console.log('Recargando Eventos...OK');

        },
        error:function(){
          console.log('error');
        }
    });
  }
  
//////////////// Filtrado calendario ////////////////////////





////////////////////////////////////////////////////////////////
  // Trae equipos por subsector 
  function getEquipPorIdSubsector(idsubsector){
    
    var equiPSelect = $('#equiPSelect');
    id_subsector =1;
    $.ajax({
          type: 'POST',
          data: { idsubsector: idsubsector},
          url: 'index.php/Otrabajo/getEquipPorIdSubsector', 
          success: function(data){                 
                    equiPSelect.append($('<option />', 
                        { value: "-1", 
                          text: "Seleccione..." }));
                    for (var i = 0; i< data.length; i++) {
                      equiPSelect.append($('<option />', 
                        { value: data[i]['id_equipo'], 
                          text: data[i]['descripcion'] }
                      ));
                    };                   
                  },
            
          error: function(result){
                  console.log(result);
                 },
          dataType: 'json'      
    });  
  }

  // Llena tabla tareas
  function llenarTabla(data){
    var numOT = $('#numord').val();
    var tr = "";
    var idsTareas = [];
    console.log('descripcion: ');
    console.log(data[0]['descripcion']);    
    
    for(var i=0; i<data.length; i++){
      tr = "<tr id='"+numOT+"'>"+              
              "<td>"+data[i]['descripcion']+"</td>"+
              "<td></td>"+
              "<td></td>"+             
              //"<td style='text-align: center' ><small class='label label-default' >Curso</td>"+
              // "<td><i class='fa fa-times-circle' style='color: #A9A9A9 '; cursor: 'pointer' title='Eliminar'></i> <i class=' fa fa-user' style='color: #A9A9A9 '; cursor: 'pointer' title='Asignacion de usuario' data-toggle='modal' data-target='#modalSale'></i></td>"+  


              "<td><i class='fa fa-times-circle' style='color: #A9A9A9 ; cursor: pointer;' title='Eliminar'></i> <i class=' fa fa-user' style='color: #A9A9A9; margin-left:7px '; cursor: 'pointer' title='Asignacion de usuario' data-toggle='modal' data-target='#modalSale'></i></td>"+

          "</tr>";
      $('#orden tbody').append(tr); 
      idsTareas.push(data[i]['id_tarea']);
    } 
    

    // guarda tareas plantilla
    var numOT= $('#numord').val();
      $.ajax({
        type: 'POST',
        data: { numOT:numOT,
                idsTareas: idsTareas},
        url: 'index.php/Otrabajo/setTareasPlant', 
        success: function(data){
              // console.log(data);
              
              },
        error: function(result){
              
              console.log(result);
            }           
      });  
  }  

  // Programa fecha y equipo elegido en selector de equipos
  function programTarea(){

    var idListTarea = $('#idListTarea').val();
    var id_tarea  = $('#idTarea').val();
    var fecha = $('#fechaProgNueva').val();
    var idEquip = $('#idEquip').val();
    var duracion = $('#duracion').val(); //guardar en duracion programada 


    $.ajax({
          type: 'POST',
          data: { id_listarea: idListTarea,
                  id_tarea: id_tarea,
                  fecha: fecha,
                  duracion_prog: duracion, 
                  id_equipo: idEquip},
          url: 'index.php/Otrabajo/programTarea', 
          success: function(data){ 
                  regresa1();
                  //alert('programacion exitosa');                  
                },            
          error: function(result){
                  console.log(result);
                },
          dataType: 'json'      
    }); 
  }

  //ASIGNAR FECHA 
    $(".fa-calendar").click(function (e) { 
     
      $('#descTareaModal').empty(); //limpio modal       
      
      var idEquipo = $('#equiPSelect option:selected').val();
      var idSubsector = $('#sectSelect option:selected').val(); 
      
            var idListarea = $(this).parent('td').parent('tr').attr('id'); //id lis_tarea      
            var idTarea = $(this).data('idtarea'); // id de tarea standar      
      
            $('#idListTarea').val(idListarea);
            $('#idTarea').val(idTarea);
            $('#idEquip').val(idEquipo);
            console.log("id_listarea es:");
            console.log(idListarea); 
            console.log('id de tarea: ');
            console.log(idTarea);      
            console.log('id equipo: ');
            console.log(idEquipo);

            var descTar = $(this).parents("tr").find("td").eq(2).html();
            var text ='<h5>'+ descTar + '</h5>';
            $('#descTareaModal').append(text);

            var duracion = $(this).parents("tr").find("td").eq(7).html();     
            $('#duracion').val(duracion);    

    });



//////////////////////  / listado tareas y pantillas hugo////////////////////////


/////////////////////////////////////////
  var codglo= "";
  var tareaglob= "";
  var idglob= "";
  var idtarea="";
  var idtarea1="";
  var idu=";"
  var no="";
 // $(document).ready(function(event) {
    // Vuelve al listado de ordenes de trabajo
    $('#listado').click( function cargarVista(){
      WaitingOpen();
      $('#content').empty();
      $("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/listOrden/<?php echo $permission; ?>");
      WaitingClose();
    });

    // Agrega una tarea - Listo
    $('#agregar').click(function (e) { 

      var numord= $('#numord').val();
      no=numord;      
      var tarea1= $('#tarea option:selected').text(); 
      var tareaId = $('#tarea option:selected').val();
      tareaglob= tarea1;
      var tr = "<tr id='"+numord+"'>"+
                  // "<td  style='text-align: center' ><i class='fa fa-check-circle-o' style='color: #006400 '; cursor: 'pointer' title='Confirmar tarea'></i></td>"+
                  "<td>"+tarea1+"</td>"+
                  "<td></td>"+
                  "<td></td>"+
                  // "<td style='text-align: center' ><small class='label label-default' >Curso</td>"+
                  "<td><i class='fa fa-times-circle' style='color: #A9A9A9 '; cursor: 'pointer' title='Eliminar'></i> <i class=' fa fa-user' style='color: #A9A9A9; margin-left:7px'; cursor: 'pointer' title='Asignacion de usuario' data-toggle='modal' data-target='#modalSale'></i></td>"+
                  /*"<td><i class=' fa fa-user' style='color: #A9A9A9 '; cursor: 'pointer' title='Asignacion de usuario' data-toggle='modal' data-target='#modalSale'></i></td>"+*/
                  // "<td  ><i class='fa fa-cogs' style='color: #A9A9A9    '; cursor: 'pointer' title='Fecha' data-toggle='modal' data-target='#modalAsignaEquipo'></i></td>"+
                "</tr>";          
      console.log(tr); 
      var hayError = false;
      if (tarea1){
        $('#orden tbody').append(tr);
        $('#error').fadeOut('slow');
      }
      else {
        var hayError = true;
        $('#error').fadeIn('slow');
        return;
      }
      if(hayError == false){
      
        $('#error').fadeOut('slow');
      }
      var parametros = {       
        'id_orden': numord,
        'tareadescrip': tarea1,
        'id_tarea': tareaId,
        'estado': 'C'   
      };
      // guarda tarea de a una
      $.ajax({
        type: 'POST',
        data: { parametros:parametros},
        url: 'index.php/Otrabajo/agregar_tarea', 
        success: function(data){
              console.log(data);
              var datos= parseInt(data);
              idtarea= datos; 
              },
        error: function(result){
              
              console.log(result);
            }           
      });  
       
      $('#tarea').val(''); 
    }); 

    // No se hace desde aca sino desde BPM
    //check de tarea realizada cambia estado a RE por id de tarea - Listo
    $(".fa-check-circle-o").click(function (e) { 
      var idtarea= $(this).data("idtarea");
      alert(idtarea);  
      var id_orden = $(this).parent('td').parent('tr').attr('id'); 
      console.log("Estoy realizando una tarea");
      console.log("id de tarea es:");
      console.log(id_orden);  
      $.ajax({
        type: 'GET',
        data: { idtarea: idtarea},
        url: 'index.php/Otrabajo/TareaRealizada',
        success: function(data){
                console.log(data);
                regresa1();
                             
              },
          
        error: function(result){
              
              console.log(result);
            }
           // dataType: 'json'
        });      
    });
    
    //ELIMINAR
    $(".fa-times-circle").click(function (e) { 
        
      console.log("Estoy eliminando tarea");
      var idt = $(this).parent('td').parent('tr').attr('id'); 
      console.log("id de tarea es:");
      console.log(idt); 
      idtarea=idt;  
      $.ajax({
              type: 'POST',
              data: { idtarea: idtarea},
              url: 'index.php/Otrabajo/EliminarTarea', 
              success: function(data){
                        console.log("TAREA ELIMINADA");                        
                        regresa1();                      
                      },
                
              error: function(result){
                      console.log(result);
                    }
      });
    });    

    //ASIGNAR USUARIO
    $(".fa-user").click(function (e) { 
        
      var idtar = $(this).parent('td').parent('tr').attr('id'); 
      console.log("id de tarea es: estoy asignando usuario");
      console.log(idtar); 
      idtarea=idtar;      
    });

    //ASIGNAR EQUIPO no se usa se hace desde calendarizar Pop Up
    $(".fa-cogs").click(function (e) { 
        // guarda el id_listarea en input de modal
        var idtar = $(this).parent('td').parent('tr').attr('id');
        alert(idtar);
        $('#id_listarea').val(idtar);
    }); 

    // datepicker
    $("#fecha").datepicker({
        changeMonth: true,
        changeYear: true
    });

//});

// Asigna equipo a tarea por id de tarea y por id equipo - LISTO
function setEquipo(){
  var equipo = $("#equipo").val();
  var id_listarea = $("#id_listarea").val();
  $.ajax({
              type: 'POST',
              data: { id_equipo: equipo,
                      id_listarea: id_listarea},
              url: 'index.php/Otrabajo/setEquipo', //index.php/
              success: function(data){                             
                      regresa1();                    
                    },                
              error: function(result){
                    console.log(result);
                 }
  });
}

traer_usuarios();
function traer_usuarios(){

      $.ajax({
        type: 'POST',
        data: { },
        url: 'index.php/Otrabajo/getusuario', //index.php/
        success: function(data){
               
                var opcion  = "<option value='-1'>Seleccione...</option>" ; 
                $('#nomusu').append(opcion); 
                for(var i=0; i < data.length ; i++) {

                      var nombre = data[i]['usrLastName']+' '+data[i]['usrName'];
                      //data[i]['usrName'];

                      var opcion  = "<option value='"+data[i]['usrId']+"'>" +nombre+ "</option>" ; 

                    $('#nomusu').append(opcion); 
                                   
                }
              },
        error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
      });
}

//guardando usuario asignado - listo
function guardarmodif(){

  console.log("Estoy guardando usuario asignado");
  var idusu= $('#nomusu').val();
  //idu=idusu;
  console.log("El id de usuario es:");
  console.log(idusu);
  console.log("El id de tarea es :");
  console.log(idtarea);
        $.ajax({
                type: 'POST',
                data: { idtarea: idtarea, idusu:idusu },
                url: 'index.php/Otrabajo/ModificarUsuario', //index.php/
                success: function(data){

                        console.log(data);                        
                        regresa1();                      
                      },
                  
                error: function(result){
                      console.log(result);
                   },
                dataType: 'json'
        });
   
}

function guardarfecha(){
  var idusu= $('#nomusu').val();
  idu=idusu;
  var fe= $('#fecha').val();
  var idt2 = $(this).parent('td').parent('tr').attr('id');     
  console.log(idusu);
  console.log("La fechaa a guardar es :");
  console.log(fe);
  console.log("El id de tarea es :");
  console.log(idt2);
  console.log(idtarea);

        $.ajax({
                type: 'POST',
                data: { idtarea: idtarea, idusu:idusu, fe:fe},
                url: 'index.php/Otrabajo/ModificarFecha', //index.php/
                success: function(data){

                        console.log(data);                        
                        regresa1();                      
                      },
                  
                error: function(result){
                      console.log(result);
                   }
        });
   
}

function regresa1(){
  
  var numord= $('#numord').val();
  no=numord;
  console.log(no);
  
  $("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/cargartarea/<?php echo $permission; ?>/"+no+"");
  
}

$('#fechaProgNueva').datetimepicker(
  {format: 'YYYY-MM-DD H:mm:ss',
    locale: 'es'}
);


</script>

<!-- Modal Asigna usuario -->
<div class="modal fade" id="modalSale" tabindex="2000" aria-labelledby="myModalLabel" style="display: none;">
  <div class="modal-dialog" role="document" style="width: 40%">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerro()"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="modalActionSale" class="fa fa-user" style="color: #A9A9A9" > </span> Asignación de usuario</h4> 
      </div>

      <div class="modal-body" id="modalBodySale">
        <div class="row" >
          <div class="col-sm-12 col-md-12">
            <fieldset> </fieldset>
            <br>
            <div class="form-group">Usuario
              <select id="nomusu" name="nomusu" value="" class="form-control input-md"></select>
            <!--  <input type="text" id="nomusu" name="nomusu" value=""  class="nomusu">-->
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

<!-- Modal Asignación de Fecha -->
<div class="modal fade" id="modalfecha" tabindex="2000" aria-labelledby="myModalLabel" style="display: none;">
  <div class="modal-dialog" role="document" style="width: 40%">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerro()"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="modalActionSale" class="fa fa-user" style="color: #A9A9A9" > </span> Asignación de Fecha</h4> 
      </div>

      <div class="modal-body" id="modalBodySale">
        <div class="row" >
          <div class="col-sm-12 col-md-12">
            <fieldset> </fieldset>
            <br>
            <div class="col-xs-6">Fecha
              <input type="text" id="fecha" name="fecha" value="" class="datepicker">
            </div>
                                                        
          </div>
        </div>
      </div>       
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cerro()">Cancelar</button>
        <button type="button" class="btn btn-primary" id="reset" data-dismiss="modal" onclick="guardarfecha()">Guardar</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Asigna equipo -->
<div class="modal fade" id="modalAsignaEquipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asigna Equipo</h4>
      </div>
      <div class="modal-body">
        <h5>Seleccione Equipo</h5> 
        <div class="form-group">
          <div class="col-xs-8">Equipo
            <select id="equipo" name="equipo" class="form-control " placeholder="" value="" ></select>
            <input type="text" id="id_listarea" name="id_listarea" value="" class="hidden">
          </div>
        </div>        
      </div>    
      <div class="clearfix"></div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="CancEquipo()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="setEquipo()">Asignar</button>
      </div>
    </div>
  </div>
</div>


<!-------------------- PROGRAMACION DE TAREAS CALENDARIO --------------> 

<!-- Modal fecha de Programación-->
<div class="modal fade" id="modalProgramacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Programacion Tarea</h4>
      </div>
      <div class="modal-body" id="infoTarea">
        
        <h5 id="descTareaModal"></h5>      

        <input type='text' class="hidden" id="idTarea">
        <input type='text' class="hidden" id="idListTarea">
        <input type='text' class="hidden" id="idEquip">

        <div class="form-group">
          <label for="fechaProgNueva">Fecha *</label>
          <input type='text' class="form-control input-md" id="fechaProgNueva" value="<?php echo date("Y-m-d H:i:s") ?>">
          <!-- <input type='text' class="form-control input-md" id="fechaProgNueva" value=""> -->
        </div>

        <div class="form-group">
          <label for="fecha">Duración Estandar (en minutos)</label>
          <input type='text' class="form-control input-md" id="duracion" value="" disabled>
        </div>

        
        

      </div>    
      <div class="clearfix"></div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="programTarea()">Programar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tarea-->
<div class="modal fade" id="modalTarea" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span id="modalAction_2">Detalle de Tarea</span></h4>
      </div>
      <div class="modal-body" id="modalPrev">
        <table class="table table-condensed table-responsive modal_prev" id="modal_prev">
            <thead>
              <tr>
                <th style="width: 5%;">Nº de Orden</th>                
                <th style="width: 15%;">Equipo</th>
                <th>Tarea</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="aceptar">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!--------------------  // PROGRAMACION DE TAREAS CALENDARIO --------------> 

