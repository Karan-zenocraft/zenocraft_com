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

}
