<?php defined('BASEPATH') OR exit('No direct script access allowed');
    if (!function_exists('mostrarPopup')) {
        function mostrarPopup(){
            $html = 
                '<div id="modalPopup" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">         
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"  id="myModalLabel"><span id="modalAction" class="fa fa-plus-square btncolor " style="color: #6aa61b" > </span> Nuevo Subsector </h4>
                        </div> 
                        <center>
                        <h4 id="popupmsj"></h4>
                        </center>
                        
                        <div class="modal-footer">
                            <button  type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>     
                        </div>   
                    </div>  
                    </div>
                </div><script>function popup(){ $("modalPopup").modal("show"); }</script>';
            return $html;
        }
        function alert($value){
            echo '<script>alert('.$value.');</script>';
        }
    }
?>