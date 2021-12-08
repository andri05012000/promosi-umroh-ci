<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->model('Upload_berita');
        $this->load->helper('url');
     }

	
	public function lengkap($id)
	{
		$data['row']=$this->Upload_berita->get_by_id($id);
		$this->load->view('user/News', $data);
	}
}
