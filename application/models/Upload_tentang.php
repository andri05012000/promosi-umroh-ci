<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_tentang extends CI_Model
{
    private $table = 'tentangkami';
    private $id = 'tentangkami.idtentangkami';
    

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
