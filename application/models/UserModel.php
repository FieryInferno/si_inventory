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
    $this->db->select($this->table . '.*, user1.username as user_create, user2.username as user_modify');
    $this->db->join($this->table . ' as user1', $this->table . '.created_by = user1.id_user');
    $this->db->join($this->table . ' as user2', $this->table . '.modify_by = user2.id_user', 'left');
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

  public function update($id_user)
  {
    $data = [
      'username'      => $this->input->post('username'),
      'role'          => $this->input->post('role'),
      'namaLengkap'   => $this->input->post('namaLengkap'),
      'email'         => $this->input->post('email'),
      'modify_date'   => date('Y-m-d'),
      'modify_by'     => $this->session->id_user
    ];
    if ($this->input->post('password') !== '') {
      $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
    }
    $this->db->where('id_user', $id_user);
    $this->db->update($this->table, $data);
  }

  public function get($id_user)
  {
    return $this->db->get_where($this->table, [
      'id_user' => $id_user
    ])->row_array();
  }

  public function delete($id_user)
  {
    $this->db->where('id_user', $id_user);
    $this->db->delete($this->table);
  }
}
