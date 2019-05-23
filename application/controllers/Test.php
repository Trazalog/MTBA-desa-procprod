<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    function __construct(){

      parent::__construct();
      $this->load->model('PedidoTrabajos');
  
   }
   function index(){
      $data['data'] = $this->PedidoTrabajos->Informe();
      $this->load->view('test',$data);
   }
}
?>