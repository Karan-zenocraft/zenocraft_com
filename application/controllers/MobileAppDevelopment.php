<?php

class MobileAppDevelopment extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function ios()
    {
        $this->load->view('mobile_app_development/ios');
    }

    public function android()
    {
        $this->load->view('mobile_app_development/android');
    }
    public function flutter()
    {
        $this->load->view('mobile_app_development/flutter');
    }
    public function react_native()
    {
        $this->load->view('mobile_app_development/react_native');
    }

}
