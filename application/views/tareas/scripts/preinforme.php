<script> //Generador de Informes

//(paragenerarlo automáticamente comentar lineas 15, 46 y 65)
function crearPDF() {
  event.preventDefault();
  if(formularios.length==0){alert("No hay Formularios de Diagnostico para Generar");return;}
  WaitingOpen('Generando preinforme');
  var petr = $('#idPedTrabajo').val();
  $.ajax({
    type: 'POST',
    data: { idForms: formularios,petr_id:petr},
    url: 'index.php/Preinforme/generar',
    async: false,
    success: function(data) {
      $("#pdf").attr("data", '<?php echo base_url() ?>'+'assets/preinforme.pdf');
      $('#modalPDF').modal('show');
      WaitingClose();
    },
    error: function(data) {
      console.error("error al crear el preinforme en pdf");
      WaitingClose();
    }
  });
}

//elimino el archivo al salir del modal
$('#modalPDF').on('hidden.bs.modal', function (e) { 
  $.ajax({
    type: 'POST',
    data: {},
    url: 'index.php/Preinforme/eliminarPDF',
    success: function(data) {
      console.log("archivo borrado. "+data);
    },
    error: function(data) {
      console.error("error al eliminar el pdf: "+data);
    }
  });
});
</script>

<!-- Modal -->
<div class="modal fade" id="modalPDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><span id="modalAction"> </span> Preinforme</h4>
            </div>
            <div class="modal-body" id="modalBodyPdf">
                <object id="pdf" data="" width="100%" height="500px" type="application/pdf"> Plugin de PDF no instalado
                </object>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
