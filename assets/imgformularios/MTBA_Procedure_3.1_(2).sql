CREATE DEFINER=`root`@`localhost` PROCEDURE `programar_tareas_armado`(formid INT,petrid INT, ordenid INT)
BEGIN
DECLARE done INT DEFAULT 0;
DECLARE nom VARCHAR(50);
DECLARE idtarea INT;
DECLARE tareas CURSOR FOR
           SELECT VALO_NOMBRE,id_tarea FROM frm_formularios_completados A JOIN tareas B ON A.VALO_NOMBRE=B.descripcion  WHERE form_id = formid and petr_id=petrid and valor="tilde" and descripcion IN (
			'850-LAVADO DE MOTOR DE 4 CILINDRO',
			'860-LAVADO DE MOTOR DE 5 CILINDRO',
			'870-LAVADO DE MOTOR DE 6 CILINDRO',
			'880-LAVADO DE MOTOR DE 8 CILINDRO',
			'881-LAVADO DE MOTOR DE 12 CILINDRO',
			'748-LAVADO DE TAPA DE CILINDRO',
			'750-GRANALLADO DE TAPA DE CILINDRO',
			'1014-SEMI-ARMADO MOTOR NAFTERO 4 CIL.',
			'1020-SEMI-ARMADO MOTOR NAFTERO 5 CIL.',
			'1022-SEMI-ARMADO MOTOR NAFTERO 6 CIL.',
			'1024-SEMI-ARMADO MOTOR NAFTERO 8 CIL.',
			'1054-SEMI-ARMADO MOTOR GASOLERO GR. 4 CIL.',								
			'1060-SEMI-ARMADO MOTOR GASOLERO GR. 5 CIL.',							
			'1062-SEMI-ARMADO MOTOR GASOLERO GR. 6 CIL.',
			'1064-SEMI-ARMADO MOTOR GASOLERO GR. 8 CIL.',
			'1065-SEMI-ARMADO MOTOR GASOLERO GR.12 CIL.',
			'1188-COLOCAR Y PROBAR MOTOR EN BANCO PRUEBA',
			'1191-MANO DE OBRA DESARME & EVALUACION',
			'2066-CONTROLAR Y CALIBRAR BOMBA INYECTORA',
			'2069-CONTROLAR Y CALIBRAR INYECTORES',
			'2075-CAMBIO DE PUNTA DE MANGA DIFERENCIAL',
			'2110-MANO DE OBRA DE SERVICIO EN CAMPO',
			'2110-TRASLADO PARA SERVICIO EN CAMPO',
			'2102-COLOCAR ESCANER PARA EXTRAER DATOS',
			'2045-REPARAR TURBO CAMION',
			'2050-REPARAR TURBO AUTOMOVIL',
			'2060-REPARAR TURBO MAQUINA INDUSTRIAL',
			'1074-ARMADO DE MOTOR NAFTERO 4 CIL.',
			'1080-ARMADO DE MOTOR NAFTERO 5 CIL.',
			'1082-ARMADO DE MOTOR NAFTERO 6 CIL.',
			'1084-ARMADO DE MOTOR NAFTERO 8 CIL.',
			'1094-ARMADO DE MOTOR GASOLERO CH. 4 CIL.',
			'1100-ARMADO DE MOTOR GASOLERO CH. 5 CIL.',
			'1102-ARMADO DE MOTOR GASOLERO CH. 6 CIL.',
			'1104-ARMADO DE MOTOR GASOLERO CH. 8 CIL.',
			'1114-ARMADO DE MOTOR GASOLERO GR. 4 CIL.',
			'1120-ARMADO DE MOTOR GASOLERO GR. 5 CIL.',
			'1122-ARMADO DE MOTOR GASOLERO GR. 6 CIL.',
			'1124-ARMADO DE MOTOR GASOLERO GR. 8 CIL.'
);  
DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
OPEN tareas;


Iteracion: LOOP
    FETCH tareas INTO nom,idtarea;
    IF done = 1 THEN
      LEAVE Iteracion;
    END IF;
	INSERT INTO tbl_listarea (tareadescrip,id_tarea,id_orden) values(nom,idtarea,ordenid);

END LOOP Iteracion;

CLOSE tareas;
END