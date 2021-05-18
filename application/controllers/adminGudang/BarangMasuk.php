<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangMasuk extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'adminGudang/barangMasuk';
    $data['barang'] = $this->BarangMasukModel->getAll();
		$this->load->view('adminGudang/template', $data);
	}
}