<?php
defined('BASEPATH') or exit('No direct script access allowed');
class RellenarMenu extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('RellenarMenus');
		$this->load->model('Otrabajos');
		$this->load->model('Bonitas');
    }
    public function index($permission)
	{	
	 // echo json_encode($this->ObtenerMembrecias());
	 $result = $this->RellenarMenus->Rellenar();
	 //  echo $result;
	//  echo json_encode($this->ObtenerMembrecias());

	}
	public function getUsuariosBPM(){
		 
		$parametros = $this->Bonitas->LoggerAdmin();
		$parametros["http"]["method"] = "GET";		 
		$param = stream_context_create($parametros);
		$users = $this->Otrabajos->getUsuariosBPM($param);
		return $users;	
	}

	public function ObtenerMembrecias(){
		$parametros = $this->Bonitas->LoggerAdmin();
		$parametros["http"]["method"] = "GET";		 
		$param = stream_context_create($parametros);
		$result = $this->RellenarMenus->ObtenerMembrecias($param);
		return $result;	
	}
	

}
?>