<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	function __construct()
        {
		parent::__construct();
		$this->load->model('Talleres');
	}

	// Carga lista de OT
	public function index($permission){

		$data['list'] = $this->Talleres->otrabajos_List();
		$data['permission'] = $permission;
		$this->load->view('taller/list', $data);
	}
	
	// 	Finalizado de subtareas
	public function TareaRealizada(){

	$idord=$_POST['id_tarea']; 
	$datos = array('estado'=>'TE');
	$result = $this->Talleres->TareaRealizadas($idord, $datos);
	print_r($result);
	}

	// Lista de OT con subtareas separadas
	public function getlistTareasOT($permission,$idfin1){ 
	 	//dump_exit($idfin);
	 	$data['subtareas'] = $this->Talleres->getlistTareasOTs($idfin1);
	 	$data['orden'] = $this->Talleres->getDatosOT($idfin1);
        $data['permission'] = $permission;    // envia permisos       
        $this->load->view('taller/view_', $data);
    }

	//finalizado Parcial (estado 'TE')
	public function CambioParcial(){
	
		$idor=$_POST['idfin'];
		$datos = array('estado'=>'TE');
		$result = $this->Talleres->CambioParcials($idor, $datos);
		print_r($result);	
	}

		public function Iniciar(){
	
		$idor=$_POST['idfin'];
		$datos = array('estado'=>'C');
		$result = $this->Talleres->Iniciars($idor, $datos);
		print_r($result);	
	}


	//finalizado Total (estado 'T')
	public function FinalizaOt(){
	
		$idorden=$_POST['idfin'];
		$fecha = date("Y-m-d H:i:s");
		$result = $this->Talleres->update_cambio($idorden, $fecha);
		print_r($result);	
	}
 
}
?>