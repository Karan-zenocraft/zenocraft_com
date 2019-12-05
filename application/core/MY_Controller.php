
<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function _output($content)
    {
        // Load the base template with output content available as $content
        $data['content'] = &$content;
        echo ($this->load->view('base', $data, true));
    }

}

class Admin_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function _output($content)
    {
        // Load the base template with output content available as $content
        $data['content'] = &$content;
        echo ($this->load->view('admin/admin_base', $data, true));
    }
}

class Public_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}