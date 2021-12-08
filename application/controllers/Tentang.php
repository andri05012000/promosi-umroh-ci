<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Upload_tentang');
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['uploads'] = $this->Upload_tentang->get_all();
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Tentang', $data);
            $this->load->view('adminpromo/Footer', $data);


        }else{
            $this->load->view('errors/403');
            
         }
       
    }

    public function edit($id)
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['upload'] = $this->Upload_tentang->get_by_id($id);
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Update_tentang', $data);
            $this->load->view('adminpromo/Footer', $data);

        }else{
            $this->load->view('errors/403');
            
         }
        
    }

    public function update()
    {
        $id = $this->input->post('id');
        $isi = $this->input->post('isi');
        

        

        $data = array(
            
           'isi' => $isi,
        );

        $this->Upload_tentang->update($data, $id);
        redirect('Tentang');
    }

    
}
