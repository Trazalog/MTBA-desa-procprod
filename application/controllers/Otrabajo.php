<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otrabajo extends CI_Controller {

	function __construct()
        {
		parent::__construct();
		$this->load->model('Otrabajos');
	}

	public function index($permission)
	{
		$this->load->helper('widget');
		$data['list'] = $this->Otrabajos->otrabajos_List();
		$data['permission'] = $permission;
		$this->load->view('otrabajos/list_home', $data);
		//$this->load->view('otrabajos/list', $data); //esto es para local 
	}

	public function listOrden($permission){
		$data['list'] = $this->Otrabajos->otrabajos_List();
		$data['permission'] = $permission;
		$this->load->view('otrabajos/list', $data);
	}

	

	public function getotrabajo(){
		$data['data'] = $this->Otrabajos->getotrabajos($this->input->post());
		$response['html'] = $this->load->view('otrabajos/view_', $data, true);

		echo json_encode($response);
	}
	
	public function setotrabajo(){

		$data = $this->Otrabajos->setotrabajos($this->input->post());
		if($data  == false)
		{
			echo json_encode(false);
		}
		else
		{
			echo json_encode(true);	
		}
	}

	public function getasigna(){

		$id=$_GET['id_orden'];

		$result = $this->Otrabajos->getasigna($id);
		if($result)
		{	
			$arre['datos']=$result;

			echo json_encode($arre);
		}
		else echo "nada";
	}

	//pedidos
	public function getorden(){

		$id=$_POST['id_orden'];
		$result = $this->Otrabajos->getorden($id);
		if($result)
		{	
			$arre['datos']=$result;

			echo json_encode($arre);
		}
		else echo "nada";
	}

	//pedidos a entregar x fecha
	public function getpedidos(){

		$id=$_GET['fechai'];
		$result = $this->Otrabajos->getpedidos($id);
		if($result)
		{	
			$arre['datos']=$result;

			echo json_encode($arre);
		}
		else echo "nada";
	}
	// boton agregar

	public function agregar(){//ajax

	    if($_POST){
	      $agregar = $this->Otrabajos->agregar($_POST);
	      echo ($agregar===true)?"bien":"mal";
	    }
  	}

  	public function guardar(){	
		
		$id=$_POST['id_orden'];
		$datos=$_POST['data'];
		$result = $this->Otrabajos->update_guardar($id, $datos);		
		if($result >0)
		{   echo 1;
			
		}
		else echo "error al insertar";
	}

	public function getcliente(){
		
		$cliente = $this->Otrabajos->getcliente($this->input->post());
		if($cliente)
		{	
			$arre=array();
	        foreach ($cliente as $row ) 
	        {   
	           $arre[]=$row;
	        }
			echo json_encode($arre);
		}
		else echo "nada";
	}

	public function traer_sucursal(){

		$usuario = $this->Otrabajos->traer_sucursal();

		if($usuario)
		{	
			$arre=array();
	        foreach ($usuario as $row ) 
	        {   
	           $arre[]=$row;
	        }
			echo json_encode($arre);
		}
		else echo "nada";
	}

//esto habira que cambiar para hacerlo que sea por autcompletar
	public function getusuario(){
		
		$usuario = $this->Otrabajos->getusuario();

		if($usuario)
		{	
			$arre=array();
	        foreach ($usuario as $row ) 
	        {   
	           $arre[]=$row;
	        }
			echo json_encode($arre);
		}
		else echo "nada";
	}

	/*public function getusuario (){
      $response = $this->Ordenservicios->getusuario();
      echo json_encode($response);
    }*/

	
//nuevo
	public function traer_cli(){
		
		$usuario = $this->Otrabajos->traer_cli();


		if($usuario)
		{	
			$arre=array();
	        foreach ($usuario as $row ) 
	        {   
	           $arre[]=$row;
	        }
			echo json_encode($arre);
		}
		else echo "nada";
	}

	//traer grupo
	public function getgrupo(){
				
		$grupo = $this->Otrabajos->getgrupo();
		
		if($grupo)
		{	
			$arre=array();
	        foreach ($grupo as $row ) 
	        {   
	           $arre[]=$row;
	        }
			echo json_encode($arre);
		}
		else echo "nada";
	}

	

	public function getnum(){
	
		$id=$_POST['id_orden'];
		
		$grupo = $this->Otrabajos->getnums();
		
		echo json_encode($grupo);
	}

	//GUARDAR PEDIDO
	public function guardarorden(){
		
		$datos=$_POST['datos'];
		$result = $this->Otrabajos->insert_pedido($datos);	
		$id=$this->db->insert_id();
		$result2 = $this->Otrabajos->get_pedido($id);

		echo json_encode($result2);

	}

	public function guardar_agregar(){

		$userdata = $this->session->userdata('user_data');
        $usrId= $userdata[0]['usrId']; 
	    if($_POST) {
	    	//$datos=$_POST['parametros'];
	    	$num=$_POST['num'];
	    	$descripcion=$_POST['descripcion'];
	    	$cliente=$_POST['cliente'];
	    	$sucursal=$_POST['sucursal'];
	    	$proveedor=$_POST['proveedor'];

	    	$datos2 = array(
			        	 'nro'=>$num, 
			        	 'fecha_inicio'=>date('Y-m-d H:i:S'),
			        	 'descripcion'=>$descripcion,
			        	 'cliId' =>$cliente,
			        	 'estado' =>'C',
			        	 'id_usuario' =>$usrId,
			        	 'id_usuario_a' =>1,
			        	 'id_sucursal' => $sucursal,
			        	 'id_proveedor' => $proveedor
			        	 
		        		);

	     	$result = $this->Otrabajos->guardar_agregar($datos2);
	      	//print_r($this->db->insert_id());
	      	/*if($result)
	      		echo $this->db->insert_id();
	      	else echo 0;*/
	      	return true;
	    }
  	}


	public function agregar_usuario(){

	    if($_POST) {
	    	$datos=$_POST['datos'];

	     	$result = $this->Otrabajos->agregar_usuario($datos);
	      	//print_r($this->db->insert_id());
	      	if($result)
	      		echo $this->db->insert_id();
	      	else echo 0;
	    }
  	}

  	//traer proveedor
  	public function getproveedor(){
		
		//$id=$_POST['id_proveedor'];
		$proveedor= $this->Otrabajos->getproveedor();
		//echo json_encode($Customers);

		if($proveedor)
		{	
			$arre=array();
	        foreach ($proveedor as $row ) 
	        {   
	           $arre[]=$row;
	        }
			echo json_encode($arre);
		}
		else echo "nada";
	}

	//argegar un proveedor
	public function agregar_proveedor()
	{

	    if($_POST)
	    {
	    	$datos=$_POST['datos'];

	     	$result = $this->Otrabajos->agregar_proveedor($datos);
	      	//print_r($this->db->insert_id());
	      	if($result)
	      		echo $this->db->insert_id();
	      	else echo 0;
	    }
  	}

  	public function agregar_pedido()
	{

	    $datos=$_POST['data'];
	    $idot=$_POST['ido'];

	    $result = $this->Otrabajos->agregar_pedidos($datos);
	      	//print_r($this->db->insert_id());
	    if($result){
	      
	    	
	    	$id= $this->db->insert_id();
	    	$fec= date("Y-m-d H:i:s");
	    	
	    	$fecha = array(
			        	 'fecha'=>$fec
 
		        		);
	    	$result1 = $this->Otrabajos->agregar_pedidos_fecha($fecha,$id);

	    	$arre=array();
	    	$datos2 = array(
			        	 'id_orden'=>$idot, 
			        	 'estado'=>'P'			        	
			        	 
		        		);

	    	$result2 = $this->Otrabajos->update_ordtrab($idot, $datos2);
	    }
	   return $result2; 		
	   
  	}
  	
  	

  	public function getmostrar(){

	    $idm=$_POST['idorde'];
	    $dat= $this->Otrabajos->getdatos($idm); //traigo todos los datos 
	    echo json_encode($dat);
  	}

  	public function baja_orden(){
  
	    $idO=$_POST['idord'];
	    $result = $this->Otrabajos->eliminacion($idO);
	    print_r($result);
  	}


	public function guardar_editar(){
	
		$idequipo=$_POST['idp'];
		$datos=$_POST['parametros'];
		//$datos = array('estado'=>'E');

		//doy de baja
		$result = $this->Otrabajos->update_edita($idequipo,$datos);
		print_r($result);	
	}


	public function getpencil(){
		$id=$_POST['idp'];
		//print_r($id);
		$result = $this->Otrabajos->getpencil($id);
		print_r(json_encode($result));
	}

	public function getArticulo (){
      $response = $this->Otrabajos->getArticulos($this->input->post());
      echo json_encode($response);
    }

 //mdificado

 	public function EliminarTarea(){
	
		$idord=$_POST['idtarea'];	
		$datos = array('estado'=>'IN');
		$result = $this->Otrabajos->EliminarTareas($idord, $datos);
		print_r($result);
	
	}
	//de aca para adelante nuevo 
	/*public function cambiar_estado(){
	
		$idord=$_GET['id_orden'];
		
		$datos = array('tarea_realizada'=>'RE');
		 //$this->load->model('modalbaja');

		//doy de baja
		$result = $this->Otrabajos->cambiar_estados($idord, $datos);
		print_r($result);
	
	}*/
	//modificada

	// Cambia estado a tarea realizada (por id de tarea) - listo 
	public function TareaRealizada(){
	
		$idord=$_GET['idtarea'];	
		$datos = array('estado'=>'RE');
		//$datos = array('estado'=>8);
		$result = $this->Otrabajos->TareaRealizadas($idord, $datos);
		print_r($result);	
	}

	public function ModificarUsuario(){
	
		$idta=$_POST['idtarea'];
		$idu=$_POST['idusu'];
		$datos = array('id_usuario'=>$idu);
		$result = $this->Otrabajos->ModificarUsuarios($idta, $datos);
		echo json_encode($result);	
	}

	public function ModificarFecha(){
	
		$idta=$_POST['idtarea'];
		$idu=$_POST['idusu'];
		$fe=$_POST['fe'];
		
		$uno=substr($fe, 0, 2); 
        $dos=substr($fe, 3, 2); 
        $tres=substr($fe, 6, 4); 
        $resul = ($tres."/".$dos."/".$uno); 
		$datos = array('fecha'=>$resul);

		
		$result = $this->Otrabajos->ModificarFechas($idta, $datos);
		print_r($result);	
	}

	public function CambioParcial(){
	
		$idor=$_POST['idfin'];
		$datos = array('estado'=>'TE');
		$result = $this->Otrabajos->CambioParcials($idor, $datos);
		print_r($result);
	
	}

	public function FinalizaOt(){
	
		$idequipo=$_POST['idfin'];
		$fecha = date("Y-m-d H:i:s");
		$result = $this->Otrabajos->update_cambio($idequipo, $fecha);
		print_r($result);
	
	}


///////// Calendario Hugo  ////////////////

	// Carga tareas en pantala asignacion por id de OT
	public function cargartarea($permission,$idglob){ 
		$data['list'] = $this->Otrabajos->cargartareas($idglob);
		$data['id_orden'] = $idglob; 
        $data['permission'] = $permission;

		//var_dump($data);

        $this->load->view('otrabajos/asignacion',$data);  
    }
	
	// Trae taresas estandar
	public function getTareaSdt(){

		$response = $this->Otrabajos->getTareaSdt();
		echo json_encode($response);
	}

	// Trae equipos
	public function getEquipo(){
	
		$response = $this->Otrabajos->getEquipos();
		echo json_encode($response);
	}

	// Trae plantillas para llenar select
	public function getPlantilla(){
		
		$response = $this->Otrabajos->getPlantillas();
		echo json_encode($response);
	}

	// Trae tareas por plantillas pre armadas 
	public function getTareasPlantilla(){
		$idPlantilla = $this->input->post('idPlantilla');
		$response = $this->Otrabajos->getTareasPlantillas($idPlantilla);
		echo json_encode($response);
		
	}


	/// Guarda tarea nueva con usuario logueado
  	public function agregar_tarea(){

  		//// USUARIO LOGUEADO
        $userdata = $this->session->userdata('user_data');
        $usrId = $userdata[0]['usrId'];     // guarda usuario logueado   
	  	$datos['id_usuario'] = $usrId;

		$datos=$_POST['parametros']; 		
		$idTarea = $datos['id_tarea']; 			

		// traae duracion stdy la guarda como programada
		$durac = $this->Otrabajos->getDuracTareaSTD($idTarea);
		$datos['duracion_prog'] = $durac;

	    $result = $this->Otrabajos->agregar_tareas($datos);	      	
	   
	   	if($result)
	      		echo $this->db->insert_id();
	      	else echo 0;	
	   
  	}
  	

	// Guarda tareas de plantilla
	public function setTareasPlant(){

		$idsTareas = $this->input->post('idsTareas');
		$numOT = $this->input->post('numOT');
		$batch = $this->Otrabajos->armarBatch($numOT,$idsTareas);
		$response = $this->Otrabajos->setBatch($batch);

		echo json_encode($response);
	}

	public function setEquipo(){

		$id_listarea = $this->input->post('id_listarea');
		$id_equipo = $this->input->post('id_equipo');
		$response = $this->Otrabajos->setEquipos($id_listarea,$id_equipo);
		echo json_encode($response);
	}

	/////// Hugo Programacion de tareas trazajobs

	// Trae subsectores para select
	public function getSubsectores(){
		$response = $this->Otrabajos->getSubsectores();
		echo json_encode($response);
   	}

   	// Trae equipos de un sector por id de sector
   	public function getEquipPorIdSubsector(){

   		$id_subsector = $this->input->post('idsubsector');
   		$response = $this->Otrabajos->getEquipPorIdSubsector($id_subsector);
		echo json_encode($response);
   	}
   
   	// Trae tareas por mes y por id de OT para calendario
   	public function getcalendTareas(){
   		
   		$data = $this->Otrabajos->getcalendTareas($this->input->post());
		if($data  == false){
			echo json_encode(false);
		}
		else{
			echo json_encode($data);
		}
   	}



   	


   	// Trae tareas por mes, Por Sector y por Equipo para calendario
   	public function getcalendTareasSector(){
   		
   		$data = $this->Otrabajos->getcalendTareasSect($this->input->post());
		
		

		if($data  == false){
			echo json_encode(false);
		}
		else{
			echo json_encode($data);
		}
   	}

   	public function getcalendTareasEquipo(){

   		$data = $this->Otrabajos->getcalendTareasEquipo($this->input->post());
		if($data  == false){
			echo json_encode(false);
		}
		else{
			echo json_encode($data);
		}
   	}



   	// Actualiza el nuevo dia programado para una tarea
   	public function updateDiaProgTarea(){

   		$id = $this->input->post('id');
   		$diaNuevo = $this->input->post('prog');
   		$response = $this->Otrabajos->updateDiaProgTareas($id, $diaNuevo);

		echo json_encode($response);
   	}

   	// Actualiza la nueva duracion de la Tarea en listareas
   	public function updateDurTarea(){

   		$id = $this->input->post('id');
   		$duracion = $this->input->post('duracion');    		   
   		$response = $this->Otrabajos->updateDurTarea($id, $duracion);
		echo json_encode($response);
   	}

   	public function programTarea(){

   		$datos = $this->input->post();   			   
   		$response = $this->Otrabajos->programTareas($datos);
		echo json_encode($response);
   	}
   		


 
}