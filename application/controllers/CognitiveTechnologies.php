<?php

class CognitiveTechnologies extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function machine_learning()
    {
        $this->load->view('cognitive-technologies/machine_learning');
    }

    public function data_science()
    {
        $this->load->view('cognitive-technologies/data_science');
    }
    public function deep_learning()
    {
        $this->load->view('cognitive-technologies/deep_learning');
    }
    public function artificial_intelligence()
    {
        $this->load->view('cognitive-technologies/artificial_intelligence');
    }
    public function predective_analytics()
    {
        $this->load->view('cognitive-technologies/predective_analytics');
    }

}
