<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioTrabajo extends CI_Controller {

	function __construct()
    {
		parent::__construct();
		$this->load->model('Customers');
		$this->load->model('InicioTrabajos');
	}

	public function index($permission)
	{
		$data['list'] = $this->Customers->Customers_List();
		$data['listaIndices'] = $this->InicioTrabajos->Obtener_Indices();
		$data['permission'] = $permission;
		$this->load->view('InicioTrabajo/list',$data);
	}

	public function Guardar_Pedido(){
		$data = $this->input->post();
		$result = $this->InicioTrabajos->Guardar($data);
		echo json_encode($result);

	}
	
}
?>