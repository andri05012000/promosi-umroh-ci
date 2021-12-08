<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Upload_berita');
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['uploads'] = $this->Upload_berita->get_all();
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Berita', $data);
            $this->load->view('adminpromo/Footer', $data);


        }else{
            $this->load->view('errors/403');
            
         }
       
    }


    public function add()
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['query'] = $this->Upload_berita->get_all();
            $this->load->view('adminpromo/Header');
            $this->load->view('adminpromo/Upload_berita');
            $this->load->view('adminpromo/Footer');

        }else{
            $this->load->view('errors/403');
            
         }
    }
    
    public function create()
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'tanggal' => $this->input->post('tanggal'),
            'penulis' => $this->input->post('penulis'),
        );
        
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $data['image'] = $image;
        }
        
        $this->Upload_berita->insert($data);
        redirect('Berita', $data);
    }

    public function edit($id)
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['upload'] = $this->Upload_berita->get_by_id($id);
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Update_berita', $data);
            $this->load->view('adminpromo/Footer', $data);

        }else{
            $this->load->view('errors/403');
            
         }
        
    }

    public function update()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $tanggal = $this->input->post('tanggal');
        $penulis = $this->input->post('penulis');
       

        

        $data = array(
           'judul' => $judul,
           'isi' => $isi,
           'tanggal' => $tanggal,
           'penulis' => $penulis,
        );

        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();

            $upload = $this->Upload_berita->get_by_id($id);
            if (file_exists('assets/upload/images/'.$upload->image) && $upload->image) {
                unlink('assets/upload/images/'.$upload->image);
            }

            $data['image'] = $image;
        }

        $this->Upload_berita->update($data, $id);
        redirect('Berita');
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
            redirect('Berita');
        }
        return $this->upload->data('file_name');
    }

    public function delete($id)
    {
        $upload = $this->Upload_berita->get_by_id($id);
        if (file_exists('assets/upload/images/'.$upload->image) && $upload->image) {
            unlink('assets/upload/images/'.$upload->image);
        }
        $this->Upload_berita->delete($id);
        redirect('Berita');
    }
}
