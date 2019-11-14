<?php

class QualityEngineering extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function automation()
    {
        $this->load->view('quality-engineering/automation');
    }

    public function functional_engineering()
    {
        $this->load->view('quality-engineering/functional_engineering');
    }
    public function performance_engineering()
    {
        $this->load->view('quality-engineering/performance_engineering');
    }

}
