<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Overviews extends CI_Model
{
	function __construct(){

		parent::__construct();
    }
    // $this->db->();
    public function ObtenerActividades($param){
        $respuesta = file_get_contents(BONITA_URL.'API/bpm/activity?p=0&c=200',false,$param);
        $array = json_decode($respuesta,true);
        $ord = array();
        foreach ($array as $key => $value){
            $ord[] = strtotime($value['last_update_date']);
        }
        array_multisort($ord, SORT_DESC, $array);
        return $array;
    }

    public function ObtenerActividadesArchivadas($param){
        $respuesta = file_get_contents(BONITA_URL.'API/bpm/archivedActivity?p=0&c=200&o%3dreached_state_date%ASC',false,$param);
		  $array = json_decode($respuesta,true);
        $ord = array();
        foreach ($array as $key => $value){
            $ord[] = strtotime($value['last_update_date']);
        }
        array_multisort($ord, SORT_DESC, $array);
        return $array;
    }
}
?>