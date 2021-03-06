<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Calendarios extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}	

	function Equipos_List(){

		$this->db->order_by('codigo','asc');
		$this->db->order_by('descripcion','asc');
		$query= $this->db->get('equipos');
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{
			return false;
		}
	}
	
	function setVisit($data = null){
		if($data == null)
		{
			return false;
		}
		else
		{
			$equipId = $data['equip'];
			$dia = $data['fecha'];
			$hora = $data['hora'];
			$min = $data['min'];
			$note = $data['falla'];
			
			
			$dia = explode('-', $dia);
			
			$insert = array(
				   'fecha_inicio' => $dia[2].'-'.$dia[1].'-'.$dia[0],
				   'id_equipo' => $equipId,
				   'estado' => 'C',
				   'tipo' => '2',
				   'id_sucursal' => '1',
				   'id_tarea' => '1',
				   'id_usuario' => '1',
				   'id_usuario_a' => '1',
				    'id_usuario_e' => '1',
				   'descripcion' => $note
				);


			if($this->db->insert('orden_trabajo', $insert) == false) {
				return false;
			}else{
				return "Se programo la Orden de Trabajo para el día <br>".$data['dia']." a las ".$data['hora'].":".$data['min'];
			}
		}
	}		

	function getpred($data = null){
		
		if($data == null)
		{
			return false;
		}
		else
		{
			$month = $data['month'] + 1 ;

			$sql= "select predictivo.predId, 
					predictivo.tarea_descrip, 
					predictivo.periodo, 
					predictivo.cantidad, 
					predictivo.fecha, 
					equipos.id_equipo, 
					predictivo.estado,
					predictivo.id_equipo, 
					tareas.descripcion,					 
					DATE_ADD(predictivo.fecha, INTERVAL predictivo.cantidad DAY) AS prox 
					from predictivo 
					join equipos ON predictivo.id_equipo = equipos.id_equipo 
					join tareas ON predictivo.tarea_descrip = tareas.id_tarea 
					where predictivo.estado = 'C' 
					AND month(DATE_ADD(predictivo.fecha, INTERVAL predictivo.cantidad DAY)) = $month ";
			
			$query= $this->db->query($sql);
			
			if ($query->num_rows()!=0)
			{
				return $query->result_array();	
			}
			else
			{
				return false;
			}
		}
	}

	

	/// MANDA ORDENES DE TRABAJO AL CALENDARIO (programadas)
	function getot($data = null){		
		
		$month = $data['month'] + 1 ;	

		$sql= "SELECT orden_trabajo.id_orden,
				orden_trabajo.nro,
				orden_trabajo.fecha_program,
				orden_trabajo.tipo,
				orden_trabajo.descripcion,
				orden_trabajo.duracion,
				equipos.codigo 
				from orden_trabajo
				INNER JOIN equipos ON equipos.id_equipo = orden_trabajo.id_equipo
				WHERE orden_trabajo.estado = 'C' 
				AND month(orden_trabajo.fecha_program)  = $month ";
		
		$query= $this->db->query($sql);
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{
			return false;
		}
	}
	
	// Correctivos para la Tabla por id de empresa logueada - Listo
	function getsservicio($data = null){		
		
		$userdata = $this->session->userdata('user_data');
        $empId = $userdata[0]['id_empresa'];

		$month = $data;			
		
		$sql= " SELECT solicitud_reparacion.id_solicitud,
						solicitud_reparacion.numero,
						solicitud_reparacion.id_tipo,
						solicitud_reparacion.nivel,
						solicitud_reparacion.solicitante,
						solicitud_reparacion.f_solicitado,
						solicitud_reparacion.f_sugerido,
						solicitud_reparacion.hora_sug,
						equipos.descripcion,
						equipos.codigo,
						equipos.id_equipo,
						solicitud_reparacion.correctivo,
						solicitud_reparacion.causa,
						sector.descripcion AS sector
				FROM solicitud_reparacion
				INNER JOIN equipos ON equipos.id_equipo = solicitud_reparacion.id_equipo
				INNER JOIN sector ON sector.id_sector = equipos.id_sector
				WHERE month(solicitud_reparacion.f_solicitado) = $month
				AND solicitud_reparacion.id_empresa = $empId";			
		
		$query= $this->db->query($sql);
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{
			return false;
		}		
	}

	// Trae preventivos
	function getPreventivos($data = null){		
		
		$userdata = $this->session->userdata('user_data');
        $empId = $userdata[0]['id_empresa'];

		$month = $data;

		$sql_ant = "select preventivo.prevId, preventivo.id_tarea, preventivo.perido, preventivo.cantidad, preventivo.ultimo, preventivo.id_equipo, equipos.codigo, equipos.id_equipo, tareas.descripcion, 
			DATE_ADD(preventivo.ultimo, INTERVAL preventivo.cantidad DAY) AS prox 
			from preventivo join equipos ON preventivo.id_equipo = equipos.id_equipo 
			join tareas ON preventivo.id_tarea = tareas.id_tarea 
			where (preventivo.estadoprev = 'C') AND 
			(month(DATE_ADD(preventivo.ultimo, INTERVAL preventivo.cantidad DAY)) = $month or month(preventivo.ultimo) = $month)";	

		$sql= "select preventivo.prevId, 
					preventivo.id_tarea, 
					preventivo.perido, 
					preventivo.cantidad, 
					preventivo.ultimo,
					preventivo.id_equipo,

					equipos.codigo, 
					equipos.id_equipo, 
					 
					tareas.descripcion,
					 
					DATE_ADD(preventivo.ultimo, INTERVAL preventivo.cantidad DAY) AS prox 
					from preventivo 
					join equipos ON preventivo.id_equipo = equipos.id_equipo 
					join tareas ON preventivo.id_tarea = tareas.id_tarea 
					where preventivo.estadoprev = 'C'
					AND month(DATE_ADD(preventivo.ultimo, INTERVAL preventivo.cantidad DAY)) = $month 
					AND preventivo.id_empresa = $empId";	


			
			$query= $this->db->query($sql);
			
			if ($query->num_rows()!=0)
			{
				return $query->result_array();	
			}
			else
			{
				return false;
			}		
	}	

	// Preventivos por Hora para la Tabla
	function getPreventivosHoras($data = null){		
		
			$month = $data['month'] + 1 ;	

			$sql= "select preventivo.prevId, 
					preventivo.id_tarea, 
					preventivo.perido, 
					preventivo.cantidad, 
					preventivo.ultimo,
					preventivo.id_equipo,

					equipos.codigo, 
					equipos.id_equipo, 
					 
					tareas.descripcion,
					 
					DATE_ADD(preventivo.ultimo, INTERVAL preventivo.cantidad DAY) AS prox 
					from preventivo 
					join equipos ON preventivo.id_equipo = equipos.id_equipo 
					join tareas ON preventivo.id_tarea = tareas.id_tarea 
					where preventivo.estadoprev = 'C' and preventivo.perido = 'Horas'";
					//AND month(DATE_ADD(preventivo.ultimo, INTERVAL preventivo.cantidad DAY)) = $month ";
			
			$query= $this->db->query($sql);
			
			if ($query->num_rows()!=0)
			{
				return $query->result_array();	
			}
			else
			{
				return false;
			}		
	}

	// Backlog para la Tabla por id de empresa logueada - Listo
	function getbacklog($data = null){	

		$userdata = $this->session->userdata('user_data');
        $empId = $userdata[0]['id_empresa'];	
		
		$month = $data;				

		$sql="SELECT
					tbl_back.backId,
					tbl_back.estado,
					tbl_back.fecha,
					tbl_back.tarea_descrip,
					tbl_back.id_equipo,
					tbl_back.back_duracion,
					equipos.descripcion,
					equipos.codigo,
					tareas.descripcion as tarea
					FROM
					tbl_back
					INNER JOIN equipos ON equipos.id_equipo = tbl_back.id_equipo
					INNER JOIN tareas ON tareas.id_tarea = tbl_back.tarea_descrip
					WHERE tbl_back.estado = 'C' AND month(tbl_back.fecha) = $month 
					AND tbl_back.id_empresa = $empId" ; 
			
			$query= $this->db->query($sql);
			
			if ($query->num_rows()!=0)
			{
				return $query->result_array();	
			}
			else
			{
				return false;
			}
		
	}

	// Predictivos para la Tabla por id de empresa logueada - Listo
	function getpredlist($data = null){		
		
		$userdata = $this->session->userdata('user_data');
        $empId = $userdata[0]['id_empresa'];

		$month = $data;

		$sql= "select predictivo.predId, 
				predictivo.tarea_descrip,  
				predictivo.periodo, 
				predictivo.cantidad, 
				predictivo.fecha,
				predictivo.horash, 
				predictivo.id_equipo,				
				equipos.id_equipo,
				equipos.codigo, 	
				tareas.descripcion,
				sector.descripcion AS sector 
				from predictivo 
				join equipos ON predictivo.id_equipo = equipos.id_equipo 
				join tareas ON predictivo.tarea_descrip = tareas.id_tarea
				join sector ON sector.id_sector = equipos.id_sector 
				where predictivo.estado = 'C' AND month(predictivo.fecha) = $month 
				and predictivo.id_empresa = $empId";
		
		$query= $this->db->query($sql);
		
		if ($query->num_rows()!=0)
		{
			return $query->result_array();	
		}
		else
		{
			return false;
		}
	}

	//Preventivo por Id
	function getPrevPorIds($data){
        
        $id = $data;
    
        $this->db->select('preventivo.id_tarea, 
			        	preventivo.ultimo, 
			        	preventivo.prevId,
						preventivo.id_equipo,
						tareas.descripcion
						');
        $this->db->from('preventivo');
        $this->db->join('tareas', 'tareas.id_tarea = preventivo.id_tarea');
        $this->db->where('preventivo.prevId', $id);
        $query = $this->db->get();      
        
        return $query->result_array();                
    
	}

	//correctivo por Id
	function getCorrectPorIds($data){

		$id = $data;
    
        $this->db->select('solicitud_reparacion.id_solicitud,
			        	solicitud_reparacion.f_solicitado, 
			        	solicitud_reparacion.causa,
						solicitud_reparacion.id_equipo						
						');
        $this->db->from('solicitud_reparacion');        
        $this->db->where('solicitud_reparacion.id_solicitud', $id);
        $query = $this->db->get();      
        
        return $query->result_array();  
	}

	function getBackPorIds($data){
		$id = $data;
    
        $this->db->select('tareas.descripcion,
						tbl_back.id_equipo,
						tbl_back.tarea_descrip,
						tbl_back.fecha,
						tbl_back.backId						
						');
        $this->db->from('tbl_back'); 
        $this->db->join('tareas', 'tareas.id_tarea = tbl_back.tarea_descrip');       
        $this->db->where('tbl_back.backId', $id);
        $query = $this->db->get();      
        
        return $query->result_array(); 
	}

	function getPredictPorIds($data){
		$id = $data;
    
        $this->db->select('predictivo.tarea_descrip,
						tareas.descripcion,
						predictivo.predId,
						predictivo.id_equipo,
						predictivo.fecha
						');
        $this->db->from('predictivo');
        $this->db->join('tareas', 'tareas.id_tarea = predictivo.tarea_descrip');
        $this->db->where('predictivo.predId', $id);
        $query = $this->db->get();      
        
        return $query->result_array(); 
	}


	//Guarda orden de trabajo a partir de Pred/Correc/Backlog/Prevent
	function guardar_agregar($data){
                   
        $query = $this->db->insert("orden_trabajo",$data);
    	return $query;        
    }

    // Guarda batch de OT 
    function setOTbatch($data){

    	$this->db->insert_batch('orden_trabajo', $data);
    }

    // Actualiza dia nueva fecha de programacion en OT
    function updateDiaProgramacion($id, $diaNuevo){   		
   		
   		$this->db->set('fecha_program', $diaNuevo);
		$this->db->where('id_orden', $id);
		$resposnse = $this->db->update('orden_trabajo');
		return $resposnse;
   	}

   	// Actualiza la nueva duracion de la OT 
   	function updateDuraciones($id, $nueva){

   		$this->db->set('duracion', $nueva);
		$this->db->where('id_orden', $id);
		$resposnse = $this->db->update('orden_trabajo');
		return $resposnse;
   	}


	/**
     * Trae listado de equipos que tengan mantenimiento preventivo por horas
     *
     * @return  Array   Vuleca la variable o no devuelve nada
     */
    function getPreventivosPorHora()
    {
        $this->db->select('equipos.codigo, equipos.descripcion, equipos.id_equipo, equipos.ultima_lectura, sector.descripcion as descripSector, preventivo.estadoprev, preventivo.prevId, preventivo.cantidad, preventivo.critico1');
        $this->db->from('preventivo');
        $this->db->join('equipos', 'equipos.id_equipo = preventivo.id_equipo', 'inner');
        $this->db->join('sector', 'sector.id_sector = equipos.id_sector', 'inner');
        $this->db->where('preventivo.perido', 'Horas');
        $this->db->where('equipos.estado', 'AC');

        $query= $this->db->get();

        if ($query->num_rows() > 0)
        {
            $preventivos  = $query->result_array();
            $data['data'] = $this->revisaEstadoPreventivosPorHoras( $preventivos );
            //$data['data'] = $query->result_array();

            return  $data;
        }
        else
        {
            return false;
        }
    }

    
    // bucle que recorra preventivos
    //      con id_equipo traigo historial_lecturas ->ultima lectura
    //      hago cuenta
    //      si es necesario llamo funcion que cambia estado de preventivo
    //      cambio $preventivos[estadoprev]
    // cierro bucle
    // devuelvo $preventivos
    function revisaEstadoPreventivosPorHoras( $preventivos )
    {
        $cantPreventivos = sizeof( $preventivos );
        for ($i=0; $i<$cantPreventivos; $i++)
        {
            $lecturaActual = $this->getLecturaActual( $preventivos[$i]['id_equipo'] );
            //dump( $lecturaActual, 'Lectura Actual' );
            //dump( $preventivos[$i]['ultima_lectura'], 'Ultima lectura' );
            //dump( $preventivos[$i]['cantidad'], 'cantidad' );
            //dump( $preventivos[$i]['critico1'], 'critico' );


            //1er caso: lecturaactual - ultimalectura >= cantidad  => estado vencido
            if (($lecturaActual - $preventivos[$i]['ultima_lectura']) >= $preventivos[$i]['cantidad'])
            {
                if ($preventivos[$i]['estadoprev'] != 'VE')
                {
                    $this->cambiaEstadoPreventivo( $preventivos[$i]['prevId'], 'VE' );
                    $preventivos[$i]['estadoprev'] = 'VE';
                }
            }

            //2do caso: lecturaactual - ultimalectura < cantidad  => estado en curso
            if (($lecturaActual - $preventivos[$i]['ultima_lectura']) < $preventivos[$i]['cantidad'])
            {
                //3er caso: > cantidad => estado critico
                if (($lecturaActual - $preventivos[$i]['ultima_lectura']) > $preventivos[$i]['cantidad'])
                {
                    if ($preventivos[$i]['estadoprev'] != 'CR')
                    {
                        $this->cambiaEstadoPreventivo( $preventivos[$i]['prevId'], 'CR' );
                        $preventivos[$i]['estadoprev'] = 'CR';
                    }
                }
                else // si no es critico => esta en curso
                {
                    if ($preventivos[$i]['estadoprev'] != 'C')
                    {
                        $this->cambiaEstadoPreventivo( $preventivos[$i]['prevId'], 'C' );
                        $preventivos[$i]['estadoprev'] = 'C';
                    }
                }
            }
        }
        return $preventivos;
    }

    /**
     * Devuelve la ultima lectura de un equipo determinado
     *
     * @param   String  $id_equipo  Equipo que se quiere saber la ultima lectura
     * @return  Int     Última lectura
     */
    function getLecturaActual( $id_equipo )
    {
        $this->db->select('lectura');
        $this->db->from('historial_lecturas');
        $this->db->where('id_equipo', $id_equipo);
        $this->db->order_by('id_lectura', 'desc');
        $this->db->limit(1);

        $query= $this->db->get();

        if ($query->num_rows() > 0)
        {
            $data  = $query->result_array();
            return  (int)$data[0]['lectura'];
        }
        else
        {
            return false;
        }
    }

    /**
     * Cambia el campo Estado de la tabla preventivo
     *
     * @param   String  $idPreventivo   Id del preventivo a modificar
     * @param   String  $estado         Valor del nuevo estado
     * @return  bool                    Cambio correcto o incorrecto
     */
    function cambiaEstadoPreventivo( $idPreventivo, $estado )
    {
        $this->db->trans_start();   // inicio transaccion

            $data = array(
                   'estadoprev' => $estado
                );
            $this->db->where('prevId', $idPreventivo);
            $this->db->update('preventivo', $data);

        $this->db->trans_complete(); //fin transaccion

        if ($this->db->trans_status() === FALSE)
        {
            return false;
        }
        else
        {
            return true;
        }
    }



   	


}
