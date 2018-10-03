<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Talleres extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	// Trae las OT segun usuario asignado (lista principal)
	function otrabajos_List(){
		
		$userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado

		$this->db->select('orden_trabajo.id_orden, orden_trabajo.nro,orden_trabajo.fecha_inicio, orden_trabajo.fecha_entrega, orden_trabajo.fecha_terminada, orden_trabajo.fecha_aviso, orden_trabajo.fecha_entregada, orden_trabajo.descripcion, orden_trabajo.cliId, orden_trabajo.estado, orden_trabajo. id_usuario, orden_trabajo.id_usuario_a, user1.usrName AS nombre, orden_trabajo.id_usuario_e, orden_trabajo.id_sucursal, admcustomers.cliLastName,admcustomers.cliName, sisusers.usrName,sucursal.descripc, sisgroups.grpId');
		$this->db->from('orden_trabajo');
		$this->db->join('admcustomers', 'admcustomers.cliId = orden_trabajo.cliId');
		$this->db->join('sisusers', 'sisusers.usrId = orden_trabajo.id_usuario');
		$this->db->join('sisusers AS user1', 'user1.usrId = orden_trabajo.id_usuario_a');
		$this->db->join('sucursal', 'sucursal.id_sucursal = orden_trabajo.id_sucursal');
		$this->db->join('sisgroups', 'sisgroups.grpId = sisusers.grpId');
		$this->db->where('orden_trabajo.id_usuario_a', $usrId);
		$this->db->where('orden_trabajo.estado !=', 'T');
		$this->db->group_by('orden_trabajo.id_orden');
						
		$query= $this->db->get();
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{	
			return false;
		}
	}

	 //Cambia el estado A 'TE' la subtarea
	 function TareaRealizadas($id, $datos){

	       $this->db->where('id_listarea', $id);
	       $query = $this->db->update("tbl_listarea",$datos);
	       return $query;
	   }



	// Cambia a estado 'TE' (terminado parcial) a OT
	function CambioParcials($idor,$datos){
    	
        $this->db->where('id_orden', $idor);
        $query = $this->db->update("orden_trabajo",$datos);
        return $query;
    }

    // Cambia a estado a C
	function Iniciars($idor,$datos){
    	
        $this->db->where('id_orden', $idor);
        $query = $this->db->update("orden_trabajo",$datos);
        return $query;
    }


    // Cambia a estado 'T' (terminado) a OT
    function update_cambio($idequipo,$fecha){

    	$consulta= "UPDATE orden_trabajo SET estado='T',
    										fecha_terminada='$fecha'
                               
				WHERE id_orden=$idequipo" ;

		$query= $this->db->query($consulta);
        
		return $query;
    }

    // Trae tareas por id de orden
    function getlistTareasOTs($idfin){  

		$this->db->select('tbl_listarea.id_listarea,
							tbl_listarea.id_orden,
							tbl_listarea.tareadescrip,
							tbl_listarea.id_usuario,
							tbl_listarea.fecha,
							tbl_listarea.estado');
		$this->db->from('tbl_listarea');		
		$this->db->where('tbl_listarea.id_orden', $idfin);		
		$query= $this->db->get();
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{	
			return false;
		}
    }

    // Trae datos de OT por id de orden
    function getDatosOT($idfin){
    	
    	$this->db->select('orden_trabajo.*');
    	$this->db->from('orden_trabajo');
    	$this->db->where('orden_trabajo.id_orden', $idfin);	
		$query= $this->db->get();
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{	
			return false;
		}
    }

}	

?>