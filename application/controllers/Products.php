<?php

class Products extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function supply_chain()
    {
        $this->load->view('products/supply_chain');
    }
    public function churn_predict()
    {
        $this->load->view('products/churn_predict');
    }
    public function my_view_security()
    {
        $this->load->view('products/my_view_security');
    }
    public function vrdrive_walkthrough()
    {
        $this->load->view('products/vrdrive_walkthrough');
    }
    public function degree360_hrms()
    {
        $this->load->view('products/degree360_hrms');
    }
    public function jakaru_postgres_bdr()
    {
        $this->load->view('products/jakaru_postgres_bdr');
    }
    public function polyglot_dbmonitor()
    {
        $this->load->view('products/polyglot_dbmonitor');
    }
    public function warehouse_controller()
    {
        $this->load->view('products/warehouse_controller');
    }
}
