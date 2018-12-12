<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class plantilla extends CI_Controller {
	function __construct()
        {
		parent::__construct();
		$this->load->model('Plantillas');
	}

	public function ObtenerTareas(){
		$result = $this->Plantillas->ObtenerTareas();
		echo json_encode($result);
	}

	public function agregar_tarea(){
	  
	$data=$this->input->post();
	
	
	$result = $this->Plantillas->agregar_tareas($data);
	echo json_encode($result);
	   
  	}
	public function EliminarTarea(){
	
	$id=$_POST['id_detaplantilla'];	
	$result = $this->Plantillas->EliminarTareas($id);
	echo json_encode($result);
	
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