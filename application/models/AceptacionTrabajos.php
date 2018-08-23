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

        $result = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/userTask/'.$idTarea.'/execution',false,$parametros);
        
        return $result;
    }

    public function ObtenerCotizacion(){
        $result = base_url().'assets/documentosMTB/ordenes_compra/re.pdf';
        return $result;
    }

}

?>