<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tareaest extends CI_Controller {
	function __construct()
        {
		parent::__construct();
		$this->load->model('Tareaests');
	}
	public function index($permission)
	{
		$data['list'] = $this->Tareaests->Listado_Tareas();
		$data['permission'] = $permission;
		$this->load->view('TareaStandar/list', $data);
	}
public function Obtener_Tarea(){
		$id=$_POST['id_tarea'];
		$result = $this->Tareaests->Obtener_Tareas($id);
		print_r($result);
		return $result;

	}
public function Guardar_Tarea(){

	  	
	    $descripcion=$this->input->post('descripcion');
	    $duracion_std=$this->input->post('duracion_std');
	    $data = array(
						    'descripcion' => $descripcion,
						    'duracion_std' => $duracion_std
	    );
	    $sql = $this->Tareaests->Guardar_Tareas($data);
	    print_r($sql);
	   
  	}
	  	public function Modificar_Tarea(){
  		$id=$this->input->post('id_tarea');
	    $descripcion=$this->input->post('descripcion');
	    $duracion_std=$this->input->post('duracion_std');
	    $data = array(
	    	    		   'id_tarea' => $id,
						    'descripcion' => $descripcion,
						    'duracion_std' => $duracion_std
					   );
	    $sql = $this->Tareaests->Modificar_Tareas($data);
	    print_r($sql);

  	}
	public function Eliminar_Tarea(){
	
		$id=$_POST['id_tarea'];	
		$result = $this->Tareaests->Eliminar_Tareas($id);
		print_r($result);
		
	}
}	

?>