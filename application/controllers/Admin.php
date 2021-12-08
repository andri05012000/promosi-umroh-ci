<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->helper('url');
		$this->load->library('session');
	}

	function index(){

		if($this->session->userdata('akses')=='1'){
			redirect('Beranda');
		}else{
		$this->load->view('user/Login');
		}
	}

	function auth(){
        $this->M_admin->auth();
    }

    function logout(){
        $this->session->sess_destroy();
         redirect(site_url('Admin'));
    }
}
