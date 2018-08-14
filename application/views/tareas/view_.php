<input type="hidden" id="permission" value="<?php echo $permission;?>">
<?php
  cargarCabecera(12);

?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-body">
          <div class="row" >
            <div class="col-sm-12 col-md-12">
             <div role="tabpanel" class="tab-pane">
              <div class="form-group">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Tareas</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Comentarios</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Vista Global</a></li>    
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                  <div role="tabpanel" class="tab-pane active" id="home">
                    <!-- <h4 class="panel-heading">Tarea</h4> -->
                    <div class="panel-body">

                      <?php
                      
                      echo "<input type='text' class='hidden' id='estadoTarea' value='$estadoTarea' >";
                      //if ($estadoTarea == "noasignado") {
                      echo "<button class='btn btn-block btn-info' style='width: 100px; margin-top: 10px;' onclick='tomarTarea()'>Tomar tarea</button>";
                      //}else{
                      echo "<button class='btn btn-block btn-warning' style='width: 100px; margin-top: 10px;' onclick='soltarTarea()'>Soltar tarea</button>";
                      //}    

                      echo "<br>";

                      $userdata = $this->session->userdata('user_data');
                      $usrId = $userdata[0]['usrId'];     // guarda usuario logueado 
                      ?>


                      <form>
                        <div class="form-group">
                          <div class="col-sm-6 col-md-6">
                            <label for="tarea">Tarea</label>
                            <input type="text" class="form-control" id="tarea" placeholder="" value="<?php echo $datos[0]['tareadescrip']  ?>" disabled>
                            <!-- id de listarea --> 
                            <input type="text" class="" id="tbl_listarea" value="<?php echo $datos[0]['id_listarea'] ?>" >
                            <input type="text" class="" id="idform" value="<?php echo $idForm ?>" >
                            <!-- id de task en bonita -->
                            <input type="text" class="hidden" id="idTarBonita" value="<?php echo $idTarBonita ?>" >
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-6 col-md-6">
                            <label for="fecha">Fecha de Creación</label>
                            <input type="text" class="form-control" id="fecha" placeholder="" value="<?php echo $datos[0]['fecha']  ?>" disabled>
                          </div>
                        </div><br>
                        <div class="form-group">
                          <div class="col-sm-6 col-md-6">
                            <label for="ot">Orden de Trabajo</label>
                            <input type="text" class="form-control" id="ot" placeholder="" value="<?php echo $datos[0]['id_orden']  ?>" disabled>                            
                          </div>
                          <div class="col-sm-6 col-md-6">
                            <label for="duracion_std">Duracion Estandar (minutos)</label>
                            <input type="text" class="form-control" id="duracion_std" placeholder="" value="<?php echo $datos[0]['duracion_std']  ?>" disabled>
                          </div>
                        </div><br>                        
                        <div class="form-group">
                          <div class="col-sm-12 col-md-12">
                            <label for="detalle">Detalle</label>
                            <textarea class="form-control" id="detalle" rows="3" disabled></textarea>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-12 col-md-12">
                            <br>
                            <!-- Modal formulario tarea -->
                            <button id="formulario" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="getformulario()">Completar Formulario</button>                          
                          </div>  
                        </div>  

                        <div class="form-group">
                          <div class="col-sm-12 col-md-12">
                            <br>
                            <label for="observaciones">Observaciones</label>
                            <textarea class="form-control" id="observaciones" rows="3"></textarea>
                          </div>
                        </div>                        
                      </form>

                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="panel-body">

                    </div>
                  </div>

                  <div role="tabpanel" class="tab-pane" id="messages">

                    <div class="panel-body"></div>
                  </div>

                </div>

              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" id="" class="btn btn-primary" onclick="">Cerrar</button>            
            <button type="button" class="btn btn-success" onclick="">Hecho</button>
          </div>  <!-- /.modal footer -->


        </div><!-- /.row -->       



      </div><!-- /.box body -->
    </div> <!-- /.box  -->
  </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->

<div class="modal fade bs-example-modal-lg" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="row" >
        <div class="col-sm-12 col-md-12">
          <div class="box">
            <div class="box-body">
              <div class="row" >
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


