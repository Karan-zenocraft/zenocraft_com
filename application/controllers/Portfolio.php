<?php

class Portfolio extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_Model');
        $this->load->model('Portfolio_Model');
    }

    public function index()
    {
        $categoryList = $this->Category_Model->getCategoryDetails();
        $allportfolioList = $this->Portfolio_Model->getPortfolioDetails();
        $this->load->view('portfolios/portfolio', ['categoryList' => $categoryList, 'allportfolioList' => $allportfolioList]);
    }

}
