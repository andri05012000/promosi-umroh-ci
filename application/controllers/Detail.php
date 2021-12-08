<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    function __construct(){
        parent::__construct();      
        $this->load->model('Upload_paket');
        $this->load->helper('url');
     }

    public function lengkap($id)
    {
        $data['row']=$this->Upload_paket->get_by_id($id);
        $this->load->view('user/Detail',$data);
    }
}