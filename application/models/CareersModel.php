<?php
class CareersModel extends CI_Model
{
    protected $table = 'careers';

    public function get_count()
    {
        return $this->db->count_all($this->table);
    }

    public function getOpenings($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}
