<?php
class Template
{
    //ci instance
    private $CI;
    //template Data
    public $template_data = array();

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function set($content_area, $value)
    {
        $this->template_data[$content_area] = $value;
    }

    public function load($template = '', $name = '', $view = '', $view_data = array(), $return = false)
    {
        $this->set($name, $this->CI->load->view($view, $view_data, true));

        $this->CI->load->view('layouts/' . $template, $this->template_data);
    }

}
