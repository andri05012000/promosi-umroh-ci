<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kontak');
        $this->load->helper('url');
    }
	
	public function index()
	{
		$this->load->view('user/Kontak');
	}

	public function create()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
            'tanggal' => $this->input->post('tanggal'),
        );
        
        $this->M_kontak->insert($data);
        $this->session->set_flashdata('message',' <div class="alert alert-info alert-dismissible">
					                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                  <h5><i class="icon fas fa-info"></i> Pesan Terkirim!</h5>
					                  Terimakasih Sudah Mengirim Pesan
					                </div>                                            
					                ');
        redirect('Kontak');
    }

    public function tampildata()
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['uploads'] = $this->M_kontak->get_all();
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Kontak', $data);
            $this->load->view('adminpromo/Footer', $data);


        }else{
            $this->load->view('errors/403');
            
         }
       
    }
}
