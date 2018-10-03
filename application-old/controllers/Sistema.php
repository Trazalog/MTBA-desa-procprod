<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Sistemas');
	}	
	public function index($permission){
		$data['permission'] = $permission;
		$this->load->view('sistema/view_', $data);
	}
	public function setInfoEmpresa($data){
		dump_exit($data);
	}

	public function subirImagen(){		

		$config['upload_path'] = './assets/img/sistema';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['max_size'] = '2048';
        //$config['max_width'] = '2024';
        //$config['max_height'] = '2008';

        $this->load->library('upload',$config);

	   //      if (!$this->upload->do_upload("fileImagen")) {
	   //          $data['error'] = $this->upload->display_errors();
				// $this->load->view('layout/header');
				// $this->load->view('layout/menu');
				// $this->load->view('vupload',$data);
				// $this->load->view('layout/footer');
	   //      } else {
        	$this->upload->do_upload("imagen");	/// name de input formulario
            $file_info = $this->upload->data();

             $datofoto = array("upload_data" => $this->upload->data());
             $nombre = $datofoto['upload_data']['file_name'];
			echo $nombre;
            //$this->crearMiniatura($file_info['file_name']);

            // $titulo = $this->input->post('titImagen');
            // $imagen = $file_info['file_name'];

            $titulo = 'imagen1';
            $imagen = $file_info['file_name'];
            
            $subir = $this->Sistemas->subir($titulo,$imagen);      
            $data['titulo'] = $titulo;
            $data['imagen'] = $imagen;

   		//          $this->load->view('layout/header');
			// $this->load->view('layout/menu');
			// $this->load->view('vImagenSubida', $data);
			// $this->load->view('layout/footer');
            
        //}

          //$this->Sistemas->  ($this->input->post());
    }

    public function guardar(){
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
		if ($this->input->is_ajax_request()) {
			
			$nomfantasia = $this->input->post("nom_fant");
			$razonsocial = $this->input->post("razon");
			$tel = $this->input->post("tel");
			$cel = $this->input->post("cel");
			$email = $this->input->post("email");
			$dir = $this->input->post("dir");

			$config = [
				"upload_path" => "./assets/img/sistema",
				'allowed_types' => "png|jpg"
			];

			$this->load->library("upload",$config);

			if ($this->upload->do_upload('logo')) {
				
				$data = array("upload_data" => $this->upload->data());
				
				$datos = array(
					"nom_fantasia" => $nomfantasia,
					"razon_social" => $razonsocial,
					"telefono" => $tel,
					"celular" => $cel,
					"mail" => $email,
					"direccion" => $dir,
					"logo" => $data['upload_data']['file_name'],					
				);

				if($this->Sistemas->guardar($datos) == true)
					echo "exito";
				else
					echo "error";
			}
			else{
				echo $this->upload->display_errors();
			}			
		}
		else
		{
			show_404();
		}


	}
}