<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class plantilla extends CI_Controller {
	function __construct()
        {
		parent::__construct();
		$this->load->model('Plantillas');
	}

	// public function agregar_tarea(){

	  
	//     $datos=$_POST['parametros'];
	//     $result = $this->Plantillas->agregar_tareas($datos);
	//    	if($result)
	//       		echo $this->db->insert_id();
	//       	else echo 0;	 
 	//  	}

	public function agregar_tarea(){
	  
	$descripcion=$this->input->post('descripcion');
	$idPlantilla=$this->input->post('idPlantilla');
	$arre = array(
						   'descripcion_deta' => $descripcion,
						   'id_plantilla' => $idPlantilla
					   );
	$result = $this->Plantillas->agregar_tareas($arre);
	print_r($result);
	   
  	}
	public function EliminarTarea(){
	
	$id=$_POST['id_detaplantilla'];	
	$result = $this->Plantillas->EliminarTareas($id);
	print_r($result);
	
	}

		//NUEVA
	public function cargartarea($permission,$idglob){ 
	$data['list'] = $this->Plantillas->cargartareas($idglob);
	$data['id_plantilla'] = $idglob; 
    $data['permission'] = $permission;    // envia permisos       
    $this->load->view('plantillas/asignacion',$data); //equipo controlador 
    }


	public function index($permission)
	{
		$data['list'] = $this->Plantillas->plantilla_List();
		$data['permission'] = $permission;
		$this->load->view('plantillas/list', $data);
	}
	
	public function getplantillas(){
		$data['data'] = $this->Plantillas->getplantilla($this->input->post());
		$response['html'] = $this->load->view('plantillas/view_', $data, true);

		echo json_encode($response);
	}
	
	public function setplantillas(){
		$data = $this->Plantillas->setplantilla($this->input->post());
		if($data  == false)
		{
			echo json_encode(false);
		}
		else
		{
			echo json_encode(true);	
		}
	}
	
}
?>