<?php
class HireModel extends CI_Model
{
    protected $table = 'hire';

    public function get_count($hire_type)
    {
        return $this->db->count_all_results($this->table);
    }

    public function getOpenings($limit, $start, $hire_type)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function getHireDetails()
    {
        $query = $this->db->select('technology,description,id')
            ->get('hire');
        return $query->result();
    }
//Getting particular user deatials on the basis of id
    public function getDetailsById($uid)
    {
        $ret = $this->db->select('technology,description,id')
            ->where('id', $uid)
            ->get('hire');
        return $ret->row();
    }

    public function addDetails($data)
    {
        $ret = $this->db->insert('hire', $data);
        return $ret;
    }

    // Function for use deletion
    public function delete($uid)
    {
        $sql_query = $this->db->where('id', $uid)
            ->delete('hire');
    }

    public function updateHireDetail($data, $uid)
    {
        $ret = $this->db->where('id', $uid)->update('hire', $data);
        return $ret;
    }
}
