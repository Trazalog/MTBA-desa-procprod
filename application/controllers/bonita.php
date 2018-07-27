<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bonita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Bonitas');
	}

	public function conexion(){		

		$param = $this->Bonitas->conexiones();
		if (isset($param)) {
			return $param;
		}else{
			return false;
		}
	}




}	