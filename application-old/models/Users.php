<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function User_List(){

		$query= $this->db->get('sisusers');
		//var_dump($query);
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{
			return false;
		}
	}
	
	function getUser($data = null){
		if($data == null)
		{
			return false;
		}
		else
		{
			$action = $data['act'];
			$idUsr = $data['id'];

			$data = array();

			//Datos del usuario
			$query= $this->db->get_where('sisusers',array('usrId'=>$idUsr));
			if ($query->num_rows() != 0)
			{
				$u = $query->result_array();
				$data['user'] = $u[0];
			} else {
				$user = array();
				$user['usrNick'] = '';
				$user['usrName'] = '';
				$user['usrLastName'] = '';
				$user['usrComision'] = '';
				$user['usrPassword'] = '';
				$user['grpId'] = 1;

				$data['user'] = $user;
			}

			//Readonly
			$readonly = false;
			if($action == 'Del' || $action == 'View'){
				$readonly = true;
			}
			$data['read'] = $readonly;

			//Grupos
			$query= $this->db->get('sisgroups');
			if ($query->num_rows() != 0)
			{
				$data['groups'] = $query->result_array();	
			}
			
			return $data;
		}
	}
	
	function setUser($data = null){
		if($data == null)
		{
			return false;
		}
		else
		{
			$id = $data['id'];
			$act = $data['act'];
			$usr = $data['usr'];
			$name = $data['name'];
			$lnam = $data['lnam'];
			$com = $data['com'];
			$pas = $data['pas'];
			$grp = $data['grp'];

			if($act == 'Edit') {
				if($pas == '') {
					//No modificar la contraseña
					$data = array(
					   'usrNick' => $usr,
					   'usrName' => $name,
					   'usrLastName' => $lnam,
					   'usrComision' => $com,
					   'grpId' => $grp
					);
				} else {
					//Modificar la contraseña
					$data = array(
					   'usrNick' => $usr,
					   'usrName' => $name,
					   'usrLastName' => $lnam,
					   'usrComision' => $com,
					   'usrPassword' => md5($pas),
					   'grpId' => $grp
					);
				}
			} else {
				$data = array(
					   'usrNick' => $usr,
					   'usrName' => $name,
					   'usrLastName' => $lnam,
					   'usrComision' => $com,
					   'usrPassword' => md5($pas),
					   'grpId' => $grp
					);
			}

			switch($act){
				case 'Add':
					//Agregar Usuario 
					if($this->db->insert('sisusers', $data) == false) {
						return false;
					}else{
						return true;
					}
					break;

				 case 'Edit':
				 	//Actualizar usuario
				 	if($this->db->update('sisusers', $data, array('usrId'=>$id)) == false) {
				 		return false;
				 	}
				 	break;

				 case 'Del':
				 	//Eliminar usuario
				 	if($this->db->delete('sisusers', array('usrId'=>$id)) == false) {
				 		return false;
				 	}
				 	break;
			}

			return true;

		}
	}

	/**
	 * Inicializa las variables de sesion del sistema con datos de Bonita.
	 *
	 * @return  Bool  True si se guardaron las variables de sesión o false si hubo algún error.
	 */
	function sessionStart_($data = null, $parametros){
		if($parametros == null)
		{
			return false;
		}
		else
		{
			$this->load->model('Bonitas');
			$parametros = stream_context_create($parametros);
			$url = BONITA_URL.'API/identity/user?f=userName='.$data['usr'];
			$response = file_get_contents($url, false, $parametros);
			//dump_exit($http_response_header);
			if($response == false)
			{
				echo "error al trear el usurio";
				return false;
			} 
			else 
			{
				$response = json_decode( $response );
				$img = $response[0]->icon;
				if( strpos($img, '../') !== false) {
					$img = str_replace("../", "", $img);
					$img = BONITA_URL.$img;
				} else {
					$img = BONITA_URL.'theme/'.$img;
				}
				//dump_exit($img);
				$user_data[0]['usrId']       = $response[0]->id;
				$user_data[0]['usrNick']     = $response[0]->userName;
				$user_data[0]['usrName']     = $response[0]->firstname;
				$user_data[0]['usrLastName'] = $response[0]->lastname;
				$user_data[0]['usrimag']     = $img;
				$user_data[0]['usrPass']	 = $data['pas'];
				
				$url = BONITA_URL.'API/identity/membership?f=user_id='.$response[0]->id;
				$response2 = file_get_contents($url, false, $parametros);
				//dump($http_response_header);
				if($response2 == false)
				{
					echo "error al trear el usuario";
					return false;
				} 
				else 
				{
					$response2 = json_decode( $response2 );
					for($i=0; $i<sizeof($response2); $i++)
					{
						$user_data[0]['grpId'][$i] = $response2[$i]->group_id;
						$user_data[0]['rolId'][$i] = $response2[$i]->role_id;
					}
				}
				$this->session->set_userdata('user_data', $user_data);
				return true;
			}
		}
	}
	
}
