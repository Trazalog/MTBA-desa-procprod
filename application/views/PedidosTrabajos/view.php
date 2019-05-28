<input type="hidden" id="permission" value="<?php echo $permission;?>">
<?php 
    $userdata = $this->session->userdata('user_data');
    $usrName =  $userdata[0]['usrName'];
    $usrLastName = $userdata[0]["usrLastName"];
    
    echo "<input type='text' class='hidden' id='usrName' value='$usrName' >";
    echo "<input type='text' class='hidden' id='usrLastName' value='$usrLastName' >";
    echo "<input type='text' class='hidden' id='caseID' value='$caseID' >";
?>
<section class="content">
	<?php echo cargarCabecera($idPedTrabajo); ?>
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
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Comentarios</a></li>
										<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Vista
												Global
											</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">

										<div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="panel-body">
												<div class="panel panel-primary">
													<div class="panel-heading">Comentarios</div>
													<div class="panel-body" style="max-height: 500px;overflow-y: scroll;">
														<ul id="listaComentarios">
															<?php 
																foreach($comentarios as $f){

																	if(strcmp($f['userId']['userName'],'System')!=0){
																	echo '<hr/>';
																	echo '<li><h4>'.$f['userId']['firstname'].' '.$f['userId']["lastname"].'<small style="float: right">'.date_format(date_create($f['postDate']),'H:i  d/m/Y').'</small></h4>';
																	echo '<p>'.$f['content'].'</p></li>';
																	}
																}
															?>
														</ul>
													</div>
												</div>
												<textarea id="comentario" class="form-control" placeholder="Nuevo Comentario..."></textarea>
												<br />
												<button class="btn btn-primary" id="guardarComentario" onclick="guardarComentario()">Agregar</button>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="messages">
											<div class="panel-body">
												<div class="panel panel-primary">
													<?php echo $timeline ?>
												</div>
											</div>

										</div>

									</div>
								</div>
							</div>
						</div>

					</div><!-- /.row -->

					<div class="modal-footer">
						<button type="button" id="cerrar" class="btn btn-primary" onclick="cargarVista()">Cerrar</button>
						<button type="button" class="btn btn-success hidden" id="hecho" onclick="terminarTarea()">Hecho</button>
					</div> <!-- /.modal footer -->

				</div><!-- /.box body -->
			</div> <!-- /.box  -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->

