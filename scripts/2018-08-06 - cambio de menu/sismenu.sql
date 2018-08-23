-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mtba-desa-procprod
-- ------------------------------------------------------
-- Server version	5.6.31


--
-- Table structure for table `sismenu`
--

CREATE TABLE `sismenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sismenu`
--

INSERT INTO `sismenu` (`id`, `name`, `slug`, `icon`, `parent`, `number`) VALUES 
(1,'Clientes','Cliente','fa fa-users',NULL,1),
(2,'Calendario','Calendario/indexot','fa fa-leanpub',NULL,2),
(9,'Seguridad','','fa fa-key',NULL,3),
(10,'Usuarios','user','',9,1),
(11,'Grupos','group','',9,2),
(12,'Administración','','fa fa-fw fa-cogs',NULL,4),
(13,'Zonas','zone','',12,1),
(14,'Familias','family','',12,2),
(15,'Sub-Familias','family/indexSF','',12,3),
(16,'BackUp','backup','fa fa-check-square-o',NULL,5),
(17,'Ordenes_de_trabajo','','fa fa-check-square-o',NULL,6),
(18,'Alta_Ordenes','Otrabajo/listOrden','fa fa-plus',17,1),
(19,'Administra_Ordenes','Envio','fa fa-thumbs-up',17,2),
(20,'Reporte Ordenes','','fa fa-file-picture-o',17,3),
(21,'Ordenes_Pedido','','fa  fa-tags',NULL,7),
(22,'Proveedores','proveedor','fa fa-truck',21,1),
(23,'Enviar Pedido','','fa fa-paper-plane ',21,2),
(24,'Reporte O. Pedido','','fa fa-file-picture-o',21,3),
(25,'Gestion_Stock','','fa fa-truck',NULL,8),
(26,'Articulos','Article','fa fa-cubes',25,1),
(27,'Stock','Lote','fa fa-truck',25,2),
(28,'Remitos','Remito','fa fa-paperclip ',25,3),
(29,'Ordenes_insumos','Ordeninsumo','fa fa-check',25,4),
(30,'Proveedores_','proveedor','fa fa-truck',25,5),
(31,'Nota_Pedido','Notapedido','fa fa-cart-plus',21,4),
(32,'Administra_Pedidos','Administracion','fa fa-truck',NULL,9),
(33,'Importar_Excel','Import','fa fa-upload',NULL,10),
(34,'Taller','Taller','fa fa-check',NULL,11),
(35,'ABM_Empresa','Sistema','fa fa-tasks',NULL,12),
(36,'Plantilla','Plantilla','fa fa-calendar',NULL,13),
(37,'Bonita','Bonita/conexion','',NULL,14),
(38,'Tareas','Tarea','',NULL,15),
(39,'Formulario','Form','',NULL,16);
