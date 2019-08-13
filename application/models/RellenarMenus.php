<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
set_time_limit(300);
class RellenarMenus extends CI_Model
{
	public function __construct(){
		parent::__construct();
    }
    public function Rellenar(){
        //ASIGNA A CADA PANTALLA LOS PERMISOS ADD-EDIT-DEL-VIEW
        // $this->db->select('id');
        // $query = $this->db->get('mtba-desa-procprod.sismenu');
        // $variable = $query->result_array();

        // foreach ($variable as $value) {
        //     for ($i=1; $i < 5 ; $i++) { 
        //         $aux =  array(
        //             'menuId' => $value['id'],
        //             'actId' => $i
        //         );
        //         $this->db->insert('mtba-desa-procprod.sismenuactions',$aux);
        //     }        
        // }

        // $this->db->select('menuAccId');
        // $query = $this->db->get('mtba-desa-procprod.sismenuactions');
        // $variable = $query->result_array();
        $membresias =  $this->db->get('mtba-desa-procprod.usuario_bpm')->result_array();   
        $filas = array(); 
        foreach ($membresias as $m) {         
            if($m['role_id']!=0){
                for ($i=1; $i <=76 ; $i++) { 
                    $aux =  array(
                        'menuAccId' => $i,
                        'roleId' => $m['role_id'],
                        'grpId' => $m['group_id']
                    );
                    array_push($filas,$aux);
                }
            }
        }  
        $this->db->query("ALTER TABLE `mtba-desa-procprod`.sisgroupsactions AUTO_INCREMENT=0");
        return $this->db->insert_batch('mtba-desa-procprod.sisgroupsactions',$filas);
    }

    function ObtenerMembrecias($parametros){
         $result = array();
         $array_users = $this->db->get('mtba-desa-procprod.usuario_bpm')->result_array();
         foreach ($array_users as $o) {
            $result_aux = $this->ObtenerMembrecia($o['id'],$parametros);
            foreach ($result_aux as $oo) {
                $aux = array(
                    'id' => $o['id'],
                    'role_id' => $oo['role_id'],
                    'group_id' => $oo['group_id']
                );
               array_push($result,$aux);
            }           
         }
         return $this->db->update_batch('mtba-desa-procprod.usuario_bpm',$result,'id');
    }

    function ObtenerMembrecia($id_user,$parametros){
        $URL = 'API/identity/membership?p=0&c=10&f=user_id%3d'.$id_user;
        $result  = file_get_contents(BONITA_URL.$URL, false, $parametros);
        return json_decode($result,true);
    }
}

?>