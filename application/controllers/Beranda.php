<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('akses')=='1')
        {
            $this->load->view('adminpromo/Header');
			$this->load->view('adminpromo/Beranda');
			$this->load->view('adminpromo/Footer');


        }else{
            $this->load->view('errors/403');
            
         }
		
	}
}
