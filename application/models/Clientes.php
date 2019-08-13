<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Clientes extends CI_Model 
{ 
	function __construct() 
	{ 
		parent::__construct(); 
	} 
 
	function Listado_Clientes()
	{ 
		$userdata = $this->session->userdata('user_data'); 
		//$empId = $userdata[0]['id_empresa'];// guarda usuario logueado 
		$this->db->where('estado!=', 'AN'); 
	//	$this->db->where('admcustomers.id_empresa', $empId); 
		$query = $this->db->get('admcustomers'); 
	 
		if ($query->num_rows()!=0) 
		{ 
			return $query->result_array();	 
		} 
	} 

	function Obtener_Clientes($id){ 
 		
		$this->db->where('cliId', $id); 
		$query=$this->db->get('admcustomers'); 
	 
		if ($query->num_rows()!=0) 
			{    
				return $query->result_array()[0];   
			} 
	} 
 
	function Guardar_Clientes($data){ 
		return $this->db->insert("admcustomers",$data); 
	} 
 
	function Modificar_Clientes($data){ 
		$query =$this->db->update('admcustomers', $data, array('cliId' => $data['cliId'])); 
		return $query; 
	} 
 
	function Eliminar_Clientes($data){ 
		$this->db->set('estado', 'AN'); 
		$this->db->where('cliId', $data); 
		$query=$this->db->update('admcustomers'); 
		return $query; 
    } 

}	 
