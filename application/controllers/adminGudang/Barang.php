<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'adminGudang/stokBarang';
    $data['barang'] = $this->BarangModel->getAll();
		$this->load->view('adminGudang/template', $data);
	}

  public function tambah()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
      $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
      $this->form_validation->set_rules('kategori', 'Kategori', 'required');
      $this->form_validation->set_rules('qty', 'QTY', 'required');
      $this->form_validation->set_rules('satuan', 'Satuan', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->BarangModel->insert();
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Tambah data berhasil.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/stok_barang.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong>' . validation_errors() . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
      }
    }
    $data['konten'] = 'adminGudang/tambahStokBarang';
		$this->load->view('adminGudang/template', $data);
  }
}