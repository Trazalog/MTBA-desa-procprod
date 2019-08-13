<input type="hidden" id="permission" value="<?php echo $permission;?>">

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<Center>
						<h2 class="title ">
							<?php echo $list[0]['nombre']; ?>
						</h2>
					</Center>

					<?php
          // if (strpos($permission,'Add') !== false) {
          //   echo '<button class="btn btn-block btn-success" style="width: 100px; margin-top: 10px;" id="listado">Ver Listado</button>';
          // }
          ?>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form id="form" class="form-horizontal" style="padding:20px 20px;" role="form" action="<?php base_url();?>Form/guardar"
					 method="POST">
						<div class="row">

							<div class="col-sm-12 col-md-12">
								<!-- Toma id de formulario -->
								<input type="hidden" id="idForm" name="" value="<?php echo $list[0]['form_id'];?>">
								<br>

								<?php        
                echo "<table id='tabla' class='table table-hover'>";                 
                  
                  echo "<tbody>";

                    $categ = "";
                    $grup = "";
                    foreach($list as $a){
                      
                      // Muestra categoria
                     
                    
                          $regCat = $a['nomCategoria'];
                          if ($categ != $regCat) {
                            echo "<tr>"; 
                            echo "<td colspan ='2'>";

                            echo "<h3 align='center'>".$a['nomCategoria']."</h3>";
                            echo "</td>";
                            echo "</tr>";  
                            // echo "<input type='hidden' class='nomCategoria' id='categoria' name='' value='".$a['nomCategoria']."'>";
                            //echo "<br>";
                            $categ = $a['nomCategoria'];
                          }                        
                    
                        
                      if(strlen($a["nomGrupo"])>0){

                      // Muestra grupo
                        
                          
                          $regGrupo = $a["nomGrupo"];
                          if(strcmp($grup, $regGrupo) == 0){  //cadenas iguales
                            $grup = $a["nomGrupo"];
                            
                          }
                          
                          else{                             //cadenas distintas
                            //echo "entre por if";
                            echo "<tr>"; 
                            echo "<td colspan ='2'>";  
                            echo "<h4>".$a["nomGrupo"]."</h4>";
                            echo "</td>";
                            echo "</tr>";
                            //echo "<input type='hidden' class='nomGrupo' id='grupo' name='".$a["nomGrupo"]."' value='".$a["nomGrupo"]."'>";
                            
                            $grup = $a["nomGrupo"];
                            //echo "<br>";
                          }
                                              
                      }
                     
                      // Muestra el nombre del dato  
                      echo "<tr>";
                        echo "<td>" ;              
                         
                        $etiqueta = $a["nomTipoDatos"]; 
                      //echo $a["nomValor"];

                        echo "<h4 ' style='margin-left: 60px'; for='".$a['idValor']."' > ".$a["nomValor"]."</h4>";

                        echo "</td>"; 
                        echo "<td>";  
                        echo "<div class='form-group'>";
                                         
                        // muestra el componente a llenar o el select  
                          switch ($etiqueta) {
                                case "select":
                                echo "<select class='form-control sel' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%';>
                                  <option value= '-1'>Selecciona...</option>
                                </select>";
                                    break;
                                case "input_texto":
                                    echo "<input type='text' class='form-control inp texto ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%';'>";
                                    break;
                                case "input_numerico":
                                    echo "<input type='text' class='form-control inp numerico ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%';'>";
                                    break;
                                case "input_fecha":
                                    echo "<input type='text' class='form-control inp fecha ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%';'>";
                                    break;
                                case "input_archivo":
                                    echo "<input type='file' class='inp archivo ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%';'>";
                                    break;                                         
                                case "checkbox":                                    
                                    echo "<input class='".($a['obligatorio']?"obligatorio":"")."' type='checkbox' style='transform: scale(1.4);' value='' name='".$a['idValor']."';'>";
                                    break; 
                                case "textarea":
                                    echo "<textarea class='form-control ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' rows='2'></textarea>";
                                    break;                                 
                          }
                          echo "</div>";
                          echo "</td>";
                          echo "</tr>"; 
                          
                    }

                  echo "</tbody>";

                echo "</table>";  

                ?>

							</div>
							<!-- /.col-sm-12 col-md-12 -->

						</div>
						<!-- /.row -->


						<div class="modal-footer">

							<input type="button" id="btn" class="btn" value="IMPRIMIR" onclick="javascript:print()">

							<!-- <button type="button" id=""class="btn btn-success" onclick="">Aprobar</button> -->
							<!-- <button type="button" class="btn btn-danger" onclick="">Rechazar</button>  -->
							<button class="btn btn-primary" onclick="validarCampos()">Validar</button>
							<button type="submit" id="guardar" class="btn btn-success" disabled="disabled">Guardar</button>
						</div>

					</form>

					<!-- /.modal footer -->

				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col-xs-12 -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->


