<input type="hidden" id="permission" value="<?php echo $permission; ?>">
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<center>
						<h2> Registro de Recepción de Componente </h2>
					</center>

					<br>
					<div class="row">

						<div class="col-xs-3">
							<select id="pedidos" class="form-control">
								<option selected="selected">Seleccionar Cliente...</option>
								<?php 
            foreach ($list as $f) {
              echo '<option value="' . $f['petr_id'] . '">' . $f['cliName'] . '</option>';
            }
            ?>
							</select>
						</div>


					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="box box-success collapsed-box box-solid" id="collapseDiv">
						<div class="box-header with-border">
							<h3 class="box-title">Componente</h3>

							<div class="box-tools pull-right">
								<button id="info" type="button" class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-plus"></i>
								</button>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<div class="form-group">
										<label style="margin-top: 7px;">Parte / Vehículo: </label>
										<input type="text" id="parte" class="form-control" readonly/>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="form-group">
										<label style="margin-top: 7px;">Patente: </label>
										<input type="text" id="patente" class="form-control" readonly/>
									</div>
								</div>
                <div class="col-xs-12 col-sm-4">
									<div class="form-group">
										<label style="margin-top: 7px;">N° de Motor: </label>
										<input type="text" id="num_motor" class="form-control" readonly/>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="form-group">
										<label style="margin-top: 7px;">Indice: </label>
										<input type="text" id="indice" class="form-control" readonly/>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="form-group">
										<label style="margin-top: 7px;">Motor: </label>
										<input type="text" id="motor" class="form-control" readonly/>
									</div>
								</div>						
								<div class="col-xs-12 col-sm-4">
									<div class="form-group">
										<label style="margin-top: 7px;">N° de Chásis: </label>
										<input type="text" id="num_chasis" class="form-control" readonly/>
									</div>
								</div>
								<div class="col-xs-2">
									<label style="margin-top: 7px;">Subfamilia: </label>
								</div>
								<div class="col-xs-2">
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="Armado" disabled/> Armado
										</label>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="Semi-Armado" disabled/> Semi-Armado
										</label>
									</div>
								</div>
								<div class="col-xs-2">
									<div class="radio">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios3" value="Desarmado" disabled/> Desarmado
										</label>
									</div>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
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
<!-- /.content -->

<script>
	var listaPedidos;
	var id_pedido_seleccionado;
	$('#pedidos').change(function() {
		console.log("Pedido Seleccionado..." + this.selectedIndex);
		var id = this.selectedIndex - 1;
		listaPedidos = <?php echo json_encode($list); ?> ;
		id_pedido_seleccionado = listaPedidos[id]['petr_id'];

		$('#parte').val(listaPedidos[id]['parte_vehiculo']);
		$('#patente').val(listaPedidos[id]['patente']);
		$('#indice').val(listaPedidos[id]['indice']);
		$('#motor').val(listaPedidos[id]['motor']);
		$('#num_motor').val(listaPedidos[id]['num_motor']);
		$('#num_chasis').val(listaPedidos[id]['num_chasis']);
    $('input[name="optionsRadios"][value="'+listaPedidos[id]['entrega_servicio']+'"]').prop('checked', true);

		// box.hasClass("")
		if ($('#collapseDiv').hasClass('collapsed-box')) {
			$('#info').click();
		}
	});
</script>