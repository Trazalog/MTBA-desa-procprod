<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InicioTrabajo extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Customers');
		$this->load->model('InicioTrabajos');
		$this->load->model('Bonitas');
	}

	public function index($permission)
	{
		$data['list'] = $this->Customers->Customers_List();
		$data['listaIndices'] = $this->InicioTrabajos->Obtener_Indices();
		$data['tiempoStandars'] = $this->InicioTrabajos->ObtenerTiemposStandars();
		$data['permission'] = $permission;
		$this->load->view('InicioTrabajo/list', $data);
	}

	public function Guardar_Pedido(){
		$data = $this->input->post();
		$data['cod_interno'] = $data['cod_interno'].$this->InicioTrabajos->Obtener_Correlativo();
		//FORMATO HORA JAVA
		$data['fec_entrega'] = $data['fec_entrega']."T00:00";

		$cuerpoBPM = array(
			"idCliente"=>$data['clie_id'],
			"idNotaPedido"=>$data['cod_interno'],
			"fecCompromisoInforme"=>$data['fec_entrega'],
			"familiaProductos"=>$data['familia_producto'],
			"subFamiliaProductos"=>$data['subfamilia'],		
		);
		$dataBPM =array(
			'gNotaPedidoInput'=>$cuerpoBPM
		);
		$parametros = $this->Bonitas->conexiones();
		$parametros["http"]["method"] = "POST";	
		$parametros["http"]["content"] = json_encode($dataBPM);
		$param = stream_context_create($parametros);
		$result = $this->InicioTrabajos->LanzarProceso($param);
		if($result===FALSE){
			echo "Error BPM";
		}else{
			$data['bpm_id'] = json_decode($result, true)['caseId'];
			$resultBD = $this->InicioTrabajos->Guardar($data);
			echo json_encode($resultBD);
		}
		
	}

	public function ObtenerPedidoTrabajo(){
		
		$id = $this->input->post('id');
		dump_exit($id);
		$result = $this->InicioTrabajos->ObtenerPedido($id);
		echo json_encode($result);
	}
}
?>