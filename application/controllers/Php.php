<?php

class Php extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function yii()
    {
        $this->load->view('php/yii');
    }

    public function laravel()
    {
        $this->load->view('php/laravel');
    }
    public function codeigniter()
    {
        $this->load->view('php/codeigniter');
    }
    public function wordpress()
    {
        $this->load->view('php/wordpress');
    }

}
