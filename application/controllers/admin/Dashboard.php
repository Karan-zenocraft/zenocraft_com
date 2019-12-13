<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('adid')) {
            redirect('admin/login');
        }

    }

    public function index()
    {
        $this->load->model('Admin_Dashboard_Model');
        $users = $this->Admin_Dashboard_Model->totalcount();
        $portfolios = $this->Admin_Dashboard_Model->totalcountPortfolio();
        $categories = $this->Admin_Dashboard_Model->totalcountCategory();
        $careers = $this->Admin_Dashboard_Model->totalcountCareers();
        $hires = $this->Admin_Dashboard_Model->totalcountHire();

        $this->load->view('admin/dashboard', ['users' => $users, 'portfolios' => $portfolios, 'categories' => $categories, 'careers' => $careers, 'hires' => $hires]);

    }

}
