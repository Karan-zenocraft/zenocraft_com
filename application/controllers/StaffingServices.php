<?php

class StaffingServices extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function contingent_staffing()
    {
        $this->load->view('staffing-services/contingent_staffing');
    }

    public function recruitment_process()
    {
        $this->load->view('staffing-services/recruitment_process');
    }
    public function msp()
    {
        $this->load->view('staffing-services/msp');
    }
    public function project_staffing()
    {
        $this->load->view('staffing-services/project_staffing');
    }

}