<script>

  $('#genericForm').bootstrapValidator({ //VALIDADOR
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

	evaluarEstado();
	function evaluarEstado() {

		var asig = $('#asignado').val();
		// si esta tomada la tarea
		if (asig != "") {
			habilitar();
		} else {
			deshabilitar();
		}
	}

	function habilitar() {
		// habilito btn y textarea       
		$("#btonsoltr").show();
		$("#hecho").show();
		$("#guardarComentario").show();
		$("#comentario").show();
		//desahilito btn tomar      
		$("#btontomar").hide();
		$("#formulario").show();
	}

	function deshabilitar() {
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
	$('.btncolor').click(function (e) {
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
			success: function (data) {
				console.log(data);
				//alert("Se Finalizando la SUBTAREA");
				refresca(id);
			},
			error: function (result) {
				console.log(result);
				alert("NO se Finalizo la SUBTAREA");
				refresca(id);
			}
		});
	});
	var validado=($('#idform').val()==0);
	function terminarTarea() {
		//if(!validado){alert("Para concluir esta actividad primero debe Validar el Formulario");return;}
		var idTarBonita = $('#idTarBonita').val();
		var id_listarea = $('#id_listarea').val();
		var esTareaStd = $('#esTareaStd').val();
		//alert(idTarBonita+'_'+id_listarea+'_'+esTareaStd);
		$.ajax({
			type: 'POST',
			data: {
				'idTarBonita': idTarBonita,
				'id_listarea': id_listarea,
				'esTareaStd': esTareaStd
			},
			url: 'index.php/Tarea/terminarTareaStandarenBPM',
			success: function (data) {

				// toma a tarea exitosamente
				if (data['reponse_code'] == 204) {
					$("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
				}
			},
			error: function (data) {
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
			success: function (result) {
				console.log(result);
				alert("SII");
			},
			error: function (result) {
				alert("Noo");
				console.log(result);
			},
			dataType: 'json'
		});
	}
	//Funcion COMENTARIOS
	function guardarComentario() {
		console.log("Guardar Comentarios...");
        var id = $('#caseID').val();
		var nombUsr = $('#usrName').val();
		var apellUsr = $('#usrLastName').val();;

		var comentario = $('#comentario').val();

		$.ajax({
			type: 'POST',
			data: { 'processInstanceId': id, 'content': comentario },
			url: 'index.php/Tarea/GuardarComentario',
			success: function (result) {
              //  if(result==true){
                    var lista = $('#listaComentarios');
                    lista.prepend(' <hr/><li><h4>' + nombUsr + ' ' + apellUsr + '<small style="float: right">Hace un momento</small></h4><p>' + comentario + '</p></li>');
                    $('#comentario').val('');
                // }else{
                //     alert("Fallo el Guardado Comentarios. Intente Nuevamente");
                // }
			},
			error: function (result) {
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
			success: function (data) {
				//console.log(data['reponse_code']);
				// toma a tarea exitosamente
				if (data['reponse_code'] == 200) {
					habilitar();
				}

			},
			error: function (result) {
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
			success: function (data) {
				console.log(data['reponse_code']);
				// toma a tarea exitosamente
				if (data['reponse_code'] == 200) {
					deshabilitar();
				}
			},
			error: function (result) {
				console.log(result);
			},
			dataType: 'json'
		});
	}

	/** Formulario **/

	var click = 0;
	$('#formulario').click(function () {
		click = 1;
	});
	// $('.fecha').on('change	', function(e) {
	// 	alert(this);
  	//   $('#genericForm').bootstrapValidator('revalidateField', '');
	// });
	// evento de cierre de modal guarda parcialmente los datos
	$('#modalForm').on('hidden.bs.modal', function (e) {
		guardarFormulario(false);
	});

	function ValidarCampos(){
		$('#genericForm').data('bootstrapValidator').validate();
		if(!$('#genericForm').data('bootstrapValidator').isValid()){
			alert('Error de Validación.\nCompruebe que los Datos esten cargados Correctamente.');
			WaitingClose();
		}	
	}
	function OcultarModal(){
		$('#genericForm').data('bootstrapValidator').resetForm();
		$('#modalForm').modal('hide');
		guardarFormulario(false);
	}
	function guardarFormulario(validarOn){
		console.log("Guardando Formulario...");
		var imgs = $('input.archivo');

		var formData = new FormData($("#genericForm")[0]);

		// Display the key/value pairs
		// for(var pair of formData.entries()) {
		// console.log(pair[0]+ ', '+ pair[1]); 
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
			}
		});
	}

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

			idForm = idForm;
			// trae valores validos para llenar componentes de form asoc.
			$.ajax({
				type: 'POST',
				data: { idForm: idForm },
				url: 'index.php/Tarea/getValValido',
				success: function (data) {
					//console.log('valores de componentes: ');
					//console.table(data);                   

					llenaComp(data);
				},
				error: function (result) {

					console.log(result);
				},
				dataType: 'json'
			});
		}
	}

	// llena los componentes de form asoc con valores validos
	function llenaComp(data) {

		var id_listarea = $('#tbl_listarea').val();
		$('#id_listarea').val(id_listarea);

		//console.log(data);
		
		$.each(data, function (index) {
			//$( "#" + i ).append(  );
			var idSelect = data[index]['idValor'];
			console.log('idvalor: '+ idSelect + '-- valor: ' + data[index]['VALOR']);
			var i = 0;
			var valor = "";
			var valorSig = "";
			if(data[index]['VALOR']!=$('#' + idSelect).val()){
				$('#' + idSelect).append($('<option>',
					{ value: data[index]['VALOR'], text: data[index]['VALOR'] }));
			}
			valor = data[index]['idValor'];
			valorSig = data[index]['idValor'];
			// $('#' + idSelect+" option").val(function(idx, val) {
			// 	//if(!$(this).is(':selected')){
			// 		$(this).siblings('[value="'+ val +'"]').remove();
			// 	//}
			// });
		});
		
	}

	//Trae valor de las imagenes
	function getImgValor() {
		var valores;
		// guarda el id form asoc a tarea std en modal para guardar
		idForm = $('#idform').val();
		idPedTrabajo = $('#idPedTrabajo').val();
		// trae valores validos para llenar componentes input files.
		$.ajax({
			type: 'POST',
			data: {
				idForm: idForm,
				idPedTrabajo: idPedTrabajo
			},
			url: 'index.php/Tarea/getImgValor',
			success: function (data) {
				console.table(data);
				valores = data;
				llenarInputFile(valores);
			},
			error: function (result) {

				console.log(result);
			},
			dataType: 'json'
		});
	}

	// carga inputs auxiliares con url de imagen desde BD
	function llenarInputFile(data) {

		var id_listarea = $('inptut.archivo').val();
		var base_url = "http://35.239.41.196/mtba-desa-procprod-desarrollo/";
		var imagen = "";
		$.each(data, function (index) {
			var id = data[index]['valoid'];
			var valor = data[index]['valor'];
			//carga el valor que viene de DB
			//$("."+data[index]['valoid']).val(valor);
			imagen = base_url + valor;
			$("a." + data[index]['valoid']).attr("href", imagen);

			console.log("valor id: ");
			console.log(data[index]['valoid']);
			console.log("  imagen: ");
			console.log(valor);

			console.log(" url imagen: ");
			console.log(imagen);
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

	function ValidarObligatorios(validarOn){
		console.log("Validando Campos Obligatorios...");
		var form_id = $('#idform').val();
		var petr_id = $('#idPedTrabajo').val();
		$.ajax({
			type: 'POST',
			data: {'form_id':form_id,'petr_id':petr_id},
			url: 'index.php/Tarea/ValidarObligatorios',
			success: function (result) {
				validado=(result==1);
				if(!validarOn) return;
				if(validado)alert("Formularios Correctamente Validado");
				else {
					alert("Fallo Validación: Campos Obligatorios Incompletos. Por favor verifique que todos los campos obligatorios marcados con (*) esten completos.");
				}
			},
			error: function(result){
				alert("Fallo la Validación del formularios en el Servidor. Por favor vuelva a intentar.");
			}
		});
	}
</script>


