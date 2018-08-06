<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('Forms');
	}
	public function index($permission,$idForm=1){
		$data['list'] = $this->Forms->get_form($idForm);
		$data['forms'] = $this->Forms->ObtenerTodas();
	    $data['permission'] = $permission;
	    $this->load->view('form/view_', $data);
	}
	public function getValValido(){
		$idForm = $this->input->post('idForm');
		$response = $this->Forms->getValValidos($idForm);
		echo json_encode($response);
		
	}

	public function guardar(){
		$datos = $this->input->post();
		dump_exit($datos);
	}
}	