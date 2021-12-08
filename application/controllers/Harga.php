<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

	function __construct(){
        parent::__construct();		
        $this->load->model('M_paket');
        $this->load->helper('url');
     }

	
	public function index()
	{
		 $data['katalog']=$this->M_paket->get_all_produk();
		$this->load->view('user/Harga', $data);
	}
}
