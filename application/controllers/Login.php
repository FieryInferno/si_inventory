<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
	public function index()
	{
    if ($this->input->post()) {
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run() !== FALSE) {
        $data = $this->UserModel->login();
        if ($data) {
          if (password_verify($this->input->post('password'), $data['password'])) {
            $this->session->set_userdata([
              'username'  => $data['username'],
              'role'      => $data['role'],
              'id_user'   => $data['id_user']
            ]);
            switch ($data['role']) {
              case 'admin_gudang':
                redirect('admin_gudang.html');
                break;
              case 'manager':
                redirect('manager.html');
                break;
              
              default:
                # code...
                break;
            }
          } else {
            $this->session->set_flashdata('pesan', '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> Password salah.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            ');
          }
        } else {
          $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal!</strong> Username salah.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          ');
        }
        redirect();
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
		$this->load->view('login');
	}
}