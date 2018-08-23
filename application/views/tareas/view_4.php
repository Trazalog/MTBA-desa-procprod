<input type="hidden" id="permission" value="<?php echo $permission;?>">

<section class="content">
    <?php cargarCabecera(12);?>
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
                                    //dump_exit($idForm);
                                                        //echo "<input type='text' class='hidden' id='estadoTarea' value='$estadoTarea' >";
                                                    //if ($estadoTarea == "noasignado") {´

                                                        echo "<button class='btn btn-block btn-success' style='width: 100px; margin-top: 10px ;display: inline-block;' onclick='tomarTarea()'>Tomar tarea</button>";
                                                    //}else{
                                                        echo "&nbsp"; 
                                                        echo "&nbsp"; 
                                                        echo "&nbsp";
                                                        echo "<button class='btn btn-block btn-danger' style='width: 100px; margin-top: 10px;display: inline-block;' onclick='soltarTarea()'>Soltar tarea</button>";
                                                    //}    
                                                        echo "</br>"; 
                                                        echo "</br>"; 

                                                        $userdata = $this->session->userdata('user_data');
                                                        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado 
                                                    ?>

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
                                                                    disabled><?php $TareaBPM['displayDescription']?></textarea>
                                                                </div>
                                                            </div></br> </br> </br> </br> </br>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-12 col-md-12">
                                                                <!-- Modal formulario tarea -->
                                                                <?php if($idForm !=''){echo '<button type="button" id="formulario" class="btn btn-primary" data-toggle="modal"
                                                                data-target=".bs-example-modal-lg" onclick="getformulario()">Completar
                                                                Formulario
                                                                </button>';}?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-sm-12 col-md-12">
                                                                <br>
                                                                <label for="observaciones">Observaciones:</label>
                                                                <textarea class="form-control" id="observaciones" rows="3"></textarea>
                                                            </div>
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
                                       <button class="btn btn-primary" onclick="guardarComentario()">Agregar</button>
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
        <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-xs-7 col-sm-6">
                            <h3> ¿El Cliente Acepta realizar el trabajo? </h3>
                            <div class="form-group">
                                <label style="margin-top: 7px;"> Archivo Adjunto de Cotización: <a target="_blank" href="<?php //echo $cotizacion; ?>">Ver y Descargar</a></label>
                                <input type='file' />
                            </div>
                        </div>
                        <div class="col-xs-7 col-sm-1">
                            <button class="btn btn-success" style="margin-top:20px;width:80%;" onclick="mostrarPanelSi()">Si</button>
                        </div>
                        <div class="col-xs-7 col-sm-1">
                            <button class="btn btn-danger" style="margin-top:20px;width:80%;" onclick="mostrarPanelNo()">No</button>
                        </div>
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div id="collapseDivNo" class="box box-danger collapsed-box box-solid">
                        <div class="box-header with-border">
                            <h3 id="tituloInfo" class="box-title">No Acepto</h3>
                            <div class="box-tools pull-right">
                                <button style="display:none" id="panelNo" type="button" data-widget="collapse">
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label style="margin-top: 7px;">¿Como desea el Cliente recibir el Componente?</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="a_d" value="Armado" /> Armado
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="a_d" value="Desarmado" /> Desarmado
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="guardarNo" class="hidden" onclick="guardarNo()"></button>
                        </div>
                    </div>



                    <div id="collapseDivSi" class="box box-success collapsed-box box-solid">
                        <div class="box-header with-border">
                            <h3 id="tituloInfo" class="box-title">Condiciones Comerciales</h3>

                            <div class="box-tools pull-right">
                                <button style="display:none" id="panelSi" type="button" data-widget="collapse">
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form id="formSi" role="form" action="<?php base_url();?>AceptacionTrabajo/GuardarAceptacionTrabajoBPM"
                                method="POST">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-2">
                                            <label style="margin-top: 7px;">Entrega del Servicio
                                                <strong style="color: #dd4b39">*</strong>: </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="C/Banco" />
                                                    C/Banco
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="Armado" />
                                                    Armado
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="Semi-Armado" />
                                                    Semi-Armado
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="entrega_servicio" value="Desarmado" />
                                                    Desarmado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-3">
                                        <div class="form-group">
                                            <label>Fecha de Entrega: </label>
                                            <input type="text" name="fecha_entrega" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7">
                                        <div class="form-group">
                                            <label>Dirección de Entrega: </label>
                                            <input type="text" name="direccion_entrega" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Tipo de Clientes
                                                    <strong style="color: #dd4b39">*</strong>: </label>
                                                <select name="tipo_cliente" class="form-control">
                                                    <option value="0"> Seleccionar... </option>
                                                    <option> Minera </option>
                                                    <option> Industrial </option>
                                                    <option> Emp.Transporte </option>
                                                    <option> Agencia </option>
                                                    <option> Particular </option>
                                                    <option> Otros </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Provisión de Repuestos
                                                    <strong style="color: #dd4b39">*</strong>: </label>
                                                <select name="proveedor_repuesto" class="form-control">
                                                    <option value="0"> Seleccionar... </option>
                                                    <option> Cliente </option>
                                                    <option> Motores Balderramo </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Orden de Compra: </label>
                                                <input type='file' id="orden" name="orden" />
                                                <a id="adjunto" target="_blank">Ver Archivo Adjunto</a>                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button id="guardarSi" class="hidden" type="submit" value="Registrar"></button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

       <div class="modal-footer">
          <button type="button" id="" class="btn btn-primary" onclick="">Cerrar</button>
          <button type="button" class="btn btn-success" onclick="hecho()">Hecho</button>
        </div>
<!-- /.modal footer -->

    </div><!-- /.box body -->
</div> <!-- /.box  -->
</div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->



<script>
    
    
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



</script>

<script>
    function hecho(){
        if ($('#collapseDivNo').hasClass('collapsed-box')) {
            console.log("Acepto");
            $('#guardarSi').click();
        }else{
            console.log("No Acepta");
            $('#guardarNo').click();
            
        }
    }
    $('#orden').on('change', function() {
        $('#adjunto').attr("href",URL.createObjectURL(this.files[0]));              
    });
    
    $("#formSi").submit(function(event) {

        
        event.preventDefault();

        var idt = $('#idTarBonita').val();
       alert(idt);
       
        var formData = new FormData($("#formSi")[0]);
        formData.append('idtareabonita',idt);
        

        $.ajax({
            url: $("#formSi").attr("action"),
            type: $("#formSi").attr("method"),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
               // console.log(result);
                alert("Formulario Guardados Correactamente");
            },
            error:function(result){
               // console.log(result);
                alert("Error");
            }
        });
    });

    function guardarNo() {
        var opcion = $('input[name="a_d"]:checked').val();
        console.log(opcion);
        $.ajax({
            type:'post',
            data:{'estado':opcion},
            url:'index.php/AceptacionTrabajo/NoAceptaTrabajoBPM',
            success:function(result){
                alert("Transaccion Exitosa");
            },
            error:function(result){
                alert("Transaccion Fallida");
            }
        });
    }

    function mostrarPanelSi() {
        $('#panelSi').click();
        if (!$('#collapseDivNo').hasClass('collapsed-box')) {
            $('#panelNo').click();
        }
    }

    function mostrarPanelNo() {
        $('#panelNo').click();
        if (!$('#collapseDivSi').hasClass('collapsed-box')) {
            $('#panelSi').click();
        }
    }
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
                                        cargarFormulario($form);
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