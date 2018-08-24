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
    public function index($permission)
	{	
		$data['permission'] = $permission;
		$data['pedido_id'] = 12;
		$data['presupuesto'] = $this->AceptacionTrabajos->ObtenerPresupuesto();
		$this->load->view('tareas/view_4', $data);
	}

	public function GuardarAceptacionTrabajoBPM(){

		$datos = $this->input->post();
		dump_exit($datos);

		$entrega_servicio=$this->input->post('entrega_servicio');
		$direccion_entrega=$this->input->post('direccion_entrega');
		$tipo_cliente=$this->input->post('tipo_cliente');
		$proveedor_repuesto=$this->input->post('proveedor_repuesto');
		$fecha_entrega = $this->input->post('fec_entrega')."T00:00";
		$id = $this->input->post('idtareabonita');
		// echo" id ";
		// dump_exit($id);

		$cuerpoBPM = array(
			"fecCompromisoEntrega"=>$fecha_entrega,
			"tipoEntrega"=>$entrega_servicio,
			"quienProveeRespuestos"=>$proveedor_repuesto,
			"presupuesto"=>"archivo Cotizacion"	
		);
		$dataBPM =array(
			"clienteAceptaPresupuesto"=>"true",
			"gNotaPedidoInput"=>$cuerpoBPM
		);
		 $parametros = $this->Bonitas->conexiones();
		 $parametros["http"]["method"] = "POST";	
		 $parametros["http"]["content"] = json_encode($dataBPM);
		 $param = stream_context_create($parametros);
		 $result = $this->AceptacionTrabajos->TrabajoExecutionBPM(280021,$param);
	
		   if($result===FALSE){
		   	echo "ErrorBPM";
		   }else{
			$config = [
				"upload_path" => "./assets/documentosMTB/ordenes_compra",
				'allowed_types' => "doc|pdf"
			];
	
			$this->load->library("upload",$config);
			$this->upload->do_upload('orden');	
			$documento = array("upload_data" => $this->upload->data());	
			$data = array(						   
				'entrega_servicio' => $entrega_servicio,
				'direccion_entrega' => $direccion_entrega,
				'tipo_cliente' => $tipo_cliente,
				'proveedor_repuesto' => $proveedor_repuesto,
				'orden_compra' =>  $documento['upload_data']['file_name']
			);
			$resultBD = $this->AceptacionTrabajos->Guardar(37,$data);
		   	echo $result;
		   }
	}
	
	function NoAceptaTrabajoBPM(){
		$dataBPM = $this->input->post();
		$parametros = $this->Bonitas->conexiones();
		$parametros["http"]["method"] = "POST";	
		$parametros["http"]["content"] = json_encode($dataBPM);
		$param = stream_context_create($parametros);
		$result = $this->AceptacionTrabajos->TrabajoExecutionBPM(86,$param);
		echo json_encode($result);
	}
}
?>