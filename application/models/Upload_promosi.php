<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_promosi extends CI_Model
{
    private $table = 'promosi';
    private $id = 'promosi.idpromosi';
    

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($data, $id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);

        return $this->db->affected_rows();
    }

     public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}

/* End of file Upload_model.php */
