<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('cargarFormulario')) {
    function cargarFormulario ($form){
      
        echo'<form id="genericForm" class="form-horizontal" style="padding:0px 15px;" role="form" action="'.base_url().'Form/guardar" method="POST" >';   
        echo "<table id='tabla' class='table table-bordered table-hover'>";                   
        echo "<tbody>";
        $categ = "";
        $grup = "";
        foreach($form as $a){
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
            echo "<h4 ' style='margin-left: 60px' for='".$a['idValor']."' > ".$a["nomValor"]."</h4>";
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
                echo "<input type='checkbox' style='transform: scale(1.4)' value='' name='".$a['idValor'].">";
                break; 
                case "textarea":
                echo "<textarea class='form-control' name='".$a['idValor']."' id='".$a['idValor']."' rows='2'></textarea>";
                break;                                 
            }
            echo "</td>";
            echo "</tr>"; 
        }                         
        echo "</tbody>";
        echo "</table>";            
        echo '<div class="modal-footer">
        <!-- <button type="button" id=""class="btn btn-success" onclick="">Aprobar</button>
        <button type="button" class="btn btn-danger" onclick="">Rechazar</button> -->
        <button type="submit" class="btn btn-success" >Guardar</button>
        </div>
        </form>';

    }
}