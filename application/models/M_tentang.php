<?php 
 
class M_tentang extends CI_Model{
	
	function get_all_produk(){
		$hasil=$this->db->get('tentangkami');
		return $hasil->result();
	}

	
}