<?php

class Peopels_model extends CI_Model
{
    public function getAllPeopels()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function countPeopelsRow()
    {
        return $this->db->count_all_results('peoples');
    }
    public function getPeopels($limit, $start, $keyword = null)
    {
        // if ($keyword) {
        // }
        $this->db->like('name', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('peoples', $limit, $start)->result_array();
    }
}
