<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangMasuk extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'adminGudang/barangMasuk';
    $data['barang'] = $this->BarangMasukModel->getAll();
		$this->load->view('adminGudang/template', $data);
	}

  public function tambah()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
      $this->form_validation->set_rules('id_barang', 'Kode Barang', 'required');
      $this->form_validation->set_rules('qty', 'QTY', 'required');
      $this->form_validation->set_rules('tanggal_kadaluwarsa', 'Tanggal Kadaluwarsa', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->BarangMasukModel->insert();
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
    $data['konten'] = 'adminGudang/tambahBarangMasuk';
    $data['barang'] = $this->BarangModel->getAll();
		$this->load->view('adminGudang/template', $data);
  }
}