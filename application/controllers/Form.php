<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct(){

		parent::__construct();		
		$this->load->model('Forms');
	}

	public function index($permission){
		$data['list'] = $this->Forms->get_form();

		// guarda form inicia sin datos validos
		$this->Forms->setFormInicial();

	    $data['permission'] = $permission;
	    $this->load->view('form/view_', $data);
	}

	// trae valores validos para llenar componentes
	public function getValValido(){

		$idForm = $this->input->post('idForm');
		$response = $this->Forms->getValValidos($idForm);
		echo json_encode($response);		
	}

	// guarda  form commpletado (revisar no funciona bien)
	public function guardar(){
		
		$datos = $this->input->post();

		dump_exit($datos);

		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado

        $i = 1;// para guardar el orden de categorias, grupos y valores
		foreach ($datos as $key => $value) {			
			$data = $this->Forms->getDatos($key);
			$data['USUARIO'] = $usrId;
			$data['ORDEN'] = $i;
			// echo "  key: ";
			// echo($key);
			// echo "---------------------------";
			//dump_exit($data);

			$this->Forms->setForm($data);
			$i++;
		}
		
		//echo json_encode(true);	usala para el alburo nomas
	}
}	