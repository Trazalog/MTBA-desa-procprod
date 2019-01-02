<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subsector extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Subsectores');
        $this->load->model('Users');
        $this->load->model('Bonitas');
    }

    public function index($permission)
    {
        $data['list'] = $this->Subsectores->ObtenerTodos();
        $data['permission'] = $permission;
        $parametros = $this->Bonitas->LoggerAdmin();
        $parametros["http"]["method"] = 'GET';	
        $param = stream_context_create($parametros);
        $data['coordinadores'] = $this->Users->Obtener_Coordinadores($param);
        $this->load->view('subsectores/list', $data);
    }

    public function ObtenerTodos(){
        $result = $this->Subsectores->ObtenerTodos();
        echo json_encode($result);
    }

    public function agregarSubsector(){
        $descripcion = $this->input->post('descripcion');
        $coordinador = $this->input->post('coordinador');
        $result = $this->Subsectores->Guardar($descripcion,$coordinador);
        echo json_encode($result);
    }

    public function modificarSubsector(){
        $data = $this->input->post();
        $result = $this->Subsectores->Modificar($data);
        echo json_encode($result);
       
    }

    public function eliminarSubsector(){
       $id = $_POST['id'];
       $result = $this->Subsectores->Eliminar($id);
       echo json_encode($result);
    }

}
?>