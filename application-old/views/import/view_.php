<input type="hidden" id="permission" value="<?php echo $permission;?>">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Importar Artículos</h3>          
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box-body">  

                        <form enctype="multipart/form-data" class="formulario">
                            <!-- <?php echo form_open_multipart();?> -->
                            <input type="file" name="excel" id="excel" size="20" />
                            <!--  <label>Escribe el nombre de la tabla.</label><br /> -->
                            <input class="hidden" type="text" name="table" value="articles" /><br /><br />
                            <!-- <label>Escribe, separados por una coma, los campos de tu tabla excepto los autoincrementales, ejemplo id etc.</label><br /> -->
                            <input class="hidden" type="text" name="fields" style="width:600px" value="artBarCode,artDescription" />
                            <input type="button" value="Importar" />
                        </form>
                        <br /><br />
                        <div class="alert alert-success" id="grabsuccess" role="alert" style="display: none">La planilla se ha grabado exitosamente.</div>
                        <div class="alert alert-danger" id="graberror" role="alert" style="display: none">Ha ocurrido un error.</div>
                    
                    </div>  
                  </div>
                </div>
                <!--div para visualizar mensajes-->
                <div class="messages"></div><br /><br />
                <!--div para visualizar en el caso de imagen-->
            </div> 
        </div>
    </div>
   </div>         
</section>  
 
<script>
  
  $(document).ready(function(){

    //queremos que esta variable sea global
    var fileExtension = "";
    function examinar(){

        //queremos que esta variable sea global
        var fileExtension = "";
        //obtenemos un array con los datos del archivo
        var file = $("#excel")[0].files[0];
        //alert(file);
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;
        //mensaje con la información del archivo
        showMessage("<span class='info'>Archivo para subir: "+fileName+", peso total: "+fileSize+" bytes.</span>");
    }

    //al enviar el formulario
    $(':button').click(function(){
        //información del formulario
        var formData = new FormData($(".formulario")[0]);
        var message = ""; 
        //hacemos la petición ajax  
        $.ajax({
            url: 'Import/to_mysql',  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
                message = $("<span class='before'>Subiendo su archivo, por favor espere...</span>");
                showMessage(message);        
            },
            //una vez finalizado correctamente
            success: function(data){
                $('#graberror').hide(100);
                $('#grabsuccess').show(800);
                $('#grabsuccess').delay(2000).hide(600);
                showMessage("");
            },
            //si ha ocurrido un error
            error: function(){
                $('#graberror').show(800);
                showMessage("");
            }
        });
    });
})

    //como la utilizamos demasiadas veces, creamos una función para 
    //evitar repetición de código
    function showMessage(message){
        $(".messages").html("").show();
        $(".messages").html(message);
    }

</script>