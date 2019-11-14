<?php

class Industries extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function financialindustries()
    {
        $this->load->view('industries/financial-industries');
    }

    public function governmentbodies()
    {
        $this->load->view('industries/government-bodies');
    }
    public function educationindustry()
    {
        $this->load->view('industries/education-industry');
    }
    public function retailindustries()
    {
        $this->load->view('industries/retail-industries');
    }
    public function teleindustries()
    {
        $this->load->view('industries/tele-industries');
    }
    public function healthcareindustries()
    {
        $this->load->view('industries/healthcare-industries');
    }
    public function manufacuringindustries()
    {
        $this->load->view('industries/manufacuring-industries');
    }
}
