<input type="hidden" id="permission" value="<?php echo $permission;?>">
<?php //dump($TareaBPM); ?>
<section class="content">
  <?php echo cargarCabecera($idPedTrabajo); ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-body">
        <div class="row">
                        <div class="col-xs-12">
                          <table id="tbl_diagnosticos" class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Acciones</th>
                                <th>Id Tarea Trazalog</th>
                                <th>Id listarea</th>
                                <th>Tarea</th>
                                <th>Subsector</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                                <th>Rehacer</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php //dump_exit($list);
                              foreach($list as $f)
                              {
                                $f = object_to_array($f);
                                  //dump($f);
                                $id       = $f["id_tarea"];
                                echo '<tr class="'.$id.'" >';
                                echo '<td>';
                                echo '<a href="#" title="Mostrar formulario de tarea" class="getFormularioTarea" data-formid="'.$f['form_asoc'].'" data-validado="false" data-bpmIdTarea="'.$f['bpm_task_id'].'" data-idListTarea="'.$f['id_listarea'].'" data-idOt="'.$f['id_orden'].'"><i class="fa fa-eye" style="cursor: pointer; margin-left: 15px;" ></i></a>';
                                      //echo '<a href="#" class="addRepuestos" title="Cargar Pedido de Repuestos" data-ordenDesc="'.$f['orden_descripcion'].'" data-ordenId="'.$f['id_orden'].'"><i class="fa fa-plus" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                      //echo '<a href="#" class="rehacerTarea" title="Rehacer Tarea" data-treaId="'.$f['id_listarea'].'"><i class="fa fa-mail-reply" style="cursor: pointer; margin-left: 15px;"></i></a>';
                                echo '</td>';
                                echo '<td class="celda">'.$f['id_tarea'].'</td>';
                                echo '<td class="celda">'.$f['id_listarea'].'</td>';
                                echo '<td class="celda tareaDesc" title="ID Tarea: '.$f['id_tarea'].'">'.substr($f['tareadescrip'],0,500).'</td>';
                                echo '<td class="celda">'.$f['subsector_descripcion'].'</td>';
                                echo '<td class="celda">'.$f['id_usuario'].'</td>';
                                echo '<td class="celda">'.$f['estado'].'</td>';
                                echo '<td class="celda"><input type="checkbox" name="rehacerTarea[]" value="'.$f['id_listarea'].'"></td>';
                                echo '</tr>';
                              }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>

          <div class="modal-footer">
            <button type="button" id="cerrar" class="btn btn-primary" onclick="cargarVista()">Cerrar</button>
           
          </div> <!-- /.modal footer -->

        </div><!-- /.box-body -->

      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->

<!-- Validacion de Formularios -->
<script> 
IniciarValidador("genericForm");
function IniciarValidador(idForm){
  $('#'+idForm).bootstrapValidator({ //VALIDADOR
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {		
			fecha:{
				selector: '.fecha',
				validators:{
					date: {
                    format: 'DD-MM-YYYY',
                    message: '(*) Formato de Fecha Inválido'
                }
				}
			},
			number: {
				selector: '.numerico',
                validators: {
                    integer: {
                        message: '(*) Solo Valores Numéricos'
                    }
                }
            }

        }
    }).on('success.form.bv', function(e) {
            // Prevent form submission
          
            e.preventDefault();
		      	guardarFormulario(true);
           
    });
}

$('#modalForm').on('hidden.bs.modal', function (e) {
guardarFormulario(false);
});

