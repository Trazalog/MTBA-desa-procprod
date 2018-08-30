<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tareas extends CI_Model
{
	function __construct(){

		parent::__construct();
	}	
	// trae tareas de BPM
	function getTareas($param){
		
		$userdata = $this->session->userdata('user_data');
		$usrId= $userdata[0]["usrId"];
		//$tareas = file_get_contents(BONITA_URL.'API/bpm/humanTask?p=0&c=10&f=user_id%3D5', false, $param);		
		$resource = 'API/bpm/humanTask?p=0&c=1000&f=user_id%3D';
		$url = BONITA_URL.$resource.$usrId;
		$tareas = file_get_contents($url, false, $param);

		$tar = $this->AgregarDatos($tareas);

		return $tar;	
	}

	function AgregarDatos($tareas){
		//dump_exit($tareas);
		$tar = json_decode($tareas,true);
	
		foreach ($tar as $key => $value) {
			
			$caseId = $tar[$key]["caseId"];
			$datos = $this->getDatPedidoTrabajo($caseId);
			
			$tar[$key]['petr_id'] = $datos[0]['petr_id'];
			$tar[$key]['cod_interno'] = $datos[0]['cod_interno'];
		}
		
		return $tar;
	}
	// trae cod interno de pedido trabajo en funcion del caseId de BPM
	function getDatPedidoTrabajo($caseId){
		
		$this->db->select('trj_pedido_trabajo.petr_id,
							trj_pedido_trabajo.cod_interno');
		$this->db->from('trj_pedido_trabajo');
		$this->db->where('trj_pedido_trabajo.bpm_id',$caseId);
		
		$query = $this->db->get();

		if ($query->num_rows()!=0)
		{	
			return $query->result_array();			
		}
	}

	function getIdPedTrabajo($caseId){
		$this->db->select('trj_pedido_trabajo.petr_id,trj_pedido_trabajo.cod_interno');
		$this->db->from('trj_pedido_trabajo');		
		$this->db->where('trj_pedido_trabajo.bpm_id', $caseId);
		
		$query = $this->db->get();

		if ($query->num_rows()!=0){
			return $query->result_array(); 
			//return $query->row('petr_id');	
	 	}else{	
	 		return false;
	 	}
	}

	// Estado GENERICO
	function estadocuenta($idTarBonita,$param){
		
		$resource = 'API/bpm/userTask/';
		$com = '/execution';
		$url = BONITA_URL.$resource.$idTarBonita.$com;		
		// $response = file_get_contents(BONITA_URL.'API/bpm/userTask/78/execution',false, $param);
		$response = file_get_contents($url,false, $param);

		return $response;
	}
	// Estado de cuenta 
	function estadocuentaOk($idTarBonita,$param){
		
		$resource = 'API/bpm/userTask/';
		$com = '/execution';
		$url = BONITA_URL.$resource.$idTarBonita.$com;	
		file_get_contents($url,false, $param);
		$response = $this->parseHeaders( $http_response_header );
		
		return $response;
	}
	//Espera regularizacion
	function esperandoRegularizacion($idTarBonita,$param){
		//$response = file_get_contents(BONITA_URL.'API/bpm/userTask/78/execution',false, $param);

		$resource = 'API/bpm/userTask/';
		$com = '/execution';
		$url = BONITA_URL.$resource.$idTarBonita.$com;	
		$response = file_get_contents($url,false, $param);

		return $response;
	}
	//Precisa Anticipo
	function precisaAnticipo($idTarBonita,$param){
		//$response = file_get_contents(BONITA_URL.'API/bpm/userTask/78/execution',false, $param);

		$resource = 'API/bpm/userTask/';
		$com = '/execution';
		$url = BONITA_URL.$resource.$idTarBonita.$com;	
		$response = file_get_contents($url,false, $param);

		return $response;
	}

	//obtener Comentarios
	function ObtenerComentariosBPM($caseId,$param){
		$processInstance = 'processInstanceId%3D'.$caseId;
		$comentarios = file_get_contents(BONITA_URL.'API/bpm/comment?f='.$processInstance.'&o=postDate%20DESC&p=0&c=200&d=userId',false,$param);
		return json_decode($comentarios,true);
	}
	//Guardar Comentarios
	function GuardarComentarioBPM($param){
		$respuesta = file_get_contents(BONITA_URL.'API/bpm/comment',false,$param);
		return $respuesta;
	}
	
	// Terminar Tarea
	function terminarTarea($idTarBonita,$param){
		
		$method = '/execution';
		$resource = 'API/bpm/userTask/';
		$url = BONITA_URL.$resource.$idTarBonita.$method;
		file_get_contents($url, false, $param);			
		$response = $this->parseHeaders( $http_response_header );
		return $response;
	}

	// Tomar Tareas 
	function tomarTarea($idTarBonita,$param){
	
		try {
			$resource = 'API/bpm/humanTask/';
			$url = BONITA_URL.$resource.$idTarBonita;		

			file_get_contents($url, false, $param);
			$response = $this->parseHeaders( $http_response_header );
			 
			return $response;
		}catch (Exception $e) {
			var_dump($e->getMessage());
		 }		
	}	

	// Soltar Tareas 
	function soltarTarea($idTarBonita,$param){

		$resource = 'API/bpm/humanTask/';
		$url = BONITA_URL.$resource.$idTarBonita;
		file_get_contents($url, false, $param);
		$response = $this->parseHeaders( $http_response_header );
		return $response;
	}

	// toma la respuesta del server y devuelve el codigo de respuesta solo
	function parseHeaders( $headers ){
		$head = array();
		foreach( $headers as $k=>$v ){
			$t = explode( ':', $v, 2 );
			if( isset( $t[1] ) )
				$head[ trim($t[0]) ] = trim( $t[1] );
			else{
				$head[] = $v;
				if( preg_match( "#HTTP/[0-9\.]+\s+([0-9]+)#",$v, $out ) )
					$head['reponse_code'] = intval($out[1]);
			}
		}
		return $head;
	}






	// Devuelve el id de tareas de trazaj correspond al id_tarea bonita para detatareas
	// NO TOCAR
	function getIdTareaTraJobs($idBonita,$param){
		
		$urlResource = 'API/bpm/activityVariable/';
		$idListEnBPM = '/trazajobsTaskId';

		try {
			$idTJ = file_get_contents(BONITA_URL.$urlResource.$idBonita.$idListEnBPM , false, $param);
			$idTJobs = json_decode($idTJ,true); //sin true no se puede acceder		
			$id_listarea = $idTJobs["value"];
		} catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
			$id_listarea = 0;
		} 	
		
		return $id_listarea;
	}	 

	// devuelve detalle de tareas para notificacion standart a partir de id_listarea
	function detaTareas($id_listarea){			

	 	$this->db->select('tbl_listarea.id_listarea,
							tbl_listarea.id_orden,
							tareas.duracion_std,
							tbl_listarea.tareadescrip,
							tbl_listarea.id_tarea,
							tbl_listarea.id_usuario,
							tbl_listarea.estado,
							tbl_listarea.fecha');
	 	$this->db->from('tbl_listarea');
		$this->db->join('tareas', 'tareas.id_tarea = tbl_listarea.id_tarea');
		$this->db->where('tbl_listarea.id_listarea', $id_listarea);
		$query = $this->db->get();

		if ($query->num_rows()!=0){
	 		return $query->result_array();	
	 	}else{	
	 		return false;
	 	}
	}

	function getOtNroyDurStdTarea($id_listarea){
		

		$this->db->select('tbl_listarea.id_listarea,
							tbl_listarea.id_orden,
							tbl_listarea.id_tarea,
							tbl_listarea.duracion_prog,
							orden_trabajo.nro AS nroOT,
							tareas.duracion_std');
		$this->db->from('tbl_listarea');
		$this->db->join('orden_trabajo', 'orden_trabajo.id_orden = tbl_listarea.id_orden');
		$this->db->join('tareas', 'tareas.id_tarea = tbl_listarea.id_tarea');

		$this->db->where('tbl_listarea.id_listarea',$id_listarea);
		$query = $this->db->get();

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }
	}

	//devuelve el id de tarea estandar asociada a listarea
	function getTarea_idListarea($id_listarea){
		
		$this->db->select('tbl_listarea.id_tarea');
		$this->db->from('tbl_listarea');
		$this->db->where('tbl_listarea.id_listarea', $id_listarea);
		$query = $this->db->get();

		if ($query->num_rows()!=0){
	 		return $query->row('id_tarea');	
	 	}else{	
	 		return false;
	 	}
	}


	function getDatosBPM($idTarBonita,$param){

		// $response = file_get_contents(BONITA_URL.'API/bpm/humanTask/54', false, $param);
		// echo "response: ";
		// return $response;

		$urlResource = BONITA_URL.'API/bpm/humanTask/';
		
		$data = file_get_contents($urlResource.$idTarBonita , false, $param);
		
		
		return $data;
	}

//////////////  form dinamico  //////////////////

	// verifica que el form tenga todos los campos validado en 1 
	function validarFormGuardado($idValor,$id_listarea){		

		// $this->db->select('frm_formularios_completados.VALO_ID');
		// $this->db->from('frm_formularios_completados');
		// $this->db->where('frm_formularios_completados.VALIDADO', 0);	// no validado 
		// $this->db->where('frm_formularios_completados.VALO_ID', $idValor);
		// $this->db->where('frm_formularios_completados.LITA_ID', $id_listarea);
		// $query = $this->db->get();

	 	// if ($query->num_rows() > 0){
	 	// 	return $query->row('VALO_ID');	
	 	// }else{	
	 	// 	return 0;
	 	// }

		// cuenta los campos que estan en 0 y son obligatorios	
		 $sql ="SELECT
		 COUNT(*) as novalidos
		 FROM
		 frm_formularios_completados
		 WHERE
		 frm_formularios_completados.LITA_ID = $id_listarea AND
		 VALIDADO = 0";

		 $query = $this->db->query($sql);

		 if( $query->row('novalidos') > 0 ){
	    	
	     	return false;
	     }
	     else{
	     	return true;
	     }
	}

	// Comprueba si hay form guardado asoc a id de orden y de tarea
	function getEstadoForm($bpm_task_id){
		$this->db->select('frm_formularios_completados.LITA_ID');
		$this->db->from('frm_formularios_completados');
		$this->db->where('frm_formularios_completados.LITA_ID', $bpm_task_id);
		$query = $this->db->get();
		
		if ($query->num_rows()>0){
	 		return true;	
	 	}else{	
	 		return false;
	 	}
	}

	// Trae form asoc a id de tarea
	function getFormTarea($id_tarea){
		
		$this->db->select('tareas.form_asoc');
		$this->db->from('tareas');		
		$this->db->where('tareas.id_tarea', $id_tarea);
		
		$query = $this->db->get();

		if ($query->num_rows()!=0){
	 		return $query->row('form_asoc');	
	 	}else{	
	 		return false;
	 	}
	}

	// Devuelve form asociado a una tarea std
	function getIdFormPorIdTareaSTD($idTareaStd){		

		$this->db->select('tareas.form_asoc');
		$this->db->from('tareas');
		$this->db->where('tareas.id_tarea', $idTareaStd);
		$query = $this->db->get();

		if ($query->num_rows()!=0){
	 		return $query->row('form_asoc');	
	 	}else{	
	 		return 0;
	 	}
	}

	// devuelve id tarea y form asociado por nomb de tarea BPM
	function getidFormTareaBPM($nomtarea){
		
		$this->db->select('tareas.id_tarea,
							tareas.form_asoc');
		$this->db->from('tareas');
		$this->db->where('tareas.descripcion', $nomtarea);
		$query = $this->db->get();

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }
	}

	// Trae form para dibujar pantalla (agregar where de id de form)
	function get_form($bpm_task_id,$idFormAsoc){
		//echo "id listarea en tareas get form: ";
		//var_dump($id_listarea);
		// con id listarea traigo el id de tarea estandar
		//$id_tarea = $this->getTarea_idListarea($id_listarea);
		//echo "id tarea: ";
		//var_dump($id_tarea);

		// con id de tarea estandar traigo form asociado
		//$idForm = $this->getFormTarea($id_tarea);
		//echo "id form: ";
		//var_dump($idForm);
		
		$sql = "SELECT
				frm_formularios_completados.FOCO_ID,
				frm_formularios_completados.FORM_NOMBRE AS nombre,
				frm_formularios_completados.CATE_NOMBRE AS nomCategoria,
				frm_formularios_completados.GRUP_NOMBRE AS nomGrupo,
				frm_formularios_completados.VALO_NOMBRE AS nomValor,
				frm_formularios_completados.TIDA_NOMBRE AS nomTipoDatos,
				frm_formularios_completados.VALOR AS valDefecto,
				frm_formularios_completados.VALO_ID AS idValor,
				frm_formularios_completados.FORM_ID AS form_id,
				frm_formularios_completados.REFERENCIA,
				frm_formularios_completados.FEC_CREACION,
				frm_formularios_completados.USUARIO,
				frm_formularios_completados.ORDEN,
				frm_formularios_completados.LITA_ID,
				frm_formularios_completados.VALIDADO,
				frm_valores.OBLIGATORIO AS obligatorio
				FROM
				frm_formularios_completados
				INNER JOIN frm_valores ON frm_valores.VALO_ID = frm_formularios_completados.VALO_ID
				WHERE frm_formularios_completados.FORM_ID = $idFormAsoc
				AND frm_formularios_completados.lita_id = $bpm_task_id
				ORDER BY ORDEN";

		$query= $this->db->query($sql);

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }
	}

	// Trae valores validos por ID de formularios
	function getValValidos($idForm){
		
		$sql = "SELECT
				frm_grupos.GRUP_ID,
				frm_valores.NOMBRE,
				frm_valores.VALO_ID As idValor,
				frm_valores_validos.VALOR,
				frm_valores_validos.VAPO_ID As idvalvalido
				FROM
				frm_valores_validos
				INNER JOIN frm_valores ON frm_valores_validos.VALO_ID = frm_valores.VALO_ID
				INNER JOIN frm_grupos ON frm_valores.GRUP_ID = frm_grupos.GRUP_ID
				INNER JOIN frm_categorias ON frm_grupos.CATE_ID = frm_categorias.CATE_ID

				WHERE frm_categorias.FORM_ID = $idForm";

		$query= $this->db->query($sql);

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }				
	}

	// devuelve array con id de valor y url de la imag
	function getImgValor(){
		$sql ="SELECT
				frm_formularios_completados.VALO_ID AS valoid,
				frm_formularios_completados.VALOR As valor
				FROM
				frm_formularios_completados
				WHERE
				frm_formularios_completados.FORM_ID = 1 AND
				frm_formularios_completados.TIDA_NOMBRE = 'input_archivo'
				";
		$query= $this->db->query($sql);

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }		
	}
