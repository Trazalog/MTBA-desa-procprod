<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct()
        {
		parent::__construct();
		$this->load->model('Users');
		$this->load->model('Bonitas');
	}

	public function index()
	{
		$var = array('user_data' => null,'username' => null,'email' => null, 'logged_in' => false);
        $this->session->set_userdata($var);
        $this->session->unset_userdata(null);
        $this->session->sess_destroy();
        $this->Bonitas->logoutBonita();

		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	/**
	 * Login de Bonita y de sistema.
	 *
	 * @return 	String 	Json 1 si se loguea correctamente, json 0 si hubo algún error.
	 */
	public function sessionStart_(){
		$data       = $this->input->post();
		$parametros = $this->Bonitas->loginBonita($data);
		//$parametros = $this->Bonitas->conexiones();
		//$parametros = stream_context_create($parametros);
		$loggedIn   = $this->Users->sessionStart_($data, $parametros);

		if($loggedIn == false)
		{
			$this->Bonitas->logoutBonita();
			echo json_encode(0);
		}
		else
		{
			echo json_encode(1);	
		}
	}
	
}
