<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tareaests extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

function Listado_Tareas(){

 $query= $this->db->get('tareas');

 if ($query->num_rows()!=0)
{
 return $query->result_array();	
}

 }
function Obtener_Tareas($id){
    $this->db->where('id_tarea', $id);
    $query=$this->db->get('tareas');
   
    if ($query->num_rows()!=0)
        {   
            return $query->result_array();  
        }
}
function Guardar_Tareas($data){

		$query = $this->db->insert("tareas",$data);
                                  return $query;

	}
	function Modificar_Tareas($data){

		$query =$this->db->update('tareas', $data, array('id_tarea' => $data['id_tarea']));
		print_r($query);
	}
	function Eliminar_Tareas($data){
    	
        $this->db->where('id_tarea', $data);
        $this->db->delete('tareas');
        if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

    }
}	

?>