<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Equipos extends CI_Model
{
	function __construct(){

		parent::__construct();
    }
    // $this->db->();
    public function ObtenerTodos()
    {
        $this->db->select('A.*,B.descripcion as subsector');
        $this->db->from('tbl_equipos as A');
        $this->db->join('tbl_subsector as B','A.id_subsector=B.id_subsector');
        $query=$this->db->get();

        if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{	
			return false;
		}

    }

    public function Guardar($data)
    {
        $query = $this->db->insert('tbl_equipos',$data);
        return $query;
    }

    public function ObtenerPorId($id)
    {
        # code...
    }

    public function Modificar($data)
    {  
        $this->db->where('id_equipo', $data['id_equipo']);
        $query = $this->db->update('tbl_equipos',$data);
        return $query;
    }

    public function Eliminar($id)
    {
        $this->db->where('id_equipo',$id);
        $this->db->delete('tbl_equipos');
        if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

    }

}	

?>