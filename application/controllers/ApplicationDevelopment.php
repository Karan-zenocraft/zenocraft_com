<?php

class ApplicationDevelopment extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function application_integration()
    {
        $this->load->view('application-development/application_integration');
    }

    public function custom_application_development()
    {
        $this->load->view('application-development/custom_application_development');
    }
    public function legacy_application_transfromation()
    {
        $this->load->view('application-development/legacy_application_transfromation');
    }

}
