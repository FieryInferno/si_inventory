<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('role', 'Jabatan', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->UserModel->insert();
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Tambah data berhasil.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/manajemen_user.html');
      } else {
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal!</strong>' . validation_errors() . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/manajemen_user.html');
      }
    }
    $data['konten'] = 'adminGudang/user';
    $data['user']   = $this->UserModel->getAll();
		$this->load->view('adminGudang/template', $data);
	}

  public function edit($id_user)
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('role', 'Jabatan', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $this->UserModel->update($id_user);
        $this->session->set_flashdata('pesan', '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> Edit data berhasil.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ');
        redirect('admin_gudang/manajemen_user.html');
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
    $data           = $this->UserModel->get($id_user);
    $data['konten'] = 'adminGudang/editUser';
		$this->load->view('adminGudang/template', $data);
  }

  public function hapus($id_user)
  {
    $this->UserModel->delete($id_user);
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Sukses!</strong> Hapus data berhasil.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    ');
    redirect('admin_gudang/manajemen_user.html');
  }
}