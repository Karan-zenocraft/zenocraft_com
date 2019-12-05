<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_Model extends CI_Model
{
    public function getCategoryDetails()
    {
        $query = $this->db->select('title,id')
            ->get('category');
        return $query->result();
    }
//Getting particular user deatials on the basis of id
    public function getDetailsById($uid)
    {
        $ret = $this->db->select('title,id')
            ->where('id', $uid)
            ->get('category');
        return $ret->row();
    }

    public function addDetails($data)
    {
        $ret = $this->db->insert('category', $data);
        return $ret;
    }

    // Function for use deletion
    public function delete($uid)
    {
        $sql_query = $this->db->where('id', $uid)
            ->delete('category');
    }

    public function updatecategoryDetail($data, $uid)
    {
        $ret = $this->db->where('id', $uid)->update('category', $data);
        return $ret;
    }

    public function get_category_list()
    {
        $this->db->from('category');
        $this->db->order_by('id');
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row['id']] = $row['title'];
            }
        }

        return $return;
    }
}
