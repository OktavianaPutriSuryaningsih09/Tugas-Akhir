<?php

class Model_user extends CI_Model
{
    public function tampil_datauser()
    {
        return $this->db->get('tb_user');
    }

    public function hapus_datauser($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_user($id)
    {
        return $this->db->get_where('tb_user', array('id' => $id))->row_array();
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_user', $data);
    }
    public function detail_user($id)
    {
        $result = $this->db->where('id', $id)->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
