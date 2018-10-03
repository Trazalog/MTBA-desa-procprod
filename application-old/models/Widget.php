<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Widget Class
 * Clase para el manejo de widgets del sistema,
 * que extiende de la clase MY_Model.
 */
class Widget extends CI_Model {

    /**
     * __construct()
     * Método constructor de la clase menuModel.
     *
     * @return  void
     */
    function __construct()
    {
        parent::__construct();
    }

    // --------------------------------------------------------------------

    /**
     * Cantidad de Registros de la tabla $tabla.
     *
     * @return  Int     Devuelve la cantidad de registros.
     */
    function getCantidad($tabla)
    {
        $this->db->select('*');
        $this->db->from($tabla);
        return $this->db->count_all_results();
    }

    // --------------------------------------------------------------------

    /**
     * Cantidad de Registros de la tabla $tabla, que cumplan la condicion de $whereCampo = $whereValor.
     *
     * @param   String  $data   Whether to enable Query Builder
     * @param   String  $data   Whether to enable Query Builder
     * @param   String  $data   Whether to enable Query Builder
     *
     * @return  Int     Devuelve la cantidad de registros.
     */
    function getCantidadWhere($tabla, $whereCampo, $whereValor)
    {
        $this->db->select('*');
        $this->db->from($tabla);
        $this->db->where($whereCampo, $whereValor);
        return $this->db->count_all_results();
    }

}