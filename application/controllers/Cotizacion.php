<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cotizacion extends CI_Controller {
    function __construct(){

    }
    public function index($permission){
        $data['permission'] = "Add-Delete-Edit-View";
        $this->load->view('tareas/view_7', $data);
    }
}
?>
