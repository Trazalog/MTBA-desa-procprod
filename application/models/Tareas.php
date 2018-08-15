<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tareas extends CI_Model
{
	function __construct(){

		parent::__construct();
	}	
	// trae tareas de BPM
	function getTareas($param){
		
		$tareas = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/humanTask?p=0&c=10&f=user_id%3D5', false, $param);
		
		return $tareas;		
	}

	// Terminar Tarea
	function terminarTarea($idTarBonita,$param){

		// en 35 poner el id de tarea dinamico!!!!

		// try {
		//     $content = file_get_contents('https://en.wikipedia.org/wiki/Cat#/media/File:Large_Siamese_cat_tosses_a_mouse.jpg');

		//     if ($content === false) {
		//         // Handle the error
		//     }
		// } catch (Exception $e) {
		//     // Handle exception
		// }

		$response = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/humanTask/44', false, $param);
		return $response;

		// echo "response: ";
		// var_dump($response);
	}

	// Tomar Tareas 
	function tomarTarea($idTarBonita,$param){

		// en 35 poner el id de tarea dinamico!!!!

		// try {
		//     $content = file_get_contents('https://en.wikipedia.org/wiki/Cat#/media/File:Large_Siamese_cat_tosses_a_mouse.jpg');

		//     if ($content === false) {
		//         // Handle the error
		//     }
		// } catch (Exception $e) {
		//     // Handle exception
		// }

		$response = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/humanTask/35', false, $param);
		echo "response: ";
		var_dump($response);
	}

	// Soltar Tareas 
	function soltarTarea($idTarBonita,$param){

		// en 35 poner el id de tarea dinamico!!!!

		// try {
		//     $content = file_get_contents('https://en.wikipedia.org/wiki/Cat#/media/File:Large_Siamese_cat_tosses_a_mouse.jpg');

		//     if ($content === false) {
		//         // Handle the error
		//     }
		// } catch (Exception $e) {
		//     // Handle exception
		// }

		$response = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/humanTask/35', false, $param);
		echo "response: ";
		var_dump($response);
	}

	// Devuelve el id de tareas de trazaj correspond al id_tarea bonita
	function getIdTareaTraJobs($idBonita,$param){

		$idTJobs = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/activityVariable/54/trazajobsTaskId', false, $param);
		
		return $idTJobs;
	}	 

	// devuelve detalle de tareas para notificacion standart
	function detaTareas($id_orden,$id_tarea){	
		// id_orden (id de ot)
		// id_tarea (id_listarea)

		// $this->db->select('tbl_listarea.id_listarea,
		// 				tbl_listarea.id_orden,
		// 				tbl_listarea.id_tarea,
		// 				tbl_listarea.fecha,
		// 				tareas.descripcion,
		// 				tareas.duracion_std,
		// 				tareas.form_asoc');
		// $this->db->from('tbl_listarea');
		// $this->db->join('tareas', 'tareas.id_tarea = tbl_listarea.id_tarea');
		// $this->db->where('tbl_listarea.id_orden', $id_orden);
		// $this->db->where('tbl_listarea.id_tarea', $id_tarea);
		// $query = $this->db->get();

		// if ($query->num_rows()!=0){
		 // 		return $query->result_array();	
		 // 	}else{	
		 // 		return false;
		 // 	}

	 	$this->db->select('tbl_listarea.id_listarea,
						tbl_listarea.id_orden,
						tbl_listarea.tareadescrip,
						tbl_listarea.id_tarea,
						tbl_listarea.id_usuario,
						tbl_listarea.fecha,
						tbl_listarea.tarea_realizada,
						tbl_listarea.id_equipo,
						tbl_listarea.fecha_inicio,
						tbl_listarea.fecha_fin,
						tbl_listarea.estado,
						tbl_listarea.duracion_prog,
						tareas.duracion_std');
	 	$this->db->from('tbl_listarea');
		$this->db->join('tareas', 'tareas.id_tarea = tbl_listarea.id_tarea');
		$this->db->where('tbl_listarea.id_listarea', $id_tarea);
		$query = $this->db->get();

		if ($query->num_rows()!=0){
	 		return $query->result_array();	
	 	}else{	
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


//////////////  form dinamico  //////////////////

	// verifica que el form tenga todos los campos validado en 1 
	function validarFormGuardado($idValor,$id_listarea){		

		$this->db->select('frm_formularios_completados.VALO_ID');
		$this->db->from('frm_formularios_completados');
		$this->db->where('frm_formularios_completados.VALIDADO', 0);	// no validado 
		$this->db->where('frm_formularios_completados.VALO_ID', $idValor);
		$this->db->where('frm_formularios_completados.LITA_ID', $id_listarea);
		$query = $this->db->get();

	 	if ($query->num_rows() > 0){
	 		return $query->row('VALO_ID');	
	 	}else{	
	 		return 0;
	 	}


		// $sql ="SELECT
		// COUNT(*) as novalidos
		// FROM
		// frm_formularios_completados
		// WHERE
		// frm_formularios_completados.LITA_ID = 255 AND
		// VALIDADO = 0";

		// $query = $this->db->query($sql);

		// if( $query->row('novalidos') > 0 ){
	    	
	 //    	return false;
	 //    }
	 //    else{
	 //    	return true;
	 //    }
	}

	// Comprueba si hay form guardado asoc a id de orden y de tarea
	function getEstadoForm($id_listarea){
		$this->db->select('frm_formularios_completados.LITA_ID');
		$this->db->from('frm_formularios_completados');
		$this->db->where('frm_formularios_completados.LITA_ID', $id_listarea);
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
	 		return false;
	 	}
	}

	// Trae form para dibujar pantalla (agregar where de id de form)
	function get_form($id_listarea){
		echo "id listarea en tareas get form: ";
		var_dump($id_listarea);
		// con id listarea traigo el id de tarea estandar
		$id_tarea = $this->getTarea_idListarea($id_listarea);
		echo "id tarea: ";
		var_dump($id_tarea);

		// con id de tarea estandar traigo form asociado
		$idForm = $this->getFormTarea($id_tarea);
		echo "id form: ";
		var_dump($idForm);

		// $sql = "SELECT	form.form_id,
			// 				form.nombre,
			// 				form.habilitado,
			// 				form.fec_creacion,
			// 				cate.NOMBRE AS nomCategoria,
			// 				cate.CATE_ID AS idCategoria,
			// 				grup.NOMBRE AS nomGrupo,
			// 				tida.NOMBRE AS nomTipoDatos,
			// 				grup.GRUP_ID AS idGrupo,
			// 				valo.NOMBRE AS nomValor,
			// 				valo.VALO_ID AS idValor,	
			// 				valo.VALOR_DEFECTO,
			// 				valo.LONGITUD,
			// 				valo.OBLIGATORIO,
			// 				valo.PISTA						
			// 				FROM
			// 				frm_formularios form, 
			// 				frm_categorias cate, 
			// 				frm_grupos grup ,  
			// 				frm_tipos_dato tida,
			// 				frm_valores valo
			// 				where FORM.FORM_ID = CATE.FORM_ID 
			// 				AND CATE.CATE_ID = GRUP.CATE_ID 
			// 				AND GRUP.GRUP_ID = VALO.GRUP_ID 
			// 				AND TIDA.TIDA_ID = VALO.TIDA_ID	

			// 				AND form.form_id = $idForm

			// 				ORDER BY cate.ORDEN,grup.ORDEN,valo.ORDEN";
			// 				//ORDER BY idCategoria,nomGrupo,VALO_ID";	

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
				WHERE frm_formularios_completados.FORM_ID = $idForm
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

	// Trae configuracion de form inicial para guardar en frm_frm_completados
	function getFormInicial($id_listarea){
		// trae i de tarea estandar por id listarea
		$id_tarea = $this->getTarea_idListarea($id_listarea);
		// trae id de form asociado a tarea
		$idFormAsoc = $this->getFormTarea($id_tarea);


		$sql = "SELECT	
				form.form_id AS FORM_ID,
				form.nombre AS FORM_NOMBRE,
				form.fec_creacion AS FEC_CREACION,
				cate.NOMBRE AS CATE_NOMBRE,						
				grup.NOMBRE AS GRUP_NOMBRE,
				tida.NOMBRE AS TIDA_NOMBRE,	

				tida.TIDA_ID AS TIDA_ID,						
					
				valo.NOMBRE AS VALO_NOMBRE,	
				valo.VALO_ID AS VALO_ID				
											
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
	function setFormInicial($id_listarea){

		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado
        $i=0;
        $dat= array();

        // Trae la info del form sin valores validos desp se actualiza al guardar        
        $form = $this->getFormInicial($id_listarea);

        // Agrego id de usuario al array para insertar
        foreach ($form as $key) {

        	$key['USUARIO'] = $usrId; 
        	$key['LITA_ID'] = $id_listarea;      	
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




	

}	

?>