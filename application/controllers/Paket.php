<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Upload_paket');
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['uploads'] = $this->Upload_paket->get_all();
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Paket', $data);
            $this->load->view('adminpromo/Footer', $data);


        }else{
            $this->load->view('errors/403');
            
         }
       
    }


    public function add()
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['query'] = $this->Upload_paket->get_all();
            $this->load->view('adminpromo/Header');
            $this->load->view('adminpromo/Upload_paket');
            $this->load->view('adminpromo/Footer');

        }else{
            $this->load->view('errors/403');
            
         }
    }
    
    public function create()
    {
        $data = array(
            'namapaket' => $this->input->post('namapaket'),
            'detailpaket' => $this->input->post('detailpaket'),
            'hargatermasuk' => $this->input->post('hargatermasuk'),
            'hargatidaktermasuk' => $this->input->post('hargatidaktermasuk'),
            'catatan' => $this->input->post('catatan'),
        );
        
        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();
            $data['image'] = $image;
        }
        
        $this->Upload_paket->insert($data);
        redirect('Paket', $data);
    }

    public function edit($id)
    {
        if($this->session->userdata('akses')=='1')
        {
            $data['upload'] = $this->Upload_paket->get_by_id($id);
            $this->load->view('adminpromo/Header', $data);
            $this->load->view('adminpromo/Update_paket', $data);
            $this->load->view('adminpromo/Footer', $data);

        }else{
            $this->load->view('errors/403');
            
         }
        
    }

    public function update()
    {
        $id = $this->input->post('id');
        $namapaket = $this->input->post('namapaket');
        $detailpaket = $this->input->post('detailpaket');
        $hargatermasuk = $this->input->post('hargatermasuk');
        $hargatidaktermasuk = $this->input->post('hargatidaktermasuk');
        $catatan = $this->input->post('catatan');
       

        

        $data = array(
           'namapaket' => $namapaket,
           'detailpaket' => $detailpaket,
           'hargatermasuk' => $hargatermasuk,
           'hargatidaktermasuk' => $hargatidaktermasuk,
           'catatan' => $catatan,
        );

        if (!empty($_FILES['image']['name'])) {
            $image = $this->_do_upload();

            $upload = $this->Upload_paket->get_by_id($id);
            if (file_exists('assets/upload/images/'.$upload->image) && $upload->image) {
                unlink('assets/upload/images/'.$upload->image);
            }

            $data['image'] = $image;
        }

        $this->Upload_paket->update($data, $id);
        redirect('Paket');
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
            redirect('Paket');
        }
        return $this->upload->data('file_name');
    }

    public function delete($id)
    {
        $upload = $this->Upload_paket->get_by_id($id);
        if (file_exists('assets/upload/images/'.$upload->image) && $upload->image) {
            unlink('assets/upload/images/'.$upload->image);
        }
        $this->Upload_paket->delete($id);
        redirect('Paket');
    }

     
}
