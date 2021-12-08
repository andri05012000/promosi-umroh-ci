<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();		
        $this->load->model('M_beranda');
        $this->load->helper('url');
     }


	public function index()
	{
        $data['katalog']=$this->M_beranda->get_all_produk();
        $data['berita']=$this->M_beranda->get_all_berita();
		$this->load->view('user/Beranda', $data);
	}
}
