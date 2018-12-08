<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	function __construct()
        {
		parent::__construct();
		$this->load->model('Clientes');
	}
	public function index($permission)
	{
		$data['list'] = $this->Clientes->Listado_Clientes();
		$data['permission'] = 'Add-Edit-View-Del';//$permission;
		$this->load->view('clientes/list', $data);
	}

	public function Obtener_Cliente(){
		$id     = $this->input->post('id');
		$result = $this->Clientes->Obtener_Clientes($id);
		echo json_encode($result);
	}
    
    public function Guardar_Cliente()
    {
		$data = $this->input->post();
	    $sql = $this->Clientes->Guardar_Clientes($data);
	    echo $sql;
  	}
          
    public function Modificar_Cliente(){
	    $sql = $this->Clientes->Modificar_Clientes($this->input->post());
	     echo $sql;
  	}

	public function Eliminar_Cliente(){
        
        $id=$_POST['id'];	
		$result = $this->Clientes->Eliminar_Clientes($id);
        echo json_encode($result);
	}

}	
