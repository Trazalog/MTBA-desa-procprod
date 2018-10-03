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
	// public function getIdTareaTraJobs(){

		// 	$metodo = "POST";

		// 	$idBonita = $this->input->post();
		// 	$parametros = $this->Bonitas->conexiones();
		// 	$param = stream_context_create($parametros);
		// 	$idTJobs = $this->Tareas->getIdTareaTraJobs($idBonita,$param);

		// 	//echo "id de bonita: ";
		// 	//dump_exit($idTJobs);
		// 	echo $idTJobs;
		// }	

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
	
	// Devuelve el id de tareas de trazaj segun id_tarea bonita para detatareas
	// NO TOCAR
	public function getIdTareaTraJobs($idTarBonita){
		//$metodo = "POST";
		//$idBonita = $this->input->post();
		$parametros = $this->Bonitas->conexiones();
		$param = stream_context_create($parametros);
		$id_listarea = $this->Tareas->getIdTareaTraJobs($idTarBonita,$param);

		return $id_listarea;
	}	


	// trae datos para llenar notificaion estandar y formulario asociado
	public function detaTarea($permission, $idTarBonita,$estadoTarea, $nomTarea, $tareaDesc, $fechaCreacion){
		//dump_exit($fechaCreacion);

		// id listareas se corresponde con el id de tarea de BPM
		$id_listarea = $this->getIdTareaTraJobs($idTarBonita);


		// sino hay listarea es una tarea de BPM solamente(sin formulario)
		if ($id_listarea == "") {
			// sin formulario
			$idForm = 0;// 
		}else{
			// trae id de form asociado a tarea std.
			$idTareaStd = $this->Tareas->getTarea_idListarea($id_listarea);		
			$idForm = $this->Tareas->getIdFormPorIdTareaSTD($idTareaStd);
		}		

		// trae duracion estandar de tarea y numero de OT TraJs
		$otData = $this->Tareas->getOtNroyDurStdTarea($id_listarea);
		
		$data['permission'] = $permission;		
		$data['id_listarea']= $id_listarea;

		// Datos de la OT TJ
		$data['duracion_std'] = $otData[0]["duracion_std"];
		$data['nroOT'] = $otData[0]["nroOT"];

		// Datos de tarea en Bonita
		$data['idTarBonita'] = $idTarBonita;		
		$data['nomTarea'] = $nomTarea;
		$data['tareaDesc'] = $tareaDesc;
		$data['fechaCreacion'] = $fechaCreacion;
		$data['estadoTarea']= $estadoTarea;
		
		// id de formulario asociado a tarea
		$data['idForm']	= $idForm;	
		
		// si hay form asociado
		if($idForm != 0){

			// confirma si hay form guardado de esa listarea		
			if ($this->Tareas->getEstadoForm($id_listarea)) {
				
				//hay form guardado";
			}else{
				
				// no hay form, guarda form inicial vacio
				$this->Tareas->setFormInicial($id_listarea);
			}

			// carga el formulario para modal
			$data['form'] = $this->Tareas->get_form($id_listarea);
		
		}else{
			//sino hay form asociado carga un 0 en form
			$data['form']= 0;
		}		
		// echo "<pre>";	
		// var_dump($data);
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

	// trae el valor de la imagen guardada
	public function getImgValor(){
		$idForm = $this->input->post('idForm');
		$response = $this->Tareas->getImgValor($idForm);
		echo json_encode($response);
	}

	// verifica que el form tenga todos los campos validado en 1 
	public function validarFormGuardado(){
		
		$response = true;
		$obligArrayIds = $this->input->post('obligArrayIds');
		$id_listarea = $this->input->post('id_listarea');
		
		foreach ($obligArrayIds as $idValor) {
			
			$result = $this->Tareas->validarFormGuardado($idValor,$id_listarea);
			
			if ($result == $idValor) {	
				//echo "valor validado";
			}else{
				$response = $result;
			}
		}
		echo json_encode($response);
	}

	// guarda  form commpletado (revisar no funciona bien)
	public function guardarForm(){
		
		//  array con id de dato->valor
		$datos = $this->input->post();	
		//dump_exit($datos);
		echo "array en funcion";
		var_dump($datos);

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
				//$data['ORDEN'] = $i;

				// Solo si los valores vienen con info guarda
				if (($value != "") || ($value != -1) ) {
					
					$data['VALOR'] = $value;
				}
								
				// Si un componente viene "" o -1 guarda 0 (no validado)
				if( ($value == "") || ($value == -1) )  {
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