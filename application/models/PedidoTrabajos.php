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
}
?>