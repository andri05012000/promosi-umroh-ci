<?php 
 
class M_beranda extends CI_Model{
	
	function get_all_produk(){
		$hasil=$this->db->get('promosi');
		return $hasil->result();
	}

	function get_all_berita(){
		$hasil=$this->db->get('berita');
		return $hasil->result();

	}
}