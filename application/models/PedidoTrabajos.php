<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class PedidoTrabajos extends CI_Model
{
	function __construct()
	{
		parent::__construct();
    }

    function Obtener_Todos(){
        $this->db->select('A.*,B.cliName as nombre');
        $this->db->from('trj_pedido_trabajo as A');
        $this->db->join('admcustomers as B','A.clie_id=B.cliId');
        return $this->db->get()->result_array();
    }

    function Obterner_Pedido($cod){
        $this->db->where('cod_interno',$cod);
        return $this->db->get('trj_pedido_trabajo')->result_array()[0];
    }

    function Lista_Formularios_Pedido($id_pedido){
        $this->db->select('form_nombre,form_id,lita_id');
        $this->db->where('petr_id',$id_pedido);
        $this->db->group_by('form_id');
        return $this->db->get('frm_formularios_completados')->result_array();
    }
}
?>