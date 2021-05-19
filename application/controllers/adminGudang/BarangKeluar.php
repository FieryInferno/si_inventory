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

  public function edit($id_barang_keluar)
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('tanggal_keluar', 'Tanggal Keluar', 'required');
      $this->form_validation->set_rules('id_barang', 'Kode Barang', 'required');
      $this->form_validation->set_rules('qty', 'QTY', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->BarangKeluarModel->update($id_barang_keluar);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Edit data berhasil.
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
    $data           = $this->BarangKeluarModel->get($id_barang_keluar);
    $data['konten'] = 'adminGudang/editBarangkeluar';
    $data['barang'] = $this->BarangModel->getAll();
		$this->load->view('adminGudang/template', $data);
  }

  public function hapus($id_barang_keluar)
  {
    $this->BarangKeluarModel->delete($id_barang_keluar);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Hapus data berhasil.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('admin_gudang/barang_keluar.html');
  }
}