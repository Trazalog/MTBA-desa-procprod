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
		$data['timeline'] = $this->load->view('tareas/timeline/view',array('timeline'=>$this->ObtenerLineaTiempo($caseID)),true);
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

    public function Ver_Formularios($idPedidoTrabajo){
      $data['list_form'] = $this->PedidoTrabajos->Lista_Formularios_Pedido($idPedidoTrabajo);
      $data['idPedTrabajo'] = $idPedidoTrabajo;
      $this->load->view('PedidosTrabajos/list_formularios',$data);
    }

    public function Obtener_Formulario(){
      $lita_id = $this->input->post('id_listarea');
      $id_form = $this->input->post('form_id');
      $data['idForm']	= $this->input->post('form_id');
      $data['id_listarea'] = $this->input->post('id_listarea');
      $data['form'] = $this->Tareas->get_form($lita_id,$id_form);
      $response['html'] = $this->load->view('tareas/view-modal-form-revDiagCoord', $data, true);
      echo json_encode($response);
    }

    public function setFinalizacion($case)
    {
      echo $this->PedidoTrabajos->set_finalizacion($case);
    }
}
?>