<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required');
      $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->KategoriModel->insert();
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Tambah data berhasil.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/kategori.html');
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
    $data['konten'] = 'adminGudang/kategori';
    $data['kategori'] = $this->KategoriModel->getAll();
		$this->load->view('adminGudang/template', $data);
	}

  public function edit($id_kategori)
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required');
      $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->KategoriModel->update($id_kategori);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Edit data berhasil.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/kategori.html');
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
    $data           = $this->KategoriModel->get($id_kategori);
    $data['konten'] = 'adminGudang/editKategori';
		$this->load->view('adminGudang/template', $data);
  }

  public function hapus($id_kategori)
  {
    $this->KategoriModel->delete($id_kategori);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Hapus data berhasil.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('admin_gudang/kategori.html');
  }
}