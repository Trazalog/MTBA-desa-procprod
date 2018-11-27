<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AceptacionTrabajo extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('AceptacionTrabajos');
		$this->load->model('Bonitas');
    }


	public function GuardarAceptacionTrabajoBPM(){

		$entrega_servicio=$this->input->post('entrega_servicio');
		$direccion_entrega=$this->input->post('direccion_entrega');
		$tipo_cliente=$this->input->post('tipo_cliente');
		$proveedor_repuesto=$this->input->post('proveedor_repuesto');
		$fecha_entrega = date_format(date_create($this->input->post('fecha_entrega')),'Y-m-d');
		$presupuesto = $this->input->post('presupuesto');
		$id = $this->input->post('idtareabonita');
		$idPedidoTrabajo = $this->input->post('idPedTrabajo');

		$cuerpoBPM = array(
			"fecCompromisoEntrega"=>$fecha_entrega."T00:00",
			"tipoEntrega"=>$entrega_servicio,
			"quienProveeRespuestos"=>$proveedor_repuesto,
			"presupuesto"=>	$presupuesto
		);
		$dataBPM =array(
			"clienteAceptaPresupuesto"=>"true",
			"gNotaPedidoInput"=>$cuerpoBPM
		);
		 $parametros = $this->Bonitas->conexiones();
		 $parametros["http"]["method"] = "POST";	
		 $parametros["http"]["content"] = json_encode($dataBPM);
		 $param = stream_context_create($parametros);
		 $result = $this->AceptacionTrabajos->TrabajoExecutionBPM($id,$param);
		
		if($result===FALSE){
			echo "ErrorBPM";
		}else{
			$config = [
				"upload_path" => "./assets/imgformularios",
				'allowed_types' => "*"
			];
	
			$this->load->library("upload",$config);
			$this->upload->do_upload('orden');	
			$documento = array("upload_data" => $this->upload->data());	
			$data = array(						   
				'entrega_servicio' => $entrega_servicio,
				'direccion_entrega' => $direccion_entrega,
				'tipo_cliente' => $tipo_cliente,
				'proveedor_repuesto' => $proveedor_repuesto,
				'fec_entrega' => $fecha_entrega,
				'orden_compra' =>  $documento['upload_data']['file_name']
			);
			$resultBD = $this->AceptacionTrabajos->Guardar($this->input->post('idPedTrabajo'),$data);
			echo base_url().$documento['upload_data']['file_name'];
		}
	}
	
	public function NoAceptaTrabajoBPM(){
		
		$cuerpoBPM = array(
			"fecCompromisoEntrega"=>"2000-01-01T00:00",
			"tipoEntrega"=>strtoupper($this->input->post('estado')),
			"quienProveeRespuestos"=>".",
			"presupuesto"=>"."	
		);
		$dataBPM =array(
			"clienteAceptaPresupuesto"=>"false",
			"gNotaPedidoInput"=>$cuerpoBPM
		);
		$idTareaBonita = $this->input->post('idTarbonita');
		$parametros = $this->Bonitas->conexiones();
		$parametros["http"]["method"] = "POST";	
		$parametros["http"]["content"] = json_encode($dataBPM);
		$param = stream_context_create($parametros);
		$result = $this->AceptacionTrabajos->TrabajoExecutionBPM($idTareaBonita,$param);
		if($result===FALSE){
			echo "ErrorBPM";
		}
	}

	public function GuardarPresupuesto(){
		$idPedTrabajo = $this->input->post('idPedTrabajo');
		$config = [
			'upload_path' => "./assets/imgformularios",
			'allowed_types' => "*",
			'max_size' => "5000"
		];
		$this->load->library("upload",$config);
		if($this->upload->do_upload('presupuesto')){
			$documento = array("upload_data" => $this->upload->data());	
			$data = array(
				'NOM_VAR' => 'presupuesto',
				'VALOR' => "./assets/imgformularios/".$documento['upload_data']['file_name']
			);
		 	$resultBD = $this->AceptacionTrabajos->GuardarPresupuesto($idPedTrabajo,$data);
		 	if($resultBD==false){
		 		echo 'error';
		 	}else{
		 		echo base_url().$data['VALOR'];
			}
		}else{
			echo $this->upload->display_errors();
		}

	}
}
?>