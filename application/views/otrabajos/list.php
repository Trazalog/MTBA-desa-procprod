<input type="" id="permission" class="hidden" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Orden de trabajo</h3>
          <?php
          if (strpos($permission,'Add') !== false) {
            echo '<button class="btn btn-block btn-success" style="width: 100px; margin-top: 10px;"  data-toggle="modal" data-target="#modalagregar" id="btnAdd">Agregar</button>'; 
          }

          //// USUARIO LOGUEADO Y GRUPO DE USUARIO
          $userdata = $this->session->userdata('user_data');
          $usrId = $userdata[0]['usrId'];     
          $grpId = $userdata[0]['grpId']; 
          ?>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="otrabajo" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th width="1%" class="acc">Acciones</th>
                <th width="1%">Id </th>
                <th width="10%">Nro</th>
                <th>Fecha</th>
                <th>Fecha Entrega</th>
                <th>Fecha Terminada </th>
                <th>Detalle </th>
                <th>Cliente </th>
                <th>Asignado </th>
                <th>Estado </th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($list!=0) { 

                  $userdata = $this->session->userdata('user_data');
                  $usrId= $userdata[0]['usrId']; 
                  
               	  foreach($list as $a){
                    
                    echo '<i class="fa fa-check-square-o" style="color:#3c8dbc; cursor: pointer; margin-left: 15px;"  title="Asignar tarea " id="btnAddtarea"></i>';



                    //if($a['id_usuario_a'] == $usrId  &&  (($a['grpId']==='1') || ($a['grpId']=== '5'))){ //$a['grpId']==1 //o el grupo es supervisor tarea//if($a['id_usuario_a'] == $usrId || $a['id_usuario_a']== 1){ 
                                         
                      if (($a['estado'] !=='T') && ($a['estado'] !=='E')  && ($a['estado'] !=='TE')) {
                     
                        $id=$a['id_orden'];
                        echo '<tr id="'.$id.'" class="'.$id.'">';
                        echo '<td class="acc">';
                        if (strpos($permission,'View') !== false) {//Ver Pantalla Planificación
      	                	echo '<i class="fa fa-fw fa-eye ver-calendario" style="color: #006400; cursor: pointer; margin-left: 15px;" title="Ver en Calendario"></i>';
                        }  

                        if (strpos($permission,'Edit') !== false) {
      	                	echo '<i class="fa fa-fw fa-pencil" style="color: #f39c12; cursor: pointer; margin-left: 15px;" title="Editar" data-toggle="modal" data-target="#modaleditar" ></i>';
                        }  
                          
                          // echo '<i class="fa fa-check-square-o" style="color:#3c8dbc; cursor: pointer; margin-left: 15px;"  title="Asignar tarea " id="btnAddtarea"></i>';
                        
                        if (strpos($permission,'Del') !== false) {
      	                	echo '<i class="fa fa-fw fa-times-circle" style="color: #dd4b39; cursor: pointer; margin-left: 15px;" title="Eliminar"></i>';
                        }

                       // limitada al grupo 7 Coordinador
                       if ($grpId != 7) {
                        if (strpos($permission,'Asignar') !== false) {
                          echo '<i class="fa fa-thumb-tack " style="color: #006400; cursor: pointer; margin-left: 15px;" title="Asignar a Taller" ></i>';
                         
                        }
                       } 
                       
                        if (strpos($permission,'OP') !== false) {
                          
                          echo '<i class="fa fa-tags" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;"  title="Cargar Orden Pedido " data-toggle="modal" data-target="#modalpedido"></i>';
                          
                          echo '<i class="fa fa-file-text-o " style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" onclick="getnotaPedido('.$id.')"></i>';

                        }
                        if (strpos($permission,'Pedidos') !== false) {
                          echo '<i class="fa fa-truck" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;"  title="Mostrar Perdido " data-toggle="modal" data-target="#modallista"></i>';
                        }

                        if(($a['estado'] == 'As' || $a['estado'] == 'P') && ($a['id_usuario_a'] == $usrId)){
                        //if($a['estado'] == 'As' ){
                          echo '<i  href="#"class="fa fa-fw fa fa-toggle-on" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" title="Finalizar Orden" data-toggle="modal" data-target="#modalfinalizar"></i>';
                        }
                            
      	                echo '</td>';
                        echo '<td style="text-align: right">#'.$a['id_orden'].'</td>';
                        echo '<td style="text-align: right">'.$a['nro'].'</td>';
      	                echo '<td style="text-align: left">'.$a['fecha_inicio'].'</td>';
                        echo '<td style="text-align: right">'.$a['fecha_entrega'].'</td>';
                        echo '<td style="text-align: right">'.$a['fecha_terminada'].'</td>';
                        echo '<td style="text-align: right">'.$a['descripcion'].'</td>';
                        echo '<td style="text-align: left">'.$a['cliLastName'].' , '.$a['cliName'].'</td>';
                        echo '<td style="text-align: right">'.$a['usuario'].'</td>';
                        echo '<td style="text-align: center">'.($a['estado'] == 'C' ? '<small class="label pull-left bg-green">Curso</small>' : ($a['estado'] == 'P' ? '<small class="label pull-left bg-red">Pedido</small>' : '<small class="label pull-left bg-yellow">Asignado</small>')).'</td>';
      	                echo '</tr>';                      
        		          }
                    }   
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
if($(".acc").html()==''){$(".acc").remove()};
$('.ver-calendario').click(function(){
  var row = $(this).parent().parent();
  var ot = $(row).attr('id');
  var cod_interno = $(row).find('td:eq(2)').html();
  WaitingOpen('Cargando Tareas...');
		$('#content').empty();
		$("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/cargarPlanificacion/View-FiltrarOT/"+ot+"/"+cod_interno+"/");
		WaitingClose();
});

var iort= "";
var ido ="";
var idp ="";
var idArt = 0;
var acArt = '';
var i ="";
var idord ="";
var idfin= "";
//$(document).ready(function(event) {
  
  //Al apretar la opcion asignar tareas , esto lleva a esa pantalla, esto es lo que hay q cambiar para subir
  $(".fa-check-square-o").click(function (e) { 
    var id = $(this).parent('td').parent('tr').attr('id');
    console.log("El id de OT es:");
    console.log(id);
    iort= id;
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/cargartarea/<?php echo $permission; ?>/"+iort+"");
    WaitingClose();  
  });
  
  //Asignar 
  $(".fa-thumb-tack").click(function (e) { 
    var datos = new Object();      
    $('#modalAsig').modal('show');
    var id_orden = $(this).parent('td').parent('tr').attr('id');      
    $.ajax({
        type: 'GET',
        data: { id_orden: id_orden},
        url: 'index.php/Otrabajo/getasigna', 
        success: function(data){
                
                console.log(data);
                datos={
                  'id_orden':id_orden,
                  'nro':data['datos'][0]['nro'],
                  'fecha_inicio':data['datos'][0]['fecha_inicio'],
                  'estado':data['datos'][0]['estado'],
                  'descripcion':data['datos'][0]['descripcion'],
                  'cliente': data['datos'][0]['cliLastName']+' '+data['datos'][0]['cliName'],
                  'cliId':data['datos'][0]['cliId'],
                  'id_usuario':data['datos'][0]['id_usuario'],

                };

                var arre = new Array();
                arre=datos['fecha_inicio'].split(' ');

                $('#id_orden').val(datos['id_orden']);
                $('#nro').val(datos['nro']);
                $('#fecha_inicio').val(arre[0]); 
                $('#estado').val(datos['estado']);
                $('#cliente').val(datos['cliente']);
                $('#id_cliente').val(datos['cliId']);
                $('#descripcion').val(datos['descripcion']);
                $('#id_usuario').val(datos['id_usuario']);
                
                click_pedent();
              },
          
        error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
        });   
  });

  //cargar pedido
  $(".fa-tags").click(function (e) { 

    var id_orden = $(this).parent('td').parent('tr').attr('id');
    ido=id_orden; //aca esta el id de orden de trabajo
    console.log("El id de orden para la carga de pedido es :");
    console.log(ido);
    i=1;
    var opcion =i; 
    $('#num1').append(opcion);
    i=i+1; 
    
  });


  $(".fa-truck").click(function (e) { 

   $("#modallista tbody tr").remove();
    var idorde = $(this).parent('td').parent('tr').attr('id');
    
    //idord= idorde;
    console.log("ID de orden de trabajo para mostrar pedido es :");
    console.log(idorde);    
    $.ajax({
        type: 'POST',
        data: { idorde:idorde},
        url: 'index.php/Otrabajo/getmostrar', //index.php/
          success: function(data){
            console.log("llego el detalle");
            console.log(data);
           
            for (var i = 0; i < data.length; i++) {

              if (data[i]['estado']== 'P'){
              var estado= '<small class="label pull-left bg-green">Pedido</small>';
              }
              else 
                if (data[i]['estado']== 'C'){
                var estado= '<small class="label pull-left bg-blue">Curso</small>';
                }
                else
                  if (data[i]['estado']== 'E'){ 
                  var estado= '<small class="label pull-left bg-red">Entregado</small>';
                  }
                    else{ 
                      var estado= '<small class="label pull-left bg-yellow">Terminado</small>';
                    }
              var tr = "<tr >"+
                      "<td ></td>"+
                      "<td>"+data[i]['nro_trabajo']+"</td>"+
                      "<td>"+data[i]['fecha']+"</td>"+
                      "<td>"+data[i]['fecha_entrega']+"</td>"+
                      "<td>"+data[i]['provnombre']+"</td>"+
                      "<td>"+data[i]['descripcion']+"</td>"+
                      "<td>"+estado+"</td>"+
                      "</tr>";
              $('#tabladetalle tbody').append(tr);

            }
            console.log(tr);

          },
            
          error: function(result){
                console.log("Entro x el error de detalle");
                
                console.log(result);
              },
              dataType: 'json'
    });
    
  });

  $('#btnSave').click(function(){

      if(acArt == 'View')
      {
        $('#modalOT').modal('hide');
        return;
      }

      var hayError = false;
      if($('#nro').val() == '')
      {
        hayError = true;
      }

      if($('#vfech').val() == '')
      {
        hayError = true;
      }

      if($('#vsdetalle').val() == '')
      {
        hayError = true;
      }

      if($('#sucid').val() == '')
      {
        hayError = true;
      }

     


      $('#error').fadeOut('slow');
      WaitingOpen('Guardando cambios');
        $.ajax({
              type: 'POST',
              data: { 
                      id : idArt, 
                      act: acArt, 
                      nro: $('#nro').val(),
                      fech: $('#vfech').val(),
                      deta: $('#vsdetalle').val(),
                      sucid: $('#sucid').val(),
                      cli: $('#cliid').val()
                      
                    },
          url: 'index.php/Otrabajo/setotrabajo', 
          success: function(result){
                        WaitingClose();
                        //$('#modalOT').modal('hide');
                        //setTimeout("cargarView('otrabajos', 'index', '"+$('#permission').val()+"');",1000);
                        regresa1();
                },
          error: function(result){
                WaitingClose();
                alert("error");
              },
              dataType: 'json'
          });
  });

  $(".fa-times-circle").click(function (e) { 
                      
      console.log("Esto eliminando"); 
      var idord = $(this).parent('td').parent('tr').attr('id');
      console.log(idord);  
      $.ajax({
              type: 'POST',
              data: { idord: idord},
              url: 'index.php/Otrabajo/baja_orden', //index.php/
              success: function(data){
                      console.log("ORDEN DE TRABAJO ELIMINADA");
                      console.log(data);
                      alert("ORDEN DE TRABAJO Eliminada");
                      regresa();
                    
                    },
                
              error: function(result){
                    console.log(result);
                 }
      });
  });     

  $(".fa-toggle-on").click(function (e) { 

    var idord = $(this).parent('td').parent('tr').attr('id');
    console.log(idord);  
    idfin=idord;
  

  });
  
  $('#vfecha').datepicker({
      changeMonth: true,
      changeYear: true
  }); 

  $(".datepicker").datepicker({
      
      changeMonth: true,
      changeYear: true
  });

  $(".fa-pencil").click(function (e) { 
     
    console.log("Estoy editado ");
    var idord = $(this).parent('td').parent('tr').attr('id');
    idp=idord;
    console.log("El id de orden es:");
    console.log(idord);
    console.log(idp);
    $.ajax({
        type: 'POST',
        data: { idp: idp},
        url: 'index.php/Otrabajo/getpencil', //index.php/
        success: function(data){
                                  
              console.log(data);
              console.log(data[0]['nro']);
              datos={
                  'nro':data[0]['nro'],
                  'cli' :data[0]['cliId'],
                  'clientena':data[0]['cliName'],
                  'cliap':data[0]['cliLastName'],
                  'fecha_inicio':data[0]['fecha_inicio'],
                  'idusuario':data[0]['id_usuario'],
                  'nota':data[0]['descripcion'],
                  'id_sucu':data[0]['id_sucursal'],
                  'sucursal':data[0]['descripc'],
                  'id_proveedor':data[0]['provid'],
                  'nombreprov':data[0]['provnombre'],
                }
              console.log("datos a enviar");
              console.log(datos);
              completarEdit(datos);
              OpenSale();               
            
              },
          
        error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
    });
  
  });

  $('#otrabajo').DataTable({
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


//});

// trae detaes de la OT para llenar en NOta de Pedidos
function getnotaPedido(idOt){
  WaitingOpen();
  $('#content').empty(); //listOrden  
  $("#content").load("<?php echo base_url(); ?>index.php/Notapedido/getDetalle/<?php echo $permission; ?>/"+idOt+"/");
  WaitingClose();
}

function completarEdit(datos){

  console.log("datos que llegaron");
  console.log(datos);
  $('#nroedit').val(datos['nro']);
  $('select#cliidedit').append($('<option />', { value: datos['cli'],text: datos['cliap']+'.'+datos['clientena']+'.'}));
  traer_cli2();
  $('#vfecha').val(datos['fecha_inicio']);
  $('#vsdetalleedit').val(datos['nota']);
  $('select#sucidedit').append($('<option />', { value: datos['id_sucu'],text: datos['sucursal']+'.'}));
  traer_sucursal2();
  $('select#prov1').append($('<option />', { value: datos['id_proveedor'],text: datos['nombreprov']+'.'}));
  traer_prov1();  
}
    
function LoadOT(id_, action){
  idArt = id_;
  acArt = action;
  LoadIconAction('modalAction',action);
  WaitingOpen('Cargando Orden de trabajo');
  $.ajax({
          type: 'POST',
          data: { id : id_, act: action },
    		  url: 'index.php/otrabajo/getotrabajo', 
    		    success: function(result){
			                WaitingClose();
			                $("#modalBodyOT").html(result.html);
                      $('#vfech').datepicker({
                        changeMonth: true,
                        changeYear: true
                      });
			                setTimeout("$('#modalOT').modal('show')",800);
                      
    					},
    		    error: function(result){
    					WaitingClose();
    					alert("error");
    				},
          dataType: 'json'
  });
  
}

function traer_clientes(idcliente){

    $.ajax({
          type: 'POST',
          data: { idcliente: idcliente},
          url: 'index.php/Otrabajo/getcliente',  //index.php/
          async:false,
          success: function(data){
                  
                  $('#cliente option').remove();
                   var opcion  = "<option value='-1'>Seleccione...</option>" ; 
                  $('#cliente').append(opcion); 
                  for(var i=0; i < data.length ; i++) {   
                   
                      var apellido = data[i]['cliLastName']; 
                      var opcion  = "<option value='"+data[i]['cliId']+"'>" +apellido+ "</option>" ; 
                      $('#cliente').append(opcion);                
                  }
                },
          error: function(result){
                
                console.log(result);
              },
              dataType: 'json'
    });
}

function finalOT(id_, action){ //esto es nuevo 

  idot = id_;
  ac = action;
  est='T';
  LoadIconAction('modalAction',action);
  WaitingOpen('Finalizando');
  $.ajax({
          type: 'POST',
          data: { id : id_, act: action,estado:est },
          url: 'index.php/otrabajo/setfinal', 
            success: function(data){
                      WaitingClose();
                    
                    
            },
            error: function(result){
              WaitingClose();
              alert("error");
            },
            dataType: 'json'
  });
}
 
traer_usuario();   
function traer_usuario(){

      $.ajax({
        type: 'POST',
        data: { },
        url: 'index.php/Otrabajo/getusuario', //index.php/
        success: function(data){
               
                var opcion  = "<option value='-1'>Seleccione...</option>" ; 
                $('#usuario').append(opcion); 
                for(var i=0; i < data.length ; i++) {

                      var nombre = data[i]['usrName'];
                      var opcion  = "<option value='"+data[i]['usrId']+"'>" +nombre+ "</option>" ; 

                    $('#usuario').append(opcion); 
                                   
                }
              },
        error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
      });
}

traer_cli();  
function traer_cli(){

    $('#cli').html('');
    $.ajax({
        type: 'POST',
        data: { },
        url: 'index.php/Otrabajo/traer_cli', //index.php/
        success: function(data){
                console.log(data); 
               // var opcion  = "<option value='-1'>Seleccione...</option>" ;          
                $('#cli').append(opcion); 
                for(var i=0; i < data.length ; i++){    
                      var nombre = data[i]['cliLastName']+' '+data[i]['cliName'];
                      var opcion  = "<option value='"+data[i]['cliId']+"'>" +nombre+ "</option>" ; 

                    $('#cli').append(opcion); 
                                   
                }
              },
        error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
        });
}
     
function traer_cli2(){
  $('#cliidedit').html('');
  $.ajax({
    type: 'POST',
    data: { },
    url: 'index.php/Otrabajo/traer_cli', //index.php/
    success: function(data){
      console.log(data);
           
             //var opcion  = "<option value='-1'>Seleccione...</option>" ; 
             // $('#cliidedit').append(opcion); 
            for(var i=0; i < data.length ; i++) 
            {    
                  var nombre = data[i]['cliLastName']+' '+data[i]['cliName'];
                  var opcion  = "<option value='"+data[i]['cliId']+"'>" +nombre+ "</option>" ; 

                $('#cliidedit').append(opcion); 
                               
            }
          },
    error: function(result){
          
          console.log(result);
        },
        dataType: 'json'
    });
  } 

function traer_sucursal2(){
  $('#sucidedit').html('');
    $.ajax({
      type: 'POST',
      data: { },
      url: 'index.php/Otrabajo/traer_sucursal', //index.php/
      success: function(data){
             
               //var opcion  = "<option value='-1'>Seleccione...</option>" ; 
                $('#sucidedit').append(opcion); 
              for(var i=0; i < data.length ; i++) 
              {    
                    var nombre = data[i]['descripc'];
                    var opcion  = "<option value='"+data[i]['id_sucursal']+"'>" +nombre+ "</option>" ; 

                  $('#sucidedit').append(opcion); 
                                 
              }
            },
      error: function(result){
            
            console.log(result);
          },
          dataType: 'json'
      });
} 
      
traer_proveedor();
function traer_proveedor(){
  $.ajax({
    type: 'POST',
    data: {},
    url: 'index.php/Otrabajo/getproveedor', //index.php/
    success: function(data){
           
             var opcion  = "<option value='-1'>Seleccione...</option>" ; 
              $('#proveedor').append(opcion); 
            for(var i=0; i < data.length ; i++) 
            {    
                  var nombre = data[i]['provnombre'];
                  var opcion  = "<option value='"+data[i]['provid']+"'>" +nombre+ "</option>" ; 

                $('#proveedor').append(opcion);                
            }
          },
    error: function(result){
          
          console.log(result);
        },
        dataType: 'json'
    });

}

traer_prov();
function traer_prov(){
  $.ajax({
    type: 'POST',
    data: {},
    url: 'index.php/Otrabajo/getproveedor', //index.php/
    success: function(data){
           
             var opcion  = "<option value='-1'>Seleccione...</option>" ; 
              $('#prov').append(opcion); 
            for(var i=0; i < data.length ; i++) 
            {    
                  var nombre = data[i]['provnombre'];
                  var opcion  = "<option value='"+data[i]['provid']+"'>" +nombre+ "</option>" ; 

                $('#prov').append(opcion);                
            }
          },
    error: function(result){
          
          console.log(result);
        },
        dataType: 'json'
    });

}

function traer_prov1(){
  $.ajax({
    type: 'POST',
    data: {},
    url: 'index.php/Otrabajo/getproveedor', //index.php/
    success: function(data){
           
             //var opcion  = "<option value='-1'>Seleccione...</option>" ; 
             // $('#prov1').append(opcion); 
            for(var i=0; i < data.length ; i++) 
            {    
                  var nombre = data[i]['provnombre'];
                  var opcion  = "<option value='"+data[i]['provid']+"'>" +nombre+ "</option>" ; 

                $('#prov1').append(opcion);                
            }
          },
    error: function(result){
          
          console.log(result);
        },
        dataType: 'json'
    });

}

traer_clientes()
function traer_clientes(){
  $.ajax({
    type: 'POST',
    data: { },
    url: 'index.php/Otrabajo/traer_cli', //index.php/
    success: function(data){
           
             var opcion  = "<option value='-1'>Seleccione...</option>" ; 
              $('#cli').append(opcion); 
            for(var i=0; i < data.length ; i++) 
            {    
                  var nombre = data[i]['cliLastName']+'. .'+data['cliName'];
                  var opcion  = "<option value='"+data[i]['cliId']+"'>" +nombre+ "</option>" ; 

                $('#cli').append(opcion); 
                               
            }
          },
    error: function(result){
          
          console.log(result);
        },
        dataType: 'json'
    });
}
    
traer_sucursal()
function traer_sucursal(){
      $.ajax({
        type: 'POST',
        data: { },
        url: 'index.php/Otrabajo/traer_sucursal', //index.php/
        success: function(data){
               
                 var opcion  = "<option value='-1'>Seleccione...</option>" ; 
                  $('#suci').append(opcion); 
                for(var i=0; i < data.length ; i++) 
                {    
                      var nombre = data[i]['descripc'];
                      var opcion  = "<option value='"+data[i]['id_sucursal']+"'>" +nombre+ "</option>" ; 

                    $('#suci').append(opcion); 
                                   
                }
              },
        error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
        });
} 
    

function click_pedent(){  

  var fechai= $("#fecha_inicio").val(); //optengo el valor del campo fecha 
  $.ajax({
        type: 'GET',
        data: {fechai:fechai }, /* destinodo*/
        url: 'index.php/Otrabajo/getpedidos', //index.php/
        success: function(data){
                              
                console.log(data);             
                var direccion = data[0]['destinodireccion']; 
                var contacto = data[0]['destinocontacto']; 
                $('#domicilio').val(direccion);       
                $('#contacto').val(contacto);                

              },
         error: function(result){
              
              console.log(result);
            },
            dataType: 'json'
        });

}

function guardareditar(){

  console.log("estoy guardando lo editado ");
  var id_orden = $('#id_orden').val();
  var nro = $('#nroedit').val();
  var fecha_inicio = $('#vfecha').val();
  var descripcion = $('#vsdetalleedit').val();
  var id_sucu= $('#sucidedit').val();
  var cliente = $('#cliidedit').val();
  var parametros = {
      //'id_orden': id_orden,
      'nro': nro,
      'fecha_inicio': fecha_inicio, 
      'descripcion': descripcion,    
      'cliId': cliente,
      'id_sucursal': id_sucu,

  };
  console.log(parametros);
  console.log(idp);
    $.ajax({
        type: 'POST',
        data: {parametros:parametros, idp:idp},
        url: 'index.php/Otrabajo/guardar_editar',  //index.php/
        success: function(data){
               // var data = jQuery.parseJSON( result );
               console.log("Exito en la edicion");
                console.log(data);
               /* $('#modalAsig').modal('hide');

                 setTimeout(function(){
                       var permisos = '<?php //echo $permission; ?>';
                      cargarView('otrabajos', 'index', permisos) ; 
                },3000); // 3000ms = 3s*/
                regresa();
               
              },
        error: function(result){
              
              console.log(result);
             // $('#modalAsig').modal('hide');
            }
           // dataType: 'json'
    });
           
}

function guardarpedido(){

  console.log("si guardo pedido");
  var id_orden = $(this).parent('td').parent('tr').attr('id');
  var numero = $('#num1').val();
  var fecha = $('#fecha1').val();
  var fecha_entrega = $('#fecha_entrega2').val();
  var proveedor= $('#proveedor').val();
  var descripcion2 = $('#descripcion2').val(); 
  var parametros = {
     
      'id_proveedor': proveedor,
      'nro_trabajo': numero,
      'descripcion': descripcion2,
      'fecha' : fecha,
      'fecha_entrega': fecha_entrega,
      'estado': 'P',
      'id_trabajo' :ido 
      
  };
  console.log(parametros);
  console.log(ido);
  $.ajax({
        type: 'POST',
        data: {data:parametros, ido:ido},
        url: 'index.php/Otrabajo/agregar_pedido',  //index.php/
        success: function(data){
                console.log("Estoy guardando pedido");
                regresa1();
               
              },
        error: function(result){
              
              console.log(result);
             
           }
           // dataType: 'json'
  });                 
}    
//guardar AGREGAR
function orden(){

  console.log("si guardo ");
  var id_orden = $('#id_orden').val();
  var nro = $('#nro').val();
  var fecha_inicio = $('#fecha_inicio').val();
  var fecha_entrega = $('#fecha_entrega').val();
  var usuario= $('#usuario').val();
  var estado= $('#estado').val();
  var cliente = $('#id_cliente').val();
  var parametros = {
      //'id_orden': id_orden,
      'nro': nro,
      'fecha_inicio': fecha_inicio,
      'fecha_entrega': fecha_entrega,
      'id_usuario_a': usuario,
      'estado': 'As',     
      'cliId': cliente,
  };
  console.log(parametros);
  console.log(id_orden);
  $.ajax({
      type: 'POST',
      data: {data:parametros, id_orden:id_orden},
      url: 'index.php/Otrabajo/guardar', 
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
//Refresca    
function regresa(){

  $('#content').empty(); //listOrden  
  $("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/listOrden/<?php echo $permission; ?>");
  WaitingClose();
}
    
  
function regresa1(){
  
    $('#content').empty();
    $('#modalOT').empty();
    $('#modalAsig').empty(); //local index 
    $("#content").load("<?php echo base_url(); ?>index.php/Otrabajo/listOrden/<?php echo $permission; ?>");
    WaitingClose();
    WaitingClose();
}
//listOrden
//Guarda OT     
function guardaragregar(){

  console.log("Guarda OT");

  var id_orden = $('#id_orden').val();
  var num = $('#nro1').val();
  var fecha_inicio = $('#vfech').val();
  var cliente = $('#cli').val();
  var descripcion= $('#vsdetal').val();
  var sucursal = $('#suci').val();
  var proveedor= $('#prov').val();
  var parametros = {
      //'id_orden': id_orden,
      'nro': num,
      'fecha_inicio': fecha_inicio,
      'descripcion' : descripcion,
      'cliId': cliente,
      'estado': 'C' ,
      'id_usuario': 1,
      'id_usuario_a': 1,
      'id_usuario_e': 1,   
      'id_sucursal' : sucursal,
      'id_proveedor': proveedor
      
  };
  console.log(parametros);
  console.log(id_orden);
  $.ajax({
        type: 'POST', //parametros:parametros
        data: {num:num, cliente:cliente, descripcion:descripcion, sucursal:sucursal, proveedor:proveedor},
        url: 'index.php/Otrabajo/guardar_agregar',  //index.php/
        success: function(data){
        
                console.log(data);  
                regresa1();
               
              },
        error: function(result){
              
              console.log(result);
            
            }
           
  });
                 
}
//OT TOTAL, pasa a la partalla de ot terminadas 
function guardartotal(){
 
  console.log("Estoy finalizando total la ot ");
  console.log(idfin);
  $.ajax({
        type: 'POST',
        data: { idfin: idfin},
        url: 'index.php/Otrabajo/FinalizaOt', //index.php/
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

//OT PARCIAL, pasa a la partalla de ot PARCIAL 
function guardarparcial(){

  console.log("Estoy finalizando parcial la ot ");
  console.log(idfin); 
  $.ajax({
        type: 'POST',
        data: { idfin: idfin},
        url: 'index.php/Otrabajo/CambioParcial', //index.php/
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

</script>

<!-- Modal ASIGNA-->
<div id="modalAsig" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span  class="fa fa-thumb-tack " style="color: #006400"></span>   Asignacion Orden de trabajo</h4>
      </div>
      <div class="modal-body">
        <div class="row" >
            <div class="col-sm-12 col-md-12">
              <fieldset> </fieldset>
                <br>
                  <div class="col-xs-8">Nro:
                    <input type="text" class="form-control" id="nro"  name="nro"   disabled >
                  </div>
                  <input type="hidden" id="id_orden" name="id_orden">

                  <div class="col-xs-8">Fecha de inicio:
                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" disabled>
                  </div>

                  <div class="row" >
                    <div class="col-sm-12 col-md-12">
                      <div class="col-xs-8">Cliente:
                        <input type="text"  id="cliente" name="cliente" class="form-control " disabled >
                        <input type="hidden" id="id_cliente" name="id_cliente">

                      </div>
                      <div class="col-xs-8">Descripcion:
                        
                      </div>
                      <div class="col-xs-12">
                        <textarea  class="form-control" rows="6" cols="500" id="descripcion" name="descripcion" value="" disabled ></textarea>
                      </div>
                    </div>
                  </div> 
                  <div class="row" >
                    <div class="col-sm-12 col-md-12">      
                      <div class="col-xs-8">Fecha de entrega:
                        <input type="date" id="fecha_entrega" name="fecha_entrega" class="form-control input-md" / >
                      </div>
                      <br>
                      <br>
                      <div  class="col-xs-8">Usuario:
                        <select id="usuario" name="usuario" class="form-control " placeholder="Seleccione usuario" value="" ></select>
                      <input type="hidden" id="id_usuario" name="id_usuario">
                      </div>
                      <br>
                      <br>
                      <div class="col-xs-3">
                        
                      </div>
                    </div>
                  </div>    
            </div>
          </div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cerro()">Cancelar</button>
            <button type="button" class="btn btn-primary" id="reset" data-dismiss="modal" onclick="orden()">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar-->
<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 60%">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-fw fa-pencil" style="color: #f39c12" > </span> Editar Orden de Trabajo</h4>
       </div> <!-- /.modal-header  -->

      <div class="modal-body input-group ui-widget" id="modalBodyArticle">

        <div class="row">
          <div class="col-xs-4">
           <label style="margin-top: 7px;">Nro <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <input type="text" class="form-control" placeholder="Nro Orden de trabajo" id="nroedit" name="nroedit">
          </div>
        </div><br>
        <div class="row">
          <div class="col-xs-4">
            <label style="margin-top: 7px;">Cliente <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <select class="form-control select2" id="cliidedit" name="cliidedit" style="width: 100%;">
               
            </select>
          </div>
        </div><br>

        <div class="row">
          <div class="col-xs-4">
              <label style="margin-top: 7px;">Fecha <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <input type="text" class=" datepicker" id="vfecha" name="vfecha" value="<?php echo date_format(date_create(date("Y-m-d H:i:s")), 'd-m-Y H:i:s') ; ?>" size="27"/>
          <!-- <input type="text" class="form-control" id="vfecha" placeholder="dd-mm-aaaa" name="vfecha">-->
          </div>
        </div><br>

        <div class="row">
          <div class="col-xs-4">
             <label style="margin-top: 7px;">Nota: </label>
          </div>
          <div class="col-xs-8">
            <textarea placeholder="Orden de trabajo" class="form-control" rows="10" id="vsdetalleedit" name="vsdetalleedit" value=""></textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-4">
              <label style="margin-top: 7px;">Sucursal <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <select class="form-control select2" id="sucidedit" name="sucidedit" value="" style="width: 100%;">
              
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-4">
              <label style="margin-top: 7px;">Proveedor <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <select class="form-control select2" id="prov1" name="prov1"  value="" style="width: 100%;">
              
            </select>
          </div>
        </div>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cerro()">Cancelar</button>
          <button type="button" class="btn btn-primary" id="reset" data-dismiss="modal" onclick="guardareditar()">Guardar</button> 
        </div>  <!-- /.modal footer -->
      </div>
    </div>  <!-- /.modal-body -->
  </div> <!-- /.modal-content -->
</div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->

<!-- Modal Pedido-->
<div class="modal fade" id="modalpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 45%">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-tags" style="color: #3c8dbc" > </span> Orden de Pedido</h4>
       </div> <!-- /.modal-header  -->

      <div class="modal-body input-group ui-widget" id="modalBodyArticle">
        
        <div class="row" >
          <div class="col-sm-12 col-md-12">
            <fieldset> </fieldset>
            <br>
            <div class="col-xs-8">Nro:
              <input type="text"  class="form-control" id="num1" name="num1" placeholder="Ingrese nro de orden de pedido..">
              <!--align=\"right\" -->
            </div>
            <div class="col-xs-8">Fecha:
              <input type="text"  class=" datepicker" id="fecha1"  name="fecha1" size= "36" value="<?php echo date_format(date_create(date("Y-m-d ")), 'd-m-Y') ; ?>"  />
            </div>
            <div class="col-xs-8">Fecha de Entrega:
              <input type="date"  class="form-control input-md" id="fecha_entrega2" name="fecha_entrega2" />
            </div>
            <div class="col-xs-8">Proveedor:
              <select type="text"  id="proveedor" name="proveedor" class="form-control" value="" ></select>
              <input type="hidden" id="id_proveedor" name="id_proveedor">
            </div>
            
            <div class="col-xs-8">Detalle del pedido:                    
            </div>
            <div class="col-xs-12">
              <textarea  class="form-control input-md" rows="6" cols="500" id="descripcion2" name="descripcion2" value="" placeholder="Ingrese detalle del pedido..."></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cerro()">Cancelar</button>     
          <button type="button" class="btn btn-primary" id="btnSave" data-dismiss="modal" onclick="guardarpedido()" >Guardar</button>
        </div>  <!-- /.modal footer -->
      </div>  <!-- /.modal-body -->
    </div> <!-- /.modal-content -->
  </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->


<!-- Modal mostrar pedido-->
<div class="modal fade" id="modallista" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 70%">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-truck" style="color: #3c8dbc" > </span> Lista de Orden de Pedido</h4>
       </div> <!-- /.modal-header  -->

      <div class="modal-body input-group ui-widget" id="modalBodyArticle">
        
        <div class="row" >
          <div class="col-sm-12 col-md-12">
            <fieldset> </fieldset>
            <br>
            <table class="table table-bordered table-hover" id="tabladetalle">
              <thead>
                <tr>
                  <th width="10%"></th>                  
                  <th>Nro de orden</th>
                  <th>Fecha</th>
                  <th>Fecha de Entrega</th>
                  <th>Proveedor</th>
                  <th>Descripcion</th>
                  <th>Estado</th>

                </tr>
              </thead>
              <tbody>              
              </tbody>
            </table>    
          </div>
        </div>  
      </div>  <!-- /.modal-body -->
    </div> <!-- /.modal-content -->
  </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->

<!-- Modal agregar-->
<div class="modal fade" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 40%">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-plus-square" style="color: #008000"  > </span> Orden de Trabajo</h4>
       </div> <!-- /.modal-header  -->

      <div class="modal-body input-group ui-widget" id="modalBodyArticle">

        <div class="row">
          <div class="col-xs-4">
           <label style="margin-top: 7px;">Nro <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <input type="text" class="form-control"  id="nro1" name="nro1" placeholder="Ingrese Numero de OT">
          </div>
        </div><br>
        <div class="row">
          <div class="col-xs-4">
            <label style="margin-top: 7px;">Cliente <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <select class="form-control " id="cli" name="cli" value="" style="width: 100%;">
               
            </select>
          </div>
        </div><br>

        <div class="row">
          <div class="col-xs-4">
              <label style="margin-top: 7px;">Fecha <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
              <input type="text" class="form-control" id="vfech" name="vfech" value="<?php echo date_format(date_create(date("Y-m-d H:i:s")), 'd-m-Y H:i:s') ; ?>"  disabled/>
          </div>
        </div><br>

        <div class="row">
          <div class="col-xs-4">
             <label style="margin-top: 7px;">Nota: </label>
          </div>
          <div class="col-xs-8">
            <textarea placeholder="Orden de trabajo" class="form-control" rows="10" id="vsdetal" name="vsdetal" value=""></textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-4">
              <label style="margin-top: 7px;">Sucursal <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <select class="form-control select2" id="suci" name="suci" style="width: 100%;">
              
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-4">
              <label style="margin-top: 7px;">Proveedor <strong style="color: #dd4b39">*</strong>: </label>
          </div>
          <div class="col-xs-8">
            <select class="form-control select2" id="prov" name="prov"  value="" style="width: 100%;">
              
            </select>
          </div>
        </div>
        <br>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cerro()">Cancelar</button>
          <button type="button" class="btn btn-primary" id="reset" data-dismiss="modal" onclick="guardaragregar()">Guardar</button> 
          
        </div>  <!-- /.modal footer -->
      </div>  <!-- /.modal-body -->
    </div> <!-- /.modal-content -->
  </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->

<!-- Modal FINALIZAR-->
<div class="modal fade" id="modalfinalizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 35%">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-fw fa fa-toggle-on" style="color: #3c8dbc" > </span> Finalización </h4>
       </div> <!-- /.modal-header  -->

      <div class="modal-body input-group ui-widget" id="modalBodyArticle">
        
        <div class="row" >
          <div class="col-sm-12 col-md-12">
            
           
            <div class="col-sm-12 ">Elija la opción de finalización de orden:
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" onclick="guardarparcial()"> PARCIAL</button>     
              <button type="button" class="btn btn-primary" id="btnSave" data-dismiss="modal" onclick="guardartotal()" >TOTAL</button>
            </div>  <!-- /.modal footer -->
           </div>
             
          </div>
        </div>  
      </div>  <!-- /.modal-body -->
    </div> <!-- /.modal-content -->
  </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->