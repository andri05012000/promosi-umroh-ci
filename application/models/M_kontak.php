<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kontak extends CI_Model
{
    private $table = 'hubungikami';
    private $id = 'hubungikami.idhubungikami';

     public function get_all()
    {
        return $this->db->get($this->table)->result();
    }


     public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}