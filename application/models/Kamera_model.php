<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamera_model extends CI_Model {

    public function getTotal()
    { return $this->db->count_all('kamera'); }

    public function list($limit, $start)
    {
        $query = $this->db->get('kamera', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function insert($data = [])
    {
        return $this->db->insert('kamera', $data);
    }

    public function show($id)
    {
        $this->db->where('id_kamera',$id);
        return $this->db->get('kamera')->row();
    }

    public function update($id, $data)
    {
        // TODO: set data yang akan di update
        // https://www.codeigniter.com/userguide3/database/query_builder.html#updating-data

        $foto=$this->db->where('id_kamera', $id);
        $this->db->update('kamera', $data);
        return result;
    }
    
    public function delete($id)
    {
        // TODO: tambahkan logic penghapusan data
        $this->db->where('id_kamera', $id);
        $this->db->delete('kamera');
    }
}

/* End of file ModelName.php */