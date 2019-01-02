<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Subsectores extends CI_Model
{
	function __construct(){

		parent::__construct();
    }
    // $this->db->();
    public function ObtenerTodos()
    {
        $this->db->select();
        $this->db->from('tbl_subsector');
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

    public function Guardar($descripcion,$coordinador)
    {
        $this->db->set('descripcion',$descripcion);
        $this->db->set('usuario_coordinador',$coordinador);
        $this->db->insert('tbl_subsector');
        $insertId = $this->db->insert_id();
        return  $insertId;
    }

    public function ObtenerPorId($id)
    {
        # code...
    }

    public function Modificar($data)
    {  
        $this->db->where('id_subsector', $data['id_subsector']);
        $query = $this->db->update('tbl_subsector',$data);
        return $query;
    }

    public function Eliminar($id)
    {
        $this->db->where('id_subsector',$id);
        $this->db->delete('tbl_subsector');
        if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

    }

}	

?>