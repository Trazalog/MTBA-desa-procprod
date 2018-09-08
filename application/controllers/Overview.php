<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Overviews');
        $this->load->model('Bonitas');
    }

  

}
?>