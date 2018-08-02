<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecepcionPieza extends CI_Controller {

	function __construct()
    {
		parent::__construct();
	//	$this->load->model('Customers');
		$this->load->model('InicioTrabajos');
		$this->load->model('Forms');
	}

	public function index($permission)
	{
		
		$data2['list'] = $this->InicioTrabajos->ObtenerTodas();
		$data2['permission'] = $permission;
		$data['vistaHead'] = $this->load->view('RecepcionPiezas/list',$data2);

		$data1['list'] = $this->Forms->get_form();
		$this->Forms->setFormInicial();
		$data1['permission'] = $permission;
		$data['vistaForm'] = $this->load->view('form/view_', $data1); 

		$this->load->view('RecepcionPiezas/vista',$data);

	}
    
}
?>