<script>
	$(document).ready(function(event) {

		var idForm = $('#idForm').val();
		console.log(idForm);

		$.ajax({
			type: 'POST',
			data: {
				idForm: idForm
			},
			url: 'index.php/Form/getValValido',
			success: function(data) {
				//console.log(data);                   
				//$(tr).remove();
				llenaComp(data);
			},

			error: function(result) {

				console.log(result);
			},
			dataType: 'json'
		});

		$('.fecha').datepicker({
			autoclose: true
		})

		$('#form').bootstrapValidator({ //VALIDADOR
			message: 'This value is not valid',
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				numerico: {
					message: 'NOSE DONDE MUESTRA ESTE MENSAJE',
					selector: '.numerico',
					validators: {
						regexp: {
							regexp: /^[0-9_]+$/,
							message: 'Solo valores numéricos *'
						}
					}
				},
				fecha: {
					message: 'NOSE DONDE MUESTRA ESTE MENSAJE',
					selector: '.fecha',
					validators: {
						date: {
							format: 'DD-MM-YYYY',
							message: 'Formato de Fecha Incorrecto *'
						}
					}
				}
			}
		});


		function llenaComp(data) {

			$.each(data, function(index) {
				//$( "#" + i ).append(  );
				var idSelect = data[index]['idValor'];

				//console.log('idvalor: '+ data[index]['idValor'] + '-- valor: ' + data[index]['VALOR']);

				var i = 0;
				var valor = "";
				var valorSig = "";

				$('#' + idSelect).append($('<option />', {
					value: data[index]['VALOR'],
					text: data[index]['VALOR']
				}));

				valor = data[index]['idValor'];
				valorSig = data[index]['idValor'];

			});
		}
	});

	function validarCampos() {
		console.log("Validando Campos Vacíos...");
		var nodes = document.querySelectorAll("#form input[type=text]");
		for (var i = 0; i < nodes.length; i++)
			if (nodes[i].value == "") {
				alert("Campos Incompletos");
				return;

			}
		console.log("Validación...OK");
		// $('#Guardar')


	}



	$("#formulario").submit(function(event) {


		$("input:checkbox:not(:checked)").each(function(index) {

			console.log('tilde');
		});

		event.preventDefault();

		var formData = new FormData($("#formulario")[0]);

		$.ajax({
			url: $("form").attr("action"),
			type: $("form").attr("method"),
			data: formData,
			cache: false,
			contentType: false,
			processData: false,

			success: function(respuesta) {
				alert('exito');


				if (respuesta === "exito") {
					// alert("Los datos han sido guardados correctamente");
					// $("#msg-error").hide();
					// $("#form-create-empleado")[0].reset();
				} else if (respuesta === "error") {
					//alert("Los datos no se han podido guardar");
				} else {
					//$("#msg-error").show();
					// $(".list-errors").html(respuesta);
				}
			}
		});
	});
</script>