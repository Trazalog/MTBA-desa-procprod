<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tareas extends CI_Model
{
	function __construct(){

		parent::__construct();
	}
	
	
	function getTareas($param){
		
		$tareas = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/humanTask?p=0&c=10&f=assigned_id%3D5', false, $param);
		
		return $tareas;		
	}

	//  //Cambia el estado A 'TE' la subtarea
	//  function TareaRealizadas($id, $datos){

	//        $this->db->where('id_listarea', $id);
	//        $query = $this->db->update("tbl_listarea",$datos);
	//        return $query;
	//    }



	// // Cambia a estado 'TE' (terminado parcial) a OT
	// function CambioParcials($idor,$datos){
    	
 //        $this->db->where('id_orden', $idor);
 //        $query = $this->db->update("orden_trabajo",$datos);
 //        return $query;
 //    }

 //    // Cambia a estado a C
	// function Iniciars($idor,$datos){
    	
 //        $this->db->where('id_orden', $idor);
 //        $query = $this->db->update("orden_trabajo",$datos);
 //        return $query;
 //    }


 //    // Cambia a estado 'T' (terminado) a OT
 //    function update_cambio($idequipo,$fecha){

 //    	$consulta= "UPDATE orden_trabajo SET estado='T',
 //    										fecha_terminada='$fecha'
                               
	// 			WHERE id_orden=$idequipo" ;

	// 	$query= $this->db->query($consulta);
        
	// 	return $query;
 //    }

 //    // Trae tareas por id de orden
 //    function getlistTareasOTs($idfin){  

	// 	$this->db->select('tbl_listarea.id_listarea,
	// 						tbl_listarea.id_orden,
	// 						tbl_listarea.tareadescrip,
	// 						tbl_listarea.id_usuario,
	// 						tbl_listarea.fecha,
	// 						tbl_listarea.estado');
	// 	$this->db->from('tbl_listarea');		
	// 	$this->db->where('tbl_listarea.id_orden', $idfin);		
	// 	$query= $this->db->get();
		
	// 	if ($query->num_rows()!=0)
	// 	{
	// 		return $query->result_array();	
	// 	}
	// 	else
	// 	{	
	// 		return false;
	// 	}
 //    }

 //    // Trae datos de OT por id de orden
 //    function getDatosOT($idfin){
    	
 //    	$this->db->select('orden_trabajo.*');
 //    	$this->db->from('orden_trabajo');
 //    	$this->db->where('orden_trabajo.id_orden', $idfin);	
	// 	$query= $this->db->get();
		
	// 	if ($query->num_rows()!=0)
	// 	{
	// 		return $query->result_array();	
	// 	}
	// 	else
	// 	{	
	// 		return false;
	// 	}
 //    }

}	

?>