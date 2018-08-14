<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('cargarFormulario')) {
  
//1533655132539

  function cargarFormulario ($form){
      
    echo'<form enctype="multipart/form-data" id="genericForm" class="form-horizontal" style="padding:0px 15px;" role="form" action="" method="" >';   
        
        // guarda el id_listarea para actualizarla tabla frm formcompletados
        echo "<input type='text' class='' name='id_listarea' id='id_listarea' style='width: 100%'>";    
        
        echo "<table id='tabla' class='table table-bordered table-hover'>";                   
          echo "<tbody>";
            $categ = "";
            $grup = "";
            foreach($form as $a){
               // echo "formuario: ";
                //dump_exit($form);        
              // Muestra categoria
             
            
                  $regCat = $a['nomCategoria'];
                  if ($categ != $regCat) {
                    echo "<tr>"; 
                    echo "<td colspan ='2'>";

                    echo "<h3 align='center'>".$a['nomCategoria']."</h3>";
                    echo "</td>";
                    echo "</tr>";  
                    // echo "<input type='hidden' class='nomCategoria' id='categoria' name='' value='".$a['nomCategoria']."'>";
                    //echo "<br>";
                    $categ = $a['nomCategoria'];
                  }                        
            
                
              if(strlen($a["nomGrupo"])>0){

              // Muestra grupo
                
                  
                  $regGrupo = $a["nomGrupo"];
                  if(strcmp($grup, $regGrupo) == 0){  //cadenas iguales
                    $grup = $a["nomGrupo"];
                    
                  }
                  
                  else{                             //cadenas distintas
                    //echo "entre por if";
                    echo "<tr>"; 
                    echo "<td colspan ='2'>";  
                    echo "<h4>".$a["nomGrupo"]."</h4>";
                    echo "</td>";
                    echo "</tr>";
                    //echo "<input type='hidden' class='nomGrupo' id='grupo' name='".$a["nomGrupo"]."' value='".$a["nomGrupo"]."'>";
                    
                    $grup = $a["nomGrupo"];
                    //echo "<br>";
                  }
                                      
              }
             
              // Muestra el nombre del dato  
              echo "<tr>";
                echo "<td>" ;              
                 
                $etiqueta = $a["nomTipoDatos"]; 
              //echo $a["nomValor"];

                echo "<h4 ' style='margin-left: 60px'> ".$a["nomValor"]."</h4>";

                echo "</td>"; 
                echo "<td>";  
                                 
                // muestra el componente a llenar o el select  
                  switch ($etiqueta) {
                        case "select":
                        echo "<select class='form-control sel' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%'>
                          <option value= '-1'>Selecciona...</option>
                        </select>";
                            break;
                        case "input":
                            echo "<input type='text' class='form-control inp' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%'>";
                            break;
                        case "checkbox":                                    
                            echo "<input type='checkbox' value='tilde' name='".$a['idValor']."'>";// aca e falta la comillita de cierre
                            break; 
                        case "textarea":
                            echo "<textarea class='form-control' name='".$a['idValor']."' id='".$a['idValor']."' rows='2'></textarea>";
                            break;
                        case "inputFile":
                            echo "<input type='file' class='inp' name='".$a['idValor']."' id='".$a['idValor']."' style='width: 100%'>";
                            break;                                     
                  }
                  echo "</td>";
                  echo "</tr>"; 
                  
            } 

          echo "</tbody>";
        echo "</table>";            

    echo '<div class="modal-footer">              
              <button type="submit" class="btn btn-success" >Guardar</button>
            </div>

          </form> ';

    }
}