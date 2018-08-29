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
	// ver el usr dinamico
	public function ObtenerTareaBPM(){

		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado   
		// PONER EL ID DE USUARIO DINAMICO!!!!!!
		$idTarBonita = $this->input->post('idTarBonita');
		
		$estado = array (
		  "assigned_id"	=>	$usrId
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

	// Trae datos de BPM para notif estandar
	public function getDatosBPM($idTarBonita){		
		
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "GET";	
		
		// Variable tipo resource referencia a un recurso externo.		
		$param = stream_context_create($parametros);
		$response = $this->Tareas->getDatosBPM($idTarBonita,$param);

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

	// Trae id de tarea de trazajobs segun id de tarea bonita - NO TOCAR
	public function getIdTareaTraJobs($idTarBonita){
		
		try {
			$metodo = "POST";		
			$parametros = $this->Bonitas->conexiones();
			$param = stream_context_create($parametros);
			$idTJobs = $this->Tareas->getIdTareaTraJobs($idTarBonita,$param);
		} catch (Exception $e) {
			$idTJobs = 0;
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		} 
		
		return $idTJobs;
	}
	// verifica que el form tenga todos los campos validado en 1 
	// public function validarFormGuardado(){
		
		// 	$id_listarea = $this->input->post('id_listarea');
		// 	$response = $this->Tareas->validarFormGuardado($id_listarea);
		// 	echo json_encode($response);
		// }
	
	// Termina tarea en BPM  CAMBIAR EL USR POR USR LOGUEADO !!!!!!!
	public function terminarTarea(){
		
		// PONER EL ID DE USUARIO DINAMICO!!!!!!
		$idTarBonita = $this->input->post('idTarBonita');
		
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";	
		//$parametros["http"]["content"] = json_encode($estado);	
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->terminarTarea($idTarBonita,$param);
		
		echo json_encode($response);		
	}

	// Usr Toma tarea en BPM (Vista de planificacion) 
	public function tomarTareaPlanificacion(){	
		
		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado   
		
		$idTarBonita = $this->input->post('idTarBonita');		
		$estado = array (
		  "assigned_id"	=>	$usrId
		);
		
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "PUT";	
		$parametros["http"]["content"] = json_encode($estado);	
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response['respRest'] = $this->Tareas->tomarTarea($idTarBonita,$param);	

		$idPedido = $this->input->post('idPedido');
		$cod_interno = $this->input->post('cod_interno');
		$detalle = $this->input->post('detalle');
		
		// Valida exitencia y genera OT inicial		
		if (!$this->Tareas->validarEstOT($idTarBonita,$idPedido)) {
				//echo "NOOO hay orden guardada";
				$this->Tareas->setOTInicial($idTarBonita,$idPedido,$cod_interno,$detalle);
				$insert_id = $this->db->insert_id();				
		}else{
				$insert_id = 0;
		}
		
		$response['resInsert'] = $insert_id;

		echo json_encode($response);
	}
	
	// Usr Toma tarea en BPM (Vistas tareas comunes) 
	public function tomarTarea(){	
		
		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado   
		
		//dump_exit($usrId);
		$idTarBonita = $this->input->post('idTarBonita');
		
		$estado = array (
 		  "assigned_id"	=>	$usrId
 		);
 		
 		// trae la cabecera
 		$parametros = $this->Bonitas->conexiones();
 		
 		// Cambio el metodo de la cabecera a "PUT"
 		$parametros["http"]["method"] = "PUT";	
 		$parametros["http"]["content"] = json_encode($estado);	
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->tomarTarea($idTarBonita,$param);
		echo json_encode($response);
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
		echo json_encode($response);
	}

	// trae datos para llenar notificaion estandar y formulario asociado
	public function detaTarea($permission,$idTarBonita){			

			//OBTENER DATOS DE TAREA SELECCIONADA DESDE BONITA
			$data['TareaBPM'] = json_decode($this->getDatosBPM($idTarBonita),true);
			//dump_exit($data['TareaBPM']);
			// Trae id_listarea desde BPM sino '0' si la tarea es solo de BPM(no form asociado)
			$id_listarea = $this->getIdTareaTraJobs($idTarBonita);

			$idOT = $this->Tareas->getIdOtPorIdBPM($idTarBonita);
			
			//si trae id_listarea (TJobs)
			if($id_listarea != 0){				
				// trae id de form asociado a tarea std (las tareas de BPM se cargaran para asociar a form).
				$idTareaStd = $this->Tareas->getTarea_idListarea($id_listarea);	
				$idForm = $this->Tareas->getIdFormPorIdTareaSTD($idTareaStd); // si es 0 no hay form asociado

				// si hay id de formulario
				if($idForm != 0){
					// confirma si hay form guardado de esa listarea		
					if ($this->Tareas->getEstadoForm($idTarBonita)) {
						//echo "hay form guardado";
					}
					else{
						//echo "no hay form guradado";
						// guarda form inicial vacio
						$this->Tareas->setFormInicial($idTarBonita,$idForm);
					}
				}	

				// si hay formulario
				if($idForm != 0){
					$data['idForm']	= $idForm;
					// carga datos del formulario para modal
					$data['form'] = $this->Tareas->get_form($idTarBonita,$idForm);
				}else{
					$data['idForm'] = 0;
				}				

			//solo tarea BPM con o sin formulario	
			}else{
				
					$nomtarea = $data['TareaBPM']["displayName"];
					$id = $this->Tareas->getidFormTareaBPM($nomtarea);					
					
					if($id){
						$idForm = $id[0]['form_asoc'];
						
						// si hay id de formulario
						if($idForm != 0){
							// confirma si hay form guardado de esa listarea		
							if ($this->Tareas->getEstadoForm($idTarBonita)) {
								//echo "hay form guardado";
							}
							else{
								
								$this->Tareas->setFormInicial($idTarBonita,$idForm);
							}
						}	

						$data['idForm'] = $id[0]['form_asoc'];
						$data['form'] = $this->Tareas->get_form($idTarBonita,$idForm);

					}else{
						
						$data['idForm'] = 0;
						$idForm=0;	
					}				
				
			}
				// si es 0 no hay form asociado			
			//dump_exit($idForm);
			$data['permission'] = $permission;
			$data['idOT'] = $idOT;
			//OBTENER DATOS DE TAREA SELECCIONADA DESDE BONITA
			$data['TareaBPM'] = json_decode($this->getDatosBPM($idTarBonita),true);
			$caseId = $data['TareaBPM']["caseId"];

			// trae id pedido de trabajo desde trj_pedido_trabajo
			$pedTrab = $this->Tareas->getIdPedTrabajo($caseId);
		
			$data['idPedTrabajo'] = $pedTrab[0]['petr_id'];
			$data['codInterno'] = $pedTrab[0]['cod_interno'];

			$data['datos'] = $this->Tareas->detaTareas($id_listarea);			

			$data['idTarBonita'] = $idTarBonita;	
			//echo "<pre>";
			//var_dump($data);
			//FLEIVA COMENTARIOS
			$metodo = "POST";
			$parametros = $this->Bonitas->conexiones();
			$param = stream_context_create($parametros);		
			$data['comentarios'] = $this->Tareas->ObtenerComentarios($param);	

			switch ($data['TareaBPM']['displayName']) {
				// esta vista
				case 'Evaluación del estado de cuenta del cliente':
					$this->load->view('tareas/view_1', $data);
					break;

				case 'Entender si seguir esperando':
					$this->load->view('tareas/view_2', $data);
					break;
					
				case 'Análisis financiero y emisión de reportes':
					$this->load->view('tareas/view_3', $data);
					break;
				
				case 'Solicita ok del cliente para iniciar diagnostico':
					$this->load->view('tareas/view_4', $data);
					break;

				case 'Evalua y envia presupuesto al cliente':
					$this->load->view('tareas/view_6', $data);
					break;
				
				case 'Planificar Diagnóstico':
					$this->load->view('tareas/view_planificacion', $data);
					break;	

				// sino encuentra ninguna carga la vista estandar	
				default:
					$this->load->view('tareas/view_', $data);
					break;		
			}		
	}

	//////////////  form dinamico  //////////////////

	// trae valores validos para llenar componentes del formulario
	public function getValValido(){

		$idForm = $this->input->post('idForm');
		$response = $this->Tareas->getValValidos($idForm);
		echo json_encode($response);		
	}

	// trae el valor de la imagen guardada
	public function getImgValor(){
		$idForm = $this->input->post('idForm');
		$response = $this->Tareas->getImgValor($idForm);
		echo json_encode($response);
	}

	// verifica que el form tenga todos los campos validado en 1 
	// public function validarFormGuardado(){
		
	// 	$response = true;
	// 	$obligArrayIds = $this->input->post('obligArrayIds');
	// 	$id_listarea = $this->input->post('id_listarea');
		
	// 	foreach ($obligArrayIds as $idValor) {
			
	// 		$result = $this->Tareas->validarFormGuardado($idValor,$id_listarea);
			
	// 		if ($result == $idValor) {	
	// 			//echo "valor validado";
	// 		}else{
	// 			$response = $result;
	// 		}
	// 	}
	// 	echo json_encode($response);
	// }
	// verifica que el form tenga todos los campos validado en 1 
	public function validarFormGuardado(){
		
		$cont = 0;
		$obligArrayIds = $this->input->post('obligArrayIds');
		$id_listarea = $this->input->post('id_listarea');
		
		foreach ($obligArrayIds as $idValor) {

			$result = $this->Tareas->validarFormGuardado($idValor,$id_listarea);			
			if(!$result){
				$cont++;
			}	
		}
		if($cont>0){
			$response = false;
		}else{
			$response = true;
		}
		echo json_encode($response);
	}


	// guarda  form commpletado (revisar no funciona bien)
	public function guardarForm(){
		
		//  array con id de dato->valor
		$datos = $this->input->post();	
		//dump_exit($datos);
		//echo "array en funcion";
		//var_dump($datos);

		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado
        $listarea = $datos['id_listarea'];
        $idformulario = $datos['idformulario'];
        $i = 1;// para guardar el orden de categorias, grupos y valores		
        $j = 0;
		foreach ($datos as $key => $value) {	
			
			// Si no son los primeros dos campos id listarea e id formulario
			if (($key != 'id_listarea') && ($key != 'idformulario')) {				
				//trae array con info de dato por id
				// $data = $this->Tareas->getDatos($key);				
				$data = $this->Tareas->getDatos($key);
				// echo "data 18: ";
				// var_dump($data);
				// echo "data 18: ";
				// var_dump($data);

				// Agrego datos adicionales al formulario
				$data['USUARIO'] = $usrId;
				//$data['ORDEN'] = $i;

				// Solo si los valores vienen con info guarda
				if (($value != "") || ($value != -1) ) {
					
					$data['VALOR'] = $value;
				}
				// si el valor es -1 guarda Seleccione..
				if (($value == -1) ) {
					
					$data['VALOR'] = 'Seleccione...';
				}

				
				// Si un componente viene "" o -1  o"notide" guarda 0 (no validado)
				if( ($value == "") || ($value == -1) || ($value == "notilde") )  {
					$data['VALIDADO'] = 0;
				}else{
					$data['VALIDADO'] = 1;
				}

				$tipoComp = $data['TIDA_NOMBRE'];				
				
				// Si el tipo de dato es "input_archivo"
				if ($tipoComp == "input_archivo") {
					
					// si el value no esta vacio
					if($value != ""){

						// IMAGEN SUBIDA
						//codifico nombre para guardar
						// $nomcodif = $this->codifNombre($listarea, $usrId);    					
						// $data['VALOR'] = ".assets/imgformularios/".$nomcodif;
						// // datos del archivo a subir en server
						// $config = [
						// 	"upload_path"   => "/assets/imgformularios",
						// 	'allowed_types' => "png|jpg",
						// 	'file_name'     => $nomcodif
						// ];


						//$nomcodif = $this->codifNombre($listarea, $usrId);    					
						//$data['VALOR'] = ".assets/imgformularios/".$nomcodif;
						// datos del archivo a subir en server
						// $config = [
						// 	"upload_path"   => "/assets/imgformularios",
						// 	'allowed_types' => "png|jpg",
						// 	'file_name'     => $nomcodif
						// ];

						// $this->load->library("upload",$config);

						// // si el campo del form con el id name corriente subio una img
						// if ($this->upload->do_upload($key)) {							
							
						// 	$extension = $this->upload->data('file_ext');
						// 	$nomcodif = $nomcodif.$extesnion;							
						// }
						// $data['VALOR'] = "assets/imgformularios/".$nomcodif;
						$directorio = "D:\sitios\MTBA-desa-procprod\assets\imgformularios";
						//dump_exit( $directorio);
						$config = [
							"upload_path"   => "./assets/imgformularios",//$directorio,
							'allowed_types' => "png|jpg"							
						];

						$this->load->library("upload",$config);
						$this->upload->initialize($config);

						// si el campo del form con el id name corriente subio una img
						if ($this->upload->do_upload($key)) {							
							$dataImag = array("upload_data" => $this->upload->data());
							//$extension = $this->upload->data('file_ext');
							//$nomcodif = $nomcodif.$extesnion;							
						} else {
							dump_exit( array('error' => $this->upload->display_errors()) );
						}
						$nom = $dataImag['upload_data']['file_name'];
						$data['VALOR'] = "assets/imgformularios/".$nom;


					}else{
						echo"vacio";
					}
				}

				$this->Tareas->UpdateForm($data,$key); // key es VALO_ID
				$i++;
			}
					
			
		}

		
		//echo json_encode(true);	usala para el alburo nomas
	}

	// Codifica nombre de imagen para no repetir en servidor
	// formato "12_11_2018-05-21-15-26-24" id_listarea_usrId_fecha(año-mes-dia-hora-min-seg)
	function codifNombre($listarea, $usrId){
		$guion       = '_';
		$guion_medio = '-';
		$hora        = date('Y-m-d H:i:s');// hora actual del sistema 
		$delimiter   = array(" ",",",".","'","\"","|","\\","/",";",":");
		$replace     = str_replace($delimiter, $delimiter[0], $hora);
		$explode     = explode($delimiter[0], $replace);
		
		$strigHora   = $explode[0].$guion_medio.$explode[1].$guion_medio.$explode[2].$guion_medio.$explode[3];
		
		$nomImagen   = $listarea.$guion.$usrId.$guion.$strigHora;
		
		return $nomImagen;
	}
 
}
?>