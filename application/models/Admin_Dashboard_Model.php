<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_Dashboard_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adid')) {
            redirect('admin/login');
        }

    }

    public function totalcount()
    {
        $query = $this->db->select('id')
            ->get('tblusers');
        return $query->num_rows();
    }

    public function totalcountPortfolio()
    {
        $query = $this->db->select('id')
            ->get('portfolio');
        return $query->num_rows();
    }
    public function totalcountCategory()
    {
        $query = $this->db->select('id')
            ->get('category');
        return $query->num_rows();
    }
    public function totalcountCareers()
    {
        $query = $this->db->select('id')
            ->get('careers');
        return $query->num_rows();
    }
    public function totalcountHire()
    {
        $query = $this->db->select('id')
            ->get('hire');
        return $query->num_rows();
    }

    public function countlastsevendays()
    {
        $query2 = $this->db->select('id')
            ->where('regDate >=  DATE(NOW()) - INTERVAL 10 DAY')
            ->get('tblusers');
        return $query2->num_rows();
    }

    public function countthirtydays()
    {
        $query3 = $this->db->select('id')
            ->where('regDate >=  DATE(NOW()) - INTERVAL 30 DAY')
            ->get('tblusers');
        return $query3->num_rows();
    }
}
