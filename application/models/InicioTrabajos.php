<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class InicioTrabajos extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function LanzarProceso($param)
	{
		$resource = 'API/bpm/process/';
		$url = BONITA_URL.$resource;
		$com = '/instantiation';
		try {
			$result = file_get_contents($url.BPM_PROCESS_ID.$com, false, $param);
		} catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			echo 'respuestas: ';
			var_dump( $http_response_header);
		} 
			
		return $result;
	}
	public function ObtenerTodas()
	{
		$this->db->select();
		$this->db->from('trj_pedido_trabajo as A');
		$this->db->join('admcustomers as B', 'A.clie_id = B.cliId');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function ObtenerPedido($id){
		$this->db->where('petr_id',$id);
		$query = $this->db->get('trj_pedido_trabajo');
		return $query->result_array();
	}
	public function Guardar($data)
	{

		$query = $this->db->insert('trj_pedido_trabajo', $data);
		return $query;

	}
	public function Obtener_Indices()
	{
		$this->db->select('codigo as value,motor as data');
		$query = $this->db->get('trj_nomenclador_motores');
		return $query->result_array();
	}

	public function Obtener_Correlativo()
	{
		$query = $this->db->get('mtb_num_interno')->result_array();
		$año = $query[0]['año'];
		$num = $query[0]['num_correlativo'];
		if ($año == date("Y")) {//MISMO AÑO RETORNA NUMERO CORRELATIVO
			$num = $num + 1;
			$this->db->set('num_correlativo', $num);
			$this->db->update('mtb_num_interno');
			return "-" . ($num <= 9 ? "000" . $num : ($num <= 99 ? "00" . $num :($num <= 999 ? "0". $num:$num))) . "-" . substr($año, 2, 3);
		} else {//DISTINTOS AÑO SETEA EL NUMERO CORRELATIVO EN 1;
			$this->db->set('año', date("Y"));
			$this->db->set('num_correlativo', 1);
			$this->db->update('mtb_num_interno');
			return "-" . "0001" . "-" . substr(date("Y"), 2, 3);
		}
	}
	public function ObtenerTiemposStandars(){
		$query = $this->db->get('mtb_tiempos_standar');
		return $query->result_array();
	}
}
?>