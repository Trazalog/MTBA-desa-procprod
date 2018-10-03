<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sistemas extends CI_Model
{
	function __construct(){

		parent::__construct();
	}	

	//Guarda datos de empresa e imagen subida
    function guardar($data){		

		return $this->db->insert('info_sistema', $data);
	}
}	