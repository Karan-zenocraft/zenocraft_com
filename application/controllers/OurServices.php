<?php

class OurServices extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function application_services()
    {
        $this->load->view('our-services/application_services');
    }

    public function professional_services()
    {
        $this->load->view('our-services/professional_services');
    }
    public function infrastructure_services()
    {
        $this->load->view('our-services/infrastructure_services');
    }

}
