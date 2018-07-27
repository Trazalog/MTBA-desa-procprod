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

                      <form>
                        <div class="form-group">
                          <div class="col-sm-6 col-md-6">
                            <label for="tarea">Tarea</label>
                            <input type="text" class="form-control" id="tarea" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-6 col-md-6">
                            <label for="fecha">Fecha de Creación</label>
                            <input type="text" class="form-control" id="fecha" placeholder="">
                          </div>
                        </div><br>
                        <div class="form-group">
                          <div class="col-sm-12 col-md-12">
                            <label for="ot">OT</label>
                            <input type="text" class="form-control" id="ot" placeholder="">
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


    //Ckeck Tarea realizada
    $('.btncolor').click(function (e) {

          //var id = <?php echo $idorden?>; //tomo valor de id_orden
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

  
    //Vuelve a pagina principal OT
    // function regresaList(){
    //     WaitingOpen();
    //     $('.content').empty();
    //     // $(".content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");

    //     $(".content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
    //     WaitingClose();
    // }


</script>
