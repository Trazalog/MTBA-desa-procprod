<input type="hidden" id="permission" value="<?php echo $permission;?>">   

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title ">Registro de Piezas No Mecanizadas</h2>
           <?php
          // if (strpos($permission,'Add') !== false) {
          //   echo '<button class="btn btn-block btn-success" style="width: 100px; margin-top: 10px;" id="listado">Ver Listado</button>';
          // }
          ?>
        </div><!-- /.box-header -->
        <div class="box-body">                    
        
          <form class="form-horizontal" role="form" id="formulario" action="" accept-charset="utf-8">  
            <div class="row" >

              <div class="col-sm-12 col-md-12">
                <!-- Toma id de formulario -->
                <input type="hidden" id="idForm" name="" value="<?php echo $list[0]['form_id'];?>"> 
                <br>

                <?php        
                echo "<table id='tabla' class='table table-bordered table-hover'>"; 
                  
                  echo "<tbody>";

                    $categ = "";
                    $grup = "";
                    foreach($list as $a){
                    
                      // Muestra categoria
                      echo "<tr>"; 
                        echo "<td colspan ='2'>";  
                    
                          $regCat = $a['nomCategoria'];
                          if ($categ != $regCat) {
                            
                            echo "<h4>" .$a['nomCategoria']. "</h4>";
                            // echo "<input type='hidden' class='nomCategoria' id='categoria' name='' value='".$a['nomCategoria']."'>";
                            echo "<br>";
                            $categ = $a['nomCategoria'];
                          }                        
                        echo "</td>";
                      echo "</tr>";                    

                      // Muestra grupo
                      echo "<tr>"; 
                        echo "<td colspan ='2'>";    
                          
                          $regGrupo = $a["nomGrupo"];
                          if(strcmp($grup, $regGrupo) == 0){  //cadenas iguales

                            $grup = $a["nomGrupo"];
                            echo "<br>";
                          }else{                             //cadenas distintas
                            //echo "entre por if";
                            echo $a["nomGrupo"];
                            //echo "<input type='hidden' class='nomGrupo' id='grupo' name='".$a["nomGrupo"]."' value='".$a["nomGrupo"]."'>";
                            echo "<br>";
                            $grup = $a["nomGrupo"];
                            //echo "<br>";
                          }
                        echo "</td>";
                      echo "</tr>";                      

                      // Muestra el nombre del dato  
                      echo "<tr>";
                        echo "<td>" ;                      
                          //echo $a["nomValor"];
                          $etiqueta = $a["nomTipoDatos"]; 
                          echo "<label for='".$a['idValor']."' > ".$a["nomValor"]."</label>";

                        echo "</td>";  
                        echo "<td>";  

                        // muestra el componente a llenar o el select  
                          switch ($etiqueta) {
                                case "select":
                                    echo "<select class='form-control sel' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 30%';></select>";
                                    break;
                                case "input":
                                    echo "<input type='text' class='form-control inp' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 30%';'>";
                                    break;
                                case "checkbox":                                    
                                    echo "<input type='checkbox' class='check' value='".$a['idValor']."' name='".$a['idValor']."'";
                                    break;                              
                          }                          
                        echo "</td>";  
                      echo "</tr>"; 
                    }

                  echo "</tbody>";

                echo "</table>";  

                ?> 

              </div> <!-- /.col-sm-12 col-md-12 -->

            </div> <!-- /.row -->

          </form>  
          
          <div class="modal-footer">
            <!-- <button type="button" id=""class="btn btn-success" onclick="">Aprobar</button>
            <button type="button" class="btn btn-danger" onclick="">Rechazar</button> -->
            <button type="button" class="btn btn-success" onclick="guardar()">Guardar</button>
          </div>  <!-- /.modal footer -->

        </div> <!-- /.box-body -->
      </div> <!-- /.box -->
    </div> <!-- /.col-xs-12 -->
  </div> <!-- /.row -->
</section>  <!-- /.content -->              


<script>

$(document).ready(function(event) {    
    
  var idForm = $('#idForm').val();
  console.log(idForm);

  $.ajax({
          type: 'POST',
          data: { idForm: idForm},
          url: 'index.php/Form/getValValido', 
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

  function llenaComp(data){
   
    $.each(data,function( index ) {
      //$( "#" + i ).append(  );
      var idSelect = data[index]['idValor'];
      
      console.log('idvalor: '+ data[index]['idValor'] + '-- valor: ' + data[index]['VALOR']);

      var i = 0;
      var valor = "";
      var valorSig = "";      

      $('#'+idSelect).append($('<option />', { value: data[index]['VALOR'], text: data[index]['VALOR'] }));

      valor = data[index]['idValor'];     
      valorSig = data[index]['idValor'];  

    });
  }
});

function guardar(){
    

    var datos = $("#formulario").serializeArray();


    //console.log(tabla);

    $.ajax({
          type: 'POST',
          data: datos,
          url: 'index.php/Form/guardar', 
          success: function(data){               
                  console.log(data);                  
                  
                },
            
          error: function(result){
                
                console.log(result);
              },
          dataType: 'json'
    });

  }
</script>