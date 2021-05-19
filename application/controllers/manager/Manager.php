<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Manager extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'manager/dashboard';
    $data['barang'] = $this->BarangModel->getLaporan();
		$this->load->view('manager/template', $data);
	}

  public function pdf()
  {
    $data['barang'] = $this->BarangModel->getLaporan();
    ob_start();
      $this->load->view('manager/pdf', $data);
      // $this->load->view('login', $data);
      $html = ob_get_contents();
    ob_end_clean();
    ob_clean();
    $filename = uniqid();
    $options  = new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('legal', 'potrait');
    $dompdf->render();
    $dompdf->stream($filename, array("Attachment" => 0) );
  }
}