<script>

  
  



  //Ckeck Tarea realizada
  $('.btncolor').click(function (e) {

        //var id = <?php //echo $idorden?>; //tomo valor de id_orden
        console.log(id);

         var id_tarea = $(this).parents('tr').find('td').eq(1).html();
         console.log("Estoy finalizando una tarea");
         $.ajax({
           type: 'POST',
           data: { id_tarea: id_tarea,},//Id tarea
           url: 'index.php/Taller/TareaRealizada', //index.php/
           success: function(data){
                    console.log(data);
                    //alert("Se Finalizando la SUBTAREA");
                    refresca(id);
                 },
             
           error:     function(result){
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

  // Toma tarea en BPM
  function tomarTarea(){

    var idTarBonita = $('#idTarBonita').val();
    alert(idTarBonita);
    $.ajax({
            type: 'POST',
            data: { idTarBonita: idTarBonita},
            url: 'index.php/Tarea/tomarTarea', 
            success: function(data){               
                    
                  },              
            error: function(result){
                  
                  console.log(result);
                },
            dataType: 'json'
    });
  }

  // Soltar tarea en BPM
  function soltarTarea(){
    
    var idTarBonita = $('#idTarBonita').val();
    alert(idTarBonita);
    $.ajax({
            type: 'POST',
            data: { idTarBonita: idTarBonita},
            url: 'index.php/Tarea/soltarTarea', 
            success: function(data){               
                    
                  },              
            error: function(result){
                  
                  console.log(result);
                },
            dataType: 'json'
    });
  }


////////////////////  FORM DINAMICO  //////////////////////////////////////////
  var click = 0; 
  $('#formulario').click(function(){
    click = 1;
  });



  // evento de cierre de modal guarda parcialmente los datos
  $('#modalForm').on('hidden.bs.modal', function (e) {    

    var formData = new FormData($("#genericForm")[0]);
  
    //console.table(formData);
    $.ajax({
      url:'index.php/Tarea/guardarForm',
      type:'POST',
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      
      success:function(respuesta){
        if (respuesta==="exito") {
          alert("Los datos han sido guardados correctamente");
          //$("#msg-error").hide();
          //$("#form-create-empleado")[0].reset();
        }
        else if(respuesta==="error"){
          alert("Los datos no se han podido guardar");
        }
        else{
          //$("#msg-error").show();
          //$(".list-errors").html(respuesta);
          alert("Los datos no se han guardado");
        }
      }
    });

  });

  // Envia formulario de tarea
  // $('#genericForm').on("submit", function (event){
  //       event.preventDefault();

  //       var formData = new FormData($("#genericForm")[0]);
      
  //       console.table(formData);
  //       $.ajax({
  //         url:'index.php/Tarea/guardar',
  //         type:'POST',
  //         data:formData,
  //         cache:false,
  //         contentType:false,
  //         processData:false,
          
  //         success:function(respuesta){
  //           if (respuesta==="exito") {
  //             alert("Los datos han sido guardados correctamente");
  //             //$("#msg-error").hide();
  //             //$("#form-create-empleado")[0].reset();
  //           }
  //           else if(respuesta==="error"){
  //             alert("Los datos no se han podido guardar");
  //           }
  //           else{
  //             //$("#msg-error").show();
  //             //$(".list-errors").html(respuesta);
  //             alert("Los datos no se han guardado");
  //           }
  //         }
  //       });
  // });

  // trae valores validos para llenar form asoc.  
  function getformulario(event) {    
    
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
                      //$(tr).remove();
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


  // Validacion de campos obligatorios y vacios
  $('.fecha').datepicker({
        autoclose: true
  });

  //function validar(){
  
    // $('#genericForm').bootstrapValidator({ //VALIDADOR
    //   message: 'This value is not valid',
      
    //   feedbackIcons: {
    //     valid: 'glyphicon glyphicon-ok',
    //     invalid: 'glyphicon glyphicon-remove',
    //     validating: 'glyphicon glyphicon-refresh'
    //   },

    //   fields: {
    //     numerico: {
    //       message: 'NOSE DONDE MUESTRA ESTE MENSAJE',
    //       selector: '.numerico',
    //       validators: {
    //         regexp: {
    //           regexp: /^[0-9_]+$/,
    //           message: 'Solo valores numéricos *'
    //         }
    //       }
    //     },
    //   fecha: {
    //       message: 'NOSE DONDE MUESTRA ESTE MENSAJE',
    //       selector: '.fecha',
    //       validators: {
    //         date: {
    //           format: 'DD-MM-YYYY',
    //           message: 'Formato de Fecha Incorrecto *'
    //         }
    //       }
    //   }
    //   }
    // }).on('success.form.bv', function(e) {
      
    //     e.preventDefault();

    //     var $form = $(e.target),
    //         bv    = $(e.target).data('formValidation');            
        

    //      var formData = new FormData($("#genericForm")[0]);
        
    //       console.table(formData);
    //       $.ajax({
    //               url:'index.php/Tarea/guardar',
    //               type:'POST',
    //               data:formData,
    //               cache:false,
    //               contentType:false,
    //               processData:false,
                  
    //               success:function(respuesta){
    //                 if (respuesta==="exito") {
    //                   alert("Los datos han sido guardados correctamente");
    //                   //$("#msg-error").hide();
    //                   //$("#form-create-empleado")[0].reset();
    //                 }
    //                 else if(respuesta==="error"){
    //                   alert("Los datos no se han podido guardar");
    //                 }
    //                 else{
    //                   //$("#msg-error").show();
    //                   //$(".list-errors").html(respuesta);
    //                   alert("Los datos no se han guardado");
    //                 }
    //               }
    //           });
    //     }).on('status.field.bv', function(e, data) {
    //             if (data.bv.getSubmitButton()) {
    //                 data.bv.disableSubmitButtons(false);
    //             }
    //         });


    $('#genericForm').bootstrapValidator({ //VALIDADOR
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
    // .on('success.form.bv', function(e) {
      
    //     e.preventDefault();

    //     var $form = $(e.target),
    //         bv    = $(e.target).data('formValidation');            
        

         
    //     }).on('status.field.bv', function(e, data) {
    //             if (data.bv.getSubmitButton()) {
    //                 data.bv.disableSubmitButtons(false);
    //             }
    //         });    





  function validarCampos() {
    console.log("Validando Campos Vacíos...");
   // var nodes = document.querySelectorAll("#genericForm input[type=text]");

    //var nodes = document.querySelectorAll("#genericForm input[class='obligatorio']");
    var nodes = $("input.obligatorio");  
    console.log('obligatorios');
    console.table(nodes);
    for (var i = 0; i < nodes.length; i++)
      if (nodes[i].value == "") {
        console.log("Campos Incompletos");
        return;

      }
    console.log("Validación...OK");
    // $('#Guardar')


  }

  //}
  //);  

</script>




