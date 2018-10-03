<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Datos de Empresa</h3>          
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="col-xs-8">
            <form id="form-create-empleado" style="padding:0px 15px;" class="form-horizontal" role="form" action="<?php base_url();?>Sistema/guardar" method="POST" >
                <div class="form-group">
                  <label style="margin-top: 7px;">Nombre Fantasía <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" name="nom_fant" class="form-control" placeholder="Nombre Fantasia"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Razón Social <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" name="razon" class="form-control" placeholder="Razón Social  "/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Teléfono <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" name="tel" class="form-control" placeholder="Ingrese teléfono"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Celular <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" name="cel" class="form-control" placeholder="Ingrese Celular"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">e-Mail <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="email" name="email" class="form-control" placeholder="Ingrese su Email"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Dirección <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="text" name="dir" class="form-control" placeholder="Ingrese Dirección"/>
                </div>
                <div class="form-group">
                  <label style="margin-top: 7px;">Logo <strong style="color: #dd4b39">*</strong>: </label>
                  <input type="file" name="logo">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" value="Registrar">Guardar</button>
              </div>
            </form>
          </div>  
      </div> 
    </div> 
  </div> 
</section>     

<script>

  $("#form-create-empleado").submit(function (event){

      event.preventDefault();
      var formData = new FormData($("#form-create-empleado")[0]);

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

</script>


