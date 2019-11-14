<?php

class EmergingTechnologies extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function block_chain_technologies()
    {
        $this->load->view('emerging-technologies/block_chain_technologies');
    }

    public function internet_of_things()
    {
        $this->load->view('emerging-technologies/internet_of_things');
    }
    public function augmented_reality()
    {
        $this->load->view('emerging-technologies/augmented_reality');
    }

}
