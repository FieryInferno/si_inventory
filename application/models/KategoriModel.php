<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {

  private $table  = 'kategori';
  
	public function getAll()
	{
    $this->db->select($this->table . '.*, user1.username as user_create, user2.username as user_modify');
    $this->db->join('user as user1', $this->table . '.created_by = user1.id_user');
    $this->db->join('user as user2', $this->table . '.modify_by = user2.id_user', 'left');
    return $this->db->get($this->table)->result_array();
	}

  public function insert()
  {
    $this->db->insert($this->table, [
      'kode'           => $this->input->post('kode_kategori'),
      'nama'      => $this->input->post('nama_kategori'),
      'created_date'        => date('Y-m-d'),
      'created_by'          => $this->session->id_user
    ]);
  }

  public function get($id_kategori)
  {
    return $this->db->get_where($this->table, [
      'id_kategori' => $id_kategori
    ])->row_array();
  }

  public function update($id_kategori)
  {
    $data = [
      'kode'          => $this->input->post('kode_kategori'),
      'nama'          => $this->input->post('nama_kategori'),
      'modify_date'   => date('Y-m-d'),
      'modify_by'     => $this->session->id_user
    ];
    $this->db->where('id_kategori', $id_kategori);
    $this->db->update($this->table, $data);
  }

  public function delete($id_barang_keluar)
  {
    $this->db->where('id_barang_keluar', $id_barang_keluar);
    $this->db->delete($this->table);
  }
}