<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Bonitas extends CI_Model
{
	function __construct(){
		parent::__construct();
	}

	/// Crea conexion y login
	function conexiones(){	

		// Array de parametros (cabecera HTTP)
			$opciones = array(
			  'http'=>array(
			    'method'=>"POST",
			    'header'=>"Path=/bonita". 
			               "HttpOnly"						 			
			  )
			);

			$contexto = stream_context_create($opciones);

		// Abre el fichero usando las cabeceras HTTP establecidas arriba
			// file_get_contents('http://35.239.41.196:8080/bonita/loginservice?username=admin&password=bpm&redirect=false', false, $contexto);

			file_get_contents('http://192.168.100.112:8080/bonita/loginservice?username=ernesto.clavel&password=bpm&redirect=false', false, $contexto);	

			$cookies = array();
			foreach ($http_response_header as $hdr) {
			    if (preg_match('/^Set-Cookie:\s*([^;]+)/', $hdr, $matches)) {
			        parse_str($matches[1], $tmp);
			        $cookies += $tmp;
			    }
			}

		// parametro con cokies para comprobar
			// $jsoncokies = json_encode($cookies);
			// echo "<pre>";
			// var_dump($jsoncokies);	

		// extrae cookies para que sea dinamico el cambio
			$idsesion = $cookies['JSESSIONID'];
			$bonita_tenant = $cookies['bonita_tenant'];
			$apiToken = $cookies['X-Bonita-API-Token'];		

			$parametros = array(
			  'http'=>array(
			    'method'=>"GET",
			    'header'=> 	
				"X-Bonita-API-Token: ".$apiToken."\r\n".
			    "Cookie: JSESSIONID=".$idsesion."\r\n".
			    			"X-Bonita-API-Token=".$apiToken."\r\n".
			    			"bonita_tenant=".$bonita_tenant."\r\n".
							"Content-Type: application/json"."\r\n"
							
					
			  )
			);

			return $parametros;
			
		//Variable tipo resource referencia a un recurso externo. Ahora en c/metodo para cambiar a distintos metodos(PUT,GET,POST) que usa Bonita. 	
		//$param = stream_context_create($parametros);

		//return $param;	
	}

	function entornoPut(){
		
		//$estado = array('assigned_id' => , );
		// mandar usr y pass de usuario logueado que seran los mismos en bonita y en TJ
		// $userdata = $this->session->userdata('user_data');
		//$usrId = $userdata[0]['usrId'];
		//$userPass = $userdata[0]["usrPassword"];
        
        $usrId = "walter.bates";
        $userPass = "bpm";


		// Array de parametros (cabecera HTTP)
			$opciones = array(
			  'http'=>array(
			    'method'=>"PUT",
			    'header'=>"Path=/bonita". 
			               "HttpOnly"						 			
			  )
			);

			$contexto = stream_context_create($opciones);

		// Abre el fichero usando las cabeceras HTTP establecidas arriba
			file_get_contents('http://35.239.41.196:8080/bonita/loginservice?username=admin&password=bpm&redirect=false', false, $contexto);	

			$cookies = array();
			foreach ($http_response_header as $hdr) {
			    if (preg_match('/^Set-Cookie:\s*([^;]+)/', $hdr, $matches)) {
			        parse_str($matches[1], $tmp);
			        $cookies += $tmp;
			    }
			}

		// parametro con cokies para comprobar
			// $jsoncokies = json_encode($cookies);
			// echo "<pre>";
			// var_dump($jsoncokies);	

		// extrae cookies para que sea dinamico el cambio
			$idsesion = $cookies['JSESSIONID'];
			$bonita_tenant = $cookies['bonita_tenant'];
			$apiToken = $cookies['X-Bonita-API-Token'];		

			$parametros = array(
			  'http'=>array(
			    'method'=>"PUT",
			    'header'=> 	"Cookie: JSESSIONID=".$idsesion."\r\n".
			    			"X-Bonita-API-Token=".$apiToken."\r\n".
			    			"bonita_tenant=".$bonita_tenant		    					
			  )
			);

			 echo "<pre>";
			 echo('parametros EN ENTORNO PUT: ');
			 dump_exit($parametros);

		$param = stream_context_create($parametros);

		return $param;	
	}

	function getTareas($param){
		$tareas = file_get_contents('http://35.239.41.196:8080/bonita/API/bpm/humanTask?p=0&c=10&f=assigned_id%3D5', false, $param);

		dump_exit($tareas);
	}




}