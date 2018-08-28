INSERT INTO `mtba-desa-procprod`.`frm_formularios`
(`form_id`,`nombre`,`descripcion`,`habilitado`,`fec_creacion`,`fec_deprecado`,`usuario`)
VALUES('7000', 'Adjunto de Informe Técnico', NULL, '1', '2018-08-27 12:04:06', NULL, NULL);
INSERT INTO `mtba-desa-procprod`.`frm_categorias`
(`CATE_ID`,`NOMBRE`,`PISTA`,`FEC_CREACION`,`FORM_ID`,`ORDEN`)
VALUES('7000', 'Archivo Informe Tecnico', NULL, '2018-08-27 12:13:22', '7000', '1');
INSERT INTO `mtba-desa-procprod`.`frm_grupos`
(`GRUP_ID`,`NOMBRE`,`PISTA`,`FEC_CREACION`,`CATE_ID`,`ORDEN`)
VALUES('7000', 'Adjunto Informe Tecnico', NULL, '2018-08-27 12:12:53', '7000', '1');
INSERT INTO `mtba-desa-procprod`.`frm_valores`
(`VALO_ID`,`NOMBRE`,`PISTA`,`LONGITUD`,`VALOR_DEFECTO`,`OBLIGATORIO`,`FEC_CREACION`,`TIDA_ID`,`GRUP_ID`,`ORDEN`)
VALUES('7000', 'Informe Archivo Tecnico', NULL, NULL, NULL, '0', '2018-08-27 12:14:58', '6', '7000', '1');