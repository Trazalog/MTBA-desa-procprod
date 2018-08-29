<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preinforme extends CI_Controller {
    
    /**
     * __construct()
     * Método constructor de la clase Bonitas.
     *
     * @return  void
     */
    function __construct()
    {
        parent::__construct();      
        $this->load->model('Preinformes');
    }

    public function index($permission)
    {
        $data['formularios'] = array(1, 3);
        $data['permission']  = $permission;
        $this->load->view('preinforme/view', $data);
    }

    public function generar() {
        $idForms = json_decode( $this->input->post('idForms') );

        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('soft Trazajobs');
        $pdf->SetTitle('Preinforme');
        $pdf->SetSubject('Preinforme');
        $pdf->SetKeywords('preinforme, trazalog, trazajobs');
 
        // ---------------------------------------------------------
        // establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
        // Establecer el tipo de letra
 
        //Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
        // Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('helvetica', '', 12, '', true);
 
        // Añadir una página
        // Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
        // Establecemos el contenido para imprimir
        $informe = $this->Preinformes->getFormularios($idForms);

        //preparamos y maquetamos el contenido a crear
        $html = '';
        $html .= '<style type=text/css>';
        $html .= 'th{color: #fff; font-weight: bold; background-color: #222}';
        $html .= 'td{background-color: #AAC7E3; color: #fff}';
        $html .= '</style>';
        $html .= ''.$informe;
 
        // Imprimimos el texto con writeHTML()
        $pdf->writeHTML($html, true, false, true, false, '');

        // ---------------------------------------------------------
        // Cerrar el documento PDF y preparamos la salida
        // Este método tiene varias opciones, consulte la documentación para más información.
        //$nombre_archivo = utf8_decode( base_url()."assets/Preinforme.pdf");
        //$pdf->Output($nombre_archivo, 'I');
        
        //In the include/tcpdf_static.php file about 1848 line in the static function fopenLocal if I delete the complete 'if statement' it works fine.
        // public static function fopenLocal($filename, $mode) {
        //     /*if (strpos($filename, '://') === false) {
        //         $filename = 'file://'.$filename;
        //     } elseif (strpos($filename, 'file://') !== 0) {
        //         return false;
        //     }*/
        //     return fopen($filename, $mode);
        // }

        $pdfCreado = $pdf->Output('assets/preinforme.pdf', 'F');
    }

    public function eliminarPDF() {
        $archivoPreinforme = 'assets/preinforme.pdf';
        if( file_exists($archivoPreinforme) )
        {
            if(unlink($archivoPreinforme))
            {
                //archivo eliminado
                return true;
            }
            else {
                return false;//"No se pudo borrar el archivo";
            }
        }
        else
        {
            return false;//"No se encontró el archivo";
        }
    }
    
}