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
                                <th>Formulario</th>
                                <!-- <th>Id listarea</th> -->
      
                              </tr>
                            </thead>
                            <tbody>
                              <?php //dump_exit($list);
                              foreach($list_form as $f)
                              {
                                $f = object_to_array($f);
                                  //dump($f);
                             
                                echo '<tr>';
                                echo '<td>';
                                echo '<a href="#" title="Mostrar formulario de tarea" class="getFormularioTarea" data-formid="'.$f['form_id'].'" data-validado="false" data-idListTarea="'.$f['lita_id'].'"><i class="fa fa-eye" style="cursor: pointer; margin-left: 15px;" ></i></a>';
                                echo '</td>';
                                echo '<td class="celda">'.$f['form_nombre'].'</td>';
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

<script>
  function CerrarModal(){
    $('#modalRevDiagCoord').modal('hide');
  }

  // Volver al atras
  $('#cerrar').click(function cargarVista() {
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/-");
    WaitingClose();
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

	$('.fecha').datepicker({
      autoclose: true
	});

  var form_actual_id = '';
  var form_actual_data = '';
  //Lama al formulario de cada tarea
  $('.getFormularioTarea').click( function(){
    console.log("Get Formularios Tarea...");
    form_actual_data = $(this);
    WaitingOpen();
    var idListTarea   = form_actual_data.attr("data-idListTarea");
    var form_id = form_actual_data.attr("data-formid");
    $('#idformulario').val(form_id);
    $.ajax({
      data: {form_id:form_id, id_listarea: idListTarea },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/PedidoTrabajo/Obtener_Formulario',
      success: function(result){   
        form_actual_id = 'genericForm'+idListTarea; 
        
        $("#modalBodyRevDiagCoord").html(result.html);
      
        //getformularioDiag();
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

