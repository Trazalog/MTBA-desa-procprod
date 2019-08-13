<?php
defined("BASEPATH") OR exit("El acceso directo al script no está permitido!!!");

class Imports extends CI_Model{
  
  public function __construct(){

    parent::__construct();
  }

  public function excel($table_name,$sql){ 
    //si existe la tabla
    if ($this->db->table_exists("$table_name")){
      //si es un array y no está vacio
      if(!empty($sql) && is_array($sql)){
      
        $this->db->trans_start();
        $this->db->insert_batch("$table_name", $sql);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE){
         return false;  
        }
        else{
         return true;
        }
     }
    }
  }
}