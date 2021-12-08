<?php
class M_admin extends CI_Model{
	
		function auth(){
        $email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$pass=htmlspecialchars($this->input->post('pass',TRUE),ENT_QUOTES);
		
		$query=$this->db->query("SELECT * FROM admin WHERE email='".$email."' AND pass='".MD5($pass)."'");
		foreach ($query->result() as $row) {
            $this->session->set_userdata('submit',TRUE);
            $this->session->set_userdata('id',$row->idadmin);
            $this->session->set_userdata('email',$row->email);
			if ($row->level=='Admin') {
				$this->session->set_userdata('akses','1');
				redirect('Beranda');
			}else{
				echo "keluar";
			}
		}
		echo $this->session->set_flashdata('msg','Email Atau Password Salah');
		redirect(base_url());
    }
}

