<?php

class Models extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function onshore()
    {
        $this->load->view('models/onshore');
    }

    public function bot()
    {
        $this->load->view('models/bot');
    }

    public function offshore()
    {
        $this->load->view('models/offshore');
    }

    public function hybrid()
    {
        $this->load->view('models/hybrid');
    }
}
