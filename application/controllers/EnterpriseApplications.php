<?php

class EnterpriseApplications extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function oracle()
    {
        $this->load->view('enterprise-applications/oracle');
    }

    public function sap()
    {
        $this->load->view('enterprise-applications/sap');
    }
    public function odoo()
    {
        $this->load->view('enterprise-applications/odoo');
    }
    public function oracle_apex()
    {
        $this->load->view('enterprise-applications/oracle_apex');
    }

}