// TODO: SAACR FORM ID = 1 
	// Trae configuracion de form inicial para guardar en frm_frm_completados
	function getFormInicial($idFormAsoc){
		// trae i de tarea estandar por id listarea
		//$id_tarea = $this->getTarea_idListarea($id_listarea);
		// trae id de form asociado a tarea
		
		//$idFormAsoc = $this->getFormTarea($id_tarea);


		$sql = "SELECT	
				form.form_id AS FORM_ID,
				form.nombre AS FORM_NOMBRE,
				form.fec_creacion AS FEC_CREACION,
				cate.NOMBRE AS CATE_NOMBRE,						
				grup.NOMBRE AS GRUP_NOMBRE,
				tida.NOMBRE AS TIDA_NOMBRE,	

				tida.TIDA_ID AS TIDA_ID,						
					
				valo.NOMBRE AS VALO_NOMBRE,	
				valo.VALO_ID AS VALO_ID,				
				valo.ORDEN AS ORDEN							
				FROM
				frm_formularios form, 
				frm_categorias cate, 
				frm_grupos grup ,  
				frm_tipos_dato tida,
				frm_valores valo
				where FORM.FORM_ID = CATE.FORM_ID 
				AND CATE.CATE_ID = GRUP.CATE_ID 
				AND GRUP.GRUP_ID = VALO.GRUP_ID 
				AND TIDA.TIDA_ID = VALO.TIDA_ID	
				AND form.form_id = $idFormAsoc 					
				ORDER BY cate.ORDEN,grup.ORDEN,valo.ORDEN";

		$query= $this->db->query($sql);

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }
	}

	// Guarda la configuracion inicial del formulario
	function setFormInicial($bpm_task_id,$idFormAsoc) { //$id_listarea){

		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado
        $i=0;
        $dat= array();

        // Trae la info del form sin valores validos desp se actualiza al guardar        
        $form = $this->getFormInicial($idFormAsoc); //$id_listarea);

        // Agrego id de usuario al array para insertar
        foreach ($form as $key) {

        	$key['USUARIO'] = $usrId; 
        	$key['LITA_ID'] = $bpm_task_id; //$id_listarea;      	
        	$i++;
        	$dat[$i] =  $key;
        }

        // echo "form inicial";
        // dump_exit($dat);


        $response = $this->db->insert_batch('frm_formularios_completados', $dat);       
	}

	// Arma array p/ insertar en frm_formularios_completados por ID de Valor
	function getDatos($idValor){

		// $sql ="SELECT
		// 		frm_formularios.form_id AS FORM_ID,
		// 		frm_formularios.nombre AS FORM_NOMBRE,
		// 		frm_categorias.NOMBRE AS CATE_NOMBRE,
		// 		frm_grupos.NOMBRE AS GRUP_NOMBRE,
		// 		frm_valores.NOMBRE VALO_NOMBRE,
		// 		frm_tipos_dato.NOMBRE AS TIDA_NOMBRE,
		// 		frm_valores_validos.VALOR As VALOR
		// 		FROM
		// 		frm_formularios
		// 		INNER JOIN frm_categorias ON frm_categorias.FORM_ID = frm_formularios.form_id
		// 		INNER JOIN frm_grupos ON frm_grupos.CATE_ID = frm_categorias.CATE_ID
		// 		INNER JOIN frm_valores ON frm_valores.GRUP_ID = frm_grupos.GRUP_ID
		// 		INNER JOIN frm_tipos_dato ON frm_valores.TIDA_ID = frm_tipos_dato.TIDA_ID
		// 		INNER JOIN frm_valores_validos ON frm_valores_validos.VALO_ID = frm_valores.VALO_ID
		// 		WHERE
		// 		frm_valores.VALO_ID = $idValor";

		$sql = "SELECT
				frm_formularios.form_id AS FORM_ID,
				frm_formularios.nombre AS FORM_NOMBRE,
				frm_categorias.NOMBRE AS CATE_NOMBRE,
				frm_grupos.NOMBRE AS GRUP_NOMBRE,
				frm_valores.NOMBRE VALO_NOMBRE,
				frm_tipos_dato.NOMBRE AS TIDA_NOMBRE				
				FROM
				frm_formularios
				INNER JOIN frm_categorias ON frm_categorias.FORM_ID = frm_formularios.form_id
				INNER JOIN frm_grupos ON frm_grupos.CATE_ID = frm_categorias.CATE_ID
				INNER JOIN frm_valores ON frm_valores.GRUP_ID = frm_grupos.GRUP_ID
				INNER JOIN frm_tipos_dato ON frm_valores.TIDA_ID = frm_tipos_dato.TIDA_ID	
				WHERE
				frm_valores.VALO_ID = $idValor";

		$query= $this->db->query($sql);

		$response = array();

		foreach ($query->result_array() as $row){
	        $response['FORM_ID'] = $row['FORM_ID'];
	        $response['FORM_NOMBRE'] = $row['FORM_NOMBRE'];
	        $response['CATE_NOMBRE'] = $row['CATE_NOMBRE'];
	        $response['GRUP_NOMBRE'] = $row['GRUP_NOMBRE'];
	        $response['VALO_NOMBRE'] = $row['VALO_NOMBRE'];
	        $response['TIDA_NOMBRE'] = $row['TIDA_NOMBRE'];
	        //$response['VALOR'] 		 = $row['VALOR'];
		}

		return $response;	    					
	}

	// Inserta datos de Form en frm_formularios_completados
	function UpdateForm($datos,$key){
		
		$this->db->where('VALO_ID', $key);	// $key = Id de valor
		$response = $this->db->update('frm_formularios_completados', $datos);
		return $response;
	}

		//**************************ARCHIVO******************************
		public function GuardarCotizacion($idPedido,$data){
			$this->db->where('PETR_ID',$idPedido);
			$result = $this->db->update('frm_formularios_completados',$data);
			return $result;
		}
		//**************************ARCHIVO******************************
	
		//***********Ver Cotizacion en Presupuesto*************/
			public function ObtenerCotizacion($idPedido){
				$this->db->select('VALOR');
				$this->db->where('PETR_ID',$idPedido);
				$this->db->where('NOM_VAR',"cotizacion");
				$query = $this->db->get('frm_formularios_completados');
				if($query->num_rows()!=0){
					return $query->result_array()[0]['VALOR'];
				}else{
					return '';
				}
			
			}
		//***********Ver Cotizacion en Presupuesto*************/

		public function GuardarValorPresupuesto($idPedido){
			$this->db->where('PETR_ID',$idPedido);
			$query = $this->db->update('frm_formularios_completados',array('NOM_VAR'=>'presupuesto'));
			return $query;
		}



	

}	

?>