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
}
