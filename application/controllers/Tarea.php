<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarea extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('Tareas');
		$this->load->model('Bonitas');
	}

	// Carga lista de OT
	public function index($permission){
		
		$param = $this->Bonitas->conexiones();
		$data['list'] = $this->Tareas->getTareas($param);
		$data['permission'] = $permission;
		$this->load->view('tareas/list', $data);
	}

	// trae datos para llenar notificaion estandar y formulario asociado
	public function detaTarea($permission,$id_orden,$id_listarea){
		
		$data['permission'] = $permission;
		// datos de la tarea 
		$data['datos'] = $this->Tareas->detaTareas($id_orden,$id_listarea);
		
		// confirma si hay form guardado de esa listarea		
		if ($this->Tareas->getEstadoForm($id_listarea)) {
			echo "hay form guardado";
		}else{
			echo "no hay form guradado";
			// guarda form inicial vacio
			$this->Tareas->setFormInicial($id_listarea);
		}
			
		// carga el formulario para modal
		$data['form'] = $this->Tareas->get_form($id_listarea);
		//dump_exit($data);
		$this->load->view('tareas/view_', $data);
	}

	// trae valores validos para llenar componentes del formulario
	public function getValValido(){

		$idForm = $this->input->post('idForm');
		$response = $this->Tareas->getValValidos($idForm);
		echo json_encode($response);		
	}

	// guarda  form commpletado (revisar no funciona bien)
	public function guardarForm(){
		//  array con id de dato->valor
		$datos = $this->input->post();
		//dump_exit($datos);
		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado

        $i = 1;// para guardar el orden de categorias, grupos y valores
		foreach ($datos as $key => $value) {	
			//trae array con info de dato por id		
			$data = $this->Tareas->getDatos($key);
			$data['USUARIO'] = $usrId;
			$data['ORDEN'] = $i;
			$this->Tareas->UpdateForm($data);
			$i++;
		}

		
		//echo json_encode(true);	usala para el alburo nomas
	}


	
	// // 	Finalizado de subtareas
	// public function TareaRealizada(){

	// $idord=$_POST['id_tarea']; 
	// $datos = array('estado'=>'TE');
	// $result = $this->Talleres->TareaRealizadas($idord, $datos);
	// print_r($result);
	// }

	// // Lista de OT con subtareas separadas
	// public function getlistTareasOT($permission,$idfin1){ 
	//  	//dump_exit($idfin);
	//  	$data['subtareas'] = $this->Talleres->getlistTareasOTs($idfin1);
	//  	$data['orden'] = $this->Talleres->getDatosOT($idfin1);
 //        $data['permission'] = $permission;    // envia permisos       
 //        $this->load->view('taller/view_', $data);
 //    }

	// //finalizado Parcial (estado 'TE')
	// public function CambioParcial(){
	
	// 	$idor=$_POST['idfin'];
	// 	$datos = array('estado'=>'TE');
	// 	$result = $this->Talleres->CambioParcials($idor, $datos);
	// 	print_r($result);	
	// }

	// 	public function Iniciar(){
	
	// 	$idor=$_POST['idfin'];
	// 	$datos = array('estado'=>'C');
	// 	$result = $this->Talleres->Iniciars($idor, $datos);
	// 	print_r($result);	
	// }


	// //finalizado Total (estado 'T')
	// public function FinalizaOt(){
	
	// 	$idorden=$_POST['idfin'];
	// 	$fecha = date("Y-m-d H:i:s");
	// 	$result = $this->Talleres->update_cambio($idorden, $fecha);
	// 	print_r($result);	
	// }
 
}
?>