<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio_Model extends CI_Model
{
    public function getPortfolioDetails()
    {
        $query = $this->db->select('title,category,description,image,id,skill')
            ->get('portfolio');
        return $query->result();
    }
//Getting particular user deatials on the basis of id
    public function getDetailsById($uid)
    {
        $ret = $this->db->select('title,category,description,image,id,skill')
            ->where('id', $uid)
            ->get('portfolio');
        return $ret->row();
    }

    public function addDetails($data)
    {
        $ret = $this->db->insert('portfolio', $data);
        return $ret;
    }

    // Function for use deletion
    public function delete($uid)
    {
        $sql_query = $this->db->where('id', $uid)
            ->delete('portfolio');
    }

    public function updatePortfolioDetail($data, $uid)
    {
        $ret = $this->db->where('id', $uid)->update('portfolio', $data);
        return $ret;
    }
}
