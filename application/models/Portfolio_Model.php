<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio_Model extends CI_Model
{
    protected $table = "portfolio";
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
    public function getPortfolioByCategory($category)
    {
        if ($category == 1) {
            $ret = $this->db->select('title,category,description,image,id,skill')
                ->get('portfolio');
        } else {
            $ret = $this->db->select('title,category,description,image,id,skill')
                ->where('category', $category)
                ->get('portfolio');
        }
        return $ret->result();
    }
    public function get_count($category)
    {
        if ($category == 1) {
            return $this->db->count_all_results($this->table);
        } else {
            return $this->db->where('category', $category)->count_all_results($this->table);
        }
    }

    public function getPortfolios($limit, $start, $category)
    {
        if ($category == 1) {
            $this->db->limit($limit, $start);
            $query = $this->db->get($this->table);
        } else {
            $this->db->limit($limit, $start);
            $query = $this->db->get_where($this->table, ['category' => $category]);
        }
        return $query->result();
    }
    public function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from($this->table);

        if (array_key_exists("where", $params)) {
            foreach ($params['where'] as $key => $val) {
                $this->db->where($key, $val);
            }
        }

        if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
            $result = $this->db->count_all_results();
        } else {
            if (array_key_exists("id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')) {
                if (!empty($params['id'])) {
                    $this->db->where('id', $params['id']);
                }
                $query = $this->db->get();
                $result = $query->row_array();
            } else {
                $this->db->order_by('id', 'ASC');
                if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit'], $params['start']);
                } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit']);
                }

                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : false;
            }
        }

        // Return fetched data
        return $result;
    }
}
