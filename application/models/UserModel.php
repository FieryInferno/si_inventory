<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

  private $table  = 'user';
  
	public function login()
	{
    return $this->db->get_where($this->table, [
      'username'  => $this->input->post('username')
    ])->row_array();
	}
  
  public function getAll()
  {
    return $this->db->get($this->table)->result_array();
  }

  public function insert()
  {
    $this->db->insert($this->table, [
      'username'      => $this->input->post('username'),
      'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'role'          => $this->input->post('role'),
      'namaLengkap'   => $this->input->post('namaLengkap'),
      'email'         => $this->input->post('email'),
      'created_date'  => date('Y-m-d'),
      'created_by'    => $this->session->id_user
    ]);
  }
}
