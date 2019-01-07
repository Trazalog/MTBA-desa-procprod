<input type="hidden" id="permission" value="<?php echo $permission;?>">
<input type="hidden" id="idPedTrabajo" value="<?php echo $idPedTrabajo;?>">
<input type="hidden" id="form_id" value="">
<input type="hidden" id="case_id" value="<?php echo json_encode($TareaBPM['caseId'])?>">

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
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tareas</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Comentarios</a></li>
										<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Vista
												Global
											</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">

										<div role="tabpanel" class="tab-pane active" id="home">
											<!-- <h4 class="panel-heading">Tarea</h4> -->
											<div class="panel-body">

												<?php
                          

                                                        echo "<button class='btn btn-block btn-success' id='btontomar' style='width: 100px; margin-top: 10px ;display: inline-block;' onclick='tomarTarea()'>Tomar tarea</button>";
                                               
                                                        echo "&nbsp"; 
                                                        echo "&nbsp"; 
                                                        echo "&nbsp";
                                                        echo "<button class='btn btn-block btn-danger grupNoasignado' id='btonsoltr' style='width: 100px; margin-top: 10px; display: inline-block;' onclick='soltarTarea()'>Soltar tarea</button>";
                                                 
                                                        echo "</br>"; 
                                                        echo "</br>"; 

                                                        $userdata = $this->session->userdata('user_data');
                                                        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado 
                                                        $usrName =  $userdata[0]['usrName'];
                                                        $usrLastName = $userdata[0]["usrLastName"];
                                                        
                                                        echo "<input type='text' class='hidden' id='usrName' value='$usrName' >";
                                                        echo "<input type='text' class='hidden' id='usrLastName' value='$usrLastName' >";
                                                    ?>
												<input type="text" class="form-control hidden" id="asignado" value="<?php echo $TareaBPM["assigned_id"] ?>"
												>
												<form>
													<div class="panel panel-default">
														<h4 class="panel-heading">INFORMACION:</h4>


														<div class="form-group">
															<div class="col-sm-6 col-md-6">
																<label for="tarea">Tarea</label>
																<input type="text" class="form-control" id="tarea" value="<?php echo $TareaBPM['displayName'] ?>"
																 disabled><!-- id de listarea -->
																<input type="text" class="hidden" id="tbl_listarea" value="<?php echo $datos[0]['id_listarea'] ?>">
																<input type="text" class="hidden" id="idform" value="<?php echo $idForm ?>">
																<!-- id de task en bonita -->
																<input type="text" class="hidden" id="idTarBonita" value="<?php echo $idTarBonita ?>">
															</div>
														</div>


														<div class="form-group">
															<div class="col-sm-6 col-md-6">
																<label for="fecha">Fecha de Creación</label>
																<input type="text" class="form-control" id="fecha" placeholder="" value="<?php echo $TareaBPM['last_update_date'] ?>"
																 disabled>
															</div>
														</div><br>


														<div class="form-group ">
															<div class="col-sm-6 col-md-6 ">
																<label for="ot ">Orden de Trabajo:</label>
																<input type="text " class="form-control " id="ot
                                                                    "
																 placeholder=" " value="<?php echo $datos[0][ 'id_orden'] ?>" disabled>
															</div>
														</div><br>

														<div class="form-group">
															<div class="col-sm-6 col-md-6">
																<label for="duracion_std">Duracion Estandar (minutos):</label>
																<input type="text" class="form-control" id="duracion_std" placeholder="" value="<?php echo $datos[0]['duracion_std']  ?>"
																 disabled>
															</div></br>
														</div>

														<br>

														<div class="form-group">
															<div class="col-sm-12 col-md-12">
																<label for="detalle">Detalle</label>
																<textarea class="form-control" id="detalle" rows="3" disabled><?php echo $TareaBPM['displayDescription']?></textarea>
															</div>
														</div></br> </br> </br> </br> </br>
													</div>

													<div class="form-group">
														<div class="col-sm-12 col-md-12">
														<div id="collapseDivCli" class="box box-default collapsed-box box-solid lista_pedidos">
                                                        <div class="box-header with-border">
                                                            <h3 id="tituloInfo" class="box-title">Nota de Pedido</h3>
                                                            <div class="box-tools pull-right">
                                                                <button id="infoCliente" type="button" class="btn btn-box-tool" data-widget="collapse">
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

                                                                                        <th style="text-align: center">Orden de Trabajo</th>
                                                                                        <th style="text-align: center">Detalle</th>
                                                                                        <th style="text-align: center">Fecha Nota</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <?php
                                                                                        foreach ($list as $z) {
                                                                                            $id = $z['id_notaPedido'];

                                                                                            echo '<tr id="' . $id . '" class="' . $id . '" >';
                                                                                            echo '<td>';
                                                                                            // if (strpos($permission,'Edit') !== false) {
                                                                                            //     echo '<i class="fa fa-fw fa-pencil" style="color: #f39c12; cursor: pointer; margin-left: 15px;" title="Editar" data-toggle="modal" data-target="#modaleditar"></i>';
                                                                                            // }
                                                                                            // if (strpos($permission,'Del') !== false) {
                                                                                            //     echo '<i class="fa fa-fw fa-times-circle" style="color: #dd4b39; cursor: pointer; margin-left: 15px;"></i>';
                                                                                            // } 
                                                                                            if (strpos($permission, 'View') !== false) {
                                                                                                echo '<i class="fa fa-fw fa-search" style="color: #3c8dbc; cursor: pointer; margin-left: 15px;" title="Ver Nota Pedido" data-toggle="modal" data-target="#modaltarea"></i>';
                                                                                            }
                                                                                            echo '</td>';

                                                                                            echo '<td style="text-align: center">' . $z['id_ordTrabajo'] . '</td>';
                                                                                            echo '<td style="text-align: center">' . $z['descripcion'] . '</td>';
                                                                                            echo '<td style="text-align: center">' . $z['fecha'] . '</td>';
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
															<button type="button" class="btn btn-primary getFormularioTarea" data-formid="6000" data-open="false" data-validado="false"
                                                                data-bpmIdTarea="<?php echo $lita_id ?>">Adjuntar Presupuesto</button>

															<button type="button" class="btn btn-primary getFormularioTarea" data-formid="7000" data-open="false" data-validado="false"
															   data-bpmIdTarea="<?php echo $lita_id_infoTec ?>">Adjuntar Informe Téctnico</button>

															<button type="button" class="btn btn-primary" onclick="crearPDF()">Ver Formulario RE-TAL-010</button>
														</div>
													</div>
													</form>

																<hr/>

													<section class="content" id="contenido-view">
														<div class="row">
															<div class="col-xs-12">
																<div>
																	<div class="box-header">

																		<h3> ¿El Cliente Acepta realizar el trabajo? </h3>


																		<div class="form-group">
																			<center>
																				<label class="radio-inline">
																					<input type="radio" name="resuesta" onclick="mostrarPanelSi()"> Si
																				</label>
																				<label class="radio-inline">
																					<input type="radio" name="resuesta" onclick="mostrarPanelNo()"> No
																				</label>
																			</center>

																		</div>
																	</div>
																	<!-- /.box-header -->
																	<div class="box-body">

																		<div id="collapseDivSi" class="box box-primary collapsed-box box-solid">
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
																				<form id="form_si">
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
																								<label>Fecha de Entrega<strong style="color: #dd4b39">*</strong>: </label>
																								<input type="text" id="datepicker" name="fecha_entrega" class="form-control">

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
																										<option value="CLIENTE"> Cliente </option>
																										<option value="BALDERRAMO"> Balderramo </option>
																										<option value="AMBOS"> Ambos </option>

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

																		<div id="collapseDivNo" class="box box-default collapsed-box box-solid">
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
																				<!-- <button id="guardarNo" class="hidden" ></button> -->
																			</div>
																		</div>




																	</div>

																</div>
																<!-- /.box-body -->
															</div>
															<!-- /.box-body -->
														</div>
														<!-- /.box -->
													</section>



											
                                            </div>
                                           
										</div>

										<div role="tabpanel" class="tab-pane" id="profile">
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
						<button type="button" id="cerrar" class="btn btn-primary">Cerrar</button>
						<button type="button" class="btn btn-success" id="hecho" onclick="hecho()">Hecho</button>
					</div> <!-- /.modal footer -->

				</div><!-- /.box body -->
			</div> <!-- /.box  -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section><!-- /.content -->



<script>
	jQuery(function ($) { // wait until the DOM is ready
		$("#datepicker").datepicker({
			autoclose: true
		})
	});
	// evento de cierre de modal guarda parcialmente los datos
	$('#orden').on('change', function () {
		$('#adjunto').attr("href", URL.createObjectURL(this.files[0]));
	});

	function hecho() {
		event.preventDefault();
		if ($('#collapseDivNo').hasClass('collapsed-box')) {
			console.log("Acepto");
			guardarPedido();
		} else {
			console.log("No Acepta");
			guardarNo();

		}
	}

	function guardarPedido() {
	
		if ($('#datepicker').val() == '') {
			alert("Campo Fecha de Entrega Obligatorio");
			return;
		}
		WaitingOpen('Cerrando Tarea');
		var idt = $('#idTarBonita').val();
		var formData = new FormData($("#form_si")[0]);
		formData.append('idtareabonita', idt);
		var idPedTrabajo = <?php echo $idPedTrabajo; ?>;
		formData.append('idPedTrabajo', idPedTrabajo);
		formData.append('presupuesto', $('input .archivo ').attr('href'));
        	//Display the key/value pairs
        //     for(var pair of formData.entries()) {
        //     console.log(pair[0]+ ', '+ pair[1]); 
        //     }
		// return;
		$.ajax({
			url: 'index.php/AceptacionTrabajo/GuardarAceptacionTrabajoBPM',
			type:'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function (result) {
				WaitingClose();
				if (result != "ErrorBPM") {
					$('#cerrar').click();
				} else {
					alert("No se pudo Realizar la Operación");
				}
			},
			error: function (result) {
				console.log(result);				
				WaitingClose();
				alert("Error");
			}
		});
	};

	function guardarNo() {
		WaitingOpen('Cerrando Tarea');
		var opcion = $('input[name="a_d"]:checked').val();
		var idt = $('#idTarBonita').val();
		$.ajax({
			type: 'post',
			data: { 'idTarbonita': idt, 'estado': opcion },
			url: 'index.php/AceptacionTrabajo/NoAceptaTrabajoBPM',
			success: function (result) {
				WaitingClose();
				if (result == "ErrorBPM") {
					alert("No se puedo Completar la Operación");
				} else {
					$('#cerrar').click();
				}
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
  });

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

  function GuardarValorInfoTecnico() {
        var idForm = $('#idform').val();
        var idPed = $('#idPedTrabajo').val();
        $.ajax({
            url: 'index.php/Tarea/GuardarValorInfoTecnico',
            type: 'POST',
            data: { 'PETR_ID': idPed, 'FORM_ID': idForm },
            success: function (respuesta) {
                WaitingClose();
            },
            error: function (respuesta) {
                WaitingClose();
                alert("Error");

            }
        });
    }

	function GuardarValorPresupuesto(){
        var idForm = $('#idform').val();
        var idPed = $('#idPedTrabajo').val();
        $.ajax({
            url:'index.php/Tarea/GuardarValorPresupuesto',
            type:'POST',
            data:{'PETR_ID':idPed,'FORM_ID':idForm},
            success:function(respuesta){
                
            },
            error:function(respuesta){
                alert("Error");
            }
        });
    }	
  function after_save_form(){
	if($('#idform').val()=="7000"){
		GuardarValorInfoTecnico();
	}
	if($('#idform').val()=="6000"){	
		GuardarValorPresupuesto();
	}
  }
</script>


<!-- Modal forms tareas a revisar -->
<div class="modal fade" id="modalRevDiagCoord" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" id="modalBodyRevDiagCoord">

            </div><!-- /.modal-body -->
        </div> <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog modal-lg -->
</div>  <!-- /.modal fade -->
<!-- /.Modal -->

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