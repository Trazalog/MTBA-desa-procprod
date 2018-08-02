<input type="hidden" id="permission" value="<?php echo $permission;?>">

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<select id="formularios">
						<option>Selecccionar...</option>
						<?php
            foreach($forms as $f){
              echo '<option value="'.$f['form_id'].'">'.$f['nombre'].'</option>';
            }
          ?>
					</select>
					<br>
					<br>
					<h2 class="box-title ">
						<?php echo $list[0]['nombre']; ?>
					</h2>


				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<form class="form-horizontal" style="padding:20px 20px;" role="form" action="<?php base_url();?>Form/guardar"
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
                      if(strlen($a['nomCategoria'])>0 && ($categ != $a['nomCategoria'])){
                      // Muestra categoria
                        echo "<tr name='soy categoria'>"; 
                          echo "<td colspan='2'>";  
                      
                            $regCat = $a['nomCategoria'];
                          //  if ($categ != $regCat) {
                              
                              echo "<h3>" .$a['nomCategoria']. "</h3>";
                              // echo "<input type='hidden' class='nomCategoria' id='categoria' name='' value='".$a['nomCategoria']."'>";
                              //echo "<br>";
                              $categ = $a['nomCategoria'];
                          // }                        
                          echo "</td>";
                        echo "</tr>";      
                      }              
                      if(strlen( $a["nomGrupo"])>0){//AQUI AGREGA
                      // Muestra grupo
                      
                       // echo "<tr name='soy grupo'>"; 
                       //   echo "<td>";    
                            
                            $regGrupo = $a["nomGrupo"];
                            if(strcmp($grup, $regGrupo) == 0){  //cadenas iguales

                              $grup = $a["nomGrupo"];
                            // echo "<br>";
                            }else{                             //cadenas distintas
                              echo "<tr name='soy grupo'>"; 
                              echo "<td colspan='2'>";  
                              //echo "entre por if";
                              echo "<h4>".$a["nomGrupo"]."</h4>";
                              //echo "<input type='hidden' class='nomGrupo' id='grupo' name='".$a["nomGrupo"]."' value='".$a["nomGrupo"]."'>";
                              //echo "<br>";
                              // $grup = $a["nomGrupo"];
                              //echo "<br>";
                              echo "</td>";
                              echo "</tr>"; 
                            }
                        

                      }//AQUI TERMINA EL COSOOO
                      // Muestra el nombre del dato  
                      echo "<tr name='soy valor'>";
                        echo "<td>" ;                      
                          //echo $a["nomValor"];
                          $etiqueta = $a["nomTipoDatos"]; 
                          echo "<h4 style='margin-left:60px' for='".$a['idValor']."' > ".$a["nomValor"]."</h4>";

                        echo "</td>";  
                        echo "<td>";  

                        // muestra el componente a llenar o el select  
                        switch ($etiqueta) {
                            case "select":
                            echo "<select class='form-control sel' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%';>
                              <option value= '-1'>Selecciona...</option>
                            </select>";
                                break;
                            case "input_texto":
                                echo "<input type='text' class='form-control inp texto ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%'>";
                                break;
                            case "input_numerico":
                                echo "<input type='text' class='form-control inp numerico ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%'>";
                                break;
                            case "input_fecha":
                                echo "<input type='text' class='form-control inp fecha ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%'>";
                                break;
                            case "input_archivo":
                                echo "<input type='file' class='inp archivo ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%'>";
                                break;                                         
                            case "checkbox":                                    
                                echo "<input class='".($a['obligatorio']?"obligatorio":"")."' type='checkbox' style='transform: scale(1.4);' value='' name='".$a['idValor']."'>";
                                break; 
                            case "textarea":
                                echo "<textarea class='form-control ".($a['obligatorio']?"obligatorio":"")."' name='".$a['idValor']."' id='".$a['idValor']."' rows='2'></textarea>";
                                break;                                 
                      }                         
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
	$('#formularios').change(function() {
		console.log("Formulario Seleccionado..." + this.value);
		var idForm = this.value;
		ActualizarPagina(idForm);

	});

	(function() {

		var idForm = $('#idForm').val();
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
	})();

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



	$("#formulario").submit(function(event) {


		$("input:checkbox:not(:checked)").each(function(index) {

			console.log('tilde');
		});


		// $("input:checkbox").each(function (index) {  
		//  if($(this).prop('checked')){
		//    console.log('tilde');

		//   alert('hola');
		//     //listaCompras += '*'+$(this).val()+'\n';
		//     $(this).attr("value","tilde");
		//  }else{
		//   console.log('notilde');
		//     $(this).attr("value","notilde");
		//  }
		// });

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

	function ActualizarPagina($idform) { //Funcion Resfresca
		$('#content').empty();
		$("#content").load(
			"<?php echo base_url(); ?>index.php/Form/index/<?php echo $permission; ?>" +
			"/" + $idform);

	}
</script>