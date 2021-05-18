<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model {

  private $table  = 'stok_barang';
  
	public function getAll()
	{
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
      'created_date'  => date('Y-m-d'),
      'created_by'    => $this->session->id_user
    ]);
  }
}