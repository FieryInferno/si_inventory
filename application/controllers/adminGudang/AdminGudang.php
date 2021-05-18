<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminGudang extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'adminGudang/dashboard';
		$this->load->view('adminGudang/template', $data);
	}
}
