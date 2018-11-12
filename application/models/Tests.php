<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tests extends CI_Model
{
	function __construct(){

		parent::__construct();
    }
    function getContrato($parametros){
        $url = BONITA_URL."API/bpm/userTask/100272/contract";
        $result = file_get_contents($url,false,$parametros);
        return $result;
    }

}