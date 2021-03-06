<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tarea extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Tareas');
		$this->load->model('Bonitas');
		$this->load->model('Notapedidos');
		$this->load->model('Overviews');
		$this->load->model('PedidoTrabajos');
	}
	// Carga lista de OT
	public function index($permission)
	{

		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);
		$data['list'] = $this->Tareas->getTareas($param);
		$data['permission'] = "Add-Edit-Del-View-";//$permission;
		$this->load->view('tareas/list', $data);
	}
	public function getUsuariosBPM()
	{

		$parametros = $this->Bonitas->LoggerAdmin();
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "GET";
		$param = stream_context_create($parametros);
		$users = $this->Tareas->getUsuariosBPM($param);
		echo json_encode($users, true);
		//dump_exit($users);

	}

	// ver el usr dinamico
	public function ObtenerTareaBPM()
	{

		$userdata = $this->session->userdata('user_data');
		$usrId = $userdata[0]['usrId'];     // guarda usuario logueado
		// PONER EL ID DE USUARIO DINAMICO!!!!!!
		$idTarBonita = $this->input->post('idTarBonita');

		$estado = array(
			"assigned_id" => $usrId
		);

		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "GET";
		$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->tomarTarea($idTarBonita, $param);

		return $response;
	}
	// Trae datos de BPM para notif estandar
	public function getDatosBPM($idTarBonita)
	{

		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "GET";

		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->getDatosBPM($idTarBonita, $param);

		return $response;
	}
	// devuelve id de ot por caseId
	public function getIdOTPorCaseId()
	{
		$caseId = $this->input->post('caseId');
		$response = $this->Tareas->getIdOTPorCaseId($caseId);
		echo json_encode($response);
	}
	// Estado cuenta BOTON HECHO
	public function estadoCuenta()
	{

		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('estado');
		$estado = array(
		  //"estadoCuentaClienteOk"	=>	"$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
		//$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->estadoCuenta($idTarBonita, $param);
		echo json_encode($result);
	}
	// Estado cuenta
	public function estadoCuentaOk()
	{

		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('estado');
		$estado = array(
			"estadoCuentaClienteOk" => "$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
		$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->estadoCuentaOk($idTarBonita, $param);
		echo json_encode($result);
	}
	// Esperando Regularizacion
	public function esperandoRegularizacion()
	{

		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('espera');
		$espera = array(
			"seguirEsperandoRegularizacion" => "$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
		$parametros["http"]["content"] = json_encode($espera);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->esperandoRegularizacion($idTarBonita, $param);
		echo json_encode($result);
	}
	// Precisa Anticipo
	public function precisaAnticipo()
	{

		$idTarBonita = $this->input->post('idTarBonita');
		$valor = $this->input->post('precisa');
		$precisa = array(
			"precisaAnticipo" => "$valor"
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
		$parametros["http"]["content"] = json_encode($precisa);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->precisaAnticipo($idTarBonita, $param);
		echo json_encode($result);
	}
	public function GuardarComentario()
	{
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
	public function getIdTareaTraJobs($idTarBonita)
	{

		try {
			$metodo = "GET";
			$parametros = $this->Bonitas->LoggerAdmin();
			$param = stream_context_create($parametros);
			$idTJobs = $this->Tareas->getIdTareaTraJobs($idTarBonita, $param);
		} catch (Exception $e) {
			$idTJobs = 0;
			echo 'Excepción capturada: ', $e->getMessage(), "\n";
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
	public function terminarTarea()
	{

		// PONER EL ID DE USUARIO DINAMICO!!!!!!
		$idTarBonita = $this->input->post('idTarBonita');

		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
		//$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->terminarTarea($idTarBonita, $param);

		echo json_encode($response);
	}
	public function terminarTareaStandarenBPM()
	{

		$idTarBonita = $this->input->post('idTarBonita');
		$id_listarea = $this->input->post('id_listarea');
	 	// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
	 	// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
	 	// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->terminarTareaStandarenBPM($idTarBonita, $param);

		 // guarda el taskId de BPM en tbl_listareas
		if ($this->input->post('esTareaStd') == 1) {
			$resp = $this->Tareas->updateTaskEnListarea($id_listarea, $idTarBonita);
		}

		echo json_encode($response);
	}
	// Trae id de ot por id de BPM
	public function getIdOT()
	{
		$idTarBonita = $this->input->post('idTarBonita');
		$response = $this->Tareas->getIdOtPorIdBPM($idTarBonita);
		//dump_exit($response);
		echo json_encode($response);
	}
	// terminar planifica
	public function terminarPlanificacion()
	{
		$idTarBonita = $this->input->post('idTarBonita');
		$idOrdenTrabajo = $this->Tareas->getIdOtPorIdBPM($idTarBonita);
		$tipo_tarea = "ordenTrabajo" . $this->input->post('tipo_tarea');

		$idOT = array(
			$tipo_tarea => $idOrdenTrabajo
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
		$parametros["http"]["content"] = json_encode($idOT);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->terminarPlanificacion($idTarBonita, $param);
		echo json_encode($response);
	}
	//TODO: AGRAGUE ESTE METODO
	public function terminarAsigPersPlanificacion()
	{
		$idTarBonita = $this->input->post('idTarBonita');
		$idOT = $this->input->post('idOT');
		//var_dump($idTarBonita);
		//dump_exit($idOT);
		// $idOT = array (
		// 	"ordenTrabajoDiagnostico"	=>	$idOT
		// );
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "POST";
		//$parametros["http"]["content"] = json_encode($idOT);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->terminarPlanificacion($idTarBonita, $param);
		echo json_encode($response);

	}
	// Usr Toma tarea en BPM (Vista de planificacion)
	public function tomarTareaPlanificacion()
	{

		$userdata = $this->session->userdata('user_data');
		$usrId = $userdata[0]['usrId'];     // guarda usuario logueado

		$idTarBonita = $this->input->post('idTarBonita');

		$estado = array(
			"assigned_id" => $usrId
		);

		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();

		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "PUT";
		$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response['respRest'] = $this->Tareas->tomarTarea($idTarBonita, $param);

		$idPedido = $this->input->post('idPedido');
		$cod_interno = $this->input->post('cod_interno');
		$detalle = $this->input->post('detalle');
		$tipo_tarea = $this->input->post('tipo_tarea');
		// Valida exitencia y genera OT inicial
		//if (!$this->Tareas->validarEstOT($idTarBonita,$idPedido)) {
		$result = $this->Tareas->validarEstOTporCodInterno($cod_interno, $tipo_tarea);
		if (!$this->Tareas->validarEstOTporCodInterno($cod_interno, $tipo_tarea)) {
				//echo "NOOO hay orden guardada";
			$this->Tareas->setOTInicial($idTarBonita, $idPedido, $cod_interno, $detalle, $tipo_tarea);
			$insert_id = $this->db->insert_id();
			if ($tipo_tarea != "Diagnostico") $this->Tareas->Programar_Tareas_Formulario($idPedido, $insert_id, $tipo_tarea);
		} else {
			$insert_id = 0;
		}
		$response['resInsert'] = $insert_id;
		echo json_encode($response);
	}
	// Usr Toma tarea en BPM (Vistas tareas comunes)
	public function tomarTarea()
	{
		$userdata = $this->session->userdata('user_data');
		$usrId = $userdata[0]['usrId'];     // guarda usuario logueado
		//dump_exit($usrId);
		$idTarBonita = $this->input->post('idTarBonita');
		$estado = array(
			"assigned_id" => $usrId
		);
 		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
 		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "PUT";
		$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->tomarTarea($idTarBonita, $param);
		echo json_encode($response);
	}
	// Usr Toma tarea en BPM   CAMBIAR EL USR POR USR LOGUEADO !!!!!!!
	public function soltarTarea()
	{

		$idTarBonita = $this->input->post('idTarBonita');

		$estado = array(
			"assigned_id" => ""
		);
		// trae la cabecera
		$parametros = $this->Bonitas->conexiones();
		// Cambio el metodo de la cabecera a "PUT"
		$parametros["http"]["method"] = "PUT";
		$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$response = $this->Tareas->soltarTarea($idTarBonita, $param);
		echo json_encode($response);
	}
	// trae datos para llenar notificaion estandar y formulario asociado
	public function detaTarea($permission, $idTarBonita)
	{

			//OBTENER DATOS DE TAREA SELECCIONADA DESDE BONITA
		$data['TareaBPM'] = json_decode($this->getDatosBPM($idTarBonita), true);

			//Verificar si es tarea Std
		$data['infoTarea'] = $this->Tareas->getDatosTarea($data['TareaBPM']["displayName"]);

		$id_listarea = 0;

		if ($data['infoTarea']['visible'] == 1) {// Pregunta si es Una TareasSTD
			$id_listarea = $this->getIdTareaTraJobs($idTarBonita);
		}

			// Trae id_listarea desde BPM sino '0' si la tarea es solo de BPM(no form asociado)


		$idOT = $this->Tareas->getIdOtPorIdBPM($idTarBonita);

			// trae id de pedido trabajo por caseId para guardar en form inicial
		$caseId = $data['TareaBPM']["caseId"];
		$ptr_id = $this->Tareas->getPtrIdPorCaseId($caseId);
			//var_dump($ptr_id);
			//dump_exit($ptr_id);
			//si trae id_listarea (TJobs)
		if ($id_listarea != 0) {
				// trae id de form asociado a tarea std (las tareas de BPM se cargaran para asociar a form).

			$data['id_listarea'] = $id_listarea;

			$idTareaStd = $this->Tareas->getTarea_idListarea($id_listarea);
			$idForm = $this->Tareas->getIdFormPorIdTareaSTD($idTareaStd); // si es 0 no hay form asociado

				// si hay id de formulario
			if ($idForm != 0) {
					// confirma si hay form guardado de esa listarea
				if ($this->Tareas->getEstadoForm($idTarBonita)) {
						//echo "hay form guardado";
				} else {
						//echo "no hay form guradado";
						// guarda form inicial vacio
					$this->Tareas->setFormInicial($idTarBonita, $idForm, $ptr_id);
				}
			}

				// si hay formulario
			if ($idForm != 0) {
				$data['idForm'] = $idForm;
					// carga datos del formulario para modal
				$data['form'] = $this->Tareas->get_form($idTarBonita, $idForm);
			} else {
				$data['idForm'] = 0;
			}

			//solo tarea BPM con o sin formulario
		} else {

			$nomtarea = $data['TareaBPM']["displayName"];
			$id = $this->Tareas->getidFormTareaBPM($nomtarea);

			if ($id) {
				$idForm = $id[0]['form_asoc'];

						// si hay id de formulario
				if ($idForm != 0) {
							// confirma si hay form guardado de esa listarea
					if ($this->Tareas->getEstadoForm($idTarBonita)) {
								//echo "hay form guardado";
					} else {

						$this->Tareas->setFormInicial($idTarBonita, $idForm, $ptr_id);
					}
				}

				$data['idForm'] = $id[0]['form_asoc'];
				$data['form'] = $this->Tareas->get_form($idTarBonita, $idForm);

			} else {

				$data['idForm'] = 0;
				$idForm = 0;
			}

		}
				// si es 0 no hay form asociado
			//dump_exit($idForm);
		$data['permission'] = $permission;
		$data['idOT'] = $idOT;
			//OBTENER DATOS DE TAREA SELECCIONADA DESDE BONITA
		$data['TareaBPM'] = json_decode($this->getDatosBPM($idTarBonita), true);
		$caseId = $data['TareaBPM']["caseId"];
			//$caseId =75;
			// trae id pedido de trabajo desde trj_pedido_trabajo
		$pedTrab = $this->Tareas->getIdPedTrabajo($caseId);
			//var_dump($pedTrab[0]['petr_id']);
		$data['idPedTrabajo'] = $pedTrab[0]['petr_id'];
		$data['codInterno'] = $pedTrab[0]['cod_interno'];

		$data['datos'] = $this->Tareas->detaTareas($id_listarea);

		$data['idTarBonita'] = $idTarBonita;

			//FLEIVA COMENTARIOS
		$data['comentarios'] = $this->ObtenerComentariosBPM($caseId);
		$data['timeline'] = $this->load->view('tareas/timeline/view',array('timeline'=>$this->ObtenerLineaTiempo($caseId)),true);
		//	$data['TareaBPM']['displayName'] = 'Análisis financiero y emisión de reportes';
		switch ($data['TareaBPM']['displayName']) {

			case 'Evaluación del estado de cuenta del cliente':
				$this->load->view('tareas/view_1', $data);
				break;
			case 'Entender si seguir esperando':
				$this->load->view('tareas/view_2', $data);
				break;					
			case 'Análisis financiero y emisión de reportes':
				$this->load->view('tareas/view_3', $data);
				break;
			case 'Evalua y envia presupuesto al cliente':
				$this->load->model('AceptacionTrabajos');
				$data['presupuesto'] = $this->AceptacionTrabajos->ObtenerPresupuesto($pedTrab[0]['petr_id']);
				$this->load->view('tareas/view_4', $data);
				break;
			case 'Planificar Diagnóstico':
				$data['tipo_tarea'] = 'Diagnostico';
				$data['nombre_boton_planificacion'] = 'Orden de Trabajo';						
				$this->load->view('tareas/view_planificacion', $data);
				break;
			case 'Programar Armado':
				$data['tipo_tarea'] = 'Armado';
				$data['nombre_boton_planificacion'] = 'Programar Armado';					
				$this->load->view('tareas/view_planificacion', $data);
				break;
			case 'Programar Reparación':
				$data['tipo_tarea'] = 'Reparacion';
				$data['nombre_boton_planificacion'] = 'Programar Reparacion';					
				$this->load->view('tareas/view_planificacion', $data);
				break;
			case 'Asignar personal a Planificación':		//con comentarios listo
				$ot = $this->Tareas->getOrdenTrabajoPorCaseId($caseId,'Diagnostico');
				$data['idOT'] = $ot['id_orden'];
				$data['tipo_tarea'] = 'Diagnostico';
				$this->load->view('tareas/view_asigPersPlanif', $data);
				break;				
				case 'Revisión Diagnóstico':
				$this->load->model('Preinformes');
				$data['formularios'] = $this->Preinformes->ObtenerIdFormulariosCompletados($data['idPedTrabajo']);
				$data['list']   = $this->Tareas->tareasPorSector($caseId,'jefe');
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],2500);
				$data['lita_id_adjuntos'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],10500);
				$data['lita_id_infoTec'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],7000);
				$this->load->view('tareas/view_8',$data);
				$this->load->view('tareas/scripts/tarea_std');
				$this->load->view('tareas/scripts/abm_forms');
				$this->load->view('tareas/scripts/validacion_forms');
				$this->load->view('tareas/scripts/preinforme');
				break;
			case 'Cotización de trabajo Industrial':
				$this->load->model('Preinformes');
				$this->load->model('Forms');
				$data['formularios'] = array(2500);
				$data['list_forms'] = $this->PedidoTrabajos->Lista_Formularios_Pedido($data['idPedTrabajo']);
				$data['lita_id_adjuntos'] = $this->Forms->obtenerForm($data['idPedTrabajo'],10500)['lita_id'];
				$data['list'] = $this->Notapedidos->notaPedidosxId($data['codInterno']);
				$this->load->view('tareas/view_9', $data);
				$this->load->view('tareas/scripts/abm_forms');
				$this->load->view('tareas/scripts/abm_forms');
				$this->load->view('tareas/scripts/validacion_forms');
				break;
			case 'Confección de Presupuesto Industrial':
				$data['cotizacion'] = $this->Tareas->ObtenerCotizacion($data['idPedTrabajo']);
				$this->load->view('tareas/view_10', $data);
				break;
			case 'Revisión Diagnóstico por el Coordinador':
				$data['idForm'] = 10500;
				$data['form']   = $this->Tareas->get_form($idTarBonita,$idForm);
				
				$data['list']   = $this->Tareas->tareasPorSector($caseId);
				$this->load->view('tareas/view-revision-diagnostico-coordinador', $data);
				break;
			case 'Analiza Vigencia del presupuesto aprobado':
				$this->load->view('tareas/view_11',$data);
				break;
			case 'Asignar Recursos para Reparación':
				$ot = $this->Tareas->getOrdenTrabajoPorCaseId($caseId,'Reparacion');
				$data['idOT'] = $ot['id_orden'];
				$data['tipo_tarea'] = 'Reparacion';
				$this->load->view('tareas/view_asigPersPlanif', $data);
			break;
			case 'Asignar Recursos para Armado':
				$ot = $this->Tareas->getOrdenTrabajoPorCaseId($caseId,'Armado');
				$data['idOT'] = $ot['id_orden'];
				$data['tipo_tarea'] = 'Armado';
				$this->load->view('tareas/view_asigPersPlanif', $data);
			break;
			case 'Confecciona OCs para compra de respuestos':
				$this->load->view('tareas/view_12',$data);
				break;
			case 'Autoriza OCs para compra de repuestos':
				$data['idForm'] = 8000;
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],$data['idForm']);
				$data['Oc_repuesto'] = $this->Tareas->ObtenerOc_repuesto($data['idPedTrabajo']);
				$this->load->view('tareas/view_13',$data);
				break;
			case 'Revisa OCs para compra de repuestos':
				$data['idForm'] = 8000;
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],$data['idForm']);
				$data['Oc_repuesto'] = $this->Tareas->ObtenerOc_repuesto($data['idPedTrabajo']);
				$this->load->view('tareas/view_13',$data);
				break;
			case 'Solicitar envio de repuestos al cliente':
				$this->load->view('tareas/view_14',$data);
				break;
			case 'Emite OCs a proveedores de repuestos':
				$data['Oc_repuesto'] = $this->Tareas->ObtenerOc_repuesto($data['idPedTrabajo']);
				$this->load->view('tareas/view_15', $data);
				break;
			case 'Recepción y control de repuestos del cliente para rectificación':
				$data['idForm'] = 9500;
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],$data['idForm']);
				$data['repuestocliente'] = $this->Tareas->ObtenerRepuesto1($data['idPedTrabajo']);
				$this->load->view('tareas/view_17',$data);
				break;
			case 'Recepción y control de repuestos del cliente para armado':
				$data['idForm'] = 9500;
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],$data['idForm']);
				$data['repuestocliente'] = $this->Tareas->ObtenerRepuesto1($data['idPedTrabajo']);
				$this->load->view('tareas/view_17',$data);
				break;
			case 'Emite OCs a proveedores de repuestos':
				$data['Oc_repuesto'] = $this->Tareas->ObtenerOc_repuesto($data['idPedTrabajo']);
				$this->load->view('tareas/view_15',$data);
				break;
			case 'Recepción y control de repuestos comprados para rectficación':
				$data['idForm'] = 9000;
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],$data['idForm']);
				$data['repuesto'] = $this->Tareas->ObtenerRepuesto($data['idPedTrabajo']);
				$this->load->view('tareas/view_16',$data);
				break;
			case 'Recepción y control de repuestos comprados para armado':
				$data['idForm'] = 9000;
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],$data['idForm']);
				$data['repuesto'] = $this->Tareas->ObtenerRepuesto($data['idPedTrabajo']);
				$this->load->view('tareas/view_16',$data);
				break;
			case 'Cotización, confección de presupuesto y envio al ciente de Trabajo Liviano':
				//$data['list'] = $this->PedidoTrabajos->Lista_Formularios_Pedido($data['idPedTrabajo']);
				$data['formularios'] = array(2500);
				$data['list'] = $this->Notapedidos->notaPedidosxId($data['codInterno']);
				$data['lita_id'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],6000);
				$data['lita_id_infoTec'] = $this->Tareas->get_lita_id($data['idPedTrabajo'],7000);
				$this->load->view('tareas/view_18',$data);
				$this->load->view('tareas/scripts/tarea_std');
				$this->load->view('tareas/scripts/abm_forms');
				$this->load->view('tareas/scripts/validacion_forms');
				$this->load->view('tareas/scripts/preinforme');
				break;
			case 'Expedición':
			    $this->load->view('tareas/view_exp', $data);
				break;
			default:
				$this->load->view('tareas/view_', $data);
			break;
		}
	}
	public function detaTareaRevisionDiagnosticoCoordinador()
	{
		$idTareaRevisionB = $this->input->post('idTareaRevisionB');
		$id_listarea = $this->input->post('id_listarea');

		// trae id de form asociado a tarea std (las tareas de BPM se cargaran para asociar a form).
		$idTareaStd = $this->Tareas->getTarea_idListarea($id_listarea);
		$idForm = $this->Tareas->getIdFormPorIdTareaSTD($idTareaStd); // si es 0 no hay form asociado


		// // confirma si hay form guardado de esa listarea
		// //$this->Tareas->getEstadoForm($idTareaRevisionB);

		// // si hay formulario
		if ($idForm != 0) {
			$data['idForm'] = $idForm;
			$data['id_listarea'] = $id_listarea;
			// carga datos del formulario para modal
			$data['form'] = $this->Tareas->get_form($idTareaRevisionB, $idForm);
			//dump($data);
		} else {
			$data['idForm'] = 0;
		}
		//dump_exit($data);
		$response['html'] = $this->load->view('tareas/view-modal-form-revDiagCoord', $data, true);
		echo json_encode($response);
	}


	public function rehacerTareaIds()
	{
		$idsTareaTrazajob = $this->input->post('idsTareaTrazajob');
		$idTarBonita = $this->input->post('idTarBonita');
		$parametros = $this->Bonitas->conexiones();
		$response = $this->Tareas->rehacerTareaIds($parametros, $idsTareaTrazajob, $idTarBonita);
		echo json_encode($response);
	}

	//////////////  form dinamico  //////////////////

	// trae valores validos para llenar componentes del formulario
	public function getValValido()
	{

		$idForm = $this->input->post('idForm');
		//dump_exit($idForm);
		$response = $this->Tareas->getValValidos($idForm);
		echo json_encode($response);
	}

	// trae el valor de la imagen guardada
	public function getImgValor()
	{
		$idForm = $this->input->post('idForm');
		$idPedTrabajo = $this->input->post('idPedTrabajo');
		$response = $this->Tareas->getImgValor($idForm, $idPedTrabajo);
		//$response = $this->Tareas->getImgValor($idForm);
		echo json_encode($response);
	}

	public function GuardarCotizacion()
	{
		$idPedTrabajo = $this->input->post('idPedTrabajo');
		$config = [
			'upload_path' => "./assets/adjuntos",
			'allowed_types' => "*"
		];
		$this->load->library("upload", $config);
		if ($this->upload->do_upload('cotizacion')) {
			$documento = array("upload_data" => $this->upload->data());
			$data = array(
				'NOM_VAR' => 'cotizacion',
				'VALOR' => "./assets/adjuntos/" . $documento['upload_data']['file_name']
			);
			$resultBD = $this->Tarea->GuardarCotizacion($idPedTrabajo, $data);
			if ($resultBD == false) {
				echo 'error';
			} else {
				echo base_url() . $data['VALOR'];
			}

		} else {
			echo $this->upload->display_errors();
		}

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
	public function validarFormGuardado()
	{

		$cont = 0;
		$obligArrayIds = $this->input->post('obligArrayIds');
		$id_listarea = $this->input->post('id_listarea');

		foreach ($obligArrayIds as $idValor) {

			$result = $this->Tareas->validarFormGuardado($idValor, $id_listarea);
			if (!$result) {
				$cont++;
			}
		}
		if ($cont > 0) {
			$response = false;
		} else {
			$response = true;
		}
		echo json_encode($response);
	}


	// guarda  form commpletado (revisar no funciona bien)
	public function guardarForm()
	{

		//  array con id de dato->valor(dato es FOCO_ID)
		$datos = $this->input->post();
		//dump_exit($datos);
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
				$data = $this->Tareas->getDatos($key);
				// Agrego datos adicionales al formulario
				$data['USUARIO'] = $usrId;

				// Solo si los valores vienen con info guarda
				if (($value != "") || ($value != -1)) {
					$data['VALOR'] = $value;
				}
				// si el valor es -1 guarda Seleccione..
				if (($value == -1)) {
					$data['VALOR'] = 'Seleccione...';
				}

				// Si un componente viene "" o -1  o "notilde" guarda 0 (no validado)
				if (($value == "") || ($value == -1) || ($value == "notilde")) {
					$data['VALIDADO'] = 0;
				} else {
					$data['VALIDADO'] = 1;
				}

				$tipoComp = $data['TIDA_NOMBRE'];
				// Si el tipo de dato es "input_archivo"
				if ($tipoComp == "input_archivo") {
					// si el value no esta vacio
					if ($value != "") {
						$config = [
							'upload_path' => './assets/imgformularios/',
							'allowed_types' => '*'
						];
						$this->load->library("upload", $config);
						if ($this->upload->do_upload($key)) {
							echo "subio ok";
						} else {
							$this->upload->display_errors('<p>', '</p>');
							echo "error en subida";
						}
						$dataImag = array("upload_data" => $this->upload->data());
						$nom = $dataImag['upload_data']['file_name'];
						$data['VALOR'] = "assets/imgformularios/" . $nom;

					} else {
						echo $data['VALOR'];
					}
				}

				$this->Tareas->UpdateForm($data, $key); // key es FOCO_ID

				$i++;
			}

		}
	}

	// Codifica nombre de imagen para no repetir en servidor
	// formato "12_11_2018-05-21-15-26-24" id_listarea_usrId_fecha(año-mes-dia-hora-min-seg)
	function codifNombre($listarea, $usrId)
	{
		$guion = '_';
		$guion_medio = '-';
		$hora = date('Y-m-d H:i:s');// hora actual del sistema
		$delimiter = array(" ", ",", ".", "'", "\"", "|", "\\", "/", ";", ":");
		$replace = str_replace($delimiter, $delimiter[0], $hora);
		$explode = explode($delimiter[0], $replace);

		$strigHora = $explode[0] . $guion_medio . $explode[1] . $guion_medio . $explode[2] . $guion_medio . $explode[3];

		$nomImagen = $listarea . $guion . $usrId . $guion . $strigHora;

		return $nomImagen;
	}

	function ObtenerComentariosBPM($caseId)
	{
		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);
		return $this->Tareas->ObtenerComentariosBPM($caseId, $param);
	}

	public function ObtenerLineaTiempo($caseId)
	{
		$parametros = $this->Bonitas->LoggerAdmin();
		$parametros["http"]["method"] = "GET";
		$param = stream_context_create($parametros);
		$data['listAct'] = $this->Overviews->ObtenerActividades($caseId, $param);
		$data['listArch'] = $this->Overviews->ObtenerActividadesArchivadas($caseId, $param);
		return $data;
	}

	public function GuardarValorRepuesto1(){
		$data = $this->input->post();
		$result = $this->Tareas->GuardarValorRepuesto1($data);
		echo json_encode($result);
	}

	public function GuardarValorRepuesto()
	{
		$data = $this->input->post();
		$result = $this->Tareas->GuardarValorRepuesto($data);
		echo json_encode($result);
	}

	public function GuardarValorOcRepuesto()
	{
		$data = $this->input->post();
		$result = $this->Tareas->GuardarValorOcRepuesto($data);
		echo json_encode($result);
	}

	public function GuardarValorPresupuesto()
	{
		$data = $this->input->post();
		$result = $this->Tareas->GuardarValorPresupuesto($data);
		echo json_encode($result);
	}

	public function GuardarValorCotizacion()
	{
		$data = $this->input->post();
		$result = $this->Tareas->GuardarValorCotizacion($data);
		echo json_encode($result);
	}
	public function GuardarValorInfoTecnico()
	{
		$data = $this->input->post();
		$result = $this->Tareas->GuardarValorInfoTecnico($data);
		echo json_encode($result);
	}
	public function ValidarObligatorios()
	{
		$form_id = $this->input->post("form_id");
		$petr_id = $this->input->post("petr_id");
		$result = $this->Tareas->ValidarObligatorios($form_id, $petr_id);
		echo $result['result'];
	}
	public function Prespuesto_Vigente()
	{
		$idTarBonita = $this->input->post('idTarBonita');
		$estado = array(
			"presupuestoVigente" => $this->input->post('estado')
		);
		$parametros = $this->Bonitas->conexiones();
		$parametros["http"]["method"] = "POST";
		$parametros["http"]["content"] = json_encode($estado);
		// Variable tipo resource referencia a un recurso externo.
		$param = stream_context_create($parametros);
		$result = $this->Tareas->Prespuesto_Vigente($idTarBonita, $param);
		echo json_encode($result);

	}
	// public function Programar_Tareas_Formulario(){
	// 	$petrid = $this->input->post("petrid");
	// 	$ordenid = $this->input->post("ordenid");
	// 	$tipo = $this->input->post("tipo");
	// 	echo $this->Tareas->Programar_Tareas_Formulario($petrid,$ordenid,$tipo);
	// }


}
?>