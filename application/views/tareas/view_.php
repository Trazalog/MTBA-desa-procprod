<input type="hidden" id="permission" value="<?php echo $permission;?>">

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-body">
          <div class="row" >
            <div class="col-sm-12 col-md-12">
             <div role="tabpanel" class="tab-pane">
              <div class="form-group">
              
                  <div class="panel panel-default">
                    <h4 class="panel-heading">Tarea</h4>
                    <div class="panel-body">
                      <button class="btn btn-block btn-info" style="width: 100px; margin-top: 10px;" onclick="">Tomar tarea</button>
                      <br>

                      <?php
                        // var_dump($datos);
                        $userdata = $this->session->userdata('user_data');
                        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado   

                        //dump_exit($form);
                      ?>

                      <!-- Modal formulario tarea -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="getformulario()">Completar Formulario</button>

                      <form>
                        <div class="form-group">
                          <div class="col-sm-6 col-md-6">
                            <label for="tarea">Tarea</label>
                            <input type="text" class="form-control" id="tarea" placeholder="" value="<?php echo $datos[0]['tareadescrip']  ?>" disabled>
                            <!-- id de listarea --> 
                            <input type="text" class="hidden" id="tbl_listarea" value="<?php echo $datos[0]['id_listarea'] ?>" >                           
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
                            <textarea class="form-control" id="detalle" rows="3"></textarea>
                          </div>
                        </div><br>
                        <div class="form-group">
                          <div class="col-sm-12 col-md-12">
                            <label for="observaciones">Observaciones</label>
                            <textarea class="form-control" id="observaciones" rows="3"></textarea>
                          </div>
                        </div>                        
                      </form>
                    </div>
                  </div>
              </div>
             </div>
          </div>
        
          <div class="modal-footer">
            <button type="button" id=""class="btn btn-success" onclick="">Aprobar</button>
            <button type="button" class="btn btn-danger" onclick="">Rechazar</button>
            <button type="button" class="btn btn-success" onclick="">Hecho</button>
          </div>  <!-- /.modal footer -->


        </div>       

        

      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->




<script>

  
  // evento de cierre de modal
  $('#modalForm').on('hidden.bs.modal', function (e) {
    alert('modal cerrado!!');
    // aca guardar el formulario completado parcialmente
   // $("#genericForm").submit();
  });

//$(document).ready(function(){
  $("#genericForm").submit(function (event){
  //$(document).on("submit", "#genericForm", function (event){
      event.preventDefault();
      var formData = new FormData($("#genericForm")[0]);
      //var formData = new FormData(document.getElementById("genericForm"));
      console.table(formData);
      $.ajax({
        url:$("form").attr("action"),
        type:$("form").attr("method"),
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        
        success:function(respuesta){
          if (respuesta==="exito") {
            alert("Los datos han sido guardados correctamente");
            $("#msg-error").hide();
            $("#form-create-empleado")[0].reset();
          }
          else if(respuesta==="error"){
            alert("Los datos no se han podido guardar");
          }
          else{
            $("#msg-error").show();
            $(".list-errors").html(respuesta);
          }
        }
      });
  });
//});
  





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

  // trae valores validos para llenar form asoc.
  $(document).ready(function(event) {    
    
    // toma id de form asociado
    var idForm = $('#idForm').val();
    console.log(idForm);

    idForm = 1;

    // trae valores validos para llenar componentes de form asoc.
    $.ajax({
            type: 'POST',
            data: { idForm: idForm},
            url: 'index.php/Tarea/getValValido', 
            success: function(data){               
                    //console.log(data);                   
                    //$(tr).remove();
                    llenaComp(data);
                  },              
            error: function(result){
                  
                  console.log(result);
                },
            dataType: 'json'
    });

    // llena los componentes de form asoc con valores validos
    function llenaComp(data){
     
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


  });  
  function getformulario(){
      //console.log('get form funcion');
  }

</script>



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
