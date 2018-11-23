<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-11-22 10:41:09 --> Config Class Initialized
INFO - 2018-11-22 10:41:09 --> Hooks Class Initialized
DEBUG - 2018-11-22 10:41:09 --> UTF-8 Support Enabled
INFO - 2018-11-22 10:41:09 --> Utf8 Class Initialized
INFO - 2018-11-22 10:41:09 --> URI Class Initialized
INFO - 2018-11-22 10:41:09 --> Router Class Initialized
INFO - 2018-11-22 10:41:09 --> Output Class Initialized
INFO - 2018-11-22 10:41:09 --> Security Class Initialized
DEBUG - 2018-11-22 10:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 10:41:09 --> Input Class Initialized
INFO - 2018-11-22 10:41:09 --> Language Class Initialized
INFO - 2018-11-22 10:41:09 --> Loader Class Initialized
INFO - 2018-11-22 10:41:10 --> Helper loaded: url_helper
INFO - 2018-11-22 10:41:10 --> Helper loaded: directory_helper
INFO - 2018-11-22 10:41:10 --> Helper loaded: file_helper
INFO - 2018-11-22 10:41:10 --> Helper loaded: form_helper
INFO - 2018-11-22 10:41:10 --> Helper loaded: general_helper
INFO - 2018-11-22 10:41:10 --> Helper loaded: formulario_helper
INFO - 2018-11-22 10:41:10 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 10:41:10 --> Helper loaded: popup_helper
INFO - 2018-11-22 10:41:10 --> Database Driver Class Initialized
DEBUG - 2018-11-22 10:41:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 10:41:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 10:41:10 --> Controller Class Initialized
INFO - 2018-11-22 10:41:10 --> Model Class Initialized
INFO - 2018-11-22 10:41:10 --> Model Class Initialized
INFO - 2018-11-22 10:41:10 --> Model Class Initialized
INFO - 2018-11-22 10:41:10 --> Model Class Initialized
ERROR - 2018-11-22 10:41:10 --> Severity: Warning --> file_get_contents(http://35.239.41.196:7070/bonita/loginservice?password=bpm&amp;redirect=false): failed to open stream: HTTP request failed! HTTP/1.1 401 
 D:\sitios\MTBA-desa-procprod\application\models\Bonitas.php 156
ERROR - 2018-11-22 10:41:11 --> Severity: Warning --> file_get_contents(http://35.239.41.196:7070/bonita/API/bpm/humanTask?p=0&amp;c=1000&amp;f=user_id%3D): failed to open stream: HTTP request failed! HTTP/1.1 401 
 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 18
ERROR - 2018-11-22 10:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 46
ERROR - 2018-11-22 10:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() D:\sitios\MTBA-desa-procprod\application\views\tareas\list.php 38
INFO - 2018-11-22 10:41:11 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 10:41:11 --> Final output sent to browser
DEBUG - 2018-11-22 10:41:11 --> Total execution time: 2.0141
INFO - 2018-11-22 11:40:28 --> Config Class Initialized
INFO - 2018-11-22 11:40:28 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:40:28 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:40:28 --> Utf8 Class Initialized
INFO - 2018-11-22 11:40:28 --> URI Class Initialized
INFO - 2018-11-22 11:40:28 --> Router Class Initialized
INFO - 2018-11-22 11:40:28 --> Output Class Initialized
INFO - 2018-11-22 11:40:28 --> Security Class Initialized
DEBUG - 2018-11-22 11:40:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:40:28 --> Input Class Initialized
INFO - 2018-11-22 11:40:28 --> Language Class Initialized
INFO - 2018-11-22 11:40:28 --> Loader Class Initialized
INFO - 2018-11-22 11:40:28 --> Helper loaded: url_helper
INFO - 2018-11-22 11:40:28 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:40:28 --> Helper loaded: file_helper
INFO - 2018-11-22 11:40:28 --> Helper loaded: form_helper
INFO - 2018-11-22 11:40:28 --> Helper loaded: general_helper
INFO - 2018-11-22 11:40:28 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:40:28 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:40:28 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:40:28 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:40:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:40:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:40:28 --> Controller Class Initialized
INFO - 2018-11-22 11:40:28 --> Model Class Initialized
INFO - 2018-11-22 11:40:28 --> Model Class Initialized
ERROR - 2018-11-22 11:40:29 --> Query error: Unknown column 'orden_trabajo.usuario' in 'field list' - Invalid query: SELECT `orden_trabajo`.`id_orden`, `orden_trabajo`.`nro`, `orden_trabajo`.`fecha_inicio`, `orden_trabajo`.`fecha_entrega`, `orden_trabajo`.`fecha_terminada`, `orden_trabajo`.`fecha_aviso`, `orden_trabajo`.`fecha_entregada`, `orden_trabajo`.`descripcion`, `orden_trabajo`.`cliId`, `orden_trabajo`.`estado`, `orden_trabajo`. `id_usuario`, `orden_trabajo`.`id_usuario_a`, `user1`.`usrName` AS `nombre`, `orden_trabajo`.`id_usuario_e`, `orden_trabajo`.`id_sucursal`, `orden_trabajo`.`usuario`, `admcustomers`.`cliLastName`, `admcustomers`.`cliName`, `sucursal`.`descripc`
FROM `orden_trabajo`
JOIN `admcustomers` ON `admcustomers`.`cliId` = `orden_trabajo`.`cliId`
JOIN `sisusers` AS `user1` ON `user1`.`usrId` = `orden_trabajo`.`id_usuario_a`
JOIN `sucursal` ON `sucursal`.`id_sucursal` = `orden_trabajo`.`id_sucursal`
ORDER BY `orden_trabajo`.`id_orden`
INFO - 2018-11-22 11:40:29 --> Language file loaded: language/english/db_lang.php
INFO - 2018-11-22 11:40:41 --> Config Class Initialized
INFO - 2018-11-22 11:40:41 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:40:41 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:40:41 --> Utf8 Class Initialized
INFO - 2018-11-22 11:40:41 --> URI Class Initialized
INFO - 2018-11-22 11:40:41 --> Router Class Initialized
INFO - 2018-11-22 11:40:41 --> Output Class Initialized
INFO - 2018-11-22 11:40:41 --> Security Class Initialized
DEBUG - 2018-11-22 11:40:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:40:41 --> Input Class Initialized
INFO - 2018-11-22 11:40:41 --> Language Class Initialized
INFO - 2018-11-22 11:40:41 --> Loader Class Initialized
INFO - 2018-11-22 11:40:41 --> Helper loaded: url_helper
INFO - 2018-11-22 11:40:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:40:41 --> Helper loaded: file_helper
INFO - 2018-11-22 11:40:41 --> Helper loaded: form_helper
INFO - 2018-11-22 11:40:41 --> Helper loaded: general_helper
INFO - 2018-11-22 11:40:41 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:40:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:40:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:40:41 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:40:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:40:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:40:41 --> Controller Class Initialized
INFO - 2018-11-22 11:40:41 --> Model Class Initialized
INFO - 2018-11-22 11:40:41 --> Model Class Initialized
ERROR - 2018-11-22 11:40:41 --> Query error: Unknown column 'orden_trabajo.usuario' in 'field list' - Invalid query: SELECT `orden_trabajo`.`id_orden`, `orden_trabajo`.`nro`, `orden_trabajo`.`fecha_inicio`, `orden_trabajo`.`fecha_entrega`, `orden_trabajo`.`fecha_terminada`, `orden_trabajo`.`fecha_aviso`, `orden_trabajo`.`fecha_entregada`, `orden_trabajo`.`descripcion`, `orden_trabajo`.`cliId`, `orden_trabajo`.`estado`, `orden_trabajo`. `id_usuario`, `orden_trabajo`.`id_usuario_a`, `user1`.`usrName` AS `nombre`, `orden_trabajo`.`id_usuario_e`, `orden_trabajo`.`id_sucursal`, `orden_trabajo`.`usuario`, `admcustomers`.`cliLastName`, `admcustomers`.`cliName`, `sucursal`.`descripc`
FROM `orden_trabajo`
JOIN `admcustomers` ON `admcustomers`.`cliId` = `orden_trabajo`.`cliId`
JOIN `sisusers` AS `user1` ON `user1`.`usrId` = `orden_trabajo`.`id_usuario_a`
JOIN `sucursal` ON `sucursal`.`id_sucursal` = `orden_trabajo`.`id_sucursal`
ORDER BY `orden_trabajo`.`id_orden`
INFO - 2018-11-22 11:40:41 --> Language file loaded: language/english/db_lang.php
INFO - 2018-11-22 11:41:08 --> Config Class Initialized
INFO - 2018-11-22 11:41:08 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:41:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:41:08 --> Utf8 Class Initialized
INFO - 2018-11-22 11:41:08 --> URI Class Initialized
INFO - 2018-11-22 11:41:08 --> Router Class Initialized
INFO - 2018-11-22 11:41:08 --> Output Class Initialized
INFO - 2018-11-22 11:41:08 --> Security Class Initialized
DEBUG - 2018-11-22 11:41:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:41:08 --> Input Class Initialized
INFO - 2018-11-22 11:41:08 --> Language Class Initialized
INFO - 2018-11-22 11:41:08 --> Loader Class Initialized
INFO - 2018-11-22 11:41:08 --> Helper loaded: url_helper
INFO - 2018-11-22 11:41:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:41:08 --> Helper loaded: file_helper
INFO - 2018-11-22 11:41:08 --> Helper loaded: form_helper
INFO - 2018-11-22 11:41:08 --> Helper loaded: general_helper
INFO - 2018-11-22 11:41:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:41:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:41:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:41:08 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:41:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:41:08 --> Controller Class Initialized
INFO - 2018-11-22 11:41:08 --> Model Class Initialized
INFO - 2018-11-22 11:41:08 --> Model Class Initialized
ERROR - 2018-11-22 11:41:08 --> Query error: Unknown column 'orden_trabajo.usuario' in 'field list' - Invalid query: SELECT `orden_trabajo`.`id_orden`, `orden_trabajo`.`nro`, `orden_trabajo`.`fecha_inicio`, `orden_trabajo`.`fecha_entrega`, `orden_trabajo`.`fecha_terminada`, `orden_trabajo`.`fecha_aviso`, `orden_trabajo`.`fecha_entregada`, `orden_trabajo`.`descripcion`, `orden_trabajo`.`cliId`, `orden_trabajo`.`estado`, `orden_trabajo`. `id_usuario`, `orden_trabajo`.`id_usuario_a`, `user1`.`usrName` AS `nombre`, `orden_trabajo`.`id_usuario_e`, `orden_trabajo`.`id_sucursal`, `orden_trabajo`.`usuario`, `admcustomers`.`cliLastName`, `admcustomers`.`cliName`, `sucursal`.`descripc`
FROM `orden_trabajo`
JOIN `admcustomers` ON `admcustomers`.`cliId` = `orden_trabajo`.`cliId`
JOIN `sisusers` AS `user1` ON `user1`.`usrId` = `orden_trabajo`.`id_usuario_a`
JOIN `sucursal` ON `sucursal`.`id_sucursal` = `orden_trabajo`.`id_sucursal`
ORDER BY `orden_trabajo`.`id_orden`
INFO - 2018-11-22 11:41:08 --> Language file loaded: language/english/db_lang.php
INFO - 2018-11-22 11:41:10 --> Config Class Initialized
INFO - 2018-11-22 11:41:10 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:41:10 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:41:10 --> Utf8 Class Initialized
INFO - 2018-11-22 11:41:10 --> URI Class Initialized
INFO - 2018-11-22 11:41:10 --> Router Class Initialized
INFO - 2018-11-22 11:41:10 --> Output Class Initialized
INFO - 2018-11-22 11:41:10 --> Security Class Initialized
DEBUG - 2018-11-22 11:41:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:41:10 --> Input Class Initialized
INFO - 2018-11-22 11:41:11 --> Language Class Initialized
INFO - 2018-11-22 11:41:11 --> Loader Class Initialized
INFO - 2018-11-22 11:41:11 --> Helper loaded: url_helper
INFO - 2018-11-22 11:41:11 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:41:11 --> Helper loaded: file_helper
INFO - 2018-11-22 11:41:11 --> Helper loaded: form_helper
INFO - 2018-11-22 11:41:11 --> Helper loaded: general_helper
INFO - 2018-11-22 11:41:11 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:41:11 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:41:11 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:41:11 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:41:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:41:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:41:11 --> Controller Class Initialized
INFO - 2018-11-22 11:41:11 --> Model Class Initialized
INFO - 2018-11-22 11:41:11 --> Model Class Initialized
ERROR - 2018-11-22 11:41:11 --> Query error: Unknown column 'orden_trabajo.usuario' in 'field list' - Invalid query: SELECT `orden_trabajo`.`id_orden`, `orden_trabajo`.`nro`, `orden_trabajo`.`fecha_inicio`, `orden_trabajo`.`fecha_entrega`, `orden_trabajo`.`fecha_terminada`, `orden_trabajo`.`fecha_aviso`, `orden_trabajo`.`fecha_entregada`, `orden_trabajo`.`descripcion`, `orden_trabajo`.`cliId`, `orden_trabajo`.`estado`, `orden_trabajo`. `id_usuario`, `orden_trabajo`.`id_usuario_a`, `user1`.`usrName` AS `nombre`, `orden_trabajo`.`id_usuario_e`, `orden_trabajo`.`id_sucursal`, `orden_trabajo`.`usuario`, `admcustomers`.`cliLastName`, `admcustomers`.`cliName`, `sucursal`.`descripc`
FROM `orden_trabajo`
JOIN `admcustomers` ON `admcustomers`.`cliId` = `orden_trabajo`.`cliId`
JOIN `sisusers` AS `user1` ON `user1`.`usrId` = `orden_trabajo`.`id_usuario_a`
JOIN `sucursal` ON `sucursal`.`id_sucursal` = `orden_trabajo`.`id_sucursal`
ORDER BY `orden_trabajo`.`id_orden`
INFO - 2018-11-22 11:41:11 --> Language file loaded: language/english/db_lang.php
INFO - 2018-11-22 11:48:16 --> Config Class Initialized
INFO - 2018-11-22 11:48:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:16 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:16 --> URI Class Initialized
INFO - 2018-11-22 11:48:16 --> Router Class Initialized
INFO - 2018-11-22 11:48:16 --> Output Class Initialized
INFO - 2018-11-22 11:48:16 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:16 --> Input Class Initialized
INFO - 2018-11-22 11:48:16 --> Language Class Initialized
INFO - 2018-11-22 11:48:16 --> Loader Class Initialized
INFO - 2018-11-22 11:48:16 --> Helper loaded: url_helper
INFO - 2018-11-22 11:48:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:48:16 --> Helper loaded: file_helper
INFO - 2018-11-22 11:48:16 --> Helper loaded: form_helper
INFO - 2018-11-22 11:48:16 --> Helper loaded: general_helper
INFO - 2018-11-22 11:48:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:48:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:48:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:48:16 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:48:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:48:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:48:16 --> Controller Class Initialized
INFO - 2018-11-22 11:48:16 --> Model Class Initialized
INFO - 2018-11-22 11:48:16 --> Model Class Initialized
INFO - 2018-11-22 11:48:16 --> Model Class Initialized
INFO - 2018-11-22 11:48:16 --> Model Class Initialized
ERROR - 2018-11-22 11:48:17 --> Severity: Warning --> file_get_contents(http://35.239.41.196:7070/bonita/loginservice?password=bpm&amp;redirect=false): failed to open stream: HTTP request failed! HTTP/1.1 401 
 D:\sitios\MTBA-desa-procprod\application\models\Bonitas.php 156
ERROR - 2018-11-22 11:48:17 --> Severity: Warning --> file_get_contents(http://35.239.41.196:7070/bonita/API/bpm/humanTask?p=0&amp;c=1000&amp;f=user_id%3D): failed to open stream: HTTP request failed! HTTP/1.1 401 
 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 18
ERROR - 2018-11-22 11:48:17 --> Severity: Warning --> Invalid argument supplied for foreach() D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 46
ERROR - 2018-11-22 11:48:17 --> Severity: Warning --> Invalid argument supplied for foreach() D:\sitios\MTBA-desa-procprod\application\views\tareas\list.php 38
INFO - 2018-11-22 11:48:17 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 11:48:17 --> Final output sent to browser
DEBUG - 2018-11-22 11:48:17 --> Total execution time: 1.4551
INFO - 2018-11-22 11:48:25 --> Config Class Initialized
INFO - 2018-11-22 11:48:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:25 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:25 --> URI Class Initialized
DEBUG - 2018-11-22 11:48:25 --> No URI present. Default controller set.
INFO - 2018-11-22 11:48:25 --> Router Class Initialized
INFO - 2018-11-22 11:48:25 --> Output Class Initialized
INFO - 2018-11-22 11:48:25 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:25 --> Input Class Initialized
INFO - 2018-11-22 11:48:25 --> Language Class Initialized
INFO - 2018-11-22 11:48:25 --> Loader Class Initialized
INFO - 2018-11-22 11:48:25 --> Helper loaded: url_helper
INFO - 2018-11-22 11:48:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:48:25 --> Helper loaded: file_helper
INFO - 2018-11-22 11:48:25 --> Helper loaded: form_helper
INFO - 2018-11-22 11:48:25 --> Helper loaded: general_helper
INFO - 2018-11-22 11:48:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:48:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:48:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:48:25 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:48:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:48:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:48:25 --> Controller Class Initialized
INFO - 2018-11-22 11:48:25 --> Model Class Initialized
INFO - 2018-11-22 11:48:25 --> Model Class Initialized
INFO - 2018-11-22 11:48:26 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 11:48:26 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\login.php
INFO - 2018-11-22 11:48:26 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 11:48:26 --> Final output sent to browser
DEBUG - 2018-11-22 11:48:26 --> Total execution time: 0.7590
INFO - 2018-11-22 11:48:26 --> Config Class Initialized
INFO - 2018-11-22 11:48:26 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:26 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:26 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:26 --> URI Class Initialized
INFO - 2018-11-22 11:48:26 --> Router Class Initialized
INFO - 2018-11-22 11:48:26 --> Output Class Initialized
INFO - 2018-11-22 11:48:26 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:26 --> Input Class Initialized
INFO - 2018-11-22 11:48:26 --> Language Class Initialized
ERROR - 2018-11-22 11:48:26 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 11:48:40 --> Config Class Initialized
INFO - 2018-11-22 11:48:40 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:40 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:40 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:40 --> URI Class Initialized
INFO - 2018-11-22 11:48:40 --> Router Class Initialized
INFO - 2018-11-22 11:48:40 --> Output Class Initialized
INFO - 2018-11-22 11:48:40 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:40 --> Input Class Initialized
INFO - 2018-11-22 11:48:40 --> Language Class Initialized
INFO - 2018-11-22 11:48:40 --> Loader Class Initialized
INFO - 2018-11-22 11:48:40 --> Helper loaded: url_helper
INFO - 2018-11-22 11:48:40 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:48:40 --> Helper loaded: file_helper
INFO - 2018-11-22 11:48:40 --> Helper loaded: form_helper
INFO - 2018-11-22 11:48:40 --> Helper loaded: general_helper
INFO - 2018-11-22 11:48:40 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:48:40 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:48:40 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:48:40 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:48:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:48:40 --> Controller Class Initialized
INFO - 2018-11-22 11:48:40 --> Model Class Initialized
INFO - 2018-11-22 11:48:40 --> Model Class Initialized
INFO - 2018-11-22 11:48:42 --> Final output sent to browser
DEBUG - 2018-11-22 11:48:42 --> Total execution time: 1.9621
INFO - 2018-11-22 11:48:43 --> Config Class Initialized
INFO - 2018-11-22 11:48:43 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:43 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:43 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:43 --> URI Class Initialized
INFO - 2018-11-22 11:48:43 --> Router Class Initialized
INFO - 2018-11-22 11:48:43 --> Output Class Initialized
INFO - 2018-11-22 11:48:43 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:43 --> Input Class Initialized
INFO - 2018-11-22 11:48:43 --> Language Class Initialized
INFO - 2018-11-22 11:48:43 --> Loader Class Initialized
INFO - 2018-11-22 11:48:43 --> Helper loaded: url_helper
INFO - 2018-11-22 11:48:43 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:48:43 --> Helper loaded: file_helper
INFO - 2018-11-22 11:48:43 --> Helper loaded: form_helper
INFO - 2018-11-22 11:48:43 --> Helper loaded: general_helper
INFO - 2018-11-22 11:48:43 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:48:43 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:48:43 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:48:43 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:48:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:48:43 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:48:43 --> Controller Class Initialized
INFO - 2018-11-22 11:48:43 --> Model Class Initialized
INFO - 2018-11-22 11:48:43 --> Model Class Initialized
INFO - 2018-11-22 11:48:43 --> Model Class Initialized
INFO - 2018-11-22 11:48:43 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 11:48:43 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 11:48:44 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 11:48:44 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 11:48:44 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 11:48:44 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 11:48:44 --> Final output sent to browser
DEBUG - 2018-11-22 11:48:44 --> Total execution time: 0.7760
INFO - 2018-11-22 11:48:44 --> Config Class Initialized
INFO - 2018-11-22 11:48:44 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:44 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:44 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:44 --> URI Class Initialized
INFO - 2018-11-22 11:48:44 --> Router Class Initialized
INFO - 2018-11-22 11:48:44 --> Output Class Initialized
INFO - 2018-11-22 11:48:44 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:44 --> Input Class Initialized
INFO - 2018-11-22 11:48:44 --> Language Class Initialized
ERROR - 2018-11-22 11:48:44 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 11:48:46 --> Config Class Initialized
INFO - 2018-11-22 11:48:46 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:46 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:46 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:46 --> URI Class Initialized
INFO - 2018-11-22 11:48:46 --> Router Class Initialized
INFO - 2018-11-22 11:48:46 --> Output Class Initialized
INFO - 2018-11-22 11:48:46 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:46 --> Input Class Initialized
INFO - 2018-11-22 11:48:46 --> Language Class Initialized
INFO - 2018-11-22 11:48:46 --> Loader Class Initialized
INFO - 2018-11-22 11:48:46 --> Helper loaded: url_helper
INFO - 2018-11-22 11:48:46 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:48:46 --> Helper loaded: file_helper
INFO - 2018-11-22 11:48:46 --> Helper loaded: form_helper
INFO - 2018-11-22 11:48:46 --> Helper loaded: general_helper
INFO - 2018-11-22 11:48:46 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:48:46 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:48:46 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:48:46 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:48:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:48:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:48:47 --> Controller Class Initialized
INFO - 2018-11-22 11:48:47 --> Model Class Initialized
INFO - 2018-11-22 11:48:47 --> Model Class Initialized
INFO - 2018-11-22 11:48:47 --> Model Class Initialized
INFO - 2018-11-22 11:48:47 --> Model Class Initialized
INFO - 2018-11-22 11:48:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 11:48:48 --> Final output sent to browser
DEBUG - 2018-11-22 11:48:48 --> Total execution time: 1.4991
INFO - 2018-11-22 11:48:53 --> Config Class Initialized
INFO - 2018-11-22 11:48:53 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:53 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:53 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:53 --> URI Class Initialized
INFO - 2018-11-22 11:48:53 --> Router Class Initialized
INFO - 2018-11-22 11:48:53 --> Output Class Initialized
INFO - 2018-11-22 11:48:53 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:53 --> Input Class Initialized
INFO - 2018-11-22 11:48:53 --> Language Class Initialized
INFO - 2018-11-22 11:48:53 --> Loader Class Initialized
INFO - 2018-11-22 11:48:53 --> Helper loaded: url_helper
INFO - 2018-11-22 11:48:53 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:48:53 --> Helper loaded: file_helper
INFO - 2018-11-22 11:48:53 --> Helper loaded: form_helper
INFO - 2018-11-22 11:48:53 --> Helper loaded: general_helper
INFO - 2018-11-22 11:48:53 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:48:53 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:48:53 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:48:53 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:48:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:48:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:48:53 --> Controller Class Initialized
INFO - 2018-11-22 11:48:53 --> Model Class Initialized
INFO - 2018-11-22 11:48:53 --> Model Class Initialized
INFO - 2018-11-22 11:48:53 --> Model Class Initialized
INFO - 2018-11-22 11:48:53 --> Model Class Initialized
INFO - 2018-11-22 11:48:57 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_asigPersPlanif.php
INFO - 2018-11-22 11:48:57 --> Final output sent to browser
DEBUG - 2018-11-22 11:48:57 --> Total execution time: 4.8143
INFO - 2018-11-22 11:48:57 --> Config Class Initialized
INFO - 2018-11-22 11:48:57 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:48:58 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:48:58 --> Utf8 Class Initialized
INFO - 2018-11-22 11:48:58 --> URI Class Initialized
INFO - 2018-11-22 11:48:58 --> Router Class Initialized
INFO - 2018-11-22 11:48:58 --> Output Class Initialized
INFO - 2018-11-22 11:48:58 --> Security Class Initialized
DEBUG - 2018-11-22 11:48:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:48:58 --> Input Class Initialized
INFO - 2018-11-22 11:48:58 --> Language Class Initialized
INFO - 2018-11-22 11:48:58 --> Loader Class Initialized
INFO - 2018-11-22 11:48:58 --> Helper loaded: url_helper
INFO - 2018-11-22 11:48:58 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:48:58 --> Helper loaded: file_helper
INFO - 2018-11-22 11:48:58 --> Helper loaded: form_helper
INFO - 2018-11-22 11:48:58 --> Helper loaded: general_helper
INFO - 2018-11-22 11:48:58 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:48:58 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:48:58 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:48:58 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:48:58 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:48:58 --> Controller Class Initialized
INFO - 2018-11-22 11:48:58 --> Model Class Initialized
INFO - 2018-11-22 11:48:58 --> Model Class Initialized
INFO - 2018-11-22 11:48:58 --> Model Class Initialized
INFO - 2018-11-22 11:48:58 --> Model Class Initialized
INFO - 2018-11-22 11:48:58 --> Final output sent to browser
DEBUG - 2018-11-22 11:48:58 --> Total execution time: 0.2090
INFO - 2018-11-22 11:49:10 --> Config Class Initialized
INFO - 2018-11-22 11:49:10 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:10 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:10 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:10 --> URI Class Initialized
INFO - 2018-11-22 11:49:10 --> Router Class Initialized
INFO - 2018-11-22 11:49:10 --> Output Class Initialized
INFO - 2018-11-22 11:49:10 --> Security Class Initialized
DEBUG - 2018-11-22 11:49:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:10 --> Input Class Initialized
INFO - 2018-11-22 11:49:10 --> Language Class Initialized
INFO - 2018-11-22 11:49:10 --> Loader Class Initialized
INFO - 2018-11-22 11:49:10 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:10 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:10 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:10 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:10 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:10 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:10 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:10 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:10 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:10 --> Controller Class Initialized
INFO - 2018-11-22 11:49:10 --> Model Class Initialized
INFO - 2018-11-22 11:49:10 --> Model Class Initialized
INFO - 2018-11-22 11:49:10 --> Model Class Initialized
INFO - 2018-11-22 11:49:10 --> Model Class Initialized
INFO - 2018-11-22 11:49:11 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:11 --> Total execution time: 1.1901
INFO - 2018-11-22 11:49:23 --> Config Class Initialized
INFO - 2018-11-22 11:49:23 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:23 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:23 --> URI Class Initialized
INFO - 2018-11-22 11:49:23 --> Router Class Initialized
INFO - 2018-11-22 11:49:23 --> Output Class Initialized
INFO - 2018-11-22 11:49:23 --> Security Class Initialized
DEBUG - 2018-11-22 11:49:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:23 --> Input Class Initialized
INFO - 2018-11-22 11:49:23 --> Language Class Initialized
INFO - 2018-11-22 11:49:23 --> Loader Class Initialized
INFO - 2018-11-22 11:49:23 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:23 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:23 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:23 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:23 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:23 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:23 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:23 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:23 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:23 --> Controller Class Initialized
INFO - 2018-11-22 11:49:23 --> Model Class Initialized
INFO - 2018-11-22 11:49:23 --> Model Class Initialized
INFO - 2018-11-22 11:49:24 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_personal.php
INFO - 2018-11-22 11:49:24 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:24 --> Total execution time: 1.7751
INFO - 2018-11-22 11:49:25 --> Config Class Initialized
INFO - 2018-11-22 11:49:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:25 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:25 --> URI Class Initialized
INFO - 2018-11-22 11:49:25 --> Router Class Initialized
INFO - 2018-11-22 11:49:25 --> Output Class Initialized
INFO - 2018-11-22 11:49:25 --> Security Class Initialized
INFO - 2018-11-22 11:49:25 --> Config Class Initialized
INFO - 2018-11-22 11:49:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:25 --> Input Class Initialized
INFO - 2018-11-22 11:49:25 --> Language Class Initialized
DEBUG - 2018-11-22 11:49:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:25 --> Loader Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:25 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:25 --> URI Class Initialized
INFO - 2018-11-22 11:49:25 --> Router Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:25 --> Output Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:25 --> Security Class Initialized
INFO - 2018-11-22 11:49:25 --> Config Class Initialized
DEBUG - 2018-11-22 11:49:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:25 --> Hooks Class Initialized
INFO - 2018-11-22 11:49:25 --> Input Class Initialized
INFO - 2018-11-22 11:49:25 --> Database Driver Class Initialized
INFO - 2018-11-22 11:49:25 --> Language Class Initialized
DEBUG - 2018-11-22 11:49:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:25 --> Loader Class Initialized
INFO - 2018-11-22 11:49:25 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:25 --> URI Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:25 --> Router Class Initialized
DEBUG - 2018-11-22 11:49:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:25 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:25 --> Output Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:25 --> Security Class Initialized
INFO - 2018-11-22 11:49:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:25 --> Config Class Initialized
INFO - 2018-11-22 11:49:25 --> Controller Class Initialized
DEBUG - 2018-11-22 11:49:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:25 --> Hooks Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:25 --> Input Class Initialized
INFO - 2018-11-22 11:49:25 --> Model Class Initialized
INFO - 2018-11-22 11:49:25 --> Model Class Initialized
DEBUG - 2018-11-22 11:49:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:25 --> Language Class Initialized
INFO - 2018-11-22 11:49:25 --> Database Driver Class Initialized
INFO - 2018-11-22 11:49:25 --> Loader Class Initialized
INFO - 2018-11-22 11:49:25 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:25 --> Final output sent to browser
INFO - 2018-11-22 11:49:25 --> Helper loaded: url_helper
DEBUG - 2018-11-22 11:49:25 --> Total execution time: 0.4900
INFO - 2018-11-22 11:49:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:25 --> Config Class Initialized
INFO - 2018-11-22 11:49:25 --> Hooks Class Initialized
INFO - 2018-11-22 11:49:25 --> URI Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:25 --> Router Class Initialized
DEBUG - 2018-11-22 11:49:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:25 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:25 --> Output Class Initialized
INFO - 2018-11-22 11:49:25 --> URI Class Initialized
INFO - 2018-11-22 11:49:25 --> Security Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: general_helper
DEBUG - 2018-11-22 11:49:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:25 --> Router Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:25 --> Database Driver Class Initialized
INFO - 2018-11-22 11:49:25 --> Input Class Initialized
INFO - 2018-11-22 11:49:25 --> Language Class Initialized
INFO - 2018-11-22 11:49:25 --> Output Class Initialized
INFO - 2018-11-22 11:49:25 --> Security Class Initialized
INFO - 2018-11-22 11:49:25 --> Loader Class Initialized
DEBUG - 2018-11-22 11:49:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:25 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:25 --> Input Class Initialized
DEBUG - 2018-11-22 11:49:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:25 --> Language Class Initialized
INFO - 2018-11-22 11:49:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:25 --> Controller Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:25 --> Loader Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:25 --> Model Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:25 --> Model Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: file_helper
DEBUG - 2018-11-22 11:49:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:25 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:25 --> Database Driver Class Initialized
INFO - 2018-11-22 11:49:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:26 --> Database Driver Class Initialized
INFO - 2018-11-22 11:49:26 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:26 --> Total execution time: 0.7180
INFO - 2018-11-22 11:49:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:26 --> Controller Class Initialized
INFO - 2018-11-22 11:49:26 --> Model Class Initialized
INFO - 2018-11-22 11:49:26 --> Model Class Initialized
INFO - 2018-11-22 11:49:26 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:26 --> Total execution time: 0.6060
DEBUG - 2018-11-22 11:49:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:26 --> Controller Class Initialized
INFO - 2018-11-22 11:49:26 --> Model Class Initialized
DEBUG - 2018-11-22 11:49:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:26 --> Model Class Initialized
INFO - 2018-11-22 11:49:26 --> Model Class Initialized
INFO - 2018-11-22 11:49:26 --> Model Class Initialized
INFO - 2018-11-22 11:49:27 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:27 --> Total execution time: 1.9131
INFO - 2018-11-22 11:49:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:27 --> Controller Class Initialized
INFO - 2018-11-22 11:49:27 --> Model Class Initialized
INFO - 2018-11-22 11:49:27 --> Model Class Initialized
INFO - 2018-11-22 11:49:27 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:27 --> Total execution time: 1.9311
INFO - 2018-11-22 11:49:29 --> Config Class Initialized
INFO - 2018-11-22 11:49:29 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:29 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:29 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:29 --> URI Class Initialized
INFO - 2018-11-22 11:49:29 --> Router Class Initialized
INFO - 2018-11-22 11:49:29 --> Output Class Initialized
INFO - 2018-11-22 11:49:29 --> Security Class Initialized
DEBUG - 2018-11-22 11:49:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:30 --> Input Class Initialized
INFO - 2018-11-22 11:49:30 --> Language Class Initialized
INFO - 2018-11-22 11:49:30 --> Loader Class Initialized
INFO - 2018-11-22 11:49:30 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:30 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:30 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:30 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:30 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:30 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:30 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:30 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:30 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:30 --> Controller Class Initialized
INFO - 2018-11-22 11:49:30 --> Model Class Initialized
INFO - 2018-11-22 11:49:30 --> Model Class Initialized
INFO - 2018-11-22 11:49:30 --> Model Class Initialized
INFO - 2018-11-22 11:49:30 --> Model Class Initialized
INFO - 2018-11-22 11:49:31 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 11:49:31 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:31 --> Total execution time: 1.4981
INFO - 2018-11-22 11:49:34 --> Config Class Initialized
INFO - 2018-11-22 11:49:34 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:34 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:34 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:34 --> URI Class Initialized
INFO - 2018-11-22 11:49:34 --> Router Class Initialized
INFO - 2018-11-22 11:49:34 --> Output Class Initialized
INFO - 2018-11-22 11:49:34 --> Security Class Initialized
DEBUG - 2018-11-22 11:49:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:34 --> Input Class Initialized
INFO - 2018-11-22 11:49:34 --> Language Class Initialized
INFO - 2018-11-22 11:49:34 --> Loader Class Initialized
INFO - 2018-11-22 11:49:34 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:34 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:34 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:34 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:34 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:49:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:34 --> Controller Class Initialized
INFO - 2018-11-22 11:49:34 --> Model Class Initialized
INFO - 2018-11-22 11:49:34 --> Model Class Initialized
INFO - 2018-11-22 11:49:34 --> Model Class Initialized
INFO - 2018-11-22 11:49:34 --> Model Class Initialized
INFO - 2018-11-22 11:49:43 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_asigPersPlanif.php
INFO - 2018-11-22 11:49:43 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:43 --> Total execution time: 9.0615
INFO - 2018-11-22 11:49:43 --> Config Class Initialized
INFO - 2018-11-22 11:49:43 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:43 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:43 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:43 --> URI Class Initialized
INFO - 2018-11-22 11:49:43 --> Router Class Initialized
INFO - 2018-11-22 11:49:43 --> Output Class Initialized
INFO - 2018-11-22 11:49:43 --> Security Class Initialized
DEBUG - 2018-11-22 11:49:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:43 --> Input Class Initialized
INFO - 2018-11-22 11:49:43 --> Language Class Initialized
INFO - 2018-11-22 11:49:43 --> Loader Class Initialized
INFO - 2018-11-22 11:49:43 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:43 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:43 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:43 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:43 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:43 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:43 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:43 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:43 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:43 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:43 --> Controller Class Initialized
INFO - 2018-11-22 11:49:43 --> Model Class Initialized
INFO - 2018-11-22 11:49:43 --> Model Class Initialized
INFO - 2018-11-22 11:49:43 --> Model Class Initialized
INFO - 2018-11-22 11:49:43 --> Model Class Initialized
INFO - 2018-11-22 11:49:43 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:43 --> Total execution time: 0.2180
INFO - 2018-11-22 11:49:47 --> Config Class Initialized
INFO - 2018-11-22 11:49:47 --> Hooks Class Initialized
DEBUG - 2018-11-22 11:49:47 --> UTF-8 Support Enabled
INFO - 2018-11-22 11:49:47 --> Utf8 Class Initialized
INFO - 2018-11-22 11:49:47 --> URI Class Initialized
INFO - 2018-11-22 11:49:47 --> Router Class Initialized
INFO - 2018-11-22 11:49:47 --> Output Class Initialized
INFO - 2018-11-22 11:49:47 --> Security Class Initialized
DEBUG - 2018-11-22 11:49:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 11:49:47 --> Input Class Initialized
INFO - 2018-11-22 11:49:47 --> Language Class Initialized
INFO - 2018-11-22 11:49:47 --> Loader Class Initialized
INFO - 2018-11-22 11:49:47 --> Helper loaded: url_helper
INFO - 2018-11-22 11:49:47 --> Helper loaded: directory_helper
INFO - 2018-11-22 11:49:47 --> Helper loaded: file_helper
INFO - 2018-11-22 11:49:47 --> Helper loaded: form_helper
INFO - 2018-11-22 11:49:47 --> Helper loaded: general_helper
INFO - 2018-11-22 11:49:47 --> Helper loaded: formulario_helper
INFO - 2018-11-22 11:49:47 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 11:49:47 --> Helper loaded: popup_helper
INFO - 2018-11-22 11:49:47 --> Database Driver Class Initialized
DEBUG - 2018-11-22 11:49:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 11:49:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 11:49:47 --> Controller Class Initialized
INFO - 2018-11-22 11:49:47 --> Model Class Initialized
INFO - 2018-11-22 11:49:47 --> Model Class Initialized
INFO - 2018-11-22 11:49:47 --> Model Class Initialized
INFO - 2018-11-22 11:49:47 --> Model Class Initialized
INFO - 2018-11-22 11:49:48 --> Final output sent to browser
DEBUG - 2018-11-22 11:49:48 --> Total execution time: 1.2361
INFO - 2018-11-22 13:00:18 --> Config Class Initialized
INFO - 2018-11-22 13:00:18 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:00:18 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:00:18 --> Utf8 Class Initialized
INFO - 2018-11-22 13:00:18 --> URI Class Initialized
INFO - 2018-11-22 13:00:18 --> Router Class Initialized
INFO - 2018-11-22 13:00:18 --> Output Class Initialized
INFO - 2018-11-22 13:00:18 --> Security Class Initialized
DEBUG - 2018-11-22 13:00:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:00:18 --> Input Class Initialized
INFO - 2018-11-22 13:00:18 --> Language Class Initialized
INFO - 2018-11-22 13:00:18 --> Loader Class Initialized
INFO - 2018-11-22 13:00:18 --> Helper loaded: url_helper
INFO - 2018-11-22 13:00:18 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:00:18 --> Helper loaded: file_helper
INFO - 2018-11-22 13:00:18 --> Helper loaded: form_helper
INFO - 2018-11-22 13:00:18 --> Helper loaded: general_helper
INFO - 2018-11-22 13:00:18 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:00:18 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:00:18 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:00:18 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:00:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:00:18 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:00:18 --> Controller Class Initialized
INFO - 2018-11-22 13:00:18 --> Model Class Initialized
INFO - 2018-11-22 13:00:18 --> Model Class Initialized
INFO - 2018-11-22 13:00:18 --> Model Class Initialized
INFO - 2018-11-22 13:00:18 --> Model Class Initialized
INFO - 2018-11-22 13:00:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 13:00:19 --> Final output sent to browser
DEBUG - 2018-11-22 13:00:19 --> Total execution time: 1.8861
INFO - 2018-11-22 13:00:25 --> Config Class Initialized
INFO - 2018-11-22 13:00:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:00:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:00:25 --> Utf8 Class Initialized
INFO - 2018-11-22 13:00:25 --> URI Class Initialized
DEBUG - 2018-11-22 13:00:25 --> No URI present. Default controller set.
INFO - 2018-11-22 13:00:25 --> Router Class Initialized
INFO - 2018-11-22 13:00:25 --> Output Class Initialized
INFO - 2018-11-22 13:00:25 --> Security Class Initialized
DEBUG - 2018-11-22 13:00:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:00:25 --> Input Class Initialized
INFO - 2018-11-22 13:00:25 --> Language Class Initialized
INFO - 2018-11-22 13:00:25 --> Loader Class Initialized
INFO - 2018-11-22 13:00:25 --> Helper loaded: url_helper
INFO - 2018-11-22 13:00:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:00:25 --> Helper loaded: file_helper
INFO - 2018-11-22 13:00:25 --> Helper loaded: form_helper
INFO - 2018-11-22 13:00:25 --> Helper loaded: general_helper
INFO - 2018-11-22 13:00:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:00:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:00:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:00:25 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:00:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:00:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:00:25 --> Controller Class Initialized
INFO - 2018-11-22 13:00:25 --> Model Class Initialized
INFO - 2018-11-22 13:00:25 --> Model Class Initialized
INFO - 2018-11-22 13:00:26 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 13:00:26 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\login.php
INFO - 2018-11-22 13:00:26 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 13:00:26 --> Final output sent to browser
DEBUG - 2018-11-22 13:00:26 --> Total execution time: 0.7250
INFO - 2018-11-22 13:00:26 --> Config Class Initialized
INFO - 2018-11-22 13:00:26 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:00:26 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:00:26 --> Utf8 Class Initialized
INFO - 2018-11-22 13:00:26 --> URI Class Initialized
INFO - 2018-11-22 13:00:26 --> Router Class Initialized
INFO - 2018-11-22 13:00:26 --> Output Class Initialized
INFO - 2018-11-22 13:00:26 --> Security Class Initialized
DEBUG - 2018-11-22 13:00:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:00:26 --> Input Class Initialized
INFO - 2018-11-22 13:00:26 --> Language Class Initialized
ERROR - 2018-11-22 13:00:26 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 13:00:45 --> Config Class Initialized
INFO - 2018-11-22 13:00:45 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:00:45 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:00:45 --> Utf8 Class Initialized
INFO - 2018-11-22 13:00:45 --> URI Class Initialized
INFO - 2018-11-22 13:00:45 --> Router Class Initialized
INFO - 2018-11-22 13:00:45 --> Output Class Initialized
INFO - 2018-11-22 13:00:45 --> Security Class Initialized
DEBUG - 2018-11-22 13:00:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:00:45 --> Input Class Initialized
INFO - 2018-11-22 13:00:45 --> Language Class Initialized
INFO - 2018-11-22 13:00:45 --> Loader Class Initialized
INFO - 2018-11-22 13:00:45 --> Helper loaded: url_helper
INFO - 2018-11-22 13:00:45 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:00:45 --> Helper loaded: file_helper
INFO - 2018-11-22 13:00:45 --> Helper loaded: form_helper
INFO - 2018-11-22 13:00:45 --> Helper loaded: general_helper
INFO - 2018-11-22 13:00:45 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:00:45 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:00:45 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:00:45 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:00:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:00:45 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:00:45 --> Controller Class Initialized
INFO - 2018-11-22 13:00:45 --> Model Class Initialized
INFO - 2018-11-22 13:00:45 --> Model Class Initialized
INFO - 2018-11-22 13:00:48 --> Final output sent to browser
DEBUG - 2018-11-22 13:00:48 --> Total execution time: 2.6952
INFO - 2018-11-22 13:00:49 --> Config Class Initialized
INFO - 2018-11-22 13:00:49 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:00:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:00:49 --> Utf8 Class Initialized
INFO - 2018-11-22 13:00:49 --> URI Class Initialized
INFO - 2018-11-22 13:00:49 --> Router Class Initialized
INFO - 2018-11-22 13:00:49 --> Output Class Initialized
INFO - 2018-11-22 13:00:49 --> Security Class Initialized
DEBUG - 2018-11-22 13:00:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:00:49 --> Input Class Initialized
INFO - 2018-11-22 13:00:49 --> Language Class Initialized
INFO - 2018-11-22 13:00:49 --> Loader Class Initialized
INFO - 2018-11-22 13:00:49 --> Helper loaded: url_helper
INFO - 2018-11-22 13:00:49 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:00:49 --> Helper loaded: file_helper
INFO - 2018-11-22 13:00:49 --> Helper loaded: form_helper
INFO - 2018-11-22 13:00:49 --> Helper loaded: general_helper
INFO - 2018-11-22 13:00:49 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:00:49 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:00:49 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:00:49 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:00:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:00:49 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:00:49 --> Controller Class Initialized
INFO - 2018-11-22 13:00:49 --> Model Class Initialized
INFO - 2018-11-22 13:00:49 --> Model Class Initialized
INFO - 2018-11-22 13:00:49 --> Model Class Initialized
INFO - 2018-11-22 13:00:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 13:00:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 13:00:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 13:00:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 13:00:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 13:00:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 13:00:49 --> Final output sent to browser
DEBUG - 2018-11-22 13:00:49 --> Total execution time: 0.4680
INFO - 2018-11-22 13:00:49 --> Config Class Initialized
INFO - 2018-11-22 13:00:49 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:00:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:00:49 --> Utf8 Class Initialized
INFO - 2018-11-22 13:00:49 --> URI Class Initialized
INFO - 2018-11-22 13:00:49 --> Router Class Initialized
INFO - 2018-11-22 13:00:49 --> Output Class Initialized
INFO - 2018-11-22 13:00:49 --> Security Class Initialized
DEBUG - 2018-11-22 13:00:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:00:49 --> Input Class Initialized
INFO - 2018-11-22 13:00:49 --> Language Class Initialized
ERROR - 2018-11-22 13:00:49 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 13:00:52 --> Config Class Initialized
INFO - 2018-11-22 13:00:52 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:00:52 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:00:52 --> Utf8 Class Initialized
INFO - 2018-11-22 13:00:52 --> URI Class Initialized
INFO - 2018-11-22 13:00:52 --> Router Class Initialized
INFO - 2018-11-22 13:00:52 --> Output Class Initialized
INFO - 2018-11-22 13:00:52 --> Security Class Initialized
DEBUG - 2018-11-22 13:00:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:00:52 --> Input Class Initialized
INFO - 2018-11-22 13:00:52 --> Language Class Initialized
INFO - 2018-11-22 13:00:52 --> Loader Class Initialized
INFO - 2018-11-22 13:00:52 --> Helper loaded: url_helper
INFO - 2018-11-22 13:00:52 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:00:52 --> Helper loaded: file_helper
INFO - 2018-11-22 13:00:52 --> Helper loaded: form_helper
INFO - 2018-11-22 13:00:52 --> Helper loaded: general_helper
INFO - 2018-11-22 13:00:52 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:00:52 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:00:52 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:00:52 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:00:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:00:52 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:00:52 --> Controller Class Initialized
INFO - 2018-11-22 13:00:52 --> Model Class Initialized
INFO - 2018-11-22 13:00:52 --> Model Class Initialized
INFO - 2018-11-22 13:00:52 --> Model Class Initialized
INFO - 2018-11-22 13:00:52 --> Model Class Initialized
INFO - 2018-11-22 13:00:53 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 13:00:53 --> Final output sent to browser
DEBUG - 2018-11-22 13:00:53 --> Total execution time: 1.4991
INFO - 2018-11-22 13:01:48 --> Config Class Initialized
INFO - 2018-11-22 13:01:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:01:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:01:48 --> Utf8 Class Initialized
INFO - 2018-11-22 13:01:48 --> URI Class Initialized
INFO - 2018-11-22 13:01:48 --> Router Class Initialized
INFO - 2018-11-22 13:01:48 --> Output Class Initialized
INFO - 2018-11-22 13:01:48 --> Security Class Initialized
DEBUG - 2018-11-22 13:01:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:01:48 --> Input Class Initialized
INFO - 2018-11-22 13:01:48 --> Language Class Initialized
INFO - 2018-11-22 13:01:48 --> Loader Class Initialized
INFO - 2018-11-22 13:01:48 --> Helper loaded: url_helper
INFO - 2018-11-22 13:01:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:01:48 --> Helper loaded: file_helper
INFO - 2018-11-22 13:01:48 --> Helper loaded: form_helper
INFO - 2018-11-22 13:01:48 --> Helper loaded: general_helper
INFO - 2018-11-22 13:01:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:01:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:01:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:01:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:01:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:01:48 --> Controller Class Initialized
INFO - 2018-11-22 13:01:48 --> Model Class Initialized
INFO - 2018-11-22 13:01:48 --> Model Class Initialized
INFO - 2018-11-22 13:01:48 --> Model Class Initialized
INFO - 2018-11-22 13:01:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 13:01:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 13:01:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 13:01:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 13:01:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 13:01:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 13:01:48 --> Final output sent to browser
DEBUG - 2018-11-22 13:01:48 --> Total execution time: 0.4660
INFO - 2018-11-22 13:01:49 --> Config Class Initialized
INFO - 2018-11-22 13:01:49 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:01:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:01:49 --> Utf8 Class Initialized
INFO - 2018-11-22 13:01:49 --> URI Class Initialized
INFO - 2018-11-22 13:01:49 --> Router Class Initialized
INFO - 2018-11-22 13:01:49 --> Output Class Initialized
INFO - 2018-11-22 13:01:49 --> Security Class Initialized
DEBUG - 2018-11-22 13:01:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:01:49 --> Input Class Initialized
INFO - 2018-11-22 13:01:49 --> Language Class Initialized
ERROR - 2018-11-22 13:01:49 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 13:01:53 --> Config Class Initialized
INFO - 2018-11-22 13:01:53 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:01:53 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:01:53 --> Utf8 Class Initialized
INFO - 2018-11-22 13:01:53 --> URI Class Initialized
INFO - 2018-11-22 13:01:53 --> Router Class Initialized
INFO - 2018-11-22 13:01:53 --> Output Class Initialized
INFO - 2018-11-22 13:01:53 --> Security Class Initialized
DEBUG - 2018-11-22 13:01:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:01:53 --> Input Class Initialized
INFO - 2018-11-22 13:01:53 --> Language Class Initialized
INFO - 2018-11-22 13:01:53 --> Loader Class Initialized
INFO - 2018-11-22 13:01:53 --> Helper loaded: url_helper
INFO - 2018-11-22 13:01:53 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:01:53 --> Helper loaded: file_helper
INFO - 2018-11-22 13:01:53 --> Helper loaded: form_helper
INFO - 2018-11-22 13:01:53 --> Helper loaded: general_helper
INFO - 2018-11-22 13:01:53 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:01:53 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:01:53 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:01:53 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:01:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:01:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:01:53 --> Controller Class Initialized
INFO - 2018-11-22 13:01:53 --> Model Class Initialized
INFO - 2018-11-22 13:01:53 --> Model Class Initialized
INFO - 2018-11-22 13:01:53 --> Model Class Initialized
INFO - 2018-11-22 13:01:53 --> Model Class Initialized
INFO - 2018-11-22 13:01:54 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 13:01:54 --> Final output sent to browser
DEBUG - 2018-11-22 13:01:54 --> Total execution time: 1.6561
INFO - 2018-11-22 13:02:18 --> Config Class Initialized
INFO - 2018-11-22 13:02:18 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:02:18 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:02:18 --> Utf8 Class Initialized
INFO - 2018-11-22 13:02:18 --> URI Class Initialized
DEBUG - 2018-11-22 13:02:18 --> No URI present. Default controller set.
INFO - 2018-11-22 13:02:18 --> Router Class Initialized
INFO - 2018-11-22 13:02:18 --> Output Class Initialized
INFO - 2018-11-22 13:02:18 --> Security Class Initialized
DEBUG - 2018-11-22 13:02:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:02:18 --> Input Class Initialized
INFO - 2018-11-22 13:02:18 --> Language Class Initialized
INFO - 2018-11-22 13:02:18 --> Loader Class Initialized
INFO - 2018-11-22 13:02:18 --> Helper loaded: url_helper
INFO - 2018-11-22 13:02:18 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:02:18 --> Helper loaded: file_helper
INFO - 2018-11-22 13:02:18 --> Helper loaded: form_helper
INFO - 2018-11-22 13:02:18 --> Helper loaded: general_helper
INFO - 2018-11-22 13:02:18 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:02:18 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:02:18 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:02:18 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:02:18 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:02:18 --> Controller Class Initialized
INFO - 2018-11-22 13:02:18 --> Model Class Initialized
INFO - 2018-11-22 13:02:18 --> Model Class Initialized
INFO - 2018-11-22 13:02:18 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 13:02:18 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\login.php
INFO - 2018-11-22 13:02:18 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 13:02:18 --> Final output sent to browser
DEBUG - 2018-11-22 13:02:18 --> Total execution time: 0.6220
INFO - 2018-11-22 13:02:19 --> Config Class Initialized
INFO - 2018-11-22 13:02:19 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:02:19 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:02:19 --> Utf8 Class Initialized
INFO - 2018-11-22 13:02:19 --> URI Class Initialized
INFO - 2018-11-22 13:02:19 --> Router Class Initialized
INFO - 2018-11-22 13:02:19 --> Output Class Initialized
INFO - 2018-11-22 13:02:19 --> Security Class Initialized
DEBUG - 2018-11-22 13:02:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:02:19 --> Input Class Initialized
INFO - 2018-11-22 13:02:19 --> Language Class Initialized
ERROR - 2018-11-22 13:02:19 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 13:02:27 --> Config Class Initialized
INFO - 2018-11-22 13:02:27 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:02:27 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:02:27 --> Utf8 Class Initialized
INFO - 2018-11-22 13:02:27 --> URI Class Initialized
INFO - 2018-11-22 13:02:27 --> Router Class Initialized
INFO - 2018-11-22 13:02:27 --> Output Class Initialized
INFO - 2018-11-22 13:02:27 --> Security Class Initialized
DEBUG - 2018-11-22 13:02:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:02:27 --> Input Class Initialized
INFO - 2018-11-22 13:02:27 --> Language Class Initialized
INFO - 2018-11-22 13:02:27 --> Loader Class Initialized
INFO - 2018-11-22 13:02:27 --> Helper loaded: url_helper
INFO - 2018-11-22 13:02:27 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:02:27 --> Helper loaded: file_helper
INFO - 2018-11-22 13:02:27 --> Helper loaded: form_helper
INFO - 2018-11-22 13:02:27 --> Helper loaded: general_helper
INFO - 2018-11-22 13:02:27 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:02:27 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:02:27 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:02:27 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:02:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:02:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:02:27 --> Controller Class Initialized
INFO - 2018-11-22 13:02:27 --> Model Class Initialized
INFO - 2018-11-22 13:02:27 --> Model Class Initialized
INFO - 2018-11-22 13:02:29 --> Final output sent to browser
DEBUG - 2018-11-22 13:02:29 --> Total execution time: 1.6851
INFO - 2018-11-22 13:02:30 --> Config Class Initialized
INFO - 2018-11-22 13:02:30 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:02:30 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:02:30 --> Utf8 Class Initialized
INFO - 2018-11-22 13:02:30 --> URI Class Initialized
INFO - 2018-11-22 13:02:30 --> Router Class Initialized
INFO - 2018-11-22 13:02:30 --> Output Class Initialized
INFO - 2018-11-22 13:02:30 --> Security Class Initialized
DEBUG - 2018-11-22 13:02:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:02:30 --> Input Class Initialized
INFO - 2018-11-22 13:02:30 --> Language Class Initialized
INFO - 2018-11-22 13:02:30 --> Loader Class Initialized
INFO - 2018-11-22 13:02:30 --> Helper loaded: url_helper
INFO - 2018-11-22 13:02:30 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:02:30 --> Helper loaded: file_helper
INFO - 2018-11-22 13:02:30 --> Helper loaded: form_helper
INFO - 2018-11-22 13:02:30 --> Helper loaded: general_helper
INFO - 2018-11-22 13:02:30 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:02:30 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:02:30 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:02:30 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:02:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:02:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:02:30 --> Controller Class Initialized
INFO - 2018-11-22 13:02:30 --> Model Class Initialized
INFO - 2018-11-22 13:02:30 --> Model Class Initialized
INFO - 2018-11-22 13:02:30 --> Model Class Initialized
INFO - 2018-11-22 13:02:30 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 13:02:30 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 13:02:30 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 13:02:30 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 13:02:30 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 13:02:30 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 13:02:30 --> Final output sent to browser
DEBUG - 2018-11-22 13:02:30 --> Total execution time: 0.3490
INFO - 2018-11-22 13:02:31 --> Config Class Initialized
INFO - 2018-11-22 13:02:31 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:02:31 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:02:31 --> Utf8 Class Initialized
INFO - 2018-11-22 13:02:31 --> URI Class Initialized
INFO - 2018-11-22 13:02:31 --> Router Class Initialized
INFO - 2018-11-22 13:02:31 --> Output Class Initialized
INFO - 2018-11-22 13:02:31 --> Security Class Initialized
DEBUG - 2018-11-22 13:02:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:02:31 --> Input Class Initialized
INFO - 2018-11-22 13:02:31 --> Language Class Initialized
ERROR - 2018-11-22 13:02:31 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 13:02:36 --> Config Class Initialized
INFO - 2018-11-22 13:02:36 --> Hooks Class Initialized
DEBUG - 2018-11-22 13:02:36 --> UTF-8 Support Enabled
INFO - 2018-11-22 13:02:36 --> Utf8 Class Initialized
INFO - 2018-11-22 13:02:36 --> URI Class Initialized
INFO - 2018-11-22 13:02:36 --> Router Class Initialized
INFO - 2018-11-22 13:02:36 --> Output Class Initialized
INFO - 2018-11-22 13:02:36 --> Security Class Initialized
DEBUG - 2018-11-22 13:02:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 13:02:36 --> Input Class Initialized
INFO - 2018-11-22 13:02:36 --> Language Class Initialized
INFO - 2018-11-22 13:02:36 --> Loader Class Initialized
INFO - 2018-11-22 13:02:36 --> Helper loaded: url_helper
INFO - 2018-11-22 13:02:36 --> Helper loaded: directory_helper
INFO - 2018-11-22 13:02:36 --> Helper loaded: file_helper
INFO - 2018-11-22 13:02:36 --> Helper loaded: form_helper
INFO - 2018-11-22 13:02:36 --> Helper loaded: general_helper
INFO - 2018-11-22 13:02:36 --> Helper loaded: formulario_helper
INFO - 2018-11-22 13:02:36 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 13:02:36 --> Helper loaded: popup_helper
INFO - 2018-11-22 13:02:36 --> Database Driver Class Initialized
DEBUG - 2018-11-22 13:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 13:02:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 13:02:36 --> Controller Class Initialized
INFO - 2018-11-22 13:02:36 --> Model Class Initialized
INFO - 2018-11-22 13:02:36 --> Model Class Initialized
INFO - 2018-11-22 13:02:36 --> Model Class Initialized
INFO - 2018-11-22 13:02:36 --> Model Class Initialized
INFO - 2018-11-22 13:02:37 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 13:02:37 --> Final output sent to browser
DEBUG - 2018-11-22 13:02:37 --> Total execution time: 1.4531
INFO - 2018-11-22 15:03:54 --> Config Class Initialized
INFO - 2018-11-22 15:03:54 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:03:54 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:03:54 --> Utf8 Class Initialized
INFO - 2018-11-22 15:03:54 --> URI Class Initialized
DEBUG - 2018-11-22 15:03:54 --> No URI present. Default controller set.
INFO - 2018-11-22 15:03:54 --> Router Class Initialized
INFO - 2018-11-22 15:03:54 --> Output Class Initialized
INFO - 2018-11-22 15:03:54 --> Security Class Initialized
DEBUG - 2018-11-22 15:03:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:03:54 --> Input Class Initialized
INFO - 2018-11-22 15:03:54 --> Language Class Initialized
INFO - 2018-11-22 15:03:54 --> Loader Class Initialized
INFO - 2018-11-22 15:03:54 --> Helper loaded: url_helper
INFO - 2018-11-22 15:03:54 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:03:54 --> Helper loaded: file_helper
INFO - 2018-11-22 15:03:54 --> Helper loaded: form_helper
INFO - 2018-11-22 15:03:54 --> Helper loaded: general_helper
INFO - 2018-11-22 15:03:54 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:03:54 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:03:54 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:03:54 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:03:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:03:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:03:54 --> Controller Class Initialized
INFO - 2018-11-22 15:03:54 --> Model Class Initialized
INFO - 2018-11-22 15:03:54 --> Model Class Initialized
INFO - 2018-11-22 15:03:55 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 15:03:55 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\login.php
INFO - 2018-11-22 15:03:55 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 15:03:55 --> Final output sent to browser
DEBUG - 2018-11-22 15:03:55 --> Total execution time: 0.9491
INFO - 2018-11-22 15:03:55 --> Config Class Initialized
INFO - 2018-11-22 15:03:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:03:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:03:55 --> Utf8 Class Initialized
INFO - 2018-11-22 15:03:55 --> URI Class Initialized
INFO - 2018-11-22 15:03:55 --> Router Class Initialized
INFO - 2018-11-22 15:03:55 --> Output Class Initialized
INFO - 2018-11-22 15:03:55 --> Security Class Initialized
DEBUG - 2018-11-22 15:03:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:03:55 --> Input Class Initialized
INFO - 2018-11-22 15:03:55 --> Language Class Initialized
ERROR - 2018-11-22 15:03:55 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 15:04:00 --> Config Class Initialized
INFO - 2018-11-22 15:04:00 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:00 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:00 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:00 --> URI Class Initialized
INFO - 2018-11-22 15:04:00 --> Router Class Initialized
INFO - 2018-11-22 15:04:00 --> Output Class Initialized
INFO - 2018-11-22 15:04:00 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:00 --> Input Class Initialized
INFO - 2018-11-22 15:04:00 --> Language Class Initialized
INFO - 2018-11-22 15:04:00 --> Loader Class Initialized
INFO - 2018-11-22 15:04:00 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:00 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:00 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:00 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:00 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:00 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:00 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:00 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:00 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:00 --> Controller Class Initialized
INFO - 2018-11-22 15:04:00 --> Model Class Initialized
INFO - 2018-11-22 15:04:00 --> Model Class Initialized
INFO - 2018-11-22 15:04:02 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:02 --> Total execution time: 1.8491
INFO - 2018-11-22 15:04:02 --> Config Class Initialized
INFO - 2018-11-22 15:04:02 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:03 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:03 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:03 --> URI Class Initialized
INFO - 2018-11-22 15:04:03 --> Router Class Initialized
INFO - 2018-11-22 15:04:03 --> Output Class Initialized
INFO - 2018-11-22 15:04:03 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:03 --> Input Class Initialized
INFO - 2018-11-22 15:04:03 --> Language Class Initialized
INFO - 2018-11-22 15:04:03 --> Loader Class Initialized
INFO - 2018-11-22 15:04:03 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:03 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:03 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:03 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:03 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:03 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:03 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:03 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:03 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:04:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:03 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:03 --> Controller Class Initialized
INFO - 2018-11-22 15:04:03 --> Model Class Initialized
INFO - 2018-11-22 15:04:03 --> Model Class Initialized
INFO - 2018-11-22 15:04:03 --> Model Class Initialized
INFO - 2018-11-22 15:04:03 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 15:04:03 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 15:04:03 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 15:04:03 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 15:04:03 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 15:04:03 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 15:04:03 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:03 --> Total execution time: 0.7120
INFO - 2018-11-22 15:04:03 --> Config Class Initialized
INFO - 2018-11-22 15:04:03 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:03 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:03 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:03 --> URI Class Initialized
INFO - 2018-11-22 15:04:03 --> Router Class Initialized
INFO - 2018-11-22 15:04:03 --> Output Class Initialized
INFO - 2018-11-22 15:04:03 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:03 --> Input Class Initialized
INFO - 2018-11-22 15:04:03 --> Language Class Initialized
ERROR - 2018-11-22 15:04:03 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 15:04:04 --> Config Class Initialized
INFO - 2018-11-22 15:04:04 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:04 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:04 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:04 --> URI Class Initialized
INFO - 2018-11-22 15:04:04 --> Router Class Initialized
INFO - 2018-11-22 15:04:04 --> Output Class Initialized
INFO - 2018-11-22 15:04:04 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:04 --> Input Class Initialized
INFO - 2018-11-22 15:04:04 --> Language Class Initialized
INFO - 2018-11-22 15:04:04 --> Loader Class Initialized
INFO - 2018-11-22 15:04:04 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:04 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:04 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:04 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:04 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:04 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:04 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:04 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:04 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:04 --> Controller Class Initialized
INFO - 2018-11-22 15:04:04 --> Model Class Initialized
INFO - 2018-11-22 15:04:04 --> Model Class Initialized
INFO - 2018-11-22 15:04:04 --> Model Class Initialized
INFO - 2018-11-22 15:04:04 --> Model Class Initialized
INFO - 2018-11-22 15:04:05 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 15:04:05 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:05 --> Total execution time: 1.4061
INFO - 2018-11-22 15:04:15 --> Config Class Initialized
INFO - 2018-11-22 15:04:15 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:15 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:15 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:15 --> URI Class Initialized
INFO - 2018-11-22 15:04:15 --> Router Class Initialized
INFO - 2018-11-22 15:04:15 --> Output Class Initialized
INFO - 2018-11-22 15:04:15 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:15 --> Input Class Initialized
INFO - 2018-11-22 15:04:15 --> Language Class Initialized
INFO - 2018-11-22 15:04:15 --> Loader Class Initialized
INFO - 2018-11-22 15:04:15 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:15 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:15 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:15 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:15 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:15 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:15 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:15 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:15 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:04:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:15 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:15 --> Controller Class Initialized
INFO - 2018-11-22 15:04:15 --> Model Class Initialized
INFO - 2018-11-22 15:04:15 --> Model Class Initialized
INFO - 2018-11-22 15:04:15 --> Model Class Initialized
INFO - 2018-11-22 15:04:15 --> Model Class Initialized
INFO - 2018-11-22 15:04:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 15:04:20 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:20 --> Total execution time: 5.2523
INFO - 2018-11-22 15:04:23 --> Config Class Initialized
INFO - 2018-11-22 15:04:23 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:23 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:23 --> URI Class Initialized
INFO - 2018-11-22 15:04:23 --> Router Class Initialized
INFO - 2018-11-22 15:04:23 --> Output Class Initialized
INFO - 2018-11-22 15:04:23 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:23 --> Input Class Initialized
INFO - 2018-11-22 15:04:23 --> Language Class Initialized
INFO - 2018-11-22 15:04:23 --> Loader Class Initialized
INFO - 2018-11-22 15:04:23 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:23 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:23 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:23 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:23 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:23 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:23 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:23 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:23 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:04:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:23 --> Controller Class Initialized
INFO - 2018-11-22 15:04:23 --> Model Class Initialized
INFO - 2018-11-22 15:04:23 --> Model Class Initialized
INFO - 2018-11-22 15:04:25 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 15:04:25 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:25 --> Total execution time: 1.9501
INFO - 2018-11-22 15:04:25 --> Config Class Initialized
INFO - 2018-11-22 15:04:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:25 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:25 --> URI Class Initialized
INFO - 2018-11-22 15:04:25 --> Router Class Initialized
INFO - 2018-11-22 15:04:25 --> Output Class Initialized
INFO - 2018-11-22 15:04:25 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:25 --> Input Class Initialized
INFO - 2018-11-22 15:04:25 --> Language Class Initialized
INFO - 2018-11-22 15:04:25 --> Loader Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:25 --> Config Class Initialized
INFO - 2018-11-22 15:04:25 --> Hooks Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:25 --> Config Class Initialized
DEBUG - 2018-11-22 15:04:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:25 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:25 --> Config Class Initialized
INFO - 2018-11-22 15:04:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:25 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:25 --> URI Class Initialized
INFO - 2018-11-22 15:04:25 --> Hooks Class Initialized
INFO - 2018-11-22 15:04:25 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:25 --> Router Class Initialized
DEBUG - 2018-11-22 15:04:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:25 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:25 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:25 --> URI Class Initialized
INFO - 2018-11-22 15:04:25 --> URI Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:25 --> Router Class Initialized
INFO - 2018-11-22 15:04:25 --> Router Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:25 --> Output Class Initialized
INFO - 2018-11-22 15:04:25 --> Output Class Initialized
INFO - 2018-11-22 15:04:25 --> Output Class Initialized
INFO - 2018-11-22 15:04:25 --> Security Class Initialized
INFO - 2018-11-22 15:04:25 --> Security Class Initialized
DEBUG - 2018-11-22 15:04:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:25 --> Config Class Initialized
INFO - 2018-11-22 15:04:25 --> Input Class Initialized
DEBUG - 2018-11-22 15:04:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:25 --> Security Class Initialized
INFO - 2018-11-22 15:04:25 --> Database Driver Class Initialized
INFO - 2018-11-22 15:04:25 --> Language Class Initialized
DEBUG - 2018-11-22 15:04:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:25 --> Hooks Class Initialized
INFO - 2018-11-22 15:04:25 --> Loader Class Initialized
INFO - 2018-11-22 15:04:25 --> Config Class Initialized
INFO - 2018-11-22 15:04:25 --> Input Class Initialized
INFO - 2018-11-22 15:04:25 --> Hooks Class Initialized
INFO - 2018-11-22 15:04:25 --> Input Class Initialized
DEBUG - 2018-11-22 15:04:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 15:04:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:25 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:25 --> Language Class Initialized
INFO - 2018-11-22 15:04:25 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 15:04:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:25 --> Language Class Initialized
INFO - 2018-11-22 15:04:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:25 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:25 --> URI Class Initialized
INFO - 2018-11-22 15:04:25 --> Loader Class Initialized
INFO - 2018-11-22 15:04:25 --> URI Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:25 --> Controller Class Initialized
INFO - 2018-11-22 15:04:25 --> Loader Class Initialized
INFO - 2018-11-22 15:04:25 --> Router Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:25 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:25 --> Router Class Initialized
INFO - 2018-11-22 15:04:25 --> Model Class Initialized
INFO - 2018-11-22 15:04:25 --> Output Class Initialized
INFO - 2018-11-22 15:04:25 --> Model Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:25 --> Output Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:25 --> Final output sent to browser
INFO - 2018-11-22 15:04:25 --> Security Class Initialized
INFO - 2018-11-22 15:04:25 --> Security Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:25 --> Helper loaded: file_helper
DEBUG - 2018-11-22 15:04:25 --> Total execution time: 0.3770
INFO - 2018-11-22 15:04:25 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 15:04:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:25 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:25 --> Input Class Initialized
INFO - 2018-11-22 15:04:25 --> Database Driver Class Initialized
INFO - 2018-11-22 15:04:25 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:26 --> Language Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:26 --> Loader Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 15:04:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:26 --> Input Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:26 --> Language Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:26 --> Database Driver Class Initialized
INFO - 2018-11-22 15:04:26 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:26 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:26 --> Controller Class Initialized
INFO - 2018-11-22 15:04:26 --> Model Class Initialized
INFO - 2018-11-22 15:04:26 --> Model Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:26 --> Loader Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: file_helper
DEBUG - 2018-11-22 15:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 15:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:26 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:26 --> Total execution time: 0.6030
INFO - 2018-11-22 15:04:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:26 --> Controller Class Initialized
INFO - 2018-11-22 15:04:26 --> Model Class Initialized
INFO - 2018-11-22 15:04:26 --> Model Class Initialized
INFO - 2018-11-22 15:04:26 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:26 --> Total execution time: 0.6510
INFO - 2018-11-22 15:04:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:26 --> Controller Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:26 --> Database Driver Class Initialized
INFO - 2018-11-22 15:04:26 --> Model Class Initialized
INFO - 2018-11-22 15:04:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:26 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 15:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:26 --> Model Class Initialized
INFO - 2018-11-22 15:04:26 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:27 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:27 --> Total execution time: 2.0811
INFO - 2018-11-22 15:04:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:27 --> Controller Class Initialized
INFO - 2018-11-22 15:04:27 --> Model Class Initialized
INFO - 2018-11-22 15:04:27 --> Model Class Initialized
INFO - 2018-11-22 15:04:27 --> Model Class Initialized
INFO - 2018-11-22 15:04:27 --> Model Class Initialized
INFO - 2018-11-22 15:04:28 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:28 --> Total execution time: 3.2902
INFO - 2018-11-22 15:04:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:29 --> Controller Class Initialized
INFO - 2018-11-22 15:04:29 --> Model Class Initialized
INFO - 2018-11-22 15:04:29 --> Model Class Initialized
INFO - 2018-11-22 15:04:29 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:29 --> Total execution time: 3.3302
INFO - 2018-11-22 15:04:39 --> Config Class Initialized
INFO - 2018-11-22 15:04:39 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:39 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:39 --> URI Class Initialized
INFO - 2018-11-22 15:04:39 --> Router Class Initialized
INFO - 2018-11-22 15:04:39 --> Config Class Initialized
INFO - 2018-11-22 15:04:39 --> Output Class Initialized
INFO - 2018-11-22 15:04:39 --> Security Class Initialized
INFO - 2018-11-22 15:04:39 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:04:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 15:04:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:04:39 --> Input Class Initialized
INFO - 2018-11-22 15:04:39 --> Utf8 Class Initialized
INFO - 2018-11-22 15:04:39 --> Language Class Initialized
INFO - 2018-11-22 15:04:39 --> URI Class Initialized
INFO - 2018-11-22 15:04:39 --> Loader Class Initialized
INFO - 2018-11-22 15:04:39 --> Router Class Initialized
INFO - 2018-11-22 15:04:39 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:39 --> Output Class Initialized
INFO - 2018-11-22 15:04:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:39 --> Security Class Initialized
INFO - 2018-11-22 15:04:39 --> Helper loaded: file_helper
DEBUG - 2018-11-22 15:04:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:04:39 --> Input Class Initialized
INFO - 2018-11-22 15:04:39 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:39 --> Language Class Initialized
INFO - 2018-11-22 15:04:39 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:39 --> Loader Class Initialized
INFO - 2018-11-22 15:04:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: url_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: file_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: form_helper
INFO - 2018-11-22 15:04:39 --> Database Driver Class Initialized
INFO - 2018-11-22 15:04:39 --> Helper loaded: general_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:04:39 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 15:04:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:04:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:39 --> Controller Class Initialized
INFO - 2018-11-22 15:04:39 --> Database Driver Class Initialized
INFO - 2018-11-22 15:04:39 --> Model Class Initialized
INFO - 2018-11-22 15:04:39 --> Model Class Initialized
INFO - 2018-11-22 15:04:39 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 15:04:39 --> Total execution time: 0.1960
INFO - 2018-11-22 15:04:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:04:39 --> Controller Class Initialized
INFO - 2018-11-22 15:04:39 --> Model Class Initialized
INFO - 2018-11-22 15:04:39 --> Model Class Initialized
INFO - 2018-11-22 15:04:47 --> Final output sent to browser
DEBUG - 2018-11-22 15:04:47 --> Total execution time: 8.3305
INFO - 2018-11-22 15:13:06 --> Config Class Initialized
INFO - 2018-11-22 15:13:06 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:13:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:13:06 --> Utf8 Class Initialized
INFO - 2018-11-22 15:13:06 --> URI Class Initialized
INFO - 2018-11-22 15:13:06 --> Router Class Initialized
INFO - 2018-11-22 15:13:06 --> Output Class Initialized
INFO - 2018-11-22 15:13:06 --> Security Class Initialized
DEBUG - 2018-11-22 15:13:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:13:06 --> Input Class Initialized
INFO - 2018-11-22 15:13:06 --> Language Class Initialized
INFO - 2018-11-22 15:13:06 --> Loader Class Initialized
INFO - 2018-11-22 15:13:06 --> Helper loaded: url_helper
INFO - 2018-11-22 15:13:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:13:06 --> Helper loaded: file_helper
INFO - 2018-11-22 15:13:06 --> Helper loaded: form_helper
INFO - 2018-11-22 15:13:06 --> Helper loaded: general_helper
INFO - 2018-11-22 15:13:06 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:13:06 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:13:06 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:13:07 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:13:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:13:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:13:07 --> Controller Class Initialized
INFO - 2018-11-22 15:13:07 --> Model Class Initialized
INFO - 2018-11-22 15:13:07 --> Model Class Initialized
INFO - 2018-11-22 15:13:07 --> Model Class Initialized
INFO - 2018-11-22 15:13:07 --> Model Class Initialized
INFO - 2018-11-22 15:13:08 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 15:13:08 --> Final output sent to browser
DEBUG - 2018-11-22 15:13:08 --> Total execution time: 1.2871
INFO - 2018-11-22 15:13:10 --> Config Class Initialized
INFO - 2018-11-22 15:13:10 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:13:10 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:13:10 --> Utf8 Class Initialized
INFO - 2018-11-22 15:13:10 --> URI Class Initialized
INFO - 2018-11-22 15:13:10 --> Router Class Initialized
INFO - 2018-11-22 15:13:10 --> Output Class Initialized
INFO - 2018-11-22 15:13:10 --> Security Class Initialized
DEBUG - 2018-11-22 15:13:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:13:10 --> Input Class Initialized
INFO - 2018-11-22 15:13:10 --> Language Class Initialized
INFO - 2018-11-22 15:13:10 --> Loader Class Initialized
INFO - 2018-11-22 15:13:10 --> Helper loaded: url_helper
INFO - 2018-11-22 15:13:10 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:13:10 --> Helper loaded: file_helper
INFO - 2018-11-22 15:13:10 --> Helper loaded: form_helper
INFO - 2018-11-22 15:13:10 --> Helper loaded: general_helper
INFO - 2018-11-22 15:13:10 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:13:10 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:13:10 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:13:10 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:13:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:13:10 --> Controller Class Initialized
INFO - 2018-11-22 15:13:10 --> Model Class Initialized
INFO - 2018-11-22 15:13:10 --> Model Class Initialized
INFO - 2018-11-22 15:13:10 --> Model Class Initialized
INFO - 2018-11-22 15:13:10 --> Model Class Initialized
INFO - 2018-11-22 15:13:59 --> Config Class Initialized
INFO - 2018-11-22 15:13:59 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:13:59 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:13:59 --> Utf8 Class Initialized
INFO - 2018-11-22 15:13:59 --> URI Class Initialized
INFO - 2018-11-22 15:13:59 --> Router Class Initialized
INFO - 2018-11-22 15:13:59 --> Output Class Initialized
INFO - 2018-11-22 15:13:59 --> Security Class Initialized
DEBUG - 2018-11-22 15:13:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:13:59 --> Input Class Initialized
INFO - 2018-11-22 15:13:59 --> Language Class Initialized
INFO - 2018-11-22 15:13:59 --> Loader Class Initialized
INFO - 2018-11-22 15:13:59 --> Helper loaded: url_helper
INFO - 2018-11-22 15:13:59 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:13:59 --> Helper loaded: file_helper
INFO - 2018-11-22 15:13:59 --> Helper loaded: form_helper
INFO - 2018-11-22 15:13:59 --> Helper loaded: general_helper
INFO - 2018-11-22 15:13:59 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:13:59 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:13:59 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:13:59 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:13:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:14:38 --> Config Class Initialized
INFO - 2018-11-22 15:14:38 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:14:38 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:14:38 --> Utf8 Class Initialized
INFO - 2018-11-22 15:14:38 --> URI Class Initialized
DEBUG - 2018-11-22 15:14:38 --> No URI present. Default controller set.
INFO - 2018-11-22 15:14:38 --> Router Class Initialized
INFO - 2018-11-22 15:14:38 --> Output Class Initialized
INFO - 2018-11-22 15:14:38 --> Security Class Initialized
DEBUG - 2018-11-22 15:14:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:14:38 --> Input Class Initialized
INFO - 2018-11-22 15:14:38 --> Language Class Initialized
INFO - 2018-11-22 15:14:38 --> Loader Class Initialized
INFO - 2018-11-22 15:14:38 --> Helper loaded: url_helper
INFO - 2018-11-22 15:14:38 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:14:38 --> Helper loaded: file_helper
INFO - 2018-11-22 15:14:38 --> Helper loaded: form_helper
INFO - 2018-11-22 15:14:38 --> Helper loaded: general_helper
INFO - 2018-11-22 15:14:38 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:14:38 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:14:38 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:14:38 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:14:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:12 --> Config Class Initialized
INFO - 2018-11-22 15:15:12 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:12 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:12 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:12 --> URI Class Initialized
DEBUG - 2018-11-22 15:15:12 --> No URI present. Default controller set.
INFO - 2018-11-22 15:15:12 --> Router Class Initialized
INFO - 2018-11-22 15:15:12 --> Output Class Initialized
INFO - 2018-11-22 15:15:12 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:12 --> Input Class Initialized
INFO - 2018-11-22 15:15:12 --> Language Class Initialized
INFO - 2018-11-22 15:15:12 --> Loader Class Initialized
INFO - 2018-11-22 15:15:12 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:12 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:12 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:12 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:12 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:12 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:12 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:12 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:12 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:15:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2018-11-22 15:15:14 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\sitios\MTBA-desa-procprod\system\core\Common.php 595
ERROR - 2018-11-22 15:15:14 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\sitios\MTBA-desa-procprod\system\libraries\Session\drivers\Session_files_driver.php 178
ERROR - 2018-11-22 15:15:14 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\sitios\MTBA-desa-procprod\system\libraries\Session\drivers\Session_files_driver.php 178
INFO - 2018-11-22 15:15:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:14 --> Controller Class Initialized
INFO - 2018-11-22 15:15:14 --> Model Class Initialized
INFO - 2018-11-22 15:15:14 --> Model Class Initialized
INFO - 2018-11-22 15:15:15 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 15:15:15 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\login.php
INFO - 2018-11-22 15:15:15 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 15:15:15 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:15 --> Total execution time: 3.3552
INFO - 2018-11-22 15:15:15 --> Config Class Initialized
INFO - 2018-11-22 15:15:15 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:15 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:15 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:15 --> URI Class Initialized
INFO - 2018-11-22 15:15:15 --> Router Class Initialized
INFO - 2018-11-22 15:15:16 --> Output Class Initialized
INFO - 2018-11-22 15:15:16 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:16 --> Input Class Initialized
INFO - 2018-11-22 15:15:16 --> Language Class Initialized
ERROR - 2018-11-22 15:15:16 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 15:15:25 --> Config Class Initialized
INFO - 2018-11-22 15:15:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:25 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:25 --> URI Class Initialized
INFO - 2018-11-22 15:15:25 --> Router Class Initialized
INFO - 2018-11-22 15:15:25 --> Output Class Initialized
INFO - 2018-11-22 15:15:25 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:25 --> Input Class Initialized
INFO - 2018-11-22 15:15:25 --> Language Class Initialized
INFO - 2018-11-22 15:15:25 --> Loader Class Initialized
INFO - 2018-11-22 15:15:25 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:25 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:25 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:25 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:25 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:25 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:25 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:25 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:25 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:25 --> Controller Class Initialized
INFO - 2018-11-22 15:15:25 --> Model Class Initialized
INFO - 2018-11-22 15:15:25 --> Model Class Initialized
INFO - 2018-11-22 15:15:27 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:27 --> Total execution time: 1.9121
INFO - 2018-11-22 15:15:28 --> Config Class Initialized
INFO - 2018-11-22 15:15:28 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:28 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:28 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:28 --> URI Class Initialized
INFO - 2018-11-22 15:15:28 --> Router Class Initialized
INFO - 2018-11-22 15:15:28 --> Output Class Initialized
INFO - 2018-11-22 15:15:28 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:28 --> Input Class Initialized
INFO - 2018-11-22 15:15:28 --> Language Class Initialized
INFO - 2018-11-22 15:15:28 --> Loader Class Initialized
INFO - 2018-11-22 15:15:28 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:28 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:28 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:28 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:28 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:28 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:28 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:28 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:28 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:28 --> Controller Class Initialized
INFO - 2018-11-22 15:15:28 --> Model Class Initialized
INFO - 2018-11-22 15:15:28 --> Model Class Initialized
INFO - 2018-11-22 15:15:28 --> Model Class Initialized
INFO - 2018-11-22 15:15:28 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 15:15:28 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 15:15:28 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 15:15:28 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 15:15:28 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 15:15:28 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 15:15:28 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:28 --> Total execution time: 0.4390
INFO - 2018-11-22 15:15:29 --> Config Class Initialized
INFO - 2018-11-22 15:15:29 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:29 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:29 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:29 --> URI Class Initialized
INFO - 2018-11-22 15:15:29 --> Router Class Initialized
INFO - 2018-11-22 15:15:29 --> Output Class Initialized
INFO - 2018-11-22 15:15:29 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:29 --> Input Class Initialized
INFO - 2018-11-22 15:15:29 --> Language Class Initialized
ERROR - 2018-11-22 15:15:29 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 15:15:31 --> Config Class Initialized
INFO - 2018-11-22 15:15:31 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:31 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:31 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:31 --> URI Class Initialized
INFO - 2018-11-22 15:15:31 --> Router Class Initialized
INFO - 2018-11-22 15:15:31 --> Output Class Initialized
INFO - 2018-11-22 15:15:31 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:31 --> Input Class Initialized
INFO - 2018-11-22 15:15:31 --> Language Class Initialized
INFO - 2018-11-22 15:15:31 --> Loader Class Initialized
INFO - 2018-11-22 15:15:31 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:31 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:31 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:31 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:31 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:31 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:31 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:31 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:31 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:31 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:31 --> Controller Class Initialized
INFO - 2018-11-22 15:15:31 --> Model Class Initialized
INFO - 2018-11-22 15:15:31 --> Model Class Initialized
INFO - 2018-11-22 15:15:31 --> Model Class Initialized
INFO - 2018-11-22 15:15:31 --> Model Class Initialized
INFO - 2018-11-22 15:15:32 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 15:15:32 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:32 --> Total execution time: 1.7281
INFO - 2018-11-22 15:15:35 --> Config Class Initialized
INFO - 2018-11-22 15:15:35 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:35 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:35 --> URI Class Initialized
INFO - 2018-11-22 15:15:35 --> Router Class Initialized
INFO - 2018-11-22 15:15:35 --> Output Class Initialized
INFO - 2018-11-22 15:15:35 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:35 --> Input Class Initialized
INFO - 2018-11-22 15:15:35 --> Language Class Initialized
INFO - 2018-11-22 15:15:35 --> Loader Class Initialized
INFO - 2018-11-22 15:15:35 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:35 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:35 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:35 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:35 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:35 --> Controller Class Initialized
INFO - 2018-11-22 15:15:35 --> Model Class Initialized
INFO - 2018-11-22 15:15:35 --> Model Class Initialized
INFO - 2018-11-22 15:15:35 --> Model Class Initialized
INFO - 2018-11-22 15:15:35 --> Model Class Initialized
INFO - 2018-11-22 15:15:46 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 15:15:46 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:46 --> Total execution time: 11.4497
INFO - 2018-11-22 15:15:52 --> Config Class Initialized
INFO - 2018-11-22 15:15:52 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:52 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:52 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:52 --> URI Class Initialized
INFO - 2018-11-22 15:15:52 --> Router Class Initialized
INFO - 2018-11-22 15:15:52 --> Output Class Initialized
INFO - 2018-11-22 15:15:52 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:52 --> Input Class Initialized
INFO - 2018-11-22 15:15:52 --> Language Class Initialized
INFO - 2018-11-22 15:15:52 --> Loader Class Initialized
INFO - 2018-11-22 15:15:52 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:52 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:53 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:53 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:53 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:53 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:53 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:53 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:53 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:53 --> Controller Class Initialized
INFO - 2018-11-22 15:15:53 --> Model Class Initialized
INFO - 2018-11-22 15:15:53 --> Model Class Initialized
INFO - 2018-11-22 15:15:55 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 15:15:55 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:55 --> Total execution time: 2.3291
INFO - 2018-11-22 15:15:55 --> Config Class Initialized
INFO - 2018-11-22 15:15:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:55 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:55 --> URI Class Initialized
INFO - 2018-11-22 15:15:55 --> Router Class Initialized
INFO - 2018-11-22 15:15:55 --> Config Class Initialized
INFO - 2018-11-22 15:15:55 --> Output Class Initialized
INFO - 2018-11-22 15:15:55 --> Hooks Class Initialized
INFO - 2018-11-22 15:15:55 --> Security Class Initialized
DEBUG - 2018-11-22 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 15:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:55 --> Config Class Initialized
INFO - 2018-11-22 15:15:55 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:55 --> Hooks Class Initialized
INFO - 2018-11-22 15:15:55 --> URI Class Initialized
DEBUG - 2018-11-22 15:15:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:55 --> Router Class Initialized
INFO - 2018-11-22 15:15:55 --> Input Class Initialized
INFO - 2018-11-22 15:15:55 --> Language Class Initialized
INFO - 2018-11-22 15:15:55 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:55 --> URI Class Initialized
INFO - 2018-11-22 15:15:55 --> Output Class Initialized
INFO - 2018-11-22 15:15:55 --> Config Class Initialized
INFO - 2018-11-22 15:15:55 --> Security Class Initialized
INFO - 2018-11-22 15:15:55 --> Router Class Initialized
INFO - 2018-11-22 15:15:55 --> Hooks Class Initialized
INFO - 2018-11-22 15:15:55 --> Loader Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:55 --> Config Class Initialized
INFO - 2018-11-22 15:15:55 --> Output Class Initialized
DEBUG - 2018-11-22 15:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:55 --> Config Class Initialized
INFO - 2018-11-22 15:15:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:15:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:55 --> Security Class Initialized
INFO - 2018-11-22 15:15:55 --> Input Class Initialized
INFO - 2018-11-22 15:15:55 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:55 --> Language Class Initialized
DEBUG - 2018-11-22 15:15:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:55 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:55 --> Hooks Class Initialized
INFO - 2018-11-22 15:15:55 --> URI Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:55 --> Utf8 Class Initialized
DEBUG - 2018-11-22 15:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:55 --> Router Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: general_helper
DEBUG - 2018-11-22 15:15:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:15:55 --> Input Class Initialized
INFO - 2018-11-22 15:15:55 --> Output Class Initialized
INFO - 2018-11-22 15:15:55 --> Loader Class Initialized
INFO - 2018-11-22 15:15:55 --> Security Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:55 --> Language Class Initialized
INFO - 2018-11-22 15:15:55 --> Utf8 Class Initialized
INFO - 2018-11-22 15:15:55 --> URI Class Initialized
DEBUG - 2018-11-22 15:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:55 --> URI Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:55 --> Input Class Initialized
INFO - 2018-11-22 15:15:55 --> Loader Class Initialized
INFO - 2018-11-22 15:15:55 --> Router Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:55 --> Language Class Initialized
INFO - 2018-11-22 15:15:55 --> Output Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:55 --> Router Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:55 --> Database Driver Class Initialized
INFO - 2018-11-22 15:15:55 --> Security Class Initialized
INFO - 2018-11-22 15:15:55 --> Loader Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:55 --> Output Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: form_helper
DEBUG - 2018-11-22 15:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:55 --> Input Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:55 --> Security Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:55 --> Language Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: form_helper
DEBUG - 2018-11-22 15:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:55 --> Loader Class Initialized
INFO - 2018-11-22 15:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:55 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 15:15:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:15:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:55 --> Controller Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:55 --> Input Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:55 --> Language Class Initialized
INFO - 2018-11-22 15:15:55 --> Database Driver Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:55 --> Loader Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:55 --> Model Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: url_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:15:55 --> Database Driver Class Initialized
INFO - 2018-11-22 15:15:55 --> Model Class Initialized
INFO - 2018-11-22 15:15:55 --> Database Driver Class Initialized
INFO - 2018-11-22 15:15:55 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:55 --> Helper loaded: file_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 15:15:55 --> Total execution time: 0.5030
INFO - 2018-11-22 15:15:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:55 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: file_helper
DEBUG - 2018-11-22 15:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:55 --> Controller Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: form_helper
INFO - 2018-11-22 15:15:55 --> Model Class Initialized
INFO - 2018-11-22 15:15:55 --> Model Class Initialized
INFO - 2018-11-22 15:15:55 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: general_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:55 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 15:15:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:56 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:15:56 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:15:56 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:56 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:15:56 --> Database Driver Class Initialized
INFO - 2018-11-22 15:15:56 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:15:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 15:15:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:15:57 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:57 --> Total execution time: 1.9011
INFO - 2018-11-22 15:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:57 --> Controller Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:57 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:57 --> Total execution time: 1.9531
INFO - 2018-11-22 15:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:57 --> Controller Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:57 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:57 --> Total execution time: 1.9631
INFO - 2018-11-22 15:15:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:57 --> Controller Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:57 --> Model Class Initialized
INFO - 2018-11-22 15:15:59 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:59 --> Total execution time: 3.3282
INFO - 2018-11-22 15:15:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:15:59 --> Controller Class Initialized
INFO - 2018-11-22 15:15:59 --> Model Class Initialized
INFO - 2018-11-22 15:15:59 --> Model Class Initialized
INFO - 2018-11-22 15:15:59 --> Final output sent to browser
DEBUG - 2018-11-22 15:15:59 --> Total execution time: 3.3802
INFO - 2018-11-22 15:16:08 --> Config Class Initialized
INFO - 2018-11-22 15:16:08 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:16:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:16:08 --> Utf8 Class Initialized
INFO - 2018-11-22 15:16:08 --> URI Class Initialized
INFO - 2018-11-22 15:16:08 --> Router Class Initialized
INFO - 2018-11-22 15:16:08 --> Output Class Initialized
INFO - 2018-11-22 15:16:08 --> Config Class Initialized
INFO - 2018-11-22 15:16:08 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:16:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:16:08 --> Utf8 Class Initialized
INFO - 2018-11-22 15:16:08 --> Security Class Initialized
INFO - 2018-11-22 15:16:08 --> URI Class Initialized
DEBUG - 2018-11-22 15:16:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:16:08 --> Input Class Initialized
INFO - 2018-11-22 15:16:08 --> Router Class Initialized
INFO - 2018-11-22 15:16:08 --> Language Class Initialized
INFO - 2018-11-22 15:16:08 --> Output Class Initialized
INFO - 2018-11-22 15:16:08 --> Security Class Initialized
INFO - 2018-11-22 15:16:08 --> Loader Class Initialized
DEBUG - 2018-11-22 15:16:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:16:08 --> Helper loaded: url_helper
INFO - 2018-11-22 15:16:08 --> Input Class Initialized
INFO - 2018-11-22 15:16:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:16:08 --> Language Class Initialized
INFO - 2018-11-22 15:16:08 --> Helper loaded: file_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: form_helper
INFO - 2018-11-22 15:16:08 --> Loader Class Initialized
INFO - 2018-11-22 15:16:08 --> Helper loaded: general_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: url_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: file_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: form_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: general_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:16:08 --> Database Driver Class Initialized
INFO - 2018-11-22 15:16:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:16:08 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 15:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:16:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:16:08 --> Controller Class Initialized
INFO - 2018-11-22 15:16:08 --> Database Driver Class Initialized
INFO - 2018-11-22 15:16:08 --> Model Class Initialized
INFO - 2018-11-22 15:16:08 --> Model Class Initialized
INFO - 2018-11-22 15:16:08 --> Final output sent to browser
DEBUG - 2018-11-22 15:16:08 --> Total execution time: 0.2260
DEBUG - 2018-11-22 15:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:16:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:16:08 --> Controller Class Initialized
INFO - 2018-11-22 15:16:08 --> Model Class Initialized
INFO - 2018-11-22 15:16:08 --> Model Class Initialized
INFO - 2018-11-22 15:16:10 --> Final output sent to browser
DEBUG - 2018-11-22 15:16:10 --> Total execution time: 2.2291
INFO - 2018-11-22 15:40:29 --> Config Class Initialized
INFO - 2018-11-22 15:40:29 --> Hooks Class Initialized
INFO - 2018-11-22 15:40:29 --> Config Class Initialized
INFO - 2018-11-22 15:40:29 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:40:29 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 15:40:29 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:40:29 --> Utf8 Class Initialized
INFO - 2018-11-22 15:40:29 --> URI Class Initialized
INFO - 2018-11-22 15:40:29 --> Utf8 Class Initialized
INFO - 2018-11-22 15:40:29 --> Router Class Initialized
INFO - 2018-11-22 15:40:29 --> URI Class Initialized
INFO - 2018-11-22 15:40:29 --> Router Class Initialized
INFO - 2018-11-22 15:40:29 --> Output Class Initialized
INFO - 2018-11-22 15:40:29 --> Output Class Initialized
INFO - 2018-11-22 15:40:29 --> Security Class Initialized
INFO - 2018-11-22 15:40:29 --> Security Class Initialized
DEBUG - 2018-11-22 15:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 15:40:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:40:29 --> Input Class Initialized
INFO - 2018-11-22 15:40:29 --> Input Class Initialized
INFO - 2018-11-22 15:40:29 --> Language Class Initialized
INFO - 2018-11-22 15:40:29 --> Language Class Initialized
INFO - 2018-11-22 15:40:29 --> Loader Class Initialized
INFO - 2018-11-22 15:40:29 --> Loader Class Initialized
INFO - 2018-11-22 15:40:29 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: file_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: file_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: form_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: form_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: general_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: general_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:29 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:29 --> Database Driver Class Initialized
INFO - 2018-11-22 15:40:29 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 15:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:40:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:29 --> Controller Class Initialized
INFO - 2018-11-22 15:40:30 --> Model Class Initialized
INFO - 2018-11-22 15:40:30 --> Model Class Initialized
INFO - 2018-11-22 15:40:30 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:30 --> Total execution time: 0.5840
INFO - 2018-11-22 15:40:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:30 --> Controller Class Initialized
INFO - 2018-11-22 15:40:30 --> Model Class Initialized
INFO - 2018-11-22 15:40:30 --> Model Class Initialized
INFO - 2018-11-22 15:40:30 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:30 --> Total execution time: 1.0051
INFO - 2018-11-22 15:40:35 --> Config Class Initialized
INFO - 2018-11-22 15:40:35 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:40:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:40:35 --> Utf8 Class Initialized
INFO - 2018-11-22 15:40:35 --> Config Class Initialized
INFO - 2018-11-22 15:40:35 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:40:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:40:35 --> Utf8 Class Initialized
INFO - 2018-11-22 15:40:35 --> URI Class Initialized
INFO - 2018-11-22 15:40:35 --> URI Class Initialized
INFO - 2018-11-22 15:40:35 --> Router Class Initialized
INFO - 2018-11-22 15:40:35 --> Output Class Initialized
INFO - 2018-11-22 15:40:35 --> Config Class Initialized
INFO - 2018-11-22 15:40:35 --> Security Class Initialized
DEBUG - 2018-11-22 15:40:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:40:35 --> Input Class Initialized
INFO - 2018-11-22 15:40:35 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:40:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:40:35 --> Router Class Initialized
INFO - 2018-11-22 15:40:35 --> Language Class Initialized
INFO - 2018-11-22 15:40:35 --> Utf8 Class Initialized
INFO - 2018-11-22 15:40:35 --> Output Class Initialized
INFO - 2018-11-22 15:40:35 --> Security Class Initialized
INFO - 2018-11-22 15:40:35 --> Loader Class Initialized
INFO - 2018-11-22 15:40:35 --> URI Class Initialized
DEBUG - 2018-11-22 15:40:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:40:35 --> Input Class Initialized
INFO - 2018-11-22 15:40:35 --> Language Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:35 --> Loader Class Initialized
INFO - 2018-11-22 15:40:35 --> Router Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: file_helper
INFO - 2018-11-22 15:40:35 --> Output Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:35 --> Security Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: form_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: file_helper
DEBUG - 2018-11-22 15:40:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:40:35 --> Helper loaded: form_helper
INFO - 2018-11-22 15:40:35 --> Input Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: general_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: general_helper
INFO - 2018-11-22 15:40:35 --> Language Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:35 --> Loader Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:35 --> Database Driver Class Initialized
INFO - 2018-11-22 15:40:35 --> Database Driver Class Initialized
INFO - 2018-11-22 15:40:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: file_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: form_helper
INFO - 2018-11-22 15:40:35 --> Helper loaded: general_helper
DEBUG - 2018-11-22 15:40:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:40:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:35 --> Controller Class Initialized
DEBUG - 2018-11-22 15:40:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:40:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:35 --> Model Class Initialized
INFO - 2018-11-22 15:40:35 --> Model Class Initialized
INFO - 2018-11-22 15:40:35 --> Database Driver Class Initialized
INFO - 2018-11-22 15:40:36 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:36 --> Total execution time: 0.2980
INFO - 2018-11-22 15:40:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:36 --> Controller Class Initialized
INFO - 2018-11-22 15:40:36 --> Model Class Initialized
INFO - 2018-11-22 15:40:36 --> Model Class Initialized
INFO - 2018-11-22 15:40:36 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:36 --> Total execution time: 0.3680
DEBUG - 2018-11-22 15:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:40:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:36 --> Controller Class Initialized
INFO - 2018-11-22 15:40:36 --> Model Class Initialized
INFO - 2018-11-22 15:40:36 --> Model Class Initialized
INFO - 2018-11-22 15:40:37 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:37 --> Total execution time: 1.8481
INFO - 2018-11-22 15:40:39 --> Config Class Initialized
INFO - 2018-11-22 15:40:39 --> Config Class Initialized
INFO - 2018-11-22 15:40:39 --> Hooks Class Initialized
INFO - 2018-11-22 15:40:39 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:40:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:40:39 --> Utf8 Class Initialized
DEBUG - 2018-11-22 15:40:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:40:39 --> Utf8 Class Initialized
INFO - 2018-11-22 15:40:39 --> URI Class Initialized
INFO - 2018-11-22 15:40:39 --> URI Class Initialized
INFO - 2018-11-22 15:40:39 --> Router Class Initialized
INFO - 2018-11-22 15:40:39 --> Output Class Initialized
INFO - 2018-11-22 15:40:39 --> Security Class Initialized
DEBUG - 2018-11-22 15:40:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:40:39 --> Router Class Initialized
INFO - 2018-11-22 15:40:39 --> Input Class Initialized
INFO - 2018-11-22 15:40:39 --> Output Class Initialized
INFO - 2018-11-22 15:40:40 --> Security Class Initialized
INFO - 2018-11-22 15:40:40 --> Language Class Initialized
DEBUG - 2018-11-22 15:40:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:40:40 --> Loader Class Initialized
INFO - 2018-11-22 15:40:40 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: file_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: form_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: general_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:40 --> Database Driver Class Initialized
INFO - 2018-11-22 15:40:40 --> Input Class Initialized
INFO - 2018-11-22 15:40:40 --> Language Class Initialized
INFO - 2018-11-22 15:40:40 --> Loader Class Initialized
INFO - 2018-11-22 15:40:40 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: file_helper
INFO - 2018-11-22 15:40:40 --> Helper loaded: form_helper
DEBUG - 2018-11-22 15:40:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:40:40 --> Helper loaded: general_helper
INFO - 2018-11-22 15:40:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:40 --> Controller Class Initialized
INFO - 2018-11-22 15:40:40 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:40 --> Model Class Initialized
INFO - 2018-11-22 15:40:40 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:40 --> Model Class Initialized
INFO - 2018-11-22 15:40:40 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:40 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:40 --> Total execution time: 0.2460
INFO - 2018-11-22 15:40:40 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:40:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:40:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:40 --> Controller Class Initialized
INFO - 2018-11-22 15:40:40 --> Model Class Initialized
INFO - 2018-11-22 15:40:40 --> Model Class Initialized
INFO - 2018-11-22 15:40:40 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:40 --> Total execution time: 0.3340
INFO - 2018-11-22 15:40:46 --> Config Class Initialized
INFO - 2018-11-22 15:40:46 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:40:46 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:40:46 --> Utf8 Class Initialized
INFO - 2018-11-22 15:40:46 --> URI Class Initialized
INFO - 2018-11-22 15:40:46 --> Router Class Initialized
INFO - 2018-11-22 15:40:46 --> Output Class Initialized
INFO - 2018-11-22 15:40:46 --> Security Class Initialized
DEBUG - 2018-11-22 15:40:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:40:46 --> Input Class Initialized
INFO - 2018-11-22 15:40:46 --> Language Class Initialized
INFO - 2018-11-22 15:40:47 --> Loader Class Initialized
INFO - 2018-11-22 15:40:47 --> Helper loaded: url_helper
INFO - 2018-11-22 15:40:47 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:40:47 --> Helper loaded: file_helper
INFO - 2018-11-22 15:40:47 --> Helper loaded: form_helper
INFO - 2018-11-22 15:40:47 --> Helper loaded: general_helper
INFO - 2018-11-22 15:40:47 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:40:47 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:40:47 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:40:47 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:40:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:40:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:40:47 --> Controller Class Initialized
INFO - 2018-11-22 15:40:47 --> Model Class Initialized
INFO - 2018-11-22 15:40:47 --> Model Class Initialized
INFO - 2018-11-22 15:40:47 --> Final output sent to browser
DEBUG - 2018-11-22 15:40:47 --> Total execution time: 0.1580
INFO - 2018-11-22 15:45:16 --> Config Class Initialized
INFO - 2018-11-22 15:45:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:45:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:16 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:16 --> URI Class Initialized
INFO - 2018-11-22 15:45:16 --> Router Class Initialized
INFO - 2018-11-22 15:45:16 --> Output Class Initialized
INFO - 2018-11-22 15:45:16 --> Security Class Initialized
DEBUG - 2018-11-22 15:45:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:16 --> Input Class Initialized
INFO - 2018-11-22 15:45:16 --> Language Class Initialized
INFO - 2018-11-22 15:45:16 --> Loader Class Initialized
INFO - 2018-11-22 15:45:16 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:16 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:16 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:16 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:16 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:16 --> Controller Class Initialized
INFO - 2018-11-22 15:45:16 --> Model Class Initialized
INFO - 2018-11-22 15:45:16 --> Model Class Initialized
INFO - 2018-11-22 15:45:16 --> Model Class Initialized
INFO - 2018-11-22 15:45:16 --> Model Class Initialized
INFO - 2018-11-22 15:45:17 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 15:45:17 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:17 --> Total execution time: 1.4121
INFO - 2018-11-22 15:45:21 --> Config Class Initialized
INFO - 2018-11-22 15:45:21 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:45:21 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:21 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:21 --> URI Class Initialized
INFO - 2018-11-22 15:45:21 --> Router Class Initialized
INFO - 2018-11-22 15:45:22 --> Output Class Initialized
INFO - 2018-11-22 15:45:22 --> Security Class Initialized
DEBUG - 2018-11-22 15:45:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:22 --> Input Class Initialized
INFO - 2018-11-22 15:45:22 --> Language Class Initialized
INFO - 2018-11-22 15:45:22 --> Loader Class Initialized
INFO - 2018-11-22 15:45:22 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:22 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:22 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:22 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:22 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:22 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:45:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:22 --> Controller Class Initialized
INFO - 2018-11-22 15:45:22 --> Model Class Initialized
INFO - 2018-11-22 15:45:22 --> Model Class Initialized
INFO - 2018-11-22 15:45:22 --> Model Class Initialized
INFO - 2018-11-22 15:45:22 --> Model Class Initialized
INFO - 2018-11-22 15:45:26 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 15:45:26 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:26 --> Total execution time: 5.0683
INFO - 2018-11-22 15:45:30 --> Config Class Initialized
INFO - 2018-11-22 15:45:30 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:45:30 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:30 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:30 --> URI Class Initialized
INFO - 2018-11-22 15:45:30 --> Router Class Initialized
INFO - 2018-11-22 15:45:30 --> Output Class Initialized
INFO - 2018-11-22 15:45:30 --> Security Class Initialized
DEBUG - 2018-11-22 15:45:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:30 --> Input Class Initialized
INFO - 2018-11-22 15:45:30 --> Language Class Initialized
INFO - 2018-11-22 15:45:30 --> Loader Class Initialized
INFO - 2018-11-22 15:45:30 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:30 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:30 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:30 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:30 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:30 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:30 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:30 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:30 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:45:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:30 --> Controller Class Initialized
INFO - 2018-11-22 15:45:30 --> Model Class Initialized
INFO - 2018-11-22 15:45:30 --> Model Class Initialized
INFO - 2018-11-22 15:45:32 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 15:45:32 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:32 --> Total execution time: 1.6941
INFO - 2018-11-22 15:45:32 --> Config Class Initialized
INFO - 2018-11-22 15:45:32 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:45:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:32 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:32 --> URI Class Initialized
INFO - 2018-11-22 15:45:32 --> Router Class Initialized
INFO - 2018-11-22 15:45:32 --> Output Class Initialized
INFO - 2018-11-22 15:45:32 --> Security Class Initialized
DEBUG - 2018-11-22 15:45:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:32 --> Input Class Initialized
INFO - 2018-11-22 15:45:32 --> Language Class Initialized
INFO - 2018-11-22 15:45:32 --> Config Class Initialized
INFO - 2018-11-22 15:45:32 --> Config Class Initialized
INFO - 2018-11-22 15:45:32 --> Hooks Class Initialized
INFO - 2018-11-22 15:45:32 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:45:32 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 15:45:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:32 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:32 --> URI Class Initialized
INFO - 2018-11-22 15:45:32 --> Loader Class Initialized
INFO - 2018-11-22 15:45:32 --> Router Class Initialized
INFO - 2018-11-22 15:45:32 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:32 --> Output Class Initialized
INFO - 2018-11-22 15:45:32 --> Security Class Initialized
INFO - 2018-11-22 15:45:32 --> URI Class Initialized
DEBUG - 2018-11-22 15:45:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:32 --> Input Class Initialized
INFO - 2018-11-22 15:45:32 --> Router Class Initialized
INFO - 2018-11-22 15:45:32 --> Language Class Initialized
INFO - 2018-11-22 15:45:32 --> Output Class Initialized
INFO - 2018-11-22 15:45:32 --> Loader Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:32 --> Security Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: form_helper
DEBUG - 2018-11-22 15:45:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:32 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:32 --> Input Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:32 --> Language Class Initialized
INFO - 2018-11-22 15:45:32 --> Database Driver Class Initialized
INFO - 2018-11-22 15:45:32 --> Loader Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:32 --> Config Class Initialized
INFO - 2018-11-22 15:45:32 --> Hooks Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: file_helper
DEBUG - 2018-11-22 15:45:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:32 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:32 --> URI Class Initialized
INFO - 2018-11-22 15:45:32 --> Router Class Initialized
INFO - 2018-11-22 15:45:32 --> Output Class Initialized
INFO - 2018-11-22 15:45:32 --> Config Class Initialized
INFO - 2018-11-22 15:45:32 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:45:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:32 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:32 --> URI Class Initialized
INFO - 2018-11-22 15:45:32 --> Router Class Initialized
INFO - 2018-11-22 15:45:32 --> Output Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:32 --> Security Class Initialized
INFO - 2018-11-22 15:45:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:32 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 15:45:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:32 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:45:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:32 --> Security Class Initialized
DEBUG - 2018-11-22 15:45:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:32 --> Input Class Initialized
INFO - 2018-11-22 15:45:32 --> Database Driver Class Initialized
INFO - 2018-11-22 15:45:32 --> Config Class Initialized
INFO - 2018-11-22 15:45:32 --> Input Class Initialized
INFO - 2018-11-22 15:45:33 --> Hooks Class Initialized
INFO - 2018-11-22 15:45:33 --> Language Class Initialized
INFO - 2018-11-22 15:45:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:33 --> Language Class Initialized
INFO - 2018-11-22 15:45:33 --> Controller Class Initialized
DEBUG - 2018-11-22 15:45:33 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Loader Class Initialized
INFO - 2018-11-22 15:45:33 --> Loader Class Initialized
INFO - 2018-11-22 15:45:33 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
DEBUG - 2018-11-22 15:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:33 --> URI Class Initialized
INFO - 2018-11-22 15:45:33 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: file_helper
DEBUG - 2018-11-22 15:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:33 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:33 --> Router Class Initialized
INFO - 2018-11-22 15:45:33 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:33 --> Output Class Initialized
INFO - 2018-11-22 15:45:33 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:33 --> Security Class Initialized
INFO - 2018-11-22 15:45:33 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 15:45:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:33 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:33 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:33 --> Total execution time: 0.5300
INFO - 2018-11-22 15:45:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:33 --> Database Driver Class Initialized
INFO - 2018-11-22 15:45:33 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:33 --> Input Class Initialized
INFO - 2018-11-22 15:45:33 --> Controller Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Database Driver Class Initialized
INFO - 2018-11-22 15:45:33 --> Language Class Initialized
INFO - 2018-11-22 15:45:33 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:33 --> Total execution time: 0.7300
INFO - 2018-11-22 15:45:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:33 --> Loader Class Initialized
INFO - 2018-11-22 15:45:33 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:33 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:33 --> Controller Class Initialized
INFO - 2018-11-22 15:45:33 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:33 --> Database Driver Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:33 --> Total execution time: 0.7540
DEBUG - 2018-11-22 15:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 15:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:33 --> Controller Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
INFO - 2018-11-22 15:45:33 --> Model Class Initialized
DEBUG - 2018-11-22 15:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:34 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:34 --> Total execution time: 2.1211
INFO - 2018-11-22 15:45:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:35 --> Controller Class Initialized
INFO - 2018-11-22 15:45:35 --> Model Class Initialized
INFO - 2018-11-22 15:45:35 --> Model Class Initialized
INFO - 2018-11-22 15:45:36 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:36 --> Total execution time: 3.6162
INFO - 2018-11-22 15:45:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:36 --> Controller Class Initialized
INFO - 2018-11-22 15:45:36 --> Model Class Initialized
INFO - 2018-11-22 15:45:36 --> Model Class Initialized
INFO - 2018-11-22 15:45:36 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:36 --> Total execution time: 3.7852
INFO - 2018-11-22 15:45:47 --> Config Class Initialized
INFO - 2018-11-22 15:45:47 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:45:47 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:47 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:47 --> Config Class Initialized
INFO - 2018-11-22 15:45:47 --> URI Class Initialized
INFO - 2018-11-22 15:45:47 --> Hooks Class Initialized
INFO - 2018-11-22 15:45:47 --> Router Class Initialized
DEBUG - 2018-11-22 15:45:47 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:45:47 --> Output Class Initialized
INFO - 2018-11-22 15:45:47 --> Utf8 Class Initialized
INFO - 2018-11-22 15:45:47 --> Security Class Initialized
INFO - 2018-11-22 15:45:47 --> URI Class Initialized
DEBUG - 2018-11-22 15:45:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:47 --> Input Class Initialized
INFO - 2018-11-22 15:45:47 --> Router Class Initialized
INFO - 2018-11-22 15:45:47 --> Language Class Initialized
INFO - 2018-11-22 15:45:47 --> Output Class Initialized
INFO - 2018-11-22 15:45:47 --> Loader Class Initialized
INFO - 2018-11-22 15:45:47 --> Security Class Initialized
DEBUG - 2018-11-22 15:45:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:45:47 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:47 --> Input Class Initialized
INFO - 2018-11-22 15:45:47 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:47 --> Language Class Initialized
INFO - 2018-11-22 15:45:47 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:47 --> Loader Class Initialized
INFO - 2018-11-22 15:45:47 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: url_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: file_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: form_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: general_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:45:47 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:45:47 --> Database Driver Class Initialized
INFO - 2018-11-22 15:45:47 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 15:45:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:47 --> Database Driver Class Initialized
INFO - 2018-11-22 15:45:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:47 --> Controller Class Initialized
INFO - 2018-11-22 15:45:47 --> Model Class Initialized
INFO - 2018-11-22 15:45:47 --> Model Class Initialized
INFO - 2018-11-22 15:45:47 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:47 --> Total execution time: 0.1610
DEBUG - 2018-11-22 15:45:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:45:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:45:47 --> Controller Class Initialized
INFO - 2018-11-22 15:45:47 --> Model Class Initialized
INFO - 2018-11-22 15:45:47 --> Model Class Initialized
INFO - 2018-11-22 15:45:48 --> Final output sent to browser
DEBUG - 2018-11-22 15:45:48 --> Total execution time: 1.6411
INFO - 2018-11-22 15:46:11 --> Config Class Initialized
INFO - 2018-11-22 15:46:11 --> Hooks Class Initialized
INFO - 2018-11-22 15:46:11 --> Config Class Initialized
INFO - 2018-11-22 15:46:11 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:46:11 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:46:11 --> Utf8 Class Initialized
DEBUG - 2018-11-22 15:46:11 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:46:11 --> Utf8 Class Initialized
INFO - 2018-11-22 15:46:11 --> URI Class Initialized
INFO - 2018-11-22 15:46:11 --> URI Class Initialized
INFO - 2018-11-22 15:46:11 --> Router Class Initialized
INFO - 2018-11-22 15:46:11 --> Router Class Initialized
INFO - 2018-11-22 15:46:11 --> Output Class Initialized
INFO - 2018-11-22 15:46:11 --> Output Class Initialized
INFO - 2018-11-22 15:46:11 --> Security Class Initialized
INFO - 2018-11-22 15:46:11 --> Security Class Initialized
DEBUG - 2018-11-22 15:46:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:46:11 --> Input Class Initialized
DEBUG - 2018-11-22 15:46:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:46:11 --> Input Class Initialized
INFO - 2018-11-22 15:46:11 --> Language Class Initialized
INFO - 2018-11-22 15:46:11 --> Language Class Initialized
INFO - 2018-11-22 15:46:11 --> Loader Class Initialized
INFO - 2018-11-22 15:46:11 --> Loader Class Initialized
INFO - 2018-11-22 15:46:11 --> Helper loaded: url_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: url_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: file_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: file_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: form_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: general_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: form_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: general_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:46:11 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:46:11 --> Database Driver Class Initialized
INFO - 2018-11-22 15:46:11 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 15:46:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:46:11 --> Database Driver Class Initialized
INFO - 2018-11-22 15:46:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:46:11 --> Controller Class Initialized
INFO - 2018-11-22 15:46:11 --> Model Class Initialized
INFO - 2018-11-22 15:46:11 --> Model Class Initialized
DEBUG - 2018-11-22 15:46:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:46:14 --> Final output sent to browser
DEBUG - 2018-11-22 15:46:14 --> Total execution time: 2.6432
INFO - 2018-11-22 15:46:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:46:14 --> Controller Class Initialized
INFO - 2018-11-22 15:46:14 --> Model Class Initialized
INFO - 2018-11-22 15:46:14 --> Model Class Initialized
INFO - 2018-11-22 15:46:14 --> Final output sent to browser
DEBUG - 2018-11-22 15:46:14 --> Total execution time: 2.7462
INFO - 2018-11-22 15:46:15 --> Config Class Initialized
INFO - 2018-11-22 15:46:15 --> Hooks Class Initialized
INFO - 2018-11-22 15:46:15 --> Config Class Initialized
DEBUG - 2018-11-22 15:46:15 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:46:15 --> Utf8 Class Initialized
INFO - 2018-11-22 15:46:15 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:46:15 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:46:15 --> URI Class Initialized
INFO - 2018-11-22 15:46:15 --> Utf8 Class Initialized
INFO - 2018-11-22 15:46:15 --> URI Class Initialized
INFO - 2018-11-22 15:46:15 --> Router Class Initialized
INFO - 2018-11-22 15:46:15 --> Output Class Initialized
INFO - 2018-11-22 15:46:15 --> Security Class Initialized
DEBUG - 2018-11-22 15:46:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:46:15 --> Input Class Initialized
INFO - 2018-11-22 15:46:15 --> Router Class Initialized
INFO - 2018-11-22 15:46:15 --> Language Class Initialized
INFO - 2018-11-22 15:46:15 --> Loader Class Initialized
INFO - 2018-11-22 15:46:15 --> Output Class Initialized
INFO - 2018-11-22 15:46:15 --> Helper loaded: url_helper
INFO - 2018-11-22 15:46:15 --> Security Class Initialized
DEBUG - 2018-11-22 15:46:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:46:15 --> Input Class Initialized
INFO - 2018-11-22 15:46:15 --> Language Class Initialized
INFO - 2018-11-22 15:46:15 --> Loader Class Initialized
INFO - 2018-11-22 15:46:15 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: url_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: file_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: form_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: general_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:46:15 --> Database Driver Class Initialized
INFO - 2018-11-22 15:46:15 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: file_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: form_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: general_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:46:15 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 15:46:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:46:15 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:46:15 --> Controller Class Initialized
INFO - 2018-11-22 15:46:15 --> Model Class Initialized
INFO - 2018-11-22 15:46:15 --> Database Driver Class Initialized
INFO - 2018-11-22 15:46:15 --> Model Class Initialized
INFO - 2018-11-22 15:46:15 --> Final output sent to browser
DEBUG - 2018-11-22 15:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 15:46:16 --> Total execution time: 0.2360
INFO - 2018-11-22 15:46:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:46:16 --> Controller Class Initialized
INFO - 2018-11-22 15:46:16 --> Model Class Initialized
INFO - 2018-11-22 15:46:16 --> Model Class Initialized
INFO - 2018-11-22 15:46:16 --> Final output sent to browser
DEBUG - 2018-11-22 15:46:16 --> Total execution time: 0.4480
INFO - 2018-11-22 15:46:19 --> Config Class Initialized
INFO - 2018-11-22 15:46:19 --> Hooks Class Initialized
DEBUG - 2018-11-22 15:46:19 --> UTF-8 Support Enabled
INFO - 2018-11-22 15:46:19 --> Utf8 Class Initialized
INFO - 2018-11-22 15:46:19 --> URI Class Initialized
INFO - 2018-11-22 15:46:19 --> Router Class Initialized
INFO - 2018-11-22 15:46:19 --> Output Class Initialized
INFO - 2018-11-22 15:46:19 --> Security Class Initialized
DEBUG - 2018-11-22 15:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 15:46:19 --> Input Class Initialized
INFO - 2018-11-22 15:46:19 --> Language Class Initialized
INFO - 2018-11-22 15:46:19 --> Loader Class Initialized
INFO - 2018-11-22 15:46:19 --> Helper loaded: url_helper
INFO - 2018-11-22 15:46:19 --> Helper loaded: directory_helper
INFO - 2018-11-22 15:46:19 --> Helper loaded: file_helper
INFO - 2018-11-22 15:46:19 --> Helper loaded: form_helper
INFO - 2018-11-22 15:46:19 --> Helper loaded: general_helper
INFO - 2018-11-22 15:46:19 --> Helper loaded: formulario_helper
INFO - 2018-11-22 15:46:19 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 15:46:19 --> Helper loaded: popup_helper
INFO - 2018-11-22 15:46:19 --> Database Driver Class Initialized
DEBUG - 2018-11-22 15:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 15:46:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 15:46:19 --> Controller Class Initialized
INFO - 2018-11-22 15:46:19 --> Model Class Initialized
INFO - 2018-11-22 15:46:19 --> Model Class Initialized
INFO - 2018-11-22 15:46:19 --> Final output sent to browser
DEBUG - 2018-11-22 15:46:19 --> Total execution time: 0.2320
INFO - 2018-11-22 16:00:16 --> Config Class Initialized
INFO - 2018-11-22 16:00:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:00:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:16 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:16 --> URI Class Initialized
INFO - 2018-11-22 16:00:16 --> Router Class Initialized
INFO - 2018-11-22 16:00:16 --> Output Class Initialized
INFO - 2018-11-22 16:00:16 --> Security Class Initialized
DEBUG - 2018-11-22 16:00:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:16 --> Input Class Initialized
INFO - 2018-11-22 16:00:16 --> Language Class Initialized
INFO - 2018-11-22 16:00:16 --> Loader Class Initialized
INFO - 2018-11-22 16:00:16 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:16 --> Helper loaded: file_helper
INFO - 2018-11-22 16:00:16 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:16 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:16 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:16 --> Controller Class Initialized
INFO - 2018-11-22 16:00:16 --> Model Class Initialized
INFO - 2018-11-22 16:00:16 --> Model Class Initialized
INFO - 2018-11-22 16:00:16 --> Model Class Initialized
INFO - 2018-11-22 16:00:16 --> Model Class Initialized
INFO - 2018-11-22 16:00:17 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:00:17 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:17 --> Total execution time: 1.4661
INFO - 2018-11-22 16:00:22 --> Config Class Initialized
INFO - 2018-11-22 16:00:22 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:00:22 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:22 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:22 --> URI Class Initialized
INFO - 2018-11-22 16:00:22 --> Router Class Initialized
INFO - 2018-11-22 16:00:22 --> Output Class Initialized
INFO - 2018-11-22 16:00:22 --> Security Class Initialized
DEBUG - 2018-11-22 16:00:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:22 --> Input Class Initialized
INFO - 2018-11-22 16:00:22 --> Language Class Initialized
INFO - 2018-11-22 16:00:22 --> Loader Class Initialized
INFO - 2018-11-22 16:00:22 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:22 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:22 --> Helper loaded: file_helper
INFO - 2018-11-22 16:00:22 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:22 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:22 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:00:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:22 --> Controller Class Initialized
INFO - 2018-11-22 16:00:22 --> Model Class Initialized
INFO - 2018-11-22 16:00:22 --> Model Class Initialized
INFO - 2018-11-22 16:00:22 --> Model Class Initialized
INFO - 2018-11-22 16:00:22 --> Model Class Initialized
INFO - 2018-11-22 16:00:28 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:00:28 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:28 --> Total execution time: 6.0223
INFO - 2018-11-22 16:00:33 --> Config Class Initialized
INFO - 2018-11-22 16:00:33 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:00:33 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:33 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:33 --> URI Class Initialized
INFO - 2018-11-22 16:00:33 --> Router Class Initialized
INFO - 2018-11-22 16:00:33 --> Output Class Initialized
INFO - 2018-11-22 16:00:33 --> Security Class Initialized
DEBUG - 2018-11-22 16:00:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:33 --> Input Class Initialized
INFO - 2018-11-22 16:00:33 --> Language Class Initialized
INFO - 2018-11-22 16:00:33 --> Loader Class Initialized
INFO - 2018-11-22 16:00:33 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:33 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:33 --> Helper loaded: file_helper
INFO - 2018-11-22 16:00:33 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:33 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:34 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:34 --> Controller Class Initialized
INFO - 2018-11-22 16:00:34 --> Model Class Initialized
INFO - 2018-11-22 16:00:34 --> Model Class Initialized
INFO - 2018-11-22 16:00:36 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:00:36 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:36 --> Total execution time: 3.0022
INFO - 2018-11-22 16:00:37 --> Config Class Initialized
INFO - 2018-11-22 16:00:37 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:00:37 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:37 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:37 --> URI Class Initialized
INFO - 2018-11-22 16:00:37 --> Router Class Initialized
INFO - 2018-11-22 16:00:37 --> Config Class Initialized
INFO - 2018-11-22 16:00:37 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:00:37 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:37 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:37 --> URI Class Initialized
INFO - 2018-11-22 16:00:37 --> Config Class Initialized
INFO - 2018-11-22 16:00:37 --> Hooks Class Initialized
INFO - 2018-11-22 16:00:37 --> Router Class Initialized
INFO - 2018-11-22 16:00:37 --> Output Class Initialized
INFO - 2018-11-22 16:00:37 --> Output Class Initialized
INFO - 2018-11-22 16:00:37 --> Security Class Initialized
DEBUG - 2018-11-22 16:00:37 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:37 --> Security Class Initialized
DEBUG - 2018-11-22 16:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:37 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:37 --> Input Class Initialized
INFO - 2018-11-22 16:00:37 --> Language Class Initialized
DEBUG - 2018-11-22 16:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:37 --> Loader Class Initialized
INFO - 2018-11-22 16:00:37 --> Input Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:37 --> Language Class Initialized
INFO - 2018-11-22 16:00:37 --> URI Class Initialized
INFO - 2018-11-22 16:00:37 --> Config Class Initialized
INFO - 2018-11-22 16:00:37 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:00:37 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:37 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: file_helper
INFO - 2018-11-22 16:00:37 --> URI Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:37 --> Router Class Initialized
INFO - 2018-11-22 16:00:37 --> Loader Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:37 --> Config Class Initialized
INFO - 2018-11-22 16:00:37 --> Router Class Initialized
INFO - 2018-11-22 16:00:37 --> Output Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:37 --> Security Class Initialized
DEBUG - 2018-11-22 16:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:37 --> Input Class Initialized
INFO - 2018-11-22 16:00:37 --> Language Class Initialized
INFO - 2018-11-22 16:00:37 --> Loader Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:37 --> Database Driver Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: file_helper
INFO - 2018-11-22 16:00:37 --> Config Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:37 --> Hooks Class Initialized
INFO - 2018-11-22 16:00:37 --> Hooks Class Initialized
INFO - 2018-11-22 16:00:37 --> Output Class Initialized
INFO - 2018-11-22 16:00:37 --> Security Class Initialized
DEBUG - 2018-11-22 16:00:37 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:37 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:37 --> URI Class Initialized
INFO - 2018-11-22 16:00:37 --> Router Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: url_helper
DEBUG - 2018-11-22 16:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:37 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:37 --> Output Class Initialized
DEBUG - 2018-11-22 16:00:37 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:00:37 --> Utf8 Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:37 --> Security Class Initialized
INFO - 2018-11-22 16:00:37 --> Input Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 16:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:37 --> Language Class Initialized
INFO - 2018-11-22 16:00:37 --> Input Class Initialized
INFO - 2018-11-22 16:00:37 --> Language Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: file_helper
INFO - 2018-11-22 16:00:37 --> Loader Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: file_helper
INFO - 2018-11-22 16:00:37 --> Database Driver Class Initialized
INFO - 2018-11-22 16:00:37 --> Loader Class Initialized
INFO - 2018-11-22 16:00:37 --> URI Class Initialized
DEBUG - 2018-11-22 16:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:37 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:37 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:37 --> Controller Class Initialized
INFO - 2018-11-22 16:00:37 --> Router Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:37 --> Output Class Initialized
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: file_helper
DEBUG - 2018-11-22 16:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:37 --> Security Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:37 --> Database Driver Class Initialized
ERROR - 2018-11-22 16:00:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 5 - Invalid query: SELECT `tbl_listarea`.`id_listarea`, `tbl_listarea`.`id_orden`, `tbl_listarea`.`tareadescrip`, `tbl_listarea`.`id_tarea`, `tbl_listarea`.`fecha`, `tbl_listarea`.`id_equipo`, `tbl_listarea`.`estado`, `tbl_listarea`.`duracion_prog`, `tbl_equipos`.`descripcion` AS `equipoDescripcion`, `tareas`.`descripcion` AS `tareaDescripcion`, `tareas`.`duracion_std`
FROM `tbl_listarea`
LEFT JOIN `tbl_equipos` ON `tbl_equipos`.`id_equipo` = `tbl_listarea`.`id_equipo`
JOIN `tareas` ON `tbl_listarea`.`id_tarea` = `tareas`.`id_tarea`
WHERE (`tbl_listarea`.`estado` != 'C'
INFO - 2018-11-22 16:00:37 --> Helper loaded: general_helper
DEBUG - 2018-11-22 16:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:00:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:37 --> Input Class Initialized
INFO - 2018-11-22 16:00:37 --> Language Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 16:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:37 --> Language file loaded: language/english/db_lang.php
INFO - 2018-11-22 16:00:37 --> Database Driver Class Initialized
INFO - 2018-11-22 16:00:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:37 --> Database Driver Class Initialized
INFO - 2018-11-22 16:00:37 --> Controller Class Initialized
INFO - 2018-11-22 16:00:37 --> Loader Class Initialized
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: url_helper
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:00:37 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:37 --> Total execution time: 0.5130
DEBUG - 2018-11-22 16:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:37 --> Helper loaded: file_helper
DEBUG - 2018-11-22 16:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:37 --> Helper loaded: form_helper
INFO - 2018-11-22 16:00:37 --> Helper loaded: general_helper
INFO - 2018-11-22 16:00:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:37 --> Controller Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:00:37 --> Model Class Initialized
INFO - 2018-11-22 16:00:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:00:37 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:00:38 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:38 --> Total execution time: 1.6751
INFO - 2018-11-22 16:00:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:38 --> Controller Class Initialized
INFO - 2018-11-22 16:00:38 --> Model Class Initialized
INFO - 2018-11-22 16:00:39 --> Model Class Initialized
INFO - 2018-11-22 16:00:39 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:39 --> Total execution time: 1.9131
INFO - 2018-11-22 16:00:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:39 --> Controller Class Initialized
INFO - 2018-11-22 16:00:39 --> Model Class Initialized
INFO - 2018-11-22 16:00:39 --> Model Class Initialized
INFO - 2018-11-22 16:00:40 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:40 --> Total execution time: 3.2772
INFO - 2018-11-22 16:00:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:00:40 --> Controller Class Initialized
INFO - 2018-11-22 16:00:40 --> Model Class Initialized
INFO - 2018-11-22 16:00:40 --> Model Class Initialized
INFO - 2018-11-22 16:00:40 --> Final output sent to browser
DEBUG - 2018-11-22 16:00:40 --> Total execution time: 3.1992
INFO - 2018-11-22 16:01:36 --> Config Class Initialized
INFO - 2018-11-22 16:01:36 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:01:36 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:01:36 --> Utf8 Class Initialized
INFO - 2018-11-22 16:01:36 --> URI Class Initialized
INFO - 2018-11-22 16:01:36 --> Router Class Initialized
INFO - 2018-11-22 16:01:36 --> Output Class Initialized
INFO - 2018-11-22 16:01:36 --> Security Class Initialized
DEBUG - 2018-11-22 16:01:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:01:36 --> Input Class Initialized
INFO - 2018-11-22 16:01:36 --> Language Class Initialized
INFO - 2018-11-22 16:01:36 --> Loader Class Initialized
INFO - 2018-11-22 16:01:36 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:36 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:36 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:36 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:36 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:36 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:36 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:36 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:36 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:36 --> Controller Class Initialized
INFO - 2018-11-22 16:01:37 --> Model Class Initialized
INFO - 2018-11-22 16:01:37 --> Model Class Initialized
INFO - 2018-11-22 16:01:37 --> Model Class Initialized
INFO - 2018-11-22 16:01:37 --> Model Class Initialized
INFO - 2018-11-22 16:01:38 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:01:38 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:38 --> Total execution time: 1.5001
INFO - 2018-11-22 16:01:40 --> Config Class Initialized
INFO - 2018-11-22 16:01:40 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:01:40 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:01:40 --> Utf8 Class Initialized
INFO - 2018-11-22 16:01:40 --> URI Class Initialized
INFO - 2018-11-22 16:01:40 --> Router Class Initialized
INFO - 2018-11-22 16:01:40 --> Output Class Initialized
INFO - 2018-11-22 16:01:40 --> Security Class Initialized
DEBUG - 2018-11-22 16:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:01:40 --> Input Class Initialized
INFO - 2018-11-22 16:01:40 --> Language Class Initialized
INFO - 2018-11-22 16:01:40 --> Loader Class Initialized
INFO - 2018-11-22 16:01:40 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:40 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:40 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:40 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:40 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:40 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:40 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:40 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:40 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:01:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:40 --> Controller Class Initialized
INFO - 2018-11-22 16:01:40 --> Model Class Initialized
INFO - 2018-11-22 16:01:40 --> Model Class Initialized
INFO - 2018-11-22 16:01:40 --> Model Class Initialized
INFO - 2018-11-22 16:01:40 --> Model Class Initialized
INFO - 2018-11-22 16:01:44 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:01:44 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:44 --> Total execution time: 4.9513
INFO - 2018-11-22 16:01:49 --> Config Class Initialized
INFO - 2018-11-22 16:01:49 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:01:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:01:49 --> Utf8 Class Initialized
INFO - 2018-11-22 16:01:49 --> URI Class Initialized
INFO - 2018-11-22 16:01:49 --> Router Class Initialized
INFO - 2018-11-22 16:01:49 --> Output Class Initialized
INFO - 2018-11-22 16:01:49 --> Security Class Initialized
DEBUG - 2018-11-22 16:01:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:01:49 --> Input Class Initialized
INFO - 2018-11-22 16:01:49 --> Language Class Initialized
INFO - 2018-11-22 16:01:49 --> Loader Class Initialized
INFO - 2018-11-22 16:01:49 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:49 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:49 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:49 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:49 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:49 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:49 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:49 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:49 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:01:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:49 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:49 --> Controller Class Initialized
INFO - 2018-11-22 16:01:49 --> Model Class Initialized
INFO - 2018-11-22 16:01:49 --> Model Class Initialized
INFO - 2018-11-22 16:01:50 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:01:50 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:50 --> Total execution time: 1.6401
INFO - 2018-11-22 16:01:51 --> Config Class Initialized
INFO - 2018-11-22 16:01:51 --> Config Class Initialized
INFO - 2018-11-22 16:01:51 --> Config Class Initialized
INFO - 2018-11-22 16:01:51 --> Config Class Initialized
INFO - 2018-11-22 16:01:51 --> Config Class Initialized
INFO - 2018-11-22 16:01:51 --> Config Class Initialized
INFO - 2018-11-22 16:01:51 --> Hooks Class Initialized
INFO - 2018-11-22 16:01:51 --> Hooks Class Initialized
INFO - 2018-11-22 16:01:51 --> Hooks Class Initialized
INFO - 2018-11-22 16:01:51 --> Hooks Class Initialized
INFO - 2018-11-22 16:01:51 --> Hooks Class Initialized
INFO - 2018-11-22 16:01:51 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:01:51 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:01:51 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:01:51 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:01:51 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:01:51 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:01:51 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:01:51 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:01:51 --> URI Class Initialized
INFO - 2018-11-22 16:01:51 --> URI Class Initialized
INFO - 2018-11-22 16:01:51 --> Router Class Initialized
INFO - 2018-11-22 16:01:51 --> Router Class Initialized
INFO - 2018-11-22 16:01:51 --> Output Class Initialized
INFO - 2018-11-22 16:01:51 --> Output Class Initialized
INFO - 2018-11-22 16:01:51 --> Security Class Initialized
DEBUG - 2018-11-22 16:01:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:01:51 --> Security Class Initialized
INFO - 2018-11-22 16:01:51 --> Input Class Initialized
INFO - 2018-11-22 16:01:51 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:01:51 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:01:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:01:51 --> Utf8 Class Initialized
INFO - 2018-11-22 16:01:51 --> Utf8 Class Initialized
INFO - 2018-11-22 16:01:51 --> Language Class Initialized
INFO - 2018-11-22 16:01:51 --> Input Class Initialized
INFO - 2018-11-22 16:01:51 --> Language Class Initialized
INFO - 2018-11-22 16:01:51 --> URI Class Initialized
INFO - 2018-11-22 16:01:51 --> Utf8 Class Initialized
INFO - 2018-11-22 16:01:51 --> Loader Class Initialized
INFO - 2018-11-22 16:01:51 --> URI Class Initialized
INFO - 2018-11-22 16:01:51 --> Loader Class Initialized
INFO - 2018-11-22 16:01:51 --> URI Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:51 --> Router Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:51 --> URI Class Initialized
INFO - 2018-11-22 16:01:51 --> Router Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:51 --> Router Class Initialized
INFO - 2018-11-22 16:01:51 --> Output Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:51 --> Output Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:51 --> Router Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:51 --> Output Class Initialized
INFO - 2018-11-22 16:01:51 --> Security Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:51 --> Security Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:51 --> Output Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 16:01:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:01:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:01:51 --> Security Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:51 --> Security Class Initialized
INFO - 2018-11-22 16:01:51 --> Database Driver Class Initialized
INFO - 2018-11-22 16:01:51 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:01:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:01:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:01:51 --> Input Class Initialized
INFO - 2018-11-22 16:01:51 --> Input Class Initialized
INFO - 2018-11-22 16:01:51 --> Input Class Initialized
INFO - 2018-11-22 16:01:51 --> Input Class Initialized
INFO - 2018-11-22 16:01:51 --> Language Class Initialized
DEBUG - 2018-11-22 16:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:51 --> Language Class Initialized
DEBUG - 2018-11-22 16:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:51 --> Language Class Initialized
INFO - 2018-11-22 16:01:51 --> Loader Class Initialized
INFO - 2018-11-22 16:01:51 --> Language Class Initialized
INFO - 2018-11-22 16:01:51 --> Controller Class Initialized
INFO - 2018-11-22 16:01:51 --> Loader Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:51 --> Loader Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
INFO - 2018-11-22 16:01:51 --> Loader Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:51 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:51 --> Total execution time: 0.6030
INFO - 2018-11-22 16:01:51 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: url_helper
INFO - 2018-11-22 16:01:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: file_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:51 --> Controller Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: form_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:51 --> Database Driver Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:51 --> Database Driver Class Initialized
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: general_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:01:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:51 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:01:51 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:51 --> Total execution time: 0.6010
INFO - 2018-11-22 16:01:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:51 --> Controller Class Initialized
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
DEBUG - 2018-11-22 16:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
INFO - 2018-11-22 16:01:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:01:51 --> Model Class Initialized
INFO - 2018-11-22 16:01:51 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:01:53 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:53 --> Total execution time: 1.9761
INFO - 2018-11-22 16:01:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:53 --> Controller Class Initialized
INFO - 2018-11-22 16:01:53 --> Model Class Initialized
INFO - 2018-11-22 16:01:53 --> Model Class Initialized
INFO - 2018-11-22 16:01:53 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:53 --> Total execution time: 2.2181
INFO - 2018-11-22 16:01:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:53 --> Controller Class Initialized
INFO - 2018-11-22 16:01:53 --> Model Class Initialized
INFO - 2018-11-22 16:01:53 --> Model Class Initialized
INFO - 2018-11-22 16:01:53 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:53 --> Total execution time: 2.5121
INFO - 2018-11-22 16:01:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:01:53 --> Controller Class Initialized
INFO - 2018-11-22 16:01:53 --> Model Class Initialized
INFO - 2018-11-22 16:01:53 --> Model Class Initialized
INFO - 2018-11-22 16:01:55 --> Final output sent to browser
DEBUG - 2018-11-22 16:01:55 --> Total execution time: 3.8482
INFO - 2018-11-22 16:19:37 --> Config Class Initialized
INFO - 2018-11-22 16:19:37 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:19:37 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:19:37 --> Utf8 Class Initialized
INFO - 2018-11-22 16:19:37 --> URI Class Initialized
INFO - 2018-11-22 16:19:37 --> Router Class Initialized
INFO - 2018-11-22 16:19:37 --> Output Class Initialized
INFO - 2018-11-22 16:19:37 --> Security Class Initialized
DEBUG - 2018-11-22 16:19:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:19:37 --> Input Class Initialized
INFO - 2018-11-22 16:19:37 --> Language Class Initialized
INFO - 2018-11-22 16:19:37 --> Loader Class Initialized
INFO - 2018-11-22 16:19:37 --> Helper loaded: url_helper
INFO - 2018-11-22 16:19:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:19:37 --> Helper loaded: file_helper
INFO - 2018-11-22 16:19:37 --> Helper loaded: form_helper
INFO - 2018-11-22 16:19:37 --> Helper loaded: general_helper
INFO - 2018-11-22 16:19:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:19:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:19:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:19:37 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:19:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:19:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:19:37 --> Controller Class Initialized
INFO - 2018-11-22 16:19:37 --> Model Class Initialized
INFO - 2018-11-22 16:19:37 --> Model Class Initialized
INFO - 2018-11-22 16:19:37 --> Model Class Initialized
INFO - 2018-11-22 16:19:38 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 16:19:38 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 16:19:38 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 16:19:38 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 16:19:38 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 16:19:38 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 16:19:38 --> Final output sent to browser
DEBUG - 2018-11-22 16:19:38 --> Total execution time: 0.9991
INFO - 2018-11-22 16:19:38 --> Config Class Initialized
INFO - 2018-11-22 16:19:38 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:19:38 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:19:38 --> Utf8 Class Initialized
INFO - 2018-11-22 16:19:38 --> URI Class Initialized
INFO - 2018-11-22 16:19:38 --> Router Class Initialized
INFO - 2018-11-22 16:19:38 --> Output Class Initialized
INFO - 2018-11-22 16:19:38 --> Security Class Initialized
DEBUG - 2018-11-22 16:19:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:19:38 --> Input Class Initialized
INFO - 2018-11-22 16:19:38 --> Language Class Initialized
ERROR - 2018-11-22 16:19:38 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 16:19:42 --> Config Class Initialized
INFO - 2018-11-22 16:19:42 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:19:42 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:19:42 --> Utf8 Class Initialized
INFO - 2018-11-22 16:19:42 --> URI Class Initialized
INFO - 2018-11-22 16:19:42 --> Router Class Initialized
INFO - 2018-11-22 16:19:42 --> Output Class Initialized
INFO - 2018-11-22 16:19:42 --> Security Class Initialized
DEBUG - 2018-11-22 16:19:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:19:42 --> Input Class Initialized
INFO - 2018-11-22 16:19:42 --> Language Class Initialized
INFO - 2018-11-22 16:19:42 --> Loader Class Initialized
INFO - 2018-11-22 16:19:42 --> Helper loaded: url_helper
INFO - 2018-11-22 16:19:42 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:19:42 --> Helper loaded: file_helper
INFO - 2018-11-22 16:19:42 --> Helper loaded: form_helper
INFO - 2018-11-22 16:19:42 --> Helper loaded: general_helper
INFO - 2018-11-22 16:19:42 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:19:42 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:19:42 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:19:42 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:19:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:19:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:19:42 --> Controller Class Initialized
INFO - 2018-11-22 16:19:42 --> Model Class Initialized
INFO - 2018-11-22 16:19:42 --> Model Class Initialized
INFO - 2018-11-22 16:19:42 --> Model Class Initialized
INFO - 2018-11-22 16:19:42 --> Model Class Initialized
INFO - 2018-11-22 16:19:43 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:19:43 --> Final output sent to browser
DEBUG - 2018-11-22 16:19:43 --> Total execution time: 1.3181
INFO - 2018-11-22 16:19:56 --> Config Class Initialized
INFO - 2018-11-22 16:19:56 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:19:56 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:19:56 --> Utf8 Class Initialized
INFO - 2018-11-22 16:19:56 --> URI Class Initialized
INFO - 2018-11-22 16:19:56 --> Router Class Initialized
INFO - 2018-11-22 16:19:56 --> Output Class Initialized
INFO - 2018-11-22 16:19:56 --> Security Class Initialized
DEBUG - 2018-11-22 16:19:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:19:56 --> Input Class Initialized
INFO - 2018-11-22 16:19:56 --> Language Class Initialized
INFO - 2018-11-22 16:19:56 --> Loader Class Initialized
INFO - 2018-11-22 16:19:56 --> Helper loaded: url_helper
INFO - 2018-11-22 16:19:56 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:19:56 --> Helper loaded: file_helper
INFO - 2018-11-22 16:19:56 --> Helper loaded: form_helper
INFO - 2018-11-22 16:19:56 --> Helper loaded: general_helper
INFO - 2018-11-22 16:19:56 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:19:56 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:19:56 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:19:56 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:19:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:19:56 --> Controller Class Initialized
INFO - 2018-11-22 16:19:56 --> Model Class Initialized
INFO - 2018-11-22 16:19:56 --> Model Class Initialized
INFO - 2018-11-22 16:19:56 --> Model Class Initialized
INFO - 2018-11-22 16:19:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 16:19:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 16:19:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 16:19:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 16:19:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 16:19:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 16:19:56 --> Final output sent to browser
DEBUG - 2018-11-22 16:19:56 --> Total execution time: 0.3120
INFO - 2018-11-22 16:19:57 --> Config Class Initialized
INFO - 2018-11-22 16:19:57 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:19:57 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:19:57 --> Utf8 Class Initialized
INFO - 2018-11-22 16:19:57 --> URI Class Initialized
INFO - 2018-11-22 16:19:57 --> Router Class Initialized
INFO - 2018-11-22 16:19:57 --> Output Class Initialized
INFO - 2018-11-22 16:19:57 --> Security Class Initialized
DEBUG - 2018-11-22 16:19:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:19:57 --> Input Class Initialized
INFO - 2018-11-22 16:19:57 --> Language Class Initialized
ERROR - 2018-11-22 16:19:57 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 16:19:59 --> Config Class Initialized
INFO - 2018-11-22 16:19:59 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:19:59 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:19:59 --> Utf8 Class Initialized
INFO - 2018-11-22 16:19:59 --> URI Class Initialized
INFO - 2018-11-22 16:19:59 --> Router Class Initialized
INFO - 2018-11-22 16:19:59 --> Output Class Initialized
INFO - 2018-11-22 16:19:59 --> Security Class Initialized
DEBUG - 2018-11-22 16:19:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:19:59 --> Input Class Initialized
INFO - 2018-11-22 16:19:59 --> Language Class Initialized
INFO - 2018-11-22 16:19:59 --> Loader Class Initialized
INFO - 2018-11-22 16:19:59 --> Helper loaded: url_helper
INFO - 2018-11-22 16:19:59 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:19:59 --> Helper loaded: file_helper
INFO - 2018-11-22 16:19:59 --> Helper loaded: form_helper
INFO - 2018-11-22 16:19:59 --> Helper loaded: general_helper
INFO - 2018-11-22 16:19:59 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:19:59 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:19:59 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:19:59 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:19:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:19:59 --> Controller Class Initialized
INFO - 2018-11-22 16:19:59 --> Model Class Initialized
INFO - 2018-11-22 16:19:59 --> Model Class Initialized
INFO - 2018-11-22 16:19:59 --> Model Class Initialized
INFO - 2018-11-22 16:19:59 --> Model Class Initialized
INFO - 2018-11-22 16:20:01 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:20:01 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:01 --> Total execution time: 1.6321
INFO - 2018-11-22 16:20:05 --> Config Class Initialized
INFO - 2018-11-22 16:20:05 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:05 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:05 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:05 --> URI Class Initialized
INFO - 2018-11-22 16:20:05 --> Router Class Initialized
INFO - 2018-11-22 16:20:05 --> Output Class Initialized
INFO - 2018-11-22 16:20:05 --> Security Class Initialized
DEBUG - 2018-11-22 16:20:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:05 --> Input Class Initialized
INFO - 2018-11-22 16:20:05 --> Language Class Initialized
INFO - 2018-11-22 16:20:05 --> Loader Class Initialized
INFO - 2018-11-22 16:20:05 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:05 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:05 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:05 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:05 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:05 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:05 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:05 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:05 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:20:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:05 --> Controller Class Initialized
INFO - 2018-11-22 16:20:05 --> Model Class Initialized
INFO - 2018-11-22 16:20:05 --> Model Class Initialized
INFO - 2018-11-22 16:20:05 --> Model Class Initialized
INFO - 2018-11-22 16:20:05 --> Model Class Initialized
INFO - 2018-11-22 16:20:11 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:20:11 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:11 --> Total execution time: 6.2434
INFO - 2018-11-22 16:20:21 --> Config Class Initialized
INFO - 2018-11-22 16:20:21 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:21 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:21 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:21 --> URI Class Initialized
INFO - 2018-11-22 16:20:21 --> Router Class Initialized
INFO - 2018-11-22 16:20:21 --> Output Class Initialized
INFO - 2018-11-22 16:20:21 --> Security Class Initialized
DEBUG - 2018-11-22 16:20:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:21 --> Input Class Initialized
INFO - 2018-11-22 16:20:21 --> Language Class Initialized
INFO - 2018-11-22 16:20:21 --> Loader Class Initialized
INFO - 2018-11-22 16:20:21 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:21 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:21 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:21 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:21 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:21 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:21 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:21 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:21 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:21 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:21 --> Controller Class Initialized
INFO - 2018-11-22 16:20:22 --> Model Class Initialized
INFO - 2018-11-22 16:20:22 --> Model Class Initialized
INFO - 2018-11-22 16:20:23 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:20:23 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:23 --> Total execution time: 1.6881
INFO - 2018-11-22 16:20:23 --> Config Class Initialized
INFO - 2018-11-22 16:20:23 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:23 --> Config Class Initialized
INFO - 2018-11-22 16:20:23 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:23 --> Hooks Class Initialized
INFO - 2018-11-22 16:20:23 --> URI Class Initialized
DEBUG - 2018-11-22 16:20:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:23 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:23 --> Router Class Initialized
INFO - 2018-11-22 16:20:23 --> Output Class Initialized
INFO - 2018-11-22 16:20:23 --> Security Class Initialized
DEBUG - 2018-11-22 16:20:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:23 --> Input Class Initialized
INFO - 2018-11-22 16:20:23 --> Language Class Initialized
INFO - 2018-11-22 16:20:23 --> URI Class Initialized
INFO - 2018-11-22 16:20:23 --> Config Class Initialized
INFO - 2018-11-22 16:20:23 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:23 --> Router Class Initialized
INFO - 2018-11-22 16:20:24 --> Loader Class Initialized
INFO - 2018-11-22 16:20:24 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:24 --> Output Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:24 --> URI Class Initialized
INFO - 2018-11-22 16:20:24 --> Security Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:24 --> Router Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: general_helper
DEBUG - 2018-11-22 16:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:24 --> Input Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:24 --> Output Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:24 --> Language Class Initialized
INFO - 2018-11-22 16:20:24 --> Loader Class Initialized
INFO - 2018-11-22 16:20:24 --> Config Class Initialized
INFO - 2018-11-22 16:20:24 --> Hooks Class Initialized
INFO - 2018-11-22 16:20:24 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:24 --> Security Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:24 --> Config Class Initialized
INFO - 2018-11-22 16:20:24 --> Config Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-11-22 16:20:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:24 --> Input Class Initialized
INFO - 2018-11-22 16:20:24 --> Controller Class Initialized
DEBUG - 2018-11-22 16:20:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:24 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
INFO - 2018-11-22 16:20:24 --> Language Class Initialized
INFO - 2018-11-22 16:20:24 --> URI Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:24 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:24 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:24 --> Router Class Initialized
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:24 --> Loader Class Initialized
INFO - 2018-11-22 16:20:24 --> URI Class Initialized
INFO - 2018-11-22 16:20:24 --> Output Class Initialized
INFO - 2018-11-22 16:20:24 --> URI Class Initialized
INFO - 2018-11-22 16:20:24 --> Final output sent to browser
INFO - 2018-11-22 16:20:24 --> Security Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:24 --> Router Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Total execution time: 0.5600
INFO - 2018-11-22 16:20:24 --> Helper loaded: url_helper
DEBUG - 2018-11-22 16:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:24 --> Output Class Initialized
INFO - 2018-11-22 16:20:24 --> Input Class Initialized
INFO - 2018-11-22 16:20:24 --> Security Class Initialized
INFO - 2018-11-22 16:20:24 --> Language Class Initialized
INFO - 2018-11-22 16:20:24 --> Router Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:24 --> Loader Class Initialized
INFO - 2018-11-22 16:20:24 --> Input Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:24 --> Language Class Initialized
INFO - 2018-11-22 16:20:24 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:24 --> Loader Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:24 --> Output Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:24 --> Security Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:24 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:24 --> Input Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:24 --> Language Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 16:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:24 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:24 --> Controller Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
INFO - 2018-11-22 16:20:24 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:24 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:24 --> Loader Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:24 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:24 --> Total execution time: 0.8400
INFO - 2018-11-22 16:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:24 --> Controller Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
INFO - 2018-11-22 16:20:24 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:24 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:24 --> Total execution time: 0.8050
INFO - 2018-11-22 16:20:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:24 --> Controller Class Initialized
INFO - 2018-11-22 16:20:24 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
INFO - 2018-11-22 16:20:24 --> Model Class Initialized
DEBUG - 2018-11-22 16:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:26 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:26 --> Total execution time: 2.6932
INFO - 2018-11-22 16:20:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:26 --> Controller Class Initialized
INFO - 2018-11-22 16:20:26 --> Model Class Initialized
INFO - 2018-11-22 16:20:26 --> Model Class Initialized
INFO - 2018-11-22 16:20:26 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:27 --> Total execution time: 2.8252
INFO - 2018-11-22 16:20:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:27 --> Controller Class Initialized
INFO - 2018-11-22 16:20:27 --> Model Class Initialized
INFO - 2018-11-22 16:20:27 --> Model Class Initialized
INFO - 2018-11-22 16:20:27 --> Model Class Initialized
INFO - 2018-11-22 16:20:27 --> Model Class Initialized
INFO - 2018-11-22 16:20:28 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:28 --> Total execution time: 4.2362
INFO - 2018-11-22 16:20:35 --> Config Class Initialized
INFO - 2018-11-22 16:20:35 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:35 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:35 --> Config Class Initialized
INFO - 2018-11-22 16:20:35 --> URI Class Initialized
INFO - 2018-11-22 16:20:35 --> Hooks Class Initialized
INFO - 2018-11-22 16:20:35 --> Router Class Initialized
INFO - 2018-11-22 16:20:35 --> Output Class Initialized
DEBUG - 2018-11-22 16:20:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:35 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:35 --> URI Class Initialized
INFO - 2018-11-22 16:20:35 --> Router Class Initialized
INFO - 2018-11-22 16:20:35 --> Security Class Initialized
DEBUG - 2018-11-22 16:20:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:35 --> Input Class Initialized
INFO - 2018-11-22 16:20:35 --> Output Class Initialized
INFO - 2018-11-22 16:20:35 --> Language Class Initialized
INFO - 2018-11-22 16:20:35 --> Security Class Initialized
DEBUG - 2018-11-22 16:20:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:35 --> Input Class Initialized
INFO - 2018-11-22 16:20:35 --> Loader Class Initialized
INFO - 2018-11-22 16:20:35 --> Language Class Initialized
INFO - 2018-11-22 16:20:35 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:35 --> Loader Class Initialized
INFO - 2018-11-22 16:20:35 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:35 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:20:35 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:20:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:35 --> Controller Class Initialized
INFO - 2018-11-22 16:20:35 --> Model Class Initialized
INFO - 2018-11-22 16:20:35 --> Model Class Initialized
DEBUG - 2018-11-22 16:20:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:37 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:37 --> Total execution time: 1.7071
INFO - 2018-11-22 16:20:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:37 --> Controller Class Initialized
INFO - 2018-11-22 16:20:37 --> Model Class Initialized
INFO - 2018-11-22 16:20:37 --> Model Class Initialized
INFO - 2018-11-22 16:20:37 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:37 --> Total execution time: 1.6871
INFO - 2018-11-22 16:20:58 --> Config Class Initialized
INFO - 2018-11-22 16:20:58 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:20:58 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:20:58 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:58 --> URI Class Initialized
INFO - 2018-11-22 16:20:58 --> Router Class Initialized
INFO - 2018-11-22 16:20:58 --> Config Class Initialized
INFO - 2018-11-22 16:20:58 --> Output Class Initialized
INFO - 2018-11-22 16:20:58 --> Hooks Class Initialized
INFO - 2018-11-22 16:20:58 --> Security Class Initialized
DEBUG - 2018-11-22 16:20:58 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:58 --> Utf8 Class Initialized
INFO - 2018-11-22 16:20:58 --> Input Class Initialized
INFO - 2018-11-22 16:20:58 --> URI Class Initialized
INFO - 2018-11-22 16:20:58 --> Language Class Initialized
INFO - 2018-11-22 16:20:58 --> Loader Class Initialized
INFO - 2018-11-22 16:20:58 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:58 --> Router Class Initialized
INFO - 2018-11-22 16:20:58 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:58 --> Output Class Initialized
INFO - 2018-11-22 16:20:58 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:58 --> Security Class Initialized
INFO - 2018-11-22 16:20:58 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 16:20:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:20:58 --> Input Class Initialized
INFO - 2018-11-22 16:20:58 --> Language Class Initialized
INFO - 2018-11-22 16:20:58 --> Loader Class Initialized
INFO - 2018-11-22 16:20:58 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:58 --> Helper loaded: url_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: file_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: form_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: general_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:20:58 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 16:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:58 --> Database Driver Class Initialized
INFO - 2018-11-22 16:20:58 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:58 --> Controller Class Initialized
INFO - 2018-11-22 16:20:58 --> Model Class Initialized
INFO - 2018-11-22 16:20:58 --> Model Class Initialized
INFO - 2018-11-22 16:20:58 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:58 --> Total execution time: 0.3040
DEBUG - 2018-11-22 16:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:20:58 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:20:58 --> Controller Class Initialized
INFO - 2018-11-22 16:20:58 --> Model Class Initialized
INFO - 2018-11-22 16:20:58 --> Model Class Initialized
INFO - 2018-11-22 16:20:58 --> Final output sent to browser
DEBUG - 2018-11-22 16:20:58 --> Total execution time: 0.3590
INFO - 2018-11-22 16:21:02 --> Config Class Initialized
INFO - 2018-11-22 16:21:02 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:02 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:02 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:02 --> URI Class Initialized
INFO - 2018-11-22 16:21:02 --> Router Class Initialized
INFO - 2018-11-22 16:21:02 --> Output Class Initialized
INFO - 2018-11-22 16:21:02 --> Security Class Initialized
DEBUG - 2018-11-22 16:21:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:02 --> Input Class Initialized
INFO - 2018-11-22 16:21:02 --> Language Class Initialized
INFO - 2018-11-22 16:21:02 --> Loader Class Initialized
INFO - 2018-11-22 16:21:02 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:02 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:02 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:02 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:02 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:02 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:02 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:02 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:02 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:02 --> Controller Class Initialized
INFO - 2018-11-22 16:21:02 --> Model Class Initialized
INFO - 2018-11-22 16:21:02 --> Model Class Initialized
ERROR - 2018-11-22 16:21:02 --> Severity: Error --> Call to a member function num_rows() on null D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 899
INFO - 2018-11-22 16:21:09 --> Config Class Initialized
INFO - 2018-11-22 16:21:09 --> Config Class Initialized
INFO - 2018-11-22 16:21:09 --> Hooks Class Initialized
INFO - 2018-11-22 16:21:09 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:09 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:21:09 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:09 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:09 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:09 --> URI Class Initialized
INFO - 2018-11-22 16:21:09 --> URI Class Initialized
INFO - 2018-11-22 16:21:09 --> Router Class Initialized
INFO - 2018-11-22 16:21:09 --> Router Class Initialized
INFO - 2018-11-22 16:21:09 --> Output Class Initialized
INFO - 2018-11-22 16:21:09 --> Output Class Initialized
INFO - 2018-11-22 16:21:09 --> Security Class Initialized
INFO - 2018-11-22 16:21:09 --> Security Class Initialized
DEBUG - 2018-11-22 16:21:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:21:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:09 --> Input Class Initialized
INFO - 2018-11-22 16:21:09 --> Input Class Initialized
INFO - 2018-11-22 16:21:09 --> Language Class Initialized
INFO - 2018-11-22 16:21:09 --> Language Class Initialized
INFO - 2018-11-22 16:21:09 --> Loader Class Initialized
INFO - 2018-11-22 16:21:09 --> Loader Class Initialized
INFO - 2018-11-22 16:21:09 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:09 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:09 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:09 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:09 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:09 --> Controller Class Initialized
INFO - 2018-11-22 16:21:09 --> Model Class Initialized
INFO - 2018-11-22 16:21:09 --> Model Class Initialized
DEBUG - 2018-11-22 16:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:09 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:09 --> Total execution time: 0.3500
INFO - 2018-11-22 16:21:09 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:09 --> Controller Class Initialized
INFO - 2018-11-22 16:21:09 --> Model Class Initialized
INFO - 2018-11-22 16:21:09 --> Model Class Initialized
INFO - 2018-11-22 16:21:10 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:10 --> Total execution time: 1.6291
INFO - 2018-11-22 16:21:13 --> Config Class Initialized
INFO - 2018-11-22 16:21:13 --> Config Class Initialized
INFO - 2018-11-22 16:21:13 --> Hooks Class Initialized
INFO - 2018-11-22 16:21:13 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:13 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:21:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:13 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:13 --> URI Class Initialized
INFO - 2018-11-22 16:21:13 --> URI Class Initialized
INFO - 2018-11-22 16:21:13 --> Router Class Initialized
INFO - 2018-11-22 16:21:13 --> Router Class Initialized
INFO - 2018-11-22 16:21:13 --> Output Class Initialized
INFO - 2018-11-22 16:21:13 --> Security Class Initialized
INFO - 2018-11-22 16:21:13 --> Output Class Initialized
DEBUG - 2018-11-22 16:21:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:13 --> Security Class Initialized
INFO - 2018-11-22 16:21:13 --> Input Class Initialized
DEBUG - 2018-11-22 16:21:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:13 --> Language Class Initialized
INFO - 2018-11-22 16:21:13 --> Input Class Initialized
INFO - 2018-11-22 16:21:13 --> Loader Class Initialized
INFO - 2018-11-22 16:21:13 --> Language Class Initialized
INFO - 2018-11-22 16:21:13 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:13 --> Loader Class Initialized
INFO - 2018-11-22 16:21:13 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:13 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:13 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:13 --> Controller Class Initialized
INFO - 2018-11-22 16:21:13 --> Model Class Initialized
INFO - 2018-11-22 16:21:13 --> Model Class Initialized
INFO - 2018-11-22 16:21:14 --> Config Class Initialized
INFO - 2018-11-22 16:21:14 --> Config Class Initialized
INFO - 2018-11-22 16:21:14 --> Hooks Class Initialized
INFO - 2018-11-22 16:21:14 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:14 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:21:14 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:14 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:14 --> URI Class Initialized
INFO - 2018-11-22 16:21:14 --> Router Class Initialized
INFO - 2018-11-22 16:21:14 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:14 --> URI Class Initialized
INFO - 2018-11-22 16:21:14 --> Router Class Initialized
INFO - 2018-11-22 16:21:14 --> Output Class Initialized
INFO - 2018-11-22 16:21:14 --> Output Class Initialized
INFO - 2018-11-22 16:21:14 --> Security Class Initialized
INFO - 2018-11-22 16:21:14 --> Security Class Initialized
DEBUG - 2018-11-22 16:21:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:14 --> Input Class Initialized
INFO - 2018-11-22 16:21:14 --> Language Class Initialized
INFO - 2018-11-22 16:21:14 --> Loader Class Initialized
DEBUG - 2018-11-22 16:21:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:14 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:14 --> Input Class Initialized
INFO - 2018-11-22 16:21:14 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:14 --> Language Class Initialized
INFO - 2018-11-22 16:21:14 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:14 --> Loader Class Initialized
INFO - 2018-11-22 16:21:14 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:14 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:14 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:14 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:14 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:15 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:15 --> Total execution time: 1.5741
INFO - 2018-11-22 16:21:15 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:15 --> Controller Class Initialized
INFO - 2018-11-22 16:21:15 --> Model Class Initialized
INFO - 2018-11-22 16:21:15 --> Model Class Initialized
INFO - 2018-11-22 16:21:15 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:15 --> Total execution time: 1.6241
INFO - 2018-11-22 16:21:15 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:15 --> Controller Class Initialized
INFO - 2018-11-22 16:21:15 --> Model Class Initialized
INFO - 2018-11-22 16:21:15 --> Model Class Initialized
INFO - 2018-11-22 16:21:16 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:16 --> Total execution time: 2.1891
INFO - 2018-11-22 16:21:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:16 --> Controller Class Initialized
INFO - 2018-11-22 16:21:16 --> Model Class Initialized
INFO - 2018-11-22 16:21:16 --> Model Class Initialized
INFO - 2018-11-22 16:21:16 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:16 --> Total execution time: 2.2141
INFO - 2018-11-22 16:21:17 --> Config Class Initialized
INFO - 2018-11-22 16:21:17 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:17 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:17 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:17 --> URI Class Initialized
INFO - 2018-11-22 16:21:17 --> Config Class Initialized
INFO - 2018-11-22 16:21:17 --> Router Class Initialized
INFO - 2018-11-22 16:21:17 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:17 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:17 --> Output Class Initialized
INFO - 2018-11-22 16:21:17 --> Security Class Initialized
INFO - 2018-11-22 16:21:17 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:17 --> URI Class Initialized
INFO - 2018-11-22 16:21:17 --> Router Class Initialized
DEBUG - 2018-11-22 16:21:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:17 --> Input Class Initialized
INFO - 2018-11-22 16:21:17 --> Language Class Initialized
INFO - 2018-11-22 16:21:17 --> Loader Class Initialized
INFO - 2018-11-22 16:21:17 --> Output Class Initialized
INFO - 2018-11-22 16:21:17 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:17 --> Security Class Initialized
INFO - 2018-11-22 16:21:17 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 16:21:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:17 --> Input Class Initialized
INFO - 2018-11-22 16:21:17 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:17 --> Language Class Initialized
INFO - 2018-11-22 16:21:17 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:17 --> Loader Class Initialized
INFO - 2018-11-22 16:21:17 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:17 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:17 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:17 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:17 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:17 --> Controller Class Initialized
DEBUG - 2018-11-22 16:21:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:17 --> Model Class Initialized
INFO - 2018-11-22 16:21:17 --> Model Class Initialized
INFO - 2018-11-22 16:21:19 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:19 --> Total execution time: 1.6611
INFO - 2018-11-22 16:21:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:19 --> Controller Class Initialized
INFO - 2018-11-22 16:21:19 --> Model Class Initialized
INFO - 2018-11-22 16:21:19 --> Model Class Initialized
INFO - 2018-11-22 16:21:19 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:19 --> Total execution time: 1.7301
INFO - 2018-11-22 16:21:26 --> Config Class Initialized
INFO - 2018-11-22 16:21:26 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:26 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:26 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:26 --> URI Class Initialized
INFO - 2018-11-22 16:21:26 --> Router Class Initialized
INFO - 2018-11-22 16:21:26 --> Output Class Initialized
INFO - 2018-11-22 16:21:26 --> Security Class Initialized
DEBUG - 2018-11-22 16:21:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:26 --> Input Class Initialized
INFO - 2018-11-22 16:21:26 --> Language Class Initialized
INFO - 2018-11-22 16:21:26 --> Loader Class Initialized
INFO - 2018-11-22 16:21:26 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:26 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:26 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:26 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:26 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:26 --> Controller Class Initialized
INFO - 2018-11-22 16:21:26 --> Model Class Initialized
INFO - 2018-11-22 16:21:26 --> Model Class Initialized
INFO - 2018-11-22 16:21:26 --> Model Class Initialized
INFO - 2018-11-22 16:21:26 --> Model Class Initialized
INFO - 2018-11-22 16:21:27 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:21:27 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:27 --> Total execution time: 1.4731
INFO - 2018-11-22 16:21:29 --> Config Class Initialized
INFO - 2018-11-22 16:21:29 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:29 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:29 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:29 --> URI Class Initialized
INFO - 2018-11-22 16:21:29 --> Router Class Initialized
INFO - 2018-11-22 16:21:29 --> Output Class Initialized
INFO - 2018-11-22 16:21:29 --> Security Class Initialized
DEBUG - 2018-11-22 16:21:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:29 --> Input Class Initialized
INFO - 2018-11-22 16:21:29 --> Language Class Initialized
INFO - 2018-11-22 16:21:29 --> Loader Class Initialized
INFO - 2018-11-22 16:21:29 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:29 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:29 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:29 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:29 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:30 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:30 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:30 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:30 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:30 --> Controller Class Initialized
INFO - 2018-11-22 16:21:30 --> Model Class Initialized
INFO - 2018-11-22 16:21:30 --> Model Class Initialized
INFO - 2018-11-22 16:21:30 --> Model Class Initialized
INFO - 2018-11-22 16:21:30 --> Model Class Initialized
INFO - 2018-11-22 16:21:36 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:21:36 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:36 --> Total execution time: 6.9154
INFO - 2018-11-22 16:21:45 --> Config Class Initialized
INFO - 2018-11-22 16:21:45 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:46 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:46 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:46 --> URI Class Initialized
INFO - 2018-11-22 16:21:46 --> Router Class Initialized
INFO - 2018-11-22 16:21:46 --> Output Class Initialized
INFO - 2018-11-22 16:21:46 --> Security Class Initialized
DEBUG - 2018-11-22 16:21:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:46 --> Input Class Initialized
INFO - 2018-11-22 16:21:46 --> Language Class Initialized
INFO - 2018-11-22 16:21:46 --> Loader Class Initialized
INFO - 2018-11-22 16:21:46 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:46 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:46 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:46 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:46 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:46 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:46 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:46 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:46 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:46 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:46 --> Controller Class Initialized
INFO - 2018-11-22 16:21:46 --> Model Class Initialized
INFO - 2018-11-22 16:21:46 --> Model Class Initialized
INFO - 2018-11-22 16:21:47 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:21:47 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:47 --> Total execution time: 1.6831
INFO - 2018-11-22 16:21:48 --> Config Class Initialized
INFO - 2018-11-22 16:21:48 --> Hooks Class Initialized
INFO - 2018-11-22 16:21:48 --> Config Class Initialized
INFO - 2018-11-22 16:21:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:48 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:48 --> Config Class Initialized
DEBUG - 2018-11-22 16:21:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:48 --> URI Class Initialized
INFO - 2018-11-22 16:21:48 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:48 --> URI Class Initialized
INFO - 2018-11-22 16:21:48 --> Hooks Class Initialized
INFO - 2018-11-22 16:21:48 --> Router Class Initialized
INFO - 2018-11-22 16:21:48 --> Config Class Initialized
INFO - 2018-11-22 16:21:48 --> Config Class Initialized
INFO - 2018-11-22 16:21:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:21:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:48 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:21:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:48 --> Router Class Initialized
INFO - 2018-11-22 16:21:48 --> Output Class Initialized
INFO - 2018-11-22 16:21:48 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:48 --> URI Class Initialized
INFO - 2018-11-22 16:21:48 --> Output Class Initialized
INFO - 2018-11-22 16:21:48 --> Security Class Initialized
INFO - 2018-11-22 16:21:48 --> Config Class Initialized
DEBUG - 2018-11-22 16:21:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:48 --> Hooks Class Initialized
INFO - 2018-11-22 16:21:48 --> Router Class Initialized
INFO - 2018-11-22 16:21:48 --> URI Class Initialized
INFO - 2018-11-22 16:21:48 --> Hooks Class Initialized
INFO - 2018-11-22 16:21:48 --> Input Class Initialized
INFO - 2018-11-22 16:21:48 --> Security Class Initialized
INFO - 2018-11-22 16:21:48 --> Router Class Initialized
DEBUG - 2018-11-22 16:21:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:48 --> Language Class Initialized
INFO - 2018-11-22 16:21:48 --> Output Class Initialized
DEBUG - 2018-11-22 16:21:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:21:48 --> Output Class Initialized
DEBUG - 2018-11-22 16:21:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:48 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:48 --> Security Class Initialized
INFO - 2018-11-22 16:21:48 --> Loader Class Initialized
INFO - 2018-11-22 16:21:48 --> Security Class Initialized
INFO - 2018-11-22 16:21:48 --> Utf8 Class Initialized
INFO - 2018-11-22 16:21:48 --> Input Class Initialized
INFO - 2018-11-22 16:21:48 --> URI Class Initialized
DEBUG - 2018-11-22 16:21:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:21:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:48 --> Language Class Initialized
INFO - 2018-11-22 16:21:48 --> URI Class Initialized
INFO - 2018-11-22 16:21:48 --> Input Class Initialized
INFO - 2018-11-22 16:21:48 --> Router Class Initialized
INFO - 2018-11-22 16:21:48 --> Input Class Initialized
INFO - 2018-11-22 16:21:48 --> Router Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:48 --> Loader Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:48 --> Output Class Initialized
INFO - 2018-11-22 16:21:48 --> Language Class Initialized
INFO - 2018-11-22 16:21:48 --> Language Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:48 --> Output Class Initialized
INFO - 2018-11-22 16:21:48 --> Loader Class Initialized
INFO - 2018-11-22 16:21:48 --> Loader Class Initialized
INFO - 2018-11-22 16:21:48 --> Security Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:48 --> Security Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: url_helper
DEBUG - 2018-11-22 16:21:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:48 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 16:21:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:21:48 --> Input Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:48 --> Input Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:48 --> Language Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:48 --> Language Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:48 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:48 --> Loader Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:48 --> Loader Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:21:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:48 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: file_helper
DEBUG - 2018-11-22 16:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:48 --> Controller Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:48 --> Final output sent to browser
INFO - 2018-11-22 16:21:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:21:48 --> Total execution time: 0.6800
DEBUG - 2018-11-22 16:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:21:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:48 --> Controller Class Initialized
INFO - 2018-11-22 16:21:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:48 --> Database Driver Class Initialized
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:21:48 --> Total execution time: 0.6740
INFO - 2018-11-22 16:21:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:48 --> Controller Class Initialized
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:48 --> Total execution time: 0.8821
INFO - 2018-11-22 16:21:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:48 --> Controller Class Initialized
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Model Class Initialized
INFO - 2018-11-22 16:21:48 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:48 --> Total execution time: 0.7980
DEBUG - 2018-11-22 16:21:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:49 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:49 --> Controller Class Initialized
INFO - 2018-11-22 16:21:49 --> Model Class Initialized
INFO - 2018-11-22 16:21:49 --> Model Class Initialized
DEBUG - 2018-11-22 16:21:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:21:50 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:50 --> Total execution time: 2.3111
INFO - 2018-11-22 16:21:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:21:50 --> Controller Class Initialized
INFO - 2018-11-22 16:21:50 --> Model Class Initialized
INFO - 2018-11-22 16:21:50 --> Model Class Initialized
INFO - 2018-11-22 16:21:50 --> Model Class Initialized
INFO - 2018-11-22 16:21:50 --> Model Class Initialized
INFO - 2018-11-22 16:21:51 --> Final output sent to browser
DEBUG - 2018-11-22 16:21:51 --> Total execution time: 3.7682
INFO - 2018-11-22 16:22:13 --> Config Class Initialized
INFO - 2018-11-22 16:22:13 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:22:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:22:13 --> Utf8 Class Initialized
INFO - 2018-11-22 16:22:13 --> URI Class Initialized
INFO - 2018-11-22 16:22:13 --> Router Class Initialized
INFO - 2018-11-22 16:22:13 --> Config Class Initialized
INFO - 2018-11-22 16:22:13 --> Output Class Initialized
INFO - 2018-11-22 16:22:13 --> Hooks Class Initialized
INFO - 2018-11-22 16:22:13 --> Security Class Initialized
DEBUG - 2018-11-22 16:22:13 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:22:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:22:13 --> Utf8 Class Initialized
INFO - 2018-11-22 16:22:13 --> URI Class Initialized
INFO - 2018-11-22 16:22:13 --> Input Class Initialized
INFO - 2018-11-22 16:22:13 --> Language Class Initialized
INFO - 2018-11-22 16:22:13 --> Loader Class Initialized
INFO - 2018-11-22 16:22:13 --> Router Class Initialized
INFO - 2018-11-22 16:22:13 --> Helper loaded: url_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: file_helper
INFO - 2018-11-22 16:22:13 --> Output Class Initialized
INFO - 2018-11-22 16:22:13 --> Security Class Initialized
DEBUG - 2018-11-22 16:22:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:22:13 --> Input Class Initialized
INFO - 2018-11-22 16:22:13 --> Helper loaded: form_helper
INFO - 2018-11-22 16:22:13 --> Language Class Initialized
INFO - 2018-11-22 16:22:13 --> Loader Class Initialized
INFO - 2018-11-22 16:22:13 --> Helper loaded: general_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: url_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:22:13 --> Database Driver Class Initialized
INFO - 2018-11-22 16:22:13 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: file_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: form_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: general_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:22:13 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 16:22:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:22:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:22:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:22:13 --> Controller Class Initialized
INFO - 2018-11-22 16:22:13 --> Database Driver Class Initialized
INFO - 2018-11-22 16:22:13 --> Model Class Initialized
INFO - 2018-11-22 16:22:13 --> Model Class Initialized
INFO - 2018-11-22 16:22:13 --> Final output sent to browser
DEBUG - 2018-11-22 16:22:13 --> Total execution time: 0.3150
DEBUG - 2018-11-22 16:22:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:22:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:22:13 --> Controller Class Initialized
INFO - 2018-11-22 16:22:13 --> Model Class Initialized
INFO - 2018-11-22 16:22:13 --> Model Class Initialized
INFO - 2018-11-22 16:22:13 --> Final output sent to browser
DEBUG - 2018-11-22 16:22:13 --> Total execution time: 0.3380
INFO - 2018-11-22 16:30:48 --> Config Class Initialized
INFO - 2018-11-22 16:30:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:30:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:30:48 --> Utf8 Class Initialized
INFO - 2018-11-22 16:30:48 --> URI Class Initialized
INFO - 2018-11-22 16:30:48 --> Router Class Initialized
INFO - 2018-11-22 16:30:48 --> Output Class Initialized
INFO - 2018-11-22 16:30:48 --> Security Class Initialized
DEBUG - 2018-11-22 16:30:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:30:48 --> Input Class Initialized
INFO - 2018-11-22 16:30:48 --> Language Class Initialized
INFO - 2018-11-22 16:30:48 --> Loader Class Initialized
INFO - 2018-11-22 16:30:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:30:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:30:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:30:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:30:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:30:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:30:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:30:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:30:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:30:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:30:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:30:48 --> Controller Class Initialized
INFO - 2018-11-22 16:30:48 --> Model Class Initialized
INFO - 2018-11-22 16:30:48 --> Model Class Initialized
ERROR - 2018-11-22 16:30:48 --> Severity: Error --> Call to a member function num_rows() on null D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 899
INFO - 2018-11-22 16:32:39 --> Config Class Initialized
INFO - 2018-11-22 16:32:39 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:32:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:32:39 --> Utf8 Class Initialized
INFO - 2018-11-22 16:32:39 --> URI Class Initialized
INFO - 2018-11-22 16:32:39 --> Router Class Initialized
INFO - 2018-11-22 16:32:39 --> Output Class Initialized
INFO - 2018-11-22 16:32:39 --> Security Class Initialized
DEBUG - 2018-11-22 16:32:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:32:39 --> Input Class Initialized
INFO - 2018-11-22 16:32:39 --> Language Class Initialized
INFO - 2018-11-22 16:32:39 --> Loader Class Initialized
INFO - 2018-11-22 16:32:39 --> Helper loaded: url_helper
INFO - 2018-11-22 16:32:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:32:39 --> Helper loaded: file_helper
INFO - 2018-11-22 16:32:39 --> Helper loaded: form_helper
INFO - 2018-11-22 16:32:39 --> Helper loaded: general_helper
INFO - 2018-11-22 16:32:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:32:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:32:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:32:39 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:32:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:32:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:32:39 --> Controller Class Initialized
INFO - 2018-11-22 16:32:39 --> Model Class Initialized
INFO - 2018-11-22 16:32:39 --> Model Class Initialized
INFO - 2018-11-22 16:32:39 --> Model Class Initialized
INFO - 2018-11-22 16:32:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 16:32:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 16:32:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 16:32:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 16:32:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 16:32:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 16:32:40 --> Final output sent to browser
DEBUG - 2018-11-22 16:32:40 --> Total execution time: 0.3920
INFO - 2018-11-22 16:32:40 --> Config Class Initialized
INFO - 2018-11-22 16:32:40 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:32:40 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:32:40 --> Utf8 Class Initialized
INFO - 2018-11-22 16:32:40 --> URI Class Initialized
INFO - 2018-11-22 16:32:40 --> Router Class Initialized
INFO - 2018-11-22 16:32:40 --> Output Class Initialized
INFO - 2018-11-22 16:32:40 --> Security Class Initialized
DEBUG - 2018-11-22 16:32:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:32:40 --> Input Class Initialized
INFO - 2018-11-22 16:32:40 --> Language Class Initialized
ERROR - 2018-11-22 16:32:40 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 16:32:44 --> Config Class Initialized
INFO - 2018-11-22 16:32:44 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:32:44 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:32:44 --> Utf8 Class Initialized
INFO - 2018-11-22 16:32:44 --> URI Class Initialized
INFO - 2018-11-22 16:32:44 --> Router Class Initialized
INFO - 2018-11-22 16:32:44 --> Output Class Initialized
INFO - 2018-11-22 16:32:44 --> Security Class Initialized
DEBUG - 2018-11-22 16:32:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:32:45 --> Input Class Initialized
INFO - 2018-11-22 16:32:45 --> Language Class Initialized
INFO - 2018-11-22 16:32:45 --> Loader Class Initialized
INFO - 2018-11-22 16:32:45 --> Helper loaded: url_helper
INFO - 2018-11-22 16:32:45 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:32:45 --> Helper loaded: file_helper
INFO - 2018-11-22 16:32:45 --> Helper loaded: form_helper
INFO - 2018-11-22 16:32:45 --> Helper loaded: general_helper
INFO - 2018-11-22 16:32:45 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:32:45 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:32:45 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:32:45 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:32:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:32:45 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:32:45 --> Controller Class Initialized
INFO - 2018-11-22 16:32:45 --> Model Class Initialized
INFO - 2018-11-22 16:32:45 --> Model Class Initialized
INFO - 2018-11-22 16:32:45 --> Model Class Initialized
INFO - 2018-11-22 16:32:45 --> Model Class Initialized
INFO - 2018-11-22 16:32:47 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:32:47 --> Final output sent to browser
DEBUG - 2018-11-22 16:32:47 --> Total execution time: 2.1771
INFO - 2018-11-22 16:33:16 --> Config Class Initialized
INFO - 2018-11-22 16:33:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:16 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:17 --> URI Class Initialized
INFO - 2018-11-22 16:33:17 --> Router Class Initialized
INFO - 2018-11-22 16:33:17 --> Output Class Initialized
INFO - 2018-11-22 16:33:17 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:17 --> Input Class Initialized
INFO - 2018-11-22 16:33:17 --> Language Class Initialized
INFO - 2018-11-22 16:33:17 --> Loader Class Initialized
INFO - 2018-11-22 16:33:17 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:17 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:17 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:17 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:17 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:17 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:17 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:17 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:17 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:33:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:17 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:17 --> Controller Class Initialized
INFO - 2018-11-22 16:33:17 --> Model Class Initialized
INFO - 2018-11-22 16:33:17 --> Model Class Initialized
INFO - 2018-11-22 16:33:17 --> Model Class Initialized
INFO - 2018-11-22 16:33:17 --> Model Class Initialized
INFO - 2018-11-22 16:33:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:33:20 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:20 --> Total execution time: 3.2522
INFO - 2018-11-22 16:33:22 --> Config Class Initialized
INFO - 2018-11-22 16:33:22 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:22 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:22 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:22 --> URI Class Initialized
INFO - 2018-11-22 16:33:22 --> Router Class Initialized
INFO - 2018-11-22 16:33:22 --> Output Class Initialized
INFO - 2018-11-22 16:33:22 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:22 --> Input Class Initialized
INFO - 2018-11-22 16:33:22 --> Language Class Initialized
INFO - 2018-11-22 16:33:22 --> Loader Class Initialized
INFO - 2018-11-22 16:33:22 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:22 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:22 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:22 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:22 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:22 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:22 --> Controller Class Initialized
INFO - 2018-11-22 16:33:22 --> Model Class Initialized
INFO - 2018-11-22 16:33:22 --> Model Class Initialized
INFO - 2018-11-22 16:33:22 --> Model Class Initialized
INFO - 2018-11-22 16:33:22 --> Model Class Initialized
ERROR - 2018-11-22 16:33:23 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 16:33:27 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 16:33:27 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 16:33:27 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 16:33:27 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:33:27 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:27 --> Total execution time: 4.9933
INFO - 2018-11-22 16:33:30 --> Config Class Initialized
INFO - 2018-11-22 16:33:30 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:30 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:30 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:30 --> URI Class Initialized
INFO - 2018-11-22 16:33:30 --> Router Class Initialized
INFO - 2018-11-22 16:33:30 --> Output Class Initialized
INFO - 2018-11-22 16:33:30 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:30 --> Input Class Initialized
INFO - 2018-11-22 16:33:30 --> Language Class Initialized
INFO - 2018-11-22 16:33:30 --> Loader Class Initialized
INFO - 2018-11-22 16:33:30 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:30 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:30 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:30 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:30 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:30 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:30 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:30 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:30 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:33:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:30 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:30 --> Controller Class Initialized
INFO - 2018-11-22 16:33:30 --> Model Class Initialized
INFO - 2018-11-22 16:33:30 --> Model Class Initialized
ERROR - 2018-11-22 16:33:32 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 16:33:32 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1007
ERROR - 2018-11-22 16:33:32 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 16:33:32 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:33:32 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:32 --> Total execution time: 1.5861
INFO - 2018-11-22 16:33:32 --> Config Class Initialized
INFO - 2018-11-22 16:33:32 --> Hooks Class Initialized
INFO - 2018-11-22 16:33:32 --> Config Class Initialized
DEBUG - 2018-11-22 16:33:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:32 --> Hooks Class Initialized
INFO - 2018-11-22 16:33:32 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:32 --> URI Class Initialized
DEBUG - 2018-11-22 16:33:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:32 --> Router Class Initialized
INFO - 2018-11-22 16:33:32 --> Output Class Initialized
INFO - 2018-11-22 16:33:32 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:32 --> Config Class Initialized
INFO - 2018-11-22 16:33:32 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:32 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:32 --> URI Class Initialized
INFO - 2018-11-22 16:33:32 --> Router Class Initialized
INFO - 2018-11-22 16:33:32 --> URI Class Initialized
INFO - 2018-11-22 16:33:32 --> Router Class Initialized
INFO - 2018-11-22 16:33:32 --> Output Class Initialized
INFO - 2018-11-22 16:33:32 --> Output Class Initialized
INFO - 2018-11-22 16:33:32 --> Security Class Initialized
INFO - 2018-11-22 16:33:32 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:32 --> Input Class Initialized
DEBUG - 2018-11-22 16:33:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:32 --> Language Class Initialized
INFO - 2018-11-22 16:33:32 --> Input Class Initialized
INFO - 2018-11-22 16:33:32 --> Loader Class Initialized
INFO - 2018-11-22 16:33:32 --> Language Class Initialized
INFO - 2018-11-22 16:33:32 --> Security Class Initialized
INFO - 2018-11-22 16:33:32 --> Loader Class Initialized
INFO - 2018-11-22 16:33:32 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: file_helper
DEBUG - 2018-11-22 16:33:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:32 --> Input Class Initialized
INFO - 2018-11-22 16:33:32 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:32 --> Language Class Initialized
INFO - 2018-11-22 16:33:32 --> Loader Class Initialized
INFO - 2018-11-22 16:33:32 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:32 --> Database Driver Class Initialized
INFO - 2018-11-22 16:33:32 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:32 --> Database Driver Class Initialized
INFO - 2018-11-22 16:33:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:32 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:33:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:33 --> Controller Class Initialized
INFO - 2018-11-22 16:33:33 --> Config Class Initialized
INFO - 2018-11-22 16:33:33 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:33 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:33:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:33 --> URI Class Initialized
INFO - 2018-11-22 16:33:33 --> Router Class Initialized
INFO - 2018-11-22 16:33:33 --> Final output sent to browser
INFO - 2018-11-22 16:33:33 --> Config Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Total execution time: 0.6340
INFO - 2018-11-22 16:33:33 --> Output Class Initialized
INFO - 2018-11-22 16:33:33 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:33 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:33 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:33 --> Security Class Initialized
INFO - 2018-11-22 16:33:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:33 --> URI Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:33 --> Controller Class Initialized
INFO - 2018-11-22 16:33:33 --> Input Class Initialized
INFO - 2018-11-22 16:33:33 --> Router Class Initialized
INFO - 2018-11-22 16:33:33 --> Language Class Initialized
INFO - 2018-11-22 16:33:33 --> Output Class Initialized
INFO - 2018-11-22 16:33:33 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:33 --> Input Class Initialized
INFO - 2018-11-22 16:33:33 --> Language Class Initialized
INFO - 2018-11-22 16:33:33 --> Loader Class Initialized
INFO - 2018-11-22 16:33:33 --> Loader Class Initialized
INFO - 2018-11-22 16:33:33 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:33 --> Database Driver Class Initialized
INFO - 2018-11-22 16:33:33 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:33 --> Config Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:33 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:33 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:33 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:33 --> Database Driver Class Initialized
INFO - 2018-11-22 16:33:33 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:33 --> URI Class Initialized
INFO - 2018-11-22 16:33:33 --> Router Class Initialized
INFO - 2018-11-22 16:33:33 --> Output Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:33 --> Total execution time: 0.8911
INFO - 2018-11-22 16:33:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:33 --> Controller Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:33 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:33 --> Input Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Total execution time: 1.1381
INFO - 2018-11-22 16:33:33 --> Language Class Initialized
INFO - 2018-11-22 16:33:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:33 --> Loader Class Initialized
INFO - 2018-11-22 16:33:33 --> Controller Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Final output sent to browser
INFO - 2018-11-22 16:33:33 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 16:33:33 --> Total execution time: 0.6520
INFO - 2018-11-22 16:33:33 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:33 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:33 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:33 --> Controller Class Initialized
INFO - 2018-11-22 16:33:33 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Model Class Initialized
INFO - 2018-11-22 16:33:33 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:33 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:33:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:35 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:35 --> Total execution time: 2.0321
INFO - 2018-11-22 16:33:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:35 --> Controller Class Initialized
INFO - 2018-11-22 16:33:35 --> Model Class Initialized
INFO - 2018-11-22 16:33:35 --> Model Class Initialized
INFO - 2018-11-22 16:33:36 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:36 --> Total execution time: 3.5622
INFO - 2018-11-22 16:33:46 --> Config Class Initialized
INFO - 2018-11-22 16:33:46 --> Hooks Class Initialized
INFO - 2018-11-22 16:33:46 --> Config Class Initialized
DEBUG - 2018-11-22 16:33:46 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:46 --> Hooks Class Initialized
INFO - 2018-11-22 16:33:46 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:33:46 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:46 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:46 --> URI Class Initialized
INFO - 2018-11-22 16:33:46 --> Router Class Initialized
INFO - 2018-11-22 16:33:46 --> URI Class Initialized
INFO - 2018-11-22 16:33:46 --> Router Class Initialized
INFO - 2018-11-22 16:33:46 --> Output Class Initialized
INFO - 2018-11-22 16:33:46 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:46 --> Output Class Initialized
INFO - 2018-11-22 16:33:46 --> Input Class Initialized
INFO - 2018-11-22 16:33:46 --> Security Class Initialized
INFO - 2018-11-22 16:33:46 --> Language Class Initialized
DEBUG - 2018-11-22 16:33:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:46 --> Input Class Initialized
INFO - 2018-11-22 16:33:46 --> Language Class Initialized
INFO - 2018-11-22 16:33:46 --> Loader Class Initialized
INFO - 2018-11-22 16:33:46 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:46 --> Loader Class Initialized
INFO - 2018-11-22 16:33:46 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:46 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:46 --> Database Driver Class Initialized
INFO - 2018-11-22 16:33:46 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:33:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:46 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-11-22 16:33:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:46 --> Controller Class Initialized
INFO - 2018-11-22 16:33:46 --> Model Class Initialized
INFO - 2018-11-22 16:33:46 --> Model Class Initialized
INFO - 2018-11-22 16:33:46 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:46 --> Total execution time: 0.2010
INFO - 2018-11-22 16:33:46 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:46 --> Controller Class Initialized
INFO - 2018-11-22 16:33:46 --> Model Class Initialized
INFO - 2018-11-22 16:33:46 --> Model Class Initialized
INFO - 2018-11-22 16:33:46 --> Final output sent to browser
DEBUG - 2018-11-22 16:33:46 --> Total execution time: 0.2360
INFO - 2018-11-22 16:33:56 --> Config Class Initialized
INFO - 2018-11-22 16:33:56 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:33:56 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:33:56 --> Utf8 Class Initialized
INFO - 2018-11-22 16:33:56 --> URI Class Initialized
INFO - 2018-11-22 16:33:56 --> Router Class Initialized
INFO - 2018-11-22 16:33:56 --> Output Class Initialized
INFO - 2018-11-22 16:33:56 --> Security Class Initialized
DEBUG - 2018-11-22 16:33:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:33:56 --> Input Class Initialized
INFO - 2018-11-22 16:33:56 --> Language Class Initialized
INFO - 2018-11-22 16:33:57 --> Loader Class Initialized
INFO - 2018-11-22 16:33:57 --> Helper loaded: url_helper
INFO - 2018-11-22 16:33:57 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:33:57 --> Helper loaded: file_helper
INFO - 2018-11-22 16:33:57 --> Helper loaded: form_helper
INFO - 2018-11-22 16:33:57 --> Helper loaded: general_helper
INFO - 2018-11-22 16:33:57 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:33:57 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:33:57 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:33:57 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:33:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:33:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:33:57 --> Controller Class Initialized
INFO - 2018-11-22 16:33:57 --> Model Class Initialized
INFO - 2018-11-22 16:33:57 --> Model Class Initialized
ERROR - 2018-11-22 16:33:57 --> Severity: Notice --> Undefined variable: query D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 899
ERROR - 2018-11-22 16:33:57 --> Severity: Error --> Call to a member function num_rows() on null D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 899
INFO - 2018-11-22 16:34:41 --> Config Class Initialized
INFO - 2018-11-22 16:34:41 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:34:41 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:34:41 --> Utf8 Class Initialized
INFO - 2018-11-22 16:34:41 --> URI Class Initialized
INFO - 2018-11-22 16:34:41 --> Router Class Initialized
INFO - 2018-11-22 16:34:41 --> Output Class Initialized
INFO - 2018-11-22 16:34:41 --> Security Class Initialized
DEBUG - 2018-11-22 16:34:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:34:41 --> Input Class Initialized
INFO - 2018-11-22 16:34:41 --> Language Class Initialized
INFO - 2018-11-22 16:34:41 --> Loader Class Initialized
INFO - 2018-11-22 16:34:41 --> Helper loaded: url_helper
INFO - 2018-11-22 16:34:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:34:41 --> Helper loaded: file_helper
INFO - 2018-11-22 16:34:41 --> Helper loaded: form_helper
INFO - 2018-11-22 16:34:41 --> Helper loaded: general_helper
INFO - 2018-11-22 16:34:41 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:34:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:34:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:34:41 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:34:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:34:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:34:41 --> Controller Class Initialized
INFO - 2018-11-22 16:34:41 --> Model Class Initialized
INFO - 2018-11-22 16:34:41 --> Model Class Initialized
INFO - 2018-11-22 16:34:41 --> Model Class Initialized
INFO - 2018-11-22 16:34:41 --> Model Class Initialized
INFO - 2018-11-22 16:34:42 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:34:42 --> Final output sent to browser
DEBUG - 2018-11-22 16:34:42 --> Total execution time: 1.3601
INFO - 2018-11-22 16:34:51 --> Config Class Initialized
INFO - 2018-11-22 16:34:51 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:34:51 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:34:51 --> Utf8 Class Initialized
INFO - 2018-11-22 16:34:51 --> URI Class Initialized
INFO - 2018-11-22 16:34:51 --> Router Class Initialized
INFO - 2018-11-22 16:34:51 --> Output Class Initialized
INFO - 2018-11-22 16:34:51 --> Security Class Initialized
DEBUG - 2018-11-22 16:34:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:34:51 --> Input Class Initialized
INFO - 2018-11-22 16:34:51 --> Language Class Initialized
INFO - 2018-11-22 16:34:51 --> Loader Class Initialized
INFO - 2018-11-22 16:34:51 --> Helper loaded: url_helper
INFO - 2018-11-22 16:34:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:34:51 --> Helper loaded: file_helper
INFO - 2018-11-22 16:34:51 --> Helper loaded: form_helper
INFO - 2018-11-22 16:34:51 --> Helper loaded: general_helper
INFO - 2018-11-22 16:34:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:34:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:34:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:34:51 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:34:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:34:51 --> Controller Class Initialized
INFO - 2018-11-22 16:34:51 --> Model Class Initialized
INFO - 2018-11-22 16:34:51 --> Model Class Initialized
INFO - 2018-11-22 16:34:51 --> Model Class Initialized
INFO - 2018-11-22 16:34:51 --> Model Class Initialized
ERROR - 2018-11-22 16:34:52 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 16:34:56 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 16:34:56 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 16:34:56 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 16:34:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:34:56 --> Final output sent to browser
DEBUG - 2018-11-22 16:34:56 --> Total execution time: 4.9893
INFO - 2018-11-22 16:34:59 --> Config Class Initialized
INFO - 2018-11-22 16:34:59 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:34:59 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:34:59 --> Utf8 Class Initialized
INFO - 2018-11-22 16:34:59 --> URI Class Initialized
INFO - 2018-11-22 16:34:59 --> Router Class Initialized
INFO - 2018-11-22 16:34:59 --> Output Class Initialized
INFO - 2018-11-22 16:34:59 --> Security Class Initialized
DEBUG - 2018-11-22 16:34:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:34:59 --> Input Class Initialized
INFO - 2018-11-22 16:34:59 --> Language Class Initialized
INFO - 2018-11-22 16:34:59 --> Loader Class Initialized
INFO - 2018-11-22 16:34:59 --> Helper loaded: url_helper
INFO - 2018-11-22 16:34:59 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:34:59 --> Helper loaded: file_helper
INFO - 2018-11-22 16:34:59 --> Helper loaded: form_helper
INFO - 2018-11-22 16:34:59 --> Helper loaded: general_helper
INFO - 2018-11-22 16:34:59 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:34:59 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:34:59 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:34:59 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:34:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:34:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:34:59 --> Controller Class Initialized
INFO - 2018-11-22 16:34:59 --> Model Class Initialized
INFO - 2018-11-22 16:34:59 --> Model Class Initialized
ERROR - 2018-11-22 16:35:01 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 16:35:01 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 16:35:01 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 16:35:01 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:35:01 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:01 --> Total execution time: 1.6021
INFO - 2018-11-22 16:35:01 --> Config Class Initialized
INFO - 2018-11-22 16:35:01 --> Config Class Initialized
INFO - 2018-11-22 16:35:01 --> Config Class Initialized
INFO - 2018-11-22 16:35:01 --> Config Class Initialized
INFO - 2018-11-22 16:35:01 --> Config Class Initialized
INFO - 2018-11-22 16:35:01 --> Config Class Initialized
INFO - 2018-11-22 16:35:01 --> Hooks Class Initialized
INFO - 2018-11-22 16:35:01 --> Hooks Class Initialized
INFO - 2018-11-22 16:35:01 --> Hooks Class Initialized
INFO - 2018-11-22 16:35:02 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:35:02 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:35:02 --> Hooks Class Initialized
INFO - 2018-11-22 16:35:02 --> Hooks Class Initialized
INFO - 2018-11-22 16:35:02 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:35:02 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:35:02 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:35:02 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:35:02 --> Utf8 Class Initialized
INFO - 2018-11-22 16:35:02 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:35:02 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:35:02 --> URI Class Initialized
INFO - 2018-11-22 16:35:02 --> URI Class Initialized
INFO - 2018-11-22 16:35:02 --> Utf8 Class Initialized
INFO - 2018-11-22 16:35:02 --> Utf8 Class Initialized
INFO - 2018-11-22 16:35:02 --> URI Class Initialized
INFO - 2018-11-22 16:35:02 --> URI Class Initialized
INFO - 2018-11-22 16:35:02 --> Router Class Initialized
INFO - 2018-11-22 16:35:02 --> Router Class Initialized
INFO - 2018-11-22 16:35:02 --> URI Class Initialized
DEBUG - 2018-11-22 16:35:02 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:35:02 --> Router Class Initialized
INFO - 2018-11-22 16:35:02 --> Router Class Initialized
INFO - 2018-11-22 16:35:02 --> Utf8 Class Initialized
INFO - 2018-11-22 16:35:02 --> Output Class Initialized
INFO - 2018-11-22 16:35:02 --> URI Class Initialized
INFO - 2018-11-22 16:35:02 --> Router Class Initialized
INFO - 2018-11-22 16:35:02 --> Output Class Initialized
INFO - 2018-11-22 16:35:02 --> Output Class Initialized
INFO - 2018-11-22 16:35:02 --> Security Class Initialized
INFO - 2018-11-22 16:35:02 --> Security Class Initialized
DEBUG - 2018-11-22 16:35:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:35:02 --> Output Class Initialized
INFO - 2018-11-22 16:35:02 --> Security Class Initialized
DEBUG - 2018-11-22 16:35:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:35:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:35:02 --> Output Class Initialized
INFO - 2018-11-22 16:35:02 --> Input Class Initialized
INFO - 2018-11-22 16:35:02 --> Router Class Initialized
INFO - 2018-11-22 16:35:02 --> Input Class Initialized
INFO - 2018-11-22 16:35:02 --> Input Class Initialized
INFO - 2018-11-22 16:35:02 --> Security Class Initialized
INFO - 2018-11-22 16:35:02 --> Security Class Initialized
INFO - 2018-11-22 16:35:02 --> Output Class Initialized
INFO - 2018-11-22 16:35:02 --> Language Class Initialized
INFO - 2018-11-22 16:35:02 --> Language Class Initialized
INFO - 2018-11-22 16:35:02 --> Language Class Initialized
INFO - 2018-11-22 16:35:02 --> Security Class Initialized
INFO - 2018-11-22 16:35:02 --> Loader Class Initialized
DEBUG - 2018-11-22 16:35:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:35:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:35:02 --> Input Class Initialized
INFO - 2018-11-22 16:35:02 --> Loader Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:02 --> Loader Class Initialized
INFO - 2018-11-22 16:35:02 --> Input Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:02 --> Language Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:02 --> Language Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: file_helper
DEBUG - 2018-11-22 16:35:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:35:02 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:02 --> Loader Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:02 --> Input Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:02 --> Loader Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:02 --> Language Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:02 --> Loader Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:02 --> Database Driver Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:02 --> Database Driver Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:35:02 --> Database Driver Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:02 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 16:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:35:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:02 --> Controller Class Initialized
INFO - 2018-11-22 16:35:02 --> Database Driver Class Initialized
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:02 --> Database Driver Class Initialized
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:02 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:35:02 --> Final output sent to browser
INFO - 2018-11-22 16:35:02 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:35:02 --> Total execution time: 0.8200
DEBUG - 2018-11-22 16:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:35:02 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-11-22 16:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:35:02 --> Controller Class Initialized
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:02 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:35:02 --> Total execution time: 0.9631
INFO - 2018-11-22 16:35:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:02 --> Controller Class Initialized
DEBUG - 2018-11-22 16:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:02 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:02 --> Total execution time: 0.9961
INFO - 2018-11-22 16:35:02 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:02 --> Controller Class Initialized
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:02 --> Model Class Initialized
INFO - 2018-11-22 16:35:04 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:04 --> Total execution time: 2.2231
INFO - 2018-11-22 16:35:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:04 --> Controller Class Initialized
INFO - 2018-11-22 16:35:04 --> Model Class Initialized
INFO - 2018-11-22 16:35:04 --> Model Class Initialized
INFO - 2018-11-22 16:35:04 --> Model Class Initialized
INFO - 2018-11-22 16:35:04 --> Model Class Initialized
INFO - 2018-11-22 16:35:05 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:05 --> Total execution time: 3.7392
INFO - 2018-11-22 16:35:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:05 --> Controller Class Initialized
INFO - 2018-11-22 16:35:05 --> Model Class Initialized
INFO - 2018-11-22 16:35:05 --> Model Class Initialized
INFO - 2018-11-22 16:35:05 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:05 --> Total execution time: 3.8652
INFO - 2018-11-22 16:35:13 --> Config Class Initialized
INFO - 2018-11-22 16:35:13 --> Hooks Class Initialized
INFO - 2018-11-22 16:35:13 --> Config Class Initialized
DEBUG - 2018-11-22 16:35:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:35:13 --> Hooks Class Initialized
INFO - 2018-11-22 16:35:13 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:35:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:35:13 --> URI Class Initialized
INFO - 2018-11-22 16:35:13 --> Utf8 Class Initialized
INFO - 2018-11-22 16:35:13 --> URI Class Initialized
INFO - 2018-11-22 16:35:13 --> Router Class Initialized
INFO - 2018-11-22 16:35:13 --> Output Class Initialized
INFO - 2018-11-22 16:35:13 --> Security Class Initialized
DEBUG - 2018-11-22 16:35:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:35:13 --> Input Class Initialized
INFO - 2018-11-22 16:35:13 --> Language Class Initialized
INFO - 2018-11-22 16:35:13 --> Loader Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:14 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:14 --> Router Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:14 --> Output Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:14 --> Security Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: general_helper
DEBUG - 2018-11-22 16:35:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:35:14 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:14 --> Input Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:14 --> Language Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:35:14 --> Loader Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:14 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:14 --> Database Driver Class Initialized
INFO - 2018-11-22 16:35:14 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:14 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:14 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:14 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:14 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:14 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 16:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:35:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:14 --> Controller Class Initialized
INFO - 2018-11-22 16:35:14 --> Database Driver Class Initialized
INFO - 2018-11-22 16:35:14 --> Model Class Initialized
INFO - 2018-11-22 16:35:14 --> Model Class Initialized
INFO - 2018-11-22 16:35:14 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:14 --> Total execution time: 0.2100
DEBUG - 2018-11-22 16:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:35:14 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:14 --> Controller Class Initialized
INFO - 2018-11-22 16:35:14 --> Model Class Initialized
INFO - 2018-11-22 16:35:14 --> Model Class Initialized
INFO - 2018-11-22 16:35:14 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:14 --> Total execution time: 0.2580
INFO - 2018-11-22 16:35:26 --> Config Class Initialized
INFO - 2018-11-22 16:35:26 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:35:26 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:35:26 --> Utf8 Class Initialized
INFO - 2018-11-22 16:35:26 --> URI Class Initialized
INFO - 2018-11-22 16:35:26 --> Router Class Initialized
INFO - 2018-11-22 16:35:26 --> Output Class Initialized
INFO - 2018-11-22 16:35:26 --> Security Class Initialized
DEBUG - 2018-11-22 16:35:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:35:26 --> Input Class Initialized
INFO - 2018-11-22 16:35:26 --> Language Class Initialized
INFO - 2018-11-22 16:35:26 --> Loader Class Initialized
INFO - 2018-11-22 16:35:26 --> Helper loaded: url_helper
INFO - 2018-11-22 16:35:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:35:26 --> Helper loaded: file_helper
INFO - 2018-11-22 16:35:26 --> Helper loaded: form_helper
INFO - 2018-11-22 16:35:26 --> Helper loaded: general_helper
INFO - 2018-11-22 16:35:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:35:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:35:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:35:26 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:35:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:35:26 --> Controller Class Initialized
INFO - 2018-11-22 16:35:26 --> Model Class Initialized
INFO - 2018-11-22 16:35:26 --> Model Class Initialized
INFO - 2018-11-22 16:35:26 --> Final output sent to browser
DEBUG - 2018-11-22 16:35:26 --> Total execution time: 0.1870
INFO - 2018-11-22 16:38:44 --> Config Class Initialized
INFO - 2018-11-22 16:38:44 --> Hooks Class Initialized
INFO - 2018-11-22 16:38:44 --> Config Class Initialized
INFO - 2018-11-22 16:38:44 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:38:44 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:38:44 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:38:44 --> Utf8 Class Initialized
INFO - 2018-11-22 16:38:44 --> Utf8 Class Initialized
INFO - 2018-11-22 16:38:44 --> URI Class Initialized
INFO - 2018-11-22 16:38:44 --> URI Class Initialized
INFO - 2018-11-22 16:38:44 --> Router Class Initialized
INFO - 2018-11-22 16:38:44 --> Output Class Initialized
INFO - 2018-11-22 16:38:44 --> Router Class Initialized
INFO - 2018-11-22 16:38:44 --> Security Class Initialized
DEBUG - 2018-11-22 16:38:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:38:44 --> Input Class Initialized
INFO - 2018-11-22 16:38:44 --> Language Class Initialized
INFO - 2018-11-22 16:38:44 --> Output Class Initialized
INFO - 2018-11-22 16:38:44 --> Security Class Initialized
DEBUG - 2018-11-22 16:38:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:38:44 --> Input Class Initialized
INFO - 2018-11-22 16:38:44 --> Language Class Initialized
INFO - 2018-11-22 16:38:44 --> Loader Class Initialized
INFO - 2018-11-22 16:38:44 --> Loader Class Initialized
INFO - 2018-11-22 16:38:44 --> Helper loaded: url_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: file_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: form_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: general_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: url_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: file_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: form_helper
INFO - 2018-11-22 16:38:44 --> Database Driver Class Initialized
INFO - 2018-11-22 16:38:44 --> Helper loaded: general_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:38:44 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:38:44 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:38:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:38:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:38:44 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:38:44 --> Controller Class Initialized
INFO - 2018-11-22 16:38:44 --> Model Class Initialized
INFO - 2018-11-22 16:38:44 --> Model Class Initialized
INFO - 2018-11-22 16:38:45 --> Final output sent to browser
DEBUG - 2018-11-22 16:38:45 --> Total execution time: 1.5841
INFO - 2018-11-22 16:38:45 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:38:45 --> Controller Class Initialized
INFO - 2018-11-22 16:38:46 --> Model Class Initialized
INFO - 2018-11-22 16:38:46 --> Model Class Initialized
INFO - 2018-11-22 16:38:46 --> Final output sent to browser
DEBUG - 2018-11-22 16:38:46 --> Total execution time: 1.6751
INFO - 2018-11-22 16:38:48 --> Config Class Initialized
INFO - 2018-11-22 16:38:48 --> Hooks Class Initialized
INFO - 2018-11-22 16:38:48 --> Config Class Initialized
DEBUG - 2018-11-22 16:38:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:38:48 --> Hooks Class Initialized
INFO - 2018-11-22 16:38:48 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:38:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:38:48 --> Utf8 Class Initialized
INFO - 2018-11-22 16:38:48 --> URI Class Initialized
INFO - 2018-11-22 16:38:48 --> URI Class Initialized
INFO - 2018-11-22 16:38:48 --> Router Class Initialized
INFO - 2018-11-22 16:38:48 --> Output Class Initialized
INFO - 2018-11-22 16:38:48 --> Router Class Initialized
INFO - 2018-11-22 16:38:48 --> Security Class Initialized
INFO - 2018-11-22 16:38:48 --> Output Class Initialized
INFO - 2018-11-22 16:38:48 --> Security Class Initialized
DEBUG - 2018-11-22 16:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:38:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:38:48 --> Input Class Initialized
INFO - 2018-11-22 16:38:48 --> Language Class Initialized
INFO - 2018-11-22 16:38:48 --> Loader Class Initialized
INFO - 2018-11-22 16:38:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:38:48 --> Input Class Initialized
INFO - 2018-11-22 16:38:48 --> Language Class Initialized
INFO - 2018-11-22 16:38:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:38:48 --> Loader Class Initialized
INFO - 2018-11-22 16:38:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: url_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: file_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: form_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: general_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:38:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:38:48 --> Database Driver Class Initialized
INFO - 2018-11-22 16:38:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:38:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:38:48 --> Controller Class Initialized
INFO - 2018-11-22 16:38:48 --> Model Class Initialized
INFO - 2018-11-22 16:38:48 --> Model Class Initialized
DEBUG - 2018-11-22 16:38:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:38:49 --> Final output sent to browser
DEBUG - 2018-11-22 16:38:49 --> Total execution time: 1.5501
INFO - 2018-11-22 16:38:49 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:38:49 --> Controller Class Initialized
INFO - 2018-11-22 16:38:49 --> Model Class Initialized
INFO - 2018-11-22 16:38:49 --> Model Class Initialized
INFO - 2018-11-22 16:38:49 --> Final output sent to browser
DEBUG - 2018-11-22 16:38:49 --> Total execution time: 1.7581
INFO - 2018-11-22 16:39:00 --> Config Class Initialized
INFO - 2018-11-22 16:39:00 --> Config Class Initialized
INFO - 2018-11-22 16:39:00 --> Hooks Class Initialized
INFO - 2018-11-22 16:39:00 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:39:00 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:39:00 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:39:00 --> Utf8 Class Initialized
INFO - 2018-11-22 16:39:00 --> Utf8 Class Initialized
INFO - 2018-11-22 16:39:00 --> URI Class Initialized
INFO - 2018-11-22 16:39:00 --> URI Class Initialized
INFO - 2018-11-22 16:39:00 --> Router Class Initialized
INFO - 2018-11-22 16:39:00 --> Router Class Initialized
INFO - 2018-11-22 16:39:00 --> Output Class Initialized
INFO - 2018-11-22 16:39:00 --> Output Class Initialized
INFO - 2018-11-22 16:39:00 --> Security Class Initialized
INFO - 2018-11-22 16:39:00 --> Security Class Initialized
DEBUG - 2018-11-22 16:39:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:39:00 --> Input Class Initialized
DEBUG - 2018-11-22 16:39:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:39:00 --> Language Class Initialized
INFO - 2018-11-22 16:39:00 --> Input Class Initialized
INFO - 2018-11-22 16:39:00 --> Loader Class Initialized
INFO - 2018-11-22 16:39:00 --> Language Class Initialized
INFO - 2018-11-22 16:39:00 --> Helper loaded: url_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: file_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: form_helper
INFO - 2018-11-22 16:39:00 --> Loader Class Initialized
INFO - 2018-11-22 16:39:00 --> Helper loaded: general_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: url_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: file_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: form_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: general_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:39:00 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:39:00 --> Database Driver Class Initialized
INFO - 2018-11-22 16:39:00 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:39:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:39:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:39:00 --> Controller Class Initialized
DEBUG - 2018-11-22 16:39:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:39:00 --> Model Class Initialized
INFO - 2018-11-22 16:39:00 --> Model Class Initialized
INFO - 2018-11-22 16:39:00 --> Final output sent to browser
DEBUG - 2018-11-22 16:39:00 --> Total execution time: 0.2690
INFO - 2018-11-22 16:39:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:39:01 --> Controller Class Initialized
INFO - 2018-11-22 16:39:01 --> Model Class Initialized
INFO - 2018-11-22 16:39:01 --> Model Class Initialized
INFO - 2018-11-22 16:39:02 --> Final output sent to browser
DEBUG - 2018-11-22 16:39:02 --> Total execution time: 1.7701
INFO - 2018-11-22 16:44:00 --> Config Class Initialized
INFO - 2018-11-22 16:44:00 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:44:00 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:44:00 --> Utf8 Class Initialized
INFO - 2018-11-22 16:44:00 --> URI Class Initialized
INFO - 2018-11-22 16:44:00 --> Router Class Initialized
INFO - 2018-11-22 16:44:00 --> Output Class Initialized
INFO - 2018-11-22 16:44:00 --> Security Class Initialized
DEBUG - 2018-11-22 16:44:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:44:00 --> Input Class Initialized
INFO - 2018-11-22 16:44:01 --> Language Class Initialized
INFO - 2018-11-22 16:44:01 --> Loader Class Initialized
INFO - 2018-11-22 16:44:01 --> Helper loaded: url_helper
INFO - 2018-11-22 16:44:01 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:44:01 --> Helper loaded: file_helper
INFO - 2018-11-22 16:44:01 --> Helper loaded: form_helper
INFO - 2018-11-22 16:44:01 --> Helper loaded: general_helper
INFO - 2018-11-22 16:44:01 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:44:01 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:44:01 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:44:01 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:44:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:44:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:44:01 --> Controller Class Initialized
INFO - 2018-11-22 16:44:01 --> Model Class Initialized
INFO - 2018-11-22 16:44:01 --> Model Class Initialized
INFO - 2018-11-22 16:44:01 --> Model Class Initialized
INFO - 2018-11-22 16:44:01 --> Model Class Initialized
INFO - 2018-11-22 16:44:02 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:44:02 --> Final output sent to browser
DEBUG - 2018-11-22 16:44:02 --> Total execution time: 1.6721
INFO - 2018-11-22 16:44:07 --> Config Class Initialized
INFO - 2018-11-22 16:44:07 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:44:07 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:44:07 --> Utf8 Class Initialized
INFO - 2018-11-22 16:44:07 --> URI Class Initialized
INFO - 2018-11-22 16:44:07 --> Router Class Initialized
INFO - 2018-11-22 16:44:07 --> Output Class Initialized
INFO - 2018-11-22 16:44:07 --> Security Class Initialized
DEBUG - 2018-11-22 16:44:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:44:07 --> Input Class Initialized
INFO - 2018-11-22 16:44:07 --> Language Class Initialized
INFO - 2018-11-22 16:44:07 --> Loader Class Initialized
INFO - 2018-11-22 16:44:07 --> Helper loaded: url_helper
INFO - 2018-11-22 16:44:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:44:07 --> Helper loaded: file_helper
INFO - 2018-11-22 16:44:07 --> Helper loaded: form_helper
INFO - 2018-11-22 16:44:07 --> Helper loaded: general_helper
INFO - 2018-11-22 16:44:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:44:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:44:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:44:07 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:44:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:44:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:44:07 --> Controller Class Initialized
INFO - 2018-11-22 16:44:07 --> Model Class Initialized
INFO - 2018-11-22 16:44:07 --> Model Class Initialized
INFO - 2018-11-22 16:44:07 --> Model Class Initialized
INFO - 2018-11-22 16:44:07 --> Model Class Initialized
INFO - 2018-11-22 16:44:18 --> Config Class Initialized
INFO - 2018-11-22 16:44:18 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:44:18 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:44:18 --> Utf8 Class Initialized
INFO - 2018-11-22 16:44:18 --> URI Class Initialized
INFO - 2018-11-22 16:44:19 --> Router Class Initialized
INFO - 2018-11-22 16:44:19 --> Output Class Initialized
INFO - 2018-11-22 16:44:19 --> Security Class Initialized
DEBUG - 2018-11-22 16:44:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:44:19 --> Input Class Initialized
INFO - 2018-11-22 16:44:19 --> Language Class Initialized
INFO - 2018-11-22 16:44:19 --> Loader Class Initialized
INFO - 2018-11-22 16:44:19 --> Helper loaded: url_helper
INFO - 2018-11-22 16:44:19 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:44:19 --> Helper loaded: file_helper
INFO - 2018-11-22 16:44:19 --> Helper loaded: form_helper
INFO - 2018-11-22 16:44:19 --> Helper loaded: general_helper
INFO - 2018-11-22 16:44:19 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:44:19 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:44:19 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:44:19 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:44:44 --> Config Class Initialized
INFO - 2018-11-22 16:44:44 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:44:44 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:44:44 --> Utf8 Class Initialized
INFO - 2018-11-22 16:44:44 --> URI Class Initialized
INFO - 2018-11-22 16:44:44 --> Router Class Initialized
INFO - 2018-11-22 16:44:44 --> Output Class Initialized
INFO - 2018-11-22 16:44:44 --> Security Class Initialized
DEBUG - 2018-11-22 16:44:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:44:44 --> Input Class Initialized
INFO - 2018-11-22 16:44:44 --> Language Class Initialized
INFO - 2018-11-22 16:44:44 --> Loader Class Initialized
INFO - 2018-11-22 16:44:44 --> Helper loaded: url_helper
INFO - 2018-11-22 16:44:44 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:44:44 --> Helper loaded: file_helper
INFO - 2018-11-22 16:44:44 --> Helper loaded: form_helper
INFO - 2018-11-22 16:44:44 --> Helper loaded: general_helper
INFO - 2018-11-22 16:44:44 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:44:44 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:44:44 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:44:44 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:44:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:45:13 --> Config Class Initialized
INFO - 2018-11-22 16:45:13 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:45:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:45:13 --> Utf8 Class Initialized
INFO - 2018-11-22 16:45:13 --> URI Class Initialized
INFO - 2018-11-22 16:45:13 --> Router Class Initialized
INFO - 2018-11-22 16:45:13 --> Output Class Initialized
INFO - 2018-11-22 16:45:13 --> Security Class Initialized
DEBUG - 2018-11-22 16:45:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:45:13 --> Input Class Initialized
INFO - 2018-11-22 16:45:13 --> Language Class Initialized
INFO - 2018-11-22 16:45:13 --> Loader Class Initialized
INFO - 2018-11-22 16:45:13 --> Helper loaded: url_helper
INFO - 2018-11-22 16:45:13 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:45:13 --> Helper loaded: file_helper
INFO - 2018-11-22 16:45:13 --> Helper loaded: form_helper
INFO - 2018-11-22 16:45:13 --> Helper loaded: general_helper
INFO - 2018-11-22 16:45:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:45:13 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:45:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:45:13 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:45:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:45:53 --> Config Class Initialized
INFO - 2018-11-22 16:45:53 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:45:54 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:45:54 --> Utf8 Class Initialized
INFO - 2018-11-22 16:45:54 --> URI Class Initialized
DEBUG - 2018-11-22 16:45:54 --> No URI present. Default controller set.
INFO - 2018-11-22 16:45:54 --> Router Class Initialized
INFO - 2018-11-22 16:45:54 --> Output Class Initialized
INFO - 2018-11-22 16:45:54 --> Security Class Initialized
DEBUG - 2018-11-22 16:45:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:45:54 --> Input Class Initialized
INFO - 2018-11-22 16:45:54 --> Language Class Initialized
INFO - 2018-11-22 16:45:54 --> Loader Class Initialized
INFO - 2018-11-22 16:45:54 --> Helper loaded: url_helper
INFO - 2018-11-22 16:45:54 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:45:54 --> Helper loaded: file_helper
INFO - 2018-11-22 16:45:54 --> Helper loaded: form_helper
INFO - 2018-11-22 16:45:54 --> Helper loaded: general_helper
INFO - 2018-11-22 16:45:54 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:45:54 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:45:54 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:45:54 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2018-11-22 16:46:08 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\sitios\MTBA-desa-procprod\system\core\Common.php 595
ERROR - 2018-11-22 16:46:08 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\sitios\MTBA-desa-procprod\system\libraries\Session\drivers\Session_files_driver.php 178
ERROR - 2018-11-22 16:46:08 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\sitios\MTBA-desa-procprod\system\libraries\Session\drivers\Session_files_driver.php 178
ERROR - 2018-11-22 16:46:08 --> Severity: Error --> Maximum execution time of 30 seconds exceeded D:\sitios\MTBA-desa-procprod\system\libraries\Session\drivers\Session_files_driver.php 178
INFO - 2018-11-22 16:46:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:08 --> Controller Class Initialized
INFO - 2018-11-22 16:46:08 --> Model Class Initialized
INFO - 2018-11-22 16:46:08 --> Model Class Initialized
INFO - 2018-11-22 16:46:09 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 16:46:09 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\login.php
INFO - 2018-11-22 16:46:09 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 16:46:09 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:09 --> Total execution time: 15.6489
INFO - 2018-11-22 16:46:10 --> Config Class Initialized
INFO - 2018-11-22 16:46:10 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:10 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:10 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:10 --> URI Class Initialized
INFO - 2018-11-22 16:46:10 --> Router Class Initialized
INFO - 2018-11-22 16:46:10 --> Output Class Initialized
INFO - 2018-11-22 16:46:10 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:10 --> Input Class Initialized
INFO - 2018-11-22 16:46:10 --> Language Class Initialized
ERROR - 2018-11-22 16:46:10 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 16:46:17 --> Config Class Initialized
INFO - 2018-11-22 16:46:17 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:17 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:17 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:17 --> URI Class Initialized
INFO - 2018-11-22 16:46:17 --> Router Class Initialized
INFO - 2018-11-22 16:46:17 --> Output Class Initialized
INFO - 2018-11-22 16:46:17 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:17 --> Input Class Initialized
INFO - 2018-11-22 16:46:17 --> Language Class Initialized
INFO - 2018-11-22 16:46:18 --> Loader Class Initialized
INFO - 2018-11-22 16:46:18 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:18 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:18 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:18 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:18 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:18 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:18 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:18 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:18 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:46:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:18 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:18 --> Controller Class Initialized
INFO - 2018-11-22 16:46:18 --> Model Class Initialized
INFO - 2018-11-22 16:46:18 --> Model Class Initialized
INFO - 2018-11-22 16:46:19 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:19 --> Total execution time: 1.7181
INFO - 2018-11-22 16:46:20 --> Config Class Initialized
INFO - 2018-11-22 16:46:20 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:20 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:20 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:20 --> URI Class Initialized
INFO - 2018-11-22 16:46:20 --> Router Class Initialized
INFO - 2018-11-22 16:46:20 --> Output Class Initialized
INFO - 2018-11-22 16:46:20 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:20 --> Input Class Initialized
INFO - 2018-11-22 16:46:20 --> Language Class Initialized
INFO - 2018-11-22 16:46:20 --> Loader Class Initialized
INFO - 2018-11-22 16:46:20 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:20 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:20 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:20 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:20 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:46:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:20 --> Controller Class Initialized
INFO - 2018-11-22 16:46:20 --> Model Class Initialized
INFO - 2018-11-22 16:46:20 --> Model Class Initialized
INFO - 2018-11-22 16:46:20 --> Model Class Initialized
INFO - 2018-11-22 16:46:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 16:46:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 16:46:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 16:46:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 16:46:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 16:46:20 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 16:46:20 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:20 --> Total execution time: 0.2960
INFO - 2018-11-22 16:46:21 --> Config Class Initialized
INFO - 2018-11-22 16:46:21 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:21 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:21 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:21 --> URI Class Initialized
INFO - 2018-11-22 16:46:21 --> Router Class Initialized
INFO - 2018-11-22 16:46:21 --> Output Class Initialized
INFO - 2018-11-22 16:46:21 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:21 --> Input Class Initialized
INFO - 2018-11-22 16:46:21 --> Language Class Initialized
ERROR - 2018-11-22 16:46:21 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 16:46:23 --> Config Class Initialized
INFO - 2018-11-22 16:46:23 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:23 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:23 --> URI Class Initialized
INFO - 2018-11-22 16:46:23 --> Router Class Initialized
INFO - 2018-11-22 16:46:23 --> Output Class Initialized
INFO - 2018-11-22 16:46:23 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:23 --> Input Class Initialized
INFO - 2018-11-22 16:46:23 --> Language Class Initialized
INFO - 2018-11-22 16:46:23 --> Loader Class Initialized
INFO - 2018-11-22 16:46:23 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:23 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:23 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:23 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:23 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:23 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:23 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:23 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:23 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:23 --> Controller Class Initialized
INFO - 2018-11-22 16:46:23 --> Model Class Initialized
INFO - 2018-11-22 16:46:23 --> Model Class Initialized
INFO - 2018-11-22 16:46:23 --> Model Class Initialized
INFO - 2018-11-22 16:46:23 --> Model Class Initialized
INFO - 2018-11-22 16:46:24 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:46:24 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:24 --> Total execution time: 1.5531
INFO - 2018-11-22 16:46:28 --> Config Class Initialized
INFO - 2018-11-22 16:46:28 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:28 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:28 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:28 --> URI Class Initialized
INFO - 2018-11-22 16:46:28 --> Router Class Initialized
INFO - 2018-11-22 16:46:29 --> Output Class Initialized
INFO - 2018-11-22 16:46:29 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:29 --> Input Class Initialized
INFO - 2018-11-22 16:46:29 --> Language Class Initialized
INFO - 2018-11-22 16:46:29 --> Loader Class Initialized
INFO - 2018-11-22 16:46:29 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:29 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:29 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:29 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:29 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:29 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:29 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:29 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:29 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:46:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:29 --> Controller Class Initialized
INFO - 2018-11-22 16:46:29 --> Model Class Initialized
INFO - 2018-11-22 16:46:29 --> Model Class Initialized
INFO - 2018-11-22 16:46:29 --> Model Class Initialized
INFO - 2018-11-22 16:46:29 --> Model Class Initialized
ERROR - 2018-11-22 16:46:30 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 16:46:33 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 16:46:33 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 16:46:33 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 16:46:33 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:46:33 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:33 --> Total execution time: 5.0753
INFO - 2018-11-22 16:46:38 --> Config Class Initialized
INFO - 2018-11-22 16:46:38 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:38 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:38 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:38 --> URI Class Initialized
INFO - 2018-11-22 16:46:38 --> Router Class Initialized
INFO - 2018-11-22 16:46:38 --> Output Class Initialized
INFO - 2018-11-22 16:46:38 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:38 --> Input Class Initialized
INFO - 2018-11-22 16:46:38 --> Language Class Initialized
INFO - 2018-11-22 16:46:38 --> Loader Class Initialized
INFO - 2018-11-22 16:46:38 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:38 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:38 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:38 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:38 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:38 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:38 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:38 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:38 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:38 --> Controller Class Initialized
INFO - 2018-11-22 16:46:38 --> Model Class Initialized
INFO - 2018-11-22 16:46:38 --> Model Class Initialized
ERROR - 2018-11-22 16:46:40 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 16:46:40 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 16:46:40 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 16:46:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:46:40 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:40 --> Total execution time: 1.7111
INFO - 2018-11-22 16:46:40 --> Config Class Initialized
INFO - 2018-11-22 16:46:40 --> Config Class Initialized
INFO - 2018-11-22 16:46:40 --> Config Class Initialized
INFO - 2018-11-22 16:46:40 --> Hooks Class Initialized
INFO - 2018-11-22 16:46:40 --> Hooks Class Initialized
INFO - 2018-11-22 16:46:40 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:46:40 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:46:40 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:40 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:46:41 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:41 --> URI Class Initialized
INFO - 2018-11-22 16:46:41 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:41 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:41 --> Config Class Initialized
INFO - 2018-11-22 16:46:41 --> Router Class Initialized
INFO - 2018-11-22 16:46:41 --> Hooks Class Initialized
INFO - 2018-11-22 16:46:41 --> URI Class Initialized
INFO - 2018-11-22 16:46:41 --> URI Class Initialized
INFO - 2018-11-22 16:46:41 --> Output Class Initialized
INFO - 2018-11-22 16:46:41 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:41 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:41 --> Router Class Initialized
INFO - 2018-11-22 16:46:41 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:41 --> URI Class Initialized
INFO - 2018-11-22 16:46:41 --> Router Class Initialized
INFO - 2018-11-22 16:46:41 --> Router Class Initialized
INFO - 2018-11-22 16:46:41 --> Output Class Initialized
INFO - 2018-11-22 16:46:41 --> Security Class Initialized
DEBUG - 2018-11-22 16:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:41 --> Input Class Initialized
INFO - 2018-11-22 16:46:41 --> Output Class Initialized
INFO - 2018-11-22 16:46:41 --> Security Class Initialized
INFO - 2018-11-22 16:46:41 --> Language Class Initialized
INFO - 2018-11-22 16:46:41 --> Output Class Initialized
DEBUG - 2018-11-22 16:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:41 --> Input Class Initialized
INFO - 2018-11-22 16:46:41 --> Language Class Initialized
INFO - 2018-11-22 16:46:41 --> Loader Class Initialized
INFO - 2018-11-22 16:46:41 --> Security Class Initialized
INFO - 2018-11-22 16:46:41 --> Config Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: url_helper
DEBUG - 2018-11-22 16:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:41 --> Loader Class Initialized
INFO - 2018-11-22 16:46:41 --> Config Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:41 --> Hooks Class Initialized
INFO - 2018-11-22 16:46:41 --> Input Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: url_helper
DEBUG - 2018-11-22 16:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:41 --> Hooks Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:41 --> Input Class Initialized
INFO - 2018-11-22 16:46:41 --> Language Class Initialized
DEBUG - 2018-11-22 16:46:41 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 16:46:41 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:46:41 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:41 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:41 --> Utf8 Class Initialized
INFO - 2018-11-22 16:46:41 --> Loader Class Initialized
INFO - 2018-11-22 16:46:41 --> URI Class Initialized
INFO - 2018-11-22 16:46:41 --> URI Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:41 --> Language Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:41 --> Router Class Initialized
INFO - 2018-11-22 16:46:41 --> Loader Class Initialized
INFO - 2018-11-22 16:46:41 --> Router Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:41 --> Output Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:41 --> Output Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:41 --> Security Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:41 --> Security Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 16:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:41 --> Input Class Initialized
DEBUG - 2018-11-22 16:46:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:46:41 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:41 --> Language Class Initialized
INFO - 2018-11-22 16:46:41 --> Input Class Initialized
INFO - 2018-11-22 16:46:41 --> Database Driver Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:41 --> Loader Class Initialized
INFO - 2018-11-22 16:46:41 --> Language Class Initialized
DEBUG - 2018-11-22 16:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:41 --> Controller Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:41 --> Loader Class Initialized
INFO - 2018-11-22 16:46:41 --> Model Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: url_helper
INFO - 2018-11-22 16:46:41 --> Model Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:41 --> Final output sent to browser
INFO - 2018-11-22 16:46:41 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 16:46:41 --> Total execution time: 0.3700
INFO - 2018-11-22 16:46:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: file_helper
INFO - 2018-11-22 16:46:41 --> Database Driver Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: form_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: general_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:41 --> Database Driver Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:46:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:41 --> Database Driver Class Initialized
INFO - 2018-11-22 16:46:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:46:41 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:41 --> Controller Class Initialized
INFO - 2018-11-22 16:46:41 --> Model Class Initialized
INFO - 2018-11-22 16:46:41 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:41 --> Model Class Initialized
DEBUG - 2018-11-22 16:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 16:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:46:42 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:42 --> Total execution time: 1.8321
INFO - 2018-11-22 16:46:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:42 --> Controller Class Initialized
INFO - 2018-11-22 16:46:42 --> Model Class Initialized
INFO - 2018-11-22 16:46:42 --> Model Class Initialized
INFO - 2018-11-22 16:46:42 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:42 --> Total execution time: 1.9151
INFO - 2018-11-22 16:46:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:42 --> Controller Class Initialized
INFO - 2018-11-22 16:46:42 --> Model Class Initialized
INFO - 2018-11-22 16:46:42 --> Model Class Initialized
INFO - 2018-11-22 16:46:42 --> Model Class Initialized
INFO - 2018-11-22 16:46:42 --> Model Class Initialized
INFO - 2018-11-22 16:46:44 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:44 --> Total execution time: 3.1972
INFO - 2018-11-22 16:46:44 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:44 --> Controller Class Initialized
INFO - 2018-11-22 16:46:44 --> Model Class Initialized
INFO - 2018-11-22 16:46:44 --> Model Class Initialized
INFO - 2018-11-22 16:46:44 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:44 --> Total execution time: 3.6192
INFO - 2018-11-22 16:46:44 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:46:44 --> Controller Class Initialized
INFO - 2018-11-22 16:46:44 --> Model Class Initialized
INFO - 2018-11-22 16:46:44 --> Model Class Initialized
INFO - 2018-11-22 16:46:44 --> Final output sent to browser
DEBUG - 2018-11-22 16:46:44 --> Total execution time: 3.2842
INFO - 2018-11-22 16:47:04 --> Config Class Initialized
INFO - 2018-11-22 16:47:04 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:47:04 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:47:04 --> Utf8 Class Initialized
INFO - 2018-11-22 16:47:04 --> URI Class Initialized
INFO - 2018-11-22 16:47:04 --> Router Class Initialized
INFO - 2018-11-22 16:47:04 --> Output Class Initialized
INFO - 2018-11-22 16:47:04 --> Security Class Initialized
DEBUG - 2018-11-22 16:47:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:47:04 --> Input Class Initialized
INFO - 2018-11-22 16:47:04 --> Language Class Initialized
INFO - 2018-11-22 16:47:04 --> Loader Class Initialized
INFO - 2018-11-22 16:47:04 --> Helper loaded: url_helper
INFO - 2018-11-22 16:47:04 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:47:04 --> Helper loaded: file_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: form_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: general_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:47:05 --> Config Class Initialized
INFO - 2018-11-22 16:47:05 --> Database Driver Class Initialized
INFO - 2018-11-22 16:47:05 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:47:05 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:47:05 --> Utf8 Class Initialized
DEBUG - 2018-11-22 16:47:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:47:05 --> URI Class Initialized
INFO - 2018-11-22 16:47:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:47:05 --> Controller Class Initialized
INFO - 2018-11-22 16:47:05 --> Router Class Initialized
INFO - 2018-11-22 16:47:05 --> Model Class Initialized
INFO - 2018-11-22 16:47:05 --> Output Class Initialized
INFO - 2018-11-22 16:47:05 --> Model Class Initialized
INFO - 2018-11-22 16:47:05 --> Security Class Initialized
INFO - 2018-11-22 16:47:05 --> Final output sent to browser
DEBUG - 2018-11-22 16:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:47:05 --> Total execution time: 0.2120
INFO - 2018-11-22 16:47:05 --> Input Class Initialized
INFO - 2018-11-22 16:47:05 --> Language Class Initialized
INFO - 2018-11-22 16:47:05 --> Loader Class Initialized
INFO - 2018-11-22 16:47:05 --> Helper loaded: url_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: file_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: form_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: general_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:47:05 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:47:05 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:47:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:47:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:47:05 --> Controller Class Initialized
INFO - 2018-11-22 16:47:05 --> Model Class Initialized
INFO - 2018-11-22 16:47:05 --> Model Class Initialized
INFO - 2018-11-22 16:47:06 --> Final output sent to browser
DEBUG - 2018-11-22 16:47:06 --> Total execution time: 1.4711
INFO - 2018-11-22 16:49:04 --> Config Class Initialized
INFO - 2018-11-22 16:49:04 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:49:04 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:49:04 --> Utf8 Class Initialized
INFO - 2018-11-22 16:49:04 --> URI Class Initialized
INFO - 2018-11-22 16:49:04 --> Router Class Initialized
INFO - 2018-11-22 16:49:04 --> Output Class Initialized
INFO - 2018-11-22 16:49:04 --> Security Class Initialized
DEBUG - 2018-11-22 16:49:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:49:04 --> Input Class Initialized
INFO - 2018-11-22 16:49:04 --> Language Class Initialized
ERROR - 2018-11-22 16:49:04 --> 404 Page Not Found: PedidoTrabajo/index
INFO - 2018-11-22 16:49:27 --> Config Class Initialized
INFO - 2018-11-22 16:49:27 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:49:27 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:49:27 --> Utf8 Class Initialized
INFO - 2018-11-22 16:49:27 --> URI Class Initialized
INFO - 2018-11-22 16:49:27 --> Router Class Initialized
INFO - 2018-11-22 16:49:27 --> Output Class Initialized
INFO - 2018-11-22 16:49:27 --> Security Class Initialized
DEBUG - 2018-11-22 16:49:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:49:27 --> Input Class Initialized
INFO - 2018-11-22 16:49:27 --> Language Class Initialized
INFO - 2018-11-22 16:49:27 --> Loader Class Initialized
INFO - 2018-11-22 16:49:27 --> Helper loaded: url_helper
INFO - 2018-11-22 16:49:27 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:49:27 --> Helper loaded: file_helper
INFO - 2018-11-22 16:49:27 --> Helper loaded: form_helper
INFO - 2018-11-22 16:49:27 --> Helper loaded: general_helper
INFO - 2018-11-22 16:49:27 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:49:28 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:49:28 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:49:28 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:49:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:49:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:49:28 --> Controller Class Initialized
INFO - 2018-11-22 16:49:28 --> Model Class Initialized
INFO - 2018-11-22 16:49:28 --> Model Class Initialized
INFO - 2018-11-22 16:49:28 --> Model Class Initialized
INFO - 2018-11-22 16:49:28 --> Model Class Initialized
INFO - 2018-11-22 16:49:29 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 16:49:29 --> Final output sent to browser
DEBUG - 2018-11-22 16:49:29 --> Total execution time: 1.4481
INFO - 2018-11-22 16:49:34 --> Config Class Initialized
INFO - 2018-11-22 16:49:34 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:49:34 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:49:34 --> Utf8 Class Initialized
INFO - 2018-11-22 16:49:34 --> URI Class Initialized
INFO - 2018-11-22 16:49:34 --> Router Class Initialized
INFO - 2018-11-22 16:49:34 --> Output Class Initialized
INFO - 2018-11-22 16:49:34 --> Security Class Initialized
DEBUG - 2018-11-22 16:49:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:49:34 --> Input Class Initialized
INFO - 2018-11-22 16:49:34 --> Language Class Initialized
INFO - 2018-11-22 16:49:34 --> Loader Class Initialized
INFO - 2018-11-22 16:49:34 --> Helper loaded: url_helper
INFO - 2018-11-22 16:49:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:49:34 --> Helper loaded: file_helper
INFO - 2018-11-22 16:49:34 --> Helper loaded: form_helper
INFO - 2018-11-22 16:49:34 --> Helper loaded: general_helper
INFO - 2018-11-22 16:49:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:49:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:49:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:49:34 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:49:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:49:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:49:34 --> Controller Class Initialized
INFO - 2018-11-22 16:49:34 --> Model Class Initialized
INFO - 2018-11-22 16:49:35 --> Model Class Initialized
INFO - 2018-11-22 16:49:35 --> Model Class Initialized
INFO - 2018-11-22 16:49:35 --> Model Class Initialized
ERROR - 2018-11-22 16:49:36 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 16:49:40 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 16:49:40 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 16:49:40 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 16:49:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 16:49:40 --> Final output sent to browser
DEBUG - 2018-11-22 16:49:40 --> Total execution time: 5.9103
INFO - 2018-11-22 16:56:04 --> Config Class Initialized
INFO - 2018-11-22 16:56:04 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:56:04 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:04 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:04 --> URI Class Initialized
INFO - 2018-11-22 16:56:04 --> Router Class Initialized
INFO - 2018-11-22 16:56:04 --> Output Class Initialized
INFO - 2018-11-22 16:56:04 --> Security Class Initialized
DEBUG - 2018-11-22 16:56:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:04 --> Input Class Initialized
INFO - 2018-11-22 16:56:04 --> Language Class Initialized
INFO - 2018-11-22 16:56:04 --> Loader Class Initialized
INFO - 2018-11-22 16:56:04 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:04 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:04 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:04 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:04 --> Helper loaded: general_helper
INFO - 2018-11-22 16:56:04 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:04 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:04 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:04 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:56:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:04 --> Controller Class Initialized
INFO - 2018-11-22 16:56:04 --> Model Class Initialized
INFO - 2018-11-22 16:56:04 --> Model Class Initialized
ERROR - 2018-11-22 16:56:06 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 16:56:06 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 16:56:06 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 16:56:06 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 16:56:06 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:06 --> Total execution time: 1.8681
INFO - 2018-11-22 16:56:06 --> Config Class Initialized
INFO - 2018-11-22 16:56:06 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:56:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:06 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:06 --> URI Class Initialized
INFO - 2018-11-22 16:56:06 --> Router Class Initialized
INFO - 2018-11-22 16:56:06 --> Output Class Initialized
INFO - 2018-11-22 16:56:06 --> Security Class Initialized
INFO - 2018-11-22 16:56:06 --> Config Class Initialized
INFO - 2018-11-22 16:56:06 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:56:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:06 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:06 --> URI Class Initialized
DEBUG - 2018-11-22 16:56:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:06 --> Router Class Initialized
INFO - 2018-11-22 16:56:06 --> Config Class Initialized
INFO - 2018-11-22 16:56:06 --> Input Class Initialized
INFO - 2018-11-22 16:56:06 --> Hooks Class Initialized
INFO - 2018-11-22 16:56:06 --> Language Class Initialized
DEBUG - 2018-11-22 16:56:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:06 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:06 --> URI Class Initialized
INFO - 2018-11-22 16:56:06 --> Output Class Initialized
INFO - 2018-11-22 16:56:06 --> Loader Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:06 --> Config Class Initialized
INFO - 2018-11-22 16:56:06 --> Router Class Initialized
INFO - 2018-11-22 16:56:06 --> Hooks Class Initialized
INFO - 2018-11-22 16:56:06 --> Security Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: general_helper
INFO - 2018-11-22 16:56:06 --> Output Class Initialized
DEBUG - 2018-11-22 16:56:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:06 --> Input Class Initialized
INFO - 2018-11-22 16:56:06 --> Security Class Initialized
INFO - 2018-11-22 16:56:06 --> Config Class Initialized
DEBUG - 2018-11-22 16:56:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:06 --> Hooks Class Initialized
INFO - 2018-11-22 16:56:06 --> Input Class Initialized
INFO - 2018-11-22 16:56:06 --> Language Class Initialized
INFO - 2018-11-22 16:56:06 --> Loader Class Initialized
DEBUG - 2018-11-22 16:56:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:06 --> Config Class Initialized
DEBUG - 2018-11-22 16:56:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:06 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:06 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:06 --> Language Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:06 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:06 --> Hooks Class Initialized
INFO - 2018-11-22 16:56:06 --> URI Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:06 --> Loader Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:06 --> URI Class Initialized
DEBUG - 2018-11-22 16:56:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:06 --> Router Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:06 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:06 --> Router Class Initialized
INFO - 2018-11-22 16:56:06 --> Output Class Initialized
INFO - 2018-11-22 16:56:06 --> Output Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: general_helper
INFO - 2018-11-22 16:56:06 --> Database Driver Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:06 --> Security Class Initialized
INFO - 2018-11-22 16:56:06 --> Security Class Initialized
INFO - 2018-11-22 16:56:06 --> URI Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 16:56:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 16:56:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:06 --> Router Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:06 --> Input Class Initialized
INFO - 2018-11-22 16:56:06 --> Language Class Initialized
INFO - 2018-11-22 16:56:06 --> Input Class Initialized
INFO - 2018-11-22 16:56:06 --> Output Class Initialized
INFO - 2018-11-22 16:56:06 --> Database Driver Class Initialized
INFO - 2018-11-22 16:56:06 --> Loader Class Initialized
INFO - 2018-11-22 16:56:06 --> Language Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: url_helper
DEBUG - 2018-11-22 16:56:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:06 --> Security Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:06 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:06 --> Helper loaded: general_helper
DEBUG - 2018-11-22 16:56:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:06 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:06 --> Loader Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:06 --> Controller Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:06 --> Input Class Initialized
INFO - 2018-11-22 16:56:06 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:06 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:06 --> Model Class Initialized
INFO - 2018-11-22 16:56:06 --> Language Class Initialized
INFO - 2018-11-22 16:56:07 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:07 --> Database Driver Class Initialized
INFO - 2018-11-22 16:56:07 --> Model Class Initialized
INFO - 2018-11-22 16:56:07 --> Helper loaded: general_helper
INFO - 2018-11-22 16:56:07 --> Loader Class Initialized
INFO - 2018-11-22 16:56:07 --> Helper loaded: general_helper
DEBUG - 2018-11-22 16:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:07 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:07 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:07 --> Total execution time: 0.4440
INFO - 2018-11-22 16:56:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 16:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:07 --> Controller Class Initialized
INFO - 2018-11-22 16:56:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:07 --> Database Driver Class Initialized
INFO - 2018-11-22 16:56:07 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: general_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:07 --> Database Driver Class Initialized
INFO - 2018-11-22 16:56:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:07 --> Model Class Initialized
DEBUG - 2018-11-22 16:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:07 --> Database Driver Class Initialized
INFO - 2018-11-22 16:56:07 --> Model Class Initialized
DEBUG - 2018-11-22 16:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:07 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:07 --> Total execution time: 0.4200
INFO - 2018-11-22 16:56:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:07 --> Controller Class Initialized
INFO - 2018-11-22 16:56:07 --> Model Class Initialized
INFO - 2018-11-22 16:56:07 --> Model Class Initialized
INFO - 2018-11-22 16:56:07 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:07 --> Total execution time: 0.4840
INFO - 2018-11-22 16:56:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:07 --> Controller Class Initialized
INFO - 2018-11-22 16:56:07 --> Model Class Initialized
INFO - 2018-11-22 16:56:07 --> Model Class Initialized
DEBUG - 2018-11-22 16:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:11 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:11 --> Total execution time: 4.8063
INFO - 2018-11-22 16:56:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:11 --> Controller Class Initialized
INFO - 2018-11-22 16:56:11 --> Model Class Initialized
INFO - 2018-11-22 16:56:11 --> Model Class Initialized
INFO - 2018-11-22 16:56:11 --> Model Class Initialized
INFO - 2018-11-22 16:56:11 --> Model Class Initialized
INFO - 2018-11-22 16:56:12 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:12 --> Total execution time: 6.1624
INFO - 2018-11-22 16:56:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:12 --> Controller Class Initialized
INFO - 2018-11-22 16:56:12 --> Model Class Initialized
INFO - 2018-11-22 16:56:13 --> Model Class Initialized
INFO - 2018-11-22 16:56:13 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:13 --> Total execution time: 6.2004
INFO - 2018-11-22 16:56:24 --> Config Class Initialized
INFO - 2018-11-22 16:56:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:56:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:24 --> Config Class Initialized
INFO - 2018-11-22 16:56:24 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:24 --> URI Class Initialized
INFO - 2018-11-22 16:56:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 16:56:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 16:56:24 --> Utf8 Class Initialized
INFO - 2018-11-22 16:56:24 --> URI Class Initialized
INFO - 2018-11-22 16:56:24 --> Router Class Initialized
INFO - 2018-11-22 16:56:24 --> Output Class Initialized
INFO - 2018-11-22 16:56:24 --> Router Class Initialized
INFO - 2018-11-22 16:56:24 --> Security Class Initialized
DEBUG - 2018-11-22 16:56:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:24 --> Output Class Initialized
INFO - 2018-11-22 16:56:24 --> Security Class Initialized
INFO - 2018-11-22 16:56:24 --> Input Class Initialized
INFO - 2018-11-22 16:56:24 --> Language Class Initialized
DEBUG - 2018-11-22 16:56:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 16:56:24 --> Input Class Initialized
INFO - 2018-11-22 16:56:24 --> Language Class Initialized
INFO - 2018-11-22 16:56:24 --> Loader Class Initialized
INFO - 2018-11-22 16:56:24 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:24 --> Loader Class Initialized
INFO - 2018-11-22 16:56:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: url_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: file_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: general_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: form_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: general_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 16:56:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 16:56:24 --> Database Driver Class Initialized
INFO - 2018-11-22 16:56:24 --> Database Driver Class Initialized
DEBUG - 2018-11-22 16:56:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:24 --> Controller Class Initialized
DEBUG - 2018-11-22 16:56:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 16:56:24 --> Model Class Initialized
INFO - 2018-11-22 16:56:24 --> Model Class Initialized
INFO - 2018-11-22 16:56:24 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:24 --> Total execution time: 0.1930
INFO - 2018-11-22 16:56:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 16:56:24 --> Controller Class Initialized
INFO - 2018-11-22 16:56:24 --> Model Class Initialized
INFO - 2018-11-22 16:56:24 --> Model Class Initialized
INFO - 2018-11-22 16:56:33 --> Final output sent to browser
DEBUG - 2018-11-22 16:56:33 --> Total execution time: 9.6346
INFO - 2018-11-22 17:01:11 --> Config Class Initialized
INFO - 2018-11-22 17:01:12 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:12 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:12 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:12 --> URI Class Initialized
INFO - 2018-11-22 17:01:12 --> Router Class Initialized
INFO - 2018-11-22 17:01:12 --> Output Class Initialized
INFO - 2018-11-22 17:01:12 --> Security Class Initialized
DEBUG - 2018-11-22 17:01:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:12 --> Input Class Initialized
INFO - 2018-11-22 17:01:12 --> Language Class Initialized
INFO - 2018-11-22 17:01:12 --> Loader Class Initialized
INFO - 2018-11-22 17:01:12 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:12 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:12 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:12 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:12 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:12 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:12 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:12 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:12 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:12 --> Controller Class Initialized
INFO - 2018-11-22 17:01:12 --> Model Class Initialized
INFO - 2018-11-22 17:01:12 --> Model Class Initialized
INFO - 2018-11-22 17:01:12 --> Model Class Initialized
INFO - 2018-11-22 17:01:12 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 17:01:12 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 17:01:12 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 17:01:12 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 17:01:12 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 17:01:12 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 17:01:12 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:12 --> Total execution time: 0.5230
INFO - 2018-11-22 17:01:12 --> Config Class Initialized
INFO - 2018-11-22 17:01:12 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:12 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:13 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:13 --> URI Class Initialized
INFO - 2018-11-22 17:01:13 --> Router Class Initialized
INFO - 2018-11-22 17:01:13 --> Output Class Initialized
INFO - 2018-11-22 17:01:13 --> Security Class Initialized
DEBUG - 2018-11-22 17:01:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:13 --> Input Class Initialized
INFO - 2018-11-22 17:01:13 --> Language Class Initialized
ERROR - 2018-11-22 17:01:13 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 17:01:16 --> Config Class Initialized
INFO - 2018-11-22 17:01:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:16 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:16 --> URI Class Initialized
INFO - 2018-11-22 17:01:16 --> Router Class Initialized
INFO - 2018-11-22 17:01:16 --> Output Class Initialized
INFO - 2018-11-22 17:01:16 --> Security Class Initialized
DEBUG - 2018-11-22 17:01:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:16 --> Input Class Initialized
INFO - 2018-11-22 17:01:16 --> Language Class Initialized
INFO - 2018-11-22 17:01:16 --> Loader Class Initialized
INFO - 2018-11-22 17:01:16 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:16 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:16 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:16 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:16 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:01:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:16 --> Controller Class Initialized
INFO - 2018-11-22 17:01:16 --> Model Class Initialized
INFO - 2018-11-22 17:01:16 --> Model Class Initialized
INFO - 2018-11-22 17:01:16 --> Model Class Initialized
INFO - 2018-11-22 17:01:16 --> Model Class Initialized
INFO - 2018-11-22 17:01:17 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:01:17 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:17 --> Total execution time: 1.2221
INFO - 2018-11-22 17:01:23 --> Config Class Initialized
INFO - 2018-11-22 17:01:23 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:23 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:23 --> URI Class Initialized
INFO - 2018-11-22 17:01:23 --> Router Class Initialized
INFO - 2018-11-22 17:01:23 --> Output Class Initialized
INFO - 2018-11-22 17:01:23 --> Security Class Initialized
DEBUG - 2018-11-22 17:01:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:23 --> Input Class Initialized
INFO - 2018-11-22 17:01:23 --> Language Class Initialized
INFO - 2018-11-22 17:01:23 --> Loader Class Initialized
INFO - 2018-11-22 17:01:23 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:23 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:23 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:23 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:23 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:23 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:23 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:23 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:23 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:01:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:23 --> Controller Class Initialized
INFO - 2018-11-22 17:01:23 --> Model Class Initialized
INFO - 2018-11-22 17:01:23 --> Model Class Initialized
INFO - 2018-11-22 17:01:23 --> Model Class Initialized
INFO - 2018-11-22 17:01:23 --> Model Class Initialized
ERROR - 2018-11-22 17:01:24 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:01:27 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:01:27 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:01:27 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:01:27 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:01:27 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:27 --> Total execution time: 4.7533
INFO - 2018-11-22 17:01:31 --> Config Class Initialized
INFO - 2018-11-22 17:01:31 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:31 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:31 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:31 --> URI Class Initialized
INFO - 2018-11-22 17:01:31 --> Router Class Initialized
INFO - 2018-11-22 17:01:31 --> Output Class Initialized
INFO - 2018-11-22 17:01:31 --> Security Class Initialized
DEBUG - 2018-11-22 17:01:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:31 --> Input Class Initialized
INFO - 2018-11-22 17:01:31 --> Language Class Initialized
INFO - 2018-11-22 17:01:31 --> Loader Class Initialized
INFO - 2018-11-22 17:01:31 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:31 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:31 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:31 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:31 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:32 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:01:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:32 --> Controller Class Initialized
INFO - 2018-11-22 17:01:32 --> Model Class Initialized
INFO - 2018-11-22 17:01:32 --> Model Class Initialized
ERROR - 2018-11-22 17:01:33 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:01:33 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:01:33 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:01:33 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:01:33 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:33 --> Total execution time: 1.7191
INFO - 2018-11-22 17:01:34 --> Config Class Initialized
INFO - 2018-11-22 17:01:34 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:34 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:34 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:34 --> URI Class Initialized
INFO - 2018-11-22 17:01:34 --> Router Class Initialized
INFO - 2018-11-22 17:01:34 --> Output Class Initialized
INFO - 2018-11-22 17:01:34 --> Security Class Initialized
DEBUG - 2018-11-22 17:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:34 --> Input Class Initialized
INFO - 2018-11-22 17:01:34 --> Language Class Initialized
INFO - 2018-11-22 17:01:34 --> Loader Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:34 --> Config Class Initialized
INFO - 2018-11-22 17:01:34 --> Hooks Class Initialized
INFO - 2018-11-22 17:01:34 --> Config Class Initialized
INFO - 2018-11-22 17:01:34 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:34 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:34 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:34 --> Config Class Initialized
DEBUG - 2018-11-22 17:01:34 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:34 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:34 --> Hooks Class Initialized
INFO - 2018-11-22 17:01:34 --> Config Class Initialized
INFO - 2018-11-22 17:01:34 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:34 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:34 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:34 --> URI Class Initialized
INFO - 2018-11-22 17:01:34 --> Config Class Initialized
INFO - 2018-11-22 17:01:34 --> Hooks Class Initialized
INFO - 2018-11-22 17:01:34 --> Router Class Initialized
INFO - 2018-11-22 17:01:34 --> Output Class Initialized
DEBUG - 2018-11-22 17:01:34 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:01:34 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:34 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:34 --> Security Class Initialized
INFO - 2018-11-22 17:01:34 --> URI Class Initialized
INFO - 2018-11-22 17:01:34 --> Utf8 Class Initialized
DEBUG - 2018-11-22 17:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:34 --> Router Class Initialized
INFO - 2018-11-22 17:01:34 --> URI Class Initialized
INFO - 2018-11-22 17:01:34 --> Input Class Initialized
INFO - 2018-11-22 17:01:34 --> Output Class Initialized
INFO - 2018-11-22 17:01:34 --> Router Class Initialized
INFO - 2018-11-22 17:01:34 --> Security Class Initialized
INFO - 2018-11-22 17:01:34 --> Output Class Initialized
INFO - 2018-11-22 17:01:34 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:34 --> URI Class Initialized
INFO - 2018-11-22 17:01:34 --> Router Class Initialized
INFO - 2018-11-22 17:01:34 --> URI Class Initialized
INFO - 2018-11-22 17:01:34 --> Output Class Initialized
DEBUG - 2018-11-22 17:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:34 --> Security Class Initialized
INFO - 2018-11-22 17:01:34 --> Router Class Initialized
INFO - 2018-11-22 17:01:34 --> Input Class Initialized
DEBUG - 2018-11-22 17:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:34 --> Input Class Initialized
INFO - 2018-11-22 17:01:34 --> Language Class Initialized
INFO - 2018-11-22 17:01:34 --> Output Class Initialized
INFO - 2018-11-22 17:01:34 --> Language Class Initialized
INFO - 2018-11-22 17:01:34 --> Loader Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:34 --> Security Class Initialized
INFO - 2018-11-22 17:01:34 --> Loader Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: file_helper
DEBUG - 2018-11-22 17:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:34 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:34 --> Input Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:34 --> Language Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:34 --> Loader Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:34 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:34 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:34 --> Language Class Initialized
INFO - 2018-11-22 17:01:34 --> Security Class Initialized
INFO - 2018-11-22 17:01:34 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:34 --> Loader Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:01:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:34 --> Input Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:34 --> Language Class Initialized
INFO - 2018-11-22 17:01:34 --> Loader Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:34 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:34 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:34 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 17:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:34 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 17:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:34 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:34 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:34 --> Controller Class Initialized
INFO - 2018-11-22 17:01:34 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:34 --> Model Class Initialized
INFO - 2018-11-22 17:01:34 --> Model Class Initialized
INFO - 2018-11-22 17:01:34 --> Model Class Initialized
INFO - 2018-11-22 17:01:34 --> Model Class Initialized
DEBUG - 2018-11-22 17:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:36 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:36 --> Total execution time: 1.7271
INFO - 2018-11-22 17:01:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:36 --> Controller Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:36 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:36 --> Total execution time: 1.7571
INFO - 2018-11-22 17:01:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:36 --> Controller Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:36 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:36 --> Total execution time: 1.8621
INFO - 2018-11-22 17:01:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:36 --> Controller Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:36 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:36 --> Total execution time: 2.3551
INFO - 2018-11-22 17:01:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:36 --> Controller Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:36 --> Model Class Initialized
INFO - 2018-11-22 17:01:37 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:37 --> Total execution time: 3.4072
INFO - 2018-11-22 17:01:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:37 --> Controller Class Initialized
INFO - 2018-11-22 17:01:37 --> Model Class Initialized
INFO - 2018-11-22 17:01:37 --> Model Class Initialized
INFO - 2018-11-22 17:01:37 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:37 --> Total execution time: 3.3902
INFO - 2018-11-22 17:01:54 --> Config Class Initialized
INFO - 2018-11-22 17:01:54 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:01:54 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:54 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:54 --> URI Class Initialized
INFO - 2018-11-22 17:01:54 --> Router Class Initialized
INFO - 2018-11-22 17:01:54 --> Config Class Initialized
INFO - 2018-11-22 17:01:54 --> Hooks Class Initialized
INFO - 2018-11-22 17:01:54 --> Output Class Initialized
DEBUG - 2018-11-22 17:01:54 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:01:54 --> Security Class Initialized
INFO - 2018-11-22 17:01:54 --> Utf8 Class Initialized
INFO - 2018-11-22 17:01:54 --> URI Class Initialized
DEBUG - 2018-11-22 17:01:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:54 --> Input Class Initialized
INFO - 2018-11-22 17:01:54 --> Router Class Initialized
INFO - 2018-11-22 17:01:54 --> Language Class Initialized
INFO - 2018-11-22 17:01:54 --> Output Class Initialized
INFO - 2018-11-22 17:01:54 --> Security Class Initialized
INFO - 2018-11-22 17:01:54 --> Loader Class Initialized
DEBUG - 2018-11-22 17:01:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:01:54 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:54 --> Input Class Initialized
INFO - 2018-11-22 17:01:54 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:54 --> Language Class Initialized
INFO - 2018-11-22 17:01:54 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:54 --> Loader Class Initialized
INFO - 2018-11-22 17:01:54 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: url_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: file_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: form_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: general_helper
INFO - 2018-11-22 17:01:54 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:54 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:01:54 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:54 --> Database Driver Class Initialized
INFO - 2018-11-22 17:01:54 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:54 --> Controller Class Initialized
INFO - 2018-11-22 17:01:54 --> Model Class Initialized
INFO - 2018-11-22 17:01:54 --> Model Class Initialized
DEBUG - 2018-11-22 17:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:01:55 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:55 --> Total execution time: 1.4321
INFO - 2018-11-22 17:01:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:01:55 --> Controller Class Initialized
INFO - 2018-11-22 17:01:55 --> Model Class Initialized
INFO - 2018-11-22 17:01:55 --> Model Class Initialized
INFO - 2018-11-22 17:01:55 --> Final output sent to browser
DEBUG - 2018-11-22 17:01:55 --> Total execution time: 1.5351
INFO - 2018-11-22 17:02:12 --> Config Class Initialized
INFO - 2018-11-22 17:02:12 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:02:12 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:02:12 --> Utf8 Class Initialized
INFO - 2018-11-22 17:02:12 --> URI Class Initialized
INFO - 2018-11-22 17:02:12 --> Router Class Initialized
INFO - 2018-11-22 17:02:12 --> Output Class Initialized
INFO - 2018-11-22 17:02:12 --> Security Class Initialized
DEBUG - 2018-11-22 17:02:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:02:12 --> Input Class Initialized
INFO - 2018-11-22 17:02:12 --> Language Class Initialized
INFO - 2018-11-22 17:02:12 --> Loader Class Initialized
INFO - 2018-11-22 17:02:12 --> Helper loaded: url_helper
INFO - 2018-11-22 17:02:12 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:02:12 --> Helper loaded: file_helper
INFO - 2018-11-22 17:02:12 --> Helper loaded: form_helper
INFO - 2018-11-22 17:02:12 --> Config Class Initialized
INFO - 2018-11-22 17:02:12 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:02:12 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:02:12 --> Utf8 Class Initialized
INFO - 2018-11-22 17:02:12 --> Helper loaded: general_helper
INFO - 2018-11-22 17:02:12 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:02:12 --> URI Class Initialized
INFO - 2018-11-22 17:02:12 --> Router Class Initialized
INFO - 2018-11-22 17:02:12 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:02:12 --> Output Class Initialized
INFO - 2018-11-22 17:02:12 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:02:12 --> Security Class Initialized
DEBUG - 2018-11-22 17:02:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:02:12 --> Input Class Initialized
INFO - 2018-11-22 17:02:12 --> Language Class Initialized
INFO - 2018-11-22 17:02:12 --> Database Driver Class Initialized
INFO - 2018-11-22 17:02:12 --> Loader Class Initialized
INFO - 2018-11-22 17:02:12 --> Helper loaded: url_helper
INFO - 2018-11-22 17:02:12 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 17:02:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:02:12 --> Helper loaded: file_helper
INFO - 2018-11-22 17:02:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:02:12 --> Controller Class Initialized
INFO - 2018-11-22 17:02:13 --> Helper loaded: form_helper
INFO - 2018-11-22 17:02:13 --> Helper loaded: general_helper
INFO - 2018-11-22 17:02:13 --> Model Class Initialized
INFO - 2018-11-22 17:02:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:02:13 --> Model Class Initialized
INFO - 2018-11-22 17:02:13 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:02:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:02:13 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:02:13 --> Final output sent to browser
DEBUG - 2018-11-22 17:02:13 --> Total execution time: 0.3340
INFO - 2018-11-22 17:02:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:02:13 --> Controller Class Initialized
INFO - 2018-11-22 17:02:13 --> Model Class Initialized
INFO - 2018-11-22 17:02:13 --> Model Class Initialized
INFO - 2018-11-22 17:02:13 --> Final output sent to browser
DEBUG - 2018-11-22 17:02:13 --> Total execution time: 0.2160
INFO - 2018-11-22 17:02:20 --> Config Class Initialized
INFO - 2018-11-22 17:02:20 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:02:20 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:02:20 --> Utf8 Class Initialized
INFO - 2018-11-22 17:02:20 --> URI Class Initialized
INFO - 2018-11-22 17:02:20 --> Router Class Initialized
INFO - 2018-11-22 17:02:20 --> Output Class Initialized
INFO - 2018-11-22 17:02:20 --> Security Class Initialized
DEBUG - 2018-11-22 17:02:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:02:20 --> Input Class Initialized
INFO - 2018-11-22 17:02:20 --> Language Class Initialized
INFO - 2018-11-22 17:02:20 --> Loader Class Initialized
INFO - 2018-11-22 17:02:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:02:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:02:20 --> Helper loaded: file_helper
INFO - 2018-11-22 17:02:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:02:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:02:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:02:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:02:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:02:20 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:02:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:02:20 --> Controller Class Initialized
INFO - 2018-11-22 17:02:20 --> Model Class Initialized
INFO - 2018-11-22 17:02:20 --> Model Class Initialized
INFO - 2018-11-22 17:02:20 --> Final output sent to browser
DEBUG - 2018-11-22 17:02:20 --> Total execution time: 0.1580
INFO - 2018-11-22 17:03:40 --> Config Class Initialized
INFO - 2018-11-22 17:03:40 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:40 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:40 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:40 --> URI Class Initialized
INFO - 2018-11-22 17:03:40 --> Router Class Initialized
INFO - 2018-11-22 17:03:40 --> Output Class Initialized
INFO - 2018-11-22 17:03:40 --> Security Class Initialized
DEBUG - 2018-11-22 17:03:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:40 --> Input Class Initialized
INFO - 2018-11-22 17:03:40 --> Language Class Initialized
INFO - 2018-11-22 17:03:40 --> Loader Class Initialized
INFO - 2018-11-22 17:03:40 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:40 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:40 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:40 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:40 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:40 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:40 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:40 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:40 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:03:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:40 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:40 --> Controller Class Initialized
INFO - 2018-11-22 17:03:40 --> Model Class Initialized
INFO - 2018-11-22 17:03:40 --> Model Class Initialized
INFO - 2018-11-22 17:03:40 --> Model Class Initialized
INFO - 2018-11-22 17:03:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\InicioTrabajo/list.php
INFO - 2018-11-22 17:03:40 --> Final output sent to browser
DEBUG - 2018-11-22 17:03:40 --> Total execution time: 0.5990
INFO - 2018-11-22 17:03:41 --> Config Class Initialized
INFO - 2018-11-22 17:03:41 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:41 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:41 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:41 --> URI Class Initialized
INFO - 2018-11-22 17:03:41 --> Router Class Initialized
INFO - 2018-11-22 17:03:41 --> Output Class Initialized
INFO - 2018-11-22 17:03:41 --> Security Class Initialized
DEBUG - 2018-11-22 17:03:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:41 --> Input Class Initialized
INFO - 2018-11-22 17:03:41 --> Language Class Initialized
INFO - 2018-11-22 17:03:41 --> Loader Class Initialized
INFO - 2018-11-22 17:03:41 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:41 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:41 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:42 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:42 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:42 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:42 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:42 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:03:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:42 --> Controller Class Initialized
INFO - 2018-11-22 17:03:42 --> Model Class Initialized
INFO - 2018-11-22 17:03:42 --> Model Class Initialized
INFO - 2018-11-22 17:03:42 --> Model Class Initialized
INFO - 2018-11-22 17:03:42 --> Model Class Initialized
INFO - 2018-11-22 17:03:43 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:03:43 --> Final output sent to browser
DEBUG - 2018-11-22 17:03:43 --> Total execution time: 1.4111
INFO - 2018-11-22 17:03:44 --> Config Class Initialized
INFO - 2018-11-22 17:03:44 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:44 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:44 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:44 --> URI Class Initialized
INFO - 2018-11-22 17:03:44 --> Router Class Initialized
INFO - 2018-11-22 17:03:44 --> Output Class Initialized
INFO - 2018-11-22 17:03:44 --> Security Class Initialized
DEBUG - 2018-11-22 17:03:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:44 --> Input Class Initialized
INFO - 2018-11-22 17:03:44 --> Language Class Initialized
INFO - 2018-11-22 17:03:44 --> Loader Class Initialized
INFO - 2018-11-22 17:03:44 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:44 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:44 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:44 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:44 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:44 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:44 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:44 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:44 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:45 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:45 --> Controller Class Initialized
INFO - 2018-11-22 17:03:45 --> Model Class Initialized
INFO - 2018-11-22 17:03:45 --> Model Class Initialized
INFO - 2018-11-22 17:03:45 --> Model Class Initialized
INFO - 2018-11-22 17:03:45 --> Model Class Initialized
ERROR - 2018-11-22 17:03:46 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:03:49 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:03:49 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:03:49 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:03:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:03:49 --> Final output sent to browser
DEBUG - 2018-11-22 17:03:49 --> Total execution time: 5.0273
INFO - 2018-11-22 17:03:53 --> Config Class Initialized
INFO - 2018-11-22 17:03:53 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:53 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:53 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:53 --> URI Class Initialized
INFO - 2018-11-22 17:03:53 --> Router Class Initialized
INFO - 2018-11-22 17:03:53 --> Output Class Initialized
INFO - 2018-11-22 17:03:53 --> Security Class Initialized
DEBUG - 2018-11-22 17:03:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:53 --> Input Class Initialized
INFO - 2018-11-22 17:03:53 --> Language Class Initialized
INFO - 2018-11-22 17:03:53 --> Loader Class Initialized
INFO - 2018-11-22 17:03:53 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:53 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:53 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:53 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:53 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:53 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:53 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:53 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:53 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:53 --> Controller Class Initialized
INFO - 2018-11-22 17:03:53 --> Model Class Initialized
INFO - 2018-11-22 17:03:53 --> Model Class Initialized
ERROR - 2018-11-22 17:03:54 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:03:54 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:03:54 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:03:54 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:03:54 --> Final output sent to browser
DEBUG - 2018-11-22 17:03:54 --> Total execution time: 1.5141
INFO - 2018-11-22 17:03:55 --> Config Class Initialized
INFO - 2018-11-22 17:03:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:55 --> URI Class Initialized
INFO - 2018-11-22 17:03:55 --> Router Class Initialized
INFO - 2018-11-22 17:03:55 --> Output Class Initialized
INFO - 2018-11-22 17:03:55 --> Security Class Initialized
DEBUG - 2018-11-22 17:03:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:55 --> Input Class Initialized
INFO - 2018-11-22 17:03:55 --> Language Class Initialized
INFO - 2018-11-22 17:03:55 --> Loader Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:55 --> Config Class Initialized
INFO - 2018-11-22 17:03:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:55 --> URI Class Initialized
INFO - 2018-11-22 17:03:55 --> Router Class Initialized
INFO - 2018-11-22 17:03:55 --> Output Class Initialized
INFO - 2018-11-22 17:03:55 --> Security Class Initialized
INFO - 2018-11-22 17:03:55 --> Config Class Initialized
INFO - 2018-11-22 17:03:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:55 --> Input Class Initialized
INFO - 2018-11-22 17:03:55 --> Language Class Initialized
DEBUG - 2018-11-22 17:03:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:55 --> Config Class Initialized
INFO - 2018-11-22 17:03:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:03:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:55 --> Loader Class Initialized
INFO - 2018-11-22 17:03:55 --> URI Class Initialized
INFO - 2018-11-22 17:03:55 --> URI Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:55 --> Router Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:55 --> Router Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:55 --> Output Class Initialized
INFO - 2018-11-22 17:03:55 --> Output Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:55 --> Security Class Initialized
INFO - 2018-11-22 17:03:55 --> Config Class Initialized
INFO - 2018-11-22 17:03:55 --> Hooks Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:55 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:03:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:55 --> Security Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 17:03:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:55 --> URI Class Initialized
INFO - 2018-11-22 17:03:55 --> Input Class Initialized
DEBUG - 2018-11-22 17:03:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:55 --> Input Class Initialized
INFO - 2018-11-22 17:03:55 --> Router Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:55 --> Output Class Initialized
INFO - 2018-11-22 17:03:55 --> Security Class Initialized
DEBUG - 2018-11-22 17:03:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:03:55 --> Input Class Initialized
INFO - 2018-11-22 17:03:55 --> Language Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:55 --> Language Class Initialized
INFO - 2018-11-22 17:03:55 --> Language Class Initialized
INFO - 2018-11-22 17:03:55 --> Loader Class Initialized
INFO - 2018-11-22 17:03:55 --> Loader Class Initialized
INFO - 2018-11-22 17:03:55 --> Loader Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:55 --> Database Driver Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: url_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:55 --> Database Driver Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 17:03:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:55 --> Controller Class Initialized
INFO - 2018-11-22 17:03:55 --> Model Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:55 --> Config Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:55 --> Hooks Class Initialized
INFO - 2018-11-22 17:03:55 --> Model Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:03:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:03:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:55 --> Database Driver Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:03:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:03:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:55 --> Final output sent to browser
INFO - 2018-11-22 17:03:55 --> URI Class Initialized
DEBUG - 2018-11-22 17:03:55 --> Total execution time: 0.7090
INFO - 2018-11-22 17:03:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:03:55 --> Router Class Initialized
INFO - 2018-11-22 17:03:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:55 --> Output Class Initialized
INFO - 2018-11-22 17:03:55 --> Security Class Initialized
INFO - 2018-11-22 17:03:55 --> Controller Class Initialized
INFO - 2018-11-22 17:03:55 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:03:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:03:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:55 --> Model Class Initialized
INFO - 2018-11-22 17:03:55 --> Input Class Initialized
INFO - 2018-11-22 17:03:55 --> Model Class Initialized
INFO - 2018-11-22 17:03:55 --> Language Class Initialized
DEBUG - 2018-11-22 17:03:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:03:55 --> Final output sent to browser
INFO - 2018-11-22 17:03:55 --> Loader Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:03:55 --> Total execution time: 0.4850
INFO - 2018-11-22 17:03:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:03:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:55 --> Controller Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:03:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:03:55 --> Model Class Initialized
INFO - 2018-11-22 17:03:55 --> Helper loaded: general_helper
INFO - 2018-11-22 17:03:55 --> Model Class Initialized
INFO - 2018-11-22 17:03:56 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:03:56 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:03:56 --> Final output sent to browser
INFO - 2018-11-22 17:03:56 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:03:56 --> Total execution time: 0.3980
INFO - 2018-11-22 17:03:56 --> Database Driver Class Initialized
INFO - 2018-11-22 17:03:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:56 --> Controller Class Initialized
INFO - 2018-11-22 17:03:56 --> Model Class Initialized
INFO - 2018-11-22 17:03:56 --> Model Class Initialized
INFO - 2018-11-22 17:03:56 --> Final output sent to browser
DEBUG - 2018-11-22 17:03:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:03:56 --> Total execution time: 0.6440
INFO - 2018-11-22 17:03:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:56 --> Controller Class Initialized
INFO - 2018-11-22 17:03:56 --> Model Class Initialized
INFO - 2018-11-22 17:03:56 --> Model Class Initialized
INFO - 2018-11-22 17:03:57 --> Final output sent to browser
DEBUG - 2018-11-22 17:03:57 --> Total execution time: 1.8561
INFO - 2018-11-22 17:03:57 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:03:57 --> Controller Class Initialized
INFO - 2018-11-22 17:03:57 --> Model Class Initialized
INFO - 2018-11-22 17:03:57 --> Model Class Initialized
INFO - 2018-11-22 17:03:57 --> Model Class Initialized
INFO - 2018-11-22 17:03:57 --> Model Class Initialized
INFO - 2018-11-22 17:04:00 --> Final output sent to browser
DEBUG - 2018-11-22 17:04:00 --> Total execution time: 4.3683
INFO - 2018-11-22 17:04:07 --> Config Class Initialized
INFO - 2018-11-22 17:04:07 --> Config Class Initialized
INFO - 2018-11-22 17:04:07 --> Hooks Class Initialized
INFO - 2018-11-22 17:04:07 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:04:07 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:04:07 --> Utf8 Class Initialized
INFO - 2018-11-22 17:04:07 --> URI Class Initialized
DEBUG - 2018-11-22 17:04:07 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:04:07 --> Router Class Initialized
INFO - 2018-11-22 17:04:07 --> Output Class Initialized
INFO - 2018-11-22 17:04:07 --> Utf8 Class Initialized
INFO - 2018-11-22 17:04:07 --> Security Class Initialized
INFO - 2018-11-22 17:04:07 --> URI Class Initialized
DEBUG - 2018-11-22 17:04:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:04:07 --> Router Class Initialized
INFO - 2018-11-22 17:04:07 --> Input Class Initialized
INFO - 2018-11-22 17:04:07 --> Output Class Initialized
INFO - 2018-11-22 17:04:07 --> Language Class Initialized
INFO - 2018-11-22 17:04:07 --> Security Class Initialized
DEBUG - 2018-11-22 17:04:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:04:07 --> Input Class Initialized
INFO - 2018-11-22 17:04:07 --> Loader Class Initialized
INFO - 2018-11-22 17:04:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:04:07 --> Language Class Initialized
INFO - 2018-11-22 17:04:07 --> Helper loaded: file_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: form_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: general_helper
INFO - 2018-11-22 17:04:07 --> Loader Class Initialized
INFO - 2018-11-22 17:04:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: file_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: form_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: general_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:04:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:04:07 --> Database Driver Class Initialized
INFO - 2018-11-22 17:04:07 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:04:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:04:07 --> Controller Class Initialized
INFO - 2018-11-22 17:04:07 --> Model Class Initialized
INFO - 2018-11-22 17:04:07 --> Model Class Initialized
INFO - 2018-11-22 17:04:08 --> Final output sent to browser
DEBUG - 2018-11-22 17:04:08 --> Total execution time: 0.2720
INFO - 2018-11-22 17:04:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:04:08 --> Controller Class Initialized
INFO - 2018-11-22 17:04:08 --> Model Class Initialized
INFO - 2018-11-22 17:04:08 --> Model Class Initialized
INFO - 2018-11-22 17:04:10 --> Final output sent to browser
DEBUG - 2018-11-22 17:04:10 --> Total execution time: 3.0932
INFO - 2018-11-22 17:04:16 --> Config Class Initialized
INFO - 2018-11-22 17:04:16 --> Config Class Initialized
INFO - 2018-11-22 17:04:16 --> Hooks Class Initialized
INFO - 2018-11-22 17:04:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:04:16 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:04:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:04:16 --> Utf8 Class Initialized
INFO - 2018-11-22 17:04:16 --> Utf8 Class Initialized
INFO - 2018-11-22 17:04:16 --> URI Class Initialized
INFO - 2018-11-22 17:04:16 --> Router Class Initialized
INFO - 2018-11-22 17:04:16 --> URI Class Initialized
INFO - 2018-11-22 17:04:16 --> Output Class Initialized
INFO - 2018-11-22 17:04:16 --> Security Class Initialized
DEBUG - 2018-11-22 17:04:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:04:16 --> Router Class Initialized
INFO - 2018-11-22 17:04:16 --> Output Class Initialized
INFO - 2018-11-22 17:04:16 --> Input Class Initialized
INFO - 2018-11-22 17:04:16 --> Language Class Initialized
INFO - 2018-11-22 17:04:16 --> Security Class Initialized
DEBUG - 2018-11-22 17:04:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:04:16 --> Loader Class Initialized
INFO - 2018-11-22 17:04:16 --> Input Class Initialized
INFO - 2018-11-22 17:04:16 --> Language Class Initialized
INFO - 2018-11-22 17:04:16 --> Helper loaded: url_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:04:16 --> Loader Class Initialized
INFO - 2018-11-22 17:04:16 --> Helper loaded: file_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: url_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: form_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: general_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: file_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: form_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: general_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:04:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:04:16 --> Database Driver Class Initialized
INFO - 2018-11-22 17:04:16 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:04:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:04:16 --> Controller Class Initialized
INFO - 2018-11-22 17:04:16 --> Model Class Initialized
INFO - 2018-11-22 17:04:16 --> Model Class Initialized
INFO - 2018-11-22 17:04:16 --> Final output sent to browser
DEBUG - 2018-11-22 17:04:16 --> Total execution time: 0.2250
INFO - 2018-11-22 17:04:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:04:16 --> Controller Class Initialized
INFO - 2018-11-22 17:04:16 --> Model Class Initialized
INFO - 2018-11-22 17:04:16 --> Model Class Initialized
INFO - 2018-11-22 17:04:16 --> Final output sent to browser
DEBUG - 2018-11-22 17:04:16 --> Total execution time: 0.2520
INFO - 2018-11-22 17:04:20 --> Config Class Initialized
INFO - 2018-11-22 17:04:20 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:04:20 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:04:20 --> Utf8 Class Initialized
INFO - 2018-11-22 17:04:20 --> URI Class Initialized
INFO - 2018-11-22 17:04:20 --> Router Class Initialized
INFO - 2018-11-22 17:04:20 --> Output Class Initialized
INFO - 2018-11-22 17:04:20 --> Security Class Initialized
DEBUG - 2018-11-22 17:04:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:04:20 --> Input Class Initialized
INFO - 2018-11-22 17:04:20 --> Language Class Initialized
INFO - 2018-11-22 17:04:20 --> Loader Class Initialized
INFO - 2018-11-22 17:04:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:04:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:04:20 --> Helper loaded: file_helper
INFO - 2018-11-22 17:04:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:04:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:04:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:04:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:04:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:04:20 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:04:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:04:20 --> Controller Class Initialized
INFO - 2018-11-22 17:04:20 --> Model Class Initialized
INFO - 2018-11-22 17:04:20 --> Model Class Initialized
INFO - 2018-11-22 17:04:20 --> Final output sent to browser
DEBUG - 2018-11-22 17:04:20 --> Total execution time: 0.1540
INFO - 2018-11-22 17:06:03 --> Config Class Initialized
INFO - 2018-11-22 17:06:03 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:03 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:03 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:03 --> URI Class Initialized
INFO - 2018-11-22 17:06:03 --> Router Class Initialized
INFO - 2018-11-22 17:06:03 --> Output Class Initialized
INFO - 2018-11-22 17:06:03 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:03 --> Input Class Initialized
INFO - 2018-11-22 17:06:03 --> Language Class Initialized
INFO - 2018-11-22 17:06:03 --> Loader Class Initialized
INFO - 2018-11-22 17:06:03 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:03 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:03 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:03 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:03 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:04 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:04 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:04 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:04 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:04 --> Controller Class Initialized
INFO - 2018-11-22 17:06:04 --> Model Class Initialized
INFO - 2018-11-22 17:06:04 --> Model Class Initialized
INFO - 2018-11-22 17:06:04 --> Model Class Initialized
INFO - 2018-11-22 17:06:04 --> Model Class Initialized
INFO - 2018-11-22 17:06:05 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:06:05 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:05 --> Total execution time: 1.5971
INFO - 2018-11-22 17:06:07 --> Config Class Initialized
INFO - 2018-11-22 17:06:07 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:07 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:07 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:07 --> URI Class Initialized
INFO - 2018-11-22 17:06:07 --> Router Class Initialized
INFO - 2018-11-22 17:06:07 --> Output Class Initialized
INFO - 2018-11-22 17:06:07 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:07 --> Input Class Initialized
INFO - 2018-11-22 17:06:07 --> Language Class Initialized
INFO - 2018-11-22 17:06:07 --> Loader Class Initialized
INFO - 2018-11-22 17:06:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:07 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:07 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:07 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:07 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:07 --> Controller Class Initialized
INFO - 2018-11-22 17:06:07 --> Model Class Initialized
INFO - 2018-11-22 17:06:07 --> Model Class Initialized
INFO - 2018-11-22 17:06:07 --> Model Class Initialized
INFO - 2018-11-22 17:06:07 --> Model Class Initialized
ERROR - 2018-11-22 17:06:09 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:06:13 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:06:13 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:06:13 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:06:13 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:06:13 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:13 --> Total execution time: 6.4884
INFO - 2018-11-22 17:06:17 --> Config Class Initialized
INFO - 2018-11-22 17:06:17 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:17 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:17 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:17 --> URI Class Initialized
INFO - 2018-11-22 17:06:17 --> Router Class Initialized
INFO - 2018-11-22 17:06:17 --> Output Class Initialized
INFO - 2018-11-22 17:06:17 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:17 --> Input Class Initialized
INFO - 2018-11-22 17:06:17 --> Language Class Initialized
INFO - 2018-11-22 17:06:17 --> Loader Class Initialized
INFO - 2018-11-22 17:06:17 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:17 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:17 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:17 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:17 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:17 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:17 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:17 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:17 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:18 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:18 --> Controller Class Initialized
INFO - 2018-11-22 17:06:18 --> Model Class Initialized
INFO - 2018-11-22 17:06:18 --> Model Class Initialized
ERROR - 2018-11-22 17:06:19 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:06:19 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:06:19 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:06:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:06:19 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:19 --> Total execution time: 1.6451
INFO - 2018-11-22 17:06:19 --> Config Class Initialized
INFO - 2018-11-22 17:06:19 --> Hooks Class Initialized
INFO - 2018-11-22 17:06:19 --> Config Class Initialized
INFO - 2018-11-22 17:06:19 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:19 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:19 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:19 --> URI Class Initialized
INFO - 2018-11-22 17:06:19 --> Router Class Initialized
INFO - 2018-11-22 17:06:19 --> Output Class Initialized
INFO - 2018-11-22 17:06:19 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:19 --> Input Class Initialized
INFO - 2018-11-22 17:06:19 --> Language Class Initialized
INFO - 2018-11-22 17:06:19 --> Loader Class Initialized
INFO - 2018-11-22 17:06:19 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:06:19 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:19 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:19 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:19 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:19 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:19 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:19 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:19 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:19 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:19 --> Config Class Initialized
INFO - 2018-11-22 17:06:19 --> Hooks Class Initialized
INFO - 2018-11-22 17:06:19 --> URI Class Initialized
INFO - 2018-11-22 17:06:19 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:19 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:19 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:19 --> Config Class Initialized
INFO - 2018-11-22 17:06:19 --> Hooks Class Initialized
INFO - 2018-11-22 17:06:19 --> URI Class Initialized
DEBUG - 2018-11-22 17:06:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:19 --> Router Class Initialized
INFO - 2018-11-22 17:06:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:19 --> Output Class Initialized
INFO - 2018-11-22 17:06:19 --> Security Class Initialized
INFO - 2018-11-22 17:06:19 --> Router Class Initialized
DEBUG - 2018-11-22 17:06:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:20 --> Input Class Initialized
INFO - 2018-11-22 17:06:20 --> Config Class Initialized
INFO - 2018-11-22 17:06:20 --> Controller Class Initialized
INFO - 2018-11-22 17:06:20 --> Hooks Class Initialized
INFO - 2018-11-22 17:06:20 --> Output Class Initialized
INFO - 2018-11-22 17:06:20 --> Language Class Initialized
DEBUG - 2018-11-22 17:06:20 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:06:20 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:20 --> Model Class Initialized
INFO - 2018-11-22 17:06:20 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:20 --> Model Class Initialized
INFO - 2018-11-22 17:06:20 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:20 --> URI Class Initialized
INFO - 2018-11-22 17:06:20 --> Router Class Initialized
INFO - 2018-11-22 17:06:20 --> Security Class Initialized
INFO - 2018-11-22 17:06:20 --> Loader Class Initialized
INFO - 2018-11-22 17:06:20 --> Output Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:20 --> Final output sent to browser
INFO - 2018-11-22 17:06:20 --> URI Class Initialized
INFO - 2018-11-22 17:06:20 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:20 --> Input Class Initialized
INFO - 2018-11-22 17:06:20 --> Config Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Total execution time: 0.4180
INFO - 2018-11-22 17:06:20 --> Hooks Class Initialized
INFO - 2018-11-22 17:06:20 --> Language Class Initialized
INFO - 2018-11-22 17:06:20 --> Router Class Initialized
DEBUG - 2018-11-22 17:06:20 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:20 --> Loader Class Initialized
INFO - 2018-11-22 17:06:20 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:20 --> Output Class Initialized
INFO - 2018-11-22 17:06:20 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:20 --> Input Class Initialized
INFO - 2018-11-22 17:06:20 --> Language Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:20 --> URI Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:20 --> Loader Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:20 --> Router Class Initialized
INFO - 2018-11-22 17:06:20 --> Input Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:20 --> Output Class Initialized
INFO - 2018-11-22 17:06:20 --> Language Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:20 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:20 --> Loader Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:20 --> Input Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:20 --> Language Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:20 --> Database Driver Class Initialized
INFO - 2018-11-22 17:06:20 --> Loader Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:20 --> Database Driver Class Initialized
INFO - 2018-11-22 17:06:20 --> Database Driver Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 17:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: file_helper
DEBUG - 2018-11-22 17:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:20 --> Controller Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:20 --> Model Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:20 --> Model Class Initialized
INFO - 2018-11-22 17:06:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:20 --> Final output sent to browser
INFO - 2018-11-22 17:06:20 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Total execution time: 0.5750
INFO - 2018-11-22 17:06:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:20 --> Database Driver Class Initialized
INFO - 2018-11-22 17:06:20 --> Controller Class Initialized
INFO - 2018-11-22 17:06:20 --> Model Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:20 --> Model Class Initialized
DEBUG - 2018-11-22 17:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:22 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:22 --> Total execution time: 3.0802
INFO - 2018-11-22 17:06:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:22 --> Controller Class Initialized
INFO - 2018-11-22 17:06:23 --> Model Class Initialized
INFO - 2018-11-22 17:06:23 --> Model Class Initialized
INFO - 2018-11-22 17:06:23 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:23 --> Total execution time: 3.1522
INFO - 2018-11-22 17:06:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:23 --> Controller Class Initialized
INFO - 2018-11-22 17:06:23 --> Model Class Initialized
INFO - 2018-11-22 17:06:23 --> Model Class Initialized
INFO - 2018-11-22 17:06:23 --> Model Class Initialized
INFO - 2018-11-22 17:06:23 --> Model Class Initialized
INFO - 2018-11-22 17:06:25 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:25 --> Total execution time: 5.2863
INFO - 2018-11-22 17:06:25 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:25 --> Controller Class Initialized
INFO - 2018-11-22 17:06:25 --> Model Class Initialized
INFO - 2018-11-22 17:06:25 --> Model Class Initialized
INFO - 2018-11-22 17:06:25 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:25 --> Total execution time: 5.8023
INFO - 2018-11-22 17:06:28 --> Config Class Initialized
INFO - 2018-11-22 17:06:28 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:28 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:28 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:28 --> URI Class Initialized
INFO - 2018-11-22 17:06:28 --> Config Class Initialized
INFO - 2018-11-22 17:06:28 --> Router Class Initialized
INFO - 2018-11-22 17:06:28 --> Output Class Initialized
INFO - 2018-11-22 17:06:28 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:28 --> Hooks Class Initialized
INFO - 2018-11-22 17:06:28 --> Input Class Initialized
INFO - 2018-11-22 17:06:28 --> Language Class Initialized
DEBUG - 2018-11-22 17:06:28 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:28 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:28 --> URI Class Initialized
INFO - 2018-11-22 17:06:28 --> Loader Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:28 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:28 --> Router Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:28 --> Output Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:28 --> Security Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:28 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:28 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:28 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:06:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:28 --> Input Class Initialized
INFO - 2018-11-22 17:06:28 --> Language Class Initialized
INFO - 2018-11-22 17:06:28 --> Database Driver Class Initialized
INFO - 2018-11-22 17:06:28 --> Loader Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:06:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:28 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:28 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:28 --> Controller Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:28 --> Model Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:28 --> Model Class Initialized
INFO - 2018-11-22 17:06:28 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:28 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:28 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:28 --> Total execution time: 0.2110
INFO - 2018-11-22 17:06:28 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:28 --> Controller Class Initialized
INFO - 2018-11-22 17:06:28 --> Model Class Initialized
INFO - 2018-11-22 17:06:28 --> Model Class Initialized
INFO - 2018-11-22 17:06:29 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:29 --> Total execution time: 1.5421
INFO - 2018-11-22 17:06:32 --> Config Class Initialized
INFO - 2018-11-22 17:06:32 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:32 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:32 --> URI Class Initialized
INFO - 2018-11-22 17:06:32 --> Router Class Initialized
INFO - 2018-11-22 17:06:32 --> Output Class Initialized
INFO - 2018-11-22 17:06:32 --> Config Class Initialized
INFO - 2018-11-22 17:06:32 --> Security Class Initialized
INFO - 2018-11-22 17:06:32 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:06:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:32 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:32 --> Input Class Initialized
INFO - 2018-11-22 17:06:32 --> Language Class Initialized
INFO - 2018-11-22 17:06:32 --> URI Class Initialized
INFO - 2018-11-22 17:06:32 --> Router Class Initialized
INFO - 2018-11-22 17:06:32 --> Loader Class Initialized
INFO - 2018-11-22 17:06:32 --> Output Class Initialized
INFO - 2018-11-22 17:06:32 --> Security Class Initialized
INFO - 2018-11-22 17:06:32 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 17:06:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:32 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:32 --> Input Class Initialized
INFO - 2018-11-22 17:06:32 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:32 --> Language Class Initialized
INFO - 2018-11-22 17:06:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:32 --> Loader Class Initialized
INFO - 2018-11-22 17:06:32 --> Database Driver Class Initialized
INFO - 2018-11-22 17:06:32 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:06:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:32 --> Controller Class Initialized
INFO - 2018-11-22 17:06:32 --> Model Class Initialized
INFO - 2018-11-22 17:06:32 --> Model Class Initialized
INFO - 2018-11-22 17:06:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:32 --> Final output sent to browser
INFO - 2018-11-22 17:06:32 --> Helper loaded: form_helper
DEBUG - 2018-11-22 17:06:32 --> Total execution time: 0.2010
INFO - 2018-11-22 17:06:32 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:32 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:32 --> Controller Class Initialized
INFO - 2018-11-22 17:06:32 --> Model Class Initialized
INFO - 2018-11-22 17:06:32 --> Model Class Initialized
INFO - 2018-11-22 17:06:32 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:32 --> Total execution time: 0.3130
INFO - 2018-11-22 17:06:35 --> Config Class Initialized
INFO - 2018-11-22 17:06:35 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:06:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:06:35 --> Utf8 Class Initialized
INFO - 2018-11-22 17:06:35 --> URI Class Initialized
INFO - 2018-11-22 17:06:35 --> Router Class Initialized
INFO - 2018-11-22 17:06:35 --> Output Class Initialized
INFO - 2018-11-22 17:06:35 --> Security Class Initialized
DEBUG - 2018-11-22 17:06:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:06:35 --> Input Class Initialized
INFO - 2018-11-22 17:06:35 --> Language Class Initialized
INFO - 2018-11-22 17:06:35 --> Loader Class Initialized
INFO - 2018-11-22 17:06:35 --> Helper loaded: url_helper
INFO - 2018-11-22 17:06:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:06:35 --> Helper loaded: file_helper
INFO - 2018-11-22 17:06:35 --> Helper loaded: form_helper
INFO - 2018-11-22 17:06:35 --> Helper loaded: general_helper
INFO - 2018-11-22 17:06:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:06:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:06:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:06:35 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:06:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:06:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:06:35 --> Controller Class Initialized
INFO - 2018-11-22 17:06:35 --> Model Class Initialized
INFO - 2018-11-22 17:06:35 --> Model Class Initialized
INFO - 2018-11-22 17:06:35 --> Final output sent to browser
DEBUG - 2018-11-22 17:06:35 --> Total execution time: 0.1730
INFO - 2018-11-22 17:07:52 --> Config Class Initialized
INFO - 2018-11-22 17:07:52 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:07:52 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:07:52 --> Utf8 Class Initialized
INFO - 2018-11-22 17:07:52 --> URI Class Initialized
INFO - 2018-11-22 17:07:52 --> Router Class Initialized
INFO - 2018-11-22 17:07:52 --> Output Class Initialized
INFO - 2018-11-22 17:07:52 --> Security Class Initialized
DEBUG - 2018-11-22 17:07:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:07:52 --> Input Class Initialized
INFO - 2018-11-22 17:07:52 --> Language Class Initialized
INFO - 2018-11-22 17:07:52 --> Loader Class Initialized
INFO - 2018-11-22 17:07:52 --> Helper loaded: url_helper
INFO - 2018-11-22 17:07:52 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:07:52 --> Helper loaded: file_helper
INFO - 2018-11-22 17:07:52 --> Helper loaded: form_helper
INFO - 2018-11-22 17:07:52 --> Helper loaded: general_helper
INFO - 2018-11-22 17:07:52 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:07:52 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:07:52 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:07:52 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:07:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:07:52 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:07:52 --> Controller Class Initialized
INFO - 2018-11-22 17:07:52 --> Model Class Initialized
INFO - 2018-11-22 17:07:52 --> Model Class Initialized
INFO - 2018-11-22 17:07:52 --> Model Class Initialized
INFO - 2018-11-22 17:07:52 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 17:07:52 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 17:07:52 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 17:07:52 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 17:07:52 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 17:07:52 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 17:07:52 --> Final output sent to browser
DEBUG - 2018-11-22 17:07:52 --> Total execution time: 0.3770
INFO - 2018-11-22 17:07:53 --> Config Class Initialized
INFO - 2018-11-22 17:07:53 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:07:53 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:07:53 --> Utf8 Class Initialized
INFO - 2018-11-22 17:07:53 --> URI Class Initialized
INFO - 2018-11-22 17:07:53 --> Router Class Initialized
INFO - 2018-11-22 17:07:53 --> Output Class Initialized
INFO - 2018-11-22 17:07:53 --> Security Class Initialized
DEBUG - 2018-11-22 17:07:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:07:53 --> Input Class Initialized
INFO - 2018-11-22 17:07:53 --> Language Class Initialized
ERROR - 2018-11-22 17:07:53 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 17:07:55 --> Config Class Initialized
INFO - 2018-11-22 17:07:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:07:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:07:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:07:55 --> URI Class Initialized
INFO - 2018-11-22 17:07:55 --> Router Class Initialized
INFO - 2018-11-22 17:07:55 --> Output Class Initialized
INFO - 2018-11-22 17:07:55 --> Security Class Initialized
DEBUG - 2018-11-22 17:07:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:07:55 --> Input Class Initialized
INFO - 2018-11-22 17:07:55 --> Language Class Initialized
INFO - 2018-11-22 17:07:55 --> Loader Class Initialized
INFO - 2018-11-22 17:07:55 --> Helper loaded: url_helper
INFO - 2018-11-22 17:07:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:07:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:07:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:07:55 --> Helper loaded: general_helper
INFO - 2018-11-22 17:07:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:07:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:07:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:07:55 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:07:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:07:55 --> Controller Class Initialized
INFO - 2018-11-22 17:07:55 --> Model Class Initialized
INFO - 2018-11-22 17:07:55 --> Model Class Initialized
INFO - 2018-11-22 17:07:55 --> Model Class Initialized
INFO - 2018-11-22 17:07:55 --> Model Class Initialized
INFO - 2018-11-22 17:07:56 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:07:56 --> Final output sent to browser
DEBUG - 2018-11-22 17:07:56 --> Total execution time: 1.5951
INFO - 2018-11-22 17:08:08 --> Config Class Initialized
INFO - 2018-11-22 17:08:08 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:08 --> URI Class Initialized
INFO - 2018-11-22 17:08:09 --> Router Class Initialized
INFO - 2018-11-22 17:08:09 --> Output Class Initialized
INFO - 2018-11-22 17:08:09 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:09 --> Input Class Initialized
INFO - 2018-11-22 17:08:09 --> Language Class Initialized
INFO - 2018-11-22 17:08:09 --> Loader Class Initialized
INFO - 2018-11-22 17:08:09 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:09 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:09 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:09 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:09 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:09 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:09 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:09 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:09 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:08:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:09 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:09 --> Controller Class Initialized
INFO - 2018-11-22 17:08:09 --> Model Class Initialized
INFO - 2018-11-22 17:08:09 --> Model Class Initialized
INFO - 2018-11-22 17:08:09 --> Model Class Initialized
INFO - 2018-11-22 17:08:09 --> Model Class Initialized
ERROR - 2018-11-22 17:08:10 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:08:13 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:08:13 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:08:13 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:08:13 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:08:13 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:13 --> Total execution time: 4.7303
INFO - 2018-11-22 17:08:22 --> Config Class Initialized
INFO - 2018-11-22 17:08:22 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:22 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:22 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:22 --> URI Class Initialized
INFO - 2018-11-22 17:08:22 --> Router Class Initialized
INFO - 2018-11-22 17:08:22 --> Output Class Initialized
INFO - 2018-11-22 17:08:22 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:22 --> Input Class Initialized
INFO - 2018-11-22 17:08:22 --> Language Class Initialized
INFO - 2018-11-22 17:08:22 --> Loader Class Initialized
INFO - 2018-11-22 17:08:22 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:22 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:22 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:22 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:22 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:22 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:08:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:22 --> Controller Class Initialized
INFO - 2018-11-22 17:08:22 --> Model Class Initialized
INFO - 2018-11-22 17:08:22 --> Model Class Initialized
ERROR - 2018-11-22 17:08:23 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:08:23 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:08:23 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:08:23 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:08:23 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:23 --> Total execution time: 1.6031
INFO - 2018-11-22 17:08:24 --> Config Class Initialized
INFO - 2018-11-22 17:08:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:24 --> URI Class Initialized
INFO - 2018-11-22 17:08:24 --> Router Class Initialized
INFO - 2018-11-22 17:08:24 --> Output Class Initialized
INFO - 2018-11-22 17:08:24 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:24 --> Input Class Initialized
INFO - 2018-11-22 17:08:24 --> Language Class Initialized
INFO - 2018-11-22 17:08:24 --> Loader Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:08:24 --> Config Class Initialized
INFO - 2018-11-22 17:08:24 --> Hooks Class Initialized
INFO - 2018-11-22 17:08:24 --> Config Class Initialized
INFO - 2018-11-22 17:08:24 --> Config Class Initialized
INFO - 2018-11-22 17:08:24 --> Hooks Class Initialized
INFO - 2018-11-22 17:08:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:24 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:08:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:24 --> Utf8 Class Initialized
DEBUG - 2018-11-22 17:08:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:24 --> URI Class Initialized
INFO - 2018-11-22 17:08:24 --> URI Class Initialized
INFO - 2018-11-22 17:08:24 --> Router Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:24 --> Output Class Initialized
INFO - 2018-11-22 17:08:24 --> Router Class Initialized
INFO - 2018-11-22 17:08:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:24 --> URI Class Initialized
INFO - 2018-11-22 17:08:24 --> Controller Class Initialized
INFO - 2018-11-22 17:08:24 --> Output Class Initialized
INFO - 2018-11-22 17:08:24 --> Security Class Initialized
INFO - 2018-11-22 17:08:24 --> Router Class Initialized
INFO - 2018-11-22 17:08:24 --> Security Class Initialized
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:24 --> Config Class Initialized
INFO - 2018-11-22 17:08:24 --> Output Class Initialized
INFO - 2018-11-22 17:08:24 --> Final output sent to browser
INFO - 2018-11-22 17:08:24 --> Hooks Class Initialized
INFO - 2018-11-22 17:08:24 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:08:24 --> Total execution time: 0.4470
INFO - 2018-11-22 17:08:24 --> Config Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:08:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:24 --> URI Class Initialized
INFO - 2018-11-22 17:08:24 --> Hooks Class Initialized
INFO - 2018-11-22 17:08:24 --> Router Class Initialized
INFO - 2018-11-22 17:08:24 --> Input Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:24 --> Language Class Initialized
DEBUG - 2018-11-22 17:08:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:24 --> URI Class Initialized
INFO - 2018-11-22 17:08:24 --> Router Class Initialized
INFO - 2018-11-22 17:08:24 --> Input Class Initialized
INFO - 2018-11-22 17:08:24 --> Output Class Initialized
INFO - 2018-11-22 17:08:24 --> Loader Class Initialized
INFO - 2018-11-22 17:08:24 --> Input Class Initialized
INFO - 2018-11-22 17:08:24 --> Security Class Initialized
INFO - 2018-11-22 17:08:24 --> Language Class Initialized
INFO - 2018-11-22 17:08:24 --> Loader Class Initialized
INFO - 2018-11-22 17:08:24 --> Output Class Initialized
INFO - 2018-11-22 17:08:24 --> Language Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:24 --> Input Class Initialized
INFO - 2018-11-22 17:08:24 --> Language Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:24 --> Security Class Initialized
INFO - 2018-11-22 17:08:24 --> Loader Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:24 --> Loader Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: form_helper
DEBUG - 2018-11-22 17:08:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:24 --> Input Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:24 --> Language Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:24 --> Loader Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:08:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:08:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:08:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:08:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:24 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:24 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-11-22 17:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:24 --> Controller Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:24 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:24 --> Total execution time: 0.6500
INFO - 2018-11-22 17:08:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:24 --> Controller Class Initialized
DEBUG - 2018-11-22 17:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:24 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:24 --> Total execution time: 0.6890
DEBUG - 2018-11-22 17:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:24 --> Controller Class Initialized
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:24 --> Model Class Initialized
INFO - 2018-11-22 17:08:26 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:26 --> Total execution time: 1.9111
INFO - 2018-11-22 17:08:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:26 --> Controller Class Initialized
INFO - 2018-11-22 17:08:26 --> Model Class Initialized
INFO - 2018-11-22 17:08:26 --> Model Class Initialized
INFO - 2018-11-22 17:08:26 --> Model Class Initialized
INFO - 2018-11-22 17:08:26 --> Model Class Initialized
INFO - 2018-11-22 17:08:27 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:27 --> Total execution time: 3.0532
INFO - 2018-11-22 17:08:27 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:27 --> Controller Class Initialized
INFO - 2018-11-22 17:08:27 --> Model Class Initialized
INFO - 2018-11-22 17:08:27 --> Model Class Initialized
INFO - 2018-11-22 17:08:27 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:27 --> Total execution time: 3.0832
INFO - 2018-11-22 17:08:36 --> Config Class Initialized
INFO - 2018-11-22 17:08:36 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:36 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:36 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:36 --> URI Class Initialized
INFO - 2018-11-22 17:08:36 --> Router Class Initialized
INFO - 2018-11-22 17:08:36 --> Config Class Initialized
INFO - 2018-11-22 17:08:36 --> Hooks Class Initialized
INFO - 2018-11-22 17:08:36 --> Output Class Initialized
INFO - 2018-11-22 17:08:36 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:36 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:08:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:36 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:36 --> URI Class Initialized
INFO - 2018-11-22 17:08:36 --> Input Class Initialized
INFO - 2018-11-22 17:08:36 --> Language Class Initialized
INFO - 2018-11-22 17:08:36 --> Router Class Initialized
INFO - 2018-11-22 17:08:36 --> Output Class Initialized
INFO - 2018-11-22 17:08:36 --> Security Class Initialized
INFO - 2018-11-22 17:08:36 --> Loader Class Initialized
DEBUG - 2018-11-22 17:08:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:36 --> Input Class Initialized
INFO - 2018-11-22 17:08:36 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:36 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:36 --> Language Class Initialized
INFO - 2018-11-22 17:08:36 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:36 --> Loader Class Initialized
INFO - 2018-11-22 17:08:36 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:37 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:08:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:37 --> Database Driver Class Initialized
INFO - 2018-11-22 17:08:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:37 --> Controller Class Initialized
INFO - 2018-11-22 17:08:37 --> Model Class Initialized
INFO - 2018-11-22 17:08:37 --> Model Class Initialized
DEBUG - 2018-11-22 17:08:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:37 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:37 --> Total execution time: 0.3050
INFO - 2018-11-22 17:08:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:37 --> Controller Class Initialized
INFO - 2018-11-22 17:08:37 --> Model Class Initialized
INFO - 2018-11-22 17:08:37 --> Model Class Initialized
INFO - 2018-11-22 17:08:38 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:38 --> Total execution time: 1.5331
INFO - 2018-11-22 17:08:47 --> Config Class Initialized
INFO - 2018-11-22 17:08:47 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:47 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:47 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:47 --> URI Class Initialized
INFO - 2018-11-22 17:08:47 --> Router Class Initialized
INFO - 2018-11-22 17:08:47 --> Output Class Initialized
INFO - 2018-11-22 17:08:47 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:47 --> Input Class Initialized
INFO - 2018-11-22 17:08:47 --> Language Class Initialized
INFO - 2018-11-22 17:08:47 --> Loader Class Initialized
INFO - 2018-11-22 17:08:47 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:47 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:47 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:47 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:47 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:47 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:47 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:47 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:47 --> Database Driver Class Initialized
INFO - 2018-11-22 17:08:47 --> Config Class Initialized
INFO - 2018-11-22 17:08:47 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:47 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:08:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:48 --> Controller Class Initialized
INFO - 2018-11-22 17:08:48 --> Model Class Initialized
INFO - 2018-11-22 17:08:48 --> Model Class Initialized
INFO - 2018-11-22 17:08:48 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:48 --> Total execution time: 0.3230
INFO - 2018-11-22 17:08:48 --> URI Class Initialized
INFO - 2018-11-22 17:08:48 --> Router Class Initialized
INFO - 2018-11-22 17:08:48 --> Output Class Initialized
INFO - 2018-11-22 17:08:48 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:48 --> Input Class Initialized
INFO - 2018-11-22 17:08:48 --> Language Class Initialized
INFO - 2018-11-22 17:08:48 --> Loader Class Initialized
INFO - 2018-11-22 17:08:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:08:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:48 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:48 --> Controller Class Initialized
INFO - 2018-11-22 17:08:48 --> Model Class Initialized
INFO - 2018-11-22 17:08:48 --> Model Class Initialized
INFO - 2018-11-22 17:08:48 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:48 --> Total execution time: 0.2290
INFO - 2018-11-22 17:08:50 --> Config Class Initialized
INFO - 2018-11-22 17:08:50 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:08:50 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:08:50 --> Utf8 Class Initialized
INFO - 2018-11-22 17:08:50 --> URI Class Initialized
INFO - 2018-11-22 17:08:50 --> Router Class Initialized
INFO - 2018-11-22 17:08:50 --> Output Class Initialized
INFO - 2018-11-22 17:08:50 --> Security Class Initialized
DEBUG - 2018-11-22 17:08:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:08:50 --> Input Class Initialized
INFO - 2018-11-22 17:08:50 --> Language Class Initialized
INFO - 2018-11-22 17:08:50 --> Loader Class Initialized
INFO - 2018-11-22 17:08:50 --> Helper loaded: url_helper
INFO - 2018-11-22 17:08:50 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:08:50 --> Helper loaded: file_helper
INFO - 2018-11-22 17:08:50 --> Helper loaded: form_helper
INFO - 2018-11-22 17:08:50 --> Helper loaded: general_helper
INFO - 2018-11-22 17:08:50 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:08:50 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:08:50 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:08:50 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:08:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:08:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:08:50 --> Controller Class Initialized
INFO - 2018-11-22 17:08:50 --> Model Class Initialized
INFO - 2018-11-22 17:08:50 --> Model Class Initialized
INFO - 2018-11-22 17:08:50 --> Final output sent to browser
DEBUG - 2018-11-22 17:08:50 --> Total execution time: 0.1730
INFO - 2018-11-22 17:12:04 --> Config Class Initialized
INFO - 2018-11-22 17:12:04 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:04 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:04 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:04 --> URI Class Initialized
INFO - 2018-11-22 17:12:04 --> Router Class Initialized
INFO - 2018-11-22 17:12:04 --> Output Class Initialized
INFO - 2018-11-22 17:12:04 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:04 --> Input Class Initialized
INFO - 2018-11-22 17:12:04 --> Language Class Initialized
INFO - 2018-11-22 17:12:04 --> Loader Class Initialized
INFO - 2018-11-22 17:12:04 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:04 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:04 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:04 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:04 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:04 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:04 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:04 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:04 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:04 --> Controller Class Initialized
INFO - 2018-11-22 17:12:04 --> Model Class Initialized
INFO - 2018-11-22 17:12:04 --> Model Class Initialized
INFO - 2018-11-22 17:12:04 --> Model Class Initialized
INFO - 2018-11-22 17:12:04 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\InicioTrabajo/list.php
INFO - 2018-11-22 17:12:04 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:04 --> Total execution time: 0.3580
INFO - 2018-11-22 17:12:06 --> Config Class Initialized
INFO - 2018-11-22 17:12:06 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:06 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:06 --> URI Class Initialized
INFO - 2018-11-22 17:12:06 --> Router Class Initialized
INFO - 2018-11-22 17:12:06 --> Output Class Initialized
INFO - 2018-11-22 17:12:06 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:06 --> Input Class Initialized
INFO - 2018-11-22 17:12:06 --> Language Class Initialized
INFO - 2018-11-22 17:12:06 --> Loader Class Initialized
INFO - 2018-11-22 17:12:06 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:06 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:06 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:06 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:06 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:06 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:06 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:07 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:07 --> Controller Class Initialized
INFO - 2018-11-22 17:12:07 --> Model Class Initialized
INFO - 2018-11-22 17:12:07 --> Model Class Initialized
INFO - 2018-11-22 17:12:07 --> Model Class Initialized
INFO - 2018-11-22 17:12:07 --> Model Class Initialized
INFO - 2018-11-22 17:12:08 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:12:08 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:08 --> Total execution time: 1.4261
INFO - 2018-11-22 17:12:09 --> Config Class Initialized
INFO - 2018-11-22 17:12:09 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:09 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:09 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:09 --> URI Class Initialized
INFO - 2018-11-22 17:12:09 --> Router Class Initialized
INFO - 2018-11-22 17:12:09 --> Output Class Initialized
INFO - 2018-11-22 17:12:09 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:09 --> Input Class Initialized
INFO - 2018-11-22 17:12:10 --> Language Class Initialized
INFO - 2018-11-22 17:12:10 --> Loader Class Initialized
INFO - 2018-11-22 17:12:10 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:10 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:10 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:10 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:10 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:10 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:10 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:10 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:10 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:10 --> Controller Class Initialized
INFO - 2018-11-22 17:12:10 --> Model Class Initialized
INFO - 2018-11-22 17:12:10 --> Model Class Initialized
INFO - 2018-11-22 17:12:10 --> Model Class Initialized
INFO - 2018-11-22 17:12:10 --> Model Class Initialized
ERROR - 2018-11-22 17:12:11 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:12:14 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:12:14 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:12:14 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:12:14 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:12:14 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:14 --> Total execution time: 4.8463
INFO - 2018-11-22 17:12:23 --> Config Class Initialized
INFO - 2018-11-22 17:12:23 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:23 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:23 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:23 --> URI Class Initialized
INFO - 2018-11-22 17:12:23 --> Router Class Initialized
INFO - 2018-11-22 17:12:23 --> Output Class Initialized
INFO - 2018-11-22 17:12:23 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:23 --> Input Class Initialized
INFO - 2018-11-22 17:12:23 --> Language Class Initialized
INFO - 2018-11-22 17:12:23 --> Loader Class Initialized
INFO - 2018-11-22 17:12:23 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:23 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:23 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:23 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:23 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:23 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:23 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:23 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:23 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:24 --> Controller Class Initialized
INFO - 2018-11-22 17:12:24 --> Model Class Initialized
INFO - 2018-11-22 17:12:24 --> Model Class Initialized
ERROR - 2018-11-22 17:12:25 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:12:25 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:12:25 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:12:25 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:12:25 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:25 --> Total execution time: 1.8421
INFO - 2018-11-22 17:12:25 --> Config Class Initialized
INFO - 2018-11-22 17:12:25 --> Config Class Initialized
INFO - 2018-11-22 17:12:25 --> Config Class Initialized
INFO - 2018-11-22 17:12:25 --> Hooks Class Initialized
INFO - 2018-11-22 17:12:25 --> Hooks Class Initialized
INFO - 2018-11-22 17:12:25 --> Config Class Initialized
INFO - 2018-11-22 17:12:25 --> Hooks Class Initialized
INFO - 2018-11-22 17:12:25 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:25 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:12:25 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:12:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:25 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:25 --> Utf8 Class Initialized
DEBUG - 2018-11-22 17:12:25 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:25 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:25 --> URI Class Initialized
INFO - 2018-11-22 17:12:25 --> Router Class Initialized
INFO - 2018-11-22 17:12:25 --> URI Class Initialized
INFO - 2018-11-22 17:12:25 --> Output Class Initialized
INFO - 2018-11-22 17:12:25 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:25 --> Security Class Initialized
INFO - 2018-11-22 17:12:25 --> URI Class Initialized
DEBUG - 2018-11-22 17:12:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:25 --> Input Class Initialized
INFO - 2018-11-22 17:12:25 --> Language Class Initialized
INFO - 2018-11-22 17:12:25 --> Loader Class Initialized
INFO - 2018-11-22 17:12:25 --> Router Class Initialized
INFO - 2018-11-22 17:12:25 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:25 --> Config Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:26 --> Config Class Initialized
INFO - 2018-11-22 17:12:26 --> Output Class Initialized
INFO - 2018-11-22 17:12:26 --> Hooks Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:26 --> Hooks Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:26 --> Security Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:12:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:12:26 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:26 --> Input Class Initialized
INFO - 2018-11-22 17:12:26 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:26 --> Language Class Initialized
INFO - 2018-11-22 17:12:26 --> Database Driver Class Initialized
INFO - 2018-11-22 17:12:26 --> URI Class Initialized
INFO - 2018-11-22 17:12:26 --> Router Class Initialized
INFO - 2018-11-22 17:12:26 --> Output Class Initialized
INFO - 2018-11-22 17:12:26 --> Loader Class Initialized
INFO - 2018-11-22 17:12:26 --> Security Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:12:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:26 --> Input Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:26 --> Language Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:26 --> Loader Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:26 --> URI Class Initialized
INFO - 2018-11-22 17:12:26 --> Router Class Initialized
DEBUG - 2018-11-22 17:12:26 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:26 --> Router Class Initialized
INFO - 2018-11-22 17:12:26 --> Database Driver Class Initialized
INFO - 2018-11-22 17:12:26 --> Output Class Initialized
INFO - 2018-11-22 17:12:26 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:26 --> Output Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:26 --> URI Class Initialized
INFO - 2018-11-22 17:12:26 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:26 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:26 --> Input Class Initialized
INFO - 2018-11-22 17:12:26 --> Controller Class Initialized
INFO - 2018-11-22 17:12:26 --> Database Driver Class Initialized
INFO - 2018-11-22 17:12:26 --> Model Class Initialized
INFO - 2018-11-22 17:12:26 --> Model Class Initialized
DEBUG - 2018-11-22 17:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:26 --> Router Class Initialized
INFO - 2018-11-22 17:12:26 --> Output Class Initialized
INFO - 2018-11-22 17:12:26 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:26 --> Language Class Initialized
INFO - 2018-11-22 17:12:26 --> Input Class Initialized
DEBUG - 2018-11-22 17:12:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:26 --> Input Class Initialized
INFO - 2018-11-22 17:12:26 --> Loader Class Initialized
INFO - 2018-11-22 17:12:26 --> Language Class Initialized
INFO - 2018-11-22 17:12:26 --> Language Class Initialized
INFO - 2018-11-22 17:12:26 --> Loader Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:26 --> Loader Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:26 --> Database Driver Class Initialized
INFO - 2018-11-22 17:12:26 --> Database Driver Class Initialized
INFO - 2018-11-22 17:12:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:26 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:28 --> Total execution time: 2.4351
INFO - 2018-11-22 17:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:28 --> Controller Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:28 --> Total execution time: 2.6472
INFO - 2018-11-22 17:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:28 --> Controller Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:28 --> Total execution time: 2.4101
INFO - 2018-11-22 17:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:28 --> Controller Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:28 --> Total execution time: 2.5941
INFO - 2018-11-22 17:12:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:28 --> Controller Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:28 --> Model Class Initialized
INFO - 2018-11-22 17:12:29 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:29 --> Total execution time: 3.7562
INFO - 2018-11-22 17:12:29 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:29 --> Controller Class Initialized
INFO - 2018-11-22 17:12:29 --> Model Class Initialized
INFO - 2018-11-22 17:12:29 --> Model Class Initialized
INFO - 2018-11-22 17:12:29 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:29 --> Total execution time: 3.8842
INFO - 2018-11-22 17:12:39 --> Config Class Initialized
INFO - 2018-11-22 17:12:39 --> Hooks Class Initialized
INFO - 2018-11-22 17:12:39 --> Config Class Initialized
DEBUG - 2018-11-22 17:12:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:39 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:39 --> Hooks Class Initialized
INFO - 2018-11-22 17:12:39 --> URI Class Initialized
DEBUG - 2018-11-22 17:12:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:39 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:39 --> Router Class Initialized
INFO - 2018-11-22 17:12:39 --> URI Class Initialized
INFO - 2018-11-22 17:12:39 --> Output Class Initialized
INFO - 2018-11-22 17:12:39 --> Router Class Initialized
INFO - 2018-11-22 17:12:39 --> Security Class Initialized
INFO - 2018-11-22 17:12:39 --> Output Class Initialized
INFO - 2018-11-22 17:12:39 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:39 --> Input Class Initialized
DEBUG - 2018-11-22 17:12:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:39 --> Input Class Initialized
INFO - 2018-11-22 17:12:39 --> Language Class Initialized
INFO - 2018-11-22 17:12:39 --> Language Class Initialized
INFO - 2018-11-22 17:12:39 --> Loader Class Initialized
INFO - 2018-11-22 17:12:39 --> Loader Class Initialized
INFO - 2018-11-22 17:12:39 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:39 --> Database Driver Class Initialized
INFO - 2018-11-22 17:12:39 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:39 --> Controller Class Initialized
DEBUG - 2018-11-22 17:12:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:39 --> Model Class Initialized
INFO - 2018-11-22 17:12:40 --> Model Class Initialized
INFO - 2018-11-22 17:12:41 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:41 --> Total execution time: 1.6301
INFO - 2018-11-22 17:12:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:41 --> Controller Class Initialized
INFO - 2018-11-22 17:12:41 --> Model Class Initialized
INFO - 2018-11-22 17:12:41 --> Model Class Initialized
INFO - 2018-11-22 17:12:41 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:41 --> Total execution time: 1.6521
INFO - 2018-11-22 17:12:48 --> Config Class Initialized
INFO - 2018-11-22 17:12:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:48 --> URI Class Initialized
INFO - 2018-11-22 17:12:48 --> Config Class Initialized
INFO - 2018-11-22 17:12:48 --> Router Class Initialized
INFO - 2018-11-22 17:12:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:48 --> Output Class Initialized
INFO - 2018-11-22 17:12:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:48 --> Security Class Initialized
INFO - 2018-11-22 17:12:48 --> URI Class Initialized
INFO - 2018-11-22 17:12:48 --> Router Class Initialized
INFO - 2018-11-22 17:12:48 --> Output Class Initialized
DEBUG - 2018-11-22 17:12:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:48 --> Input Class Initialized
INFO - 2018-11-22 17:12:48 --> Security Class Initialized
INFO - 2018-11-22 17:12:48 --> Language Class Initialized
DEBUG - 2018-11-22 17:12:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:48 --> Input Class Initialized
INFO - 2018-11-22 17:12:48 --> Loader Class Initialized
INFO - 2018-11-22 17:12:48 --> Language Class Initialized
INFO - 2018-11-22 17:12:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:48 --> Loader Class Initialized
INFO - 2018-11-22 17:12:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:48 --> Database Driver Class Initialized
INFO - 2018-11-22 17:12:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:48 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-11-22 17:12:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:48 --> Controller Class Initialized
INFO - 2018-11-22 17:12:49 --> Model Class Initialized
INFO - 2018-11-22 17:12:49 --> Model Class Initialized
INFO - 2018-11-22 17:12:49 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:49 --> Total execution time: 0.2200
INFO - 2018-11-22 17:12:49 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:49 --> Controller Class Initialized
INFO - 2018-11-22 17:12:49 --> Model Class Initialized
INFO - 2018-11-22 17:12:49 --> Model Class Initialized
INFO - 2018-11-22 17:12:49 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:49 --> Total execution time: 0.2940
INFO - 2018-11-22 17:12:51 --> Config Class Initialized
INFO - 2018-11-22 17:12:51 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:12:51 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:12:51 --> Utf8 Class Initialized
INFO - 2018-11-22 17:12:51 --> URI Class Initialized
INFO - 2018-11-22 17:12:51 --> Router Class Initialized
INFO - 2018-11-22 17:12:51 --> Output Class Initialized
INFO - 2018-11-22 17:12:51 --> Security Class Initialized
DEBUG - 2018-11-22 17:12:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:12:51 --> Input Class Initialized
INFO - 2018-11-22 17:12:51 --> Language Class Initialized
INFO - 2018-11-22 17:12:51 --> Loader Class Initialized
INFO - 2018-11-22 17:12:51 --> Helper loaded: url_helper
INFO - 2018-11-22 17:12:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:12:51 --> Helper loaded: file_helper
INFO - 2018-11-22 17:12:51 --> Helper loaded: form_helper
INFO - 2018-11-22 17:12:51 --> Helper loaded: general_helper
INFO - 2018-11-22 17:12:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:12:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:12:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:12:51 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:12:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:12:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:12:51 --> Controller Class Initialized
INFO - 2018-11-22 17:12:51 --> Model Class Initialized
INFO - 2018-11-22 17:12:51 --> Model Class Initialized
INFO - 2018-11-22 17:12:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:12:51 --> Total execution time: 0.1760
INFO - 2018-11-22 17:14:42 --> Config Class Initialized
INFO - 2018-11-22 17:14:42 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:14:42 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:14:42 --> Utf8 Class Initialized
INFO - 2018-11-22 17:14:42 --> URI Class Initialized
INFO - 2018-11-22 17:14:42 --> Router Class Initialized
INFO - 2018-11-22 17:14:42 --> Output Class Initialized
INFO - 2018-11-22 17:14:42 --> Security Class Initialized
DEBUG - 2018-11-22 17:14:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:14:42 --> Input Class Initialized
INFO - 2018-11-22 17:14:42 --> Language Class Initialized
INFO - 2018-11-22 17:14:42 --> Loader Class Initialized
INFO - 2018-11-22 17:14:42 --> Helper loaded: url_helper
INFO - 2018-11-22 17:14:42 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:14:42 --> Helper loaded: file_helper
INFO - 2018-11-22 17:14:42 --> Helper loaded: form_helper
INFO - 2018-11-22 17:14:42 --> Helper loaded: general_helper
INFO - 2018-11-22 17:14:42 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:14:42 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:14:42 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:14:42 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:14:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:14:42 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:14:42 --> Controller Class Initialized
INFO - 2018-11-22 17:14:42 --> Model Class Initialized
INFO - 2018-11-22 17:14:42 --> Model Class Initialized
INFO - 2018-11-22 17:14:42 --> Model Class Initialized
INFO - 2018-11-22 17:14:42 --> Model Class Initialized
INFO - 2018-11-22 17:14:43 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:14:43 --> Final output sent to browser
DEBUG - 2018-11-22 17:14:43 --> Total execution time: 1.3271
INFO - 2018-11-22 17:14:50 --> Config Class Initialized
INFO - 2018-11-22 17:14:50 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:14:50 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:14:50 --> Utf8 Class Initialized
INFO - 2018-11-22 17:14:50 --> URI Class Initialized
INFO - 2018-11-22 17:14:50 --> Router Class Initialized
INFO - 2018-11-22 17:14:50 --> Output Class Initialized
INFO - 2018-11-22 17:14:50 --> Security Class Initialized
DEBUG - 2018-11-22 17:14:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:14:50 --> Input Class Initialized
INFO - 2018-11-22 17:14:50 --> Language Class Initialized
INFO - 2018-11-22 17:14:50 --> Loader Class Initialized
INFO - 2018-11-22 17:14:50 --> Helper loaded: url_helper
INFO - 2018-11-22 17:14:50 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:14:50 --> Helper loaded: file_helper
INFO - 2018-11-22 17:14:50 --> Helper loaded: form_helper
INFO - 2018-11-22 17:14:50 --> Helper loaded: general_helper
INFO - 2018-11-22 17:14:50 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:14:50 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:14:50 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:14:50 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:14:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:14:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:14:50 --> Controller Class Initialized
INFO - 2018-11-22 17:14:50 --> Model Class Initialized
INFO - 2018-11-22 17:14:50 --> Model Class Initialized
INFO - 2018-11-22 17:14:50 --> Model Class Initialized
INFO - 2018-11-22 17:14:50 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\InicioTrabajo/list.php
INFO - 2018-11-22 17:14:50 --> Final output sent to browser
DEBUG - 2018-11-22 17:14:50 --> Total execution time: 0.3660
INFO - 2018-11-22 17:14:53 --> Config Class Initialized
INFO - 2018-11-22 17:14:53 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:14:53 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:14:53 --> Utf8 Class Initialized
INFO - 2018-11-22 17:14:53 --> URI Class Initialized
INFO - 2018-11-22 17:14:53 --> Router Class Initialized
INFO - 2018-11-22 17:14:53 --> Output Class Initialized
INFO - 2018-11-22 17:14:53 --> Security Class Initialized
DEBUG - 2018-11-22 17:14:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:14:53 --> Input Class Initialized
INFO - 2018-11-22 17:14:53 --> Language Class Initialized
INFO - 2018-11-22 17:14:53 --> Loader Class Initialized
INFO - 2018-11-22 17:14:53 --> Helper loaded: url_helper
INFO - 2018-11-22 17:14:53 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:14:53 --> Helper loaded: file_helper
INFO - 2018-11-22 17:14:53 --> Helper loaded: form_helper
INFO - 2018-11-22 17:14:53 --> Helper loaded: general_helper
INFO - 2018-11-22 17:14:53 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:14:53 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:14:53 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:14:53 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:14:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:14:53 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:14:53 --> Controller Class Initialized
INFO - 2018-11-22 17:14:53 --> Model Class Initialized
INFO - 2018-11-22 17:14:53 --> Model Class Initialized
INFO - 2018-11-22 17:14:53 --> Model Class Initialized
INFO - 2018-11-22 17:14:53 --> Model Class Initialized
INFO - 2018-11-22 17:14:54 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:14:54 --> Final output sent to browser
DEBUG - 2018-11-22 17:14:54 --> Total execution time: 1.5041
INFO - 2018-11-22 17:14:56 --> Config Class Initialized
INFO - 2018-11-22 17:14:56 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:14:56 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:14:56 --> Utf8 Class Initialized
INFO - 2018-11-22 17:14:56 --> URI Class Initialized
INFO - 2018-11-22 17:14:56 --> Router Class Initialized
INFO - 2018-11-22 17:14:56 --> Output Class Initialized
INFO - 2018-11-22 17:14:56 --> Security Class Initialized
DEBUG - 2018-11-22 17:14:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:14:56 --> Input Class Initialized
INFO - 2018-11-22 17:14:56 --> Language Class Initialized
INFO - 2018-11-22 17:14:56 --> Loader Class Initialized
INFO - 2018-11-22 17:14:56 --> Helper loaded: url_helper
INFO - 2018-11-22 17:14:56 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:14:56 --> Helper loaded: file_helper
INFO - 2018-11-22 17:14:56 --> Helper loaded: form_helper
INFO - 2018-11-22 17:14:56 --> Helper loaded: general_helper
INFO - 2018-11-22 17:14:56 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:14:56 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:14:56 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:14:56 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:14:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:14:56 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:14:56 --> Controller Class Initialized
INFO - 2018-11-22 17:14:56 --> Model Class Initialized
INFO - 2018-11-22 17:14:56 --> Model Class Initialized
INFO - 2018-11-22 17:14:56 --> Model Class Initialized
INFO - 2018-11-22 17:14:56 --> Model Class Initialized
ERROR - 2018-11-22 17:14:57 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:15:01 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:15:01 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:15:01 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:15:01 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:15:01 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:01 --> Total execution time: 5.0223
INFO - 2018-11-22 17:15:05 --> Config Class Initialized
INFO - 2018-11-22 17:15:05 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:05 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:05 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:05 --> URI Class Initialized
INFO - 2018-11-22 17:15:05 --> Router Class Initialized
INFO - 2018-11-22 17:15:05 --> Output Class Initialized
INFO - 2018-11-22 17:15:05 --> Security Class Initialized
DEBUG - 2018-11-22 17:15:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:05 --> Input Class Initialized
INFO - 2018-11-22 17:15:05 --> Language Class Initialized
INFO - 2018-11-22 17:15:05 --> Loader Class Initialized
INFO - 2018-11-22 17:15:05 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:05 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:05 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:05 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:05 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:05 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:05 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:05 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:05 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:15:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:05 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:05 --> Controller Class Initialized
INFO - 2018-11-22 17:15:05 --> Model Class Initialized
INFO - 2018-11-22 17:15:05 --> Model Class Initialized
ERROR - 2018-11-22 17:15:07 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:15:07 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:15:07 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:15:07 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:15:07 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:07 --> Total execution time: 1.6921
INFO - 2018-11-22 17:15:07 --> Config Class Initialized
INFO - 2018-11-22 17:15:07 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:07 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:07 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:07 --> URI Class Initialized
INFO - 2018-11-22 17:15:07 --> Router Class Initialized
INFO - 2018-11-22 17:15:07 --> Output Class Initialized
INFO - 2018-11-22 17:15:07 --> Security Class Initialized
DEBUG - 2018-11-22 17:15:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:07 --> Input Class Initialized
INFO - 2018-11-22 17:15:07 --> Language Class Initialized
INFO - 2018-11-22 17:15:07 --> Loader Class Initialized
INFO - 2018-11-22 17:15:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:07 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:07 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:07 --> Config Class Initialized
INFO - 2018-11-22 17:15:07 --> Hooks Class Initialized
INFO - 2018-11-22 17:15:07 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:07 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:15:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:15:07 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:08 --> URI Class Initialized
INFO - 2018-11-22 17:15:08 --> Config Class Initialized
INFO - 2018-11-22 17:15:08 --> Controller Class Initialized
INFO - 2018-11-22 17:15:08 --> Config Class Initialized
INFO - 2018-11-22 17:15:08 --> Config Class Initialized
INFO - 2018-11-22 17:15:08 --> Hooks Class Initialized
INFO - 2018-11-22 17:15:08 --> Hooks Class Initialized
INFO - 2018-11-22 17:15:08 --> Hooks Class Initialized
INFO - 2018-11-22 17:15:08 --> Model Class Initialized
DEBUG - 2018-11-22 17:15:08 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:15:08 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:15:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:08 --> Router Class Initialized
INFO - 2018-11-22 17:15:08 --> Model Class Initialized
INFO - 2018-11-22 17:15:08 --> Config Class Initialized
INFO - 2018-11-22 17:15:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:08 --> Output Class Initialized
INFO - 2018-11-22 17:15:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:08 --> URI Class Initialized
INFO - 2018-11-22 17:15:08 --> URI Class Initialized
INFO - 2018-11-22 17:15:08 --> URI Class Initialized
INFO - 2018-11-22 17:15:08 --> Security Class Initialized
INFO - 2018-11-22 17:15:08 --> Final output sent to browser
INFO - 2018-11-22 17:15:08 --> Router Class Initialized
INFO - 2018-11-22 17:15:08 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:08 --> Router Class Initialized
INFO - 2018-11-22 17:15:08 --> Router Class Initialized
INFO - 2018-11-22 17:15:08 --> Output Class Initialized
INFO - 2018-11-22 17:15:08 --> Input Class Initialized
INFO - 2018-11-22 17:15:08 --> Language Class Initialized
DEBUG - 2018-11-22 17:15:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:08 --> Output Class Initialized
INFO - 2018-11-22 17:15:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:08 --> Output Class Initialized
DEBUG - 2018-11-22 17:15:08 --> Total execution time: 0.7800
INFO - 2018-11-22 17:15:08 --> Security Class Initialized
INFO - 2018-11-22 17:15:08 --> URI Class Initialized
INFO - 2018-11-22 17:15:08 --> Security Class Initialized
INFO - 2018-11-22 17:15:08 --> Router Class Initialized
INFO - 2018-11-22 17:15:08 --> Loader Class Initialized
DEBUG - 2018-11-22 17:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:08 --> Security Class Initialized
DEBUG - 2018-11-22 17:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:08 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:08 --> Input Class Initialized
INFO - 2018-11-22 17:15:08 --> Language Class Initialized
INFO - 2018-11-22 17:15:08 --> Input Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:08 --> Loader Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:08 --> Output Class Initialized
DEBUG - 2018-11-22 17:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:08 --> Language Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:08 --> Security Class Initialized
INFO - 2018-11-22 17:15:08 --> Loader Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:08 --> Input Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 17:15:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:08 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:08 --> Language Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:08 --> Input Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:08 --> Loader Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:08 --> Database Driver Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:08 --> Language Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:08 --> Database Driver Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:08 --> Loader Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:08 --> Database Driver Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 17:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:08 --> Controller Class Initialized
INFO - 2018-11-22 17:15:08 --> Model Class Initialized
INFO - 2018-11-22 17:15:08 --> Model Class Initialized
INFO - 2018-11-22 17:15:08 --> Model Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:08 --> Database Driver Class Initialized
INFO - 2018-11-22 17:15:08 --> Model Class Initialized
INFO - 2018-11-22 17:15:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: form_helper
DEBUG - 2018-11-22 17:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:08 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 17:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:08 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:10 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:10 --> Total execution time: 1.9351
INFO - 2018-11-22 17:15:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:10 --> Controller Class Initialized
INFO - 2018-11-22 17:15:10 --> Model Class Initialized
INFO - 2018-11-22 17:15:10 --> Model Class Initialized
INFO - 2018-11-22 17:15:10 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:10 --> Total execution time: 2.4411
INFO - 2018-11-22 17:15:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:10 --> Controller Class Initialized
INFO - 2018-11-22 17:15:10 --> Model Class Initialized
INFO - 2018-11-22 17:15:10 --> Model Class Initialized
INFO - 2018-11-22 17:15:10 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:10 --> Total execution time: 2.1891
INFO - 2018-11-22 17:15:10 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:10 --> Controller Class Initialized
INFO - 2018-11-22 17:15:10 --> Model Class Initialized
INFO - 2018-11-22 17:15:10 --> Model Class Initialized
INFO - 2018-11-22 17:15:11 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:11 --> Total execution time: 3.6302
INFO - 2018-11-22 17:15:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:11 --> Controller Class Initialized
INFO - 2018-11-22 17:15:11 --> Model Class Initialized
INFO - 2018-11-22 17:15:11 --> Model Class Initialized
INFO - 2018-11-22 17:15:11 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:11 --> Total execution time: 3.6952
INFO - 2018-11-22 17:15:16 --> Config Class Initialized
INFO - 2018-11-22 17:15:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:16 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:16 --> URI Class Initialized
INFO - 2018-11-22 17:15:16 --> Router Class Initialized
INFO - 2018-11-22 17:15:16 --> Config Class Initialized
INFO - 2018-11-22 17:15:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:16 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:16 --> Output Class Initialized
INFO - 2018-11-22 17:15:16 --> URI Class Initialized
INFO - 2018-11-22 17:15:16 --> Security Class Initialized
INFO - 2018-11-22 17:15:16 --> Router Class Initialized
INFO - 2018-11-22 17:15:16 --> Output Class Initialized
DEBUG - 2018-11-22 17:15:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:16 --> Input Class Initialized
INFO - 2018-11-22 17:15:16 --> Language Class Initialized
INFO - 2018-11-22 17:15:16 --> Security Class Initialized
INFO - 2018-11-22 17:15:16 --> Loader Class Initialized
DEBUG - 2018-11-22 17:15:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:16 --> Input Class Initialized
INFO - 2018-11-22 17:15:16 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:16 --> Language Class Initialized
INFO - 2018-11-22 17:15:16 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:16 --> Loader Class Initialized
INFO - 2018-11-22 17:15:16 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:16 --> Database Driver Class Initialized
INFO - 2018-11-22 17:15:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:16 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:16 --> Controller Class Initialized
DEBUG - 2018-11-22 17:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:16 --> Model Class Initialized
INFO - 2018-11-22 17:15:16 --> Model Class Initialized
INFO - 2018-11-22 17:15:16 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:16 --> Total execution time: 0.2520
INFO - 2018-11-22 17:15:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:16 --> Controller Class Initialized
INFO - 2018-11-22 17:15:16 --> Model Class Initialized
INFO - 2018-11-22 17:15:16 --> Model Class Initialized
INFO - 2018-11-22 17:15:18 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:18 --> Total execution time: 1.4941
INFO - 2018-11-22 17:15:22 --> Config Class Initialized
INFO - 2018-11-22 17:15:22 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:22 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:22 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:22 --> URI Class Initialized
INFO - 2018-11-22 17:15:22 --> Router Class Initialized
INFO - 2018-11-22 17:15:22 --> Output Class Initialized
INFO - 2018-11-22 17:15:22 --> Config Class Initialized
INFO - 2018-11-22 17:15:22 --> Security Class Initialized
INFO - 2018-11-22 17:15:22 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:22 --> Input Class Initialized
INFO - 2018-11-22 17:15:22 --> Language Class Initialized
INFO - 2018-11-22 17:15:22 --> Loader Class Initialized
DEBUG - 2018-11-22 17:15:22 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:22 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:22 --> URI Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:22 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:22 --> Router Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:22 --> Output Class Initialized
INFO - 2018-11-22 17:15:22 --> Security Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:15:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:22 --> Input Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:22 --> Language Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:22 --> Loader Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:22 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:22 --> Database Driver Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:22 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:22 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:15:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:22 --> Controller Class Initialized
INFO - 2018-11-22 17:15:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:22 --> Model Class Initialized
INFO - 2018-11-22 17:15:22 --> Model Class Initialized
INFO - 2018-11-22 17:15:22 --> Database Driver Class Initialized
INFO - 2018-11-22 17:15:22 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:22 --> Total execution time: 0.2020
DEBUG - 2018-11-22 17:15:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:22 --> Controller Class Initialized
INFO - 2018-11-22 17:15:22 --> Model Class Initialized
INFO - 2018-11-22 17:15:22 --> Model Class Initialized
INFO - 2018-11-22 17:15:22 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:22 --> Total execution time: 0.2290
INFO - 2018-11-22 17:15:28 --> Config Class Initialized
INFO - 2018-11-22 17:15:28 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:15:28 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:15:28 --> Utf8 Class Initialized
INFO - 2018-11-22 17:15:28 --> URI Class Initialized
INFO - 2018-11-22 17:15:28 --> Router Class Initialized
INFO - 2018-11-22 17:15:28 --> Output Class Initialized
INFO - 2018-11-22 17:15:28 --> Security Class Initialized
DEBUG - 2018-11-22 17:15:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:15:28 --> Input Class Initialized
INFO - 2018-11-22 17:15:28 --> Language Class Initialized
INFO - 2018-11-22 17:15:28 --> Loader Class Initialized
INFO - 2018-11-22 17:15:28 --> Helper loaded: url_helper
INFO - 2018-11-22 17:15:28 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:15:28 --> Helper loaded: file_helper
INFO - 2018-11-22 17:15:28 --> Helper loaded: form_helper
INFO - 2018-11-22 17:15:28 --> Helper loaded: general_helper
INFO - 2018-11-22 17:15:28 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:15:28 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:15:28 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:15:28 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:15:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:15:28 --> Controller Class Initialized
INFO - 2018-11-22 17:15:28 --> Model Class Initialized
INFO - 2018-11-22 17:15:28 --> Model Class Initialized
INFO - 2018-11-22 17:15:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:15:28 --> Total execution time: 0.1690
INFO - 2018-11-22 17:17:31 --> Config Class Initialized
INFO - 2018-11-22 17:17:32 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:17:32 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:32 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:32 --> URI Class Initialized
INFO - 2018-11-22 17:17:32 --> Router Class Initialized
INFO - 2018-11-22 17:17:32 --> Output Class Initialized
INFO - 2018-11-22 17:17:32 --> Security Class Initialized
DEBUG - 2018-11-22 17:17:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:32 --> Input Class Initialized
INFO - 2018-11-22 17:17:32 --> Language Class Initialized
INFO - 2018-11-22 17:17:32 --> Loader Class Initialized
INFO - 2018-11-22 17:17:32 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:32 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:32 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:32 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:32 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:32 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:32 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:32 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:32 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:17:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:17:32 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:32 --> Controller Class Initialized
INFO - 2018-11-22 17:17:32 --> Model Class Initialized
INFO - 2018-11-22 17:17:32 --> Model Class Initialized
INFO - 2018-11-22 17:17:32 --> Model Class Initialized
INFO - 2018-11-22 17:17:32 --> Model Class Initialized
INFO - 2018-11-22 17:17:33 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:17:33 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:33 --> Total execution time: 1.4941
INFO - 2018-11-22 17:17:35 --> Config Class Initialized
INFO - 2018-11-22 17:17:35 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:17:35 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:35 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:35 --> URI Class Initialized
INFO - 2018-11-22 17:17:35 --> Router Class Initialized
INFO - 2018-11-22 17:17:35 --> Output Class Initialized
INFO - 2018-11-22 17:17:35 --> Security Class Initialized
DEBUG - 2018-11-22 17:17:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:35 --> Input Class Initialized
INFO - 2018-11-22 17:17:35 --> Language Class Initialized
INFO - 2018-11-22 17:17:35 --> Loader Class Initialized
INFO - 2018-11-22 17:17:35 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:35 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:35 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:35 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:35 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:35 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:35 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:35 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:35 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:17:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:17:35 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:35 --> Controller Class Initialized
INFO - 2018-11-22 17:17:35 --> Model Class Initialized
INFO - 2018-11-22 17:17:35 --> Model Class Initialized
INFO - 2018-11-22 17:17:35 --> Model Class Initialized
INFO - 2018-11-22 17:17:35 --> Model Class Initialized
ERROR - 2018-11-22 17:17:36 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:17:40 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:17:40 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:17:40 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:17:40 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:17:40 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:40 --> Total execution time: 4.8373
INFO - 2018-11-22 17:17:46 --> Config Class Initialized
INFO - 2018-11-22 17:17:46 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:17:46 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:46 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:46 --> URI Class Initialized
INFO - 2018-11-22 17:17:46 --> Router Class Initialized
INFO - 2018-11-22 17:17:46 --> Output Class Initialized
INFO - 2018-11-22 17:17:46 --> Security Class Initialized
DEBUG - 2018-11-22 17:17:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:46 --> Input Class Initialized
INFO - 2018-11-22 17:17:46 --> Language Class Initialized
INFO - 2018-11-22 17:17:46 --> Loader Class Initialized
INFO - 2018-11-22 17:17:46 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:46 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:46 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:46 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:46 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:46 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:46 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:46 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:46 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:17:46 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:46 --> Controller Class Initialized
INFO - 2018-11-22 17:17:46 --> Model Class Initialized
INFO - 2018-11-22 17:17:46 --> Model Class Initialized
ERROR - 2018-11-22 17:17:47 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:17:47 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:17:48 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:17:48 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:17:48 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:48 --> Total execution time: 1.6191
INFO - 2018-11-22 17:17:48 --> Config Class Initialized
INFO - 2018-11-22 17:17:48 --> Config Class Initialized
INFO - 2018-11-22 17:17:48 --> Config Class Initialized
INFO - 2018-11-22 17:17:48 --> Hooks Class Initialized
INFO - 2018-11-22 17:17:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:17:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:48 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:17:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:48 --> URI Class Initialized
DEBUG - 2018-11-22 17:17:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:48 --> URI Class Initialized
INFO - 2018-11-22 17:17:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:48 --> Config Class Initialized
INFO - 2018-11-22 17:17:48 --> Config Class Initialized
INFO - 2018-11-22 17:17:48 --> Router Class Initialized
INFO - 2018-11-22 17:17:48 --> URI Class Initialized
INFO - 2018-11-22 17:17:48 --> Hooks Class Initialized
INFO - 2018-11-22 17:17:48 --> Router Class Initialized
INFO - 2018-11-22 17:17:48 --> Hooks Class Initialized
INFO - 2018-11-22 17:17:48 --> Output Class Initialized
DEBUG - 2018-11-22 17:17:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:48 --> Router Class Initialized
INFO - 2018-11-22 17:17:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:48 --> Output Class Initialized
INFO - 2018-11-22 17:17:48 --> URI Class Initialized
INFO - 2018-11-22 17:17:48 --> Security Class Initialized
DEBUG - 2018-11-22 17:17:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:48 --> Security Class Initialized
INFO - 2018-11-22 17:17:48 --> Router Class Initialized
INFO - 2018-11-22 17:17:48 --> Config Class Initialized
DEBUG - 2018-11-22 17:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:48 --> Output Class Initialized
DEBUG - 2018-11-22 17:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:48 --> Output Class Initialized
INFO - 2018-11-22 17:17:48 --> Hooks Class Initialized
INFO - 2018-11-22 17:17:48 --> Input Class Initialized
INFO - 2018-11-22 17:17:48 --> Security Class Initialized
INFO - 2018-11-22 17:17:48 --> Input Class Initialized
DEBUG - 2018-11-22 17:17:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:17:48 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:17:48 --> Security Class Initialized
INFO - 2018-11-22 17:17:48 --> Language Class Initialized
INFO - 2018-11-22 17:17:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:48 --> Input Class Initialized
INFO - 2018-11-22 17:17:48 --> URI Class Initialized
INFO - 2018-11-22 17:17:48 --> Language Class Initialized
INFO - 2018-11-22 17:17:48 --> Loader Class Initialized
INFO - 2018-11-22 17:17:48 --> Language Class Initialized
INFO - 2018-11-22 17:17:48 --> Router Class Initialized
DEBUG - 2018-11-22 17:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:48 --> Loader Class Initialized
INFO - 2018-11-22 17:17:48 --> Utf8 Class Initialized
INFO - 2018-11-22 17:17:48 --> URI Class Initialized
INFO - 2018-11-22 17:17:48 --> Output Class Initialized
INFO - 2018-11-22 17:17:48 --> Router Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:48 --> Security Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: file_helper
DEBUG - 2018-11-22 17:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:48 --> Input Class Initialized
INFO - 2018-11-22 17:17:48 --> Language Class Initialized
INFO - 2018-11-22 17:17:48 --> Output Class Initialized
INFO - 2018-11-22 17:17:48 --> Security Class Initialized
DEBUG - 2018-11-22 17:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:17:48 --> Loader Class Initialized
INFO - 2018-11-22 17:17:48 --> Input Class Initialized
INFO - 2018-11-22 17:17:48 --> Language Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:48 --> Loader Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:48 --> Database Driver Class Initialized
INFO - 2018-11-22 17:17:48 --> Database Driver Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:48 --> Loader Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:48 --> Input Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 17:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:17:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:48 --> Language Class Initialized
INFO - 2018-11-22 17:17:48 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-11-22 17:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:17:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:48 --> Loader Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: url_helper
INFO - 2018-11-22 17:17:48 --> Controller Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:17:48 --> Database Driver Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:48 --> Model Class Initialized
INFO - 2018-11-22 17:17:48 --> Model Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: file_helper
INFO - 2018-11-22 17:17:48 --> Model Class Initialized
INFO - 2018-11-22 17:17:48 --> Database Driver Class Initialized
INFO - 2018-11-22 17:17:48 --> Model Class Initialized
INFO - 2018-11-22 17:17:48 --> Helper loaded: form_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: general_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:17:48 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:17:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:17:48 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:17:50 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:50 --> Total execution time: 1.5771
INFO - 2018-11-22 17:17:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:50 --> Controller Class Initialized
INFO - 2018-11-22 17:17:50 --> Model Class Initialized
INFO - 2018-11-22 17:17:50 --> Model Class Initialized
INFO - 2018-11-22 17:17:50 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:50 --> Total execution time: 1.7361
INFO - 2018-11-22 17:17:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:50 --> Controller Class Initialized
INFO - 2018-11-22 17:17:50 --> Model Class Initialized
INFO - 2018-11-22 17:17:50 --> Model Class Initialized
INFO - 2018-11-22 17:17:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:51 --> Total execution time: 3.1112
INFO - 2018-11-22 17:17:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:51 --> Controller Class Initialized
INFO - 2018-11-22 17:17:51 --> Model Class Initialized
INFO - 2018-11-22 17:17:51 --> Model Class Initialized
INFO - 2018-11-22 17:17:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:51 --> Total execution time: 3.4062
INFO - 2018-11-22 17:17:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:51 --> Controller Class Initialized
INFO - 2018-11-22 17:17:51 --> Model Class Initialized
INFO - 2018-11-22 17:17:51 --> Model Class Initialized
INFO - 2018-11-22 17:17:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:51 --> Total execution time: 3.3942
INFO - 2018-11-22 17:17:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:17:51 --> Controller Class Initialized
INFO - 2018-11-22 17:17:51 --> Model Class Initialized
INFO - 2018-11-22 17:17:51 --> Model Class Initialized
INFO - 2018-11-22 17:17:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:17:51 --> Total execution time: 3.6262
INFO - 2018-11-22 17:18:01 --> Config Class Initialized
INFO - 2018-11-22 17:18:01 --> Config Class Initialized
INFO - 2018-11-22 17:18:01 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:18:01 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:18:01 --> Utf8 Class Initialized
INFO - 2018-11-22 17:18:01 --> URI Class Initialized
INFO - 2018-11-22 17:18:01 --> Router Class Initialized
INFO - 2018-11-22 17:18:01 --> Hooks Class Initialized
INFO - 2018-11-22 17:18:01 --> Output Class Initialized
DEBUG - 2018-11-22 17:18:01 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:18:01 --> Utf8 Class Initialized
INFO - 2018-11-22 17:18:01 --> Security Class Initialized
INFO - 2018-11-22 17:18:01 --> URI Class Initialized
DEBUG - 2018-11-22 17:18:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:18:01 --> Input Class Initialized
INFO - 2018-11-22 17:18:01 --> Router Class Initialized
INFO - 2018-11-22 17:18:01 --> Language Class Initialized
INFO - 2018-11-22 17:18:01 --> Output Class Initialized
INFO - 2018-11-22 17:18:01 --> Loader Class Initialized
INFO - 2018-11-22 17:18:01 --> Security Class Initialized
DEBUG - 2018-11-22 17:18:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:18:01 --> Input Class Initialized
INFO - 2018-11-22 17:18:01 --> Language Class Initialized
INFO - 2018-11-22 17:18:01 --> Helper loaded: url_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:18:01 --> Loader Class Initialized
INFO - 2018-11-22 17:18:01 --> Helper loaded: file_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: url_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: file_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: form_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: form_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: general_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: general_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:18:01 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:18:01 --> Database Driver Class Initialized
INFO - 2018-11-22 17:18:01 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:18:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:18:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:18:01 --> Controller Class Initialized
INFO - 2018-11-22 17:18:01 --> Model Class Initialized
DEBUG - 2018-11-22 17:18:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:18:01 --> Model Class Initialized
INFO - 2018-11-22 17:18:01 --> Final output sent to browser
DEBUG - 2018-11-22 17:18:01 --> Total execution time: 0.2310
INFO - 2018-11-22 17:18:01 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:18:01 --> Controller Class Initialized
INFO - 2018-11-22 17:18:01 --> Model Class Initialized
INFO - 2018-11-22 17:18:01 --> Model Class Initialized
INFO - 2018-11-22 17:18:02 --> Final output sent to browser
DEBUG - 2018-11-22 17:18:02 --> Total execution time: 1.5561
INFO - 2018-11-22 17:18:08 --> Config Class Initialized
INFO - 2018-11-22 17:18:08 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:18:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:18:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:18:08 --> Config Class Initialized
INFO - 2018-11-22 17:18:08 --> Hooks Class Initialized
INFO - 2018-11-22 17:18:08 --> URI Class Initialized
INFO - 2018-11-22 17:18:08 --> Router Class Initialized
DEBUG - 2018-11-22 17:18:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:18:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:18:08 --> Output Class Initialized
INFO - 2018-11-22 17:18:08 --> URI Class Initialized
INFO - 2018-11-22 17:18:08 --> Security Class Initialized
INFO - 2018-11-22 17:18:08 --> Router Class Initialized
DEBUG - 2018-11-22 17:18:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:18:08 --> Input Class Initialized
INFO - 2018-11-22 17:18:08 --> Output Class Initialized
INFO - 2018-11-22 17:18:08 --> Language Class Initialized
INFO - 2018-11-22 17:18:08 --> Security Class Initialized
DEBUG - 2018-11-22 17:18:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:18:08 --> Loader Class Initialized
INFO - 2018-11-22 17:18:08 --> Input Class Initialized
INFO - 2018-11-22 17:18:08 --> Helper loaded: url_helper
INFO - 2018-11-22 17:18:08 --> Language Class Initialized
INFO - 2018-11-22 17:18:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: form_helper
INFO - 2018-11-22 17:18:08 --> Loader Class Initialized
INFO - 2018-11-22 17:18:08 --> Helper loaded: general_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: url_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:18:08 --> Database Driver Class Initialized
INFO - 2018-11-22 17:18:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: form_helper
INFO - 2018-11-22 17:18:08 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:18:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:18:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:18:08 --> Controller Class Initialized
INFO - 2018-11-22 17:18:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:18:08 --> Model Class Initialized
INFO - 2018-11-22 17:18:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:18:08 --> Model Class Initialized
INFO - 2018-11-22 17:18:08 --> Final output sent to browser
DEBUG - 2018-11-22 17:18:08 --> Total execution time: 0.2080
INFO - 2018-11-22 17:18:08 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:18:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:18:08 --> Controller Class Initialized
INFO - 2018-11-22 17:18:08 --> Model Class Initialized
INFO - 2018-11-22 17:18:08 --> Model Class Initialized
INFO - 2018-11-22 17:18:08 --> Final output sent to browser
DEBUG - 2018-11-22 17:18:08 --> Total execution time: 0.3040
INFO - 2018-11-22 17:18:11 --> Config Class Initialized
INFO - 2018-11-22 17:18:11 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:18:11 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:18:11 --> Utf8 Class Initialized
INFO - 2018-11-22 17:18:11 --> URI Class Initialized
INFO - 2018-11-22 17:18:11 --> Router Class Initialized
INFO - 2018-11-22 17:18:11 --> Output Class Initialized
INFO - 2018-11-22 17:18:11 --> Security Class Initialized
DEBUG - 2018-11-22 17:18:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:18:11 --> Input Class Initialized
INFO - 2018-11-22 17:18:11 --> Language Class Initialized
INFO - 2018-11-22 17:18:11 --> Loader Class Initialized
INFO - 2018-11-22 17:18:11 --> Helper loaded: url_helper
INFO - 2018-11-22 17:18:11 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:18:11 --> Helper loaded: file_helper
INFO - 2018-11-22 17:18:11 --> Helper loaded: form_helper
INFO - 2018-11-22 17:18:11 --> Helper loaded: general_helper
INFO - 2018-11-22 17:18:11 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:18:11 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:18:11 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:18:11 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:18:11 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:18:11 --> Controller Class Initialized
INFO - 2018-11-22 17:18:11 --> Model Class Initialized
INFO - 2018-11-22 17:18:11 --> Model Class Initialized
INFO - 2018-11-22 17:18:11 --> Final output sent to browser
DEBUG - 2018-11-22 17:18:11 --> Total execution time: 0.1640
INFO - 2018-11-22 17:18:50 --> Config Class Initialized
INFO - 2018-11-22 17:18:50 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:18:50 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:18:50 --> Utf8 Class Initialized
INFO - 2018-11-22 17:18:50 --> URI Class Initialized
INFO - 2018-11-22 17:18:50 --> Router Class Initialized
INFO - 2018-11-22 17:18:50 --> Output Class Initialized
INFO - 2018-11-22 17:18:50 --> Security Class Initialized
DEBUG - 2018-11-22 17:18:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:18:50 --> Input Class Initialized
INFO - 2018-11-22 17:18:50 --> Language Class Initialized
INFO - 2018-11-22 17:18:50 --> Loader Class Initialized
INFO - 2018-11-22 17:18:50 --> Helper loaded: url_helper
INFO - 2018-11-22 17:18:50 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:18:50 --> Helper loaded: file_helper
INFO - 2018-11-22 17:18:50 --> Helper loaded: form_helper
INFO - 2018-11-22 17:18:50 --> Helper loaded: general_helper
INFO - 2018-11-22 17:18:50 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:18:50 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:18:50 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:18:50 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:18:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:18:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:18:50 --> Controller Class Initialized
INFO - 2018-11-22 17:18:50 --> Model Class Initialized
INFO - 2018-11-22 17:18:50 --> Model Class Initialized
INFO - 2018-11-22 17:18:50 --> Final output sent to browser
DEBUG - 2018-11-22 17:18:50 --> Total execution time: 0.2840
INFO - 2018-11-22 17:18:55 --> Config Class Initialized
INFO - 2018-11-22 17:18:55 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:18:55 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:18:55 --> Utf8 Class Initialized
INFO - 2018-11-22 17:18:55 --> URI Class Initialized
INFO - 2018-11-22 17:18:55 --> Router Class Initialized
INFO - 2018-11-22 17:18:55 --> Output Class Initialized
INFO - 2018-11-22 17:18:55 --> Security Class Initialized
DEBUG - 2018-11-22 17:18:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:18:55 --> Input Class Initialized
INFO - 2018-11-22 17:18:55 --> Language Class Initialized
INFO - 2018-11-22 17:18:55 --> Loader Class Initialized
INFO - 2018-11-22 17:18:55 --> Helper loaded: url_helper
INFO - 2018-11-22 17:18:55 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:18:55 --> Helper loaded: file_helper
INFO - 2018-11-22 17:18:55 --> Helper loaded: form_helper
INFO - 2018-11-22 17:18:55 --> Helper loaded: general_helper
INFO - 2018-11-22 17:18:55 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:18:55 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:18:55 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:18:55 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:18:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:18:55 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:18:55 --> Controller Class Initialized
INFO - 2018-11-22 17:18:55 --> Model Class Initialized
INFO - 2018-11-22 17:18:55 --> Model Class Initialized
INFO - 2018-11-22 17:18:55 --> Final output sent to browser
DEBUG - 2018-11-22 17:18:55 --> Total execution time: 0.2480
INFO - 2018-11-22 17:21:13 --> Config Class Initialized
INFO - 2018-11-22 17:21:13 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:13 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:13 --> URI Class Initialized
INFO - 2018-11-22 17:21:13 --> Router Class Initialized
INFO - 2018-11-22 17:21:13 --> Output Class Initialized
INFO - 2018-11-22 17:21:13 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:13 --> Input Class Initialized
INFO - 2018-11-22 17:21:13 --> Language Class Initialized
INFO - 2018-11-22 17:21:13 --> Loader Class Initialized
INFO - 2018-11-22 17:21:13 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:13 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:13 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:13 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:13 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:13 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:13 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:13 --> Controller Class Initialized
INFO - 2018-11-22 17:21:13 --> Model Class Initialized
INFO - 2018-11-22 17:21:13 --> Model Class Initialized
INFO - 2018-11-22 17:21:13 --> Model Class Initialized
INFO - 2018-11-22 17:21:13 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\InicioTrabajo/list.php
INFO - 2018-11-22 17:21:13 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:13 --> Total execution time: 0.3430
INFO - 2018-11-22 17:21:15 --> Config Class Initialized
INFO - 2018-11-22 17:21:15 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:15 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:15 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:15 --> URI Class Initialized
INFO - 2018-11-22 17:21:15 --> Router Class Initialized
INFO - 2018-11-22 17:21:15 --> Output Class Initialized
INFO - 2018-11-22 17:21:15 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:15 --> Input Class Initialized
INFO - 2018-11-22 17:21:15 --> Language Class Initialized
INFO - 2018-11-22 17:21:15 --> Loader Class Initialized
INFO - 2018-11-22 17:21:15 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:15 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:15 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:15 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:15 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:15 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:15 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:15 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:15 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:15 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:15 --> Controller Class Initialized
INFO - 2018-11-22 17:21:15 --> Model Class Initialized
INFO - 2018-11-22 17:21:15 --> Model Class Initialized
INFO - 2018-11-22 17:21:15 --> Model Class Initialized
INFO - 2018-11-22 17:21:15 --> Model Class Initialized
INFO - 2018-11-22 17:21:16 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:21:16 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:16 --> Total execution time: 1.3851
INFO - 2018-11-22 17:21:19 --> Config Class Initialized
INFO - 2018-11-22 17:21:19 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:19 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:19 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:19 --> URI Class Initialized
INFO - 2018-11-22 17:21:19 --> Router Class Initialized
INFO - 2018-11-22 17:21:19 --> Output Class Initialized
INFO - 2018-11-22 17:21:19 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:19 --> Input Class Initialized
INFO - 2018-11-22 17:21:19 --> Language Class Initialized
INFO - 2018-11-22 17:21:19 --> Loader Class Initialized
INFO - 2018-11-22 17:21:19 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:19 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:19 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:19 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:19 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:19 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:19 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:19 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:19 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:19 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:19 --> Controller Class Initialized
INFO - 2018-11-22 17:21:19 --> Model Class Initialized
INFO - 2018-11-22 17:21:19 --> Model Class Initialized
INFO - 2018-11-22 17:21:19 --> Model Class Initialized
INFO - 2018-11-22 17:21:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 17:21:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 17:21:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 17:21:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 17:21:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 17:21:19 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 17:21:19 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:19 --> Total execution time: 0.4370
INFO - 2018-11-22 17:21:20 --> Config Class Initialized
INFO - 2018-11-22 17:21:20 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:20 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:20 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:20 --> URI Class Initialized
INFO - 2018-11-22 17:21:20 --> Router Class Initialized
INFO - 2018-11-22 17:21:20 --> Output Class Initialized
INFO - 2018-11-22 17:21:20 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:20 --> Input Class Initialized
INFO - 2018-11-22 17:21:20 --> Language Class Initialized
ERROR - 2018-11-22 17:21:20 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 17:21:22 --> Config Class Initialized
INFO - 2018-11-22 17:21:22 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:22 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:22 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:22 --> URI Class Initialized
INFO - 2018-11-22 17:21:22 --> Router Class Initialized
INFO - 2018-11-22 17:21:22 --> Output Class Initialized
INFO - 2018-11-22 17:21:22 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:22 --> Input Class Initialized
INFO - 2018-11-22 17:21:22 --> Language Class Initialized
INFO - 2018-11-22 17:21:22 --> Loader Class Initialized
INFO - 2018-11-22 17:21:22 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:22 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:22 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:22 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:22 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:23 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:23 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:23 --> Controller Class Initialized
INFO - 2018-11-22 17:21:23 --> Model Class Initialized
INFO - 2018-11-22 17:21:23 --> Model Class Initialized
INFO - 2018-11-22 17:21:23 --> Model Class Initialized
INFO - 2018-11-22 17:21:23 --> Model Class Initialized
INFO - 2018-11-22 17:21:24 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:21:24 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:24 --> Total execution time: 1.8981
INFO - 2018-11-22 17:21:26 --> Config Class Initialized
INFO - 2018-11-22 17:21:26 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:26 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:26 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:26 --> URI Class Initialized
INFO - 2018-11-22 17:21:26 --> Router Class Initialized
INFO - 2018-11-22 17:21:26 --> Output Class Initialized
INFO - 2018-11-22 17:21:26 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:26 --> Input Class Initialized
INFO - 2018-11-22 17:21:26 --> Language Class Initialized
INFO - 2018-11-22 17:21:26 --> Loader Class Initialized
INFO - 2018-11-22 17:21:26 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:26 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:26 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:26 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:26 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:26 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:26 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:26 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:26 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:26 --> Controller Class Initialized
INFO - 2018-11-22 17:21:26 --> Model Class Initialized
INFO - 2018-11-22 17:21:26 --> Model Class Initialized
INFO - 2018-11-22 17:21:26 --> Model Class Initialized
INFO - 2018-11-22 17:21:26 --> Model Class Initialized
ERROR - 2018-11-22 17:21:27 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:21:31 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:21:31 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:21:31 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:21:31 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:21:31 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:31 --> Total execution time: 4.7253
INFO - 2018-11-22 17:21:36 --> Config Class Initialized
INFO - 2018-11-22 17:21:36 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:36 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:36 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:36 --> URI Class Initialized
INFO - 2018-11-22 17:21:36 --> Router Class Initialized
INFO - 2018-11-22 17:21:36 --> Output Class Initialized
INFO - 2018-11-22 17:21:36 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:36 --> Input Class Initialized
INFO - 2018-11-22 17:21:36 --> Language Class Initialized
INFO - 2018-11-22 17:21:36 --> Loader Class Initialized
INFO - 2018-11-22 17:21:36 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:36 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:36 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:36 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:36 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:36 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:36 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:36 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:36 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:36 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:36 --> Controller Class Initialized
INFO - 2018-11-22 17:21:36 --> Model Class Initialized
INFO - 2018-11-22 17:21:36 --> Model Class Initialized
ERROR - 2018-11-22 17:21:37 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:21:37 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:21:37 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:21:37 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:21:37 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:37 --> Total execution time: 1.7271
INFO - 2018-11-22 17:21:38 --> Config Class Initialized
INFO - 2018-11-22 17:21:38 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:38 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:38 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:38 --> URI Class Initialized
INFO - 2018-11-22 17:21:38 --> Router Class Initialized
INFO - 2018-11-22 17:21:38 --> Output Class Initialized
INFO - 2018-11-22 17:21:38 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:38 --> Input Class Initialized
INFO - 2018-11-22 17:21:38 --> Language Class Initialized
INFO - 2018-11-22 17:21:38 --> Loader Class Initialized
INFO - 2018-11-22 17:21:38 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:38 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:38 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:38 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:38 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:38 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:38 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:38 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:38 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:38 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:38 --> Controller Class Initialized
INFO - 2018-11-22 17:21:38 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> Config Class Initialized
INFO - 2018-11-22 17:21:39 --> Hooks Class Initialized
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
DEBUG - 2018-11-22 17:21:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:39 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:39 --> URI Class Initialized
INFO - 2018-11-22 17:21:39 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:39 --> Total execution time: 0.4680
INFO - 2018-11-22 17:21:39 --> Router Class Initialized
INFO - 2018-11-22 17:21:39 --> Config Class Initialized
INFO - 2018-11-22 17:21:39 --> Hooks Class Initialized
INFO - 2018-11-22 17:21:39 --> Output Class Initialized
DEBUG - 2018-11-22 17:21:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:39 --> Security Class Initialized
INFO - 2018-11-22 17:21:39 --> Config Class Initialized
DEBUG - 2018-11-22 17:21:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:39 --> Input Class Initialized
INFO - 2018-11-22 17:21:39 --> Language Class Initialized
INFO - 2018-11-22 17:21:39 --> Loader Class Initialized
INFO - 2018-11-22 17:21:39 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:39 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:39 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:39 --> URI Class Initialized
INFO - 2018-11-22 17:21:39 --> Router Class Initialized
INFO - 2018-11-22 17:21:39 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:39 --> Config Class Initialized
INFO - 2018-11-22 17:21:39 --> URI Class Initialized
INFO - 2018-11-22 17:21:39 --> Hooks Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:39 --> Router Class Initialized
DEBUG - 2018-11-22 17:21:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:39 --> Output Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:39 --> Output Class Initialized
INFO - 2018-11-22 17:21:39 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:39 --> Security Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:39 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:39 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 17:21:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:39 --> Input Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:39 --> Input Class Initialized
INFO - 2018-11-22 17:21:39 --> Language Class Initialized
INFO - 2018-11-22 17:21:39 --> Database Driver Class Initialized
INFO - 2018-11-22 17:21:39 --> Language Class Initialized
INFO - 2018-11-22 17:21:39 --> URI Class Initialized
INFO - 2018-11-22 17:21:39 --> Loader Class Initialized
INFO - 2018-11-22 17:21:39 --> Router Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:39 --> Output Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:39 --> Security Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: form_helper
DEBUG - 2018-11-22 17:21:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:39 --> Loader Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:39 --> Input Class Initialized
INFO - 2018-11-22 17:21:39 --> Language Class Initialized
INFO - 2018-11-22 17:21:39 --> Loader Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:39 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:39 --> Config Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:39 --> Hooks Class Initialized
INFO - 2018-11-22 17:21:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:39 --> Controller Class Initialized
DEBUG - 2018-11-22 17:21:39 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:39 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> URI Class Initialized
INFO - 2018-11-22 17:21:39 --> Final output sent to browser
INFO - 2018-11-22 17:21:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:39 --> Router Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:39 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:39 --> Total execution time: 0.6940
INFO - 2018-11-22 17:21:39 --> Output Class Initialized
INFO - 2018-11-22 17:21:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:39 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:39 --> Input Class Initialized
INFO - 2018-11-22 17:21:39 --> Controller Class Initialized
INFO - 2018-11-22 17:21:39 --> Language Class Initialized
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> Database Driver Class Initialized
INFO - 2018-11-22 17:21:39 --> Loader Class Initialized
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:39 --> Final output sent to browser
INFO - 2018-11-22 17:21:39 --> Helper loaded: file_helper
DEBUG - 2018-11-22 17:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:39 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:39 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:21:39 --> Total execution time: 0.5630
INFO - 2018-11-22 17:21:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:39 --> Controller Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:39 --> Database Driver Class Initialized
INFO - 2018-11-22 17:21:39 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:21:39 --> Total execution time: 0.7390
INFO - 2018-11-22 17:21:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:39 --> Controller Class Initialized
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
INFO - 2018-11-22 17:21:39 --> Model Class Initialized
DEBUG - 2018-11-22 17:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:41 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:41 --> Total execution time: 2.0011
INFO - 2018-11-22 17:21:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:41 --> Controller Class Initialized
INFO - 2018-11-22 17:21:41 --> Model Class Initialized
INFO - 2018-11-22 17:21:41 --> Model Class Initialized
INFO - 2018-11-22 17:21:41 --> Model Class Initialized
INFO - 2018-11-22 17:21:41 --> Model Class Initialized
INFO - 2018-11-22 17:21:42 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:42 --> Total execution time: 2.7982
INFO - 2018-11-22 17:21:50 --> Config Class Initialized
INFO - 2018-11-22 17:21:50 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:50 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:50 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:50 --> URI Class Initialized
INFO - 2018-11-22 17:21:50 --> Router Class Initialized
INFO - 2018-11-22 17:21:50 --> Output Class Initialized
INFO - 2018-11-22 17:21:51 --> Security Class Initialized
DEBUG - 2018-11-22 17:21:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:51 --> Config Class Initialized
INFO - 2018-11-22 17:21:51 --> Input Class Initialized
INFO - 2018-11-22 17:21:51 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:21:51 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:21:51 --> Utf8 Class Initialized
INFO - 2018-11-22 17:21:51 --> Language Class Initialized
INFO - 2018-11-22 17:21:51 --> URI Class Initialized
INFO - 2018-11-22 17:21:51 --> Loader Class Initialized
INFO - 2018-11-22 17:21:51 --> Router Class Initialized
INFO - 2018-11-22 17:21:51 --> Output Class Initialized
INFO - 2018-11-22 17:21:51 --> Security Class Initialized
INFO - 2018-11-22 17:21:51 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:21:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:21:51 --> Input Class Initialized
INFO - 2018-11-22 17:21:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:51 --> Language Class Initialized
INFO - 2018-11-22 17:21:51 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:51 --> Loader Class Initialized
INFO - 2018-11-22 17:21:51 --> Helper loaded: url_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: file_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: form_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: general_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:21:51 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:21:51 --> Database Driver Class Initialized
INFO - 2018-11-22 17:21:51 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:21:51 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:21:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:51 --> Session: Class initialized using 'files' driver.
DEBUG - 2018-11-22 17:21:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:21:51 --> Controller Class Initialized
INFO - 2018-11-22 17:21:51 --> Model Class Initialized
INFO - 2018-11-22 17:21:51 --> Model Class Initialized
INFO - 2018-11-22 17:21:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:51 --> Total execution time: 0.2720
INFO - 2018-11-22 17:21:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:21:51 --> Controller Class Initialized
INFO - 2018-11-22 17:21:51 --> Model Class Initialized
INFO - 2018-11-22 17:21:51 --> Model Class Initialized
INFO - 2018-11-22 17:21:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:21:51 --> Total execution time: 0.2160
INFO - 2018-11-22 17:22:00 --> Config Class Initialized
INFO - 2018-11-22 17:22:00 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:22:00 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:22:00 --> Utf8 Class Initialized
INFO - 2018-11-22 17:22:00 --> URI Class Initialized
INFO - 2018-11-22 17:22:00 --> Router Class Initialized
INFO - 2018-11-22 17:22:00 --> Output Class Initialized
INFO - 2018-11-22 17:22:00 --> Security Class Initialized
DEBUG - 2018-11-22 17:22:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:22:00 --> Input Class Initialized
INFO - 2018-11-22 17:22:00 --> Language Class Initialized
INFO - 2018-11-22 17:22:00 --> Loader Class Initialized
INFO - 2018-11-22 17:22:00 --> Helper loaded: url_helper
INFO - 2018-11-22 17:22:00 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:22:00 --> Helper loaded: file_helper
INFO - 2018-11-22 17:22:00 --> Helper loaded: form_helper
INFO - 2018-11-22 17:22:00 --> Helper loaded: general_helper
INFO - 2018-11-22 17:22:00 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:22:00 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:22:00 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:22:00 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:22:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:22:00 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:22:00 --> Controller Class Initialized
INFO - 2018-11-22 17:22:00 --> Model Class Initialized
INFO - 2018-11-22 17:22:00 --> Model Class Initialized
INFO - 2018-11-22 17:22:00 --> Final output sent to browser
DEBUG - 2018-11-22 17:22:00 --> Total execution time: 0.2430
INFO - 2018-11-22 17:23:41 --> Config Class Initialized
INFO - 2018-11-22 17:23:41 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:23:41 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:23:41 --> Utf8 Class Initialized
INFO - 2018-11-22 17:23:41 --> URI Class Initialized
INFO - 2018-11-22 17:23:41 --> Router Class Initialized
INFO - 2018-11-22 17:23:41 --> Output Class Initialized
INFO - 2018-11-22 17:23:41 --> Security Class Initialized
DEBUG - 2018-11-22 17:23:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:23:41 --> Input Class Initialized
INFO - 2018-11-22 17:23:41 --> Language Class Initialized
INFO - 2018-11-22 17:23:41 --> Loader Class Initialized
INFO - 2018-11-22 17:23:41 --> Helper loaded: url_helper
INFO - 2018-11-22 17:23:41 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:23:41 --> Helper loaded: file_helper
INFO - 2018-11-22 17:23:41 --> Helper loaded: form_helper
INFO - 2018-11-22 17:23:41 --> Helper loaded: general_helper
INFO - 2018-11-22 17:23:41 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:23:41 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:23:41 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:23:41 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:23:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:23:41 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:23:41 --> Controller Class Initialized
INFO - 2018-11-22 17:23:41 --> Model Class Initialized
INFO - 2018-11-22 17:23:41 --> Model Class Initialized
INFO - 2018-11-22 17:23:41 --> Model Class Initialized
INFO - 2018-11-22 17:23:41 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\header.php
INFO - 2018-11-22 17:23:41 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\dash.php
INFO - 2018-11-22 17:23:41 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\menu.php
INFO - 2018-11-22 17:23:41 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\content.php
INFO - 2018-11-22 17:23:41 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footerdash.php
INFO - 2018-11-22 17:23:41 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\footer.php
INFO - 2018-11-22 17:23:41 --> Final output sent to browser
DEBUG - 2018-11-22 17:23:41 --> Total execution time: 0.3260
INFO - 2018-11-22 17:23:42 --> Config Class Initialized
INFO - 2018-11-22 17:23:42 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:23:42 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:23:42 --> Utf8 Class Initialized
INFO - 2018-11-22 17:23:42 --> URI Class Initialized
INFO - 2018-11-22 17:23:42 --> Router Class Initialized
INFO - 2018-11-22 17:23:42 --> Output Class Initialized
INFO - 2018-11-22 17:23:42 --> Security Class Initialized
DEBUG - 2018-11-22 17:23:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:23:42 --> Input Class Initialized
INFO - 2018-11-22 17:23:42 --> Language Class Initialized
ERROR - 2018-11-22 17:23:42 --> 404 Page Not Found: Assets/css
INFO - 2018-11-22 17:23:46 --> Config Class Initialized
INFO - 2018-11-22 17:23:46 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:23:46 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:23:46 --> Utf8 Class Initialized
INFO - 2018-11-22 17:23:46 --> URI Class Initialized
INFO - 2018-11-22 17:23:46 --> Router Class Initialized
INFO - 2018-11-22 17:23:46 --> Output Class Initialized
INFO - 2018-11-22 17:23:46 --> Security Class Initialized
DEBUG - 2018-11-22 17:23:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:23:46 --> Input Class Initialized
INFO - 2018-11-22 17:23:46 --> Language Class Initialized
INFO - 2018-11-22 17:23:46 --> Loader Class Initialized
INFO - 2018-11-22 17:23:46 --> Helper loaded: url_helper
INFO - 2018-11-22 17:23:46 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:23:46 --> Helper loaded: file_helper
INFO - 2018-11-22 17:23:46 --> Helper loaded: form_helper
INFO - 2018-11-22 17:23:46 --> Helper loaded: general_helper
INFO - 2018-11-22 17:23:47 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:23:47 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:23:47 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:23:47 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:23:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:23:47 --> Controller Class Initialized
INFO - 2018-11-22 17:23:47 --> Model Class Initialized
INFO - 2018-11-22 17:23:47 --> Model Class Initialized
INFO - 2018-11-22 17:23:47 --> Model Class Initialized
INFO - 2018-11-22 17:23:47 --> Model Class Initialized
INFO - 2018-11-22 17:23:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:23:49 --> Final output sent to browser
DEBUG - 2018-11-22 17:23:49 --> Total execution time: 2.3571
INFO - 2018-11-22 17:23:52 --> Config Class Initialized
INFO - 2018-11-22 17:23:52 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:23:52 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:23:52 --> Utf8 Class Initialized
INFO - 2018-11-22 17:23:52 --> URI Class Initialized
INFO - 2018-11-22 17:23:52 --> Router Class Initialized
INFO - 2018-11-22 17:23:52 --> Output Class Initialized
INFO - 2018-11-22 17:23:52 --> Security Class Initialized
DEBUG - 2018-11-22 17:23:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:23:52 --> Input Class Initialized
INFO - 2018-11-22 17:23:52 --> Language Class Initialized
INFO - 2018-11-22 17:23:52 --> Loader Class Initialized
INFO - 2018-11-22 17:23:52 --> Helper loaded: url_helper
INFO - 2018-11-22 17:23:52 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:23:52 --> Helper loaded: file_helper
INFO - 2018-11-22 17:23:52 --> Helper loaded: form_helper
INFO - 2018-11-22 17:23:52 --> Helper loaded: general_helper
INFO - 2018-11-22 17:23:52 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:23:52 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:23:52 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:23:52 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:23:52 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:23:52 --> Controller Class Initialized
INFO - 2018-11-22 17:23:52 --> Model Class Initialized
INFO - 2018-11-22 17:23:52 --> Model Class Initialized
INFO - 2018-11-22 17:23:52 --> Model Class Initialized
INFO - 2018-11-22 17:23:52 --> Model Class Initialized
ERROR - 2018-11-22 17:23:53 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:23:56 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:23:56 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:23:56 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:23:57 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:23:57 --> Final output sent to browser
DEBUG - 2018-11-22 17:23:57 --> Total execution time: 5.0043
INFO - 2018-11-22 17:24:04 --> Config Class Initialized
INFO - 2018-11-22 17:24:04 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:04 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:04 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:04 --> URI Class Initialized
INFO - 2018-11-22 17:24:04 --> Router Class Initialized
INFO - 2018-11-22 17:24:04 --> Output Class Initialized
INFO - 2018-11-22 17:24:04 --> Security Class Initialized
DEBUG - 2018-11-22 17:24:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:04 --> Input Class Initialized
INFO - 2018-11-22 17:24:04 --> Language Class Initialized
INFO - 2018-11-22 17:24:04 --> Loader Class Initialized
INFO - 2018-11-22 17:24:04 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:04 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:04 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:04 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:04 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:04 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:04 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:04 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:04 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:24:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:04 --> Controller Class Initialized
INFO - 2018-11-22 17:24:04 --> Model Class Initialized
INFO - 2018-11-22 17:24:04 --> Model Class Initialized
ERROR - 2018-11-22 17:24:06 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:24:06 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:24:06 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:24:06 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:24:06 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:06 --> Total execution time: 1.6111
INFO - 2018-11-22 17:24:06 --> Config Class Initialized
INFO - 2018-11-22 17:24:06 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:06 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:06 --> URI Class Initialized
INFO - 2018-11-22 17:24:06 --> Router Class Initialized
INFO - 2018-11-22 17:24:06 --> Output Class Initialized
INFO - 2018-11-22 17:24:06 --> Security Class Initialized
DEBUG - 2018-11-22 17:24:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:06 --> Input Class Initialized
INFO - 2018-11-22 17:24:06 --> Language Class Initialized
INFO - 2018-11-22 17:24:06 --> Loader Class Initialized
INFO - 2018-11-22 17:24:06 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:06 --> Config Class Initialized
INFO - 2018-11-22 17:24:06 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:06 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:06 --> URI Class Initialized
INFO - 2018-11-22 17:24:06 --> Router Class Initialized
INFO - 2018-11-22 17:24:06 --> Output Class Initialized
INFO - 2018-11-22 17:24:06 --> Security Class Initialized
DEBUG - 2018-11-22 17:24:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:06 --> Input Class Initialized
INFO - 2018-11-22 17:24:06 --> Language Class Initialized
INFO - 2018-11-22 17:24:06 --> Loader Class Initialized
INFO - 2018-11-22 17:24:06 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:06 --> Config Class Initialized
INFO - 2018-11-22 17:24:06 --> Config Class Initialized
INFO - 2018-11-22 17:24:06 --> Hooks Class Initialized
INFO - 2018-11-22 17:24:06 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:06 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:24:06 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:06 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:06 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:06 --> URI Class Initialized
INFO - 2018-11-22 17:24:06 --> URI Class Initialized
INFO - 2018-11-22 17:24:06 --> Router Class Initialized
INFO - 2018-11-22 17:24:06 --> Router Class Initialized
INFO - 2018-11-22 17:24:06 --> Output Class Initialized
INFO - 2018-11-22 17:24:06 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:06 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:06 --> Security Class Initialized
INFO - 2018-11-22 17:24:06 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:06 --> Output Class Initialized
INFO - 2018-11-22 17:24:06 --> Helper loaded: form_helper
DEBUG - 2018-11-22 17:24:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:06 --> Security Class Initialized
INFO - 2018-11-22 17:24:06 --> Input Class Initialized
INFO - 2018-11-22 17:24:06 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:24:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:06 --> Language Class Initialized
INFO - 2018-11-22 17:24:06 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:06 --> Input Class Initialized
INFO - 2018-11-22 17:24:06 --> Loader Class Initialized
INFO - 2018-11-22 17:24:06 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:07 --> Language Class Initialized
INFO - 2018-11-22 17:24:07 --> Config Class Initialized
INFO - 2018-11-22 17:24:07 --> Loader Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:07 --> Config Class Initialized
DEBUG - 2018-11-22 17:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:07 --> Hooks Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:07 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:07 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:24:07 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:07 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:07 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:07 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:07 --> URI Class Initialized
INFO - 2018-11-22 17:24:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:07 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:07 --> URI Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:07 --> Controller Class Initialized
INFO - 2018-11-22 17:24:07 --> Router Class Initialized
INFO - 2018-11-22 17:24:07 --> Router Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: file_helper
DEBUG - 2018-11-22 17:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:07 --> Output Class Initialized
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
INFO - 2018-11-22 17:24:07 --> Output Class Initialized
INFO - 2018-11-22 17:24:07 --> Security Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:07 --> Security Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: form_helper
DEBUG - 2018-11-22 17:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:24:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:07 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:07 --> Input Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:07 --> Input Class Initialized
INFO - 2018-11-22 17:24:07 --> Language Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:07 --> Final output sent to browser
INFO - 2018-11-22 17:24:07 --> Language Class Initialized
DEBUG - 2018-11-22 17:24:07 --> Total execution time: 0.5280
INFO - 2018-11-22 17:24:07 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:07 --> Loader Class Initialized
INFO - 2018-11-22 17:24:07 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:07 --> Loader Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:07 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:07 --> Controller Class Initialized
INFO - 2018-11-22 17:24:07 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:07 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:07 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
INFO - 2018-11-22 17:24:07 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
DEBUG - 2018-11-22 17:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:07 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:07 --> Total execution time: 0.9111
INFO - 2018-11-22 17:24:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:07 --> Controller Class Initialized
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
INFO - 2018-11-22 17:24:07 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:07 --> Total execution time: 0.5940
INFO - 2018-11-22 17:24:07 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:07 --> Controller Class Initialized
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
INFO - 2018-11-22 17:24:07 --> Model Class Initialized
DEBUG - 2018-11-22 17:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:08 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:08 --> Total execution time: 1.9231
INFO - 2018-11-22 17:24:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:08 --> Controller Class Initialized
INFO - 2018-11-22 17:24:08 --> Model Class Initialized
INFO - 2018-11-22 17:24:08 --> Model Class Initialized
INFO - 2018-11-22 17:24:08 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:08 --> Total execution time: 1.7061
INFO - 2018-11-22 17:24:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:08 --> Controller Class Initialized
INFO - 2018-11-22 17:24:08 --> Model Class Initialized
INFO - 2018-11-22 17:24:08 --> Model Class Initialized
INFO - 2018-11-22 17:24:08 --> Model Class Initialized
INFO - 2018-11-22 17:24:08 --> Model Class Initialized
INFO - 2018-11-22 17:24:10 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:10 --> Total execution time: 2.9822
INFO - 2018-11-22 17:24:12 --> Config Class Initialized
INFO - 2018-11-22 17:24:12 --> Config Class Initialized
INFO - 2018-11-22 17:24:12 --> Hooks Class Initialized
INFO - 2018-11-22 17:24:12 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:12 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:24:12 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:12 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:12 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:12 --> URI Class Initialized
INFO - 2018-11-22 17:24:12 --> URI Class Initialized
INFO - 2018-11-22 17:24:12 --> Router Class Initialized
INFO - 2018-11-22 17:24:12 --> Router Class Initialized
INFO - 2018-11-22 17:24:12 --> Output Class Initialized
INFO - 2018-11-22 17:24:12 --> Output Class Initialized
INFO - 2018-11-22 17:24:12 --> Security Class Initialized
INFO - 2018-11-22 17:24:12 --> Security Class Initialized
DEBUG - 2018-11-22 17:24:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-11-22 17:24:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:12 --> Input Class Initialized
INFO - 2018-11-22 17:24:12 --> Input Class Initialized
INFO - 2018-11-22 17:24:12 --> Language Class Initialized
INFO - 2018-11-22 17:24:12 --> Language Class Initialized
INFO - 2018-11-22 17:24:12 --> Loader Class Initialized
INFO - 2018-11-22 17:24:12 --> Loader Class Initialized
INFO - 2018-11-22 17:24:12 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:12 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:12 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:12 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:24:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:12 --> Controller Class Initialized
INFO - 2018-11-22 17:24:12 --> Model Class Initialized
INFO - 2018-11-22 17:24:12 --> Model Class Initialized
DEBUG - 2018-11-22 17:24:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:12 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:12 --> Total execution time: 0.2650
INFO - 2018-11-22 17:24:12 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:12 --> Controller Class Initialized
INFO - 2018-11-22 17:24:12 --> Model Class Initialized
INFO - 2018-11-22 17:24:12 --> Model Class Initialized
INFO - 2018-11-22 17:24:12 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:12 --> Total execution time: 0.3180
INFO - 2018-11-22 17:24:16 --> Config Class Initialized
INFO - 2018-11-22 17:24:16 --> Config Class Initialized
INFO - 2018-11-22 17:24:16 --> Hooks Class Initialized
INFO - 2018-11-22 17:24:16 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:16 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:24:16 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:16 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:16 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:16 --> URI Class Initialized
INFO - 2018-11-22 17:24:16 --> URI Class Initialized
INFO - 2018-11-22 17:24:16 --> Router Class Initialized
INFO - 2018-11-22 17:24:16 --> Output Class Initialized
INFO - 2018-11-22 17:24:16 --> Security Class Initialized
DEBUG - 2018-11-22 17:24:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:16 --> Input Class Initialized
INFO - 2018-11-22 17:24:16 --> Language Class Initialized
INFO - 2018-11-22 17:24:16 --> Loader Class Initialized
INFO - 2018-11-22 17:24:16 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:16 --> Database Driver Class Initialized
INFO - 2018-11-22 17:24:16 --> Router Class Initialized
INFO - 2018-11-22 17:24:16 --> Output Class Initialized
INFO - 2018-11-22 17:24:16 --> Security Class Initialized
DEBUG - 2018-11-22 17:24:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:16 --> Input Class Initialized
INFO - 2018-11-22 17:24:16 --> Language Class Initialized
INFO - 2018-11-22 17:24:16 --> Loader Class Initialized
DEBUG - 2018-11-22 17:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:16 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:16 --> Controller Class Initialized
INFO - 2018-11-22 17:24:16 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:16 --> Model Class Initialized
INFO - 2018-11-22 17:24:16 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:16 --> Model Class Initialized
INFO - 2018-11-22 17:24:16 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:16 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:16 --> Total execution time: 0.2440
INFO - 2018-11-22 17:24:16 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:16 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:16 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:16 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:16 --> Controller Class Initialized
INFO - 2018-11-22 17:24:16 --> Model Class Initialized
INFO - 2018-11-22 17:24:16 --> Model Class Initialized
INFO - 2018-11-22 17:24:16 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:16 --> Total execution time: 0.3200
INFO - 2018-11-22 17:24:19 --> Config Class Initialized
INFO - 2018-11-22 17:24:19 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:24:19 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:24:19 --> Utf8 Class Initialized
INFO - 2018-11-22 17:24:19 --> URI Class Initialized
INFO - 2018-11-22 17:24:19 --> Router Class Initialized
INFO - 2018-11-22 17:24:19 --> Output Class Initialized
INFO - 2018-11-22 17:24:20 --> Security Class Initialized
DEBUG - 2018-11-22 17:24:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:24:20 --> Input Class Initialized
INFO - 2018-11-22 17:24:20 --> Language Class Initialized
INFO - 2018-11-22 17:24:20 --> Loader Class Initialized
INFO - 2018-11-22 17:24:20 --> Helper loaded: url_helper
INFO - 2018-11-22 17:24:20 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:24:20 --> Helper loaded: file_helper
INFO - 2018-11-22 17:24:20 --> Helper loaded: form_helper
INFO - 2018-11-22 17:24:20 --> Helper loaded: general_helper
INFO - 2018-11-22 17:24:20 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:24:20 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:24:20 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:24:20 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:24:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:24:20 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:24:20 --> Controller Class Initialized
INFO - 2018-11-22 17:24:20 --> Model Class Initialized
INFO - 2018-11-22 17:24:20 --> Model Class Initialized
INFO - 2018-11-22 17:24:20 --> Final output sent to browser
DEBUG - 2018-11-22 17:24:20 --> Total execution time: 0.2540
INFO - 2018-11-22 17:25:31 --> Config Class Initialized
INFO - 2018-11-22 17:25:31 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:25:31 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:31 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:31 --> URI Class Initialized
INFO - 2018-11-22 17:25:31 --> Router Class Initialized
INFO - 2018-11-22 17:25:31 --> Output Class Initialized
INFO - 2018-11-22 17:25:31 --> Security Class Initialized
DEBUG - 2018-11-22 17:25:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:31 --> Input Class Initialized
INFO - 2018-11-22 17:25:31 --> Language Class Initialized
INFO - 2018-11-22 17:25:31 --> Loader Class Initialized
INFO - 2018-11-22 17:25:31 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:31 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:31 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:31 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:31 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:31 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:31 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:31 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:31 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:31 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:31 --> Controller Class Initialized
INFO - 2018-11-22 17:25:31 --> Model Class Initialized
INFO - 2018-11-22 17:25:31 --> Model Class Initialized
INFO - 2018-11-22 17:25:31 --> Model Class Initialized
INFO - 2018-11-22 17:25:31 --> Model Class Initialized
INFO - 2018-11-22 17:25:32 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:25:32 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:32 --> Total execution time: 1.3941
INFO - 2018-11-22 17:25:38 --> Config Class Initialized
INFO - 2018-11-22 17:25:38 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:25:38 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:38 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:38 --> URI Class Initialized
INFO - 2018-11-22 17:25:38 --> Router Class Initialized
INFO - 2018-11-22 17:25:38 --> Output Class Initialized
INFO - 2018-11-22 17:25:38 --> Security Class Initialized
DEBUG - 2018-11-22 17:25:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:38 --> Input Class Initialized
INFO - 2018-11-22 17:25:38 --> Language Class Initialized
INFO - 2018-11-22 17:25:38 --> Loader Class Initialized
INFO - 2018-11-22 17:25:38 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:38 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:38 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:38 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:38 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:38 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:39 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:39 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:39 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:25:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:39 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:39 --> Controller Class Initialized
INFO - 2018-11-22 17:25:39 --> Model Class Initialized
INFO - 2018-11-22 17:25:39 --> Model Class Initialized
INFO - 2018-11-22 17:25:39 --> Model Class Initialized
INFO - 2018-11-22 17:25:39 --> Model Class Initialized
ERROR - 2018-11-22 17:25:40 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:25:44 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:25:44 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:25:44 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:25:44 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:25:44 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:44 --> Total execution time: 5.7543
INFO - 2018-11-22 17:25:47 --> Config Class Initialized
INFO - 2018-11-22 17:25:47 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:25:47 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:47 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:47 --> URI Class Initialized
INFO - 2018-11-22 17:25:47 --> Router Class Initialized
INFO - 2018-11-22 17:25:47 --> Output Class Initialized
INFO - 2018-11-22 17:25:47 --> Security Class Initialized
DEBUG - 2018-11-22 17:25:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:47 --> Input Class Initialized
INFO - 2018-11-22 17:25:47 --> Language Class Initialized
INFO - 2018-11-22 17:25:47 --> Loader Class Initialized
INFO - 2018-11-22 17:25:47 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:47 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:47 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:47 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:47 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:47 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:47 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:47 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:47 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:25:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:47 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:47 --> Controller Class Initialized
INFO - 2018-11-22 17:25:47 --> Model Class Initialized
INFO - 2018-11-22 17:25:47 --> Model Class Initialized
ERROR - 2018-11-22 17:25:49 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:25:49 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 1006
ERROR - 2018-11-22 17:25:49 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:25:49 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:25:49 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:49 --> Total execution time: 1.5491
INFO - 2018-11-22 17:25:49 --> Config Class Initialized
INFO - 2018-11-22 17:25:49 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:25:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:49 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:49 --> URI Class Initialized
INFO - 2018-11-22 17:25:49 --> Router Class Initialized
INFO - 2018-11-22 17:25:49 --> Output Class Initialized
INFO - 2018-11-22 17:25:49 --> Config Class Initialized
INFO - 2018-11-22 17:25:49 --> Hooks Class Initialized
INFO - 2018-11-22 17:25:49 --> Security Class Initialized
DEBUG - 2018-11-22 17:25:49 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:49 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:49 --> Input Class Initialized
INFO - 2018-11-22 17:25:49 --> Language Class Initialized
INFO - 2018-11-22 17:25:49 --> URI Class Initialized
INFO - 2018-11-22 17:25:49 --> Loader Class Initialized
INFO - 2018-11-22 17:25:49 --> Router Class Initialized
INFO - 2018-11-22 17:25:49 --> Output Class Initialized
INFO - 2018-11-22 17:25:49 --> Security Class Initialized
DEBUG - 2018-11-22 17:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:49 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:49 --> Config Class Initialized
INFO - 2018-11-22 17:25:49 --> Hooks Class Initialized
INFO - 2018-11-22 17:25:49 --> Config Class Initialized
INFO - 2018-11-22 17:25:49 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:25:49 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:25:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:49 --> Input Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:49 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:49 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:49 --> Language Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:49 --> URI Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:49 --> Loader Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:49 --> Config Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:49 --> Config Class Initialized
INFO - 2018-11-22 17:25:49 --> Hooks Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:25:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:49 --> URI Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:49 --> Hooks Class Initialized
INFO - 2018-11-22 17:25:49 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:49 --> Router Class Initialized
INFO - 2018-11-22 17:25:49 --> Router Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 17:25:49 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:49 --> URI Class Initialized
INFO - 2018-11-22 17:25:49 --> Output Class Initialized
INFO - 2018-11-22 17:25:49 --> Router Class Initialized
INFO - 2018-11-22 17:25:49 --> Output Class Initialized
INFO - 2018-11-22 17:25:49 --> Security Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:49 --> Output Class Initialized
INFO - 2018-11-22 17:25:49 --> Security Class Initialized
INFO - 2018-11-22 17:25:49 --> Utf8 Class Initialized
DEBUG - 2018-11-22 17:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:49 --> Input Class Initialized
INFO - 2018-11-22 17:25:49 --> Language Class Initialized
INFO - 2018-11-22 17:25:49 --> Database Driver Class Initialized
INFO - 2018-11-22 17:25:49 --> URI Class Initialized
INFO - 2018-11-22 17:25:49 --> Loader Class Initialized
INFO - 2018-11-22 17:25:49 --> Security Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:49 --> Input Class Initialized
INFO - 2018-11-22 17:25:49 --> Database Driver Class Initialized
INFO - 2018-11-22 17:25:49 --> Language Class Initialized
DEBUG - 2018-11-22 17:25:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:49 --> Input Class Initialized
INFO - 2018-11-22 17:25:49 --> Language Class Initialized
INFO - 2018-11-22 17:25:49 --> Loader Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:49 --> Router Class Initialized
INFO - 2018-11-22 17:25:49 --> Loader Class Initialized
INFO - 2018-11-22 17:25:49 --> Output Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:49 --> Database Driver Class Initialized
INFO - 2018-11-22 17:25:49 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:49 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:49 --> Security Class Initialized
INFO - 2018-11-22 17:25:49 --> Database Driver Class Initialized
INFO - 2018-11-22 17:25:49 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:25:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:50 --> Input Class Initialized
INFO - 2018-11-22 17:25:50 --> Language Class Initialized
INFO - 2018-11-22 17:25:50 --> Loader Class Initialized
INFO - 2018-11-22 17:25:50 --> Helper loaded: url_helper
DEBUG - 2018-11-22 17:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:50 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:50 --> Controller Class Initialized
INFO - 2018-11-22 17:25:50 --> Model Class Initialized
INFO - 2018-11-22 17:25:50 --> Model Class Initialized
INFO - 2018-11-22 17:25:50 --> Model Class Initialized
INFO - 2018-11-22 17:25:50 --> Model Class Initialized
INFO - 2018-11-22 17:25:50 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:50 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:50 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:50 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:50 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:50 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:50 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:51 --> Total execution time: 1.6411
INFO - 2018-11-22 17:25:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:51 --> Controller Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:51 --> Total execution time: 2.0131
INFO - 2018-11-22 17:25:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:51 --> Controller Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:51 --> Total execution time: 1.8921
INFO - 2018-11-22 17:25:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:51 --> Controller Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:51 --> Total execution time: 1.8191
INFO - 2018-11-22 17:25:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:51 --> Controller Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:51 --> Total execution time: 1.8601
INFO - 2018-11-22 17:25:51 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:51 --> Controller Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:51 --> Model Class Initialized
INFO - 2018-11-22 17:25:52 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:52 --> Total execution time: 3.0102
INFO - 2018-11-22 17:25:59 --> Config Class Initialized
INFO - 2018-11-22 17:25:59 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:25:59 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:59 --> Utf8 Class Initialized
INFO - 2018-11-22 17:25:59 --> Config Class Initialized
INFO - 2018-11-22 17:25:59 --> Hooks Class Initialized
INFO - 2018-11-22 17:25:59 --> URI Class Initialized
DEBUG - 2018-11-22 17:25:59 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:25:59 --> Router Class Initialized
INFO - 2018-11-22 17:25:59 --> Output Class Initialized
INFO - 2018-11-22 17:25:59 --> Security Class Initialized
INFO - 2018-11-22 17:25:59 --> Utf8 Class Initialized
DEBUG - 2018-11-22 17:25:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:59 --> URI Class Initialized
INFO - 2018-11-22 17:25:59 --> Input Class Initialized
INFO - 2018-11-22 17:25:59 --> Language Class Initialized
INFO - 2018-11-22 17:25:59 --> Router Class Initialized
INFO - 2018-11-22 17:25:59 --> Loader Class Initialized
INFO - 2018-11-22 17:25:59 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:59 --> Output Class Initialized
INFO - 2018-11-22 17:25:59 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:59 --> Helper loaded: file_helper
INFO - 2018-11-22 17:25:59 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:59 --> Security Class Initialized
INFO - 2018-11-22 17:25:59 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:59 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:59 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 17:25:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:25:59 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:59 --> Database Driver Class Initialized
INFO - 2018-11-22 17:25:59 --> Input Class Initialized
INFO - 2018-11-22 17:25:59 --> Language Class Initialized
INFO - 2018-11-22 17:25:59 --> Loader Class Initialized
INFO - 2018-11-22 17:25:59 --> Helper loaded: url_helper
INFO - 2018-11-22 17:25:59 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:25:59 --> Helper loaded: file_helper
DEBUG - 2018-11-22 17:25:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:59 --> Helper loaded: form_helper
INFO - 2018-11-22 17:25:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:59 --> Controller Class Initialized
INFO - 2018-11-22 17:25:59 --> Helper loaded: general_helper
INFO - 2018-11-22 17:25:59 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:25:59 --> Model Class Initialized
INFO - 2018-11-22 17:25:59 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:25:59 --> Model Class Initialized
INFO - 2018-11-22 17:25:59 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:25:59 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:59 --> Total execution time: 0.2440
INFO - 2018-11-22 17:25:59 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:25:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:25:59 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:25:59 --> Controller Class Initialized
INFO - 2018-11-22 17:25:59 --> Model Class Initialized
INFO - 2018-11-22 17:25:59 --> Model Class Initialized
INFO - 2018-11-22 17:25:59 --> Final output sent to browser
DEBUG - 2018-11-22 17:25:59 --> Total execution time: 0.2850
INFO - 2018-11-22 17:26:03 --> Config Class Initialized
INFO - 2018-11-22 17:26:03 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:26:03 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:26:03 --> Utf8 Class Initialized
INFO - 2018-11-22 17:26:03 --> URI Class Initialized
INFO - 2018-11-22 17:26:03 --> Router Class Initialized
INFO - 2018-11-22 17:26:03 --> Output Class Initialized
INFO - 2018-11-22 17:26:03 --> Security Class Initialized
DEBUG - 2018-11-22 17:26:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:26:03 --> Input Class Initialized
INFO - 2018-11-22 17:26:03 --> Language Class Initialized
INFO - 2018-11-22 17:26:03 --> Loader Class Initialized
INFO - 2018-11-22 17:26:03 --> Helper loaded: url_helper
INFO - 2018-11-22 17:26:03 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:26:03 --> Helper loaded: file_helper
INFO - 2018-11-22 17:26:03 --> Helper loaded: form_helper
INFO - 2018-11-22 17:26:03 --> Helper loaded: general_helper
INFO - 2018-11-22 17:26:03 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:26:03 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:26:04 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:26:04 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:26:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:26:04 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:26:04 --> Controller Class Initialized
INFO - 2018-11-22 17:26:04 --> Model Class Initialized
INFO - 2018-11-22 17:26:04 --> Model Class Initialized
INFO - 2018-11-22 17:26:04 --> Final output sent to browser
DEBUG - 2018-11-22 17:26:04 --> Total execution time: 0.1810
INFO - 2018-11-22 17:30:08 --> Config Class Initialized
INFO - 2018-11-22 17:30:08 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:08 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:08 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:08 --> URI Class Initialized
INFO - 2018-11-22 17:30:08 --> Router Class Initialized
INFO - 2018-11-22 17:30:08 --> Output Class Initialized
INFO - 2018-11-22 17:30:08 --> Security Class Initialized
DEBUG - 2018-11-22 17:30:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:08 --> Input Class Initialized
INFO - 2018-11-22 17:30:08 --> Language Class Initialized
INFO - 2018-11-22 17:30:08 --> Loader Class Initialized
INFO - 2018-11-22 17:30:08 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:08 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:08 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:08 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:08 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:08 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:08 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:08 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:08 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:30:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:08 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:08 --> Controller Class Initialized
INFO - 2018-11-22 17:30:08 --> Model Class Initialized
INFO - 2018-11-22 17:30:08 --> Model Class Initialized
INFO - 2018-11-22 17:30:08 --> Model Class Initialized
INFO - 2018-11-22 17:30:08 --> Model Class Initialized
INFO - 2018-11-22 17:30:09 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/list.php
INFO - 2018-11-22 17:30:09 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:09 --> Total execution time: 1.3541
INFO - 2018-11-22 17:30:13 --> Config Class Initialized
INFO - 2018-11-22 17:30:13 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:13 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:13 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:13 --> URI Class Initialized
INFO - 2018-11-22 17:30:13 --> Router Class Initialized
INFO - 2018-11-22 17:30:13 --> Output Class Initialized
INFO - 2018-11-22 17:30:13 --> Security Class Initialized
DEBUG - 2018-11-22 17:30:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:13 --> Input Class Initialized
INFO - 2018-11-22 17:30:13 --> Language Class Initialized
INFO - 2018-11-22 17:30:13 --> Loader Class Initialized
INFO - 2018-11-22 17:30:13 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:13 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:13 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:13 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:13 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:13 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:13 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:13 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:13 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:30:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:13 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:13 --> Controller Class Initialized
INFO - 2018-11-22 17:30:13 --> Model Class Initialized
INFO - 2018-11-22 17:30:13 --> Model Class Initialized
INFO - 2018-11-22 17:30:13 --> Model Class Initialized
INFO - 2018-11-22 17:30:13 --> Model Class Initialized
ERROR - 2018-11-22 17:30:14 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Tareas.php 924
ERROR - 2018-11-22 17:30:18 --> Severity: Notice --> Undefined variable: id_listarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 60
ERROR - 2018-11-22 17:30:18 --> Severity: Notice --> Undefined variable: tipo_tarea D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 62
ERROR - 2018-11-22 17:30:18 --> Severity: Notice --> Undefined variable: form D:\sitios\MTBA-desa-procprod\application\views\tareas\view_planificacion.php 912
INFO - 2018-11-22 17:30:18 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\tareas/view_planificacion.php
INFO - 2018-11-22 17:30:18 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:18 --> Total execution time: 5.2793
INFO - 2018-11-22 17:30:21 --> Config Class Initialized
INFO - 2018-11-22 17:30:21 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:21 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:21 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:21 --> URI Class Initialized
INFO - 2018-11-22 17:30:21 --> Router Class Initialized
INFO - 2018-11-22 17:30:21 --> Output Class Initialized
INFO - 2018-11-22 17:30:21 --> Security Class Initialized
DEBUG - 2018-11-22 17:30:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:21 --> Input Class Initialized
INFO - 2018-11-22 17:30:21 --> Language Class Initialized
INFO - 2018-11-22 17:30:21 --> Loader Class Initialized
INFO - 2018-11-22 17:30:21 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:21 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:21 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:21 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:21 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:22 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:22 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:22 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:22 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:30:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:22 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:22 --> Controller Class Initialized
INFO - 2018-11-22 17:30:22 --> Model Class Initialized
INFO - 2018-11-22 17:30:22 --> Model Class Initialized
ERROR - 2018-11-22 17:30:24 --> Severity: Notice --> Undefined variable: idglob D:\sitios\MTBA-desa-procprod\application\controllers\Otrabajo.php 507
ERROR - 2018-11-22 17:30:24 --> Severity: Notice --> Undefined offset: 0 D:\sitios\MTBA-desa-procprod\application\models\Otrabajos.php 981
ERROR - 2018-11-22 17:30:24 --> Severity: Notice --> Array to string conversion D:\sitios\MTBA-desa-procprod\application\views\otrabajos\asignacion_planificar.php 67
INFO - 2018-11-22 17:30:24 --> File loaded: D:\sitios\MTBA-desa-procprod\application\views\otrabajos/asignacion_planificar.php
INFO - 2018-11-22 17:30:24 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:24 --> Total execution time: 2.3081
INFO - 2018-11-22 17:30:24 --> Config Class Initialized
INFO - 2018-11-22 17:30:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:24 --> URI Class Initialized
INFO - 2018-11-22 17:30:24 --> Router Class Initialized
INFO - 2018-11-22 17:30:24 --> Output Class Initialized
INFO - 2018-11-22 17:30:24 --> Config Class Initialized
INFO - 2018-11-22 17:30:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:24 --> Config Class Initialized
INFO - 2018-11-22 17:30:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:24 --> Security Class Initialized
INFO - 2018-11-22 17:30:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:24 --> Config Class Initialized
INFO - 2018-11-22 17:30:24 --> URI Class Initialized
DEBUG - 2018-11-22 17:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:24 --> URI Class Initialized
INFO - 2018-11-22 17:30:24 --> Router Class Initialized
INFO - 2018-11-22 17:30:24 --> Input Class Initialized
INFO - 2018-11-22 17:30:24 --> Language Class Initialized
INFO - 2018-11-22 17:30:24 --> Hooks Class Initialized
INFO - 2018-11-22 17:30:24 --> Router Class Initialized
INFO - 2018-11-22 17:30:24 --> Output Class Initialized
INFO - 2018-11-22 17:30:24 --> Security Class Initialized
INFO - 2018-11-22 17:30:24 --> Config Class Initialized
INFO - 2018-11-22 17:30:24 --> Output Class Initialized
DEBUG - 2018-11-22 17:30:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:24 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:24 --> Input Class Initialized
INFO - 2018-11-22 17:30:24 --> Config Class Initialized
DEBUG - 2018-11-22 17:30:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:24 --> Security Class Initialized
INFO - 2018-11-22 17:30:24 --> Hooks Class Initialized
INFO - 2018-11-22 17:30:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:24 --> Loader Class Initialized
INFO - 2018-11-22 17:30:24 --> Language Class Initialized
INFO - 2018-11-22 17:30:24 --> URI Class Initialized
DEBUG - 2018-11-22 17:30:24 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:24 --> URI Class Initialized
DEBUG - 2018-11-22 17:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:24 --> Loader Class Initialized
INFO - 2018-11-22 17:30:24 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:24 --> Router Class Initialized
INFO - 2018-11-22 17:30:24 --> Router Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:24 --> Input Class Initialized
INFO - 2018-11-22 17:30:24 --> URI Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:24 --> Output Class Initialized
INFO - 2018-11-22 17:30:24 --> Output Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:24 --> Language Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:24 --> Security Class Initialized
INFO - 2018-11-22 17:30:24 --> Router Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:24 --> Security Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: form_helper
DEBUG - 2018-11-22 17:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:24 --> Output Class Initialized
INFO - 2018-11-22 17:30:24 --> Input Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:24 --> Loader Class Initialized
DEBUG - 2018-11-22 17:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:24 --> Security Class Initialized
INFO - 2018-11-22 17:30:24 --> Language Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: cabecera_helper
DEBUG - 2018-11-22 17:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:24 --> Loader Class Initialized
INFO - 2018-11-22 17:30:24 --> Input Class Initialized
INFO - 2018-11-22 17:30:24 --> Input Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:24 --> Language Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:24 --> Language Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:24 --> Loader Class Initialized
INFO - 2018-11-22 17:30:24 --> Loader Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: directory_helper
DEBUG - 2018-11-22 17:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:24 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:24 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:24 --> Helper loaded: general_helper
DEBUG - 2018-11-22 17:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:24 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:24 --> Controller Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:24 --> Model Class Initialized
DEBUG - 2018-11-22 17:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:24 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:24 --> Database Driver Class Initialized
INFO - 2018-11-22 17:30:24 --> Model Class Initialized
INFO - 2018-11-22 17:30:24 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: formulario_helper
DEBUG - 2018-11-22 17:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:24 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:24 --> Helper loaded: popup_helper
DEBUG - 2018-11-22 17:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:24 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:26 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:26 --> Total execution time: 1.7841
INFO - 2018-11-22 17:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:26 --> Controller Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:26 --> Total execution time: 1.9711
INFO - 2018-11-22 17:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:26 --> Controller Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:26 --> Total execution time: 1.9731
INFO - 2018-11-22 17:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:26 --> Controller Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:26 --> Total execution time: 1.8791
INFO - 2018-11-22 17:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:26 --> Controller Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:26 --> Model Class Initialized
INFO - 2018-11-22 17:30:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:28 --> Total execution time: 3.3842
INFO - 2018-11-22 17:30:28 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:28 --> Controller Class Initialized
INFO - 2018-11-22 17:30:28 --> Model Class Initialized
INFO - 2018-11-22 17:30:28 --> Model Class Initialized
INFO - 2018-11-22 17:30:28 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:28 --> Total execution time: 3.4822
INFO - 2018-11-22 17:30:36 --> Config Class Initialized
INFO - 2018-11-22 17:30:36 --> Config Class Initialized
INFO - 2018-11-22 17:30:36 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:36 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:36 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:36 --> URI Class Initialized
INFO - 2018-11-22 17:30:36 --> Router Class Initialized
INFO - 2018-11-22 17:30:36 --> Output Class Initialized
INFO - 2018-11-22 17:30:36 --> Hooks Class Initialized
INFO - 2018-11-22 17:30:36 --> Security Class Initialized
DEBUG - 2018-11-22 17:30:36 --> UTF-8 Support Enabled
DEBUG - 2018-11-22 17:30:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:36 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:36 --> URI Class Initialized
INFO - 2018-11-22 17:30:36 --> Input Class Initialized
INFO - 2018-11-22 17:30:36 --> Router Class Initialized
INFO - 2018-11-22 17:30:36 --> Output Class Initialized
INFO - 2018-11-22 17:30:36 --> Security Class Initialized
INFO - 2018-11-22 17:30:36 --> Language Class Initialized
DEBUG - 2018-11-22 17:30:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:37 --> Loader Class Initialized
INFO - 2018-11-22 17:30:37 --> Input Class Initialized
INFO - 2018-11-22 17:30:37 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:37 --> Language Class Initialized
INFO - 2018-11-22 17:30:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:37 --> Loader Class Initialized
INFO - 2018-11-22 17:30:37 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:37 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:37 --> Database Driver Class Initialized
INFO - 2018-11-22 17:30:37 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:30:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2018-11-22 17:30:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:37 --> Controller Class Initialized
INFO - 2018-11-22 17:30:37 --> Model Class Initialized
INFO - 2018-11-22 17:30:37 --> Model Class Initialized
INFO - 2018-11-22 17:30:37 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:37 --> Total execution time: 0.3150
INFO - 2018-11-22 17:30:37 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:37 --> Controller Class Initialized
INFO - 2018-11-22 17:30:37 --> Model Class Initialized
INFO - 2018-11-22 17:30:37 --> Model Class Initialized
INFO - 2018-11-22 17:30:37 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:37 --> Total execution time: 0.3780
INFO - 2018-11-22 17:30:50 --> Config Class Initialized
INFO - 2018-11-22 17:30:50 --> Hooks Class Initialized
DEBUG - 2018-11-22 17:30:50 --> UTF-8 Support Enabled
INFO - 2018-11-22 17:30:50 --> Utf8 Class Initialized
INFO - 2018-11-22 17:30:50 --> URI Class Initialized
INFO - 2018-11-22 17:30:50 --> Router Class Initialized
INFO - 2018-11-22 17:30:50 --> Output Class Initialized
INFO - 2018-11-22 17:30:50 --> Security Class Initialized
DEBUG - 2018-11-22 17:30:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-11-22 17:30:50 --> Input Class Initialized
INFO - 2018-11-22 17:30:50 --> Language Class Initialized
INFO - 2018-11-22 17:30:50 --> Loader Class Initialized
INFO - 2018-11-22 17:30:50 --> Helper loaded: url_helper
INFO - 2018-11-22 17:30:50 --> Helper loaded: directory_helper
INFO - 2018-11-22 17:30:50 --> Helper loaded: file_helper
INFO - 2018-11-22 17:30:50 --> Helper loaded: form_helper
INFO - 2018-11-22 17:30:50 --> Helper loaded: general_helper
INFO - 2018-11-22 17:30:50 --> Helper loaded: formulario_helper
INFO - 2018-11-22 17:30:50 --> Helper loaded: cabecera_helper
INFO - 2018-11-22 17:30:50 --> Helper loaded: popup_helper
INFO - 2018-11-22 17:30:50 --> Database Driver Class Initialized
DEBUG - 2018-11-22 17:30:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2018-11-22 17:30:50 --> Session: Class initialized using 'files' driver.
INFO - 2018-11-22 17:30:50 --> Controller Class Initialized
INFO - 2018-11-22 17:30:50 --> Model Class Initialized
INFO - 2018-11-22 17:30:50 --> Model Class Initialized
INFO - 2018-11-22 17:30:50 --> Final output sent to browser
DEBUG - 2018-11-22 17:30:50 --> Total execution time: 0.1850
