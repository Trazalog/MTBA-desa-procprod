<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class InicioTrabajos extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function ObtenerTodas(){
		$this->db->select();
		$this->db->from('trj_pedido_trabajo as A');
		$this->db->join('admcustomers as B','A.clie_id = B.cliId');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function Guardar($data)
	{
		$query = $this->db->insert('trj_pedido_trabajo',$data);
        return $query;

	}
	public function Obtener_Indices(){
		$this->db->select('codigo as value,motor as data');
		$query = $this->db->get('trj_nomenclador_motores');
		return $query->result_array();
	}
}
?>