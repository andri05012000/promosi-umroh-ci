<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentanguser extends CI_Controller {

	function __construct(){
        parent::__construct();		
        $this->load->model('M_tentang');
        $this->load->helper('url');
     }

	
	public function index()
	{
		$data['katalog']=$this->M_tentang->get_all_produk();
		$this->load->view('user/Tentang', $data);
	}
}
