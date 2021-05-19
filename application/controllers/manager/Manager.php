<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
  
	public function index()
	{
    $data['konten'] = 'manager/dashboard';
		$this->load->view('manager/template', $data);
	}
}