$('#modalRevDiagCoord').on('hidden.bs.modal', function (e) {
  guardarFormulario(false);
});
  

	function ValidarCampos(){
		$('#'+form_actual_id).data('bootstrapValidator').validate();
		if(!$('#'+form_actual_id).data('bootstrapValidator').isValid()){
			alert('Error de Validación.\nCompruebe que los Datos esten cargados Correctamente.');
		}	
	}
	function OcultarModal(){
		$('#'+form_actual_id).data('bootstrapValidator').resetForm();
		// $('#modalRevDiagCoord').modal('hide');
    // $('#modalForm').modal('hide');
		guardarFormulario(false);
    form_actual_id='';
	}
	function guardarFormulario(validarOn){
		console.log("Guardando Formulario..."+form_actual_id);
		var imgs = $('input.archivo');

		var formData = new FormData($("#"+form_actual_id)[0]);
    var i=0;
    // for (var value of formData.values()) {
    //   console.log(i+':'+value); 
    //   i++;
    // }
  
		/** subidad y resubida de imagenes **/
		// Tomo los inputs auxiliares cargados
		var aux = $('input.auxiliar');

		var auxArray = [];
		aux.each(function () {
			auxArray.push($(this).val());
		});
		//console.table(aux);
		for (var i = 0; i < imgs.length; i++) {

			var inpValor = $(imgs[i]).val();
			var idValor = $(imgs[i]).attr('name');
			//console.log("idValor: "+idValor);
			// si tiene algun valor (antes de subir img)
			if (inpValor != "") {
				//al subir primera img
				formData.append(idValor, inpValor);
			} else {
				// sino sube img guarda la del auxiliar         
				//inpValor = auxArray[i]; //valor del input auxiliar
				//console.table(inpValor);
				//formData.append(idValor, inpValor);
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

		for (var i = 0; i < check.length; i++) {
			//var chekValor = $(check[i]).val();
			var idCheckValor = $(check[i]).attr('name');
			//console.log('valor: ');
			//console.log(idCheckValor);
			if ($(check[i]).is(':checked')) {
				chekValor = 'tilde';
			} else {
				chekValor = 'notilde';
			}
			formData.append(idCheckValor, chekValor);
		}
		// console.log('array de chech: ');
		// console.table(check);

		/* Ajax de Grabado en BD */
		$.ajax({
			url: 'index.php/Tarea/guardarForm',
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,

			success: function (respuesta) {
        console.log(form_actual_id+"...OK");
        
				ValidarObligatorios(validarOn);
				if (respuesta === "exito") {

				}
				else if (respuesta === "error") {
					alert("Los datos no se han podido guardar");
				}
				else {
					//$("#msg-error").show();
					//$(".list-errors").html(respuesta);
					//alert("Los datos no se han guardado");
				}
			}//VF,
      // error: function(result){
      //   console.log(result);
      //   alert('Error al Guardar Formularios');
        
      // }
		});
	}
  function ValidarObligatorios(validarOn){
		console.log("Validando Campos Obligatorios..."+form_actual_id);

		var petr_id = $('#idPedTrabajo').val();
    var form_id = form_actual_data.attr('data-formid');
    $.ajax({
			type: 'POST',
			data: {'form_id':form_id,'petr_id':petr_id},
			url: 'index.php/Tarea/ValidarObligatorios',
			success: function (result) {
        console.log(form_actual_id+"...OK");
				var validado=(result==1);
        form_actual_data.attr('data-validado',validado);
				if(!validarOn) return;
				if(validado) alert("Formularios Correctamente Validado");
				else {
					alert("Fallo Validación: Campos Obligatorios Incompletos. Por favor verifique que todos los campos obligatorios marcados con (*) esten completos.");
				}
        //WaitingClose();
			},
			error: function(result){
				alert("Fallo la Validación del formularios en el Servidor. Por favor vuelva a intentar.");
			}
		});
	}
</script>
<script>

  // Volver al atras
  $('#cerrar').click(function cargarVista() {
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
    WaitingClose();
  });

  //Funcion COMENTARIOS
  function guardarComentario() {
		console.log("Guardar Comentarios...");
    var id         = <?php echo json_encode($TareaBPM['caseId']);?>;
    var nombUsr    = $('#usrName').val();
    var apellUsr   = $('#usrLastName').val();;
    var comentario = $('#comentario').val();
		$.ajax({
  		type:'POST',
  		data:{'processInstanceId':id, 'content':comentario},
  		url:'index.php/Tarea/GuardarComentario',
  		success:function(result){
  			console.log("Submit");
  			var lista =  $('#listaComentarios');
  			lista.prepend(' <hr/><li><h4>'+nombUsr+' '+apellUsr +'<small style="float: right">Hace un momento</small></h4><p>'+comentario+'</p></li>');
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
        //console.log(data['reponse_code']);
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




  // trae valores validos para llenar form asoc.
  function getformulario(event) {
    console.log("Obteniendo Formulario...");
    
     form_actual_data = $('#formulario');
     form_actual_id = 'genericForm';
    // llena form una sola vez al primer click
    if (click == 0) {
      var estadoTarea = $('#estadoTarea').val();
      // toma id de form asociado a listarea en TJS
      var idForm = $('#idform').val();
      console.log('id de form: '+idForm);

      // guarda el id form asoc a tarea std en modal para guardar
      $('#idformulario').val(idForm);

      // trae valores validos para llenar componentes de form asoc.
      $.ajax({
        type: 'POST',
        data: { idForm: idForm},
        url: 'index.php/Tarea/getValValido',
        success: function(data){
          console.log('valores de componentes: ');
          console.table(data);
          llenaComp(data);
        },
        error: function(result){
          console.log(result);
        },
        dataType: 'json'
      });
    }
  }

  function getformularioDiag() {
    console.log("Obteniendo Formulario Diagnostico...");
  
    // llena form una sola vez al primer click
    if (click == 0) {
      var estadoTarea = $('#estadoTarea').val();
      // toma id de form asociado a listarea en TJS
      var idForm = $(form_actual_data).attr("data-formid")

      // guarda el id form asoc a tarea std en modal para guardar
      $('#idformulario').val(idForm);

      // trae valores validos para llenar componentes de form asoc.
      $.ajax({
        type: 'POST',
        data: { idForm: idForm},
        url: 'index.php/Tarea/getValValido',
        success: function(data){
          console.log('valores de componentes: ');
          console.table(data);
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
     // console.log('idvalor: '+ data[index]['idValor'] + '-- valor: ' + data[index]['VALOR']);
      var i        = 0;
      var valor    = "";
      var valorSig = "";

      if(data[index]['VALOR']!=$('#' + idSelect).val()){
				$('#' + idSelect).append($('<option>',
					{ value: data[index]['VALOR'], text: data[index]['VALOR'] }));
			}
      valor    = data[index]['idValor'];
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
      console.log(id_listarea);
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
	}).on('change', function(e) {
       // $('#genericForm').bootstrapValidator('revalidateField',$(this).attr('name'));
	   console.log('Validando Campo...'+$(this).attr('name'));
	   $('#genericForm').data('bootstrapValidator').resetField($(this),false);
	   $('#genericForm').data('bootstrapValidator').validateField($(this));
    });

  var form_actual_id = '';
  var form_actual_data = '';
  //Lama al formulario de cada tarea
  $('.getFormularioTarea').click( function(){
    console.log("Get Formularios Tarea...");
    form_actual_data = $(this);
    WaitingOpen();
    var bpmIdTarea   = form_actual_data.attr("data-bpmIdTarea");
    var idListTarea   = form_actual_data.attr("data-idListTarea");
    $('#idformulario').val(form_actual_data.attr("data-formid"));
    //alert($('#idformulario').val());
  
    console.info("idTarea: "+bpmIdTarea);
    console.info("idListTarea: "+idListTarea);
    $.ajax({
      data: { idTareaRevisionB:bpmIdTarea, id_listarea: idListTarea },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/Tarea/detaTareaRevisionDiagnosticoCoordinador',
      success: function(result){   
        form_actual_id = 'genericForm'+idListTarea; 
        
        $("#modalBodyRevDiagCoord").html(result.html);
        IniciarValidador(form_actual_id);
        getformularioDiag();
        $('#modalRevDiagCoord').modal('show');
        WaitingClose();
      },
      error: function(result){
        WaitingClose();
        alert("Error: No se pudo obtener el Formulario");
      },
    });
  });


  

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


<!-- Modal forms tareas a revisar -->
<div class="modal fade" id="modalRevDiagCoord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" id="modalBodyRevDiagCoord">

            </div><!-- /.modal-body -->
        </div> <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- / Modal -->

