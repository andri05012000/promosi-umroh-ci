<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promosi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Upload_promosi');
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['uploads'] = $this->Upload_promosi->get_all();
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Promosi', $data);
            $this->load->view('adminpromo/Footer', $data);


        }else{
            $this->load->view('errors/403');
            
         }
       
    }

    public function edit($id)
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['upload'] = $this->Upload_promosi->get_by_id($id);
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Update_promosi', $data);
            $this->load->view('adminpromo/Footer', $data);

        }else{
            $this->load->view('errors/403');
            
         }
        
    }

    public function update()
    {
        $id = $this->input->post('id');
        

        

        $data = array(
            
        );

        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();

            $upload = $this->Upload_promosi->get_by_id($id);
            if (file_exists('assets/upload/images/'.$upload->image) && $upload->image) {
                unlink('assets/upload/images/'.$upload->image);
            }

            $data['image'] = $image;
        }

        $this->Upload_promosi->update($data, $id);
        redirect('Promosi');
    }

    private function _do_upload()
    {
        $image_name = time().'-'.$_FILES["image"]['name'];

        $config['upload_path'] 		= 'assets/upload/images/';
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
        $config['max_size'] 		= 100000;
        $config['max_widht'] 		= 100000;
        $config['max_height']  		= 100000;
        $config['file_name'] 		= $image_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('Promosi');
        }
        return $this->upload->data('file_name');
    }
}
