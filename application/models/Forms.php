<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Forms extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	function ObtenerTodas(){
		$this->db->select('form_id,nombre');
		$this->db->from('frm_formularios');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_form($idForm){
		
		// sin tipo de datos
		$sql = "SELECT	form.form_id,
						form.nombre,
						form.habilitado,
						form.fec_creacion,
						cate.NOMBRE AS nomCategoria,
						cate.CATE_ID AS idCategoria,
						grup.NOMBRE AS nomGrupo,
						tida.NOMBRE AS nomTipoDatos,
						grup.GRUP_ID AS idGrupo,
						valo.NOMBRE AS nomValor,
						valo.VALO_ID AS idValor,	
						valo.VALOR_DEFECTO,
						valo.LONGITUD,
						valo.obligatorio,
						valo.PISTA						
						FROM
						frm_formularios form, 
						frm_categorias cate, 
						frm_grupos grup ,  
						frm_tipos_dato tida,
						frm_valores valo
						where FORM.FORM_ID = CATE.FORM_ID 
						AND CATE.CATE_ID = GRUP.CATE_ID 
						AND GRUP.GRUP_ID = VALO.GRUP_ID 
						AND TIDA.TIDA_ID = VALO.TIDA_ID	
						AND FORM.FORM_ID = '+$idForm+'					
						ORDER BY cate.ORDEN,grup.ORDEN,valo.ORDEN
						";
						//ORDER BY idCategoria,nomGrupo,VALO_ID";	

		$query= $this->db->query($sql);

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }
	}

	function getValValidos($idForm){
		
		$sql = "SELECT
				frm_grupos.GRUP_ID,
				frm_valores.NOMBRE,
				frm_valores.VALO_ID As idValor,
				frm_valores_validos.VALOR,
				frm_valores_validos.VAPO_ID As idvalvalido
				FROM
				frm_valores_validos
				INNER JOIN frm_valores ON frm_valores_validos.VALO_ID = frm_valores.VALO_ID
				INNER JOIN frm_grupos ON frm_valores.GRUP_ID = frm_grupos.GRUP_ID
				INNER JOIN frm_categorias ON frm_grupos.CATE_ID = frm_categorias.CATE_ID

				WHERE frm_categorias.FORM_ID = $idForm";

		$query= $this->db->query($sql);

		if($query->num_rows()>0){
	    	return $query->result_array();
	    }
	    else{
	    	return false;
	    }				
	}

}	
