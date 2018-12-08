<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Preinformes Class
 * Clase para la elaboración de preinformes de diagnóstico,
 * que extiende de la clase MY_Model.
 */
class Preinformes extends CI_Model {
    
    /**
     * __construct()
     * Método constructor de la clase Bonitas.
     *
     * @return  void
     */
    public function __construct()
    {
        parent::__construct();
    }

    function getFormularios($idForms,$ptrId)
    {
        //dump_exit($idForms);
        $this->db->select('FORM_ID, FORM_NOMBRE, CATE_NOMBRE, GRUP_NOMBRE, VALO_NOMBRE, TIDA_NOMBRE, VALOR');
        $this->db->from('frm_formularios_completados');
        $this->db->where_in('FORM_ID', $idForms);
        $this->db->where('frm_formularios_completados.PETR_ID', $ptrId);
  
        $query = $this->db->get();
        //dump_exit($query);
        if($query->num_rows()>0){
            $formularios = $query->result_array();
            $idForm    = $formularios[0]['FORM_NOMBRE'];
            $categoria = $formularios[0]['CATE_NOMBRE'];
            $grupo     = $formularios[0]['GRUP_NOMBRE'];

            $informe = '<h1>- '.$idForm.'</h1>';
            $informe = $informe.'<h2>'.$categoria.'</h2>';
            $informe = $informe.'<h3><span class="text-light-blue">'.$grupo.'</span></h3>';

            for ($i=0; $i < sizeof($formularios); $i++) {

                if ($formularios[$i]['FORM_NOMBRE'] == $idForm) {
                    //categorias para cada formulario

                    if($formularios[$i]['CATE_NOMBRE'] == $categoria){
                        //grupos para cada categoria

                        if($formularios[$i]['GRUP_NOMBRE'] == $grupo){

                            if($formularios[$i]['TIDA_NOMBRE'] == 'input_archivo'){
                                $informe = $informe.'<p>'.$formularios[$i]['VALO_NOMBRE'].':<br><img src="'.base_url().$formularios[$i]['VALOR'].'" style="max-width:100%"></p>';
                            } else {
                                $informe = $informe.'<p>'.$formularios[$i]['VALO_NOMBRE'].' '.$formularios[$i]['VALOR'].'</p>';
                            }

                        } else {
                            $grupo   = $formularios[$i]['GRUP_NOMBRE'];
                            $informe = $informe.'<h3><span class="text-light-blue">'.$grupo.'</span></h3>';
                            $i--;
                        }

                    } else {
                        $categoria = $formularios[$i]['CATE_NOMBRE'];
                        $informe   = $informe.'<h2>'.$categoria.'</h2>';
                        $i--;
                    }

                } else {
                    $idForm  = $formularios[$i]['FORM_NOMBRE'];
                    $informe = $informe.'<h1>- '.$idForm.'</h1>';
                    $i--;
                }

            }
            return $informe;
        }
        else{
            return false;
        }   
    }
//FILTRAR POR ID DE PEDIDO
    function ObtenerIdFormulariosCompletados($idPedTrabajo){
        $this->db->select('FORM_ID');
        $this->db->where('PETR_ID',$idPedTrabajo);
        $this->db->where_in('FORM_ID',array(1,2,3,4,5,6,7,8,9));
        $this->db->group_by('FORM_ID');
        $query = $this->db->get('frm_formularios_completados')->result_array();
        $result = array();
        foreach ($query as $f) {
            array_push($result,$f['FORM_ID']);
        }
        return $result;
    }
}