<script> //Script Formularios

    var click = 0; 
    $('#formulario').click(function(){
        click = 1;
    });
    // trae valores validos para llenar form asoc.  
	function getformulario(event) {    
	    // trae valor de imagenes y llena inputs.
	    getImgValor();

	    // llena form una sola vez al primer click
	    if (click == 0) {    
	      var estadoTarea = $('#estadoTarea').val();
	      // toma id de form asociado a listarea en TJS
	      var idForm = $('#idform').val();
	    //   console.log('id de form: ');
	    //   console.log(idForm);

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
	   
	    // var id_listarea = $('#tbl_listarea').val();
	    // $('#id_listarea').val(id_listarea);


	    $.each(data,function( index ) {
	      //$( "#" + i ).append(  );
	      var idSelect = data[index]['idValor'];        
	      //console.log('idvalor: '+ data[index]['idValor'] + '-- valor: ' + data[index]['VALOR']);
	      var i = 0;
	      var valor = "";
	      var valorSig = "";      

	      if(data[index]['VALOR']!=$('#' + idSelect).val()){
				$('#' + idSelect).append($('<option>',
					{ value: data[index]['VALOR'], text: data[index]['VALOR'] }));
			}
	      valor = data[index]['idValor'];     
	      valorSig = data[index]['idValor'];
	    });
	}

	//Trae valor de las imagenes
	function getImgValor(){
	    var valores; 
	    // guarda el id form asoc a tarea std en modal para guardar
	    idForm =  $('#idform').val();
        idPedido = $('#idPedTrabajo').val();
	    // trae valores validos para llenar componentes input files.
	    $.ajax({
	            type: 'POST',
	            data: { idForm: idForm,idPedTrabajo:idPedido},
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
            if(valor!=""){
                $("."+data[index]['valoid']).removeClass('hidden');
                $("."+data[index]['valoid']).attr('href',valor);
            }else{
            $("."+data[index]['valoid']).addClass('hidden');
            }
        
        });
	}

    function GuardarFormulario(validarOn){
		console.log("Guardando Formulario..."+form_actual_id);
		var imgs = $('input.archivo');
		var formData = new FormData($("#"+form_actual_id)[0]);
		/** subidad y resubida de imagenes **/
		// Tomo los inputs auxiliares cargados
		var aux = $('input.auxiliar');

		var auxArray = [];
		aux.each(function () {
			auxArray.push($(this).val());
		});
		//console.table(aux);
		for (var i = 0; i < imgs.length; i++) {

			var inpValor = $(imgs[i]).val();
			var idValor = $(imgs[i]).attr('name');
			//console.log("idValor: "+idValor);
			// si tiene algun valor (antes de subir img)
			if (inpValor != "") {
				//al subir primera img
				formData.append(idValor, inpValor);
			} else {

				//formData.delete(idValor);
			}
		}

		/* text tipo check */
		var check = $('input.check');
		//console.log("aux");
		//console.table(aux);
		var checkArray = [];
		// check.each(function() {
		//     checkArray.push($(this).val());
		// });
		//console.log('array de chech: ');
		//console.table(checkArray);

		for (var i = 0; i < check.length; i++) {
			//var chekValor = $(check[i]).val();
			var idCheckValor = $(check[i]).attr('name');
			//console.log('valor: ');
			//console.log(idCheckValor);
			if ($(check[i]).is(':checked')) {
				chekValor = 'tilde';
			} else {
				chekValor = 'notilde';
			}
			formData.append(idCheckValor, chekValor);
		}
		// console.log('array de chech: ');
		// console.table(check);
		for (var pair of formData.entries()) {
			console.log(pair[0]+ ', ' + pair[1]); 
		}
		/* Ajax de Grabado en BD */
		$.ajax({
			url: 'index.php/Tarea/guardarForm',
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,

			success: function (respuesta) {
                console.log(form_actual_id+"...OK");
                WaitingClose();
				ValidarObligatorios(validarOn);
				if (respuesta === "exito") {

				}
				else if (respuesta === "error") {
					alert("Los datos no se han podido guardar");
				}

    		}
        });
	}

   
    $('.fecha').datepicker({
        autoclose: true
  	});

  var form_actual_id = '';
  var form_actual_data = '';


  $('.getFormularioTarea').click( function(){
    WaitingOpen('Abriendo Formulario');
    form_actual_data = $(this);form_actual_data.attr("data-open","true");
    var form_id = form_actual_data.attr("data-formid");
    var idListTarea = form_actual_data.attr("data-bpmIdTarea");
	$('#idform').val(form_id);
	
    form_actual_id = 'genericForm'+idListTarea; 
	
    console.log("Get Formularios Tarea..."+form_actual_id);  
    console.info("idListTarea: "+idListTarea);
    $.ajax({
      data: {form_id:form_id, id_listarea: idListTarea },
      dataType: 'json',
      type: 'POST',
      url: 'index.php/PedidoTrabajo/Obtener_Formulario',
      success: function(result){   
		
        $("#modalBodyRevDiagCoord").html(result.html);
		if(existFunction("after_get_form"))after_get_form();
		getImgValor();
		getformularioDiag();
        $('#modalRevDiagCoord').modal('show');
		
		
        WaitingClose();
      },
      error: function(result){
        WaitingClose();
        alert("Error: No se pudo obtener el Formulario");
      },
    });
  });

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

  function existFunction(nombre){
	var fn = window[nombre]; 
	return typeof fn === 'function';
  }

</script>