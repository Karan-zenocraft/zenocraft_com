<?php
class CareersModel extends CI_Model
{
    protected $table = 'careers';

    public function get_count($hire_type)
    {
        return $this->db->where('hire_type', $hire_type)->count_all_results($this->table);
    }

    public function getOpenings($limit, $start, $hire_type)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where($this->table, ['hire_type' => $hire_type]);
        return $query->result();
    }

    public function getCareerDetails()
    {
        $query = $this->db->select('title,job_id,description,location,id,type')
            ->get('careers');
        return $query->result();
    }
//Getting particular user deatials on the basis of id
    public function getDetailsById($uid)
    {
        $ret = $this->db->select('title,job_id,description,location,id,type')
            ->where('id', $uid)
            ->get('careers');
        return $ret->row();
    }

    public function addDetails($data)
    {
        $ret = $this->db->insert('careers', $data);
        return $ret;
    }

    // Function for use deletion
    public function delete($uid)
    {
        $sql_query = $this->db->where('id', $uid)
            ->delete('careers');
    }

    public function updateCareerDetail($data, $uid)
    {
        $ret = $this->db->where('id', $uid)->update('careers', $data);
        return $ret;
    }

}
