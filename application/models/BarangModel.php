<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model {

  private $table  = 'stok_barang';
  
	public function getAll()
	{
    $this->db->select($this->table . '.*, user1.username as user_create, user2.username as user_modify, kategori.nama as nama_kategori');
    $this->db->join('user as user1', $this->table . '.created_by = user1.id_user');
    $this->db->join('user as user2', $this->table . '.modify_by = user2.id_user', 'left');
    $this->db->join('kategori', $this->table . '.kategori = kategori.id_kategori');
    return $this->db->get($this->table)->result_array();
	}

  public function insert()
  {
    $this->db->insert($this->table, [
      'kode_barang'   => $this->input->post('kode_barang'),
      'nama_barang'   => $this->input->post('nama_barang'),
      'kategori'      => $this->input->post('kategori'),
      'qty'           => $this->input->post('qty'),
      'satuan'        => $this->input->post('satuan'),
      'harga'         => $this->input->post('harga'),
      'created_date'  => date('Y-m-d'),
      'created_by'    => $this->session->id_user
    ]);
  }

  public function get($id_barang)
  {
    return $this->db->get_where($this->table, [
      'id_barang' => $id_barang
    ])->row_array();
  }

  public function update($id_barang)
  {
    $data = [
      'kode_barang'   => $this->input->post('kode_barang'),
      'nama_barang'   => $this->input->post('nama_barang'),
      'kategori'      => $this->input->post('kategori'),
      'qty'           => $this->input->post('qty'),
      'satuan'        => $this->input->post('satuan'),
      'harga'         => $this->input->post('harga'),
      'modify_date'   => date('Y-m-d'),
      'modify_by'     => $this->session->id_user
    ];
    $this->db->where('id_barang', $id_barang);
    $this->db->update($this->table, $data);
  }

  public function delete($id_barang)
  {
    $this->db->where('id_barang', $id_barang);
    $this->db->delete($this->table);
  }
}