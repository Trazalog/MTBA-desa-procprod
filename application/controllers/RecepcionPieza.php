<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecepcionPieza extends CI_Controller {

	function __construct()
    {
		parent::__construct();
	//	$this->load->model('Customers');
		$this->load->model('InicioTrabajos');
	}

	public function index($permission)
	{
		$data['list'] = $this->InicioTrabajos->ObtenerTodas();
		$data['permission'] = $permission;
		$this->load->view('RecepcionPiezas/list',$data);
	}
    
}
?>