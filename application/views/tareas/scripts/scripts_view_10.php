
<script> // Guardado y Validacion de Formulario

function GuardarFormulario(validarOn) {

    $('#error').fadeOut('slow');
    // toma  el valor de todos los input file 
    var imgs = $('input.archivo');

    var formData = new FormData($("#genericForm")[0]);

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
        // si tiene algun valor (antes de subir img)
        if (inpValor != "") {
            //al subir primera img
            formData.append(idValor, inpValor);
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
        console.log('valor: ');
        console.log(idCheckValor);
        if ($(check[i]).is(':checked')) {
            chekValor = 'tilde';
        } else {
            chekValor = 'notilde';
        }
        formData.append(idCheckValor, chekValor);
    }
    // console.log('array de chech: ');
    // console.table(check);

    /* Ajax de Grabado en BD */
    $.ajax({
        url: 'index.php/Tarea/guardarForm',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,

        success: function (respuesta) {
            getImgValor();


            // console.log(respuesta);
            GuardarValorPresupuesto();
            ValidarObligatorios(validarOn);
            if (respuesta === "exito") {

            }
            else if (respuesta === "error") {
                alert("Los datos no se han podido guardar");
            }
            else {
                //$("#msg-error").show();
                //$(".list-errors").html(respuesta);
                //alert("Los datos no se han guardado");
            }
        }
    });

}


function GuardarValorPresupuesto() {
    // var idForm = <?php echo $idForm;?>;
    // var idPed = <?php echo $idPedTrabajo;?>;
    $.ajax({
        url: 'index.php/Tarea/GuardarValorPresupuesto',
        type: 'POST',
        data: { 'PETR_ID': idPed, 'FORM_ID': idForm },
        success: function (respuesta) {

        },
        error: function (respuesta) {
            alert("Error");
        }
    });
}

function ValidarCampos() {
    WaitingOpen('Validando Formulario');
    GuardarFormulario(true);
}
function ValidarObligatorios(validarOn) {
    console.log("Validando Campos Obligatorios...");
    var form_id = $('#idform').val();
    var petr_id = $('#idPedTrabajo').val();
    $.ajax({
        type: 'POST',
        data: { 'form_id': form_id, 'petr_id': petr_id },
        url: 'index.php/Tarea/ValidarObligatorios',
        success: function (result) {
            validado = (result == 1);
            WaitingClose();
            if (!validarOn) return;
            if (validado) $('#modalForm').modal('hide');
            else {
                alert("Fallo Validación: Campos Obligatorios Incompletos. Por favor verifique que todos los campos obligatorios marcados con (*) esten completos.");
            }
        },
        error: function (result) {
            WaitingClose();
            alert("Fallo la Validación del formularios en el Servidor. Por favor vuelva a intentar.");
        }
    });
}

function CerrarModal() {
    $('#modalForm').modal('hide');
    WaitingOpen('Guardando Cambios');
    GuardarFormulario(false);
}
</script>

<script> //Vista Standar

