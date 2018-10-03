<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class plantillas extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function plantilla_List()
	{

		$query= $this->db->get('plantilla');
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{
			return false;
		}
		}

	 	function agregar_tareas($arre) {

	    $query = $this->db->insert("tbl_listplantilla",$arre);
	    return $query;
	    }




 	function EliminarTareas($id){
    	
        $this->db->where('id_detaplantilla', $id);
        $this->db->delete('tbl_listplantilla');
        if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

    }


    function cargartareas($idglog){  

		$this->db->select('tbl_listplantilla.id_detaplantilla,
							tbl_listplantilla.id_plantilla,
							tbl_listplantilla.descripcion_deta');
		$this->db->from('tbl_listplantilla');		
		$this->db->where('tbl_listplantilla.id_plantilla', $idglog);		
		$query= $this->db->get();
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
			print_r($query->result_array());
		}
		else
		{	
			return false;
		}
    }


	function getplantilla($data = null)
	{
		if($data == null)
		{
			return false;
		}
		else
		{
			$action = $data['act'];
			$idplantilla = $data['id'];

			$data = array();

			//Datos de la plantilla
			$query= $this->db->get_where('plantilla',array('id_plantilla'=>$idplantilla));
			if ($query->num_rows() != 0)
			{

				$f = $query->result_array();
				$data['plantilla'] = $f[0];
			} else {
				$plantilla = array();
				$plantilla['id_plantilla'] = '';
				$plantilla['descripcion'] = '';
				$data['plantilla'] = $plantilla;
			}

			//Readonly
			$readonly = false;
			if($action == 'Del' || $action == 'View'){
				$readonly = true;
			}
			$data['read'] = $readonly;

			return $data;
		}
	}
	
	function setplantilla($data = null)
	{
		if($data == null)
		{
			return false;
		}
		else
		{
			$id = $data['id'];
			$name = $data['name'];
			
			
			$act = $data['act'];

			$data = array(
					   'descripcion' => $name,
					);

			switch($act)
			{
				case 'Add':
					//Agregar Plantilla
					if($this->db->insert('plantilla', $data) == false) {
						return false;
					}
					break;

				case 'Edit':
					//Actualizar nombre
					if($this->db->update('plantilla', $data, array('id_plantilla'=>$id)) == false) {
						return false;
					}
					break;

				case 'Del':
					//Eliminar Plantilla
					if($this->db->delete('plantilla', $data, array('id_plantilla'=>$id)) == false) {
						return false;
					}
					
					break;
			}

			return true;

		}
	}

}	

?>