<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    function __construct(){

      parent::__construct();
      $this->load->model('Tests'); 
      $this->load->model('Bonitas');
   }
   function index(){
      $parametros = $this->Bonitas->LoggerAdmin();
      $parametros["http"]["method"] = "GET";
      $param = stream_context_create($parametros);
      $result = $this->Tests->getContrato($param);
      return;
      //$this->load->view('Test');
   }
}
?>