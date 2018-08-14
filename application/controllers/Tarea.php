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

	// Trae id de tarea de trazajobs segun id de tarea bonita
	public function getIdTareaTraJobs(){

		$metodo = "POST";

		$idBonita = $this->input->post();
		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);
		$idTJobs = $this->Tareas->getIdTareaTraJobs($idBonita,$param);

		//echo "id de bonita: ";
		//dump_exit($idTJobs);
		echo $idTJobs;
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
		
		// confirma si hay form guardado de esa listarea		
		if ($this->Tareas->getEstadoForm($id_listarea)) {
			//echo "hay form guardado";
		}else{
			//echo "no hay form guradado";
			// guarda form inicial vacio
			$this->Tareas->setFormInicial($id_listarea);
		}
			
		// carga el formulario para modal
		$data['form'] = $this->Tareas->get_form($id_listarea);
		$this->load->view('tareas/view_', $data);
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

	

//////////////  form dinamico  //////////////////

	// trae valores validos para llenar componentes del formulario
	public function getValValido(){

		$idForm = $this->input->post('idForm');
		$response = $this->Tareas->getValValidos($idForm);
		echo json_encode($response);		
	}

	// verifica que el form tenga todos los campos validado en 1 
	public function validarFormGuardado(){
		
		$id_listarea = $this->input->post('id_listarea');
		$response = $this->Tareas->validarFormGuardado($id_listarea);
		echo json_encode($response);
	}

	// guarda  form commpletado (revisar no funciona bien)
	public function guardarForm(){
		
		//  array con id de dato->valor
		$datos = $this->input->post();
		
		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado

        $listarea = $datos['id_listarea'];
        $idformulario = $datos['idformulario'];
        dump_exit($datos);

        $i = 1;// para guardar el orden de categorias, grupos y valores		
        $j = 0;
		foreach ($datos as $key => $value) {	
			
			// Si no son los primeros dos campos id listarea e id formulario
			if (($key != 'id_listarea') && ($key != 'idformulario')) {				
				//trae array con info de dato por id
				$data = $this->Tareas->getDatos($key);				
				echo "<pre>";
				//var_dump($key);
				//echo "  --  ";
				var_dump($data['TIDA_NOMBRE']);
				
				// Agrego datos adicionales al formulario
				$data['USUARIO'] = $usrId;
				//$data['ORDEN'] = $i;
				$data['VALOR'] = $value;
				//$data['FORM_ID'] = $idformulario;
				//$data['LITA_ID'] = $listarea;
				
				// Si un componente viene "" o -1 guarda 0 (no validado)
				if( ($value == "") || ($value == -1) )  {
					$data['VALIDADO'] = 0;
				}else{
					$data['VALIDADO'] = 1;
				}

				$tipoComp = $data['TIDA_NOMBRE'];
				
				
				// Si el tipo de dato es "input_archivo"
				if ($tipoComp == "input_archivo") {
					
					echo "hay un input";

					// IMAGEN SUBIDA
					//codifico nombre para guardar
					$nomcodif = $this->codifNombre($listarea, $usrId);    					

					// datos del archivo a subir en server
					$config = [
						"upload_path"   => "./assets/imgformularios",
						'allowed_types' => "png|jpg",
						'file_name'     => $nomcodif
					];

					$this->load->library("upload",$config);

					// si el campo del form con el id name corriente subio una img
					if ($this->upload->do_upload($key)) {
						//$data = array("upload_data" => $this->upload->data());
						//nombre para guardar en bd
						$nomcodif.$this->upload->data('file_ext');
						//dump_exit();
					}

				}



				 $this->Tareas->UpdateForm($data,$key); // key es VALO_ID
				$i++;
			}
				//var_dump($key);		
			
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