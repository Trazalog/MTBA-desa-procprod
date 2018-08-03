<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AceptacionTrabajo extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
    }

    public function index($permission)
	{
		//$data['list'] = $this->Stocks->Stocks_List();
		$data['permission'] = $permission;
		$this->load->view('AceptacionTrabajo/list', $data);
	}
}
?>