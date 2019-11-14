<?php

class Portfolios extends MY_Controller
{
    //$this->load->model('helloworld_model');
    //  $data['result'] = $this->helloworld_model->getData();
    public function __construct()
    {
        parent::__construct();
    }

    public function php()
    {
        $this->load->view('portfolios/php');
    }
    public function ios()
    {
        $this->load->view('portfolios/ios');
    }
    public function java()
    {
        $this->load->view('portfolios/java');
    }
    public function asp_net()
    {
        $this->load->view('portfolios/asp_net');
    }
    public function android()
    {
        $this->load->view('portfolios/android');
    }
    public function jakaru_postgres_bdr()
    {
        $this->load->view('portfolios/jakaru_postgres_bdr');
    }
    public function polyglot_dbmonitor()
    {
        $this->load->view('portfolios/polyglot_dbmonitor');
    }
    public function warehouse_controller()
    {
        $this->load->view('portfolios/warehouse_controller');
    }
}
