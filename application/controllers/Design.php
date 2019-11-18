<?php

class Design extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function ui_ux()
    {
        $this->load->view('design/ui_ux');
    }

    public function logo_design()
    {
        $this->load->view('design/logo_design');
    }
    public function responsive_web_design()
    {
        $this->load->view('design/responsive_web_design');
    }

}
