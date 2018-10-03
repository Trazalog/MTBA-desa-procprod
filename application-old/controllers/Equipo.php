<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Equipo extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Equipos');
    }

    public function index($permission)
    {
        $data['list'] = $this->Equipos->ObtenerTodos();
        $data['permission'] = $permission;
        $this->load->view('equipos/list', $data);
    }

    public function agregarEquipo(){
       # $descripcion = $_POST['descripcion'];
       # $idSubsector = $_POST['id_subsector'];
       # 
        $data = $this->input->post();
        $result = $this->Equipos->Guardar($data);
        echo json_encode($result);
    }

    public function modificarEquipo(){
        $data = $this->input->post();
        $result = $this->Equipos->Modificar($data);
        echo json_encode($result);
       
    }

    public function eliminarEquipo(){
       $id = $_POST['id'];
       $result = $this->Equipos->Eliminar($id);
       echo json_encode($result);
    }

}
?>