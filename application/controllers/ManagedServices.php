<?php

class ManagedServices extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function application_management()
    {
        $this->load->view('managed-services/application_management');
    }

    public function database_management()
    {
        $this->load->view('managed-services/database_management');
    }
    public function infastructure_management()
    {
        $this->load->view('managed-services/infastructure_management');
    }

}
