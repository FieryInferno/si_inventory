<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangMasukModel extends CI_Model {

  private $table  = 'barang_masuk';
  
	public function getAll()
	{
    $this->db->select($this->table . '.*, user1.username as user_create, user2.username as user_modify, stok_barang.kode_barang, stok_barang.nama_barang, stok_barang.kategori, stok_barang.satuan');
    $this->db->join('user as user1', $this->table . '.created_by = user1.id_user');
    $this->db->join('user as user2', $this->table . '.modify_by = user2.id_user', 'left');
    $this->db->join('stok_barang', $this->table . '.id_barang = stok_barang.id_barang');
    return $this->db->get($this->table)->result_array();
	}

  public function insert()
  {
    $this->db->insert($this->table, [
      'id_barang'           => $this->input->post('id_barang'),
      'tanggal_masuk'       => $this->input->post('tanggal_masuk'),
      'tanggal_kadaluwarsa' => $this->input->post('tanggal_kadaluwarsa'),
      'qty'                 => $this->input->post('qty'),
      'created_date'        => date('Y-m-d'),
      'created_by'          => $this->session->id_user
    ]);
  }

  public function get($id_barang_masuk)
  {
    return $this->db->get_where($this->table, [
      'id_barang_masuk' => $id_barang_masuk
    ])->row_array();
  }

  public function update($id_barang_masuk)
  {
    $data = [
      'id_barang'           => $this->input->post('id_barang'),
      'tanggal_masuk'       => $this->input->post('tanggal_masuk'),
      'tanggal_kadaluwarsa' => $this->input->post('tanggal_kadaluwarsa'),
      'qty'                 => $this->input->post('qty'),
      'modify_date'         => date('Y-m-d'),
      'modify_by'           => $this->session->id_user
    ];
    $this->db->where('id_barang_masuk', $id_barang_masuk);
    $this->db->update($this->table, $data);
  }

  public function delete($id_barang_masuk)
  {
    $this->db->where('id_barang_masuk', $id_barang_masuk);
    $this->db->delete($this->table);
  }
}