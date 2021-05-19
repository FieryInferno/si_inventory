<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangKeluar extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'adminGudang/barangKeluar';
    $data['barang'] = $this->BarangKeluarModel->getAll();
		$this->load->view('adminGudang/template', $data);
	}

  public function tambah()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('tanggal_keluar', 'Tanggal Keluar', 'required');
      $this->form_validation->set_rules('id_barang', 'Kode Barang', 'required');
      $this->form_validation->set_rules('qty', 'QTY', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->BarangKeluarModel->insert();
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Tambah data berhasil.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/barang_keluar.html');
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
    $data['konten'] = 'adminGudang/tambahBarangKeluar';
    $data['barang'] = $this->BarangModel->getAll();
		$this->load->view('adminGudang/template', $data);
  }

  public function edit($id_barang_masuk)
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
      $this->form_validation->set_rules('id_barang', 'Kode Barang', 'required');
      $this->form_validation->set_rules('qty', 'QTY', 'required');
      $this->form_validation->set_rules('tanggal_kadaluwarsa', 'Tanggal Kadaluwarsa', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->BarangMasukModel->update($id_barang_masuk);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Tambah data berhasil.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/barang_masuk.html');
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
    $data           = $this->BarangMasukModel->get($id_barang_masuk);
    $data['konten'] = 'adminGudang/editBarangMasuk';
    $data['barang'] = $this->BarangModel->getAll();
		$this->load->view('adminGudang/template', $data);
  }

  public function hapus($id_barang_masuk)
  {
    $this->BarangMasukModel->delete($id_barang_masuk);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Hapus data berhasil.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('admin_gudang/barang_masuk.html');
  }
}