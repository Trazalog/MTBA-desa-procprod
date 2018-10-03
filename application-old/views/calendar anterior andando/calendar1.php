<input type="hidden" id="permission" value="">
<section class="content">
    <style>
      input.prevent{border: none; padding-left: 5px; width: 100%;} 
      .selmes{margin-bottom: 10px;}     
    </style>
         
    <!-- CALENDARIO -->
      <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
              <div class="fa fa-fw fa-print" style="color: #A4A4A4; cursor: pointer; margin-left: 15px; border-radius: 18px; " title="Imprimir"  ></div>
                <div id="calendar"></div>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
      </div><!-- /.col -->       
</section><!-- /.content -->

<script>

// function getTablas(month_) {
  
//   var mes = parseInt(month_) + 1;
//   var permission = '<?php echo $permission ?>';
//   //var permission = $('#permission').val();

//   $.ajax({
//         url: 'index.php/Calendario/getTablas',
//         type: "POST",
//         data: {mes:mes, permission: permission},
//         success: function(data) {
                 
//                 $('#tablas').html(data); 
//         },
//         error:function(argument) {
//           alert('Error. No se encontro alguna tabla');
//         }
//   });
// }

var mes = "";

$(function () {    

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

        var evento = $.ajax({
                          url: 'index.php/Calendario/getcalendarot',
                          data: { month: month_ },
                          dataType: 'json',
                          type: 'POST',
                          success: function(doc) {
                              var events = [];
                              //getTablas(month_);
                              $(doc).each(function() {

                                  var tarea = $(this).attr('descripcion');                                  
                                  var desde = $(this).attr('fecha_entrega'); //ultimo preventivo hecho
                                  var from = new Date(desde);                            
                                  
                                  // sumo los minutos
                                  var minutos = parseInt(from.getMinutes());
                                  var duracion = parseInt($(this).attr('duracion'));
                                  var totalminutos = minutos + duracion;
                                  
                                  var hasta = new Date(from);
                                  hasta = hasta.setMinutes(totalminutos);
                                  
                                  var to = new Date(hasta);
                          
                                  var  Color = '#3c8dbc';                                  

                                  events.push({
                                          // title: $(this).attr('descripcion') + ',' + $(this).attr('id_tarea'),
                                          //start:to,
                                          start:from,
                                          end:to,
                                          title:  $(this).attr('descripcion'),
                                          codigo: $(this).attr('nro'),
                                          equipo: $(this).attr('codigo'),
                                          id_orden: $(this).attr('id_orden'),
                                          allDay: false,
                                          backgroundColor: Color,
                                          durationEditable: false
                                        });
                              });
                            
                              callback(events);
                              WaitingClose();
                          },

                          error: function(doc) {
                            WaitingClose();
                            alert('Sin datos para este mes');
                                  //alert("Error en ajax calendario:" + doc);
                          }
                      });
      },

      eventClick: function(event) {
        //// console.log('eventossss');
        // console.log(evento);

        console.log('Titulo:');
        console.log(event.title);
        //setTimeout("$('#modalPrevent').modal('show')",0);
        $('#title').remove();
        $('#codigo_equipo').remove();
        $('#numero').remove();
        $('#modal_desc').remove();
        $('#modal_prev tbody').append(

          '<tr id="modal_desc">'+
          '<td class="tit"><input type="text" class="numero prevent" id="numero" value=" '+ event.id_orden +' " placeholder=""></td>'+
          '<td class="tit"><input type="text" class="title prevent" id="title" value=" '+ event.title +' " placeholder=""></td>'+          
          '</tr>'
          );

          $('#modalPrevent').modal('show');
      },

      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar !!!

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
                      var id_OT = event.id_orden;                    

                      if (!confirm("Realmente desea hacer este cambio?")) {
                          
                          revertFunc();
                      }else{
                          resultado = updateDia(id_OT,nuevoDia);
                          if (resultado == 'false') {
                            revertFunc();
                            alert("No pudo realizarse el cambio");
                          }else{
                            //alert("Cambio exitoso");
                          }
                      }

                },
      // Triggered when resizing stops and the event has changed in duration.          
      // eventResize: function(event, delta, revertFunc) {

      //                 var result = "";
      //                 var duracion = delta; 
      //                 var id_OT = event.id_orden;
      //                     duracion = duracion/60000;
      //                 //alert("Se agrego o resto: " + duracion + " cambio su duración y finalizará  " + event.end.format("h:mm:ss a"));

      //                 if (!confirm("Realmente desea hacer este cambio?")) {
                        
      //                     revertFunc();
      //                 }else{
                          
      //                     result = updateHora(id_OT,duracion);                        
      //                     if (result == 'false') {
      //                       revertFunc();
      //                       alert("No pudo realizarse el cambio");
      //                     }else{
      //                       //alert("Cambio exitoso");
      //                     }
      //                 }

      //             }  
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
});

$(".fa-print").click(function (e) {
  $("#calendar").printArea();
});


//////////  ACTUALIZA DIA Y HORA

  function updateDia(id_OT,nuevoDia){

    var resultado = $.ajax({
                        type: 'POST', //parametros:parametros
                        data: {id:id_OT,
                               prog:nuevoDia},
                        url: 'index.php/Calendario/updateDiaProg',  
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

  // function updateHora(id_OT,duracion) {
    
  //   var resultad = $.ajax({
  //                       type: 'POST', 
  //                       data: {id:id_OT,
  //                              duracion:duracion}, // duracion adicional
  //                       url: 'index.php/Calendario/updateDuracion',  
  //                       success: function(data){
  //                               //alert('sucess');
  //                                console.log(data);
  //                             },
  //                       error: function(data){

  //                             console.log(data);
  //                           },
  //                       dataType: 'json'    
  //                   }); 
    
  //   return resultad;
  // }
//////////  / ACTUALIZA DIA Y HORA


</script>
<!-- Guardado de datos y validaciones -->

<!-- Modal Ver Orden Trabajo-->
<div class="modal fade" id="modalPrevent" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span id="modalAction_2">Orden de Trabajo</span></h4>
      </div>
      <div class="modal-body" id="modalPrev">
        <table class="table table-condensed table-responsive modal_prev" id="modal_prev">
            <thead>
              <tr>
                <th style="width: 5%;">Nº de Orden</th>                
                <!-- <th style="width: 15%;">Equipo</th> -->
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