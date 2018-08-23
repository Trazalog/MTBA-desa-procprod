<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarea extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('Tareas');
		$this->load->model('Bonitas');
	}

		// Carga lista de OT
		public function index($permission){

		$metodo = "POST";

		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);

		$data['list'] = $this->Tareas->getTareas($param);
		$data['permission'] = $permission;
		$this->load->view('tareas/list', $data);
	}



		public function ObtenerTareaBPM(){	
		
		// PONER EL ID DE USUARIO DINAMICO!!!!!!

		$idTarBonita = $this->input->post('idTarBonita');
		
		$estado = array (
		  "assigned_id"	=>	5
		);
		
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "GET";	
		$parametros["http"]["content"] = json_encode($estado);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->tomarTarea($idTarBonita,$param);
		return $response;
	}





	// Estado cuenta BOTON HECHO
	public function estadoCuenta(){	
	
		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('estado');
		$estado = array (
		  //"estadoCuentaClienteOk"	=>	"$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";	
		//$parametros["http"]["content"] = json_encode($estado);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->estadoCuenta($idTarBonita,$param);
		echo json_encode($result);
	}	

	// Archivo
	public function GuardarArchivoOC(){	
		
		$idTarBonita = $this->input->post('idTarBonita');
		
		$config = [
			"upload_path" => "./assets/documentos/ordenes_compra",
			'allowed_types' => "doc|pdf"
		];

		$this->load->library("upload",$config);
		$this->upload->do_upload('orden');	
		$documento = array("upload_data" => $this->upload->data());	
		$data = array(						   
			'scanMailCliente' =>  base_url().'assets/documentos/ordenes_compra'.$documento['upload_data']['file_name']	
		);

		echo json_encode($data);

		// trae la cabecera
		// $parametros = $this->Bonitas->conexiones();
		
		// // Cambio el metodo de la cabecera a "PUT"
		// $parametros["http"]["method"] = "POST";	
		// $parametros["http"]["content"] = json_encode($data);	

		// // Variable tipo resource referencia a un recurso externo.
		// $param = stream_context_create($parametros);
		// $result = $this->Tareas->GuardarArchivoOC($idTarBonita,$param);
		// if($result=== false)
		// {
		// return 'error';
		// }
		// else{ return 'exito';}
		//echo json_encode($result);
	}



	// Estado cuenta
	public function estadoCuentaOk(){	
	
		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('estado');
		$estado = array (
		  "estadoCuentaClienteOk"	=>	"$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";	
		$parametros["http"]["content"] = json_encode($estado);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->estadoCuentaOk($idTarBonita,$param);
		echo json_encode($result);
	}	



	// Esperando Regularizacion
	public function esperandoRegularizacion(){	
	
		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('espera');
		$espera = array (
		  "seguirEsperandoRegularizacion"	=>	"$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";	
		$parametros["http"]["content"] = json_encode($espera);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->esperandoRegularizacion($idTarBonita,$param);
		echo json_encode($result);
	}	

	

	// Precisa Anticipo
	public function precisaAnticipo(){	
	
		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('precisa');
		$precisa = array (
		  "precisaAnticipo"	=>	"$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";	
		$parametros["http"]["content"] = json_encode($precisa);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->precisaAnticipo($idTarBonita,$param);
		echo json_encode($result);
	}

	public function GuardarComentario(){
		$comentario = $this->input->post();
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";	
		$parametros["http"]["content"] = json_encode($comentario);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->GuardarComentarioBPM($param);
		echo json_encode($response);
	}



	// Trae id de tarea de trazajobs segun id de tarea bonita
	public function getIdTareaTraJobs(){

		$metodo = "POST";

		$idBonita = $this->input->post();
		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);
		$idTJobs = $this->Tareas->getIdTareaTraJobs($idBonita,$param);
		//echo "id de bonita";
		//dump_exit($idTJobs);
		echo $idTJobs;
	}

	// verifica que el form tenga todos los campos validado en 1 
	public function validarFormGuardado(){
		
		$id_listarea = $this->input->post('id_listarea');
		$response = $this->Tareas->validarFormGuardado($id_listarea);
		echo json_encode($response);
	}

	// Termina tarea en BPM  CAMBIAR EL USR POR USR LOGUEADO !!!!!!!
	public function terminarTarea(){
		
		// PONER EL ID DE USUARIO DINAMICO!!!!!!
		$idTarBonita = $this->input->post('idTarBonita');
		$estado = array (
		  "assigned_id"	=>	5,
		  "state"=> "completed"
		);
		
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "PUT";	
		$parametros["http"]["content"] = json_encode($estado);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->terminarTarea($idTarBonita,$param);
		echo json_encode($response);		
	}

	// Usr Toma tarea en BPM   CAMBIAR EL USR POR USR LOGUEADO !!!!!!!
	public function tomarTarea(){	
		
		// PONER EL ID DE USUARIO DINAMICO!!!!!!

		$idTarBonita = $this->input->post('idTarBonita');
		
		$estado = array (
		  "assigned_id"	=>	5
		);
		
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "PUT";	
		$parametros["http"]["content"] = json_encode($estado);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->tomarTarea($idTarBonita,$param);
	}

	// Usr Toma tarea en BPM   CAMBIAR EL USR POR USR LOGUEADO !!!!!!!
	public function soltarTarea(){	
		
		$idTarBonita = $this->input->post('idTarBonita');
		
		$estado = array (
		  "assigned_id"	=>	""
		);
		
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "PUT";	
		$parametros["http"]["content"] = json_encode($estado);	

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->soltarTarea($idTarBonita,$param);
	}	

	// trae datos para llenar notificaion estandar y formulario asociado
	public function detaTarea($permission,$id_orden,$id_listarea, $idTarBonita,$estadoTarea){
		// trae id de form asociado a tarea std.
		$idTareaStd = $this->Tareas->getTarea_idListarea($id_listarea);		
		$idForm = $this->Tareas->getIdFormPorIdTareaSTD($idTareaStd);
		
		$data['permission'] = $permission;
		// datos de la tarea 
		$data['datos'] = $this->Tareas->detaTareas($id_orden,$id_listarea);
		$data['idTarBonita'] = $idTarBonita;
		$data['estadoTarea']= $estadoTarea;
		$data['idForm']	= $idForm;	

		//OBTENER DATOS DE TAREA SELECCIONADA DESDE BONITA
		$data['TareaBPM'] = json_decode($this->ObtenerTareaBPM(),true);
		
		// confirma si hay form guardado de esa listarea		
		if ($this->Tareas->getEstadoForm($id_listarea)) {
			//echo "hay form guardado";
		}
		else{
			//echo "no hay form guradado";
			// guarda form inicial vacio
			$this->Tareas->setFormInicial($id_listarea);
		}
			
		// carga el formulario para modal
		$data['form'] = $this->Tareas->get_form($id_listarea);
		//FLEIVA COMENTARIOS
		$metodo = "POST";

		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);
		
		$data['comentarios'] = $this->Tareas->ObtenerComentarios($param);
		$this->load->view('tareas/view_6', $data);
		
	}

	// trae valores validos para llenar componentes del formulario
	public function getValValido(){

		$idForm = $this->input->post('idForm');
		$response = $this->Tareas->getValValidos($idForm);
		echo json_encode($response);		
	}

	// guarda  form commpletado (revisar no funciona bien)
	public function guardarForm(){
		//  array con id de dato->valor
		$datos = $this->input->post();
		//dump_exit($datos);
		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado

        $i = 1;// para guardar el orden de categorias, grupos y valores
		foreach ($datos as $key => $value) {	
			//trae array con info de dato por id		
			$data = $this->Tareas->getDatos($key);
			$data['USUARIO'] = $usrId;
			$data['ORDEN'] = $i;
			$this->Tareas->UpdateForm($data);
			$i++;
		}

		
		//echo json_encode(true);	usala para el alburo nomas
	}


	
	// // 	Finalizado de subtareas
	// public function TareaRealizada(){

	// $idord=$_POST['id_tarea']; 
	// $datos = array('estado'=>'TE');
	// $result = $this->Talleres->TareaRealizadas($idord, $datos);
	// print_r($result);
	// }

	// // Lista de OT con subtareas separadas
	// public function getlistTareasOT($permission,$idfin1){ 
	//  	//dump_exit($idfin);
	//  	$data['subtareas'] = $this->Talleres->getlistTareasOTs($idfin1);
	//  	$data['orden'] = $this->Talleres->getDatosOT($idfin1);
 //        $data['permission'] = $permission;    // envia permisos       
 //        $this->load->view('taller/view_', $data);
 //    }

	// //finalizado Parcial (estado 'TE')
	// public function CambioParcial(){
	
	// 	$idor=$_POST['idfin'];
	// 	$datos = array('estado'=>'TE');
	// 	$result = $this->Talleres->CambioParcials($idor, $datos);
	// 	print_r($result);	
	// }

	// 	public function Iniciar(){
	
	// 	$idor=$_POST['idfin'];
	// 	$datos = array('estado'=>'C');
	// 	$result = $this->Talleres->Iniciars($idor, $datos);
	// 	print_r($result);	
	// }


	// //finalizado Total (estado 'T')
	// public function FinalizaOt(){
	
	// 	$idorden=$_POST['idfin'];
	// 	$fecha = date("Y-m-d H:i:s");
	// 	$result = $this->Talleres->update_cambio($idorden, $fecha);
	// 	print_r($result);	
	// }
 
}
?>