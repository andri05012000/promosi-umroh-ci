<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Detail');
		$this->load->view('Footer');
	}
}
