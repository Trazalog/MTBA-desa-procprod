<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('cargarCabecera')){
    function cargarCabecera($idPedido){
            echo '<section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <center>
                                <h3> Información </h3>
                            </center>
                            
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
        
                            <div id="collapseDivCli" class="box box-default collapsed-box box-solid">
                                <div class="box-header with-border">
                                    <h3 id="tituloInfo" class="box-title">Más Detalles del Cliente</h3>
        
                                    <div class="box-tools pull-right">
                                        <button id="infoCliente" type="button" class="btn btn-box-tool" data-widget="collapse" onclick="mostrarCliente()">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <label style="margin-top: 7px;">Domicilio: </label>
                                            <input type="text" id="domicilio" class="form-control" readonly/>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Teléfono: </label>
                                                <input type="text" id="telefono" class="form-control" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Celular: </label>
                                                <input type="text" id="celular" class="form-control" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Contacto: </label>
                                                <input type="text" id="contacto" class="form-control" readonly/>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div id="collapseDiv" class="box box-default collapsed-box box-solid">
                                <div class="box-header with-border">
                                    <h3 id="pedidoInfo" class="box-title">N° Interno:</h3>
        
                                    <div class="box-tools pull-right">
                                        <button id="infoCliente" type="button" class="btn btn-box-tool" data-widget="collapse" >
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
                                                <label>Parte / Vehículo : </label>
                                                <input type="text" id="parte" class="form-control obligatorio" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label>Patente: </label>
                                                <input type="text" id="patente" class="form-control" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label>N° de Motor : </label>
                                                <input type="text" id="num_motor" class="form-control obligatorio" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label>Indice : </label>
                                                <input type="text" id="indice" class="form-control obligatorio" placeholder="Buscar Indice..." />
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label>Motor : </label>
                                                <input type="text" id="motor" class="form-control obligatorio" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">N° de Chásis: </label>
                                                <input type="text" id="num_chasis" class="form-control" readonly/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Condición : </label>
                                                <input type="text" id="condicion" class="form-control" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Familia de Productos : </label>
                                                <input type="text" id="familia_productos" class="form-control" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Subfamilia : </label>
                                                <input type="text" id="subfamilia" class="form-control" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label style="margin-top: 7px;">Fecha Compromiso Entrega Informe: </label>
                                                <input type="text" id="fecha_entrega" class="form-control" readonly/>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group">
                                                <label>Observaciones:</label>
                                                <textarea id="observacion" class="form-control" readonly></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FIN ROW   -->
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
        
            var idCliente = "";
        
            $(document).ready(function(event){
                console.log("Hola");
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: {
                        "id": '.$idPedido.'
                    },
                    url: "index.php/InicioTrabajo/ObtenerPedidoTrabajo",
                    success: function(result) {
                        idCliente = result[0]["clie_id"];
                        document.getElementById("pedidoInfo").innerHTML = "N° Interno: " +result[0]["cod_interno"];
                        $("#parte").val(result[0]["parte_vehiculo"]);
                        $("#patente").val(result[0]["patente"]);
                        $("#indice").val(result[0]["indice"]);
                        $("#motor").val(result[0]["motor"]);
                        $("#num_motor").val(result[0]["num_motor"]);
                        $("#num_chasis").val(result[0]["num_chasis"]);
                        $("#condicion").val(result[0]["condicion"]);
                        $("#familia_productos").val(result[0]["familia_producto"]);
                        $("#subfamilia").val(result[0]["subfamilia"]);
                        $("#fecha_entrega").val(result[0]["fec_entrega"]);
                        $("#observacion").val(result[0]["observacion"]);
                                    
                    },
                    error: function(result) {
                        console.log(result);
        
                    }
                })
        
            });
            function mostrarCliente() {
                if($("#collapseDivCli").hasClass("collapsed-box")){
                console.log("Mostrar Cliente...");
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: {
                        "id": idCliente
                    },
                    url: "index.php/Customer/ObtenerCliente",
                    success: function(result) {
                        
                        document.getElementById("tituloInfo").innerHTML = "N° Interno: " +result[0]["cliName"];
                        $("#domicilio").val(result[0]["cliAddress"]);
                        $("#celular").val(result[0]["cliMovil"]);
                        $("#telefono").val(result[0]["cliPhone"]);
                        $("#contacto").val(result[0]["cliEmail"]);
        
                    },
                    error: function(result) {
                        console.log(result);
        
                    }
                })
            }
            }
        
        </script>';
} } 

?>