evaluarEstado();
function evaluarEstado() {

    var asig = $('#asignado').val();
    // si esta tomada la tarea
    if (asig != "") {
        habilitar();
    } else {
        deshabilitar();
    }
}
function habilitar() {
    // habilito btn y textarea       
    $("#btonsoltr").show();
    $("#hecho").show();
    $("#guardarComentario").show();
    $("#comentario").show();
    //desahilito btn tomar      
    $("#btontomar").hide();
    $("#formulario").show();
}
function deshabilitar() {
    // habilito btn tomar
    $("#btontomar").show();
    // habilito btn y textarea  
    $("#btonsoltr").hide();
    $("#hecho").hide();
    $("#guardarComentario").hide();
    $("#comentario").hide();
    $("#formulario").hide();
}
// Volver al atras
$('#cerrar').click(function cargarVista() {
    WaitingOpen();
    $('#content').empty();
    $("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
    WaitingClose();
});

/* Funciones BPM */
//Ckeck Tarea realizada
$('.btncolor').click(function (e) {
    //var id = <?php //echo $idorden?>; //tomo valor de id_orden
    console.log(id);
    var id_tarea = $(this).parents('tr').find('td').eq(1).html();
    console.log("Estoy finalizando una tarea");
    $.ajax({
        type: 'POST',
        data: {
            id_tarea: id_tarea,
        }, //Id tarea
        url: 'index.php/Taller/TareaRealizada', //index.php/
        success: function (data) {
            console.log(data);
            //alert("Se Finalizando la SUBTAREA");
            refresca(id);
        },
        error: function (result) {
            console.log(result);
            alert("NO se Finalizo la SUBTAREA");
            refresca(id);
        }
    });
});

var validado = ($('#idform').val() == 0);
function terminarTarea() {
    if (!validado) { alert("Para concluir esta actividad primero debe Validar el Formulario"); return; }
    WaitingOpen('Cerrando Tarea');
    var idTarBonita = $('#idTarBonita').val();
    //alert(idTarBonita);
    $.ajax({
        type: 'POST',
        data: {
            'idTarBonita': idTarBonita,
        },
        url: 'index.php/Tarea/terminarTarea',
        success: function (data) {

            // toma a tarea exitosamente
            if (data['reponse_code'] == 204) {
                $("#content").load("<?php echo base_url(); ?>index.php/Tarea/index/<?php echo $permission; ?>");
            }
            WaitingClose();
        },
        error: function (data) {
            WaitingClose();
            console.log(data);
        },
        dataType: 'json'
    });
}

// Boton Hecho generico
function estado() {
    var idTarBonita = $('#idTarBonita').val();
    $.ajax({
        type: 'POST',
        data: {
            'idTarBonita': idTarBonita,
        },
        url: 'index.php/Tarea/estadoCuenta',
        success: function (result) {
            console.log(result);
            alert("SII");
        },
        error: function (result) {
            alert("Noo");
            console.log(result);
        },
        dataType: 'json'
    });
}
//Funcion COMENTARIOS
function guardarComentario() {

    console.log("Guardar Comentarios...");
    var id =<?php echo json_encode($TareaBPM['caseId']);?>;
    var comentario = $('#comentario').val();
    var nombUsr = $('#usrName').val();
    var apellUsr = $('#usrLastName').val();;
    $.ajax({
        type: 'POST',
        data: { 'processInstanceId': id, 'content': comentario },
        url: 'index.php/Tarea/GuardarComentario',
        success: function (result) {
            console.log("Submit");
            var lista = $('#listaComentarios');
            lista.prepend('<hr/><li><h4>' + nombUsr + ' ' + apellUsr + '<small style="float: right">Hace un momento</small></h4><p>' + comentario + '</p></li>');
            $('#comentario').val('');
        },
        error: function (result) {
            console.log("Error");
        }
    });
}
// Toma tarea en BPM
function tomarTarea() {
    var idTarBonita = $('#idTarBonita').val();
    //alert(idTarBonita);
    $.ajax({
        type: 'POST',
        data: {
            idTarBonita: idTarBonita
        },
        url: 'index.php/Tarea/tomarTarea',
        success: function (data) {
            console.log(data['reponse_code']);
            // toma a tarea exitosamente
            if (data['reponse_code'] == 200) {
                habilitar();
            }

        },
        error: function (result) {
            console.log(result);
        },
        dataType: 'json'
    });
}
// Soltar tarea en BPM
function soltarTarea() {
    var idTarBonita = $('#idTarBonita').val();
    //alert(idTarBonita);
    $.ajax({
        type: 'POST',
        data: {
            idTarBonita: idTarBonita
        },
        url: 'index.php/Tarea/soltarTarea',
        success: function (data) {
            console.log(data['reponse_code']);
            // toma a tarea exitosamente
            if (data['reponse_code'] == 200) {
                deshabilitar();
            }
        },
        error: function (result) {
            console.log(result);
        },
        dataType: 'json'
    });
}

/** Formulario **/

var click = 0;
$('#formulario').click(function () {
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
        console.log('id de form: ');
        console.log(idForm);

        // guarda el id form asoc a tarea std en modal para guardar
        $('#idformulario').val(idForm);

        idForm = 1;
        // trae valores validos para llenar componentes de form asoc.
        $.ajax({
            type: 'POST',
            data: { idForm: idForm },
            url: 'index.php/Tarea/getValValido',
            success: function (data) {
                //console.log('valores de componentes: ');
                //console.table(data);                   

                llenaComp(data);
            },
            error: function (result) {

                console.log(result);
            },
            dataType: 'json'
        });
    }
}

// llena los componentes de form asoc con valores validos
function llenaComp(data) {

    var id_listarea = $('#tbl_listarea').val();
    $('#id_listarea').val(id_listarea);


    $.each(data, function (index) {
        //$( "#" + i ).append(  );
        var idSelect = data[index]['idValor'];
        //console.log('idvalor: '+ data[index]['idValor'] + '-- valor: ' + data[index]['VALOR']);
        var i = 0;
        var valor = "";
        var valorSig = "";

        if (data[index]['VALOR'] != $('#' + idSelect).val()) {
            $('#' + idSelect).append($('<option>',
                { value: data[index]['VALOR'], text: data[index]['VALOR'] }));
        }
        valor = data[index]['idValor'];
        valorSig = data[index]['idValor'];
    });
}

//Trae valor de las imagenes
function getImgValor() {
    var valores;
    // guarda el id form asoc a tarea std en modal para guardar
    idForm = $('#idform').val();
    idPedido = $('#idPedTrabajo').val();

    // trae valores validos para llenar componentes input files.
    $.ajax({
        type: 'POST',
        data: { idForm: idForm, idPedTrabajo: idPedido },
        url: 'index.php/Tarea/getImgValor',
        success: function (data) {
            llenarInputFile(data);
        },
        error: function (result) {

            console.log(result);
        },
        dataType: 'json'
    });
}

// carga inputs auxiliares con url de imagen desde BD
function llenarInputFile(data) {
    var id_listarea = $('inptut.archivo').val();
    $.each(data, function (index) {

        var id = data[index]['valoid'];
        var valor = data[index]['valor'];
        //carga el valor que viene de DB
        if (valor != "") {
            $("." + data[index]['valoid']).removeClass('hidden');
            $("." + data[index]['valoid']).attr('href', valor);
        } else {
            $("." + data[index]['valoid']).addClass('hidden');
        }
        //$("#"+data[index]['valoid']).val(valor);
    });
}
$('.fecha').datepicker({
    autoclose: true
}).on('change', function (e) {
    // $('#genericForm').bootstrapValidator('revalidateField',$(this).attr('name'));
    console.log('Validando Campo...' + $(this).attr('name'));
    $('#genericForm').data('bootstrapValidator').resetField($(this), false);
    $('#genericForm').data('bootstrapValidator').validateField($(this));
});


</script>