<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subsector extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Subsectores');
    }

    public function index($permission)
    {
        $data['list'] = $this->Subsectores->ObtenerTodos();
        $data['permission'] = $permission;
        $this->load->view('subsectores/list', $data);
    }

    public function ObtenerTodos(){
        $result = $this->Subsectores->ObtenerTodos();
        echo json_encode($result);
    }

    public function agregarSubsector(){
        $descripcion = $_POST['descripcion'];
        $result = $this->Subsectores->Guardar($descripcion);
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