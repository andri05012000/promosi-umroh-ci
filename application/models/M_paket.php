<?php 
 
class M_paket extends CI_Model{
	
	function get_all_produk(){
		$hasil=$this->db->get('paket');
		return $hasil->result();
	}

	
}