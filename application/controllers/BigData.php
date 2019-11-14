<?php

class BigData extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function businessintelligence()
    {
        $this->load->view('big-data/business_intelliegence');
    }

    public function sapcloud()
    {
        $this->load->view('big-data/sap_cloud');
    }
    public function dataquality()
    {
        $this->load->view('big-data/data_quality');
    }

}
