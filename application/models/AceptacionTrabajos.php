<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class AceptacionTrabajos extends CI_Model
{
	public function __construct(){
		parent::__construct();
    }


    public function Guardar($id,$data){
        $this->db->where('petr_id', $id);
        $query = $this->db->update('trj_pedido_trabajo',$data);
        return $query;
    }

    public function TrabajoExecutionBPM($idTarea,$parametros){
        //$result = file_get_contents('http://192.168.100.110:8080/bonita/API/bpm/userTask/'.$idTarea.'/execution',false,$parametros);

        $result = file_get_contents('http://35.239.41.196:7070/bonita/API/bpm/userTask/'.$idTarea.'/execution',false,$parametros);
        return $result;
    }

    public function ObtenerPresupuesto($idPedido){
        $this->db->select('VALOR');
        $this->db->where('PETR_ID',$idPedido);
        $query = $this->db->get('frm_formularios_completados');
        if($query->num_rows()!=0){
            return $query->result_array()[0]['VALOR'];
        }else{
            return '';
        }
       
    }

    public function GuardarPresupuesto($idPedido,$data){
        $this->db->where('PETR_ID',$idPedido);
        $result = $this->db->update('frm_formularios_completados',$data);
        return $result;
    }
}

?>