<input type="hidden" id="permission" value="<?php echo $permission;?>">

<section class="content">
    <?php cargarCabecera(12); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div role="tabpanel" class="tab-pane">
                                <div class="form-group">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                            role="tab" data-toggle="tab">Tareas</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                data-toggle="tab">Comentarios</a></li>
                                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                    data-toggle="tab">Vista
                                                    Global
                                                </a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">

                                                <div role="tabpanel" class="tab-pane active" id="home">
                                                    <!-- <h4 class="panel-heading">Tarea</h4> -->
                                                    <div class="panel-body">

                                                        <?php
                                    //echo"id de form: ";
                                    //dump_exit($TareaBPM["assigned_id"]);
                                    //$TareaBPM["assigned_id"] = 'asignado';
                                                        //echo "<input type='text' class='hidden' id='estadoTarea' value='$estadoTarea' >";
                                                    //if ($estadoTarea == "noasignado") {´

                                                        echo "<button class='btn btn-block btn-success' id='btontomar' style='width: 100px; margin-top: 10px ;display: inline-block;' onclick='tomarTarea()'>Tomar tarea</button>";
                                                    //}else{
                                                        echo "&nbsp"; 
                                                        echo "&nbsp"; 
                                                        echo "&nbsp";
                                                        echo "<button class='btn btn-block btn-danger grupNoasignado' id='btonsoltr' style='width: 100px; margin-top: 10px; display: inline-block;' onclick='soltarTarea()'>Soltar tarea</button>";
                                                    //}    
                                                        echo "</br>"; 
                                                        echo "</br>"; 

                                                        $userdata = $this->session->userdata('user_data');
                                                        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado 
                                                    ?>
                                                    <input type="text" class="form-control hidden" id="asignado" value="<?php echo $TareaBPM["assigned_id"] ?>" >
                                                    <form>
                                                        <div class="panel panel-default">
                                                            <h4 class="panel-heading">INFORMACION:</h4>


                                                            <div class="form-group">
                                                                <div class="col-sm-6 col-md-6">
                                                                    <label for="tarea">Tarea</label>
                                                                    <input type="text" class="form-control" id="tarea"
                                                                    value="<?php echo $TareaBPM['displayName'] ?>" disabled><!-- id de listarea -->
                                                                    <input type="text" class="hidden" id="tbl_listarea"
                                                                    value="<?php echo $datos[0]['id_listarea'] ?>">
                                                                    <input type="text" class="hidden" id="idform" value="<?php echo $idForm ?>">
                                                                    <!-- id de task en bonita -->
                                                                    <input type="text" class="hidden" id="idTarBonita"
                                                                    value="<?php echo $idTarBonita ?>">
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col-sm-6 col-md-6">
                                                                    <label for="fecha">Fecha de Creación</label>
                                                                    <input type="text" class="form-control" id="fecha"
                                                                    placeholder="" value="<?php echo $TareaBPM['last_update_date'] ?>"
                                                                    disabled>
                                                                </div>
                                                            </div><br>


                                                            <div class="form-group ">
                                                                <div class="col-sm-6 col-md-6 ">
                                                                    <label for="ot ">Orden de Trabajo:</label>
                                                                    <input type="text " class="form-control " id="ot
                                                                    "
                                                                    placeholder=" " value="<?php echo $datos[0][ 'id_orden'] ?>"
                                                                    disabled>
                                                                </div>
                                                            </div><br>

                                                            <div class="form-group">
                                                                <div class="col-sm-6 col-md-6">
                                                                    <label for="duracion_std">Duracion Estandar (minutos):</label>
                                                                    <input type="text" class="form-control" id="duracion_std"
                                                                    placeholder="" value="<?php echo $datos[0]['duracion_std']  ?>"
                                                                    disabled>
                                                                </div></br>
                                                            </div>

                                                            <br>

                                                            <div class="form-group">
                                                                <div class="col-sm-12 col-md-12">
                                                                    <label for="detalle">Detalle</label>
                                                                    <textarea class="form-control" id="detalle" rows="3"
                                                                    disabled><?php echo $TareaBPM['displayDescription']?></textarea>
                                                                </div>
                                                            </div></br> </br> </br> </br> </br>
                                                        </div>

                                                       

                                                        <div class="form-group">
                                                            <div class="col-sm-12 col-md-12">
                                                                <br>
                                                                <label for="observaciones">Observaciones:</label>
                                                                <textarea class="form-control" id="observaciones" rows="3"></textarea>
                                                            </div>
                                                        </div>




 <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                    </br> 
                        <center>
                        <H3>Cotizacion</H3>
                        </center>
                       
                        <div class="box-body">
                                            
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12">
                                    <!-- Modal formulario tarea -->
                                    <?php if($idForm != 0){echo '<button type="button" id="formulario" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bs-example-modal-lg" onclick="getformulario()">Adjuntar Cotizacion
                                    </button>';}?>
                                </div>
                                </br> </br>  
                                <div class="col-sm-12 col-md-12">
                                <button type="button" id="crearPDF" class="btn btn-primary" name="crearPDF">Ver Formulario RE-TAl-010</button>
                                </div>
                            </div>

                            
  
                        </div>
                    </div>
                </div>
            </div>
</section>

<div id="collapseDivCli" class="box box-default collapsed-box box-solid">
                                <div class="box-header with-border">
                                    <h3 id="tituloInfo" class="box-title">Nota de Pedido</h3>
        
                                    <div class="box-tools pull-right">
                                        <button id="infoCliente" type="button" class="btn btn-box-tool" data-widget="collapse" >
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
             <div class="box-body">
                                    

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box-header">
          <!-- <h3 class="box-title">Nota de Pedido</h3> -->
    
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="deposito" class="table table-bordered table-hover" style="text-align: center">
            <thead>
              <tr>
                <th width="20%" style="text-align: center">Acciones</th>
                <th style="text-align: center">Codigo Interno</th>
                <th style="text-align: center">Orden de Trabajo</th>
                <th style="text-align: center">Detalle</th>
                <th style="text-align: center">Fecha Nota</th>              
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($list as $z)
                {
                  $id=$z['id_notaPedido'];
                
                    echo '<tr id="'.$id.'" class="'.$id.'" >';
                    echo '<td>';
                  // if (strpos($permission,'Edit') !== false) {
                  //     echo '<i class="fa fa-fw fa-pencil" style="color: #f39c12; cursor: pointer; margin-left: 15px;" title="Editar" data-toggle="modal" data-target="#modaleditar"></i>';
                  // }
                  // if (strpos($permission,'Del') !== false) {
                  //     echo '<i class="fa fa-fw fa-times-circle" style="color: #dd4b39; cursor: pointer; margin-left: 15px;"></i>';
                  // } 
                  if (strpos($permission,'View') !== false) {
                    echo '<i class="fa fa-fw fa-search" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" title="Ver Nota Pedido" data-toggle="modal" data-target="#modaltarea"></i>';
                  }                     
                  echo '</td>';
                  echo '<td style="text-align: center">'.$z['cod_interno'].'</td>';
                  echo '<td style="text-align: center">'.$z['id_ordTrabajo'].'</td>';
                  echo '<td style="text-align: center">'.$z['descripcion'].'</td>';
                  echo '<td style="text-align: center">'.$z['fecha'].'</td>';
                  // echo '<td style="text-align: center">'.$z['marcadescrip'].'</td>';
                  // echo '<td style="text-align: center">'.$z['depositodescrip'].'</td>';

                  // echo '<td style="text-align: center">'.($z['equip_estad']  == 'AC' ? '<small class="label pull-left bg-green" >Activa</small>' :'<small class="label pull-left bg-blue">Transito</small>').'</td>';

                  echo '</tr>';
                  
                }
              ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
        
</div>
                                <!-- /.box-body -->
</div>


                                                                    
                                                    </form>

                                                </div>
                                            </div>    

                                            <div role="tabpanel" class="tab-pane" id="profile">
                                              <div class="panel-body">
                                               <div class="panel panel-primary">
                                                <div class="panel-heading">Comentarios</div>
                                                <div  class="panel-body" style="max-height: 500px;overflow-y: scroll;">
                                                 <ul id="listaComentarios">
                                                     <?php 
                                                     foreach($comentarios as $f){
                                                       echo '<hr/>';

                                                       if(strpos($f['userId']['icon'],'.png')==0){
                                                           $img = '<img src="http://35.239.41.196:8080/bonita'.substr($f['userId']['icon'],2).'" class="user-image" alt="User Image" height="42" width="42">      ';
                                                       }else{
                                                           $img='';
                                                       }
                                                       echo '<li><h4>'.$img.$f['userId']['userName'].'<small style="float: right">'.$f['postDate'].'</small></h4>';
                                                       echo '<p>'.$f['content'].'</p></li>';
                                                   }
                                                   ?>
                                               </ul>
                                           </div>
                                       </div>
                                       <textarea id="comentario" class="form-control" placeholder="Nuevo Comentario..."></textarea>
                                       <br/>						
                                       <button class="btn btn-primary" id="guardarComentario" onclick="guardarComentario()">Agregar</button>
                                   </div>
                               </div>

                               <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="panel-body"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->


       
        <div class="modal-footer">
            <button type="button" id="cerrar" class="btn btn-primary" onclick="cargarVista()">Cerrar</button>
            <button type="button" class="btn btn-success" id="hecho" onclick="terminarTarea()">Hecho</button>
        </div> <!-- /.modal footer -->

    </div><!-- /.box body -->
</div> <!-- /.box  -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->



<script>
//genero el preinforme 
//(paragenerarlo automáticamente comentar lineas 15, 46 y 65)
$('#crearPDF').on("click", function (e) {
  WaitingOpen('Generando preinforme');
  var formularios = '<?php echo json_encode($formularios) ?>';
  console.log( formularios );
  $.ajax({
    type: 'POST',
    data: { idForms: formularios },
    url: 'index.php/Preinforme/generar',
    async: false,
    success: function(data) {
      $("#pdf").attr("data", '<?php echo base_url() ?>'+'assets/preinforme.pdf');
      $('#modalPDF').modal('show');
      WaitingClose();
    },
    error: function(data) {
      console.error("error al crear el preinforme en pdf");
      WaitingClose();
    }
  });
});

//elimino el archivo al salir del modal
$('#modalPDF').on('hidden.bs.modal', function (e) { 
  $.ajax({
    type: 'POST',
    data: {},
    url: 'index.php/Preinforme/eliminarPDF',
    success: function(data) {
      console.log("archivo borrado. "+data);
    },
    error: function(data) {
      console.error("error al eliminar el pdf: "+data);
    }
  });
});
</script>
                

<script>
var ed="";

  //Ver Orden
  $(".fa-search").click(function (e) { 
      
      var id_nota = $(this).parent('td').parent('tr').attr('id');
     
      $.ajax({
              type: 'POST',
              data: { id: id_nota},
              url: 'index.php/Notapedido/getNotaPedidoId',
              success: function(data){

                      $('tr.celdas').remove();
                      for (var i = 0; i < data.length; i++) {            
                         var tr = "<tr class='celdas'>"+
                                 "<td>"+data[i]['artDescription']+"</td>"+
                                 "<td>"+data[i]['cantidad']+"</td>"+
                                 "<td>"+data[i]['fecha']+"</td>"+ 
                                 "<td>"+data[i]['fechaEntrega']+"</td>"+ 
                                 "<td>"+data[i]['fechaEntregado']+"</td>"+     
                                 "<td>"+data[i]['provnombre']+"</td>"+                                 
                                 "<td>"+data[i]['estado']+"</td>"+                             
                                 "</tr>";
                         $('#tabladetalle tbody').append(tr);
                      }
                    },                
              error: function(result){
                    
                    console.log(result);
                  },
                  dataType: 'json'
      });
  });



function regresa(){

  //WaitingOpen();
  //$('#modaldeposito').empty();
  //$('#modaleditar').empty(); 
  //$('#content').empty();
  $("#content").load("<?php echo base_url(); ?>index.php/Herramienta/index/<?php echo $permission; ?>");
   WaitingClose();
}

  

 

    function NotaPedido() {
		$('.content').empty();
		$(".content").load(
			"<?php echo base_url(); ?>index.php/Notapedido/index/<?php echo $permission; ?>/true"
		);
	}
          
    evaluarEstado();    
    function evaluarEstado(){
       
        var asig = $('#asignado').val();       
        // si esta tomada la tarea
        if(asig != ""){
            habilitar();
        }else{
            deshabilitar();
        }
    }      
   
    function habilitar(){       
        // habilito btn y textarea       
        $("#btonsoltr").show();
        $("#hecho").show();       
        $("#guardarComentario").show();        
        $("#comentario").show();
        //desahilito btn tomar      
        $("#btontomar").hide();
        $("#formulario").show();
    }
    function deshabilitar(){
        // habilito btn tomar
        $("#btontomar").show();
        // habilito btn y textarea  
        $("#btonsoltr").hide();       
        $("#hecho").hide();       
        $("#guardarComentario").hide();
        $("#comentario").hide();
        $("#formulario").hide();
    }    

    // Volver al atras
    $('#cerrar').click(function cargarVista() {
        WaitingOpen();
        $('#content').empty();
        $("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
        WaitingClose();
    });

    /* Funciones BPM */
    //Ckeck Tarea realizada
    $('.btncolor').click(function(e) {
        //var id = <?php //echo $idorden?>; //tomo valor de id_orden
        console.log(id);
        var id_tarea = $(this).parents('tr').find('td').eq(1).html();
        console.log("Estoy finalizando una tarea");
        $.ajax({
            type: 'POST',
            data: {
                id_tarea: id_tarea,
            }, //Id tarea
            url: 'index.php/Taller/TareaRealizada', //index.php/
            success: function(data) {
                console.log(data);
                //alert("Se Finalizando la SUBTAREA");
                refresca(id);
            },
            error: function(result) {
                console.log(result);
                alert("NO se Finalizo la SUBTAREA");
                refresca(id);
            }
        });
    });
    
        // validacion de campo observacion para btn rechazar
            // $('#rechazar').click(function(e){
            //   if ($('#observaciones').val() == ""){
            //     alert('Campo Detalle vacio');
            //   }
            // });               



    function terminarTarea(){
        var idTarBonita = $('#idTarBonita').val();
        alert(idTarBonita);
        $.ajax({
            type: 'POST',
            data: {
                'idTarBonita': idTarBonita,
            },
            url: 'index.php/Tarea/terminarTarea',
            success: function(data) {
                    
                    // toma a tarea exitosamente
                    if(data['reponse_code'] == 204){
                        $("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
                    }
            },
            error: function(data) {
                //alert("Noo");
                console.log(data);
            },
            dataType: 'json'
        }); 
    }            
    
    // Boton Hecho generico
    function estado() {
        var idTarBonita = $('#idTarBonita').val();
        $.ajax({
            type: 'POST',
            data: {
                'idTarBonita': idTarBonita,
            },
            url: 'index.php/Tarea/estadoCuenta',
            success: function(result) {
                console.log(result);
                alert("SII");
            },
            error: function(result) {
                alert("Noo");
                console.log(result);
            },
            dataType: 'json'
        });
    }
    //Funcion COMENTARIOS
    function guardarComentario() {
			console.log("Guardar Comentarios...");
			var id='14';
			var comentario=$('#comentario').val();
			$.ajax({
			type:'POST',
			data:{'processInstanceId':id, 'content':comentario},
			url:'index.php/Tarea/GuardarComentario',
			success:function(result){
				console.log("Submit");
				var lista =  $('#listaComentarios');
				lista.append('<hr/><li><h4>'+'Nombre de Usuario'+'<small style="float: right">Hace un momento</small></h4><p>'+comentario+'</p></li>');
				$('#comentario').val('');
			},
			error:function(result){
				console.log("Error");
			}
			});
		}
    // Toma tarea en BPM
    function tomarTarea() {
        var idTarBonita = $('#idTarBonita').val();
        //alert(idTarBonita);
        $.ajax({
            type: 'POST',
            data: {
                idTarBonita: idTarBonita
            },
            url: 'index.php/Tarea/tomarTarea',
            success: function(data) {
                   console.log(data['reponse_code']);
                    // toma a tarea exitosamente
                    if(data['reponse_code'] == 200){
                        habilitar();
                    }

            },
            error: function(result) {
                console.log(result);
            },
            dataType: 'json'
        });
    }
    // Soltar tarea en BPM
    function soltarTarea() {
        var idTarBonita = $('#idTarBonita').val();
        //alert(idTarBonita);
        $.ajax({
            type: 'POST',
            data: {
                idTarBonita: idTarBonita
            },
            url: 'index.php/Tarea/soltarTarea',
            success: function(data) {
                console.log(data['reponse_code']);
                    // toma a tarea exitosamente
                    if(data['reponse_code'] == 200){
                        deshabilitar();
                    }
            },
            error: function(result) {
                console.log(result);
            },
            dataType: 'json'
        });
    }
    
    /** Formulario **/ 
    
    var click = 0; 
    $('#formulario').click(function(){
        click = 1;
    });

    // evento de cierre de modal guarda parcialmente los datos
    $('#modalForm').on('hidden.bs.modal', function (e) {   
        
        $('#error').fadeOut('slow');
        // toma  el valor de todos los input file 
        var imgs = $('input.archivo');
        
        var formData = new FormData($("#genericForm")[0]);

        /** subidad y resubida de imagenes **/
        // Tomo los inputs auxiliares cargados
        var aux = $('input.auxiliar');
        
        var auxArray = [];
        aux.each(function() {
            auxArray.push($(this).val());
        });
        //console.table(aux);
        for (var i = 0; i < imgs.length; i++){
        
            var inpValor = $(imgs[i]).val();
            var idValor = $(imgs[i]).attr('name');
            //console.log("idValor: "+idValor);
            // si tiene algun valor (antes de subir img)
            if (inpValor != "") {
                //al subir primera img
                formData.append(idValor, inpValor);
            }else{
                // sino sube img guarda la del auxiliar         
                inpValor = auxArray[i]; //valor del input auxiliar
                //console.table(inpValor);
                formData.append(idValor, inpValor);
            }      
        }   

        /* text tipo check */
        var check = $('input.check');
        //console.log("aux");
        //console.table(aux);
        var checkArray = [];
        // check.each(function() {
        //     checkArray.push($(this).val());
        // });
        //console.log('array de chech: ');
        //console.table(checkArray);
        
        for (var i = 0; i < check.length; i++){
            //var chekValor = $(check[i]).val();
            var idCheckValor = $(check[i]).attr('name');
            console.log('valor: ');
            console.log(idCheckValor);
            if ($(check[i]).is(':checked')){
                chekValor = 'tilde';
            }else{
                chekValor = 'notilde';
            }
            formData.append(idCheckValor,chekValor);
        }
        // console.log('array de chech: ');
        // console.table(check);
    
        /* Ajax de Grabado en BD */
        $.ajax({
        url:'index.php/Tarea/guardarForm',
        type:'POST',
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        
        success:function(respuesta){
            

            if (respuesta ==="exito") {
                
            }
            else if(respuesta==="error"){
                alert("Los datos no se han podido guardar");
            }
            else{
                //$("#msg-error").show();
                //$(".list-errors").html(respuesta);
                //alert("Los datos no se han guardado");
            }
        }
        });

    });

    // trae valores validos para llenar form asoc.  
	function getformulario(event) {    
	    
	    // trae valor de imagenes y llena inputs.
	    getImgValor();

	    // llena form una sola vez al primer click
	    if (click == 0) {    
	      var estadoTarea = $('#estadoTarea').val();
	      // toma id de form asociado a listarea en TJS
	      var idForm = $('#idform').val();
	      console.log('id de form: ');
	      console.log(idForm);

	      // guarda el id form asoc a tarea std en modal para guardar
	      $('#idformulario').val(idForm);

	      idForm = 1;
	      // trae valores validos para llenar componentes de form asoc.
	      $.ajax({
	              type: 'POST',
	              data: { idForm: idForm},
	              url: 'index.php/Tarea/getValValido', 
	              success: function(data){               
	                      //console.log('valores de componentes: ');
	                      //console.table(data);                   
	                     
	                      llenaComp(data);
	                    },              
	              error: function(result){
	                    
	                    console.log(result);
	                  },
	              dataType: 'json'
	      });
	    }
	}

    // llena los componentes de form asoc con valores validos
	function llenaComp(data){
	   
	    var id_listarea = $('#tbl_listarea').val();
	    $('#id_listarea').val(id_listarea);


	    $.each(data,function( index ) {
	      //$( "#" + i ).append(  );
	      var idSelect = data[index]['idValor'];        
	      //console.log('idvalor: '+ data[index]['idValor'] + '-- valor: ' + data[index]['VALOR']);
	      var i = 0;
	      var valor = "";
	      var valorSig = "";      

	      $('#'+idSelect).append($('<option />', 
	        { value: data[index]['VALOR'], text: data[index]['VALOR'] }));

	      valor = data[index]['idValor'];     
	      valorSig = data[index]['idValor'];
	    });
	}

	//Trae valor de las imagenes
	function getImgValor(){
	    var valores; 
	    // guarda el id form asoc a tarea std en modal para guardar
	    idForm =  $('#idform').val();
	    // trae valores validos para llenar componentes input files.
	    $.ajax({
	            type: 'POST',
	            data: { idForm: idForm},
	            url: 'index.php/Tarea/getImgValor', 
	            success: function(data){               
	                                       
	                    valores = data;
	                    llenarInputFile(valores);
	                  },              
	            error: function(result){
	                  
	                  console.log(result);
	                },
	            dataType: 'json'
	    });
	}

	// carga inputs auxiliares con url de imagen desde BD
	function llenarInputFile(data){
	    var id_listarea = $('inptut.archivo').val();

	    $.each(data,function( index ) {

	      var id = data[index]['valoid'];
	      var valor = data[index]['valor'];
	      //carga el valor que viene de DB
	      $("."+data[index]['valoid']).val(valor);
          //$("#"+data[index]['valoid']).val(valor);
	    });
	}

	// Validacion de campos obligatorios y vacios
	function validarFormGuardado() {   
   
	    var id_listarea = $('#id_listarea').val();

	    var oblig = $('.requerido');
	    //console.log("oblig");
	    //console.table(oblig);
	    var obligArrayIds = [];
	    oblig.each(function() {
	      obligArrayIds.push($(this).attr('name'));
	    });
	    //console.log('obligatorios: ');
	    //console.log(obligArray),
	    $.ajax({
	              type: 'POST',
	              data: { obligArrayIds: obligArrayIds,
	                      id_listarea:id_listarea},
	              url: 'index.php/Tarea/validarFormGuardado', 
	              success: function(data){               
	                      console.log('por sucess: ');
	                      console.log(data);                   
	                      if (data == false) {
	                        $('#error').fadeIn('slow');
	                      }
	                      else{
	                        $('#error').fadeOut('slow');
	                      }
	                      
	                    },              
	              error: function(result){
                    console.log('por error: ');
	                      console.log(data);
	                    console.log(result);
	                  },
	              dataType: 'json'
	      });
  	}

  	$('.fecha').datepicker({
        autoclose: true
  	});

data();
 function data(){
    console.log("DataTable");

  $('#deposito').DataTable({
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
  })
};


</script>



<div class="modal fade bs-example-modal-lg" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <?php
                                    if($form != ''){
                                        cargarFormulario($form);
                                    }                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal ver nota pedido-->
<div class="modal fade" id="modaltarea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 60%">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-plus-square" style="color: #008000" > </span> Ver Nota de Pedido</h4>
      </div> <!-- /.modal-header  -->

      <div class="modal-body input-group ui-widget" id="modalBodyArticle">
        
        <div class="row" >
          <div class="col-sm-12 col-md-12">
             <table id="tabladetalle" class="table table-bordered table-hover">
               <thead>
                  <tr>
                    <th width="20%" style="text-align: center">Articulo</th>
                    <th style="text-align: center">Cantidad</th>                    
                    <th style="text-align: center">Fecha Nota</th>
                    <th style="text-align: center">Fecha de Entrega</th>
                    <th style="text-align: center">Fecha Entregado</th>
                    <th style="text-align: center">Proveedor</th>
                    <th style="text-align: center">Estado</th>                  
                  </tr>
                </thead>
               <tbody>
                 
               </tbody>
             </table>             
          </div>
        </div>
      </div>
      <div class="modal-footer">       
        <button type="button" class="btn btn-primary" id="btnSave" data-dismiss="modal">Ok</button>
      </div>  <!-- /.modal footer -->

       </div>  <!-- /.modal-body -->
    </div> <!-- /.modal-content -->
  </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->

<!-- <div class="modal fade bs-example-modal-lg" id="modalForm2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <?php
// Formulario solo Lectura             if($form != ''){
                                       // cargarFormulario($form2);
                             //       }                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="modalPDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> Registro de Trabajos a Realizar RE-TAL-010</h4> 
      </div>
      <div class="modal-body" id="modalBodyPdf">
        <object id="pdf" data="" width="100%" height="500px" type="application/pdf"> Plugin de PDF no instalado </object>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>