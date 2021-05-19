<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

  public function excel()
  {
    $spreadsheet	= \PhpOffice\PhpSpreadsheet\IOFactory::load('assets/laporan.xls');
    $worksheet		= $spreadsheet->getActiveSheet();
    $barang       = $this->BarangModel->getLaporan();
    $x            = 2;
    $no           = 1;
    foreach ($barang as $key) {
      $worksheet->getCell('A' . $x)->setValue($no++);
      $worksheet->getCell('B' . $x)->setValue($key['nama_barang']);
      $worksheet->getCell('C' . $x)->setValue("Rp " . number_format($key['harga'], 2, ',', '.'));
      $worksheet->getCell('D' . $x)->setValue($key['satuan']);
      $worksheet->getCell('E' . $x)->setValue($key['total_barang_keluar']);
      $worksheet->getCell('F' . $x)->setValue($key['qty']);
      $x++;
    }
    $writer = new Xlsx($spreadsheet);
    $filename = 'laporan';
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }
}