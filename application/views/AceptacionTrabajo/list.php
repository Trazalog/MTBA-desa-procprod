<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<center>
						<h2> Aceptación de Trabajo </h2>
					</center>

					<hr/>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<div class="form-group">
						<div class="row">
							<div class="col-xs-8 col-xs-3">
								<label style="margin-top: 7px;">Entrega del Servicio
									<strong style="color: #dd4b39">*</strong>: </label>
							</div>
							<div class="col-xs-8 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="entrega_servicio" value="C/Banco" /> C/Banco
									</label>
								</div>
							</div>
							<div class="col-xs-8 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="entrega_servicio" value="Armado" /> Armado
									</label>
								</div>
							</div>
							<div class="col-xs-8 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="entrega_servicio" value="Semi-Armado" /> Semi-Armado
									</label>
								</div>
							</div>
							<div class="col-xs-8 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="entrega_servicio" value="Desarmado" /> Desarmado
									</label>
								</div>
							</div>
						</div>
					</div>
					<hr/>
					<div class="row">
						<div class="col-xs-12 col-xs-3">
							<div class="form-group">
								<label>Fecha de Entrega: </label>
								<input type="text" id="fecha_entrega" class="form-control" readonly/>
							</div>
						</div>
						<div class="col-xs-12 col-xs-7">
							<div class="form-group">
								<label>Dirección de Entrega: </label>
								<input type="text" id="direccion_entrega" class="form-control" readonly/>
							</div>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-xs-2">
								<label style="margin-top: 7px;">Tipo de Clientes
									<strong style="color: #dd4b39">*</strong>: </label>
							</div>
							<div class="col-xs-12 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Minera" /> Minera
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Industrial" /> Industrial
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-xs-3">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Emp.Transporte" /> Empresa Transporte
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Agencia" /> Agencia
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-xs-2">

							</div>
							<div class="col-xs-12 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Particular" /> Particular
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Otros" /> Otros
									</label>
								</div>
							</div>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<label>Orden de Compra: </label>
						<input type='file' id="orden_compra" />
					</div>
                    <hr/>
                    <div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-xs-3">
								<label style="margin-top: 7px;">Provisíon de Repuestos
									<strong style="color: #dd4b39">*</strong>: </label>
							</div>
							<div class="col-xs-12 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Cliente" /> Cliente
									</label>
								</div>
							</div>
							<div class="col-xs-12 col-xs-2">
								<div class="radio">
									<label>
										<input type="radio" name="tipo_cliente" value="Motores Balderramo" /> Motores Balderramo
									</label>
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