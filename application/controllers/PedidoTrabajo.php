<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PedidoTrabajo extends CI_Controller {
    function __construct(){

      parent::__construct();
      $this->load->model('PedidoTrabajos'); 
      $this->load->model('Overviews');
      $this->load->model('Tareas');
      $this->load->model('Bonitas');
   }
   function index($permission){
      $data['permission'] =  'View';
      $data['list'] = $this->PedidoTrabajos->Obtener_Todos();
      $this->load->view('PedidosTrabajos/list',$data);
   }
   function Detalles_Pedido($id,$caseID){
      $data['idPedTrabajo'] = $id;
      $data['caseID'] = $caseID;
      $data['comentarios'] = $this->ObtenerComentariosBPM($caseID);
		$data['timeline'] = $this->ObtenerLineaTiempo($caseID);
      $this->load->view('PedidosTrabajos/view',$data);
   }
   function ObtenerComentariosBPM($caseId){
		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);
		return $this->Tareas->ObtenerComentariosBPM($caseId,$param);
	}

	public function ObtenerLineaTiempo($caseId){
		$parametros = $this->Bonitas->LoggerAdmin();
		$parametros["http"]["method"] = "GET";
		$param = stream_context_create($parametros);
        $data['listAct'] = $this->Overviews->ObtenerActividades($caseId,$param);
        $data['listArch'] = $this->Overviews->ObtenerActividadesArchivadas($caseId,$param);
        return $data;
    }
}
?>